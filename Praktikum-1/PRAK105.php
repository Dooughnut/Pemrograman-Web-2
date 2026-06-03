<!DOCTYPE html>
<html>
    <table border="1">
    <?php 
        $smartphone = array("S22"=>"Samsung Galaxy S22","S22+"=>"Samsung Galaxy S22+","A03"=>"Samsung Galaxy A03","Xcover5"=>"Samsung Galaxy Xcover5");
    ?>
        <tr style=" background-color:red">
            <td><h1>Daftar Smartphone Samsung</h1></td>
        </tr>
        <tr>
            <td><?php
            echo $smartphone ["S22"];
            ?></td>
        </tr>
        <tr>
            <td><?php
            echo $smartphone ["S22+"];
            ?></td>
        </tr>
        <tr>
            <td><?php
            echo $smartphone ["A03"];
            ?></td>
        </tr>
        <tr>
            <td><?php
            echo $smartphone ["Xcover5"];
            ?></td>
        </tr>
    </table>
    
</html>