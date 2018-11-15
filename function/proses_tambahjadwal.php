<?php
include ("../koneksi1.php");

    $query = "SELECT max(id_jadwal) as maxKode FROM jadwal";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $id_pendaftar = $data ['maxKode'];
    $noUrut = (int) substr($id_pendaftar, 3, 3);
    $noUrut++;
    $char ="ke";
    $kodeSiswa = $char . sprintf("%03s", $noUrut);
    
    $nama_kursus = $_POST['nama_kursus'];
    $hari=$_POST['hari'];  
    $jam = $_POST['jam'];
    
    

     

    $query="insert into jadwal (id_jadwal,nama_kursus,hari,jam)
     values ('$kodeSiswa', '$nama_kursus', '$hari', '$jam')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      header("location:../jadwal.php");
    }
    else {
      die("ada yg error".mysqli_error($koneksi));
    }

  ?>