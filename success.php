<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<body>
<?php include_once 'includes/nav.php'; ?>
<div class="row">
	<div class="col-md-2">
    <?php include_once 'includes/list.php'; ?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
		<h3>Dashboard</h3><hr>
      <?php if($_GET['inserted'])
       echo "<div class='alert alert-success'>".$_GET['inserted']."</div>";

       ?>
       <?php if(isset($_GET['sorry']))
       {
       	echo "<div class='alert alert-danger'>".$_GET['sorry']."</div>";
       	} ?>

       	<?php if(isset($_GET['status_updated']))

        echo "<div class='alert alert-success'>".$_GET['status_updated']."</div>";

       	 ?>

	</div><!--col md 9 close-->
</div><!--row close-->