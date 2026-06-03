<?php
$sortedList = [];
$Nama1 = $_POST["nama1"];
$Nama2 = $_POST["nama2"];
$Nama3 = $_POST["nama3"];

function sortingname($n1,$n2,$n3){
    $Listnama = [$n1,$n2,$n3];
    sort($Listnama);
    return $Listnama;
}
$sortedList = sortingname($Nama1, $Nama2, $Nama3);
?>

Hasil yang diinginkan: <br>
<form method="POST" action="">
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo "<label for='nama$i'>Nama: $i</label> ";
        echo "<input type='text' name='nama$i' id='nama$i'> <br>\n";
    }
    ?>
    <button type="submit">Urutkan</button> <br>
</form>

<?php 
    foreach ($sortedList as $nama) {
        echo $nama."<br>";
    }
?>