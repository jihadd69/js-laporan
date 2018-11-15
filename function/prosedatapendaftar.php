<?php
include ("koneksi1.php");
?>
<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Telfon</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Umur</th>
            <th>edit</th>
            <th>hapus</th>
        
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM tbpendaftar";
         $query = mysqli_query($koneksi, $sql);

        while($siswa = mysqli_fetch_array($query))
        {
            
            echo "<tr>";
            echo "<td>".$siswa['nama_lengkap']."</td>";
            echo "<td>".$siswa['nomor_telfon']."</td>";
            echo "<td>".$siswa['email']."</td>";
            echo "<td>".$siswa['umur']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['kursus']."</td>";
        

            echo "<td>";

            echo "<a href='?=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='datapendaftar.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>


    <p>Total: <?php echo mysqli_num_rows($query) ?></p>