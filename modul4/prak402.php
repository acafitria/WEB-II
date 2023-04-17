<!DOCTYPE html>
<head>
</head>
    <body>
        <style>
            tr{
            border: black;
            }
            table{
            border-collapse: collapse;
            }
        </style>
        <table border="1",cellspacing="0" cellpadding ="5">
            <tr bgcolor="#808080">
                <th>Nama</th>
                <th>NIM</th>
                <th>Nilai UTS</th>
                <th>Nilai UAS</th>
                <th>Nilai Akhir</th>
                <th>Huruf</th>
            </tr>
        <?php
        $isi = [
             ["Nama" => "Andi","NIM"=>2101001,"uts"=>87 ,"uas"=>65],
             ["Nama" => "Budi","NIM"=>2101002,"uts"=>76 ,"uas"=>79],
             ["Nama" => "Tono","NIM"=>2101003,"uts"=>50 ,"uas"=>41],
             ["Nama" => "Jessica","NIM"=>2101004,"uts"=>60 ,"uas"=>75],
              ];
        foreach ($isi as $key => $value) {
            $uts = $value['uts'];
            $uas = $value['uas'];
            $isi[$key]['batasnilai'] = ($uts * 0.4) + ($uas * 0.6) ;
            if($isi[$key]['batasnilai']>= 80){
                $isi[$key]['huruf'] = 'A';
            }
            else if($isi[$key]['batasnilai']>= 70 and ($isi[$key]['batasnilai'] <= 79)){
                $isi[$key]['huruf'] = 'B';
            }
            else if($isi[$key]['batasnilai']>= 60 and ($isi[$key]['batasnilai'] <= 69)){
                $isi[$key]['huruf'] = 'C';
            }
            else if($isi[$key]['batasnilai']>= 50 and ($isi[$key]['batasnilai'] <= 59)){
                $isi[$key]['huruf'] = 'D';
            }
            else{
                $isi[$key]['huruf'] = 'E';
            }
        }
        ?>
                <?php
                foreach($isi  as $uts){
                    ?><tr>
                    <td><?php
                    echo $uts["Nama"];
                    ?></td><td><?php
                    echo $uts["NIM"];?>
                      </td><td><?php
                    echo $uts["uts"];?>
                    </td><td><?php
                    echo $uts["uas"];
                    ?></td><td><?php
                    echo $uts["batasnilai"];?>
                      </td><td><?php
                    echo $uts["huruf"];?>
                      </td></tr>
                <?php } ?>
        </table>
</body>
</html>

