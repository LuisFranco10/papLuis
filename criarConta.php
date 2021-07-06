<?php 
$con = mysqli_connect("localhost:3306","root","","futebol");

$sql = "INSERT INTO users
VALUES (default,'{$_POST["username"]}', '{$_POST["password"]}', 0)";

if (!($con->query($sql) === TRUE)) {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con -> close();
header('Location: ./login.html');
?>