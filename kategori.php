<h1 class="mt-4">Kategori buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <a href="?page=kategori_tambah" class="btn btn-primary">tambah data</a><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
            <th>no</th>
            <th>kategori</th>
            <th>aksi</th>
            </tr>
        <?php 
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT*FROM kategori");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
               <td><?php echo $i++; ?></td>
               <td><?php echo $data['namakategori']; ?></td>
               <td>
                <a href="?page=kategori_ubah&&id=<?php echo $data['id_kategori']; ?>" class="btn btn-info">ubah</a>
                <a onclick="return confirm('apakah anda yakin untuk hapus');" href="?page=kategori_hapus&&id= <?php echo $data['id_kategori']; ?>" class="btn btn-danger">hapus</a>
               </td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
</div>
</div>
    </div>