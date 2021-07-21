<?php
include_once("../includes/body.inc.php");
drawTop();
?>
<script>
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function () {
            var output = document.getElementById('output_image');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<div class="container text-center " style="margin-top: 5%;">


                <table align="center" class="table table-striped" style="background-color: #D2E7F5">
                    <tr>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Equipa Casa </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Golos Casa </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Equipa Fora </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Golos Fora </strong></a></th>
                        <th><a class="btn btn-outline" style="cursor: default; width: 130px"><strong>Data</strong></a></th>
                        <th><a class="nolink" style="cursor: default; width: 170px"><strong><!-- ESPAÇO --> </strong></a></th>
                    </tr>
                    <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
                        <tr class="active" data-number="1" style="background-color: #DEE2E6">
                            <td>
                                <?php
                                $sql="select * from clubes";
                                $res=mysqli_query($con,$sql);

                                ?>
                                <select name="jogoCasaClubeId" style="cursor: text; width: 170px; height: 50px">
                                    <?php
                                    while($dados=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $dados['clubeId']?>"><?php echo $dados['clubeNome']?></option>
                                        <?php
                                    }

                                    ?>
                                </select>



                            </td>
                            <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="jogoCasaGolos" style="cursor: text; width: 170px; height: 50px"></td>
 <td>
                                <?php
                                $sql="select * from clubes";
                                $res=mysqli_query($con,$sql);

                                ?>
                                <select name="jogoForaClubeId" style="cursor: text; width: 170px; height: 50px">
                                    <?php
                                    while($dados=mysqli_fetch_array($res)){
                                        ?>
                                        <option value="<?php echo $dados['clubeId']?>"><?php echo $dados['clubeNome']?></option>
                                        <?php
                                    }

                                    ?>
                                </select>



                            </td>
                            <td><a class="nolink"></a><input class="btn btn-outline" type="text" name="jogoForaGolos" style="cursor: text; width: 170px; height: 50px"></td>
                            <td><a class="nolink"></a><input class="btn btn-outline" type="date" name="jogoData" style="cursor: text; width: 170px; height: 50px"></td>
                            <td><a class="nolink"></a><input class="btn btn-success" type="submit" value="Adicionar" style="height: 50px; width: 150px; border-color: #3f3f3f""></td>

                        </tr>
                    </form>
                    </tbody>
                </table>

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
drawBottom();
?>
