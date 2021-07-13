<?php
include_once("Includes/body.inc.php");
top(HOME);
$id = intval($_GET['id']);
$sql ="select * from calendario where calendarioId=".$id;
$result = mysqli_query($con, $sql);
$dados = mysqli_fetch_array($result);
?>


<div id="fh5co-content-section" class="fh5co-section-gray">
    <a class="sub-title-admin"><i class="icon-calendar3"></i><strong> Calendario - </strong>Editar</a>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <div class="desc animate-box">
                    <button class="btn btn-primary" style="height: 50px; width: 200px" onclick="location.href='calendario.php'"><strong>VOLTAR </strong><i class="fas fa-arrow-left"></i></button><p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="active">
        <div class="container">
            <div class="row">
                <div class="desc animate-box">
                    <table id="t01" style="margin-left: -100px">
                        <tbody>
                        <tr>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Localidade </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Data do Começo </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px""><strong>Vencedor </strong></a></th>
                            <th><a class="btn btn-outline" style="cursor: default; width: 230px"><strong>Nacionalidade </strong></a></th>
                            <th><a class="nolink"><strong> <!-- Espaço --> </strong></a></th>
                        </tr>
                        <form action="confirm-edit-calendario.php" method="post" enctype="multipart/form-data">
                            <tr class="active" data-number="1">
                                <td><input name="idCalendario" hidden value="<?php echo $dados['calendarioId']?>"/>
                                    <a class="nolink"></a><input class="btn btn-outline" type="text" name="nomeCalendario" value="<?php echo $dados['calendarioNome']?>" style="cursor: text"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="date" name="dataCalendario" value="<?php echo $dados['calendarioData']?>" style="cursor: pointer"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="vencedorCalendario" value="<?php echo $dados['calendarioVencedor']?>" style="cursor: text"></td>
                                <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="nacionalidadeCalendario" value="<?php echo $dados['calendarioNacionalidade']?>" style="cursor: text"></td>
                                <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Editar" style="height: 45px; width: 150px; border-color: #3f3f3f""></td>
                            </tr
                        </form>

                        </tbody>
                    </table>
                </div>
            </div>
        </div><p></p>
    </div><p></p>

</div>

<?php
botabout();
?>
