<?php
require('database.php');
//get all categories for dropdown menu

$query = 'select * from categories order by categoryName';
// $categories_menu holds the result set of the query.
$categories_menu = $db->query($query);



?>