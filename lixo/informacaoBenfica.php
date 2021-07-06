<?php
    session_start();
    $con = mysqli_connect("localhost:3306","root","","futebol");
    $sql = "select j.numero, j.nome, j.posicao, j.nacionalidade from jogadores j inner join clubes c on j.idClube=c.id where  c.id = 1";
    $result = $con->query($sql);
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

    <style>
            thead th {position: sticky; top: 55px;}
    </style>

</head>
<h1 align="center">Benfica<br><img src="imgs/benfica.png" style="width: 250px;height: 320px;"></h1>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #FF0D00!important;">
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
            <table class="table table-striped table-hover">
            <thead >
                <tr>
                    <th style="background-color: #FF0D00;color: white;">Nº</th>
                    <th style="background-color: #FF0D00;color: white;">Nome</th>
                    <th style="background-color: #FF0D00;color: white;">Posição</th>
                    <th style="background-color: #FF0D00;color: white;">Nacionalidade</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo '<td>'. $row["numero"] . "</td>";
                    echo '<td>'. $row["nome"] . '</td>';
                    echo '<td>'. $row["posicao"] . '</td>';
                    echo '<td>'. $row["nacionalidade"] . '</td>';
                    echo "</tr>";
                }
                ?>
                </tbody>  
            </table>
    </div>
    <p>
        <footer class="py-5 bg-dark" style="background-color: #FF0D00!important;">
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