<h1 class="mt-4">tambah buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php 
            $id = $_GET['id'];
               if(isset($_POST['submit'])){
                $id_buku = $_POST['id_buku'];
                $id_user = $_SESSION['user']['id_user'];
                $tanggal_peminjaman = $_POST['tanggal_peminjaman'];
                $tanggal_pengembalian = $_POST['tanggal_pengembalian'];
                $status_peminjaman = $_POST['status_peminjaman'];
                $query = mysqli_query($koneksi, "UPDATE peminjaman SET id_buku='$id_buku', tanggal_peminjaman='$tanggal_peminjaman', tanggal_pengembalian='$tanggal_pengembalian',
                status_peminjaman='$status_peminjaman' WHERE id_peminjaman=$id");

                if($query){
                    echo '<script>alert("ubah data berhasil");</script>';
                }else{
                    echo '<script>alert("ubah data gagal");</script>';
                }
               }
               $query = mysqli_query($koneksi, "SELECT*FROM peminjaman WHERE id_peminjaman=$id");
               $data = mysqli_fetch_array($query);
            ?>
            <div class="row mb-3">
                <div class="col-md-4">buku</div>
                <div class="col-md-8">
                    <select name="id_buku" class="form-control">
                        <?php 
                          $b = mysqli_query($koneksi, "SELECT*FROM buku");
                          while($buku = mysqli_fetch_array($b)){
                            ?>
                           <option <?php if($data['id_buku'] == $buku['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku'];?>">
                           <?php echo $buku['judul']; ?></option>
                            <?php
                          }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">ulasan</div>
                <div class="col-md-8"><input type="date" class="form-control" value="<?php echo $data['tanggal_peminjaman']; ?>" name="tanggal_peminjaman"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">rating</div>
                <div class="col-md-8"><input type="date" class="form-control" value="<?php echo $data['tanggal_pengembalian']; ?>" name="tanggal_pengembalian"></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">status peminjaman</div>
                <div class="col-md-8">
                <select name="status_peminjaman" required class="form-select form-control">
                       <option value="dipinjam" <?php if($data['status_peminjaman'] == 'dipinjam') echo 'selected'; ?>>dipinjam</option>
                       <option value="dikembalikan" <?php if($data['status_peminjaman'] == 'dikembalikan') echo 'selected'; ?>>dikembalikan</option>
               </select>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
                 <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
            <button type="reset" class="btn btn-secondary">reset</button>
            <a href="?page=peminjaman" class="btn btn-danger">kembali</a>
         </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>