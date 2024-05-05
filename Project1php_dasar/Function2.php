<?php
echo "<body style='background-color:pink'>";

//membuat Function
function salam($nama,$alamat,$atlit,$height){
    echo "Well come !!!!";
    echo "<br>";
    echo "Ex Bio :";
    echo "<hr>";
    echo "Nama : ".$nama;
    echo "<br>";
    echo " Tinggal di ".$alamat;
    echo "<br>";
    echo "Atlit " .$atlit;
    echo "<br>";
    echo "Height" .$height;
}

//memanggil atau menjalankan function
$n = "Yogi Anggara";
$alm = "Kampung Melayu";
$atl = " : 404 not found";
$hg = ": 165cm";
salam($n,$alm,$atl,$hg);

echo "<hr>";
$n = "Nishidaa Yuji";
$alm ="inabe nishida, Nagoya";
$atl =": VolleyBall in Japan";
$hg =": 185cm";

salam($n,$alm,$atl,$hg);

?>