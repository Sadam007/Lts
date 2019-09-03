<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'includes/header.php'; ?>
<?php include_once 'function/function.php'; ?>



<body>
<div class="container container-color">
<?php include_once 'includes/nav.php'; ?>

<div class="row">
  <!-- slider start-->
	<?php include_once 'includes/slider.php'; ?>
</div><!--row close-->
<!-- slider close-->

<!--main area start-->
<div class="row content-row">
<h2 class="intro" align="center">Letter Status<hr></h2>
<?php delete_msg(); ?>
 <div class="status"></div>
</div><!--row close-->
<!--main area end-->

<!--Modal start for track and trace-->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true"><!--modal class start-->
  <?php include_once 'includes/modaltrack.php'; ?>
</div>
<!--modal end track and trace start-->
<!--modal start for cantact us start-->
<?php include_once 'includes/modalcant.php'; ?>
</div><!--modal end of cantact us start-->
<nav class="navbar navbar-inverse footer">
<p>&copy copy right all reserved designed by Muhammad Aayz Khan</p>
</nav>
</div><!--container close-->
<script type="text/javascript" src="js/status.js"></script>
</body>
</html>
