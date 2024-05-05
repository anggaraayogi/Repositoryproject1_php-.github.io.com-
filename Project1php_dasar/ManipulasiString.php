<?php

//membuat variabel dengan tipe data string
$kalimat = "belajar PHP di channel Youtubenya Bapak Harry Aspriyono";

//strtolower
$kalimat_modif1 = strtolower($kalimat);
echo $kalimat_modif1;
echo "<br>";

//strtoupper
$kalimat_modif2 = strtoupper($kalimat);
echo $kalimat_modif2;
echo "<br>";

//ucfirts
$kalimat_modif3 = ucfirst($kalimat);
echo $kalimat_modif3;
echo "<br>";

//ucwords
$kalimat_modif4 = ucwords($kalimat);
echo $kalimat_modif4;
echo "<br>";

//strlen
$jumlah_karakter = strlen($kalimat);
echo $jumlah_karakter;
echo "<br>";

//str_word_count
$jumlah_kata = str_word_count($kalimat);
echo $jumlah_kata;
echo "<br>";

//strrev
$dibalik = strrev($kalimat);
echo $dibalik;
echo "<br>";

//str_replace
$ganti = str_replace("belajar","kuliah",$kalimat);
echo $ganti;
echo "<br>";

//substr
$hasil = substr($kalimat,9,-4);
echo $hasil;
echo "<br>";
?>