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
                <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='novoJogador.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
            </div>

        </div>


        <table class="table table-striped table-hover">
            <thead >
            <tr style="background-color: #000000;color: white;">
                <th class="text-center" align="left">Foto</th>
                <th class="text-center" align="left">Numero</th>
                <th class="text-center" align="left">Nome</th>
                <th class="text-center" align="left">Posição</th>
                <th class="text-center" align="left">Nacionalidade</th>
                <th colspan="2" class="text-center" align="left">Opções</th>

            </tr>
            </thead>
            <tbody>

<?php
        $sql="select * from jogadores";
        $result=mysqli_query($con,$sql);
        while ($dados = mysqli_fetch_array($result)){
    ?>
        <tr>

            <td class="text-center"><a class="nolink"><img src="../<?php echo $dados['jogadorFotoURL'];?>" width="80"; height="80"></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNumero']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNome']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['jogadorPosicao']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['jogadorNacionalidade']?></a></td>
            <td><a href="editaJogador.php?id=<?php echo $dados['jogadorId']?>" class="btn btn-sm btn-primary"> Editar</a> </td>
            <td><a href="eliminaJogador.php?id=<?php echo $dados['jogadorId']?>" class="btn btn-sm btn-danger"> Eliminar</a> </td>
        </tr>
            <?php
        }
            ?>


            </tbody>

        </table>

    </div>
    <?php

drawBottom();
?>