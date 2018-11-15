<?php
include ("../koneksi1.php");

    $query = "SELECT max(id_kelas) as maxKode FROM data_kelas";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $id_pendaftar = $data ['maxKode'];
    $noUrut = (int) substr($id_pendaftar, 3, 3);
    $noUrut++;
    $char ="ke";
    $kodeSiswa = $char . sprintf("%03s", $noUrut);
    
    $nama_kursus = $_POST['nama_kursus'];
    $level=$_POST['level'];
    $hari=$_POST['hari'];  
    $jam = $_POST['jam'];
    $quota= $_POST['quota'];

    if ($nama_kursus == '1' or $level == '1' or $hari == '1' or $jam == '1' ) {
    // die($nama_kursus);
      header("location:../inputdatakursus.php?pesan=SORRY DATA HARUS DI ISI ");
    }
    else{
        $query="insert into data_kelas (id_kelas,nama_kursus,level,hari,jam,quota)
         values ('$kodeSiswa', '$nama_kursus', '$level', '$hari', '$jam', '$quota')";
        $result=mysqli_query($koneksi,$query);
        if($result){
          header("location:../tambah_kelas.php?pesan='DATA BERHASIL MASUK'");
        }
        else {
          die("ada yg error".mysqli_error($koneksi));
        }
    }
  ?>