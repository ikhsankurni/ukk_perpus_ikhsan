<h1 class="mt-4">tambah kategori buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php 
               if(isset($_POST['submit'])){
                $namakategori = $_POST['namakategori'];
                $query = mysqli_query($koneksi, "INSERT INTO kategori(namakategori) values ('$namakategori')");

                if($query){
                    echo '<script>alert("tambah data berhasil");</script>';
                }else{
                    echo '<script>alert("tambah data gagal");</script>';
                }
               }
            ?>
            <div class="row mb-3">
                <div class="col-md-4">nama kategori</div>
                <div class="col-md-8"><input type="text" class="form-control" name="namakategori" required></div>
            </div>
            <div class="row">
              <div class="col-md-4"></div>
                 <div class="col-md-8">
            <button type="submit" class="btn btn-primary" name="submit" value="submit">simpan</button>
            <button type="reset" class="btn btn-secondary">reset</button>
            <a href="?page=kategori" class="btn btn-danger">kembali</a>
         </div>
        </div>
        </form>
    </div>
</div>
</div>
</div>