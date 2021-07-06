<?php header("content-type: text/html; charset=ISO-8859-1");
include_once ("config.inc.php");
$con=mysqli_connect(HOST,USER,PASS,DB);
function drawTop(){
?>
	<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="css/small-business.css" rel="stylesheet" />
        <style>
          .navbar {
            padding: 0px;
          }

          .transicao {
            transition: 0.7s;
          }
        </style>
      </head>

      <body>
        <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-bottom: 5%!important;">
          <img src="imgs/logo.png" />
          <div class="container">
            <a class="navbar-brand" href="index.php"></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarResponsive"
              aria-controls="navbarResponsive"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php"
                    >Home
                    <span class="sr-only">(current)</span>
                  </a>

              </ul>
            </div>
          </div>
        </nav>



<?php
}


function drawBottom(){
?>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; Futebol ao pormenor 2017
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

<?php
}
?>