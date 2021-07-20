<?php
include_once ("includes/body.inc.php");

$img=($_FILES['jogadorFotoURL']);
$numero=($_POST['jogadorNumero']);
$nome=($_POST['jogadorNome']);
$posicao=($_POST['jogadorPosicao']);
$nacionalidade=($_POST['jogadorNacionalidade']);

if($img!=''){
    copy($_FILES['jogadorFotoURL']['tmp_name'], '../'.$img);
}

$sql="insert into jogadores (jogadorFotoURL,jogadorNumero,jogadorNome,jogadorPosicao,jogadorNacionalidade)";
$sql .= " values('".$img."','".$numero."','".$nome."','".$posicao."','".$nacionalidade."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:editarJogador.php");

?>


