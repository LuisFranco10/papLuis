<?php
include_once ("includes/body.inc.php");
$con = mysqli_connect("localhost:3306","root","","futebol");$id=intval($_GET['id']);
$id=intval($_GET['id']);
$sql="select * from clubes where clubeId=$id";
$result = mysqli_query($con, $sql);
drawTop();
?>

<div class="container" style="margin-top: 5%;">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 ">
            <a class="btn btn-primary1" href="classificacaoMarcadores.php"> Classificacao Marcadores</a>

            <h1 align="center"><img src="./imgs/123.jpg""></h1>


        </div>



    </div>


    <table class="table table-striped table-hover">
        <thead >
        <tr style="background-color: #000000;color: white;">
            <th class="text-center" width="10%">Posicao</th>
            <th class="text-center" width="20%">Clube</th>
            <th class="text-center" width="10%">Jogos</th>
            <th class="text-center" width="10%">Vitorias</th>
            <th class="text-center" width="10%">Derrotas</th>
            <th class="text-center" width="10%">Empates</th>
            <th class="text-center" width="10%">Golos Marcados</th>
            <th class="text-center" width="10%">Golos Sofridos</th>
            <th class="text-center" width="10%">Pontos</th>
        </tr>
        </thead>
        <tbody>

        <?php
        while ($dados = mysqli_fetch_array($result)) {
            ?>

            <tr class="active" data-number="1">
                <td><a class="nolink"><?php echo $dados['clubeId'] ?></a></td>
                <td><a class="nolink"><?php echo $dados['clubeNome'] ?></a></td>
                <td><img id="img1" src="../<?php echo $dados['clubeEstadioURL'] ?>"></td>
                <td><a class="nolink"><?php echo $dados['clubeFundacao'] ?></a></td>
                <td><a class="nolink"><?php echo $dados['clubePresidenteNome'] ?> </a></td>
                <td><img id="img1" src="../<?php echo $dados['clubeLogoImgUrl'] ?>"></td>
                <td><a class="nolink"><?php echo $dados['clube'] ?> </a></td>
                <td><a href="jogador.php"><i class="btn btn-primary fas fa-edit text-primary"></i></a><p></p>
                    <a href="#" onclick="confirmaElimina(<?php echo $dados['clubeId'] ?>)"><i class="btn btn-danger fas fa-trash  text-danger" ></i></a></td>
            </tr

            <?php
        }

        ?>


        <?php
        /*
              while ($row = $result->fetch_assoc()) {
                   echo "<tr>";
                   echo '<td>'. $row[""] . '</td>';
                   echo '<td> <a href="./brunoFernandes.php">'. $row["numero"] . "</a></td>";
                   echo '<td>'. $row["nome"] . '</td>';
                   echo '<td>'. $row["posicao"] . '</td>';
                   echo '<td>'. $row["nacionalidade"] . '</td>';
                   echo "</tr>";
               }
*/
        ?>

        </tbody>
        </tr>
    </table>
    <p>
    </p>
</div>
<?php
drawBottom();
?>
