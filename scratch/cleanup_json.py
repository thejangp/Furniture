import json

json_path = r"C:\xampp2\htdocs\Furniture\public\data\products.json"
noise_words = {"DEPTH", "HEIGHT", "WIDTH", "PROFONDEUR", "HAUTEUR", "LARGEUR", "41", "34"}

with open(json_path, "r", encoding="utf-8") as f:
    data = json.load(f)

for category in data["categories"]:
    for product in category["products"]:
        product["codes"] = [c for c in product["codes"] if c.upper() not in noise_words and len(c) > 1]

with open(json_path, "w", encoding="utf-8") as f:
    json.dump(data, f, indent=4)

print("Cleanup complete.")
