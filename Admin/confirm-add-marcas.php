<?php
include_once ("includes/body.inc.php");


$id=($_POST['clubeId']);
$nome=($_POST['nomeClube']);
$img=$_FILES['clubeEstadioURL']['name'];
$fundacao=($_POST['clubeFundacao']);
$clubePresidenteNome=($_POST['clubePresidenteNome']);
$img2=$_FILES['clubeLogoURL']['name'];

if($img!=''){
    copy($_FILES['imagemEquipa']['tmp_name'], '../'.$img);
}

$sql="insert into clubes (clubeId,clubeNome,clubeEstadioURL,clubeFundacao,clubePresidenteNome,clubeLogoURL)";
$sql .= " values('".$id."','".$nome."','".$img."','".$fundacao."','".$clubePresidenteNome."','".$img2."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:classificacao.php");

?>


