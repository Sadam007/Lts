<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');

 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<script type="text/javascript" src='js/status.js'></script>
<body>
<?php include_once 'includes/nav.php';?>
<div class="row">
	<div class="col-md-2">
     <?php include_once 'includes/list.php';?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
          <h3>Welcome to Dashboard</h3><hr> 
          LTS is a web site that shows the current status of the letter. <br>
          All offices of the organization will be linked through this website.<br>
          The status of the letter will be checked by its own reference number given  by the user .<br>
          The user of the system will have their own accounts in LTS. And the people concerned to that specific<br>
          letter will be able to check the status of multiple letters they have been sent.  
	</div><!--col md 9 close row close-->
</div>