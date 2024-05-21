<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database_name = "tugas_php";

$db = mysqli_connect($hostname, $user,$password, $database_name);

if($db->connect_error) {
    echo "koneksi data";
    die("error!"); 
}

echo"ad";
?>