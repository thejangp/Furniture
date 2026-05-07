import fitz
import re

pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"

def inspect_range(start, end):
    doc = fitz.open(pdf_path)
    for i in range(start-1, end):
        page = doc.load_page(i)
        text = page.get_text()
        image_list = page.get_images(full=True)
        print(f"Page {i+1}: {len(image_list)} images, Text snippet: {text[:200].replace('\n', ' ')}")

if __name__ == "__main__":
    print("BASE CABINETS (16-23)")
    inspect_range(16, 23)
    print("\nTALL PANTRY (24-25)")
    inspect_range(24, 25)
    print("\nWALL CABINETS (26-39)")
    inspect_range(26, 39)
