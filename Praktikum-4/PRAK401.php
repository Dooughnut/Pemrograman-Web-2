<?php
$Lmatrix = '';
$Pmatrix = '';
$nilaiawal = '';
$matrix = [];
    if(isset($_POST['submit'])){
        $Pmatrix = $_POST['panjang'];
        $Lmatrix = $_POST['lebar'];
        $nilaiawal =trim($_POST['nilai']);
        $arrayjadi = array_values(array_filter(explode(" ", $nilaiawal), 'strlen'));
    
        $indexarray = 0;
        for ($i = 0; $i < $Lmatrix; $i++) {
            for ($j = 0; $j < $Pmatrix; $j++) {
                $matrix[$i][$j] = $arrayjadi[$indexarray]; 
                $indexarray++;
            }
        }    
    }    
?>
<head>
    <style>
        .matrix-table { border-collapse: collapse;}
        .matrix-table td { border: 1px solid black; text-align: center; padding: 5;}
    </style>
</head>
<body>
<form method="POST" action="">
    <label for = jumlah> Panjang: </label>
    <input type="text"  name="panjang" id="panjang"><br>
    <label for = jumlah> Lebar: </label>
    <input type="text"  name="lebar" id="lebar"><br>
    <label for = jumlah> Nilai: </label>
    <input type="text"  name="nilai" id="Nilai"><br>
    <button type="submit" name="submit">cetak</button>
</form>

<?php 
if ($Pmatrix==$Lmatrix) {
    echo "<table class='matrix-table'>";
    foreach ($matrix as $row){
        echo '<tr>';
        foreach($row as $cellnilai){
            echo "<td>" . htmlspecialchars($cellnilai) . "</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}else{
    echo 'Panjang nilai tidak sesuai dengan ukuran matriks ';
}
?>
</body>