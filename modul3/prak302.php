<!DOCTYPE html>
<head>
    <style>
            img {
                width : 50px;
            }
        </style>
</head>
<body>
    <form action ="" method ="post">
        Tinggi : <input type ="text" name="tinggi"></input></br>
        Alamat Gambar : <input type ="url" name="alamat"></input></br>

        <input type="submit" name="submit" value ="Cetak"></input>
    </form>
    <?php 
        if (isset($_POST['submit'])){     

            $tinggi = $_POST['tinggi'];    
            $alamat = $_POST['alamat'];
            $i = 0; 
                        
            while($i <$tinggi){
                $j = 0;
                while($j <= $tinggi) {
                    if($j > $i) {
                        echo " <img src = '$alamat'  >";
                    } else {
                        echo "  <img src = ' '  >";
                    }
                    $j++;
                }
                $i++;
                echo "<br>";
            }
        } 
    ?> 

</body>
</html>