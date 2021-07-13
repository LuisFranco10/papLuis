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
                    <div class="desc animate-box">
                        <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='index.php'"><strong> VOLTAR </strong></a><i class="fas fa-arrow-left"></i></i></button>
                    </div>
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

            <tr>
                <td class="text-center" width="10%"> 1 </td>
                <td class="text-center" width="20%"> Sporting </td>
                <td class="text-left" width="10%"> 1 </td>
                <td class="text-center" width="10%"> 1 </td>
                <td class="text-center" width="10%"> 0 </td>
                <td class="text-center" width="10%"> 0 </td>
                <td class="text-center" width="10%"> 1 </td>
                <td class="text-center" width="10%"> 0 </td>
                <td class="text-center" width="10%"> 3 </td>
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
drawBottom();
?>