<?php

$databaseHost = 'localhost';
$databasename = 'crud_db';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect ($databaseHost, $databaseUsername, $databasePassword, $databasename);

if (!$mysqli){
    die("koneksi gagal:  " . mysqli_connect_error());
}

echo "koneksi berhasil";
mysqli_close($mysqli);

?>