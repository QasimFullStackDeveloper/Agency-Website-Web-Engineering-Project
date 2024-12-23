<?php
$sql = "SELECT 
    b.blog_image,
    b.blog_heading,
    b.blog_description,
    c1.category_name AS category1,
    c2.category_name AS category2
FROM 
    get_blogs b
LEFT JOIN 
    get_category c1 ON b.category1_id = c1.category_id
LEFT JOIN 
    get_category c2 ON b.category2_id = c2.category_id
WHERE 
    b.is_active = 1 AND b.is_deleted = 0;";
// echo "Blogs Cards Coming From DB At Runtime";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
