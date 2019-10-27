<?php

	if (isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		echo "Nama = $nama";
		echo "<br>";
		if (isset($_POST['alamat'])) {
			$alamat = $_POST['alamat']
			echo "Alamat = $alamat";
		}
		echo "<br>";
		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
			echo "Jenis Kelamin = $gender";
		}
		echo "<br>";
		if (isset($_POST['goldar'])) {
			$goldar = $_POST['goldar'];
			echo "Golongan Darah = $goldar";
		}
		echo "<br>";
		if (isset($_POST['hobi'])) {
			$hobi = $_POST['hobi'];
			echo "Hobby = $hobi";
		}
		echo "<br>";
		if (isset($_POST['Keterangan']) {
			$Keterangan  = $_POST['Keterangan'];
			echo "Keterangan = $Keterangan";
		}
	}
?>	