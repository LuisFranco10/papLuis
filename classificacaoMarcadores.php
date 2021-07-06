<?php
include_once ("includes/body.inc.php");
/*$id=intval($_GET['id']);
$sql="select * from clubes where clubeId=$id"; */
drawTop();
?>

<div class="container" style="margin-top: 5%;">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 ">
            <a class="btn btn-primary1" href="classificacao.php">Voltar</a>



        </div>



    </div>


    <table class="table table-striped table-hover">
        <thead >
        <tr style="background-color: #000000;color: white;">
            <th class="text-center" width="10%">Foto</th>
            <th class="text-center" width="25%">Nome</th>
            <th class="text-center" width="25%">Clube</th>
            <th class="text-center" width="25%">Posicao</th>
            <th class="text-center" width="15%">Golos</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <td class="text-center" width="10%"><a href="brunoFernandes.php"><img src="imagens/jogadores/brunoFernandes.jpg" height="50"></a></td>
            <td class="text-center" width="25%"> Bruno Fernandes </td>
            <td class="text-center" width="25%"> Sporting </td>
            <td class="text-left" width="25%"> Medio Ofensivo </td>
            <td class="text-center" width="15%"> 1 </td>

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

