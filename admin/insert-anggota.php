<?php
$namafolder = "gambar_anggota/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"])) {
	$jenis_gambar = $_FILES['nama_file']['type'];
	$id = $_POST['id'];
	$email = $_POST['email'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$jk = $_POST['jk'];
	$umur = $_POST['umur'];
	$ttl = $_POST['ttl'];
	$alamat = $_POST['alamat'];

	if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/x-png") {
		$gambar = $namafolder . basename($_FILES['nama_file']['name']);
		if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
			$sql = "INSERT INTO data_anggota(id,email,nama,username,password,jk,umur,ttl,alamat,foto) VALUES
            ('$id','$email','$nama','$username','$password','$jk','$umur','$ttl','$alamat','$gambar')";
			$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
			echo "Gambar berhasil dikirim ke direktori" . $gambar;
			echo "<h3><a href='input-anggota.php'> Input Lagi</a></h3>";
			echo "<h3><a href='anggota.php'> Data Anggota</a></h3>";
		} else {
			echo "<p>Gambar gagal dikirim</p>";
		}
	} else {
		echo "Jenis gambar yang anda kirim salah. Harus .jpg .gif .png";
	}
} else {
	echo "Anda belum memilih gambar";
}
