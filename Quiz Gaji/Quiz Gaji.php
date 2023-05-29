<?php
// Input data
$nip = "121103011";
$nama = "Sri Alia Rosidah";
$gaji_pokok = 2000000;
$bonus = 500000;
$persentunjangan = 0.05; //gaji pokok
$persenpajak = 0.1; // dari gaji keseluruhan


// Menghitung tunjangan
$tunjangan = $gaji_pokok * $persentunjangan ;

// Menghitung Pajak
$pajak = $gaji_pokok * $persenpajak;

// Menghitung gaji bersih
$gaji_bersih = ($gaji_pokok + $bonus + $tunjangan) - ($pajak);

// Output data
echo "======================================" . "<br>";
echo "NIP = " . $nip . "<br>";
echo "Nama Pegawai = " . $nama . "<br>";
echo "======================================" . "<br>";
echo "Gaji Pokok = Rp. " . $gaji_pokok . "<br>";
echo "Bonus = Rp. " . $bonus . "<br>";
echo "Tunjangan = Rp. " . $tunjangan . "<br>";
echo "Pajak = Rp. " . $pajak . "<br>";
echo "======================================" . "<br>";
echo "Gaji yang harus dibayarkan = Rp. " . $gaji_bersih;
?>
