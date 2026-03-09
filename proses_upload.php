<?php

$gambar = $_FILES['gambar'];
$nsmsFile = $gambar['name'];
$ukuran = $gambar['size'];
$tmp = $gambar['tmp_name'];

$folder = 'uploads/';

$ekstensiValid = ['jpg', 'png', 'jpeg'];
$ekstensi = strtolower(pathinfo($mamaFile, PATHINFO_EXTENSION));
if(!in_array($ekstensi, $ekstensiValid)){
    
}
?>