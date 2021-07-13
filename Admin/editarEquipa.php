<?php
include_once ("includes/body.inc.php");
drawTop();

$con = mysqli_connect("localhost:3306","root","","futebol");
?>

    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <div class="col text-center">

                </div>
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
$sql="select * from clubes";
$result=mysqli_query($con,$sql);
while ($dados = mysqli_fetch_array($result)){
    ?>

    <tr>

<tr>

    <td class="text-center" width="10%"><?php echo $dados['clubeId']?></td>
    <td class="text-center" width="35%"><?php echo $dados['clubeNome']?></td>
    <td class="text-center" width="15%"><?php echo $dados['clubeFundacao']?></td>
    <td class="text-center" width="30%"><?php echo $dados['clubePresidenteNome']?></td>
    <td class="text-center" width="30%"><?php echo $dados['clubeLogoURL']?></td>

</tr>

    </tr>


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
}
?>
<?php
drawBottom();
?>