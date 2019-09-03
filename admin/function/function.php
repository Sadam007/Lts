<?php 
include_once 'connection.php';

function select_department()
  {
  	GLOBAL $con;
  	$department_query = mysqli_query($con, "SELECT * FROM department");
  	while($r = mysqli_fetch_array($department_query))
  	{
  		$id = $r['id'];
  		$name = $r['name'];

  		echo 

  		"<option value='$id'>
        $name
  		</option>";

  	}
  }


  function employee_accounts()
  {
  	GLOBAL $con;
  	$employee_accounts = mysqli_query($con,"SELECT `id`,`name`,`email`,`department` FROM `user`");
  	$count = mysqli_num_rows($employee_accounts);
  	if($count == 0)
  	{
  		echo "<div class='alert alert-danger'>Sorry no emplyee accounts</div>";
  	}
  	else
  	{
      echo "<table class='table'>
      <thead>
      <tr>
      <th>NAME</th>
      <th>EMAIL</th>
      <th>DEPARTMENT</th>
      <th>DELETE</th>
      </tr>
      </thead>";


      while($r = mysqli_fetch_array($employee_accounts))
      {
      	$id = $r['id'];
      	$name = $r['name'];
      	$email = $r['email'];
      	$department = $r['department'];
      	$select_department = mysqli_query($con,"SELECT `name` FROM `department` WHERE `id` = '$department'");
        $r2 = mysqli_fetch_object($select_department)->name;
      	echo "<tbody>
           <tr>
           <td>$name</td>
           <td>$email</td>
           <td>$r2</td>
           <td><a href='employee_accounts.php?del_account=$id' class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a></td>
           </tr>
      	</tbody>";
      }
      echo "</table>";
  	}
  }

  function delete_employee_account()
  {
  	GLOBAL $con;
  	if(isset($_GET['del_account']))
  	{
  		$id = $_GET['del_account'];
  	$delete_employee_account = mysqli_query($con, "DELETE FROM `user` WHERE `id` = '$id'");
  	if($delete_employee_account)
  	{
  		echo "<script>window.open('employee_accounts.php?delete_employee=Employee account is successfully deleted!','_self');</script>";

  	}
  	else
  	{
  		echo 'not delete query work';
  	}
  }
}  


  function secure_code($data)
  {
    GLOBAL $con;
    return $data = trim(htmlentities(mysqli_real_escape_string($con,$data)));
  }

 function add_department()
 {
  GLOBAL $con;
  if(isset($_POST['add_department']))
  {
    $department = secure_code($_POST['department']);
    if(empty($department))
    {
      echo "<script>window.open('add_department.php?department_required=Please enter department!','_self')</script>";
    }
    else
    {
      $check_department = mysqli_query($con,"SELECT name FROM department WHERE name = '$department'");
      echo $count = mysqli_num_rows($check_department);
      if($count > 0)

      {
        echo "<script>window.open('add_department.php?department_exist=This department is already exist!','_self')</script>";
      }
      else{


      $add_department = mysqli_query($con,"INSERT INTO `department` (name) VALUES ('$department')");
      if($add_department)
      {
        echo "<script>window.open('add_department.php?department_success=Your dapertment is successfully added!','_self')</script>";
      }}
    }
  }
 }


 ?>