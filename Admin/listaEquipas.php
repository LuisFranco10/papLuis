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
                <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='adicionarEquipa.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
            </div>

        </div>


        <table class="table table-striped table-hover">
            <thead >
            <tr style="background-color: #000000;color: white;">
                <th class="text-center" align="left">Equipa</th>
                <th class="text-center" align="left">Logótipo</th>
                <th class="text-center" align="left">Estádio</th>
                <th class="text-center" align="left">Ano Fundação</th>
                <th class="text-center" align="left">Presidente</th>
                <th colspan="2" class="text-center" align="left">Opções</th>

            </tr>
            </thead>
            <tbody>

<?php
        $sql="select * from clubes";
        $result=mysqli_query($con,$sql);
        while ($dados = mysqli_fetch_array($result)){
    ?>
        <tr>

            <td class="text-center"><a class="nolink"><?php echo $dados['clubeNome']?></a></td>
            <td class="text-center"><a class="nolink"><img src="../<?php echo $dados['clubeLogoURL'];?>" width="80"; height="80"></a></td>
            <td class="text-center"><a class="nolink"><img src="../<?php echo $dados['clubeEstadioURL'];?>" width="80"; height="80"></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['clubeFundacao']?></a></td>
            <td class="text-center"><a class="nolink"><?php echo $dados['clubePresidenteNome']?></a></td>
            <td><a href="editaEquipa.php?id=<?php echo $dados['clubeId']?>" class="btn btn-sm btn-primary"> Editar</a> </td>
            <td><a href="eliminaEquipa.php?id=<?php echo $dados['clubeId']?>" class="btn btn-sm btn-danger"> Eliminar</a> </td>
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