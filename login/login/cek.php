<?php
	include 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];

	$perintah = "SELECT * FROM `tabel_admin` WHERE username = '$username' AND password ='$password'";
	$ex = mysqli_query($con, $perintah);

	$num = mysqli_num_rows($ex);

	if($num > 0){
		echo "<script>
		alert('Login Berhasil');
		document.location='../admin/index.php';
		</script>";
	}
	else{
		echo "<script>
		alert('Email atau Password Salah');
		document.location='index.php';
		</script>";
	}
?>