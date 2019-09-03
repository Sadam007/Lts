<?php include "includes/header.php" ?>
<?php include "includes/nav.php" ?>
<?php include "connection/connect.php" ?>

<?php 

	$message = "";
	if(isset($_POST['update']))
	{
		$email = $_SESSION['email'];
		$current_pass = $_POST['current-pass'];
		$current_pass_md5 = md5($current_pass);
		$new_pass = $_POST['new-pass'];
		$new_pass_md5 = md5($new_pass);
		$verify_pass = $_POST['verify-pass'];

		$checkUser = mysqli_query($con, "SELECT * FROM user WHERE email = '$email' AND password = '$current_pass_md5'");
		if(mysqli_num_rows($checkUser) == 1) {
			$fetchedRow = mysqli_fetch_assoc($checkUser);
		$password = $fetchedRow['password'];
		if($password == $current_pass_md5) {
			if($new_pass == $verify_pass) {
				$query = mysqli_query($con, "UPDATE user SET password = '$new_pass_md5' WHERE email = '$email'");
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
				<label for="email" class="control-label col-md-2">Email</label>
				<div class="col-md-8">
					<input type="text" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" disabled></input>
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