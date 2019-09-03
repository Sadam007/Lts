<?php 
include_once 'connection/connect.php';
 ?>

<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<body class='login-bg'>
<div class="col-md-3 col-md-offset-4">
<div class="panel panel-default margin-panel">
  <div class="panel-body">
    <h4>Login</h4><hr>
      <form method="POST" action="">      <!--form start-->
      <div class="form-group">
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
<input type="text" name="username" class="form-control" placeholder="Enter your username..">
</div>
      </div>
            <div class="form-group">
<div class="input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<input type="password" name="password" class="form-control" placeholder="Enter your pasword...">
</div>
      </div>
      <div class="form-group">
     <input type="submit" name="admin_login" class="btn btn-primary" value="Login">
     
      </div>
      </form><!--form close-->
    </div><!--panel body close-->
    </div><!--close panel default-->
          <?php login_admin(); ?>
    </div><!--close col md 3 close-->
    </body>
    </html>

