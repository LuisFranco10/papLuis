<?php
include_once("Includes/body.inc.php");
top(HOME);
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$sql ="select * from calendario;";
$result = mysqli_query($con, $sql);
?>
    <div id="fh5co-content-section" class="fh5co-section-gray"><p></p>

        <div class="container">
            <div class="row">
                <a class="sub-title-admin"><i class="icon-calendar3"></i><strong> Calendário</strong></a>
                <div class="col text-center">
                    <div class="desc animate-box">
                        <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='adicionar_calendario.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <p></p>
        <div class="active">
            <div class="container">
                <div class="row">
                    <div class="desc animate-box">
                        <table id="t01">
                            <tbody>
                            <tr>
                                <th><a class="nolink"><strong>ID </strong></a></th>
                                <th><a class="nolink"><strong>Local </strong></a></th>
                                <th><a class="nolink"><strong>Data </strong></a></th>
                                <th><a class="nolink"><strong>Vencedor </strong></a></th>
                                <th><a class="nolink"><strong>Nacionalidade </strong></a></th>
                                <th><a class="nolink"><strong> Opções </strong></a></th>
                            </tr>

                            <?php
                            while ($dados = mysqli_fetch_array($result)) {
                            ?>

                            <tr class="active" data-number="1">
                                <td><a class="nolink"><?php echo $dados['calendarioId'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['calendarioNome'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['calendarioData'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['calendarioVencedor'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['calendarioNacionalidade'] ?></a></td>
                                <td><a href="editar_calendario.php?id=<?php echo $dados['calendarioId'] ?>"> <i class="btn btn-primary fas fa-edit text-primary"></i></a><p></p>
                                    <a href="#" onclick="confirmaEliminaC(<?php echo $dados['calendarioId'] ?>)"> <i class="btn btn-danger fas fa-trash  text-danger" ></i> </a></td>
                            </tr>

                                <?php
                            }

                            ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
botper();
?>

