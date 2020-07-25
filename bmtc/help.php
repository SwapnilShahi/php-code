
<html>
    <head>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Lifestyle Store</title>
        <link rel="stylesheet" type="text/css" href="new.css">
         <style>
            .top_margin{
                margin-top:20px;
            }
            .btn{
                font-size: 25px;
            }
            .new{
                padding-left: 450px;
            }
            footer{
    padding: 10px;
 background-color: #101010;
 color:#9d9d9d;
 bottom: 0;
 width: 100%;
}
        </style>
    </head>

    <body>
        <script type="text/javascript">
$(document).ready(function(){    
    //Check if the current URL contains '#'
    if(document.URL.indexOf("help.php")==-1){
        // Set the URL to whatever it was plus "#".
        url = document.URL+"help.php";
        location = "help.php";

        //Reload the page
        location.reload(true);
    }
});
</script>
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                     <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-home"></span>HOME</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                                   
                       <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span>Settings</a></li>
                         <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>  
                    </ul>
                </div>
            </div>
        </nav>
       </br></br></br></br></br>
       
       <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2>Change Password</h2>
                    </div>
                    <div class="panel-body">
                        <form method="GET" action="user_help_script.php">
                            
                            <div class="form-group">
                                <label for="mobile_no">Mobile No</label>
                                <input type="text" class="form-control" id="Old_Password" name="Old_Password">
                            </div>
                           <div class="form-group">
                                <label for="New_Password"> New Password</label>
                                <input type="text" class="form-control" id="New_Password" name="New_Password">
                            </div>
                           
                           
                             
                            <button type="submit" class="btn btn-primary" value=”registration_login”>Change</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div></br></br></br></br></br>
     <footer>
            <div class="container">
                <center>
                <p>Copyright@ LifeStyle Store.All rights 
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