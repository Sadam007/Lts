<?php include_once 'connection/connect.php'; ?>

<?php if(!isset($_SESSION['name']) && !isset($_SESSION['email']))
 header('Location: all_login.php');
 ?>
<?php include_once 'function/function.php'; ?>
<?php include_once 'includes/header.php'; ?>
<script type="text/javascript" src="js/department_users.js"></script>
<body>
<?php include_once 'includes/nav.php'; ?><!--nav close-->
<div class="row">
	<div class="col-md-2">
    <?php include_once 'includes/list.php'; ?>
	</div><!--col md 3 close-->
	<div class="col-md-9">
		<h3>Letter status</h3><hr>
		<?php details(); ?><hr>
		<?php

if(isset($_GET['msg']))
{
	$con = mysqli_connect('localhost','root','','letter_tracking');
	 $msg_id = $_GET['msg'];
	$update_query = mysqli_query($con, "SELECT * FROM `letter_status` WHERE `id` = '$msg_id'");
  $update_status = mysqli_query($con, "UPDATE letter_status SET status = 'received' WHERE id = '$msg_id'");
	while($b = mysqli_fetch_array($update_query))
	{
		 $email_choose = $b['email'];
		 $post_title_choose = $b['post_title'];
		 $reference_number_choose = $b['reference_number'];
		 $department_choose = $b['department'];
		 $select_department = mysqli_query($con, "SELECT `name` FROM `department` WHERE `id` = '$department_choose'");
		 $d = mysqli_fetch_array($select_department);
		 $department_name_choose = $d['name'];

	}
}


 ?>
 <a href="UpdateStatus.php?LId=<?php echo $_GET['msg']; ?>" class="btn btn-success final_node col-xs-2 col-md-offset-5" style="margin-bottom:7px;">Final</a>
		<form action="" method="POST" enctype="multipart/form-data" id="myformand">
		<div class="form-group">
			<input type="text" name="title" class="form-control" placeholder="Enter latter title..." value="<?php echo $post_title_choose; ?>">
			</div>
					<div class="form-group">
			<input type="text" name="ref" class="form-control" placeholder="Enter Refference Number..." value="<?php echo $reference_number_choose; ?>">
			</div>
					<div class="form-group">
			<input type="text" name="dep" class="form-control" placeholder="Enter Department..." value="<?php echo $department_name_choose; ?>">
			</div>

			<div class="form-group">
			<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Tell some thing............">

			</textarea>
			</div>
			<div class="form-group">
            <select name="dep" id="dep" class="form-control" onchange="show_employee();">
                <option value="">Select Department</option>
                <?php select_department(); ?>
					</select>
			</div>


<div class="form-group">
						<select name="employee" class="form-control" id="employee">
            </select>
			</div>




			<div class="form-group">
			<input type="submit" name="update" value="Update Status" class="btn btn-success" style="margin-top:10px;">
		</div>
		</form>
	</div><!--col md 9 close-->
</div><!--row close-->

<script type="text/javascript">
$(document).ready(function(){

	$('#dep').focusout(function(){

		var dep = $('#dep').val();
		$.ajax({
         type : 'POST',
         url  : 'ajax/all_data.php',
         data : {dep:dep},
         success : function(data)
         {
         	$('.results').html(data);
         }
		});

	});
});

function show_employee(){

  	var id = $('#dep').val();

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
<script type="text/javascript">

	$(document).ready(function(){
		$('.final_node').click(function(){
             $('#myformand').hide();
		})
	})
</script>

</body>
</html>
<?php
 	date_default_timezone_set('Asia/karachi');
$message_u = $_POST['message'];
if(isset($_POST['update']))
{
$date = date('d/m/y h:i:s');
$title_u = $_POST['title'];
$ref_u = $_POST['ref'];
$department_u = $_POST['dep'];
$message_u = $_POST['message'];
$sender_u = $_SESSION['email'];
$user_name = $_SESSION['name'];
$department_user = $_POST['dep'];
$email_u = $b['employee'];
$latter_id = $_GET['msg'];
$sender_email = $_POST['employee'];
$get_file = mysqli_query($con, "SELECT file FROM letter_status WHERE reference_number = '$ref_u'");
$files = mysqli_fetch_array($get_file);
$f = $files['file'];


$update_insert = mysqli_query($con,"INSERT INTO letter_status(date11,post_title,name,email,reference_number,department,reciver,comments,status,file) VALUES ('$date','$title_u','$user_name','$sender_u','$ref_u','$department_user','$sender_email','$message_u','pending','$f')");
   // var_dump($update_insert);
   // exit();
if($update_insert)
{
	$update = mysqli_query($con,"UPDATE letter_status SET department = '$department_user' status = 'received' reciver = '$sender_email' WHERE id = '$latter_id'");
	// echo $last_id = mysqli_insert_id($con);
	$QueryInsert = "insert into letterstatus(department, id) value('$department_user', $ref_u)";
	$Qinsert = $con -> query($QueryInsert) or die(mysqli_error($con));
	echo "<script>window.open('success.php?status_updated=Status is successfully updated thank you!','_self')</script>";
}
else
{
	echo $date;
}

}


 ?>
