<?php
include_once ("includes/body.inc.php");
$id=intval($_POST['idPercursos']);
$nome=addslashes($_POST['nomePercursos']);
$km=intval($_POST['kmPercursos']);

$sql="Update percursos set percursoNome='".$nome."',percursoKm='".$km."'";

if($_FILES['imagemPercursos']['name']!=''){
    $img='imagens/'.$_FILES['imagemPercursos']['name'];
    copy($_FILES['imagemPercursos']['tmp_name'],'../'.$img);
    $sql.=", percursoImgUrl='".$img."'";
}

$sql.=" where percursoId=".$id;

mysqli_query($con,$sql);
header("location:percursos.php");

?>