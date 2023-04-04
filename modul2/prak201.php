<!DOCTYPE html>
    <head>
   </head>
        <body>
            <form action ="" method ="POST">
                Nama : 1<input type ="text" name="nama1"></input></br>
                Nama : 2<input type ="text" name="nama2"></input></br>
                Nama : 3<input type ="text" name="nama3"></input></br>
                <input type="submit" value ="Urutkan"></input>
            </form>
            <?php  
    
            echo "<table width='400px' border = '1'>";
            echo "<th align='left'><b> Output </b> </th>";
            echo "<tr>";
            echo"<td>";

            if(isset($_POST) && ! empty ($_POST)){
                $nama1 = $_POST['nama1'];
                $nama2 = $_POST['nama2'];
                $nama3 = $_POST['nama3'];

                
                if($nama1 < $nama2 && $nama1 < $nama3){ 
                    if($nama2 < $nama3){
                        echo "$nama1<br>";
                        echo "$nama2<br>";
                        echo "$nama3<br>";
                    }else{
                        echo "$nama1<br>";
                        echo "$nama3<br>";
                        echo "$nama2<br>";
                    }
                }else if($nama2 < $nama1 && $nama2 < $nama3){
                    if($nama1 < $nama3){
                        echo "$nama1<br>";
                        echo "$nama2<br>";
                        echo "$nama3<br>"; 
                    }else{
                        echo "$nama2<br>";
                        echo "$nama3<br>";
                        echo "$nama1<br>";
                    }
                }else{
                    if($nama1 < $nama2){
                        echo "$nama3 <br>";
                        echo "$nama1 <br>";
                        echo "$nama2 <br>";
                    }else{
                        echo "$nama3 <br>";
                        echo "$nama2 <br>";
                        echo "$nama1<br>";
                    }
                }
            }
            ?>    

        <body>
</html>
