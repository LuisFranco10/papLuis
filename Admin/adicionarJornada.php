<?php
include_once("Includes/body.inc.php");
drawTop();
$sql ="select * from equipas;";
$result = mysqli_query($con, $sql);
?>


<div class="container" style="margin-top: 5%;">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 ">
            <p>

            </p>

                        <tbody>
                        <table class="table table-striped" style="margin-left: -140px; background-color: #D2E7F5">
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Nome </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Imagem do estadio </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Ano de fundacao </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Presidente </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Cor do clube </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Logotipo </strong></a></th>
                            <th><a class="nolink" style="cursor: default; width: 170px"><strong><!-- ESPAÇO --> </strong></a></th>
                        </tr>
                        <form action="confirmAddEquipa.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1" style="background-color: #DEE2E6">
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="clubeNome" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="clubeEstadioURL" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="clubeFundacao" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="clubePresidenteNome" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="clubeSkin" style="cursor: text; width: 170px; height: 50px"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="file" name="clubeLogoURL" style="cursor: text; width: 170px; height: 50px"></td>
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
drawBottom();
?>
