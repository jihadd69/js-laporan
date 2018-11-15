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

     

    $query="insert into tbpendaftar (id_pendaftar,nama_lengkap,nomor_telfon,email,umur,alamat,kursus, tagihan,status,tanggal)
     values ('$kodeSiswa','$nama_lengkap','$nomor_telfon','$email','$umur','$alamat','$list[1]','$list[0]','Belum Lunas','$tanggal')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      header("location:http://localhost/School%20Free%20Website%20Template%20-%20Free-CSS.com/EnglishToday/index.html");
    }
    else {
      die("ada yg error".mysqli_error($koneksi));
    }
