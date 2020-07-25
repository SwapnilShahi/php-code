<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="assignment3.css">
         <style>
            .row-style{
                margin-top: 10px;
                border-color: blue blueviolet;
            } 
            .btn{
                font-size:25px;
            }
            .row{
                padding-top: 80px;
                padding-left: 600px;
                padding-bottom: 50px;
                padding-right: 400px;
            }
            #background-image{
                 background: url(img/bus2.jpg) no-repeat center;
                 background-size:cover;
                 
                 
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

    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
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
                                              
                       
                        <li><a href="WorkForUs.php"><span class="glyphicon glyphicon-log-out"></span>Refresh</a></li>  
                    </ul>
                </div>
            </div>
         </nav>
       < <div class="row row-style">
                <div class="col-xs-11">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>Delete</h2>
                        </div>
                        
                        <div class="panel-body "> 
                            <form action="user_deletion_script.php" method="GET">
                               
                             <div class="form-group">
                                    <label for="mobile_no">Mobile Number</label>
                                    <input type="text" class="form-control" name="mobile_no">
                                </div>
                            <div class="form-group">
                                    <label for="holder_email">Email</label>
                                    <input type="text" class="form-control" name="holder_email"required="true" 
                                           pattern="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$">
                                </div>
                            <div class="form-group">
                                    <label for="holder_address">Address</label></br>
                                    <textarea name="holder_address" rows="5" cols="35"></textarea>

                                </div>
                            <div class="form-group">
                                    <label for="pass_id">Pass ID</label></br>
                                    <input type="text" class="form-control" name="pass_id" required="true">
                            
                               </div>
                            <div class="form-group">
                                    <label for="password">Password</label></br>
                                    <input type="password" class="form-control" name="password" required="true"
                                           pattern=".{6,}">
                            
                               </div>
                            </br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-warning">Delete</button>
                                    </div>
                             
                              
                        </div>
                    </div>
                </div>
             </div>
    
        <footer>
            <div class="container">
                <center>
                <p>Copyright@ Government.All rights 
                    reserved|Contact us:+91 90000 00000 </p>
                </center>
                 <div class="new">
                    Also join Us on <a href="#"><img src="img/facebook-icon.png"></a>
                                    <a href="#"><img src="img/twitter.png"></a>
                                    <a href="#"><img src="img/pintrest.png"></a>
              
                </div>
                </div>
            </footer>
    </body>
</html>