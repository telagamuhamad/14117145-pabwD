<?php

$cari = $_POST["cari"];

$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"dbtugasform");
$query = mysqli_query($conn, "SELECT NRP,mahasiswa.Nama,photo,jurusan.Nama FROM mahasiswa JOIN jurusan ON mahasiswa.ID_jur = jurusan.ID_jur WHERE mahasiswa.nama LIKE '%$cari%'");

$baris = mysqli_num_rows($query);
echo "<br>"."Ditemukan : $baris"."<br>";

while ($data = mysqli_fetch_array($query)){
	$photo = $data[2];

	echo "NRP :";
	echo $data[0]."<br>";
	echo "Nama :";
	echo $data[1]."<br>";
	echo "Foto :";
	echo "<img src= foto/$photo width ='100' height = '100'><br>";
	echo "Jurusan :";
	echo $data[3]."<br><br>";
}
?>