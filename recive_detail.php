<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<body>
<nav class="navbar navbar-inverse custom">
	<div class="container-fluid">
		<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inam" aria-expended="false">
      <span class="sr-only">toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
			<div class="navbar-brand">
				<a href="#" class="logo">Dashboard</a>
			</div><!--close navbar brand-->
		</div><!--close navbar header-->
    <div class="collapse navbar-collapse" id="inam">
		<ul class="nav navbar-nav">
			<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>

	</div><!--container fluid close-->
</nav><!--nav close-->
<div class="row">
	<div class="col-md-2">
    <?php include_once 'includes/list.php'; ?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
		<h3>Letter status</h3><hr>
		<?php recive(); ?><hr>


	</div><!--col md 9 close-->
</div><!--row close-->
</body>
</html>
