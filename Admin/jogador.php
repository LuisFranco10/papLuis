<?php
include_once ("includes/body.inc.php");
$id=intval($_GET['id']);
$cid=intval($_GET['cid']);
//Skin
$sql="select clubeSkin from clubes where clubeId=".$cid;
$result=mysqli_query($con,$sql);
$dadosClube=mysqli_fetch_array($result);

?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">


    <style>
        thead th { position: sticky; top: 55px; }
    </style>
</head>



<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: rgba(<?php echo $dadosClube['clubeSkin']?>, 1)!important;">
    <div class="container">

        <a class="navbar-brand" href="index.php"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./logout.php"><?php if(isset($_SESSION["username"])){ echo "Logout (" . $_SESSION['username'] . ")"; }else{};?></a>
                </li>
            </ul>
        </div>



    </div>
</nav>
<!-- Page Content -->
<div class="container">
    <?php
    $sql="select * from jogadores where jogadorId=$id";
    $result=mysqli_query($con,$sql);
    $dados=mysqli_fetch_array($result);
    ?>
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4">

            <h1 align="center"><img src="<?php echo $dados['jogadorFotoURL']?>"</h1>

        </div>
        <div class="col-8">
            <p>
                <span class="display-4"><?php echo $dados['jogadorNome']?></span>
            </p>
            <table class="table table-striped table-hover">
                <thead >
                <thead >
                <tr style="background-color: rgba(<?php echo $dadosClube['clubeSkin']?>, 1);color: white;">
                    <th class="text-center" width="25%">Temporada</th>
                    <th class="text-center" width="45%">Equipa</th>
                    <th class="text-right" width="10%">Jogos</th>
                    <th class="text-right" width="10%">Minutos</th>
                    <th class="text-right" width="10%">Golos</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql="select * from plantel inner join clubes on plantelClubeId = clubeId ";
                $sql.=" inner join epocas on epocaId=plantelEpocaId where plantelJogadorId=".$id;
                $result=mysqli_query($con,$sql);
                while($dadosEpocas=mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $dadosEpocas['epocaNome']?></td>
                        <td><?php echo $dadosEpocas['clubeNome']?></td>
                        <td class="text-right">50</td>
                        <td class="text-right">2050</td>
                        <td class="text-right">15</td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>


    </div>

        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark" style="background-color:  rgba(<?php echo $dadosClube['clubeSkin']?>, 1)!important;">
            <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Desporto ao pormenor 2020</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
