<?php 
$pageTitle = "Home";
include('inc/connect.php');
include("inc/header.php");
?>
  
<!-- Header Area -->

<div class="header">
  <div id="top" >
    <div class="headline">
      <div class="container">
        <div class="row">

        <div class="col-md-6 col-small-12"><h1 class="target">Je<span>f</span>frey<br />Smith</h1>
              <h3 class="target">Pastels</h3></div>
        
      </div>
      </div>
    </div>
  </div>  
</div>

    
<!-- Header Area -->

    <!-- Portfolio -->
    <div id="portfolio" class="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Recent Paintings</h2>
          
          </div>
        </div>
        <div class="row">
          <div class="col-sm-offset-1 col-sm-10">
          <?php 
          $i = 0;
          $results = $db->query("SELECT * FROM products ORDER BY RAND() LIMIT 6");

          foreach ($results as $result) : 
            if ($i>5) {
              break;}?>
          <div class="col-md-4 col-sm-6 text-center portfolio-item-wrapper">
            <div class="portfolio-item">
              <a href="item.php?product_id=<?php echo $result['productID'];  ?>"><img class="img-portfolio img-responsive" src="md_images/<?php echo $result['productID'];  ?>.<?php echo $result['file_ext'];  ?>"></a>
             
            </div>
            <h4><?php echo $result['productName'];  ?></h4>
          </div>

        <?php 
        $i++;
        endforeach; ?>
      </div>

        </div>
      </div>
    </div>
    <!-- /Portfolio -->
  
    <!-- why pastels -->
      <div id="whypastels" class="whypastels">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>why pastels?</h2>
          </div>
        </div>
      </div>
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <img src="img/pastel-box.jpg" alt="">
          </div>
          <div class="container">
            <div class="col-sm-12 col-md-6 quote">
                <p>Pastel is one of the purest forms of painting &mdash; you work with your hands, sticks of almost straight pigment and little else!</p>
               
              </div>
              <div class="col-sm-12 col-md-6 quote">
                 <p>Working with pastels, you learn a lot about color. There's really no need to blend pastel strokes to create colors or to smooth transitions. Applying one color next to another, our eyes do the job of blending for us. What appears to be individual strokes of color upclose becomes blended colors or gradients when you step back.</p>
              </div>
            </div>
        </div>
        <div class="row">
          <div class="container">
            <div class="col-sm-12 col-md-6 quote">
              <p>I rarely find the actual colors that I need amongst the pastel sticks in my box. I work towards the desired end result by using overlapping strokes of different colors. My goal when working with pastel is to celebrate the medium and have the surface of my paintings made up of several different colors.</p>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 pull-right" id="green-box">
            <img src="img/pastels.png" alt="Jeffrey Smith | Green Pastels">
          </div>
          
        </div>

      </div>
    


    <!-- /why pastels -->

  
    <!-- Painting Categories -->



<div class="still-life category-wrapper">
  <div class="category-inner-wrapper">
    <h2>still life</h2>
    <p><a href="items.php?category_id=12">view paintings</a></p>
    
  </div>
</div>
<div class="portrait category-wrapper">
  <div class="category-inner-wrapper">
    <h2>portrait</h2>
    <p><a href="items.php?category_id=10">view paintings</a></p>
  </div>
</div>
<div class="landscape category-wrapper">
  <div  class="category-inner-wrapper">
    <h2>landscape</h2>
    <p><a href="items.php?category_id=11">view paintings</a></p>
  </div>
</div>  

    <!-- /Painting Categories  -->






    <!-- Contact Section -->
    <div class="call-to-action" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            
            
            <?php
            include("inc/contact.php");
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Section -->

   
  
    
<?php

include("inc/footer.php");

?>