<h1 class="mt-4">data ulasan</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <tr>
            <th>no</th>
            <th>nama</th>
            <th>buku</th>
            </tr>
        <?php 
        $i = 1;
        $query = mysqli_query($koneksi, "SELECT * FROM koleksi
        LEFT JOIN user ON user.id_user = koleksi.id_user 
        LEFT JOIN buku ON buku.id_buku = koleksi.id_buku");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
               <td><?php echo $i++; ?></td>
               <td><?php echo $data['nama']; ?></td>
               <td><?php echo $data['judul']; ?></td>
            </tr>
            <?php
        }
        ?>
        </table>
    </div>
</div>
</div>
    </div>