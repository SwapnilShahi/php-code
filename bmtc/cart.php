
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

    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>                        
                       <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
       </br></br></br></br></br>
          <div class="container">
           <table class="table table-responsive table-striped table-bordered table-hover">
               <tbody>
                   <tr>
                       <th>Item number</th>
                       <th>Item name</th>
                       <th>Price</th>
                       <th></th>
                   </tr>
                   <tr><td>  </td><td>  </td><td>  </td></tr>   
                   <tr><td></td><td>Total</td><td>Rs.0</td><td><a href="success.php"><button type="submit" class="btn btn-primary" value=”registration_login”>Confirm Order</button></a><td></tr>
                   
               </tbody>
           </table>
       </div>
       <footer>
            <div class="container">
                <center>
                <p>Copyright@ LifeStyle Store.All rights 
                    reserved|Contact us:+91 90000 00000 </p>
                </center>
                </div>
            </footer>
       </body>
       </html>