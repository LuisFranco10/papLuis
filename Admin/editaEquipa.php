<?php
include_once("Includes/body.inc.php");
$id=intval($_GET['id']);
drawTop();
$sql ="select * from clubes where clubeId=".$id;
$result = mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);
//---
?>


    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <p>

                </p>
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
                                <form action="confirmaEditaEquipa.php" method="post" enctype="multipart/form-data">
                                    <tr class="active" data-number="1" style="background-color: #DEE2E6">
                                        <td><input  value="<?php echo $dados['clubeNome']?>" class="btn btn-outline" type="text" name="clubeNome" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><img width="50" src="../<?php echo $dados['clubeEstadioURL']?>"> <input class="btn btn-outline" type="file" name="clubeEstadioURL" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><input  value="<?php echo $dados['clubeFundacao']?>"  class="btn btn-outline" type="text" name="clubeFundacao" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><input   value="<?php echo $dados['clubePresidenteNome']?>" class="btn btn-outline" type="text" name="clubePresidenteNome" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><input   value="<?php echo $dados['clubeSkin']?>" class="btn btn-outline" type="text" name="clubeSkin" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><img width="50" src="../<?php echo $dados['clubeLogoURL']?>"> <input class="btn btn-outline" type="file" name="clubeLogoURL" style="cursor: text; width: 170px; height: 50px"></td>
                                        <td><input   class="btn btn-primary" type="submit" value="editar" style="height: 50px; width: 150px; border-color: #3f3f3f""></td>
                                    </tr>
                                    <input type="hidden" name="id" value="<?php echo $id?>">
                                </form>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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