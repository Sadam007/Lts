
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

        <div class="row">
        	<div class="col-md-4">
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
            <?php  select_department(); ?>

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
        </div>
    </div>
</div>

   </form>


   

