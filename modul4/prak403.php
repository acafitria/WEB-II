<!DOCTYPE html>
<head>
</head>
    <body>
    <style>
        tr{
            border: #000000;
        }
        table{
            border-collapse: collapse;
        }
    </style>
    <table border="1",cellspacing="0" cellpadding ="5">
        <tr bgcolor = "#808080">
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
    

    <?php
        $isi = [
             ["no"=>1,"nama" => "Ridho","Matkul" => ["Pemrograman 1","Praktikum Pemrograman 1","pengantar Lingkungan Lahan Basah","Arsitektur Komputer"],"sks"=>[2,1,2,3]],
             ["no"=>2,"nama" => "Ratna","Matkul" => ["Basis Data 1","Praktikum Basis Data 1","Kalkulus"],"sks"=>[2,1,3]],
             ["no"=>3,"nama" => "Tono","Matkul" => ["Rekayasa Perangkat Lunak","Analisa dan Perancangan Sistem","Komputasi Awan","Kecerdasan Bisnis"],"sks"=>[3,3,3,3]],
        ];
        foreach ($isi as $key => $value) {
            $isi[$key]['total'] = array_sum($value['sks']);
            if($isi[$key]['total'] < 7){
                 $isi [$key]['ket'] = "Revisi KRS";
            }
            else{
                $isi[$key]['ket'] = "Tidak Revisi";
            }
        }
        ?>
        
    <?php
        foreach($isi as $a){
            ?>
            <tr>
                <td><?php
                echo $a["no"];
                ?></td>
                <td>
                    <?php
                echo $a["nama"];
                ?></td><td>
                    <?php
                echo $a["Matkul"][0];?>
                </td><td>
                    <?php
                echo $a["sks"][0];?>
                </td><td>
                    <?php
                    echo $a["total"];
                ?></td>
                <?php
                if($a['total'] < 7){
                    ?> <td bgcolor = "#ff0000">
                        <?php
                    echo $a["ket"];
                }else{
                    ?> <td bgcolor = "#00800">
                        <?php
                    echo $a["ket"];
                }?></td></tr>
                <tr>
                <td></td>
                <td></td>
                    <td>
                        <?php
                echo $a["Matkul"][1];?>
                </td><td>
                    <?php
                echo $a["sks"][1];?>
                </td><td></td><td></td></tr>
                <tr>
                <td></td>
                <td></td>
                    <td>
                        <?php
                echo $a["Matkul"][2];?>
                </td><td><?php
                echo $a["sks"][2];?>
                </td><td></td><td></td></tr>
                <tr>
                <?php
                    if(!empty($a['Matkul'][3])){?>
                    <td></td><td></td><td>
                        <?php    
                        echo $a["Matkul"][3];?>
                    </td><td>
                        <?php
                    }
                    if(!empty($a['sks'][3])){?>
                    <?php
                        echo $a["sks"][3];?>
                        </td><td></td></tr>
                        <?php
                    }?>
                    <?php
                } ?>
        </table>
</body>
</html>