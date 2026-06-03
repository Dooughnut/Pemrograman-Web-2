<?php 
$jumlah = isset($_POST['jumlah']) ? (int)$_POST['jumlah'] : 0;
$hasil = "";

if (isset($_POST['tambah'])) {
    $jumlah++;
}

if (isset($_POST['kurang'])) {
    if ($jumlah > 0){
        $jumlah--;
    }
}

$i = 1;
while ($i <= $jumlah ){
    $hasil .= '<img src="star-images-9441.png" style="width: 32px; height: auto; vertical-align: bottom;">';
    $i++;
}

if(empty($_POST)){
?>

<form action="" method="post">
    <label for="jumlah"> jumlah Bintang</label>
    <input type="text" name="jumlah" id="jumlah" value="<?php echo $jumlah ?>"><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php 
}else{
    echo 'Jumlah bintang '.$jumlah.'<br>';
        echo $hasil;
    ?>
    <br>
    <form action="" method="post">
    <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
    <button type="submit" name="tambah">Tambah</button>
    <button type="submit" name="kurang">Kurang</button>
    </form>
<?php } ?>