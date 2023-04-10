<!DOCTYPE html> 
     <head>        
    </head> 
        <body> 
            <form action="" method="POST">         
                Batas Bawah : <input type="number" name="bawah" ></br>        
                 Batas Atas : <input type="number" name="atas" ></br>         
            <input type="submit" value="submit" name="submit"></br>     
            </form></br> 
        </body> 
</html> 
    <?php 
    if (isset($_POST['submit'])){     
    $bawah = $_POST['bawah'];    
     $atas = $_POST['atas']; 
     $i = $bawah;     
     do{        
         if (($i+7)%5==0){             
            echo  "<img  src='foto.png'  width='15px' height='15px'>";         
        }else{             
            echo $i;         
        }         
        echo "&nbsp";        
         $i++;     
     }while($i<=$atas); 
     } 
     ?>
