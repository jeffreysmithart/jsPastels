<?php
require('authenticate.php');

    require_once('database.php');

    // Get all categories
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $categories = $db->query($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Categories</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
   <script type="text/javascript">
   function ckdelete()
   {
	   var r = confirm("Sure you want to delete this record?");
	   
	   if(r)
	   {
		   return true;
	   }
	   else
	   {
		   return false;
	   }
   }
   </script>
</head>

<!-- the body section -->
<body>
    <div id="page">

    <div id="header">
        <h1>Product Manager</h1>
    </div>

    <div id="main">

    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($categories as $category) : ?>
        <tr>
            <td><?php echo $category['categoryName']; ?></td>
            <td>
                <form action="delete_category.php" method="post"
                      id="delete<?php echo $category['categoryID']; ?>" onsubmit="return ckdelete();">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
                </td>
                <td>
                 <form action="edit_category_form.php" method="post"
                      id="edit_category_form">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>"/>
                    <input type="submit" value="Edit"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <br />

    <h2>Add Category</h2>
    <form action="add_category.php" method="post"
          id="add_category_form">

        <label>Name:</label>
        <input type="input" name="name" />
        <input id="add_category_button" type="submit" value="Add"/>
    </form>
    <br />
    <p><a href="index.php">List Products</a></p>
    <p><a href="user_list.php">List Users</a></p>

    </div> <!-- end main -->

    <div id="footer">
        <p>
            &copy; <?php echo date("Y"); ?>
        </p>
    </div>

    </div><!-- end page -->
</body>
</html>