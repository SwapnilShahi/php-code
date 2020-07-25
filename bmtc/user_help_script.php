<!DOCTYPE html>

<?php

$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
session_start();
$Old_Password = $_GET['Old_Password'];
$New_Password = $_GET['New_Password'];



//user_registration_query = "insert into bus_pass(holder_name,holder_email,holder_address,type) values ('$holder_name','$holder_email', '$holder_address','$type')";
$user_registration_query = "insert into change_password(Old_Password,New_Password) 
        values ('$Old_Password','$New_Password')";

if($Old_Password==$New_Password){
  echo "enter a new password";
}
else{
    echo "entered";
}
//$user_registration_submit = mysqli_query($con, $user_registration_query1) or die(mysqli_error($con));
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo " successfully inserted";

?>   