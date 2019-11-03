<HTML>
<HEAD>
<title>Simpan Buku Tamu</title>
</HEAD>
<BODY>

<?php
$NRP = $_POST["NRP"];
$Nama = $_POST["Nama"];
$photo = $_FILES["photo"]["name"];
$ekstensi_diperbolehkan = array('png','jpg');
$x = explode('.', $photo);
$ekstensi = strtolower(end($x));
$ukuran_file = $_FILES['photo']['size'];
$tipe_file = $_FILES['photo']['type'];
$tmp_file = $_FILES['photo']['tmp_name'];
$path = "foto/".$photo;
$Jurusan = $_POST["ID_jur"];

if(in_array($ekstensi, $ekstensi_diperbolehkan)=== true){
	if ($ukuran_file < 1044070){
move_uploaded_file($tmp_file, $path);


$conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
mysqli_select_db($conn,"dbtugasform");
$sqlstr = "INSERT INTO mahasiswa (NRP,Nama,photo,ID_jur) VALUES ('$NRP','$Nama','$photo',$Jurusan)";
$query = mysqli_query($conn,$sqlstr);

if($query){
	echo "Data Behasil Ditambahkan";
}else {
	echo "ERROR : ".$sqlstr."<br>".mysqli_error($conn);
}
} else {
	echo "UKURAN FILE TERLALU BESAR";
}
}else {
	echo "EKSTENSI TIDAK DIPERBOLEHKAN";
}
 
?>
</BODY>
</HTML>