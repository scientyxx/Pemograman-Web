<?php

$host = mysql_connect("localhost", "root", "xxx");
if($host){
    echo " koneksi hots berhasil.<br>";
} else{
    echo " koneksi host tidak berhasil.<br>";
}


$db = mysql_select_db("konekdb");

if($db){
    echo " koneksi database berhasil<br>";

}else{
    echo "Koneksi database tidak berhasil<br>";
}
?>