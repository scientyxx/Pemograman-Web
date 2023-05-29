<?php

if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    echo "$nama</br>";
} else{ 
    echo  "Name is required";
}
if (isset($_POST['submit'])){
    $email = $_POST['email'];
    echo "$email</br>";
} else{ 
    echo  "email is required";
}
if (isset($_POST['submit'])){
    $website = $_POST['website'];
    echo "$website</br>";
} else{ 
    echo  "";
}
if (isset($_POST['submit'])){
    $komen = nl2br($_POST['komen']);
    echo "$komen</br>";
} else {
    echo  "";
}
if (isset($_POST['submit'])){
    $gender = $_POST['gender'];
    echo "$gender<br>";
}
?>