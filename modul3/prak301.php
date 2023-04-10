<!DOCTYPE html>
    <head> </head>
        <body>
            <form action ="" method ="post">
                Jumlah Peserta : <input type ="text" name="peserta"></input></br>
                <input type="submit" name="submit" value ="Cetak"></input>
            </form>
                <?php 
                    if (isset($_POST["submit"])){ 
                         $peserta = $_POST['peserta'];     
                         $u=1;     
                         while ($u <= $peserta){         
                         if ($u%2 == 0){             
                                echo "<h2><font color='green'>Peserta Ke-$u</font></br>";        
                             } else {             
                            echo "<h2><font color='red'>Peserta Ke-$u</font></br>";         }         
                            $u++;    
                             } 
                         } 
                    ?> 
            
        </body>
 </html>
