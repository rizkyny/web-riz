<?php 
$nama=$_POST["nama"];
$alamat=$_POST["alamat"];
$tempatlahir=$_POST["tempat"];
$umur=$_POST["usia"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cek</title>
</head>
<body>
 <h1>Biodata</h1>
<br>
<?php 
echo "Nama :".$nama;
echo "<br>";
echo "Alamat :".$alamat;
echo "<br>";
echo "Tempat Lahir :".$tempatlahir;
echo "<br>";
echo "Umur :".$umur;
?>
<br><br>
<a href="latihan.php">Kembali</a>	
</body>
</html>