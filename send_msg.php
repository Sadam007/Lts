<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<script type="text/javascript" src="js/recive.js"></script>
<body>
<?php include_once 'includes/nav.php';?>
<div class="row">
	<div class="col-md-2">
     <?php include_once 'includes/list.php';?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
		<h3>Send Messages</h3><hr>
        <?php send_msg(); ?>

	</div><!--col md 9 close-->
</div><!--row close-->