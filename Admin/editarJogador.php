<?php
include_once ("includes/body.inc.php");
drawTop();

$con = mysqli_connect("localhost:3306","root","","pap2021luisfranco");
?>

    <div class="container" style="margin-top: 5%;">
        <!-- Heading Row -->
        <div class="row my-4">
            <div class="col-4 ">
                <div class="col text-center">

                </div>







            </div>

            <div class="desc animate-box">
                <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='adicionarJogador.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
            </div>

        </div>


        <table class="table table-striped table-hover">
            <thead >
            <tr style="background-color: #000000;color: white;">
                <th class="text-center" align="left">Editar Jogadores</th>

            </tr>
            </thead>
            <tbody>

<?php
$sql="select * from jogadores";
$result=mysqli_query($con,$sql);
while ($dados = mysqli_fetch_array($result)){
    ?>

    <tr>

<tr>

    <td class="text-center"><a class="nolink"><img src="../<?php echo $dados['jogadorFotoURL'];?>" width="80"; height="80"></a></td>
    <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNumero']?></a></td>
    <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNome']?></a></td>
    <td class="text-center"><a class="nolink"><?php echo $dados['jogadorPosicao']?></a></td>
    <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNacionalidade']?></a></td>

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