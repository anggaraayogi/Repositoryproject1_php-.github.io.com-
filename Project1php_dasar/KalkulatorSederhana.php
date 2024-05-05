<form method="GET" action="">
    Nilai 1 :
    <input type="text" name="n1">
    <br>
    Nilai 2 :
    <input type="text" name="n2">
    <br>
    Operasi: <br>
    <input type="radio" name="operasi" value="tambah"> Penjumlahan<br>
<input type="radio" name="operasi" value="kurang"> Pengurangan<br>
<input type="radio" name="operasi" value="kali"> Perkalian<br>
<input type="radio" name="operasi" value="bagi"> Pembagian<br>
<br>
<input type="submit" name="proses" value="Hitung">

<?php
if (isset($_GET['proses'])){

    $n1= $_GET['n1'];
    $n2= $_GET['n2'];
    $operasi = $_GET['operasi'];

    if($operasi =="tambah"){
        $hasil = $n1 + $n2;
    }
    elseif($operasi=="kurang"){
        $hasil = $n1 - $n2;
    }
    elseif($operasi=="kali"){
        $hasil = $n1 * $n2;
    }
    elseif($operasi=="bagi"){
        $hasil = $n1 / $n2;
    }

    echo "Hasil : ".$hasil;
}
?>