<?php 
if (isset($_POST["submit"])) {
	if (isset($_POST["nama"])&&($_POST["alamat"])&&($_POST["tempat"])&&($_POST["usia"])) {
		header("Location: cek.php");
		exit;
	} else {
		$kosong=true;
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan</title>
</head>
<body>
<h1>Form Biodta</h1>
<?php if (isset($kosong)) :?>
<p style="color: red; font-style: italic">lengkapi data!</p>
<?php endif; ?>
<ul>
<form action="cek.php" method="post">
	<li>
		<label for="nama">Nama :</label>
		<input type="text" name="nama" id="nama">
	</li>
<br>	
	<li>
		<label for="alamat">Alamat :</label>
		<input type="textarea" name="alamat" id="alamat">
	</li>
<br>
	<li>
		<label for="tempat">Tempat Lahir :</label>
		<input type="text" name="tempat" id="tempat">
	</li>
<br>	
	<!-- <li>	
		<label for="jk">Jenis Kelamin :</label>
		<select>
			<option id="jk">Laki-laki</option>
			<option id="jk">Perempuan</option>
		</select>
	</li>
<br> -->
	<li>
		<label for="usia">Usia :</label>
		<input type="text" name="usia" size="4" id="usia">
	</li>
<br>	
	<button type="submit" name="submit">Simpan</button>		
</form>
</ul>
</body>
</html>