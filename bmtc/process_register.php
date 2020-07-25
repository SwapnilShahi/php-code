<?php
	$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
session_start();
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['holder_name']) || empty($_POST['mobile-no']) || empty($_POST['holder_email']) || empty($_POST['password']) || empty($_POST['holder_address']) || empty($_POST['type']) || empty($_POST['Cost']))
		{
			$msg.="<li>Please full fill all requirement";
		}
		 
		if($_POST['password']!=$_POST['password'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		
		if(preg_match("[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$",$_POST['holder_email']))
		{
			$msg.="<li>Please Enter Your Valid Email Address...";
		}
		
		
		if(strlen($_POST['password'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['holder_name']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:signup1.php?error=".$msg);
		}
		else
		{
			$holder_name = $_GET['holder_name'];
                        $holder_email = $_GET['holder_email'];
                        $holder_address = $_GET['holder_address'];
                        $type = $_GET['myBrowser'];
                        $password = $_GET['password'];

			
			
			$user_registration_query = "insert into bus_pass(holder_name,holder_email,holder_address,type,password) values ('$holder_name','$holder_email', '$holder_address','$type',$password)";
			$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
                        echo "User successfully inserted";
			
			header("location:signup1.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>