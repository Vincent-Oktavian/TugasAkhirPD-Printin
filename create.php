<!DOCTYPE html>
<html>
<head>
<title>Print-In - Create Account</title>
</head>
<link rel="stylesheet" href="style.css">
<style>
	body{
		display: flex;
		overflow-y: hidden;
	}
	.welcome p{
		margin: 0;
	}
	input{
		width: 94%;
	}
	a{
		text-decoration: none;
	}
	form input[type=submit]{
		border-radius: 5px;
		width: 96%;
		float: left;
		margin-left: 0;
		height: 50px;
	}
</style>
<body>
	<div class="welcome">
		<p style="font-weight: 200;font-size: 30px">Daftar</p>
		<p>Ayo Bergabung!</p>
		<p>100% Gratis</p>
	</div>
	<div class="menu">
		<h3>Daftar</h3>
		<form action="" method="post">
			<div class="kotak">
				<input type="text" name="name" placeholder="Nama">
				<input type="text" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
			</div>
			<input type="submit" name="tombol" class="tombol-besar" value="Daftar" style="margin-top: 20px; width: 98%;">
		</form>
		<?php
			if(isset($_POST['tombol'])){
				include 'koneksi.php';
				$daftar = mysqli_query($conn, "INSERT INTO penggunaprintin VALUES('".$_POST['name']."','".$_POST['password']."','".$_POST['email']."')");
				if($daftar){
					echo 'berhasil';
					header("Location: lohome.html");
				}else{
					echo 'gagal';
				}
			}
		?>
	</div>
</body>
</html>
