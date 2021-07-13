<?php
include_once ("Includes/body.inc.php");
$id=intval($_GET['id']);
$sql= "delete from calendario where calendarioId=".$id;
mysqli_query($con,$sql);
header("location:calendario.php");

?>