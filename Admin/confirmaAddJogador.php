<?php
include_once ("includes/body.inc.php");

$img='imagens/jogadores/'.$_FILES['jogadorFotoURL']['name'];
$numero=addslashes($_POST['jogadorNumero']);
$nome=addslashes($_POST['jogadorNome']);
$jCId=addslashes($_POST['jogadorClubeId']);
$posicao=addslashes($_POST['jogadorPosicao']);
$nacionalidade=addslashes($_POST['jogadorNacionalidade']);




if($_FILES['jogadorFotoURL']['name']!=''){
    copy($_FILES['jogadorFotoURL']['tmp_name'], '../'.$img);
}
$sql="insert into jogadores (jogadorFotoURL,jogadorNumero,jogadorNome,jogadorClubeId,jogadorPosicao,jogadorNacionalidade)";
$sql.=" values('".$img."','".$numero."','".$nome."','".$jCId."','".$posicao."','".$nacionalidade."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listaJogador.php");

?>


