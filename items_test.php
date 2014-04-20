<?php
require('inc/connect.php');
require('inc/get-cat.php');
$pageTitle = $category_name;
include("inc/header.php");
include("inc/logo.php");

?>
<div class="container space">
	<div class="row">
		<h2 class="text-center inside-headline"><?php echo $pageTitle ?></h2>
	</div>

	<div class="row">
	
  <?php foreach ($products as $product ) : ?>

     <div  class="items col-sm-6 col-md-4">
      <a href="item.php?product_id=<?php echo $product['productID'];  ?>" title="<?php echo $product['productName'];  ?>">
        <div class="items_header">
          <h2><?php echo $product['productName'];  ?></h2>
          <span class="dash"></span>
          <p><?php echo $product['productCode'];  ?></p>
          <p><?php echo $product['listPrice'];  ?></p>             
          <h3>more about this painting ></h3>
        </div>
        <div class="items_thumb img-container centerer">
          <img src="lg_images/<?php echo $product['productID'];  ?>.<?php echo $product['file_ext'];  ?>" class="fade_in img-responsive centered" alt="<?php echo $product['productName']; ?> |<?php echo $product['productCode'];  ?>">
        </div>
      </a>
    </div>
<?php endforeach; ?>

  	</div>
</div>
<?php

include("inc/footer.php")

?>