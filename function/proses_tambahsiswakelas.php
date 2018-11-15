<?php 
include '../koneksi1.php';

$id_kelas = $_POST['id_kelas'];
$id_pendaftar = $_POST['id_pendaftar'];

$update = "UPDATE tbpendaftar SET id_kelas = '$id_kelas' where id_pendaftar = '$id_pendaftar'";
$query = mysqli_query($koneksi, $update);
if ($update) {
	$select = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM data_kelas where id_kelas = '$id_kelas'"));
	$quota = $select['quota'] - 1;
	$update_kelas = mysqli_query($koneksi, "UPDATE data_kelas SET quota = '$quota' where id_kelas = '$id_kelas'");
	if ($update_kelas) {

		header("location:../data_siswa1.php");
	}
	
}

 ?>