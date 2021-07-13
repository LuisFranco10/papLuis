<?php
include_once("Includes/body.inc.php");
top(HOME);
$con = mysqli_connect(HOST, USER, PWD, DATABASE);
$sql ="select * from percursos;";
$result = mysqli_query($con, $sql);
?>
    <div id="fh5co-content-section" class="fh5co-section-gray"><p></p>
        <div class="container">
            <div class="row">
                <a class="sub-title-admin"><i class="icon-flow-branch"></i><strong> Percursos</strong></a>
                <div class="col text-center">
                    <div class="desc animate-box">
                        <button class="btn btn-primary" style="height: 60px; width: 300px" onclick="location.href='adicionar_percursos.php'"><strong>ADICIONAR </strong></a><i class="icon-plus3"></i></button>
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
                                <th><a class="nolink"><strong>Nome </strong></a></th>
                                <th><a class="nolink"><strong>Kilómetros </strong></a></th>
                                <th><a class="nolink"><strong>Imagem </strong></a></th>
                                <th><a class="nolink"><strong> Opções </strong></a></th>
                            </tr>


                            <?php
                            while ($dados = mysqli_fetch_array($result)) {
                            ?>

                            <tr class="active" data-number="1">
                                <td><a class="nolink"><?php echo $dados['percursoId'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['percursoNome'] ?></a></td>
                                <td><a class="nolink"><?php echo $dados['percursoKm'] ?></a></td>
                                <td><img width="100" src="../<?php echo $dados['percursoImgUrl'] ?>"></td>
                                <td><a href="editar_percursos.php?id=<?php echo $dados['percursoId'] ?>"> <i class="btn btn-primary fas fa-edit text-primary"></i></a><p></p>
                                    <a href="#" onclick="confirmaEliminaP(<?php echo $dados['percursoId'] ?>)" > <i class="btn btn-danger fas fa-trash  text-danger" ></i></a></td>
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

        <style>
            #img1 {
                width: 80px;
                height: 80px;
                border: 3px solid #3f3f3f;
            }
        </style>


<?php
botper();
?>


