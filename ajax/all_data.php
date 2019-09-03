<?php include_once '../connection/connect.php';?>
<?php 
function select_department()
{
	GLOBAL $con;
    
    if(isset($_POST['dep']));
    $id = $_POST['dep'];



    $query = mysqli_query($con,"SELECT * FROM user WHERE department = '$id'");
    $count = mysqli_num_rows($query);
    if($count == 0)
    {
    	echo "<div class='danger'>No users </div>";
    }
    else

    {
    	while($r = mysqli_fetch_array($query))
    	{
    		$email = $r['email'];
    	echo "<input type='radio' name='select_user' value='$email'>&nbsp;&nbsp;$email";
    }
    }
    
    }


select_department();



 ?>