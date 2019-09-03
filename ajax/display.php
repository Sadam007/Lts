<?php include_once '../connection/connect.php';?>


<?php 


 function message()
 {
 	GLOBAL $con;
  $email = $_SESSION['email'];
 	$query_s = mysqli_query($con, "SELECT * FROM `letter_status` WHERE `reciver` = '$email' && `status` = 'pendding'");
 	$count = mysqli_num_rows($query_s);
 	if($count == 0)
 	{
 		echo "<div class='alert alert-danger'>SMS Box is empty</div>";
 	}
 	else
 	{

 		echo "<div class='col-md-8 col-md-offset-2'>
    <table class='table table-border'>
        <thead>
        <tr>
        <th>Name</th>
        <th>Department</th>
        <th>Read More...</th>
        </tr>
        </thead>
 		";
 		while($r = mysqli_fetch_array($query_s))
 		{
          $id = $r['id'];
          $_SESSION['latter_id'] = $id;
          $title = $r['post_title'];
          $name = $r['name'];
          $reference = $r['reference_number'];
          $department = $r['department'];
          $comments = $r['comments'];
          echo "<tbody>

          <tr>
          <td>$name</td>
          <td>$department</td>
          <td><a href='detail.php?msg=$id' class='btn btn-success'>Read More...</a></td>
          <td><a href='index.php?delete=$id' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a></td>
          </tr>
          </tbody>";
 		}
 		echo "</table></div>";
 	}
 }
 message();


 ?>
