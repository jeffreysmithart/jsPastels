<?php
$category_id = $_GET['category_id'];
require('inc/get-product.php');
$pageTitle = $product['productName'];
include("inc/header.php");
include("inc/logo.php");

?>

<div class="space">
	<div class="containter">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
				<div class="col-md-5 col-sm-5 img-wrapper">	
					<a href="#">
						<img src="lg_images/<?php echo $product['productID'];  ?>.<?php echo $product['file_ext'];  ?>" alt="<?php echo $product['productName']; ?>" class="item-img  col-sm-12">
					</a>
				</div>
			 	<div class="col-md-7 col-sm-7 center-block">
				<h2 class="title"><?php echo $product['productName']; ?> <span class="dash"></span></h2>
				</div>
				<h5 class="materials"><?php echo $product['productCode']; ?></h5>
				<h5 class="materials"><?php echo $product['listPrice']; ?>"</h5>
				<div class="descrip"><?php echo $product['description']; ?></div>

				
					<a href="items.php?category_id=<?php echo $product['categoryID'];  ?>" class="item-return"><i class="fa fa-chevron-circle-left"></i> back to <?php echo $product['categoryName']; ?> paintings</a>
				
			<!--</div>-->





		</div>
	</div>
</div>
</div>

<?php
include("inc/related.php");
include("inc/footer.php");

?>