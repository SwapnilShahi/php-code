<?php
//session_start();

//require('common.php');
//$email=$_POST['email'];
//$regex_email="[a-z0-9._%+-]+@[a-z0-9._]+\.[a-z]{2,3}$";
//if(!preg_match($regex_email,$email)){
    //header('location:login1.php?email_error=enter correct email');
//}
//$password=$_POST['password'];
//if(strlen($password)<6){
    //header('location:login1.php?password_error=enter correct password');   
//}
//$user_login_query = "insert into login(password,user_id) values
        //('$password','$user_id')";
//$user_login_submit = mysqli_query($con, $user_login_query) ;

//$email=mysqli_real_escape_string($con,$email);
//$password=mysqli_real_escape_string($con,$password);
//echo "User successfully logged_in";


//if(isset($_session['password'])){
    //echo "hello".$_session['email'];
//}
//else{
    //echo "hello new";
//}
?>
<?php
//new code
/*function login(){
    session_start();
    if(!empty($_POST['email'])){
        $query=mysqli_query("select * from email where email='$_POST[email]'and password='$_POST[password]'")or die(mysqli_error());
        $row=mysqli_fetch_array($query)or die(mysqli_error());
        if(!empty($row[email])and !empty($row[password])){
            $_session['email']=$row['password'];
            echo "login successful";
        }
        else{
            echo "sorry enter correct email and password";
        }
    }
}
if(isset($_POST['submit'])){
    login();

*/

        session_start();
         $email=$_POST['email'];
         $password=$_POST['password'];
	if ($email&&$password)
	{
		
$con = mysqli_connect("localhost", "root", "", "project") or die(mysqli_error($con));
		
		$query = mysqli_query($con,"SELECT * FROM bus_pass WHERE holder_email='$email'");
		
		$numrows = mysqli_num_rows($query);
		echo $numrows;
		if ($numrows!=0)
		{
			while($row = mysqli_fetch_assoc($query))
			{
;				$dbemail = $row['holder_email'];
				$dbpassword = $row['password'];
				
			}
			if ($email==$dbemail && $password==$dbpassword)
			{
				  echo "<center>Login Successfull..!! <br/>Redirecting you to HomePage! </br>If not Goto <a href='login1.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='3; url=query.php'>";
				$_SESSION['holder_email'] = $email;
			} else{
				$message = "email and/or Password incorrect.";
  			echo "<script type='text/javascript'>alert('$message');</script>";
			  echo "<center>Redirecting you back to Login Page! If not Goto <a href='login1.php'> Here </a></center>";
			  echo "<meta http-equiv='refresh' content ='1; url=query.php'>";
			}
		}else
			die("User not exist");
	}
	else
	die("Please enter email and Password");
        ?>