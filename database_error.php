<?php
$pageTitle = "Error";
include("inc/inside-pages.php");
?>

	 <div id="col-md-4 col-md-offset-2">
            <h1>Database Error</h1>
            <p>There was an error connecting to the database.</p>

            <p>Error message: <?php echo $error_message; ?></p>
            <p>&nbsp;</p>
        </div><!-- end main -->

      </div>




<?php

include("inc/footer.php")

?>