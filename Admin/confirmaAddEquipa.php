<?php
include_once ("includes/body.inc.php");

$nome=($_POST['clubeNome']);
$imgEst=($_FILES['clubeEstadioURL']);
$fundacao=($_POST['clubeFundacao']);
$presidente=($_POST['clubePresidenteNome']);
$skin=($_POST['clubeSkin']);
$img=$_FILES['clubeLogoURL']['name'];

if($img!=''){
    copy($_FILES['clubeEstadioURL']['tmp_name'], '../'.$imgEst);
    copy($_FILES['clubeLogoURL']['tmp_name'], '../'.$img);
}

$sql="insert into clubes (clubeNome,clubeEstadioURL,clubeFundacao,clubePresidenteNome,clubeSkin,clubeLogoURL)";
$sql .= " values('".$nome."','".$imgEst."','".$fundacao."','".$presidente."','".$skin."','".$img."');";
mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:editarEquipa.php");

?>


