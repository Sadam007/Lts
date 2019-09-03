<?php include_once '../connection/connect.php';?>
<?php 


 	GLOBAL $con;
 	$id = $_POST['id'];
 	$id_query = mysqli_query($con, "SELECT email FROM user WHERE department = '$id'");
 		//$result = array();
 	if (mysqli_num_rows($id_query)>0) 
 	{
 		
 		while($r = mysqli_fetch_assoc($id_query))
 		{
 			//$result[] = $r['email'];
 		echo "<option value='".$r['email']."'>".$r['email']."</option>";

 		}
 	}
 	else
 	{
 		echo "<option value=''>No Users Found</option>";
 	}



 ?> 	
