<?php
require 'config/koneksi.php';
$id_register = $_POST["id_reg"];
$nama_depan = $_POST["namadepan"];
$nama_belakang = $_POST["namabelakang"];
$email = $_POST["email"];
$username = $_POST["username"];
?>

<html>

<head>
	<title>Latihan Grid Bootstrap</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Registrasi</title>
	<link rel="stylesheet" href="modul/bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
	<!-- buat class container -->

	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">
			<img src="image/sttb.jpg">

			<!-- membuat form -->
			<form action="config/edit.php" method="POST" class="col-lg-6">
				<h5>Edit Data</h5>
				<!-- buat row form (baris ke 1 pada form) -->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="contoh1">Nama Depan</label>
						<input type="text" class="form-control" name="namadepan" value="<?= $nama_depan; ?>">
					</div>
					<div class="form-group col-md-6">
						<label for="contoh2">Nama Belakang</label>
						<input type="text" class="form-control" name="namabelakang" value="<?= $nama_belakang; ?>">
					</div>
				</div>
				<!-- end baris 1 pada form -->

				<!-- baris ke 2 pada form -->
				<div class="form-row">
					<div class="form-group col-md-4">
						<label for="contoh1">Email</label>
						<input type="text" class="form-control" name="email" value="<?= $email; ?>">
					</div>
					<div class="form-group col-md-4">
						<label for="contoh2">Username</label>
						<input type="text" class="form-control" name="username" value="<?= $username; ?>" readonly>
					</div>
				</div>
				<!-- end baris 2 pada form -->
				<input type="hidden" name="id_reg" value="<?= $id_register; ?>">
				<button type="submit" class="btn btn-primary">Edit</button>
				<a href="index.php" class="btn btn-outline-primary float-right">Kembali</a>
			</form>

			<!-- end form -->
		</div>
	</div>
	<!-- end container -->
</body>

</html>