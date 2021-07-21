<?php
include_once ("includes/body.inc.php");

$id=intval($_GET['id']);
$sql="delete from pontos where pontoJogoId=".$id;
mysqli_query($con,$sql);
$sql="delete from jogos where jogoId=".$id;
mysqli_query($con,$sql);
header("location:listaJogos.php");
?>
