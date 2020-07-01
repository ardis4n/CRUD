<?php
//koneksi ke mongodb
$m = new MongoDB\Driver\Manager('mongodb://localhost:27017');

echo "koneksi berhasil";

//memasukan database yang sudah di buat
$db = $m ->university;





?>

