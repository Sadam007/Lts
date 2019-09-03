<?php 
session_start();
$con = mysqli_connect('localhost','root','','letter_tracking');
    function check_email()
    {
    GLOBAL $con;
    if(isset($_POST['email']))
    {	
    $email = $_POST['email'];
	$check_email = mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$email'");
	$count = mysqli_num_rows($check_email);
	if($count == 1)
	{
		//email is already exist
      echo '0';
	}
	else
	{
     //select not exist email
    echo '1';
	}
    }
}
check_email();

//submit form data
function submit_form()
{
	GLOBAL $con;
	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['department']) && isset($_POST['designation']))
	{
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$password = md5($_POST['password']);
		$department = mysqli_real_escape_string($con,$_POST['department']);
		$designation = mysqli_real_escape_string($con,$_POST['designation']);
		$submit_query = mysqli_query($con, "INSERT INTO user(name,email,password,department,designation) VALUES ('$name','$email','$password','$department','$designation')");
		if($submit_query)
		{
			echo 'registered';
		}
		else
		{
			echo 'not_registered';
		}
	}
}
submit_form();



 ?>