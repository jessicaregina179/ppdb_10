<?php
$server = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'pesat10_ppdb';
$db = mysqli_connect($server, $userdb, $passdb, $namadb);

if(!$db){
    die('gagal terhubung ke database: ' . mysqli_connect_error());
};