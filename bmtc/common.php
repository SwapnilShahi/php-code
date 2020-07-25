<?php $con=mysqli_connect("localhost","root","","ecom")or die(mysqli_error($con));
if (isset($_session['email'])) {
    header('location: login1.php'); 
    exit;
}
$email = (isset($_POST['email']) ? $_POST['email'] : '');
?>
