<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h2>Menu Login</h2><br>
	Nama<input type="text" name="nama"><br>
	Nim &nbsp<input type="text" name="nim"><br>
	<input type="submit" name="submit" value="submit">

</body>
</html>

<?php
	session_start();

	if(isset($_POST['submit'])){
		$nama=$_POST['nama'];
		$nim=$_POST['nim'];

		header('Location:menuawal.php');
	}

?>