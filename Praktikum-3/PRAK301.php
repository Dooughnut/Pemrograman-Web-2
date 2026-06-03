<?php
$jumlahpeserta = "";
$hasil = "";
    if(isset($_POST['submit'])){
        $jumlahpeserta = (int)$_POST['jumlah'];
        $i = 1;
        while ($i <= $jumlahpeserta){
            if ($i % 2 == 0){
                $hasil .= "<span style='color:green'><h2>peserta ke $i </h2></span>";
            }else{
                $hasil .= "<span style='color:red'><h2>peserta ke $i </h2></span>";
            }
        $i++;
        }
    }
?>
<form method="POST" action="">
    <label for="jumlahpeserta">Jumlah Peserta :</label>
    <input type="text" name="jumlah" id="jumlahpeserta"><br>
    <button type="submit" name="submit">cetak</button> <br>
</form>

<?php 
    echo $hasil
?>
