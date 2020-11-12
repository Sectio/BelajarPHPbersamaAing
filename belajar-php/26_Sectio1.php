<?php
$tab = "&nbsp&nbsp&nbsp&nbsp";
$n = "<br>";
$nama = array("Satria","Arsyi","Dhika","Evan","Fabian","Irfan");
echo "Array <br> ( <br>";
for ($i=0; $i <= sizeof($nama)-1; $i++) { 
    $kel = $i+ 1;
    echo("$tab [$i] => Array $n");
    echo("$tab $tab($n");
    echo("$tab $tab $tab [nama] => $nama[$i]$n");
    echo("$tab $tab $tab [Kelas] => RPL [$kel]$n");
    echo("$tab $tab)$n");
}
echo ")";
?>