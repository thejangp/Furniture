import fitz
pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"

def inspect_page(page_num):
    doc = fitz.open(pdf_path)
    page = doc.load_page(page_num - 1)
    image_list = page.get_images(full=True)
    print(f"--- Page {page_num} ---")
    img_info = []
    for i, img in enumerate(image_list):
        xref = img[0]
        rects = page.get_image_rects(xref)
        if rects:
            print(f"Image {i} (xref {xref}): {rects[0]}")
            # Filter by size to see what's likely a product
            if rects[0].width > 40 and rects[0].height > 40:
                img_info.append({"idx": i, "rect": rects[0]})
    
    img_info.sort(key=lambda x: x["rect"].y0)
    print("Sorted product-like images:")
    for i, info in enumerate(img_info):
        print(f"  Pos {i}: Image Index {info['idx']} at y={info['rect'].y0}")

if __name__ == "__main__":
    inspect_page(40)
    inspect_page(41)
    inspect_page(42)
