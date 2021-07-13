<?php
include_once("Includes/body.inc.php");
top(HOME);
$id = intval($_GET['id']);
$sql ="select * from percursos where percursoId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>

<div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
    <div class="container">
        <div class="row">
            <a class="sub-title-admin"><i class="icon-flow-branch"></i></i><strong> percursos - </strong>editar</a>
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 50px; width: 200px" onclick="location.href='percursos.php'"><strong>VOLTAR </strong><i class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div><p></p>
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Nome </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Distância / Km's </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Imagem Satélite </strong></a></th>
                            <th><a class="nolink"><strong> <img src="../<?php echo $dados['percursoImgUrl'];?>" width="80"; height="80"></strong></a></th>
                        </tr>

                        <form action="confirm-edit-percursos.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><input name="idPercursos" hidden value="<?php echo $dados['percursoId']?>"/>
                                    <a class="nolink"></a><input class="btn btn-outline" type="text" name="nomePercursos" value="<?php echo $dados['percursoNome']?>" style="cursor: text"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="number" name="kmPercursos" value="<?php echo $dados['percursoKm']?>" style="cursor: text"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="imagemPercursos" value="<?php echo $dados['percursoImgUrl']?>" style="cursor: pointer"></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Editar" style="height: 45px; width: 150px; border-color: #3f3f3f""></td>
                            </tr
                        </form>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <p></p>
    </div>

    <p></p>
</div>
<?php
botabout();
?>
