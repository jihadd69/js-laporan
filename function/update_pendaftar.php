<?php
include ("../koneksi1.php");

    $tanggal = date ("Y-m-d");
    $id_siswa = $_GET['id_siswa'];

    $select = "SELECT * FROM tbpendaftar where id_siswa = '$id_siswa'";
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

    $query = "insert into tb_pembayaran(id_siswa,nama,tanggal, kursus, tagihan, keterangan)
      values ('".$row['id_siswa']."','".$row['nama_lengkap']."','".$tanggal."' ,'".$row['kursus']."', '".$tagihan."', '".$tagihan."')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      
        header("location:../data_pembayaran.php");
      }
      
    else {
      die("ada yg error".mysqli_error($koneksi));
    }

  ?>