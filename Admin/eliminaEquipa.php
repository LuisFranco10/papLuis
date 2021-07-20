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
                                    <th width="50%"><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Nome </strong></a></th>
                                    <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Imagem do estadio </strong></a></th>
                                    <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Ano de fundacao </strong></a></th>
                                    <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Presidente </strong></a></th>
                                    <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Cor do clube </strong></a></th>
                                    <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Logotipo </strong></a></th>
                                    <th colspan="2"><a class="nolink" style="cursor: default; width: 170px"><strong><!-- ESPAÇO --> </strong></a></th>
                                </tr>
                                <form action="confirmaEliminaEquipa.php" method="post" enctype="multipart/form-data">
                                    <tr class="active" data-number="1" style="background-color: #DEE2E6">
                                        <td><?php echo $dados['clubeNome']?></td>
                                        <td><img width="50" src="../<?php echo $dados['clubeEstadioURL']?>"></td>
                                        <td><?php echo $dados['clubeFundacao']?></td>
                                        <td><<?php echo $dados['clubePresidenteNome']?></td>
                                        <td><?php echo $dados['clubeSkin']?></td>
                                        <td><img width="50" src="../<?php echo $dados['clubeLogoURL']?>"> </td>
                                        <td><input   class="btn btn-danger" type="submit" value="Confirma"></td>
                                        <td><a href="listaEquipas.php"   class="btn btn-secondary">Cancela</a></td>
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