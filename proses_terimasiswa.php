  <?php

  include ('koneksi1.php');

    $query = "SELECT max(id_siswa) as maxKode FROM tb_siswa";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $id_bayar = $data ['maxKode'];
    $noUrut = (int) substr($id_bayar, 3, 3);
    $noUrut++;
    $char ="BY";
    $kodeBayar = $char . sprintf("%03s", $noUrut);

    $kelas = $_POST['level'];
    $id_pendaftar = $_POST['id_pendaftar'];
     

    $query="INSERT INTO tb_siswa (id_pendaftar, id_siswa, kelas) VALUES('$id_pendaftar', '$kodeBayar', '$kelas')";
    $result=mysqli_query($koneksi,$query);
    if($result){
      header("location:data_siswa1.php");
    }
    else {
      die("ada yg error".mysqli_error($koneksi));
    }

    ?>