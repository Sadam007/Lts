<?php
include_once 'connection/connect.php';


function secure_code($data)
{
	GLOBAL $con;
	return $data = htmlspecialchars(mysqli_real_escape_string($con,$data));
}

function secure_password($password)
{
	GLOBAL $con;
	return $password = md5($password);
}


function display_massege(){
global $con;

    $query =mysqli_query($con,"select * from letter_status");


    while ($row=mysqli_fetch_array($query)) {


      $title=$row['post_title'];
      $date=$row['date11'];
      $name=$row['name'];
      $reference_number=$row['reference_number'];
      $comments=$row['comments'];
      echo "


<h2>$title</h2>
<p> Published on:&nbsp;<?php echo $date;?></p>
Reference number:<b>&nbsp; $reference_number</b><br>
Massage:<b>&nbsp;$comments;</b><br>
<p align='right'>Posted by:<b>&nbsp;$name</b></p><br>
<hr>";




}
}
function users()
{
	GLOBAL $con;
	$user_query = mysqli_query($con,"SELECT `name` FROM `user`");
	$count = mysqli_num_rows($user_query);
	if($count >1 )
	{
		echo "<select class='form-control' name='user'>";
		while($r = mysqli_fetch_array($user_query))
		{
			$id = $r['id'];
		     $name = $r['name'];
		  echo "
          <option name='$id'>
           ".$name."
         </option>";

	    }
	   echo "</select>";
        }
	else
	{
		echo 'Sorry no user found!';
	}

}

function user()
{
	GLOBAL $con;
	if(isset($_POST['login']))
	{
		 $email = secure_code($_POST['email']);
		 $password = secure_password($_POST['password']);
		if(empty($email) || empty($password))
		{
           echo "<div class='alert alert-danger'>Please fill out the form fields!</div>";
		}
		else
		{
        $user_query = mysqli_query($con,"SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'");
		$count = mysqli_num_rows($user_query);
		if($count == 1)
		{
			while($r = mysqli_fetch_array($user_query))
			{
				// $id = $r['id'];
				$user = $r['name'];
        $_SESSION['email'] = $email;
				$_SESSION['name'] = $user;
				header("Location: user_login.php");
			}
		}
		else
		{
			echo "<div class='alert alert-danger'>Your email or Password is incorrect!</div>";
		}
		}

	}
}

 function all_departments()
 {
 	GLOBAL $con;
 	$department = mysqli_query($con, "SELECT `department` FROM `user`");
 	$count = mysqli_num_rows($department);
 	if($count == 0)
 	{

 	}
 	else
 	{
 		while($r = mysqli_fetch_array($department))
 		{
 			$id = $r['id'];
 			$depart = $r['department'];
 			echo "<option value='$depart'>$depart</option>";
 		}
 	}
 }

 function send_message()
 {

 	GLOBAL $con;
 	date_default_timezone_set('Asia/karachi');
  if(isset($_POST['send']) && isset($_POST['post_title']) && isset($_POST['reference_number'])  && isset($_POST['department'])  && isset($_POST['comments']) && isset($_POST['employee']) && isset($_FILES['file']))
 {

      $title = $_POST['post_title'];
      $date = date('d/m/y h:i:s');
      $email = $_SESSION['email'];
      $name = $_SESSION['name'];
      $reference_number = $_POST['reference_number'];
      $department = $_POST['department'];
      $reciver = $_POST['employee'];
      $comments= $_POST['comments'];
      $file = rand(1000,100000).'-'.$_FILES['file']['name'];

      $file_tmp = $_FILES['file']['tmp_name'];


  if(!empty($title) && !empty($date) && !empty($name) && !empty($email) && !empty($reference_number) && !empty($department) && !empty($comments) && !empty($reciver) && !empty($file))
  {
    $verify_ref = mysqli_query($con,"SELECT reference_number FROM letter_status WHERE reference_number = '$reference_number'");

    if(mysqli_num_rows($verify_ref) == 1)
    {
           echo "<div class='alert alert-danger'>Sorry this reference number is already exist please choose another </div>";
    }
    else
    {
    move_uploaded_file($file_tmp, "attachement/".$file);
		$fileCount = count($file);
		for ($i = 0; $i < $fileCount; $i++) {

$insertQuery=mysqli_query($con,"INSERT INTO `letter_status`(date11,post_title,name,email,reference_number,department,reciver,comments,status,file)VALUES('$date','$title','$name','$email','$reference_number','$department','$reciver','$comments','pending','$file')") or die(mysqli_error());
}
$QMixId = "select max(id) from letter_status";
$Qrs = $con -> query($QMixId) or die(mysqli_error($con));
$Qrw = mysqli_fetch_row($Qrs);
$LetterId = $Qrw[0];
echo $LetterId;
$QStatus = "insert into letterstatus(Department, id, DeptID) value('$reference_number', '$LetterId', '$department')";
$con -> query($QStatus) or die(mysqli_error($con));
if($insertQuery)
{
 echo "<script>window.open('success.php?inserted=Your message is sent sucessfully!','_self');</script>";
}
else
{
 echo "<script>window.open('success.php?sorry= Sorry your message is not sent please try again!','_self');</script>";
}
}
}
else
{
  echo "<div class='alert alert-danger'>Please fill out the form and try again!</div>";
}


}
 }


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

  function department_users()
  {
  	GLOBAL $con;
  	$user_department_query = mysqli_query($con, "SELECT * FROM `department`");
	while($r = mysqli_fetch_array($user_department_query))
  	{
  		$id = $r['id'];
  		$name = $r['name'];
  		echo "<option value='$id'>$name</option>";
  	}
  }

  
  function details()
  {
    GLOBAL $con;
    if(isset($_GET['msg']))
    {
      $msg = $_GET['msg'];
      $msg_query = mysqli_query($con, "SELECT * FROM `letter_status` WHERE `id` = '$msg'");

      while($r = mysqli_fetch_array($msg_query))
      {
          $date = $r['date11'];
          $post_title = $r['post_title'];
          $name = $r['name'];
          $email = $r['email'];
          $reference_number = $r['reference_number'];
          $department = $r['department'];
          $reciver = $r['reciver'];
          $comments = $r['comments'];

          $_SESSION['sender_email'] = $email;
          $department_query = mysqli_query($con, "SELECT `name` FROM `department` WHERE `id` = '$department'");
          $d = mysqli_fetch_array($department_query);
          $department_name = $d['name'];
          echo "<table class='table'>
          <tr><th><h3>Name</h3></th><td><h3>$name</h3></td></tr>
          <tr><th>Email</th><td>$email</td></tr>
          <tr><th>Date</th><td>$date</td></tr>
          <tr><th>Post title</th><td>$post_title</td></tr>
          <tr><th>Reference Number</th><td>$reference_number</td></tr>
          <tr><th>Department</th><td>$department_name</td></tr>
          <tr><th>Reciver</th><td>$reciver</td></tr>
          <tr><th>Message</th><td>$comments</td></tr>
          <tr><th>File</th><td><a class='btn btn-info btn-sm' href='attachement/".$r['file']."'>".$r['file']."</a></td></tr>

          </table>";
      }
    }
  }

  function delete_msg()
  {
    GLOBAL $con;
    if(isset($_GET['delete']))
    {
      $id = $_GET['delete'];
      $delete_query = mysqli_query($con,"DELETE FROM `letter_status`  WHERE `id` = '$id'");
      if($delete_query)
      {
        echo "<div class='alert alert-success text-center'>Message is successfully deleted</div>";
      }
      else
      {
        echo "<div class='alert alert-danger text-center'>Message is not deleted</div>";

         }
      }
  }

  function recive()
  {
    GLOBAL $con;
    if(isset($_GET['recive']))
    {
      $id = $_GET['recive'];
      $recive_query = mysqli_query($con, "SELECT * FROM `status_update` WHERE `id` = '$id'");
      echo '<div class="alert alert-success">Your latter is recived thank you!</div>';
      while($r = mysqli_fetch_array($recive_query))
      {
        $title = $r['title'];
        $ref_number = $r['ref_number'];
        $department = $r['department'];
        $sender = $r['sender'];
        $message = $r['message'];
        $time = $r['time'];
        echo "<table class='table'>
        <tr><th>Title</th><td>$title</td></tr>
        <tr><th>Refference Number</th><td>$ref_number</td></tr>
        <tr><th>Department</th><td>$department</td></tr>
        <tr><th>Sender</th><td>$sender</td></tr>
        <tr><th>Message</th><td>$message</td></tr>
        <tr><th>Time</th><td>$time</td></tr>
         </table>
        ";
      }
    }
  }

  function approve_message()
  {
    GLOBAL $con;
    $s_email =$_SESSION['email'];
    $approve_query = mysqli_query($con,"SELECT * FROM `letter_status` WHERE `reciver` = '$s_email'");
    $count = mysqli_num_rows($approve_query);
    if($count == 0)
    {
      echo "<div class='alert-alert-danger'>You have no message from Sender</div>";
    }
    else
    {
      echo "<table class='table'>
       <tbody>
       <tr>
       <th>Title</th>
       <th>Ref Number</th>
       <th>Email</th>
       <th>Comments</th>
       </tr>
       </tbody>
      ";
      while($r = mysqli_fetch_array($approve_query))
      {
        $email = $r['recive'];
        $title = $r['post_title'];
        $ref_number = $r['reference_number'];
        $status = $r['status'];
        $email = $r['email'];
        $reciver_comments = $r['reciver_comm'];
        if($status == 'pending')
        {
          echo "<tbody>
                <tr class='bg-danger'>
                <td>$title</td>
                <td>$ref_number</td>
                <td>$email</td>
                <td>$reciver_comments</td>

                </tr>
           ";
        }
        else
        {
           echo "<tbody>
                <tr class='bg-success'>
                <td>$title</td>
                <td>$ref_number</td>
                <td>$email</td>
                <td>$reciver_comments</td>
                </tr>
                </tbody>
           ";
        }

      }
    }
  }


  function search()
  {
    GLOBAL $con;
    if(isset($_POST['btn-search']))
    {
      $search = $_POST['search'];
      $search_query = mysqli_query($con, "SELECT * FROM `letter_status` WHERE `reference_number` = '$search'");
      $count = mysqli_num_rows($search_query);
      if($count == 0)
      {
        echo "<div class='alert alert-danger'>Not found!</div>";
      }
      else
      {
        echo "<table class='table'>

        <thead>
        <tr>
        <th>Title</th><th>Sender</th><th>Reciver</th><th>Status</th>
        </tr>
        </thead>";
        while($r = mysqli_fetch_object($search_query))
        {
          $post_title = $r->post_title;
          $name = $r->name;
          $reciver = $r->reciver;
          $status = $r->status;
          if($status == 'pending')
          {
            echo "<tbody>
             <tr class='danger'>
             <td>$post_title</td>
             <td>$name</td>
             <td>$reciver</td>
             <td>$status</td>
             </tr>
            </tbody>";
          }
          else
          {
            echo "<tbody>
             <tr class='success'>
             <td>$post_title</td>
             <td>$name</td>
             <td>$reciver</td>
             <td>recive</td>
             </tr>
            </tbody>";
          }


        }
      }
    }
  }
// Search Letter Status
  function LetterStatus()
  {
    GLOBAL $con;
    if(isset($_POST['btn-search']))
    {
      $search = $_POST['search'];
      $search_query = mysqli_query($con, "SELECT * FROM `letter_status` WHERE `reference_number` = '$search'");
      $count = mysqli_num_rows($search_query);
      if($count == 0)
      {
        echo "<div class='alert alert-danger'>Not found!</div>";
      }
      else
      {
        echo "<table class='table'>

        <thead>
        <tr>
        <th>Title</th><th>Sender</th><th>Reciver</th><th>Status</th>
        </tr>
        </thead>";
        while($r = mysqli_fetch_object($search_query))
        {
          $post_title = $r->post_title;
          $name = $r->name;
          $reciver = $r->reciver;
          $status = $r->status;
          if($status == 'pending')
          {
            echo "<tbody>
             <tr class='danger'>
             <td>$post_title</td>
             <td>$name</td>
             <td>$reciver</td>
             <td>Pendding</td>
             </tr>
            </tbody>";
          }
          else
          {
            echo "<tbody>
             <tr class='success'>
             <td>$post_title</td>
             <td>$name</td>
             <td>$reciver</td>
             <td>recive</td>
             </tr>
            </tbody>";
          }


        }
      }
    }
  }
// End latter status

  function login_admin()
  {
    GLOBAL $con;
    if(isset($_POST['admin_login']))
    {
       $username = secure_code($_POST['username']);
       $password = $_POST['password'];

       if(empty($username) || empty($password))
       {
      echo "<div class='alert alert-danger'>Please enter email and password!</div>";
       }
       else
       {
       $admin_query = mysqli_query($con, "SELECT `username`,`password` FROM `admin_login` WHERE `username` = '$username' && `password` = '$password'");
       $count = mysqli_num_rows($admin_query);
       if($count == 1)
       {
        $_SESSION['admin'] = $username;
        header("Location:admin/admin_index.php");
       }
       else
       {
        echo "<div class='alert alert-danger'>Email OR Password is incorrect!</div>";
       }
     }

    }
  }

  function send_msg()
  {
    GLOBAL $con;
    $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $query = mysqli_query($con,"SELECT * FROM letter_status WHERE email = '$email'");
    $count = mysqli_num_rows($query);
    if($count == 0)
    {
      echo "<div class='alert alert-danger'>No message in send box</div>";
    }
    else
    {
      echo "<table class='table'>
      <thead>
      <tr>
      <th>Name</th><th>Receiver</th><th>Status</th><th>Peoples</th>
      </tr></thead>";
      while($r = mysqli_fetch_array($query))
      {
        $id = $r['id'];
        $reciver = $r['reciver'];
        $query2 = mysqli_query($con, "SELECT  latter_id FROM letter_status WHERE latter_id = '$id'");
        $count2 = mysqli_num_rows($query2);
        if($count2 == 0)
        {
          $result = $count2;
        }
        else
        {
          $result = $count2;
        }
           echo "<tbody>
             <tr>
             <td>$name</td>
             <td>$reciver</td>
             <td><a href='status.php'>Status</a></td>
             <td>$result</td>
             </tr>
           </tbody>";
      }
      echo "</table>";
    }
  }
	function letter_details()
	{
		GLOBAL $con;
		if(isset($_GET['latter_id']))
		{
	$latter_id = $_GET['latter_id'];
	$letter_query = mysqli_query($con,"SELECT * FROM letter_status WHERE id = '$latter_id'");
	echo "<table class='table'>
	<thead>
  <tr>
  <th>SenderName</th>
	<th>Email</th>
  <th>ReciverEmail</th>
	<th>Refference</th>
	<th>Comments</th>
  <th>Date</th>
  <td>Status</td>
	</tr>
	</thead>";
	while($r =  mysqli_fetch_object($letter_query))
{
  $status = $r->status;
  $reciver = $r->reciver;
  $date = $r->date11;
  if($status == 'pending')
  {
		echo "<tbody>
         <tr>
           <td>$r->name</td>
					 <td>$r->email</td>
           <td>$reciver</td>
					 <td>$r->reference_number</td>
					 <td>$r->comments</td>
           <td>$date</td>
           <td>pending</td>
				 </tr>";
  }
  else
  {

    echo "<tbody>
         <tr>
           <td>$r->name</td>
           <td>$r->email</td>
           <td>$reciver</td>
           <td>$r->reference_number</td>
           <td>$r->comments</td>
           <td>$date</td>

           <td>Recived</td>
         </tr>";

}
}
		echo "</tobdy>";
}
}




?>
