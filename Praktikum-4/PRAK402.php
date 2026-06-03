<?php
    $mahasiswa = [
        "Andi" => [
            "NIM" => 2101001,
            "Nilai UTS" => 87,
            "Nilai UAS" => 65
        ],
        "Budi" => [
            "NIM" => 2101002,
            "Nilai UTS" => 76,
            "Nilai UAS" => 79
        ],
        "Tono" => [
            "NIM" => 2101003,
            "Nilai UTS" => 50,
            "Nilai UAS" => 41
        ],
        "Jessica" => [
            "NIM" => 2101004,
            "Nilai UTS" => 60,
            "Nilai UAS" => 75
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .matrix-table { 
            border-collapse: collapse;  
            width: 40%;
        }
        .matrix-table th, .matrix-table td { 
            border: 1px solid black;  
            padding: 8px; 
        }
        .matrix-table th {
            background-color: #adadad;
            
        }
    </style>
</head>
<body>
    
    <table class='matrix-table'>
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php
            foreach ($mahasiswa as $nama => $data) {
                
                $nilaiakhir = (0.4 * $data["Nilai UTS"]) + (0.6 * $data["Nilai UAS"]);
                if($nilaiakhir<50) {
                    $gradenilai = 'E';
                }elseif($nilaiakhir<60&&$nilaiakhir>49){
                    $gradenilai = 'D';
                }elseif ($nilaiakhir<70&&$nilaiakhir>59) {
                    $gradenilai = 'C';
                }elseif ($nilaiakhir<80&&$nilaiakhir>69){
                    $gradenilai = 'B';
                }elseif ($nilaiakhir>80){
                    $gradenilai = 'A';
                }
                
                echo "<tr>";
                    echo "<td>" . $nama . "</td>";
                    echo "<td>" . $data["NIM"] . "</td>";
                    echo "<td>" . $data["Nilai UTS"] . "</td>";
                    echo "<td>" . $data["Nilai UAS"] . "</td>";
                    echo "<td>" . round($nilaiakhir, 2) . "</td>";
                    echo "<td>" .$gradenilai ."</td>"; 
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>