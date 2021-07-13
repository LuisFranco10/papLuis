
<?php
include_once ("includes/body.inc.php");

$nome=($_POST['nomeCalendario']);
$data=($_POST['dataCalendario']);
$vencedor=($_POST['vencedorCalendario']);
$nacionalidade=($_POST['nacionalidadeCalendario']);


$sql="insert into calendario (calendarioNome,calendarioData,calendarioVencedor,calendarioNacionalidade)";
$sql .= " values('".$nome."','".$data."','".$vencedor."','".$nacionalidade."');";
mysqli_query($con,$sql);

header("location:calendario.php");
?>
