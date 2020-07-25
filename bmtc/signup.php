<?php
require ('common.php');
$_SESSION['user_id']= $user_id;
      if (isset($_session['email'])) {
    header('location: product.php'); 
    exit;
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
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">
         <style>
            .top_margin{
                margin-top:20px;
            }
            .btn{
                font-size: 25px;
            }
        </style>
    </head>
</head>
    </head>
    <body>
          <?php
         include ('header.php');
         ?>
<body>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Sign Up</h2>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="signup_script.php">
                            
                            <div class="form-group">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" id="password" name="password ">
                            </div>
                            <div class="form-group">
                                <label for="contact">Phone</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                             <div class="form-group">
                                <label for="address">Address</label>
                                <input type="number" class="form-control" id="address" name="address">
                            </div>
                            <button type="login" class="btn btn-primary" value=”registration_login”>Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <?php
       include ('footer.php');
       ?>
</body>
</html>