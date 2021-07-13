<?php
include_once("Includes/body.inc.php");
top(HOME);
$id = intval($_GET['id']);
$sql ="select * from marcas where marcasId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>


<div id="fh5co-content-section" class="fh5co-section-gray">
    <a class="sub-title-admin"><i class="fa fa-car"></i><strong> Carros - </strong>Editar</a>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='marcas.php'"><strong>VOLTAR </strong><i class="fas fa-arrow-left"></i></button>
                </div>
            </div>
        </div>
    </div>
    <p></p>
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01" style="margin-left: -240px">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Marca </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Cavalagem </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Motor </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Diâmetro / Curso </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Binário </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Imagem </strong></a></th>
                            <th><a class="nolink" style="cursor: default; width: 170px"><strong><img src="../<?php echo $dados['percursoImgUrl'];?>" width="80"; height="80"> </strong></a></th>
                        </tr>
                        <form action="confirm-edit-marcas.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><input name="idMarcas" hidden value="<?php echo $dados['marcasId']?>"/>
                                    <a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarcas" value="<?php echo $dados['marcasNome']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="cavalagemMarcas" value="<?php echo $dados['marcasCavalagem']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="motorMarcas" value="<?php echo $dados['marcasMotor']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="diamMarcas" value="<?php echo $dados['marcasDiam']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="binarioMarcas" value="<?php echo $dados['marcasBinario']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="imagemMarcas" value="<?php echo $dados['marcasImgUrl']?>" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Editar" style="height: 50px; width: 150px; border-color: #3f3f3f""></td>
                            </tr>
                        </form>
                        </tbody>
                    </table><p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
botabout();
?>
