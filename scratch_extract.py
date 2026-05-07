import fitz
import os

pdf_path = r"C:\xampp2\htdocs\Furniture\public\images\2025_Spec_Book.pdf"
output_dir = r"C:\xampp2\htdocs\Furniture\public\images\extracted"

doc = fitz.open(pdf_path)
page_index = 15 # Page 16
page = doc.load_page(page_index)
images = page.get_images(full=True)

print(f"Page {page_index+1} has {len(images)} images")

for i, img in enumerate(images):
    xref = img[0]
    base_image = doc.extract_image(xref)
    image_bytes = base_image["image"]
    image_ext = base_image["ext"]
    filename = f"page{page_index+1}_img{i}.{image_ext}"
    with open(os.path.join(output_dir, filename), "wb") as f:
        f.write(image_bytes)
    print(f"Saved {filename}")

text = page.get_text()
with open(os.path.join(output_dir, f"page{page_index+1}_text.txt"), "w", encoding="utf-8") as f:
    f.write(text)
