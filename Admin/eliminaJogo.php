<?php
include_once ("includes/body.inc.php");
drawTop();
$id=intval($_GET['id']);

?>

    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <div class="col text-center">
                </div>
            </div>

    </div>


   <table class="table table-striped table-hover">
            <thead >
            <tr style="background-color: #000000;color: white;">
                <th class="text-center" align="left">Data</th>
                <th class="text-center" align="left">Clube Casa</th>
                <th class="text-center" align="left">Golos Casa</th>
                <th class="text-center" align="left">Clube Fora</th>
                <th class="text-center" align="left">Golos Fora</th>
                <th colspan="2" class="text-center" align="left">Opcoes</th>

            </tr>
            </thead>
            <tbody>

<?php
        $sql="select j.jogoId as `jogoId`, j.jogoData as `data`, c.clubenome as `clubeCasa`, j.jogoCasaGolos as `golosCasa`, cb.clubenome as `clubeFora`, j.jogoForaGolos as `golosFora` from jogos j inner join clubes c on j.jogoCasaClubeId = c.clubeId
inner join clubes cb on j.jogoForaClubeId = cb.clubeId where jogoId=".$id;
        $result=mysqli_query($con,$sql);
        while ($dados = mysqli_fetch_array($result)){
    ?>
        <tr>

            <td class="text-center"><a class="nolink"><?php echo $dados['data']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['clubeCasa']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['golosCasa']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['clubeFora']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['golosFora']?></a></td>
            <td><a href="confirmaEliminaJogo.php?id=<?php echo $dados['jogoId']?>" class="btn btn-sm btn-danger"> Confirma</a> </td>
            <td><a href="listaJogos.php" class="btn btn-sm btn-secondary"> Cancelar</a> </td>
        </tr>
            <?php
        }
            ?>


            </tbody>

        </table>







<!-- 

            <br>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <label> Equipa: </label>
                <select name="equipaJogoCasa">
                    <option value="-1">Escolha a equipa casa...</option>
                    <?php
                    $sql = "select * from clubes order by clubeNome";
                    $result = mysqli_query($con, $sql);
                    while ($dados = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $dados['clubeId'] ?>"><?php echo $dados['clubeNome'] ?></option>
                        <?php
                    }

                    ?>
                </select>
                <label>Resultado:</label>

                <input type="text" name="equipaGoloCasa" placeholder="Golos Casa">
                <label>Data:</label><input type="date" name="jogoData">
            </div>
            <div class="col-md-5">
                <label> Equipa: </label>
                <select name="equipaJogoFora">
                    <option value="-1">Escolha a equipa fora...</option>
                    <?php
                    $sql = "select * from clubes order by clubeNome";
                    $result = mysqli_query($con, $sql);
                    while ($dados = mysqli_fetch_array($result)) {
                        ?>
                        <option value="<?php echo $dados['clubeId'] ?>"><?php echo $dados['clubeNome'] ?></option>
                        <?php
                    }

                    ?>
                </select>
                <br>
                <br>
                <br>
                <input type="text" name="equipaGoloFora" placeholder="Golos Fora">
            </div>


            </tbody>

        </table> -->

    <?php

drawBottom();
?>