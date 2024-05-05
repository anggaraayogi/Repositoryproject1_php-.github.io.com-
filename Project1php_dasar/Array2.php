<form action="" method="get">
    Pilih Jurusan:
    <input type="checkbox" name="jurusan[]" value="Manajemen">Manajemen<br>
    <input type="checkbox" name="jurusan[]" value="Akuntansi">Akuntansi<br>
    <input type="checkbox" name="jurusan[]" value="Informatika">Informatika<br>
    <input type="checkbox" name="jurusan[]" value="Perbankan Syariah">Perbankan Syariah<br>
    <input type="checkbox" name="jurusan[]" value="Teknik Komputer">Teknik Komputer<br>
    <input type="checkbox" name="jurusan[]" value="Teknik Sipil">Teknik Sipil<br>
    <input type="checkbox" name="jurusan[]" value="Hubungan Internasional">Hubungan Internasional<br>
    <input type="checkbox" name="jurusan[]" value="Keuangan Perbankan">Keuangan Perbankan<br>
   <input type="submit" name="proses" value="Proses">
</form>

<?php
if(isset($_GET['proses'])){

    $jurusan = $_GET['jurusan'];

    $jml_dipilih = count($jurusan);

    for($i=0; $i<$jml_dipilih; $i++){
        echo $jurusan[$i]."<br>";
    }
    }
