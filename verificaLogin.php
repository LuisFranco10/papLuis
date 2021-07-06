<?php 
$con = mysqli_connect("localhost:3306","root","","futebol");

$sql = "select * from users where username = '{$_POST["username"]}' and password= '{$_POST["password"]}'";
$result = $con->query($sql);
$count = mysqli_num_rows($result);

if($count >= 1){
    session_start();
    $_SESSION['username'] = $_POST["username"];
    header("location: index.php");
}else{
    echo "Username ou password errada";
}
?>