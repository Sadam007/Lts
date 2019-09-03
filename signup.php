<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<html>
<head>
    <title>login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/ayaz.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/signup.js"></script>

</head>
<body>






<div class="container signup-container">
<nav class="navbar navbar-default change-nav singup-navbar">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ayaz" aria-expanded="false">
			    <span class="sr-only"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div><!--navbar header close-->
       <div class="collapse navbar-collapse" id="ayaz">
       <ul class="nav navbar-nav">
       	<li><a href="main.php"><span class="glyphicon glyphicon-home"></span></a></li>
       </ul>
       </div><!--collapse close-->
	</div><!--container fluid close-->
</nav><!--navbar close-->

<div class="row top">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-default panel-signup">
      <div class="panel-heading panel-head text-center">
        <h3>Create an account!</h3>
      </div><!--panel heading close-->
      <div class="panel-body ">
        <form method="post" action="" id="signup-form">
        <div class="form-group">
          <div class="form-error"></div>
          <div class="form-submit"></div>
        </div>
        <div class="form-group">

          <div class="input-group">
            <span class="input-group-addon name"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" id="name" class="form-control input-lg" placeholder="Enter Name....">
          </div><!--input group close-->
          <span class="nameerror error"></span>
        </div><!--form group close-->
          <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon email"><span class="glyphicon glyphicon-envelope"></span></span>
            <input type="email" id="email" class="form-control input-lg" placeholder="Enter Email....">
          </div><!--input group close-->
          <span class="emailerror error"></span>
        </div><!--form group close-->
         <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon password"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" id="password" class="form-control input-lg" placeholder="Select Password....">
          </div><!--input group close-->
          <span class="password-error error"></span>
        </div><!--form group close-->
          <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon retype"><span class="glyphicon glyphicon-lock"></span></span>
            <input type="password" id="retype_password" class="form-control input-lg" placeholder="Retype Password....">
          </div><!--input group close-->
          <span class="rpassword-error error"></span>
        </div><!--form group close-->
          <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon department"><span class="glyphicon glyphicon-education"></span></span>
            <select type="department" id="department" class="form-control input-lg" placeholder="Enter Department....">
            <option value="">Select Department</option>
            <?php select_department(); ?>

            </select>
          </div><!--input group close-->
          <span class="department-error error"></span>
        </div><!--form group close-->
         <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon designation"><span class="glyphicon glyphicon-user"></span></span>
            <input type="text" id="designation" class="form-control input-lg" placeholder="Enter Designation....">
          </div><!--input group close-->
          <span class="designation-error error"></span>
        </div><!--form group close-->

        <div class="form-group">
        <input type="button" id="signup"class="btn btn-success btn-block singup-btn" value="SignUp">
        </div><br>

        
        </div>
      </div><!--panel body close-->
    </div><!--panel close-->
		</div><!--col md 2 close-->
	</div><!--row close-->
</div><!--container close-->
</form>
</body>
</html>
