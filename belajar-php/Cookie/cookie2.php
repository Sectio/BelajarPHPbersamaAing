<?php
    if(isset($_COOKIE['username'])){
        echo "<h1>Cookie 'username' ada. Isinya :  ".$_COOKIE['username'] . "</h1>";

    }else {
        echo "<h1>Cookie 'username' TIDAK ada.</h1>";
    }
    if(isset($_COOKIE['fullname'])){
        echo "<h1>Cookie 'fullname' ada. Isinya : ". $_COOKIE['fullname']."</h1>" ;

    }else {
        echo "<h1>Cookie 'fullname' Tidak ada";
    }

    echo "<h2>Klik <a href='cookie1.php'>disini</a>Untuk Kembali</h2>";
?>