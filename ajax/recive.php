<?php include_once '../connection/connect.php';?>


<?php


 function recive()
 {
  session_start();
  GLOBAL $con;
  $email = $_SESSION['email'];
  $QR = "SELECT * FROM letter_status WHERE reciver='$email' && status='pending'";
  $recive_query = mysqli_query($con,$QR) or die(mysqli_error($con));
  $count = mysqli_num_rows($recive_query);
  if($count == 0)
  {
    echo "<div class='alert alert-danger'>No Message in your box message!</div>";
  }

  else
  {
     echo "<table class='table'>

     <tr>
     <th>Title</th>
     <th>Refference</th>
     <td>Name</th>
     <th>Reff Number</th>
     </tr>";
    while($r = mysqli_fetch_array($recive_query))
    {
      $id = $r['id'];
      $_SESSION['msg_id'] = $id;
      $date = $r['date11'];
      $title = $r['post_title'];
      $name = $r['name'];
      $ref_number = $r['reference_number'];
      $email = $r['email'];
      $_SESSION['s_email'] = $email;
      $status = $r['status'];
      if($status == 'pending')
      {
        echo "<tbody>
        <tr class='bg-danger'>
        <td>$title</td>
        <td>$ref_number</td>
        <td>$name</td>
        <td>$ref_number</td>
        <td><button class='btn btn-warning'><span class='glyphicon glyphicon-hourglass'></button></td>
        <td><a href='detail.php?msg=$id' class='btn btn-warning'>Details</a></td>

        </tr>";

      }
      // else
      // {
      //    echo "<tbody>
      //   <tr class='bg-success'>
      //   <td>$title</td>
      //   <td>$ref_number</td>
      //   <td>$name</td>
      //   <td>$ref_number</td>
      //   <td><button class='btn btn-success'><span class='glyphicon glyphicon-ok'></span></td>
      //   <td><button class='btn btn-success'>Recived</button></td>
      //   </tr></tbody>";
      // }



    }
    echo "</table>";

  }

 }
 recive();


 ?>
