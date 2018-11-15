<?php
include ("../koneksi1.php");

    $tanggal = date ("Y-m-d");
    $id_pendaftar = $_GET['id_pendaftar'];

    $select = "SELECT * FROM tbpendaftar where id_pendaftar = '$id_pendaftar'";
    $row = mysqli_fetch_array(mysqli_query($koneksi, $select));

    $select = "SELECT * FROM tb_pembayaran where id_pendaftar = '$id_pendaftar'";
    $row = mysqli_fetch_array(mysqli_query($koneksi, $select));

    $tagihan = "";
    if ($row['kursus'] == "Reguler") {
      $tagihan = 3000000;
    }elseif ($row['kursus'] == "Toefl") {
      $tagihan = 300000;
    }elseif ($row['kursus'] == "Toeic") {
      $tagihan = 300000;
    }else{
      $tagihan = 2500000;
    }

    $query = "insert into tb_siswa(nama,tanggal, kursus, tagihan, keterangan)
      values ('".$row['nama_lengkap']."','".$tanggal."' ,'".$row['kursus']."', '".$tagihan."', '".$tagihan."')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      $delete = "delete from tbpendaftar where id_pendaftar = '$id_pendaftar'";
      $hasil = mysqli_query($koneksi, $delete);
      if ($hasil) {
        header("location:../data_pembayaran.php");
      }
      
    }
    else {
      die("ada yg error".mysqli_error($koneksi));
    }

  ?>