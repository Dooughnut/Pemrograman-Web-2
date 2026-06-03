<?php 
$nilai = "";
$unitawal = "";
$unitkonversi = "";
$hasil = "";

    if (isset($_POST['submit']) ){
        $nilai = $_POST['nilai'];
        $unitawal = $_POST['unitawal'];
        $unitkonversi = $_POST['unitkonversi'];
        
        switch ($unitawal){
            case'ifahrenheit': $celcius = ($nilai-32)*5/9; break;
            case 'irheamur': $celcius = $nilai*5/4; break;
            case 'ikelvin': $celcius = $nilai-273.15; break;
            default: $celcius = $nilai;break;
        }
        switch ($unitkonversi){
            case 'ofahrenheit': $hasil = (($celcius * 9/5)+32)." °F"; break;
            case 'orheamur': $hasil = ($celcius * 4/5)." °R"; break; 
            case 'okelvin': $hasil = ($celcius +273.15)." °K"; break;
            default: $hasil = $celcius." °C";break;
        }    
    }    
?>

    <form method="POST" action="">
        <label for="nilai">Nilai : </label>
        <input type="text" name="nilai">
        <br>Dari : <br>
        <input type="radio" name="unitawal" id="ic" value="icelcius">
        <label for="ic"> Celcius</label> <br>
        <input type="radio" name="unitawal" id="if" value="ifahrenheit">
        <label for="if"> Fahrenheit</label><br>
        <input type="radio" name="unitawal" id="ir" value="irheamur">
        <label for="ir">Rheamur</label><br>
        <input type="radio" name="unitawal" id="ik" value="ikelvin">
        <label for="ik">Kelvin</label> <br>
        Ke: <br>
        <input type="radio" name="unitkonversi" id="oc" value="ocelcius"> 
        <label for="oc"> Celcius</label> <br>
        <input type="radio" name="unitkonversi" id="of" value="ofahrenheit"> 
        <label for="of"> Fahrenheit</label> <br>
        <input type="radio" name="unitkonversi" id="or" value="orheamur"> 
        <label for="or">Rheamur</label><br>
        <input type="radio" name="unitkonversi" id="ok" value="okelvin"> 
        <label for="ok">Kelvin</label><br>
        <button type="submit" name="submit">Konversi</button>
    </form>
    <?php echo "<h2>Hasil Konversi : ".$hasil."</h2>" ?>