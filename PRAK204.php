<?php 
$hasil = "";
    
if(isset($_POST['submit'])){
    $nilai =$_POST['nilai'];
    
    if ($nilai== '0'){
        $hasil = "Nol";
    } elseif ($nilai < 10) {
        $hasil = "Satuan";
    } elseif ($nilai < 20) {
        $hasil = "Belasan";
    } elseif ($nilai < 1000 && $nilai > 99 ) {
        $hasil = "Ratusan";
    } else {
        $hasil = "Anda Menginput Melebihi Limit Bilangan";
    }
}
?>

<form action="" method="post">
    <label for="nilai">Nilai : </label>
    <input type="text" name="nilai" id="nilai"><br>
    <button type="submit" name="submit">Konversi</button>
</form>
<?php echo "<h2> Hasil: ".$hasil. "</h2>" ?>