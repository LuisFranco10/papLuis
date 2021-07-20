<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$sql="delete from jogadores where jogadorId=".$id;
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listajogador.php");


?>




