  <?php
  include ("../koneksi1.php");


      $nama=$_POST['nama_lengkap'];
      $kursus=$_POST['kursus'];
      $terbayar=$_POST['terbayar'];
      $list = explode("-", $kursus);
      $ket = $list[0] - $terbayar;
       

      
         

      $query="insert into tb_pembayaran (nama,kursus,terbayar,tagihan,keterangan)
       values ('$nama','$list[1]','$terbayar','$list[0]','$ket')";
      $result=mysqli_query($koneksi,$query);
      if($result){
        header("location:../data_pembayaran.php");
      }
      else {
        die("ada yg error".mysqli_error($koneksi));
      }

    ?>