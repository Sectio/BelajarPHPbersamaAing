<?php
session_start();
echo "Nama anda adalah ".$_SESSION['nama'];
echo "<br><a href='session1.php'>Menuju ke halaman awal</a>";
?>