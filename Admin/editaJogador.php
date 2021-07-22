<?php
include_once("Includes/body.inc.php");
$id=intval($_GET['id']);
drawTop();
$sql ="select * from jogadores inner join clubes where jogadorId=".$id;
$result = mysqli_query($con, $sql);
$dados=mysqli_fetch_array($result);

?>


    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <p>

                </p>
                <table class="table table-striped" style="margin-left: -140px; background-color: #D2E7F5">
                    <tr>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Foto </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Numero </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Nome</strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Clube</strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 200px"><strong>Posição </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 170px"><strong>Nacionalidade</strong></a></th>
                        <th><a class="nolink" style="cursor: default; width: 170px"><strong><!-- ESPAÇO --> </strong></a></th>
                    </tr>
                    <form action="confirmaEditaJogador.php" method="post" enctype="multipart/form-data">
                        <tr class="active" data-number="1" style="background-color: #DEE2E6">
                            <td><img width="50" src="../<?php echo $dados['jogadorFotoURL']?>"> <input class="btn btn-outline" type="file" name="jogadorFotoURL" style="cursor: text; width: 170px; height: 50px"></td>
                            <td><input  value="<?php echo $dados['jogadorNumero']?>" class="btn btn-outline" type="text" name="jogadorNumero" style="cursor: text; width: 170px; height: 50px"></td>
                            <td><input  value="<?php echo $dados['jogadorNome']?>"  class="btn btn-outline" type="text" name="jogadorNome" style="cursor: text; width: 170px; height: 50px"></td>
                            <td>
                                <?php
                                $sql="select * from clubes";
                                $res=mysqli_query($con,$sql);
                                ?>
                                <select name="jogadorClubeId" style="cursor: text; width: 170px; height: 50px">
                                    <?php
                                    while($dados=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $dados['clubeId']?>"><?php echo $dados['clubeNome']?></option>
                                        <?php
                                    }
                                    ?>
                                </select></td>
                            <td><input   value="<?php echo $dados['jogadorPosicao']?>" class="btn btn-outline" type="text" name="jogadorPosicao" style="cursor: text; width: 170px; height: 50px"></td>
                            <td><input   value="<?php echo $dados['jogadorNacionalidade']?>" class="btn btn-outline" type="text" name="jogadorNacionalidade" style="cursor: text; width: 170px; height: 50px"></td>
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