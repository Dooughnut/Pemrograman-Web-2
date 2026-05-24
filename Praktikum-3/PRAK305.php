<?php 
$inputtext= "";
$hasil = "";
$printhasil = "";
    
if(isset($_POST['submit'])){
    $inputtext =$_POST['input'];
    $hasil =(str_split($inputtext, 1));
    for ($i=0; $i < strlen($inputtext); $i++) { #berapa kali tiap word di print 
        for ($j=1; $j <= strlen($inputtext) ; $j++) {  #berapa kali tiap letter di print
            if ($j == 1){
                $printhasil .= strtoupper($hasil[$i]);
            }else{
                $printhasil .= strtolower($hasil[$i]);
            }
        }
    }
}
?>

<form action="" method="post">
    <label for="input"></label>
    <input type="text" name="input" id="input">
    <button type="submit" name="submit">submit</button>
</form>
<?php 
    echo '<h3>Input:</h3>';
    echo $inputtext;
    echo '<h3>Output:</h3>';
    echo $printhasil
?>