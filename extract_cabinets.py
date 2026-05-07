import fitz
import os
import json
import re

# Paths
pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"
output_img_dir = r"C:\xampp2\htdocs\Furniture\public\images\products"
json_output = r"C:\xampp2\htdocs\Furniture\public\data\products.json"

os.makedirs(output_img_dir, exist_ok=True)

def extract_specific_product(doc, page_num, name_filter, target_name, img_index, filename):
    page = doc.load_page(page_num - 1)
    text = page.get_text()
    blocks = page.get_text("dict")["blocks"]
    
    # Get all images and filter by size
    image_list = page.get_images(full=True)
    img_info = []
    for img in image_list:
        xref = img[0]
        rects = page.get_image_rects(xref)
        if rects:
            rect = rects[0]
            if rect.width > 40 and rect.height > 40:
                img_info.append({"xref": xref, "rect": rect})
    
    # Sort images by position (top to bottom)
    img_info.sort(key=lambda x: (x["rect"].y0, x["rect"].x0))
    
    if img_index >= len(img_info):
        print(f"Warning: Image index {img_index} out of range for page {page_num}")
        return None

    img_data = img_info[img_index]
    base_image = doc.extract_image(img_data["xref"])
    with open(os.path.join(output_img_dir, filename), "wb") as f:
        f.write(base_image["image"])
    
    # Extract codes near this image
    codes = []
    # Heuristic: codes are usually below or next to the image
    for b in blocks:
        if "lines" not in b: continue
        for line in b["lines"]:
            for span in line["spans"]:
                txt = span["text"].strip()
                # Match codes like B12, VS30, 3VDB15, etc.
                if re.match(r"^[A-Z0-9]{2,10}(-[0-9])?(/R|/L|DL/R|TDL/R)?$", txt):
                    # Check distance
                    dist = abs(span["bbox"][1] - img_data["rect"].y1)
                    if dist < 200:
                        codes.append(txt)
    
    return {
        "name": target_name,
        "image": filename,
        "codes": sorted(list(set(codes)))
    }

def extract_category_range(doc, start_page, end_page, category_prefix, target_count):
    products = []
    count = 0
    for p in range(start_page, end_page + 1):
        if count >= target_count: break
        
        page = doc.load_page(p - 1)
        blocks = page.get_text("dict")["blocks"]
        
        image_list = page.get_images(full=True)
        img_info = []
        for img in image_list:
            xref = img[0]
            rects = page.get_image_rects(xref)
            if rects:
                rect = rects[0]
                # Filter out small icons/logos
                if rect.width > 50 and rect.height > 50 and rect.y0 > 50:
                    img_info.append({"xref": xref, "rect": rect})
        
        # Sort images by position (top to bottom, then left to right)
        img_info.sort(key=lambda x: (x["rect"].y0, x["rect"].x0))
        
        for idx, img_data in enumerate(img_info):
            if count >= target_count: break
            
            filename = f"{category_prefix}_{count + 1}.png"
            base_image = doc.extract_image(img_data["xref"])
            with open(os.path.join(output_img_dir, filename), "wb") as f:
                f.write(base_image["image"])
            
            # Identify name and codes
            product_name = "Standard Cabinet"
            codes = []
            
            # Find closest text blocks
            for b in blocks:
                if "lines" not in b: continue
                for line in b["lines"]:
                    for span in line["spans"]:
                        txt = span["text"].strip()
                        # Codes
                        if re.match(r"^[A-Z]{1,2}[0-9]{2,}[A-Z0-9]*$", txt):
                            if abs(span["bbox"][1] - img_data["rect"].y1) < 150:
                                codes.append(txt)
                        # Name candidate (UPPERCASE, not a code)
                        if txt.isupper() and len(txt) > 5 and not any(c.isdigit() for c in txt[:2]):
                            if 0 < (img_data["rect"].y0 - span["bbox"][3]) < 100:
                                product_name = txt

            products.append({
                "name": product_name,
                "image": filename,
                "codes": sorted(list(set(codes)))
            })
            count += 1
            
    return products

def run():
    doc = fitz.open(pdf_path)
    
    print("Extracting Base Cabinets...")
    base_cabinets = extract_category_range(doc, 16, 23, "base_cabinet", 15)
    
    print("Extracting Tall Pantries...")
    tall_pantries = extract_category_range(doc, 24, 25, "tall_cabinet", 4)
    
    print("Extracting Wall Cabinets...")
    wall_cabinets = extract_category_range(doc, 26, 39, "wall_cabinet", 26)
    
    print("Extracting Vanities...")
    vanities = []
    # Mapping specific vanities as requested
    # 1. VANITY SINK DRAWER BASE - Page 40, Position 0
    vanities.append(extract_specific_product(doc, 40, "VANITY SINK DRAWER BASE", "VANITY SINK DRAWER BASE", 0, "vanity_cabinet_1.png"))
    # 2. VANITY SINK DRAWER BASE DRAWER COMBO - TWO DRAWERS - Page 40, Position 1
    vanities.append(extract_specific_product(doc, 40, "TWO DRAWERS", "VANITY SINK DRAWER BASE DRAWER COMBO - TWO DRAWERS", 1, "vanity_cabinet_2.png"))
    # 3. VANITY SINK DRAWER BASE DRAWER COMBO - THREE DRAWERS - Page 41, Position 0
    vanities.append(extract_specific_product(doc, 41, "THREE DRAWERS", "VANITY SINK DRAWER BASE DRAWER COMBO - THREE DRAWERS", 0, "vanity_cabinet_3.png"))
    # 4. VANITY SINK BASE - Page 41, Position 1
    vanities.append(extract_specific_product(doc, 41, "VANITY SINK BASE", "VANITY SINK BASE", 1, "vanity_cabinet_4.png"))
    # 5. VANITY DRAWER BASE - Page 42, Position 0
    vanities.append(extract_specific_product(doc, 42, "VANITY DRAWER BASE", "VANITY DRAWER BASE", 0, "vanity_cabinet_5.png"))
    
    # Filter out None results if any
    vanities = [v for v in vanities if v is not None]

    # Load current data to preserve door styles
    with open(json_output, "r", encoding="utf-8") as f:
        current_data = json.load(f)
    
    new_data = {
        "door_styles": current_data.get("door_styles", []),
        "categories": [
            {"name": "Base Cabinets", "products": base_cabinets},
            {"name": "Tall Pantries", "products": tall_pantries},
            {"name": "Wall Cabinets", "products": wall_cabinets},
            {"name": "Vanities", "products": vanities},
            # Keeping others for now or as empty placeholders if requested
            {"name": "Closets", "products": []},
            {"name": "Accessories", "products": []}
        ]
    }
    
    with open(json_output, "w", encoding="utf-8") as f:
        json.dump(new_data, f, indent=4)
    
    print("Done!")
    print(f"Base: {len(base_cabinets)}, Tall: {len(tall_pantries)}, Wall: {len(wall_cabinets)}, Vanities: {len(vanities)}")

if __name__ == "__main__":
    run()
