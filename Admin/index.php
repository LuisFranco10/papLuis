<?php
  include_once ("Includes/body.inc.php");
  drawTop();

?>


<br /><br /><br /><br />
<div style="display: flex;flex-flow: wrap row;width: 100%;justify-content: center; align-items: center;">

  <div style="display: flex;flex-flow: wrap column;width: 250px;height: 300px;" >
      <strong>Menu Clubes</strong>
      <a href="listaEquipas.php"><img src="imgs/clubes.jpg" height="auto" width="100px" alt="">
      </a>
  </div>

  <div style="display: flex;flex-flow: wrap column;width: 250px;height: 300px;" >
      <strong>Menu Jogadores</strong>
      <a href="listaJogador.php" ><img class="img-responsive" src="imgs/jogadores.jpg" height="auto" width="200px" alt=""></a>
  </div>


  <div style="display: flex;flex-flow: wrap column;width: 250px;height: 300px;" >
    <strong>Menu Jogos</strong>
    <a href="listaJogos.php"><img class="img-responsive" src="imgs/calendario.png" height="auto" width="200px" alt=""></a>
  </div>
</div>



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


