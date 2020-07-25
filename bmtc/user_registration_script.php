<!DOCTYPE html>
<?php
$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
session_start();
$holder_name = $_GET['holder_name'];
$holder_email = $_GET['holder_email'];
$holder_address = $_GET['holder_address'];
$type = $_GET['myBrowser'];
$password = $_GET['password'];
$mobile_no = $_GET['mobile_no'];
$cost = $_GET['cost'];

$user_registration_query = "insert into bus_pass(holder_name,holder_email,password,holder_address,type,mobile_no,cost) values ('$holder_name','$holder_email','$password','$holder_address','$type','$mobile_no','$cost')";

$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "Your appliaction for new Bus Pass is successfully submitted ";
echo "Your Buss Pass will be delievered soon. Collect it from nearest Bus Depo";
$_session['holder_address']=$holder_address;
?>

<html>
    <head></head>
    <body>
        </br></br>
        Return to your<a href="index.php"> Homepage</a>
    </body>
</html>
	
	
	