<?php
include_once ("Includes/body.inc.php");


$nome=($_POST['nomePercursos']);
$km=($_POST['kmPercursos']);
$img=$_FILES['imagemPercursos']['name'];

if($img!=''){
    copy($_FILES['imagemPercursos']['tmp_name'], '../'.$img);
}

$sql="insert into percursos (percursoNome,percursoKm,percursoImgUrl)";
$sql .= " values('".$nome."','".$km."','".$img."');";
mysqli_query($con,$sql);// or die(mysqli_error($con));
header("location:percursos.php");
?>

