<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form login</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = mysqli_query($koneksi,"SELECT*FROM user where username='$username' and password='$password'");

        if(mysqli_num_rows($query) > 0){
            $data = mysqli_fetch_array($query);
            $_SESSION['user'] =$data;
            echo '<script>alert("Selamat datang,'.$data['nama'].'");location.href="tampilan.php";</script>';
        }else{
            echo '<script>alert("Username/Password tidak sesuai.");</script>';
        }
    }
?>

	<div class="wrapper">
		<span class="icon-close">
			<a href="index.html"><i class="fa-solid fa-xmark"></i></a>
		</span>

		<form action="" method="post">
			<h1>Login</h1>
			<div class="input-box">
				<input type="text" placeholder="Username" required>
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" placeholder="Password" required>
				<i class='bx bxs-lock-alt'></i>
			</div>

			<div class="remember-forgot">
				<label><input type="checkbox">Ingatkan saya</label>
			</div>

			<button type="submit" class="btn" name="login">Login</a></button>

			<div class="register-link">
				<p>Tidak punya akun?<a href="form login daftar.html">Daftar</a></p>
			</div>
		</form>
	</div>
</body>
</html>