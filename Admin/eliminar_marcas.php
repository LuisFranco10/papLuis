<?php
include_once ("Includes/body.inc.php");
$id=intval($_GET['id']);
$sql= "delete from marcas where marcasId=".$id;
mysqli_query($con,$sql);
header("location:marcas.php");

?>