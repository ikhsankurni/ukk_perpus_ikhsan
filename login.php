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
        <title>login</title>
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login perpustakaan digital</h3></div>
                                    <div class="card-body">
                                        <?php 
                                        if(isset($_POST['username'])){
                                            $username = $_POST['username'];
                                            $password = md5($_POST['password']);
                                     
                                            $data = mysqli_query($koneksi, "SELECT*FROM user WHERE username='$username' and password='$password' ");
                                            $cek = mysqli_num_rows($data);
                                            if($cek > 0){
                                                $_SESSION['user'] = mysqli_fetch_array($data);
                                                echo '<script>alert("selamat datang login berhasil");location.href="index.php";</script>';
                                            }else{
                                                echo '<script>alert("username/password anda salah")</script>';
                                            }
                                        }
                                        ?>
                                        <form method="post">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">username</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="username" name="username" placeholder="Masukan username anda" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" type="password" placeholder="masukkan password anda" id="myInput" />
                                                <br>
											<input type="checkbox" onclick="myFunction()"> Tampilkan Password

                                            <script>
                                         function myFunction() {
                                         var x = document.getElementById("myInput");
                                         if (x.type === "password") {
                                         x.type = "text";
                                         } else {
                                         x.type = "password";
                                         }
                                         }
                                        </script>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="submit" name="login" value="login">Login</button>
                                                <a class="btn btn-danger" href="register.php" >registrasi</a>
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
