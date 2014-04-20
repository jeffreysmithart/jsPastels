<?php
$product_id = $_GET['product_id'];
$q3 = "SELECT * FROM products WHERE productID='$product_id'";
$getCats = $db->query($q3);

foreach ($getCats as  $getCat) {
	$category_id = $getCat['categoryID'];
}


$i = 0;
$q2 = "SELECT * FROM products  WHERE categoryID= '$category_id' AND productID!='$product_id' ORDER BY RAND() LIMIT 3";
$results = $db->query($q2);

?>
<div class="gray-bar">
	<div class="container space related">
		<div class="row">
			<div class="col-md-4 col-md-offset-4 text-center">
				<h2>Related Paintings</h2>
				<hr>
			</div>
			
		</div>
		<div class="row">
			<div class="col-xs-offset-1 col-xs-10">

	<?php


foreach ($results as $result ) : 
	if ($i>2) {
		break;
	};
	?>

 	
 
			<div class="col-md-4 col-sm-6 text-center">
				<div class="portfolio-item">
				<a href="item.php?product_id=<?php echo $result['productID'];  ?>">
				<img src="md_images/<?php echo $result['productID'];  ?>.<?php echo $result['file_ext'];?>" alt="<?php echo $result['productName'];  ?>" class="img-responsive center-block img-portfolio">
				</a>
			</div>
			</div>

		<?php 
		$i++;
		endforeach; ?>

<!-- 
			<div class="col-md-4 col-sm-6">
				<a href="#">
				<img src="http://placehold.it/250x150" alt="" class="img-responsive center-block">
				</a>
			</div>

			<div class="col-md-4 col-sm-6">
				<a href="#">
				<img src="http://placehold.it/250x150" alt="" class="img-responsive center-block">
				</a>
			</div>	
			-->
		</div>
	</div>


	</div>
</div>