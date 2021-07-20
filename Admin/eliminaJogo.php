<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);
$sql="delete from jogos where jogoId=".$id;
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listaJogos.php");
?>
