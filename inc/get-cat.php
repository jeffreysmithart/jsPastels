<?php
require('database.php');
//get all categories for dropdown menu

$query = 'select * from categories order by categoryName';
// $categories_menu holds the result set of the query.
$categories_menu = $db->query($query);

//Get category_id from url
$category_id = $_GET['category_id'];
//Get the name of the current category
$category = $db->prepare('select * from categories where categoryID=:category_id');
// Get array of categories with category_id as the index
$category->execute(array(':category_id' => $category_id));
//get the first and only row of the array
$category_row = $category->fetch();
//Get the name of the category
$category_name = $category_row['categoryName'];

//Get products by category
$products = $db->prepare('select * from products where categoryID=:category_id ORDER BY RAND() LIMIT 12');
$products->execute(array(':category_id' => $category_id));

?>