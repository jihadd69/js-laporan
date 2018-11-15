<?php 
include "koneksi1.php";
?>
<?php
if (isset($_POST['login'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$login=mysqli_query($koneksi,"SELECT * FROM tb_user WHERE username='$username' and password='$password'");
	$result=mysqli_fetch_array($login);
	$nama=$result['nama'];

	if ($result['role']=="admin") 
	{
		$_SESSION['admin']=$result['kd_user'];
		echo "<script>alert('Selamat datang $nama');
		window.location='starter.php';
		</script>";
	}
	elseif($result['role']=="receptionist")
	{
		$_SESSION['receptionist']=$result['kd_user'];
		echo "<script>alert('Selamat datang $nama');
		window.location='starter.php';
		</script>";
	} else {
		echo "<script>alert('Maaf username/password salah')
		window.location='./login1.php';
		</script>";
	}
}
?>