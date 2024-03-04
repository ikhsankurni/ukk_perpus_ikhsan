<?php 
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>register</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">registrasi perpustakaan digital</h3></div>
                                    <div class="card-body">
                                        <?php 
                                        if(isset($_POST['username'])){
                                            $nama = $_POST['nama'];
                                            $email = $_POST['email'];
                                            $no_telepon = $_POST['no_telepon'];
                                            $alamat = $_POST['alamat'];
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                            $level = $_POST['level'];
                                     
                                            $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,no_telepon,alamat,username,password,level)values
                                            ('$nama','$email','$no_telepon','$alamat','$username','$password','$level') "); 

                                            if($insert){
                                                echo '<script>alert("selamat registrasi anda berhasil dan silahkan login"); location.href="login.php";</script>';
                                            }else{
                                                echo '<script>alert("registrasi anda gagal");</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                        <div class="form-group">
                                                <label class="small mb-1" >nama lengkap</label>
                                                <input class="form-control py-4"  type="text" required name="nama" placeholder="Masukan nama lengkap" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >email</label>
                                                <input class="form-control py-4" type="email" required name="email" placeholder="Masukan email anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >no telpon</label>
                                                <input class="form-control py-4" type="text" required name="no_telepon" placeholder="Masukan alamat anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >alamat</label>
                                                <textarea name="alamat" rows="5" type="text" required class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" >username</label>
                                                <input class="form-control py-4" type="text" required name="username" placeholder="Masukan username anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Password</label>
                                                <input class="form-control py-4" name="password" required type="password" placeholder="masukkan password anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Level</label>
                                                <select name="level" required class="form-select form-control">
                                                    <option value="peminjam">peminjam</option>
                                                    <option value="admin">admin</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="register" value="register">simpan</button>
                                                <a class="btn btn-danger" href="login.php" >login</a>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            &copy; copyright ukk spp 2024
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
