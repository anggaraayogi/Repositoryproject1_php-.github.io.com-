<?php

//variabel
/*
$teman = "Bendi";
$teman = "juli";
$teman = "Aldi";
$teman = "Salsa";

echo $teman;
*/
$teman = array("Bendi","juli","Aldi","Salsa");

/*
echo $teman[0]."<br>";
echo $teman[1]."<br>";
echo $teman[2]."<br>";
echo $teman[3]."<br>";
*/

$jmldata = count($teman);
for($indeks=0; $indeks<$jmldata; $indeks++){
    echo $teman[$indeks]."<br>";
}


?>