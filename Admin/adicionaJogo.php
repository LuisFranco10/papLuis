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
<div class="container " style="margin-top: 5%;">
    <!-- Heading Row -->
    <form action="confirmaNovoJogo.php" method="post" enctype="multipart/form-data">
        <label> Equipa casa: </label>
        <select name="jogoCasaClubeId">
            <option value="-1">Escolha a equipa casa...</option>
            <?php
            $sql = "select * from clubes order by clubeNome";
            $result = mysqli_query($con, $sql);
            while ($dados = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $dados['clubeId'] ?>"><?php echo $dados['clubeNome'] ?></option>
                <?php
            }

            ?>
        </select>

        <label> Equipa fora: </label>

        <select name="jogoForaClubeId">
            <option value="-1">Escolha a equipa fora...</option>
            <?php
            $sql = "select * from clubes order by clubeNome";
            $result = mysqli_query($con, $sql);
            while ($dados = mysqli_fetch_array($result)) {
                ?>
                <option value="<?php echo $dados['clubeId'] ?>"><?php echo $dados['clubeNome'] ?></option>
                <?php
            }

            ?>
        </select>
        <br>
        <label>Resultado:</label>

        <input type="text" name="jogoCasaGolos" placeholder="Golos Casa">
        <input type="text" name="jogoForaGolos" placeholder="Golos Fora">
        <br>
        <label>Data:</label>
        <input type="date" name="jogoData">
<br>



    <div class="text-right" >
        <input type="Submit" class="btn btn-success" value="Adiciona"><br>
        <button type="button" class="btn btn-black">Back</button>
    </div>

    </form>
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
