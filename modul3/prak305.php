<!DOCTYPE html> 
    <head>      
    </head> 
        <body>     
            <form action="" method="post">         
            <input type="text" name="teks" required>
            <button type="submit" name="submit">Submit</button>     
            </form> </body> 
            </html> 
        <?php 
        if (isset($_POST['submit'])) {         
            $teks=$_POST['teks'];         
            $panjang = strlen($teks);        
             $input = str_split($teks);         
            $j=0;        
            $k=0;         
        echo "<h2>Input:</h2>$teks<br><h2>Output:</h2>";        
              while($k<$panjang){             
        echo strtoupper($input[$j]);
            for($i=1; $i<$panjang; $i++){                 
        echo strtolower($input[$j]);             
            }             
                $k++;             
                $j++;         
            }     
            } 
                ?>