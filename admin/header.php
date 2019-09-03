<?php 
if(!isset($_SESSION['admin']))
{
  header("Location:../admin.php");
}

 ?>
<html>
<head>
    <title>login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="js/signup.js"></script>
	<script type="text/javascript" src="DataTables/jquery.dataTables.min.js"></script>

</head>
			