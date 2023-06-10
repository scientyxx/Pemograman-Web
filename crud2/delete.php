<?php
//
include_once("config.php");

$id = $_GET['id'];

//
$result = mysqli_query($mysqli, "DELETE FROM users WHERE 0d=$id");

//
header("Location:index.php");

?>