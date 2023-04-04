<!DOCTYPE html>
<head>
</head>
<body>
	<?php
		$namaErr=$nimErr=$jenisErr="";
		$nama=$nim=$jenis="";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {

			if (empty($_POST["nama"])) {
		 	 $namaErr = "nama tidak boleh kosong";
			} else {
		  	$nama =($_POST["nama"]);
			}
			
			if (empty($_POST["nim"])) {
		  	$nimErr = "nim tidak boleh kosong";
			} else {
		  	$nim =($_POST["nim"]);
			}
			if (empty($_POST["jenis"])) {
				$jenisErr = "jenis kelamin tidak boleh kosong";
			  } else {
				$jenis = ($_POST["jenis"]);
			  } 
			
	  	}
	  ?>

    	<form action=""method="post">
        Nama : <input type="text" name="nama" value ="<?php echo $namaErr;?>"></input>
		<span class="error">* <?php echo $namaErr;?></span> <br>       
        NIM : <input type="number" name="nim" value ="<?php echo $nimErr;?>"></input>
		<span class="error">* <?php echo $nimErr;?></span><br>
		
		Jenis Kelamin :<span class="error">* <?php echo $jenisErr;?></span><br>
    	<input type="radio" name="jenis"  <?php if (isset ($jenis) && $jenis=="laki laki") echo "checked";?>
		value="Laki-Laki"> Laki-Laki<br>
    	<input type="radio" name="jenis" <?php if (isset($jenis) && $jenis=="perempuan") echo "checked";?>
		value="Perempuan"> Perempuan <br><br>
    
    	<input type="submit" value="Submit">
		</form>	
 <?php
 if($_POST ){
	echo "<h3>Output</h3>";
	echo $nama ."<br>" ; 
	echo $nim ."<br>" ;
	echo $jenis . "<br>";
 }
	
            
?>
</body>
</html>