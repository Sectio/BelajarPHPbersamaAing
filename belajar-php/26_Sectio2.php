<?php
$nama = array("Satria","Arsyi","Dhika","Evan","Fabian","Irfan");
for ($i=0; $i <= sizeof($nama)-1; $i++) { 
    $kel = $i + 1;
    echo("Nama : <b>$nama[$i]</b> Kelas : ");
    echo "<b>RPL $kel </b><br>";
}

?>