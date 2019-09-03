
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

         <?php 
       if(isset($_GET['delete_employee']))
       {
        echo "<div class='alert alert-success' id='deleted_msg'>".$_GET['delete_employee']."</div>";
       } ?>
      
        <?php
       delete_employee_account();
       employee_accounts(); 
       ?>

     </div>
   </div>
   <script type="text/javascript">

$(document).ready(function(){
  $('#deleted_msg').fadeTo(2000,6000).slideUp(500,function(){
    $('#deleted_msg').alert('close');
  });
});

   </script>
   </body>
   </html>


   

