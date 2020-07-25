<?php
require ('common.php');
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ecommerce website</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">
        
    </head>
    <body>
         <?php
         include ('header.php');
         ?>
        <div class="content">
            <div class="banner-image">
                <div class="innerbi">
                    <div class="banner_content">
                        <center>
                        <h1>We sell Lifestyle</h1>
                        <h4>Flat 40% Off on Premium Brands</h4>
                        <a href="products.php" class="btn btn-danger btn-lg active">SHOP NOW</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
     
       <?php
       include ('footer.php');
       ?>
    </body>
</html>
