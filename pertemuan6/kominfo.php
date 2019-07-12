<?php 
if (isset($_POST["nama"])) {
	header("Location: cek.php");
	exit;
} else {
	$kosong=true;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<h4>Login Admin</h4>
<ul>
<?php if (isset($kosong)) : ?>	
<p>Nama masih kosong!</p>
<?php endif; ?>	
<form action="cek.php" method="post">
	<li>
		<label>Nama :</label>
		<input type="text" name="nama">
	</li>
</form>
</ul>
</body>
</html>