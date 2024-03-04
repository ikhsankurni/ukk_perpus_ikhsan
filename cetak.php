<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "koneksi.php";
  ?>
<table border="1" width="100%" cellspacing="0" cellpadding="5">
<th colspan="9">
        <h2 style="margin:0;">laporan peminjaman buku</h2></th>
            <tr>
            <th>no</th>
            <th>nama</th>
            <th>buku</th>
            <th>tanggal peminjaman</th>
            <th>tanggal pengembalian</th>
            <th>status peminjaman</th>
            </tr>
        <?php 
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM peminjaman
        LEFT JOIN user ON user.id_user = peminjaman.id_user 
        LEFT JOIN buku ON buku.id_buku = peminjaman.id_buku");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
               <td><?php echo $i++; ?></td>
               <td><?php echo $data['nama']; ?></td>
               <td><?php echo $data['judul']; ?></td>
               <td><?php echo $data['tanggal_peminjaman']; ?></td>
               <td><?php echo $data['tanggal_pengembalian']; ?></td>
               <td><?php echo $data['status_peminjaman']; ?></td>
            </tr>
            <?php
        }
        ?>
        </table>