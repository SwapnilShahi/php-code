<?php
include ('nav.php');
session_start();

	 
$con = mysqli_connect("localhost", "root", "", "project") or die("mysqli_error($con)");
$mytype=filter_input(INPUT_GET,'type');


echo $mytype;
echo filter_input(INPUT_GET,'type'); 
$query1="select holder_name,holder_address,mobile_no, cost,type   from bus_pass  where type='Ladies' 
        order by holder_name";



$select_query_result1 = mysqli_query($con, $query1) or die("could not connect");

if($_POST){
    $_session['holder_name']=$_POST['holder_name'];
    $_session['holder_address']=$_POST['holder_address'];
    $_session['holder_email']=$_POST['holder_email'];
    $_session['type']=$_POST['type'];
}
$con = mysqli_connect("localhost", "root", "", "project") or die("mysqli_error($con)");
?>


<html>
 <body> 
      <head>
        <title>Users</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
          <style>
footer{
   
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
 <div class="container">
        <?php while ($row = mysqli_fetch_array($select_query_result1)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>Details</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">holder_name</div>
              <div class="col-xs-10"><?php echo $row['holder_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">type</div>
              <div class="col-xs-10"><?php echo $row['type']; ?></div>
          </div>
         
        <div class="row">
              <div class="col-xs-2">mobile_no</div>
              <div class="col-xs-10"><?php echo $row['mobile_no']; ?></div>
          </div>
       
        <div class="row">
              <div class="col-xs-2">cost</div>
              <div class="col-xs-10"><?php echo $row['cost']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">holder_address</div>
              <div class="col-xs-10"><?php echo $row['holder_address']; ?></div>
          </div>
    
          <hr/>
        <?php } ?>
          </div>
          </body>
          </html>
          <?php
          include ('footer1.php');
          ?>