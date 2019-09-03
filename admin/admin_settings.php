<?php 
include_once 'function/function.php';
if(!isset($_SESSION['admin']))
 header('Location: ../all_login.php');

 ?>
<?php include "header.php" ?>
<?php include "includes/nav.php" ?>


<?php 

	$message = "";
	if(isset($_POST['update']))
	{
		$username = $_SESSION['admin'];
		$current_pass = $_POST['current-pass'];
		$new_pass = $_POST['new-pass'];
		$verify_pass = $_POST['verify-pass'];

		$checkUser = mysqli_query($con, "SELECT * FROM admin_login WHERE username = '$username' AND password = '$current_pass'");
		if(mysqli_num_rows($checkUser) == 1) {
			$fetchedRow = mysqli_fetch_assoc($checkUser);
		$password = $fetchedRow['password'];
		if($password == $current_pass) {
			if($new_pass == $verify_pass) {
				$query = mysqli_query($con, "UPDATE admin_login SET password = '$new_pass' WHERE username = '$username'");
				$message = "<div class='col-md-8 col-md-offset-2 alert alert-info' id='msg'>Password updated successfully</div>";
			}
			else {
				$message = "<div class='col-md-8 col-md-offset-2 alert alert-info' id='msg'>Password doesn't match</div>";
			}
			
		} 
		else {
			$message = "<div class='col-md-8 col-md-offset-2 alert alert-info' id='msg'>Password is incorrect</div>";
		}
		}
		else {
			$message = "<div class='col-md-8 col-md-offset-2 alert alert-info' id='msg'>Password not found</div>";
		}
		
		


	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Profile Settings</title>
</head>
<body>
 <div class="container">

  <div class="row" style="margin-top:48px;">
  	<div class="col-md-10 col-md-offset-1">
  		<form class="form-horizontal" method="post" action="">
  			<fieldset>
  				<legend>Profile Settings</legend>

			<div class="form-group">
				<label for="username" class="control-label col-md-2">Username</label>
				<div class="col-md-8">
					<input type="text" name="username" class="form-control" value="<?php echo $_SESSION['admin']; ?>" disabled></input>
				</div>
			</div>
			<div class="form-group">
				<label for="current-pass" class="control-label col-md-2">Current Password</label>
				<div class="col-md-8">
					<input type="text" name="current-pass" class="form-control"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="new-pass" class="control-label col-md-2">New Password</label>
				<div class="col-md-8">
					<input type="text" name="new-pass" class="form-control"></input>
				</div>
			</div>
			<div class="form-group">
				<label for="verify-pass" class="control-label col-md-2">Verify Password</label>
				<div class="col-md-8">
					<input type="text" name="verify-pass" class="form-control"></input>
				</div>
			</div>
			<label class="control-label col-md-2"></label>
			<div class="form-group col-md-2">
				<button class="btn btn-primary" name="update" type="submit">Update</button>
			</div>

  			</fieldset>
			
		</form>
		<div>
		</div>
  	</div>
  		<div class="row">
  			<?php echo $message; ?>
  		</div>
  </div>
 	
 </div>
</body>

<script>
	$(document).ready(function(){
		$('#msg').fadeTo(500,300).slideUp(900,function(){
			$('#msg').alert(close);
		})
	});
</script>

</html>