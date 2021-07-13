<?php
include_once ("includes/body.inc.php");
$id=intval($_POST['idCalendario']);
$nome=addslashes($_POST['nomeCalendario']);
$data=date($_POST['dataCalendario']);
$vencedor=addslashes($_POST['vencedorCalendario']);
$nacionalidade=addslashes($_POST['nacionalidadeCalendario']);

$sql="Update calendario set calendarioNome='".$nome."',calendarioData='".$data."',calendarioVencedor='".$vencedor."', calendarioNacionalidade='".$nacionalidade."'";

$sql.=" where calendarioId=".$id;

mysqli_query($con,$sql);
 header("location:calendario.php");

?>