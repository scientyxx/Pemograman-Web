<?php
$nim = "0411500400";
$nama = 'Chotimatul Musyarofah';
$umur = 23;
$nilai = 82.25;
$status = True;

echo "NIM   : " . $nim . "<br>";
echo "Nama  : $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Akif";
else
    echo "Status : Tidak Aktif";
?>