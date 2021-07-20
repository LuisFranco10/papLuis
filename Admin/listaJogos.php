<?php
include_once ("includes/body.inc.php");
drawTop();

?>

    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <div class="col text-center">

                </div>







            </div>

            <div class="desc animate-box">
                <input type="Submit" class="btn btn-success" value="Adiciona"><br>
            </div>

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

        </table>

    </div>
    <?php

drawBottom();
?>