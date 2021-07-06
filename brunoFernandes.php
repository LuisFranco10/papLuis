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
    <!-- Heading Row -->
    <div class="row my-4">
        <div class="col-lg-8">

        </div>


    </div>


    <table class="table table-striped table-hover">
        <thead >
        <thead >
        <tr style="background-color: #186E45;color: white;">
            <th class="text-center" width="10%">Temporada</th>
            <th class="text-center" width="10%">Equipa</th>
            <th class="text-center" width="35%">Jogos</th>
            <th class="text-center" width="30%">Golos Marcados</th>
            <th class="text-center" width="15%">Assintencias</th>
        </tr>
        </thead>
        <tbody>

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