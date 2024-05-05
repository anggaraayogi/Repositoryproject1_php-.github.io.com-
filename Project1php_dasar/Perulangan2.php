<form action="" method="get">
Jumlah file yang akan diupload 
<input type="text" name="jml">
<input type="submit" value="Proses">
</form>

<?php
if(isset($_GET['jml'])){

    $jumlah = $_GET['jml'];

    for($i=1; $i<=$jumlah; $i++){
        echo "File ke $i : <input type=\"file\"
        name='file_$i'><br>";
    }
}

?>
