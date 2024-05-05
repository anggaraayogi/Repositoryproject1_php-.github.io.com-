<?php

function hitung($opr,$n1,$n2){
    //$hasil = $n1 * $n2;
    if($opr=="tambah"){
        $hasil = $n1+$n2;
    }elseif($opr=="kurang"){
        $hasil = $n1-$n2;
    }elseif($opr=="kali"){
        $hasil = $n1*$n2;
    }elseif($opr=="bagi"){
        $hasil = $n1/$n2;
    }else{
        $hasil = "Error ...!";
    }

    return $hasil;
}
$n1 = 1380;
$n2 = 360;
echo  "Hasilnya: ".hitung('kali',1380,360);

?>