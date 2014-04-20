<?php
require('database.php');
//get all categories for dropdown menu

$query = 'select * from categories order by categoryName';
// $categories_menu holds the result set of the query.
$categories_menu = $db->query($query);

//Get product_id from url
$product_id = $_GET['product_id'];
//Get product using parameter $product_id
$product = $db->prepare('select * from categories inner join products on categories.categoryID = products.categoryID where productID=:product_id');
// convert $prodcut to array
$product->execute(array(':product_id' => $product_id));
//get first and only row of array.
$product = $product->fetch();

?>