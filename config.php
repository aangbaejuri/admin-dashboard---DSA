<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'projek_kelasku'
);

if (!$conn) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

$url = 'http://' . $_SERVER['HTTP_HOST'] . '/';
