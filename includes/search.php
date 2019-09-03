<?php
include_once 'connection/connect.php'; 

if(isset($_GET['search'])){

$search_id=$_GET['search'];

$query="select * from letter_tracking where post_title like '%search_id%'";

$run = mysqli_query($query);

while($row=mysqli_fetch_array($run)){


 	  $id=$row['id'];
      $title=$row['post_title'];
      $date=$row['date'];
      $name=$row['name'];
      $reference_number=$row['reference_number'];
      $comments=$row['comments'];

}

}
?>