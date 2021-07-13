<?php
include_once ("includes/body.inc.php");

$id=intval($_POST['idMarcas']);
$nome=addslashes($_POST['nomeMarcas']);
$cavalagem=intval($_POST['cavalagemMarcas']);
$motor=addslashes($_POST['motorMarcas']);
$diam=intval($_POST['diamMarcas']);
$binario=intval($_POST['binarioMarcas']);

$sql="Update marcas set marcasNome='".$nome."',marcasCavalagem='".$cavalagem."',marcasMotor='".$motor."',marcasDiam='".$diam."',marcasBinario='".$binario."'";

if($_FILES['imagemMarcas']['name']!=''){
    $img='imagens/'.$_FILES['imagemMarcas']['name'];
    copy($_FILES['imagemMarcas']['tmp_name'],'../'.$img);
    $sql.=", marcasImgUrl='".$img."'";
}

$sql.=" where marcasId=".$id;

mysqli_query($con,$sql);
header("location:marcas.php");

?>