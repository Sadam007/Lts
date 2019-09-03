<?php 
  include_once '../function/connection.php';

  	GLOBAL $con;
  
  	$select_latter_status = mysqli_query($con, "SELECT * FROM letter_status ORDER BY id DESC");
  	$count = mysqli_num_rows($select_latter_status);
    $result = array();
  	if($count == 0)
  	{
  		echo "<div class='alert alert-danger'>No Message in database!</div>";
  	}
  	else
  	{
      // echo "<table class='table' id='myTable'>";
  		while($r = mysqli_fetch_assoc($select_latter_status))
      {
        // $name = $r['name'];
        // $receiver = $r['reciver'];
        // $status = $r['status'];
        // echo "<tbody>
           // "<tr>
           //      <td>$name</td>
           //      <td>$receiver</td>
           //      <td>$status</td>
           //      </tr>";
        // </tbody>";
        $result [] = $r;

      }
      // echo "</table>";
  	}
  	

  echo json_encode($result);



 ?>