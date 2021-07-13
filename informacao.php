<?php
include_once ("includes/body.inc.php");
$con = mysqli_connect("localhost:3306","root","","futebol");$id=intval($_GET['id']);
if(isset($_POST['epoca']))
    $epocaId=intval($_POST['epoca']);
else
{
    $sql="select max(epocaId) as mx from epocas";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    $epocaId=$dados['mx'];
}
$sql="select * from clubes where clubeId=$id";
$result=mysqli_query($con,$sql);
$dados=mysqli_fetch_array($result);
drawTop();
?>

<div class="container" style="margin-top: 5%;">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 ">

            <h1 align="center"><?php echo $dados['clubeNome']?><br><img src="<?php echo $dados['clubeLogoURL']?>"></h1>


        </div>
        <div class="col-8 ">
            <img src="<?php echo $dados['clubeEstadioURL']?>"><br>
            <span><strong>Ano da fundacao: </strong><?php echo $dados['clubeFundacao']?></span><br>
            <span><strong>Presidente: </strong><?php echo $dados['clubePresidenteNome']?></span>
        </div>


    </div>


    <table class="table table-striped table-hover">

        <thead >
        <tr>
            <td colspan="5" align="right">
                <label>epoca: </label>
                <form action="" method="post">
                <select name="epoca">
                    <?php
                    $sql="select * from epocas";
                    $result=mysqli_query($con,$sql);
                    while($dadosEpocas=mysqli_fetch_array($result)){
                        echo ("<option value='".$dadosEpocas['epocaId']."'");
                        if($dadosEpocas['epocaId']==$epocaId)
                            echo " selected ";
                        echo(">".$dadosEpocas['epocaNome']."</option>");
                    }
                    ?>

                </select>
                <button type="submit">Filtrar</button>
                </form>
            </td>
        </tr>
            <tr style="background-color: rgb(<?php echo $dados['clubeSkin']?>);color: white;">
                <th class="text-center" width="10%">Foto</th>
                <th class="text-center" width="10%">N�</th>
                <th class="text-center" width="35%">Nome</th>
                <th class="text-center" width="30%">Posicao</th>
                <th class="text-center" width="15%">Nacionalidade</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $sql="select jogadores.* from jogadores inner join plantel on jogadorId=plantelJogadorId
                inner join clubes on clubeId=plantelClubeId where clubeId=$id and plantelEpocaId=".$epocaId;
        $result=mysqli_query($con,$sql);
        while($dados=mysqli_fetch_array($result)) {
            ?>

            <tr>

                <td class="text-center" width="10%"><a href="jogador.php?id=<?php echo $dados['jogadorId']?>&cid=<?php echo $id?>"><img src="<?php echo $dados['jogadorFotoURL']?>" height="50"></a></td>
                <td class="text-center" width="10%"><?php echo $dados['jogadorNumero']?></td>
                <td class="text-center" width="35%"><?php echo $dados['jogadorNome']?></td>
                <td class="text-center" width="30%"><?php echo $dados['jogadorPosicao']?></td>
                <td class="text-center" width="15%"><?php echo $dados['jogadorNacionalidade']?></td>
            </tr>


            <?php
        }

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