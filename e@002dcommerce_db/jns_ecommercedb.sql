SELECT 
products.id as id, products.name as name, images.file_path as image, products.description as description, products.price as price
FROM products_has_categories 
LEFT JOIN products ON products.id = products_has_categories.product_id 
LEFT JOIN categories ON categories.id = products_has_categories.category_id 
LEFT JOIN images ON products.image_id = images.id
WHERE name LIKE '%%' AND  category LIKE '%Marvel%' 
ORDER BY id ASC
LIMIT 0, 5 
