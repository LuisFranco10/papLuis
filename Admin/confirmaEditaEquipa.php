<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['id']);
$nome=addslashes($_POST['clubeNome']);
$imgEst='imagens/estadios/'.$_FILES['clubeEstadioURL']['name'];
$fundacao=addslashes($_POST['clubeFundacao']);
$presidente=addslashes($_POST['clubePresidenteNome']);
$skin=addslashes($_POST['clubeSkin']);
$img='imagens/logos/'.$_FILES['clubeLogoURL']['name'];

$sql="update clubes set clubeNome='".$nome."', clubeFundacao='".$fundacao."',clubePresidenteNome='".$presidente."',clubeSkin='".$skin."'";


if($_FILES['clubeLogoURL']['name']!=''){
    copy($_FILES['clubeLogoURL']['tmp_name'], '../'.$img);
    $sql.=",clubeLogoURL='".$img."'";
}

if($_FILES['clubeEstadioURL']['name']!=''){
    copy($_FILES['clubeEstadioURL']['tmp_name'], '../'.$imgEst);
    $sql.=",clubeEstadioURL='".$imgEst."'";
}
$sql.=" where clubeId=".$id;
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listaEquipas.php");

?>


