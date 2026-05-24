<?php 
    $nama =$nim = $kelamin= "";
    $namakosong = $nimkosong = $kelaminkosong = "";
    $hasil = "";
    
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $kelamin = $_POST['sex'];

        if (empty($nama)){
            $namakosong = "Nama tidak boleh kosong";
        }
        if (empty($nim)){
            $nimkosong = "NIM tidak boleh kosong";
        }
        if (empty($kelamin)){
            $kelaminkosong = "Jenis kelamin tidak boleh kosong";
        }
        if (!empty($nama)&&!empty($nim)&&!empty($kelamin)){
            $hasil = "".$nama."<br>".$nim."<br>".$kelamin;
        }
    }
?>
<form method="POST" action="">
    <label for = nama> Nama: </label>
    <input type="text"  name="nama"> <span style="color:red">* <?php echo $namakosong ?></span><br>
    <label for = nim> Nim: </label>
    <input type="text"  name="nim"> <span style="color:red">* <?php echo $nimkosong ?></span><br>
    Jenis Kelamin:<span style="color:red">* <?php echo $kelaminkosong ?></span><br>
    <input type="radio" id="cowo" name="sex" value="Laki-laki">
    <label for="laki"> Laki-laki</label> <br>
    <input type="radio" id="cewe" name="sex" value="Perempuan">
    <label for="cewe"> Perempuan</label> <br>
<button type="submit" name="submit">Submit</button>
</form>
<h2>Output:</h2>
<?php echo $hasil?>