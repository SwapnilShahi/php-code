 <?php
session_start(); 
$holder_email = filter_input(INPUT_GET,'holder_email');
$holder_address = filter_input(INPUT_GET,'holder_address');
$mobile_no= filter_input(INPUT_GET,'mobile_no');
$pass= filter_input(INPUT_GET, 'pass_id');
 $con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
 


$user_registration_query1 = "update bus_pass
        SET holder_email='$holder_email',
            holder_address='$holder_address',
            mobile_no = $mobile_no
        where pass_id=$pass";

$user_registration_submit = mysqli_query($con,$user_registration_query1) or die('could not connect');
echo "Your details are successfully Updated";
?>   

<html>
    <head></head>
    <body>
        </br></br>Return to your<a href="index.php"> Homepage</a>
    </body>
</html>