<h1 class="mt-4">ubah Kategori buku</h1>
<div class="card">
    <div class="card-body">
<div class="row">
    <div class="col-md-12">
        <form method="post">
            <?php 
            $id = $_GET['id'];
               if(isset($_POST['submit'])){
                $namakategori = $_POST['namakategori'];
                $query = mysqli_query($koneksi, "UPDATE kategori SET namakategori='$namakategori' WHERE id_kategori=$id");

                if($query){
                    echo '<script>alert("ubah data berhasil");</script>';
                }else{
                    echo '<script>alert("ubah data gagal");</script>';
                }
               }
               
               $query = mysqli_query($koneksi, "SELECT*FROM kategori WHERE id_kategori=$id");
               $data = mysqli_fetch_array($query);
            ?>
            <div class="row mb-3">
                <div class="col-md-4">nama kategori</div>
                <div class="col-md-8"><input type="text" class="form-control" value="<?php echo $data['namakategori']; ?>" name="namakategori"></div>
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