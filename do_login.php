<?php
$con = mysqli_connect('localhost','root','','letter_tracking');

if(isset($_POST['login']))
{
	echo $email=$_POST['email'];
	echo $password=$_POST['password'];
 
	$query=mysqli_query($con,"SELECT `email`,`password` FROM `user` WHERE `email`='$email' AND `password`='$password'") or die("query error");

	
	if(mysqli_num_rows($query) == 1)

	{

		header('Location:main.php');
		//echo "<script>window.open('main.php','_self')</script>";
		
}
	
	 else {

	 	echo "email or password is incorrect";
	 }
	
	}

?>