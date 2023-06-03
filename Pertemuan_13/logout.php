<?php
session_start();

//menghapus semua session
session_destroy();

//mengalihlan halaman dan mengirim pesan logout
header("location:../index.php?pesan=logout");
?>