<?php
    $mahasiswa = [
        "Ridho" => [
            "Matkul" => [
                "Pemrograman I" => [ "SKS" => 2],
                "Praktikum Pemrograman I" => ["SKS" => 1],
                "Pengantar Lingkungan Lahan Basah" => ["SKS" => 2],
                "Arsitektur Komputer" => ["SKS" => 3]
            ]
        ],
        "Ratna" => [
            "Matkul" => [
                "Basis Data I" => [ "SKS" => 2],
                "Praktikum Basis Data I" => ["SKS" => 1],
                "Kalkulus" => ["SKS" => 3] 
            ]
        ],
        "Tono" => [
            "Matkul" => [
                "Rekayasa Perangkat Lunak" => [ "SKS" => 3],
                "Analisis dan Perancangan Sistem" => ["SKS" => 3],
                "Komputasi Awan" => ["SKS" => 3],
                "Kecerdasan Bisnis" => ["SKS" => 3]
            ]
        ],
    ];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KRS Mahasiswa</title>
    <style>
        .matrix-table { 
            border-collapse: collapse;  
            width: 50%; 
        }
        .matrix-table th, .matrix-table td { 
            border: 1px solid black;  
            padding: 8px 12px; 
        }
        .matrix-table th {
            background-color: #dadada; 
            text-align: left;
        }
        .bg-green {
            background-color: #00b050; 
            color: black;
        }
        .bg-red {
            background-color: #ff0000;
            color: black;
        }
    </style>
</head>
<body>
    
    <table class='matrix-table'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>

        <?php
        $no = 1;
        foreach ($mahasiswa as $nama => $data) {
            
            $total_sks = 0;
            foreach ($data["Matkul"] as $nama_matkul => $info_matkul) {
                $total_sks += $info_matkul["SKS"];
            }

            if ($total_sks <= 7){
                $keterangan = 'Revisi KRS';
                $color_class = 'bg-red';
            } else {
                $keterangan = 'Tidak Revisi';
                $color_class = 'bg-green';
            }

            $is_first_row = true;
            foreach ($data["Matkul"] as $nama_matkul => $info_matkul) {
                echo "<tr>";
                
                if ($is_first_row) {
                    echo "<td>" . $no . "</td>";
                    echo "<td>" . $nama . "</td>";
                    echo "<td>" . $nama_matkul . "</td>";
                    echo "<td>" . $info_matkul["SKS"] . "</td>";
                    echo "<td>" . $total_sks . "</td>";
                    echo "<td class='" . $color_class . "'>" . $keterangan . "</td>";
                    
                    $is_first_row = false; 
                } else {
                    echo "<td></td>"; 
                    echo "<td></td>"; 
                    echo "<td>" . $nama_matkul . "</td>";
                    echo "<td>" . $info_matkul["SKS"] . "</td>";
                    echo "<td></td>"; 
                    echo "<td></td>"; 
                }
                
                echo "</tr>";
            }
            $no++; 
        }
        ?>
    </table>
</body>
</html>