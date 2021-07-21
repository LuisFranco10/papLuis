<?php
include_once ("../includes/body.inc.php");
$data=$_POST['jogoData'];
$equipaCasaId=intval($_POST['jogoCasaClubeId']);
$equipaForaId=intval($_POST['jogoForaClubeId']);
$goloCasa=intval($_POST['jogoCasaGolos']);
$goloFora=intval($_POST['jogoForaGolos']);


 $sql="insert into jogos(jogoData,jogoCasaClubeId,jogoForaClubeId,jogoCasaGolos,jogoForaGolos)
values('".$data."','".$equipaCasaId."','".$equipaForaId."','".$goloCasa."','".$goloFora."');";


mysqli_query($con,$sql);
 $idJogo=mysqli_insert_id($con);
if($goloCasa==$goloFora){
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
    $sqlPontos.="'E',1,$idJogo,$equipaCasaId)";
    mysqli_query($con,$sqlPontos);
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
    $sqlPontos.="'E',1,$idJogo,$equipaForaId)";
    mysqli_query($con,$sqlPontos);
}elseif($goloCasa>$goloFora){
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
    $sqlPontos.="'V',3,$idJogo,$equipaCasaId)";
    mysqli_query($con,$sqlPontos);
    $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
    $sqlPontos.="'D',0,$idJogo,$equipaForaId)";
    mysqli_query($con,$sqlPontos);
}else{
        $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
        $sqlPontos.="'D',0,$idJogo,$equipaCasaId)";
        mysqli_query($con,$sqlPontos);
        $sqlPontos="insert into pontos(pontoResultado, pontoValor, pontoJogoId, pontoClubeId) values(";
        $sqlPontos.="'V',3,$idJogo,$equipaForaId)";
        mysqli_query($con,$sqlPontos);
}
header("location:listaJogos.php");
?>
