<!DOCTYPE html>

<?php

/*$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
session_start();
$password = $_GET['password'];
$email = $_GET['email'];


//user_registration_query = "insert into bus_pass(holder_name,holder_email,holder_address,type) values ('$holder_name','$holder_email', '$holder_address','$type')";
$user_registration_query = "insert into login(email,password) values ('$email','$password')";
//$user_registration_query1 = "update bus_pass
       // SET cost=400
       // where pass_id=1000";


//$user_registration_submit = mysqli_query($con, $user_registration_query1) or die(mysqli_error($con));
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
echo "User successfully inserted";
//$_session['holder_address']=$holder_address;

?>  */
session_start();
$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['email']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['password']))
		{
			$msg[]="Password Incorrect........";
		}
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
			
	
			
			$email=$_POST['email'];
			
			$q="select * from login where email='$email'";
			
			$res=mysqli_query($con,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{ 
				if($_POST['password']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['email']=$row['email'];
					$_SESSION['password']=$row['password'];
					
					
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?> 