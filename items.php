<?php
require('inc/connect.php');
require('inc/get-cat.php');
$pageTitle = $category_name;
include("inc/header.php");
include("inc/logo.php");

?>
<div class="container space">
	<div class="row">
		<div class="container">
      <div class="col-md-6 col-md-offset-3 text-center  inside-headline">
            <h2 class="text-center"><?php echo $pageTitle ?></h2>
            <hr >
          </div>
    </div>
   
	</div>

	<div class="row">
	
  <?php foreach ($products as $product ) : ?>

     <div  class="items col-sm-6 col-md-4 text-center">
      <a href="item.php?product_id=<?php echo $product['productID'];  ?>" title="<?php echo $product['productName'];  ?>">
        <div class="items_header">
          <h2><?php echo $product['productName'];  ?></h2>
          <span class="dash"></span>
          <p><?php echo $product['productCode'];  ?></p>
          <p><?php echo $product['listPrice'];  ?>"</p>             
          <h3>more about this painting <i class="fa fa-chevron-circle-right"></i> </h3>
        </div>
        <div class="items_thumb">

          <img src="lg_images/<?php echo $product['productID'];  ?>.<?php echo $product['file_ext'];  ?>" class="fade_in img-responsive" alt="<?php echo $product['productName']; ?> |<?php echo $product['productCode'];  ?>">
        </div>
      </a>
    </div>
<?php endforeach; ?>

  	</div>
</div>
<?php

include("inc/footer.php")

?>