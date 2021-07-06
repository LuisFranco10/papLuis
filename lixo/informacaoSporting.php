<?php

?>
<!DOCTYPE html>
<html lang="en">
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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #186E45!important;">
    <div class="container">
        <a class="navbar-brand" href="#"></a>
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
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-4 bg-dark">

            <h1 align="center">Sporting<br><img src="imgs/Sporting.png"></h1>


        </div>
        <div class="col-8 bg-warning">
            <img src="imagens/estadios/luz.jpg" width="640"><br>
            <span><strong>Ano da fundação: </strong>1904</span><br>
            <span><strong>Presidente: </strong>Luís Filipe Vieira</span>
        </div>


    </div>


    <table class="table table-striped table-hover">
        <thead >
            <tr style="background-color: #186E45;color: white;">
                <th class="text-center" width="10%">Foto</th>
                <th class="text-center" width="10%">Nº</th>
                <th class="text-center" width="35%">Nome</th>
                <th class="text-center" width="30%">Posição</th>
                <th class="text-center" width="15%">Nacionalidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center"><a href="brunoFernandes.php"><img src="imagens/jogadores/svilar.jpg" height="50"></a></td>
                <td class="text-center">1</td>
                <td class="text-left">Mile Svilar </td>
                <td class="text-center">Guarda-Redes </td>
                <td class="text-center">Belga </td>
            </tr>


         <?php
         /*
               while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo '<td>'. $row[""] . '</td>';
                    echo '<td> <a href="./brunoFernandes.php">'. $row["numero"] . "</a></td>";
                    echo '<td>'. $row["nome"] . '</td>';
                    echo '<td>'. $row["posicao"] . '</td>';
                    echo '<td>'. $row["nacionalidade"] . '</td>';
                    echo "</tr>";
                }
*/
         ?>

        </tbody>
        </tr>
    </table>
    <p>
        <!-- /.container -->

        <!-- Footer -->
        <footer class="py-5 bg-dark" style="background-color: #186E45!important;">
            <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Desporto ao pormenor 2017</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>