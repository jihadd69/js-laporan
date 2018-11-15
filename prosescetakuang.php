<?php
include "koneksi1.php";

include "pdf/class.ezpdf.php"; 
$pdf = new Cezpdf('A5','landscape');

//Set margin dan font
$pdf->ezSetCmMargins(3, 3, 3, 3);
$pdf->selectFont('pdf/fonts/Times-Roman.afm');



//Teks di tengah atas untuk judul header
$pdf->addText(175, 395, 14,'<b>LAPORAN KEUANGAN ENGLISH TODAY</b>');
$pdf->addText(100, 365, 12,'Rukan Vila Bintaro Regency Jl.Sumatera Blok G-7 No. 5 Pondok Aren - Tangerang Selatan');

//Garis atas untuk header
$pdf->line(2, 350, 590, 350);

//Garis bawah untuk footer
$pdf->line(2, 50, 590, 50);

if (isset($_POST['go'])) {
 

  $tgl_dari=date("d/m/Y",strtotime($_POST['tgl_dari']));
  $tgl_sampai=date("d/m/Y",strtotime($_POST['tgl_sampai']));
  // die($tgl_dari);
  $sql  ="SELECT * FROM tb_pembayaran inner join tbpendaftar on tb_pembayaran.id_pendaftar = tbpendaftar.id_pendaftar 
  WHERE date(tb_pembayaran.tanggal) BETWEEN '$tgl_dari' AND '$tgl_sampai'";
  
  $result = mysqli_query($koneksi, $sql);
  $jml = mysqli_num_rows($result);
  if ($jml > 0) {
        $i = 1;

  while ($siswa=mysqli_fetch_array($result))
  {   
//Format Menampilkan data di ezPdf   
    $data[$i]=array('No' => $i,
    			
              'ID SISWA' => "$siswa[id_pendaftar]",
              'TANGGAL' => "$siswa[tanggal]",
              'TERBAYAR' => "RP.".number_format("$siswa[bayar]"),  
                      
              );
    $i++; 

$total=$total+$siswa['bayar'];


  }
 
  }
}
  //Tampilkan Dalam Bentuk Table
  
  $pdf->ezText("Total Keseluruhan     : Rp.".number_format($total)."\n\n");  
  $pdf->ezTable($data);
  $pdf->ezText("\nHormat Kami,\n\n\n\n\nJIHAD DARMAWAN");
  

  // Penomoran halaman
  $pdf->ezStartPageNumbers(550, 20, 8);
  $pdf->ezStream();    

 ?>