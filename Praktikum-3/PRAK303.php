<?php 
    $batasawal = "";
    $batasakhir = "";
    $hasil = "";
    if(isset($_POST['submit'])){
        $batasawal = $_POST['batasawal'];
        $batasakhir = $_POST['batasakhir'];

        do{
            if (($batasawal + 7)% 5 == 0){
                $hasil .= '<img src="star-images-9441.png" style="width: 1%; height: auto;">'." ";
            }else{
                $hasil .= $batasawal." ";
            }
            $batasawal++;
        }while($batasawal <= $batasakhir);
    }
?>

<form method="POST" action="">
    <label for = jumlah> Batas Bawah : </label>
    <input type="text"  name="batasawal" id="awal"><br>
    <label for = akhir> Batas Atas : </label>
    <input type="text"  name="batasakhir" id="akhir"><br>
    <button type="submit" name="submit">cetak</button>
</form>
<?php echo $hasil ?>