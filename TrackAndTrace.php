<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<script type="text/javascript" src="js/recive.js"></script>

<style>
	.popover-title {
		font-weight: bold;
	}
</style>
<body>
<?php include_once 'includes/nav.php';?>

<div class="row">
	<div class="col-md-2">
     <?php include_once 'includes/list.php';?>
	</div><!--col md 3 close-->

	<div class="col-md-9">
		<h3>Track and trace</h3><hr>
		<?php
      $count = 0;
			$QStatus = "select * from letter_status where reference_number=".$_GET['search'];
			$Qrs = $con -> query($QStatus) or die(mysqli_error($con));
			if(mysqli_num_rows($Qrs) > 0) {
			$Qrw = mysqli_fetch_array($Qrs) or die(mysqli_error($con));
			do {
				$QDept = "select * from department where id=".$Qrw['department'];
				$QDRs = $con -> query($QDept) or die(mysqli_error($con));
				$QDrw = mysqli_fetch_array($QDRs) or die(mysqli_error($con));


        if($count==0) {
          $first = "SELECT MIN(id) AS minId FROM letter_status WHERE reference_number=".$_GET['search'];
          $firstrs = $con->query($first) or die(mysqli_error($con));
          $firstrw = mysqli_fetch_array($firstrs) or die(mysqli_error($con));
          $minId = $firstrw['minId'];

          $second = "SELECT * FROM letter_status WHERE id=$minId";
          $secondrs = $con->query($second) or die(mysqli_error($con));
          $secondrw = mysqli_fetch_array($secondrs) or die(mysqli_error($con));

          $third = "SELECT * FROM user WHERE email='$secondrw[email]'";
          $thirdrs = $con->query($third) or die(mysqli_error($con));
          $thirdrw = mysqli_fetch_array($thirdrs) or die(mysqli_error($con));

          $fourth = "SELECT * FROM department WHERE id=".$thirdrw['department'];
          $fourthrs = $con->query($fourth) or die(mysqli_error($con));
          $fourthrw = mysqli_fetch_array($fourthrs) or die(mysqli_error($con));


          echo "<a href='#' data-toggle='popover' title='".$Qrw['email']."' data-placement='bottom' class='btn btn-primary btn-sm'>(Start) ".$fourthrw['name']."</a>";
          echo " <span class='glyphicon glyphicon-arrow-right' style='width:20px;'></span>";
        }

				if($Qrw['status'] == 'received')
				{
          $date1 = $Qrw['date11'];
          $date2 = date('d/m/y h:i:s');

          //Convert them to timestamps.
          $date1Timestamp = strtotime($date1);
          $date2Timestamp = strtotime($date2);

          //Calculate the difference.
          $difference = $date2Timestamp - $date1Timestamp;
				echo "<a href='#' data-toggle='popover' title='Receiver : ".$Qrw['reciver']."' data-placement='bottom' data-content='<strong>Comments : </strong>".$Qrw['comments']."<hr><strong>Time : ".$Qrw['date11']."</strong>' data-html='true' class='btn btn-primary btn-sm'>".$QDrw['name']."</a>";
				echo " <span class='glyphicon glyphicon-arrow-right' style='width:20px;'></span>";

			}
			else if($Qrw['status'] == 'final') {
				echo "<a href='#'  data-toggle='popover' title='Receiver : ".$Qrw['reciver']."' data-placement='bottom' data-content='<strong>Comments : </strong>".$Qrw['comments']."<hr><strong>Time : ".$Qrw['date11']."</strong>' data-html='true' class='btn btn-success btn-sm'>".$QDrw['name'].' (Finalize)'."</a>";

			}
      $count++;
			}
			while($Qrw = mysqli_fetch_array($Qrs));
		}
		else {
			echo "Not Found";
		} ?>
<!-- 		<div class="progress">
  			<div class="progress-bar progress-bar-striped active" role="progressbar"
  					aria-valuenow="<?php echo $count; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $count."%";?>">
    				<?php echo $count."%"; ?>
  			</div>
		</div> -->



	</div><!--col md 9 close-->
</div><!--row close-->


<script>

$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
