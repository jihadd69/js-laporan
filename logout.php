<?php
include("koneksi1.php");
session_start();
session_destroy();
echo "<script>alert('Anda Berhasil Logout')</script>";
echo "<meta http-equiv='refresh' content='1 url=login1.php'>";
exit;
?>