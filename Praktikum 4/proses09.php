<?php
if (isset($_POST['Proses'])){
    $saran = nl2br($_POST['saran']);
    echo "Kritik / saran Anda adalah : <br>";
    echo "<font color=b;ur><b>$saran</b></font>";
}
?>