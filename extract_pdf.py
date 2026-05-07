import fitz
import os
import json
import re

# Paths
pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"
output_img_dir = r"C:\xampp2\htdocs\Furniture\public\images\products"
json_output = r"C:\xampp2\htdocs\Furniture\public\data\products.json"

os.makedirs(output_img_dir, exist_ok=True)
os.makedirs(os.path.dirname(json_output), exist_ok=True)

def extract_door_styles(doc):
    page_9 = doc.load_page(8)
    text = page_9.get_text()
    
    # Get images from page 9
    image_list = page_9.get_images(full=True)
    # Sort images by position (4 rows of 3)
    img_info = []
    for img in image_list:
        xref = img[0]
        rects = page_9.get_image_rects(xref)
        if rects:
            img_info.append({"xref": xref, "rect": rects[0]})
    img_info.sort(key=lambda x: (x["rect"].y0, x["rect"].x0))

    styles = []
    codes_pattern = re.finditer(r"Style Code[^:]*: ([A-Z]+)", text)
    found_codes = [m.group(1).strip() for m in codes_pattern]
    
    # Map images to codes based on order
    for i, code in enumerate(found_codes):
        if i < len(img_info):
            base_image = doc.extract_image(img_info[i]["xref"])
            image_filename = f"door_{code.lower()}.png"
            with open(os.path.join(output_img_dir, image_filename), "wb") as f:
                f.write(base_image["image"])
                
        # Get details
        start_pos = text.find(f"Style Code Code de Style: {code}")
        prefix = text[:start_pos].strip().split("\n")
        name = prefix[-1] if not prefix[-1].startswith("Material") else prefix[-2]
        
        suffix = text[start_pos:].strip().split("\n")
        material = "N/A"
        finish = "N/A"
        for line in suffix[:5]:
            if "Material" in line: material = line.split(":")[-1].strip()
            if "Finish" in line: finish = line.split(":")[-1].strip()

        styles.append({
            "name": name.strip(),
            "code": code,
            "material": material,
            "finish": finish,
            "image": f"door_{code.lower()}.png"
        })
    return styles

def extract_category_products(doc, category_name, start_page, end_page):
    products = []
    for i in range(start_page - 1, min(end_page, len(doc))):
        page = doc.load_page(i)
        blocks_dict = page.get_text("dict")["blocks"]
        
        image_list = page.get_images(full=True)
        img_info = []
        for img_index, img in enumerate(image_list):
            xref = img[0]
            rects = page.get_image_rects(xref)
            if rects:
                rect = rects[0]
                if rect.width > 40 and rect.height > 40:
                    img_info.append({"xref": xref, "rect": rect, "index": img_index})

        img_info.sort(key=lambda x: (x["rect"].y0, x["rect"].x0))
        
        for img in img_info:
            base_image = doc.extract_image(img["xref"])
            image_filename = f"{category_name.lower().replace(' ', '_')}_p{i+1}_i{img['index']}.{base_image['ext']}"
            with open(os.path.join(output_img_dir, image_filename), "wb") as f:
                f.write(base_image["image"])
            
            product_name = "Standard Cabinet"
            codes = []
            
            for b in blocks_dict:
                if "lines" not in b: continue
                for line in b["lines"]:
                    for span in line["spans"]:
                        txt = span["text"].strip()
                        # Better code matching
                        if re.match(r"^[A-Z]{1,2}[0-9]{2,}[A-Z]*$", txt):
                            if abs(span["bbox"][1] - img["rect"].y1) < 250 or abs(span["bbox"][3] - img["rect"].y0) < 250:
                                codes.append(txt)
                        
                        if txt.isupper() and len(txt) > 5 and "CABINET" not in txt:
                            if 0 < (img["rect"].y0 - span["bbox"][3]) < 120:
                                product_name = txt

            if codes:
                products.append({
                    "name": product_name,
                    "image": image_filename,
                    "codes": list(set(codes))
                })
                
    return products

def run():
    doc = fitz.open(pdf_path)
    data = {
        "door_styles": extract_door_styles(doc),
        "categories": [
            {"name": "Base Cabinets", "products": extract_category_products(doc, "Base", 16, 23)},
            {"name": "Tall Pantries", "products": extract_category_products(doc, "Tall", 24, 25)},
            {"name": "Wall Cabinets", "products": extract_category_products(doc, "Wall", 26, 39)},
            {"name": "Vanities", "products": extract_category_products(doc, "Vanities", 40, 43)},
            {"name": "Closets", "products": extract_category_products(doc, "Closets", 44, 47)},
            {"name": "Accessories", "products": extract_category_products(doc, "Accessories", 48, 61)}
        ]
    }
    
    with open(json_output, "w", encoding="utf-8") as f:
        json.dump(data, f, indent=4)
    print(f"Extraction complete: {len(data['door_styles'])} doors, {sum(len(c['products']) for c in data['categories'])} products.")

if __name__ == "__main__":
    run()
