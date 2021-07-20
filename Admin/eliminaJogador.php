<?php
include_once("Includes/body.inc.php");
$id=intval($_GET['id']);
drawTop();
$sql ="select * from jogadores where jogadorId=".$id;
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
                                <tr style="background-color: #000000;color: white;">
                                    <th class="text-center" align="left">Foto</th>
                                    <th class="text-center" align="left">Numero</th>
                                    <th class="text-center" align="left">Nome</th>
                                    <th class="text-center" align="left">Posição</th>
                                    <th class="text-center" align="left">Nacionalidade</th>
                                    <th colspan="2" class="text-center" align="left">Opções</th>

                                </tr>
                                <form action="confirmaEliminaJogador.php" method="post" enctype="multipart/form-data">
                                    <tr class="active" data-number="1" style="background-color: #DEE2E6">
                                        <td><img width="50" src="../<?php echo $dados['jogadorFotoURL']?>"></td>
                                        <td><?php echo $dados['jogadorNumero']?></td>
                                        <td><?php echo $dados['jogadorNome']?></td>
                                        <td><<?php echo $dados['jogadorPosicao']?></td>
                                        <td><?php echo $dados['jogadorNacionalidade']?></td>
                                        <td><input   class="btn btn-danger" type="submit" value="Confirma"></td>
                                        <td><a href="listaJogador.php"   class="btn btn-secondary">Cancela</a></td>
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