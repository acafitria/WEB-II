<!DOCTYPE html>
    <head>
   </head>
        <body>
            <form action ="" method ="POST">
                Nilai : <input type ="number" name="nilai"></input></br>
                <input type="submit" name="submit" value ="Konversi"></input>
            </form>
    <?php 
        if (isset($_POST["submit"])) {     
            $nilai = $_POST["nilai"];     
            if ($nilai == 0){         
            echo "<h3>Hasil : Nol</h3>";     
           } elseif ($nilai >0 && $nilai < 10) {         
            echo "<h3>Hasil : Satuan</h3>";     
            } elseif ($nilai >= 11 && $nilai < 20) {         
            echo "<h3>Hasil : Belasan</h3>";         
            } elseif ($nilai >= 100 && $nilai < 1000) {         
            echo "<h3>Hasil : Ratusan</h3>";     
            } elseif ($nilai >= 1000) {         
            echo  "<h3>Hasil  :  Anda  Menginput  Melebihi  Limit Bilangan</h3>";     
        } }
        ?>
        <body>
</html>











    