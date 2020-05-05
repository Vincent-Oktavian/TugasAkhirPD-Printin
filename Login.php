<!DOCTYPE html>
<html>
<head>
<title>Print-In - Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form">
	<img src="Logo.png" style="width: 100px; height: 100px;">
	<h1 style="margin: 0">Masuk</h1>
	<h2 style="margin: 0">Selamat datang kembali</h2>
	<form action="" method="post">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<div class="opsis" style="margin-top: 5px;">
			<a href="forget.php">Lupa Password?</a>
			<!-- <a href="lohome.html"><div class="tombol-besar">Masuk</div></a> -->
			<input type="submit" style="height:40px" name="tombol" class="tombol-besar" value="Masuk">
		</div>
	</form>
	<div class="opsis" style="margin-top: 100px;">
		<div>
			<p>Tidak punya akun?</p>
			<p>Ayo bikin sekarang juga</p>
		</div>
		<a href="create.php"><div class="tombol-kecil">Daftar</div></a>
	</div>
	<?php
		if(isset($_POST['tombol'])){
			include 'koneksi.php';
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$qry = mysqli_query($conn,"SELECT * FROM penggunaprintin WHERE email='$email' AND password='$pass'");
			$cek = mysqli_num_rows($qry);
			if($cek==1){
				header("Location: lohome.html");
			}else{
				echo 'Username atau Password salah';
			}
		}
	?>
</div>
</body>
</html>