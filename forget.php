<!DOCTYPE html>
<html>
<head>
<title>Print-In - Password Recovery</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form" style="height:400px;">
	<img src="Logo.png" style="width: 100px; height: 100px;">
	<form action="" method="post">
		<input type="email" name="email" placeholder="Email">
		<div style="display: flex;">
			<input type="text" name="number" placeholder="Kode" style="width: 60%;margin-left: 10px;" disabled>
			<div class="tombol-besar" style="width: 150px;border-radius:5px;margin: 19px 10px 0 -15px;z-index: 2; background-color: grey">Minta Kode</div>
		</div>
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="tombol" style="margin:50px 0 0 270px;height:40px;" class="tombol-besar" value="Ubah">
	</form>
	<?php
		if(isset($_POST['tombol'])){
			include 'koneksi.php';
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$ubah = mysqli_query($conn, "UPDATE penggunaprintin SET password='$pass' where email='$email'");
			if($ubah){
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
