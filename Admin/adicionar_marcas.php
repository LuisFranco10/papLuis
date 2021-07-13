<?php
include_once("Includes/body.inc.php");
top(HOME);
$sql ="select * from marcas;";
$result = mysqli_query($con, $sql);
?>


<div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
    <div class="container">
        <div class="row">
            <a class="sub-title-admin"><i class="fa fa-car"></i><strong> Carros - </strong>ADICIONAR</a>
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='marcas.php'"><strong> VOLTAR </strong></a><i class="fas fa-arrow-left"></i></i></button>
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
                            <th><a class="nolink" style="cursor: default; width: 170px"><strong><!-- ESPAÇO --> </strong></a></th>
                        </tr>
                        <form action="confirm-add-marcas.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="cavalagemMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="motorMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="diamMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="binarioMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="imagemMarcas" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Adicionar" style="height: 50px; width: 150px; border-color: #3f3f3f""></td>
                            </tr>
                        </form>
                        </tbody>
                        </table><p></p>
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01" style="margin-left: -30px">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Transmissão </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 206px"><strong>Caixa de Velocidades </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 300px"><strong>Imagem </strong></a></th>
                            <th><a class="nolink" style="cursor: default; width: 130px"><strong> </strong></a></th>
                        </tr>
                        <form action="confirm-add-marcas.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="transMarcas" style="cursor: text; width: 200px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="caixaMarcas" style="cursor: text; width: 206px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="imagemMarcas" style="cursor: pointer; width: auto"></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Adicionar" style="height: 50px; width: 150px; border-color: #3f3f3f""></td>
                            </tr>
                        </form>
                        </tbody>
                    </table><p></p>
                </div>
         </div>
        </div>
    </div>
-->
</div>

<style>
    #img1 {
        width: 80px;
        height: 80px;
        border: 3px solid #3f3f3f;
    }

</style>





<?php
botabout();
?>
