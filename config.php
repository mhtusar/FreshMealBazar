<?php 

$server = "localhost";
$user = "root";
$pass = "";
$database = "fresh_meal_bazar";
$port =3306;
$conn = mysqli_connect($server, $user, $pass, $database,$port);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>