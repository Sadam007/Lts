<?php include_once 'connection/connect.php'; ?>
<?php
$q = "SELECT * FROM department";
$data = $con->query($q) or die(mysqli_error($con));
$Row = mysqli_fetch_array($data);
echo $Row[id];

// while($r = mysqli_fetch_array($data)) {
//   print_r($r);
// }


 ?>
