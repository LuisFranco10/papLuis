<?php
include_once ("Includes/body.inc.php");
$id=intval($_GET['id']);
$sql= "delete from percursos where percursoId=".$id;
mysqli_query($con,$sql);
header("location:percursos.php");

?>