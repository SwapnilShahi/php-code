<?php
session_start();
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
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
             <title>Login</title>
             <style>
            .row-style{
                margin-top: 10px;
                
            } 
            .btn{
                font-size:25px;
            }
            .panel-info > .panel-heading {
            color: #333;
            background-color: #1ab698;
            border-color: #ddd;
            }
             .row1{
                padding-top: 80px;
                padding-left: 750px;
                padding-bottom: 50px;
                min-width: 500px;
           
               
               
                
            }
            #background-image1{
                 background: url(img/pa.jpg) no-repeat center;
                 background-size:cover;
                 min-height: 800px;
                 min-width: 800px;
               
            }
                   footer{
    padding: 10px;
 background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%;
}
.new{
    padding-left: 450px;
    
}
            
                   
        </style>
    </head>
    <body><nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>HOME</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup1.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login1.php"><span class="glyphicon glyphicon-log-in"></span> Refresh</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       <div id="background-image1">
        <div class="container">           
            <div class="row1 row-style">
                <div class="col-xs-11">
                    <div class=" panel panel-info">   
                        <div class="panel-heading">
                            <h4>Login</h4>
                        </div>
                        <div class="panel-body">
                            <form action="login_script.php" method="POST">
                                   <form action="query.php" method="POST">
                            <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email"required="true" 
                                           pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$">
                                
                                </div>
                                
                            <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password"required="true" 
                                           pattern=".{6,}">
                                    
                                </div>
                                       
                            
                             <div class="form-group">
                                    <button type="Submit" class="btn btn-warning">Submit</button>
                                    </div>
                            </div>
                        <div class="panel-footer"><a href="help.php">Forgot password?</a></div>
                    </div>
                   </div>
                 </div>
             </div>
       </div>
         <footer>
            <div class="container">
                <center>
                <p>Copyright@ Government Of India.All rights 
                    reserved|Contact us:+91 90000 00000</p>                
                </center>
                <div class="new">
                    Also join Us on <a href="#"><img src="img/facebook-icon.png"></a>
                                    <a href="#"><img src="img/twitter.png"></a>
                                    <a href="#"><img src="img/pintrest.png"></a>
              
                </div>
        </footer>
        </body>
        </html>