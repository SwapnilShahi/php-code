<?php
include ('nav.php');

$con = mysqli_connect("localhost", "root", "", "project")or die($mysqli_error($con));
$select_query = "SELECT * FROM driver";
$select_query2 = "SELECT * FROM conductors";
$select_query1 = "SELECT * FROM depo";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$select_query_result2 = mysqli_query($con, $select_query2) or die(mysqli_error($con));
$select_query_result1 = mysqli_query($con, $select_query1) or die(mysqli_error($con));

?>
<!DOCTYPE html>
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
        <?php while ($row = mysqli_fetch_array($select_query_result)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>Drivers</h4></div>
          </div>
         <div class="row">
              <div class="col-xs-2">driver_name</div>
              <div class="col-xs-10"><?php echo $row['driver_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">driver_id</div>
              <div class="col-xs-10"><?php echo $row['driver_id']; ?></div>
          </div>
        <div class="row">
              <div class="col-xs-2">bus_id</div>
              <div class="col-xs-10"><?php echo $row['bus_id']; ?></div>
          </div>
          <?php } ?>
        <div class="container">
                <?php while ($row = mysqli_fetch_array($select_query_result2)) { ?>

         <div class="row">
              <div class="col-xs-2"><h4>.Conductors</h4></div>
             
        <div class="row">
              <div class="col-xs-2">conductor_id</div>
              <div class="col-xs-10"><?php echo $row['cndtr_id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">conductor_name</div>
              <div class="col-xs-10"><?php echo $row['cndtr_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">bus_id</div>
              <div class="col-xs-10"><?php echo $row['bus_id']; ?></div>
          </div>
          <hr/>
        <?php } ?>
           <div class="container">
        <?php while ($row = mysqli_fetch_array($select_query_result1)) { ?>
          <div class="row">
              <div class="col-lg-12"><h4>Depo</h4></div>
          </div>
          <div class="row">
              <div class="col-xs-2">bus-id</div>
              <div class="col-xs-10"><?php echo $row['bus_id']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">depo_name</div>
              <div class="col-xs-10"><?php echo $row['depo_name']; ?></div>
          </div>
          <div class="row">
              <div class="col-xs-2">pincode</div>
              <div class="col-xs-10"><?php echo $row['pincode']; ?></div>
          </div>
          <hr/>
        <?php } ?>
          
         
    </div>
          
</body>
</html>
<?php
          include ('footer1.php');
          ?>