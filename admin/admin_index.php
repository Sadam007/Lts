
<?php 
include_once 'function/function.php';
if(!isset($_SESSION['admin']))
 header('Location: ../all_login.php');
 ?>
<?php include_once 'header.php'; ?>
<body>
	<?php include_once 'includes/nav.php'; ?>
	<div class="row">
		<div class="col-md-2">
        <?php include_once 'includes/list.php'; ?>
		</div><!--close col md 3-->
		<div class="col-md-10">
       <h3>Admin Dashboard</h3><hr>
		</div>

	</div><!-- close row-->

   

