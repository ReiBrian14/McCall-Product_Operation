<?php
include 'model/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Login Form</title>
</head>
<body class="container">
    <div class="form_area">
        <h4 class="title">LOGIN</h4>
        <form method="POST" action="">
        <div class="form_group">
                <label for="username"  class="sub_title">Username</label>
                <input type="username" name="username" class="form_style" id="username" placeholder="Enter your username" required />
            </div>
            <div class="form_group">
                <label for="password" class="sub_title">Password</label>
                <input type="password" name="password" class="form_style" id="password" placeholder="Enter your password" required />
            </div>
            <div>
                <button type="submit" name="simpan" text="MASUK!" class="btn">MASUK!</button>
                <p>Tidak punya akun? <a href="" class="link">Hubungi Admin!</p>
            </div>
        </form>
    </div>
</body>
</html>

<?php

if (isset($_POST['simpan'])) {
    session_start();
    include 'model/koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $data = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);
 
    if($cek > 0){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        echo "<script>
              Swal.fire({
                  title: 'Berhasil login !',
                  text: 'Selamat datang $username',
                  width: '40%',
                  icon: 'success',
                  iconColor: 'rgb(27, 199, 133)',
                  showConfirmButton: false,
                  allowEnterKey: false,
                  allowEscapeKey: false,
                  allowOutsideClick: false,
              });

              setTimeout(function(){
                  window.location.href='dashboard.php';
              }, 1500);
                 </script>";
            exit;
    }
    else{
        echo "
            <script>
                Swal.fire({
                    width: '40%',
                    position: 'center',
                    icon: 'error',
                    iconColor: 'rgb(255, 0, 0)',
                    title: 'Username atau Password Salah !',
                    text: 'Periksa kembali username atau password yang anda inputkan !',
                    showConfirmButton: false,
                    allowEnterKey: false,
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    showCloseButton: true,
                });
            </script>
            ";
    }
}
    
?>