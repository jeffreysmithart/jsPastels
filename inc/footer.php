    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <ul class="list-inline">
              <li><a href="mailto:jeffrey@jeffreysmithdesigner.com"><i class="fa fa-envelope fa-3x"></i></a></li>
              <li><a href="https://twitter.com/jeffreysmithart"><i class="fa fa-twitter-square fa-3x"></i></a></li>
              <li><a href="http://www.pinterest.com/jeffreysmithart/"><i class="fa fa-pinterest-square fa-3x"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/jeffrey-smith/12/618/930"><i class="fa fa-linkedin-square fa-3x"></i></a></li>
              <!--<li><a href="https://www.youtube.com/user/jsmith019658"><i class="fa fa-youtube fa-3x"></i></a></li>-->
            </ul>
            <div class="top-scroll">
              <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
            </div>
            <hr>
            <p>Copyright &copy; <?php echo date(Y); ?> Jeffrey Smith</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    

   


    <script>
    function imgWidth(){
      if ($(window).width() >= 768) {
      var divWidth = $('.items_thumb').width();
      $('.items_thumb').css( 'height', divWidth );
      $('.items_thumb').css('line-height',divWidth + 'px');
      }

    };

    $(document).ready(imgWidth);   
    $(window).resize(imgWidth);
        </script>

         <script>
    function portResize(){
      if ($(window).width() >= 768) {
      var portWidth = $('.portfolio-item').width();
      $('.portfolio-item').css( 'height', portWidth );
      $('.portfolio-item').css('line-height',portWidth + 'px');
      }
    };

    $(document).ready(portResize);   
    $(window).resize(portResize);
    </script>
    <script>
var menuButton = document.getElementById('menuButton');
menuButton.addEventListener('click', function (e) {
    menuButton.classList.toggle('is-active');
    e.preventDefault();
});

var menuBox = document.getElementById('menuBox');
menuButton.addEventListener('click', function() { 
  menuBox.classList.toggle('active');

});



var menuText = document.getElementById("menuBoxP");
menuButton.addEventListener('click', function() {
  if (menuText.getAttribute("data-text-swap") == menuText.innerHTML) {
    menuText.innerHTML = menuText.getAttribute("data-text-original");
  } else {
    menuText.setAttribute("data-text-original", menuText.innerHTML);
    menuText.innerHTML = menuText.getAttribute("data-text-swap");
  }
}, false);

</script>




  </body>

</html>