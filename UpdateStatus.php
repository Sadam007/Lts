<?php
require_once("Connection/Connect.php");
$LId = $_GET['LId'];

$q = "update letter_status set status='final' where id=$LId";
$con -> query($q) or die(mysqli_error($con));
header("location:Recive.php");
exit();

?>
