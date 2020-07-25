    <?php
include ('nav1.php');
session_start();
$pass=filter_input(INPUT_POST, 'pass_id');
$con = mysqli_connect("localhost", "root", "", "project")or die('couldnot connect');
$email=$_SESSION['holder_email'];
$depart_depo=filter_input(INPUT_POST, 'depart_depo');

$select_query1 = "select  bp.holder_name,bp.holder_address, bp.pass_id,bp.cost,bp.mobile_no,b.depart_depo,b.dest_depo 
    from bus_pass bp,buses b 
    where bp.pass_id=$pass and bp.holder_address=$depart_depo";

//$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query_result1 = mysqli_query($con, $select_query1) or die(mysqli_error($con));

?>
<html>
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
   <body> 
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
              <div class="col-xs-2">pass_id</div>
              <div class="col-xs-10"><?php echo $row['pass_id']; ?></div>
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
              <div class="col-xs-2">depart_depo</div>
              <div class="col-xs-10"><?php echo $row['depart_depo']; ?></div>
          </div>
     <div class="row">
              <div class="col-xs-2">dest_depo</div>
              <div class="col-xs-10"><?php echo $row['dest_depo']; ?></div>
          </div>
          <hr/>
        <?php } ?>
          </body>
</html>
<?php
include('footer1.php');
?>