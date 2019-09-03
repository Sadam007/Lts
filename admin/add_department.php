
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
       <h3>Add Department</h3><hr>
       <div class="row">
        <div class="col-md-4 col-md-offset-1">
  <?php 
       if(isset($_GET['department_required']))
       {
        echo "<div class='alert alert-danger' id='department_msg'>".$_GET['department_required']."</div>";
       } ?>
         <?php 
       if(isset($_GET['department_exist']))
       {
        echo "<div class='alert alert-danger' id='department_msg'>".$_GET['department_exist']."</div>";
       } ?>

         <?php 
       if(isset($_GET['department_success']))
       {
        echo "<div class='alert alert-success' id='department_msg'>".$_GET['department_success']."</div>";
       } ?>
   </div>
 </div>
       <div class="row">
        <div class="col-md-6">
       <form method="post" action="" class="form-horizontal">
        <div class="form-group">
          <label class="label-control col-md-3">Department</label>
          <div class="col-md-9">
         <input type="text" name="department" class="form-control" placeholder="Enter Department Name...">
        </div>
      </div>
        <div class="form-group">
          <label class="label-control col-md-3"></label>
          <div class="col-md-3">
         <input type="submit" name="add_department" class="btn btn-info" value="Add Department ">
        </div>
      </div>
      </form>
      <div class="row">
      <div class="col-md-9 col-md-offset-3">
       <?php  add_department(); ?>
     </div>
   </div>
      </div>

    </div>

      
      

     </div>
   </div>

   <script type="text/javascript">

$(document).ready(function(){
  $('#department_msg').fadeTo(2000,6000).slideUp(100,function(){
    $('#department_msg').alert('close');
  });
});

   </script>
   </body>
   </html>


   

