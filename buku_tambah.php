<h1 class="mt-4">tambah buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php 
               if(isset($_POST['submit'])){
                $judul = $_POST['judul'];
                $id_kategori = $_POST['id_kategori'];
                $penulis = $_POST['penulis'];
                $penerbit = $_POST['penerbit'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $deskripsi = $_POST['deskripsi'];
                $query = mysqli_query($koneksi, "INSERT INTO buku(judul,id_kategori,penulis,penerbit,tahun_terbit,deskripsi) values 
                ('$judul','$id_kategori','$penulis','$penerbit','$tahun_terbit','$deskripsi')");

                if($query){
                    echo '<script>alert("tambah data berhasil");</script>';
                }else{
                    echo '<script>alert("tambah data gagal");</script>';
                }
               }
            ?>
            <div class="row mb-3">
                <div class="col-md-4">judul</div>
                <div class="col-md-8"><input type="text" class="form-control" name="judul" required></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">kategori</div>
                <div class="col-md-8">
                    <select name="id_kategori" class="form-control">
                        <?php 
                          $kat = mysqli_query($koneksi, "SELECT*FROM kategori");
                          while($kategori = mysqli_fetch_array($kat)){
                            ?>
                            <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['namakategori']; ?></option>
                            <?php
                          }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">penulis</div>
                <div class="col-md-8"><input type="text" class="form-control" name="penulis" required></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">penerbit</div>
                <div class="col-md-8"><input type="text" class="form-control" name="penerbit" required></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">tahun terbit</div>
                <div class="col-md-8"><input type="number" class="form-control" name="tahun_terbit" required></div>
            </div>
            <div class="row mb-3">
                <div class="col-md-4">deskripsi</div>
                <div class="col-md-8">
                    <textarea name="deskripsi" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
                 <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
            <button type="reset" class="btn btn-secondary">reset</button>
            <a href="?page=buku" class="btn btn-danger">kembali</a>
         </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>