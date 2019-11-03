<?php


$hapus = $_POST["hapus"];
$conn = mysqli_connect("localhost","root","");

mysqli_select_db($conn,"dbtugasform");
$sqlstr = "DELETE FROM mahasiswa WHERE NRP = '$hapus'";
$query = mysqli_query($conn,$sqlstr);

if($query){
	echo "Data berhasil dihapus";
}else{
	echo "Error".$sqlstr."<br>".mysqli_error($conn);
}

?>