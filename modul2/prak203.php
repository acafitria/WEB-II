<!DOCTYPE html>
    <head>
   </head>
        <body>
        <form action=""method="post">
        Nilai <input type="number" name="nilai"></input></br>         
        Dari : </br>
    <input type="radio" name="dari" value="Celcius"> Celcius<br>
    <input type="radio" name="dari" value="Fahreinheit">Fahreinheit <br>
    <input type="radio" name="dari" value="Rheamur">Rheamur <br>
    <input type="radio" name="dari" value="Kelvin">Kelvin<br>
    Ke : </br>
    <input type="radio" name="ke" value="Celcius"> Celcius<br>
    <input type="radio" name="ke" value="Fahreinheit">Fahreinheit <br>
    <input type="radio" name="ke" value="Rheamur">Rheamur <br>
    <input type="radio" name="ke" value="Kelvin">Kelvin<br>
    
    <input type="submit" name="konver">
</form><br>
<?php 
        if(isset($_POST['konver']) && isset($_POST['nilai']) && isset($_POST['dari']) && isset($_POST['ke'])){
            $nilai = $_POST['nilai'];
            $dari = $_POST['dari'];
            $ke = $_POST['ke'];
            if($dari == "Celcius" && $ke == "Celcius"){
                $hasil = $nilai;
                echo "<b><h1> Hasil : $hasil </h1>";
            }else if($dari == "Celcius" && $ke == "Fahreinheit"){
                $hasil = $nilai * 1.8 + 32;
                echo "<b><h>Hasil : $hasil</h1>";
            }else if($dari == "Celcius" && $ke == "Reamur"){
                $hasil = $nilai *  0.8;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Celcius" && $ke == "Kelvin"){
                $hasil = $nilai + 273.15;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Fahreinheit" && $ke == "Celcius"){
                $hasil =  ($nilai - 32) / 1.8;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Fahreinheit" && $ke == "Fahreinheit"){
                $hasil = $nilai;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Fahreinheit" && $ke == "Reamur"){
                $hasil = ($nilai - 32) / 2.25;
                echo "<b><h>Hasil : $hasil</h>";
            } else if($dari == "Fahreinheit" && $ke == "Kelvin"){
                $hasil = ($nilai + 459.67) / 1.8;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Reamur" && $ke == "Celcius"){
                $hasil = $nilai / 0.8;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Reamur" && $ke == "Fahreinheit"){
                $hasil = $nilai *  2.25 + 32;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Reamur" && $ke == "Reamur"){
                $hasil = $nilai;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Reamur" && $ke == "Kelvin"){
                $hasil = $nilai / 0.8 + 273.15;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Kelvin" && $ke == "Celcius"){
                $hasil = $nilai - 273.15;
                echo "<b><h>Hasil : $hasil</h>";
            }else if($dari == "Kelvin" && $ke == "Fahreinheit"){
                $hasil = $nilai * 1.8 - 459.67;
                echo "<b><h>Hasil : $hasil</h>";
            } else{
                $hasil = ($nilai - 273.15) * 0.8;
                echo "<b><h>Hasil : $hasil</h>";
            }
        }
    ?>
        <body>
</html>











    