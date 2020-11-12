<?php
if(isset($_GET['nama'])){
    $nama = $_GET['nama'];
    $email = $_GET['email'];
}else{
    echo "Tidak dapat menemukan data pergi ke page 
    <a href='index.php'>ini</a> untuk memproses data";
}

if(!empty($nama) && !empty($email)){
    echo "Nama : $nama <br> E-mail : $email";
}else{
    die("Maaf, Nama dan email harus di isi");
}
?>