<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database Mysqli</title>
</head>
<body>
	<h1>Demo Koneksi Database MySQLi</h1>
	<?php
	$conn = mysqli_connect("localhost","root");
	if($conn){
		echo "OK";
	}else{
		echo "Server not Connected";
	}
	?>
</body>
</html>