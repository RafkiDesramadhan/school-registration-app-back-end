<?php 
    $server = 'localhost';
    $user = 'root';
    $pw = '';
    $db = 'pendaftaran_siswa';

    $link = mysqli_connect($server, $user, $pw, $db);

    if(!$db){
        die("koneksi database gagal!");
    }
?>