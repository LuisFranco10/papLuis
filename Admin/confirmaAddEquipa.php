<?php
include_once ("includes/body.inc.php");

$nome=($_POST['clubeNome']);
$imgEst='imagens/estadios/'.$_FILES['clubeEstadioURL']['name'];
$fundacao=($_POST['clubeFundacao']);
$presidente=($_POST['clubePresidenteNome']);
$skin=($_POST['clubeSkin']);
$img='imagens/logos/'.$_FILES['clubeLogoURL']['name'];

if($_FILES['clubeEstadioURL']['name']!=''){
    copy($_FILES['clubeEstadioURL']['tmp_name'], '../'.$imgEst);
}
if($_FILES['clubeLogoURL']['name']!=''){
    copy($_FILES['clubeLogoURL']['tmp_name'], '../'.$img);
}

$sql="insert into clubes (clubeNome,clubeEstadioURL,clubeFundacao,clubePresidenteNome,clubeSkin,clubeLogoURL)";
$sql .= " values('".$nome."','".$imgEst."','".$fundacao."','".$presidente."','".$skin."','".$img."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:listaEquipas.php");

?>


