<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$img='imagens/jogadores/'.$_FILES['jogadorFotoURL']['name'];
$numero=addslashes($_POST['jogadorNumero']);
$nome=addslashes($_POST['jogadorNome']);
$jCId=addslashes($_POST['jogadorClubeId']);
$posicao=addslashes($_POST['jogadorPosicao']);
$nacionalidade=addslashes($_POST['jogadorNacionalidade']);

$sql="update jogadores set jogadorNumero='".$numero."', jogadorNome='".$nome."',jogadorClubeId='".$jCId."',jogadorPosicao='".$posicao."',jogadorNacionalidade='".$nacionalidade."'";


if($_FILES['jogadorFotoURL']['name']!=''){
    copy($_FILES['jogadorFotoURL']['tmp_name'], '../'.$img);
    $sql.=",jogadorFotoURL='".$img."'";
}

$sql.=" where jogadorId=".$id;
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listaJogador.php");

?>


