  <?php

  include ('../koneksi1.php');

    $query = "SELECT max(id_bayar) as maxKode FROM tb_pembayaran";
    $hasil = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($hasil);
    $id_bayar = $data ['maxKode'];
    $noUrut = (int) substr($id_bayar, 3, 3);
    $noUrut++;
    $char ="BY";
    $kodeBayar = $char . sprintf("%03s", $noUrut);

    $tanggal = date("Y-m-d");
      
      $id_pendaftar = $_POST['id_pendaftar'];
      $terbayar=$_POST['terbayar'];

      $pilih = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tbpendaftar where id_pendaftar = '$id_pendaftar'"));
      $tagihan = $pilih['tagihan'];
      $select = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(bayar) as sudah_bayar FROM tb_pembayaran where id_pendaftar = '$id_pendaftar'"));
      $sudah_bayar = $select['sudah_bayar'];

      $sisa = $tagihan - $sudah_bayar;

      if ($terbayar > $sisa) {
        echo "TIDAK BISA";
      }else{
        $insert = "INSERT INTO tb_pembayaran (id_bayar, id_pendaftar, tanggal, bayar) values('$kodeBayar', '$id_pendaftar', '$tanggal', '$terbayar')";
        $result = mysqli_query($koneksi, $insert);
        if($result){
          $sel = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(bayar) as total_bayar from tb_pembayaran where id_pendaftar = '$id_pendaftar'"));
          if ($sel['total_bayar'] == $tagihan) {
            $update = mysqli_query($koneksi, "UPDATE tbpendaftar set status = 'Lunas' where id_pendaftar = '$id_pendaftar'");
            if ($update) {
              header("location:../data_pembayaran.php");
            }else{
              echo mysqli_error($koneksi);
            }
          }else{
            header("location:../data_pembayaran.php");
          }
        }
        else {
          die("ada yg error".mysqli_error($koneksi));
        }
      }

    ?>