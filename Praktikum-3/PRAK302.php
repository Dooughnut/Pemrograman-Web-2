<?php
$jumlah ="";
$hasil = "";
$imageurl ="";
    if(isset($_POST['submit'])){
        $jumlah = $_POST['jumlah'];
        $imageurl = $_POST['gambar'];
        $i = 0;
        while($i <= $jumlah){
            $j = 0;
            while ($j < $i) {
                $hasil .= "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
                $j++;
            }

            $k = 0;
            while ($k < ($jumlah - $i)) {
                $picture = '<img src="'.$imageurl.'" style="width: 32px; height: auto; vertical-align: bottom;">';
                $hasil .= $picture;
                $k++;
            }

            $hasil .= "<br>";
            $i++;
        } 
    }
?>
<form method="POST" action="">
    <label for = jumlah> Tinggi : </label>
    <input type="text"  name="jumlah" id="jumlah"><br>
    <label for = jumlah> Alamat Gambar : </label>
    <input type="text"  name="gambar" id="ph"><br>
    <button type="submit" name="submit">cetak</button>
</form>

<?php
    echo $hasil
?>  