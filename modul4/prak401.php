<!DOCTYPE html>
    <head>
    </head>
        <body>
            <form action="" method="POST">     
            Panjang <input  type  ="text"  name="P"><br>
            Lebar <input  type  ="text"  name="L"><br> 
            Nilai <input  type  ="text"  name="N"><br>   
            <button type = "Cetak" name="cetak">Submit</button><br> 
            </form> 
            <style> table, tr, td{             
            border: solid 1px black;
            border-collapse: collapse;             
            padding: 5px;             
            text-align: center;                         
            } </style> 
            <?php
                $P = "";     
                $L = "";     
                $N = "";      
            ?>
              
            <?php                
        if(isset($_POST['cetak'])){             
            if(isset($_POST['P'])){                 
                $panjang = $_POST['P'];             
            }             
            if(isset($_POST['L'])){                 
                $lebar = $_POST['L'];             
            }             
            if(isset($_POST['N'])){                 
                $nilai = (String)$_POST['N']; 
            }             
            $a = explode(" ",$nilai);              
            if($panjang * $lebar < count($a)){                         
                echo  "Panjang  nilai  tidak  sesuai  dengan  ukuran matrix";             
            } else { ?>             
                <table cellspacing="0" cellpadding ="0">             
                    <?php                 
                        for($i = 0 ; $i < $panjang;$i++){                     
                    ?>
                    <tr>                        
                    <?php for($j=0 ;$j<$lebar;$j++){ ?>                            
                        <td style="text-align: center;">                             
                        <?php                             
                            if(empty($a[($i*$panjang)+$j])){                                 
                                echo 0;                             
                            } else {                                
                                echo $a[($i*$panjang)+$j];                             
                            }                              
                        ?>                         
                    </td>                        
                    <?php 
                } 
                ?>                     
                    </tr>                  
                    <?php 
                } 
                ?>         
                    </table>  
        <?php
            }     
        }     
        ?> 
            </body>
<html>