<?php
include ("../koneksi1.php");

    $query = "SELECT max(id_pendaftar) as maxKode FROM tbpendaftar";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $id_pendaftar = $data ['maxKode'];
    $noUrut = (int) substr($id_pendaftar, 3, 3);
    $noUrut++;
    $char ="ET";
    $kodeSiswa = $char . sprintf("%03s", $noUrut);
    
    $nama_lengkap=$_POST['nama_lengkap'];
    $tanggal = date ("Y-m-d");
    $nomor_telfon=$_POST['nomor_telfon'];
    $email=$_POST['email'];
    $umur=$_POST['umur'];
    $alamat=$_POST['alamat'];
    $kursus=$_POST['kursus'];  
    $list = explode("-",$kursus);
    $cek_email=mysqli_query($koneksi,"SELECT * from tbpendaftar WHERE email='$email'");
    $cek_eml=mysqli_num_rows($cek_email);

     if ($nama_lengkap == '1' or $nomor_telfon == '1' or $email == '1' or $kursus == '1' ) {
    // die($nama_kursus);
      header("location:../tambahpendaftar.php?pesan=SORRY DATA HARUS DI ISI ");
    }
    elseif ($cek_eml>0) {
        echo "<script>
            alert('Data Sudah Terdaftar');
            window.location='../tambahpendaftar.php';
        </script>";
    }
    else{

    $query="insert into tbpendaftar (id_pendaftar,nama_lengkap,nomor_telfon,email,umur,alamat,kursus, tagihan,status,tanggal)
     values ('$kodeSiswa','$nama_lengkap','$nomor_telfon','$email','$umur','$alamat','$list[1]','$list[0]','Belum Lunas','$tanggal')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      header("location:../datapendaftar.php?pesan='DATA BERHASIL MASUK");
    }
    else {
      die("ada yg error".mysqli_error($koneksi));
    }
}
  ?>