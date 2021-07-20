<?php
  include_once ("Includes/body.inc.php");
  drawTop();

?>


<br /><br /><br /><br />
<!-- Page Content -->
<div class="container">
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-6">
            <a href="listaEquipas.php"><img class="img-responsive" src="imgs/clubes.jpg" height="auto" width="100px" alt="">
            </a>
            <a><strong>Menu Clubes</strong></a>
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-6">

            <a href="adicionarJogador.php"><img class="img-responsive" src="imgs/jogadores.jpg" height="auto" width="200px" alt=""></a>
            <a><strong>Menu Jogadores</strong></a>

            <div class="col-lg-6">

                <a href="adicionarJornada.php.php"><img class="img-responsive" src="imgs/calendario.png" height="auto" width="200px" alt=""></a>
                <a><strong>Menu Jogadores</strong></a>



            </div>

        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">
        <?php
        $sql="select * from clubes";
        $result=mysqli_query($con,$sql);
        while ($dados = mysqli_fetch_array($result)){
            ?>
            <div class="col-md-4 mb-4">

                        <div class="card-body">

                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
        ?>
    </div>
    <!--
<div class="col-md-4 mb-4">
  <a href="informacaoBenfica.php">
    <div
      id="benfica"
      class="card h-100 transicao"
      onmouseover="document.getElementById('benfica').style.cssText+='background-color: rgba(255, 13, 0, 0.35);'"
      onmouseout="document.getElementById('benfica').style.cssText+='background-color: rgba(0, 0, 0, 0.0);'"
      style="display: flex;justify-content: center;align-items: center;"
    >
      <div class="card-body">
        <img
          class="img-fluid rounded"
          src="imgs/benfica.png"
          style="width: 240px;height: 330px;"
        />
      </div>
    </div>
  </a>
</div>

<div class="col-md-4 mb-4">
  <a href="informacaoPorto.php">
    <div
      id="porto"
      class="card h-100 transicao"
      onmouseover="document.getElementById('porto').style.cssText+='background-color: rgba(1, 18, 90, 0.35);'"
      onmouseout="document.getElementById('porto').style.cssText+='background-color: rgba(0, 0, 0, 0.0);'"
      style="display: flex;justify-content: center;align-items: center;"
    >
      <div class="card-body">
        <img class="img-fluid rounded" src="imgs/Porto.png" />
      </div>
      <br /><br /><br />
    </div>
  </a>
</div>
-->
</div>
<div class="card-body">

</div>
<br /><br /><br />
</div>
</a>
</div>

</div>
<!-- /.row -->
</div>
<!-- /.container -->



        <?php
        drawBottom();
        ?>


