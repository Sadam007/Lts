<?php include_once 'connection/connect.php'; ?>
<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<body>
<?php include_once 'includes/nav.php'; ?>
<div class="row">
	<div class="col-md-2">
     <?php include_once 'includes/list.php'; ?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
		<h3>Send Message</h3><hr>
		<?php send_message(); ?>
		<form action="" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="post_title" class="form-control" placeholder="Subject.."required>
			</div><!--form group close-->
			<div class="form-group">
				<input type="text" name="reference_number" class="form-control" placeholder="Enter letter reference num...">
			</div><!--form group close-->
			<div class="form-group">
				    <select type="text" id="department" name="department" class="form-control" placeholder="Enter department..." onchange="show_employees();">
             <option value="">Select Department</option>
            <?php select_department(); ?>



 </select>
 </div>
 <div class="form-group">
<select class="form-control" id="employee" name="employee">
	<!-- <option value="">Select User</option> -->
</select>
</div>

 	         <div class="form-group">
				<textarea name="comments" rows="10" cols="40" class="form-control" placeholder="What's on your mind..." ></textarea>
			</div>
			<div class="form-group">
				<!-- <div class="fileinput fileinput-new input-group" data-provides="fileinput">
  <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
  <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span><input type="file" name="file" multiple></span>
  <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
</div> -->
<input type="file" name="file" multiple/>

			</div>



			<!--form group close-->
			<div class="form-group">
				 <input type="submit" name="send" class="btn btn-success" value="send">
			</div><!--form group close-->
		</form><!--form close-->

	</div><!--col md 9 close-->
</div><!--row close-->

<script>

function show_employees(){

  	var id = $('#department').val();
  	//alert(id);

    $.ajax({

    type  :   'POST',
    url   :   'ajax/department_users.php',
    data  :   'id='+id,
    success : function(html)
    {
    	$("#employee").html(html);

    }

    });

  }



</script>
