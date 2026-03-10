<?php

$gambar = $_FILES['gambar'];
$namaFile = $gambar['name'];
$ukuran = $gambar['size'];
$tmp = $gambar['tmp_name'];

$folder = 'uploads/';

$ekstensiValid = ['jpg', 'png', 'jpeg'];
$ekstensi = strtolower(pathinfo($gambar['name'], PATHINFO_EXTENSION));
if(!in_array($ekstensi, $ekstensiValid)){
    echo "<div class='alert alert-danger'>Ekstensi tidak valid</div>";
    exit;
}
if($ukuran > 1000000) {
    echo "<div class='alert alert-danger'>Ukuran file terlalu besar</div>";
    exit;
}

//rename fiilel agar namanya jadi unik
$namaBaru = uniqid() . "." . $ekstensi;

if(move_uploaded_file($tmp, $folder . $namaBaru)){
    echo "<div class='alert alert-sucsess'>File berhasil diupload</div>";
    echo "<img src='" . $folder . $namaBaru . "' alt='gambar' class='img-fluid mt-3'>";
}else{
    echo "<div class='alert alert-danger'>Gagal upload filer</div>";
}
?>