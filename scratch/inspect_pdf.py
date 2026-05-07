import fitz
import re

pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"

def inspect_pages(start_page, end_page):
    doc = fitz.open(pdf_path)
    for i in range(start_page - 1, end_page):
        print(f"--- Page {i+1} ---")
        page = doc.load_page(i)
        text = page.get_text("text")
        print(text)
        
        image_list = page.get_images(full=True)
        print(f"Found {len(image_list)} images")
        for img_index, img in enumerate(image_list):
            xref = img[0]
            rects = page.get_image_rects(xref)
            if rects:
                print(f"  Image {img_index} (xref {xref}): {rects[0]}")

if __name__ == "__main__":
    # Inspect vanity pages (usually around 40+)
    print("INSOCEPTING VANITIES")
    inspect_pages(40, 43)
    
    # Inspect base cabinets
    # print("INSPECTING BASE CABINETS")
    # inspect_pages(16, 23)
