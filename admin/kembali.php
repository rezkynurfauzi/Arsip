<?php
include "../conn.php"; //memanggil file conn.php untuk koneksi ke database
$maks_pinjam		= 2; //maksimal peminjaman buku dua kali perpanjangan
$maks_hari_pinjam	= 7; //maksimal hari peminjaman

$id_trans	= isset($_GET['id_trans']) ? $_GET['id_trans'] : "";
$judul		= isset($_GET['judul']) ? $_GET['judul'] : "";

if ($id_trans==""||$judul=="") {
	echo "<script>alert('Anda Belum Memilih Buku!'); window.location = 'transaksi.php'</script>";
} else {
	$us=mysqli_query($conn, "UPDATE trans_pinjam SET status='kembali' WHERE id='$id_trans'")or die ("Gagal update".mysqli_error($conn));
	$uj=mysqli_query($conn, "UPDATE data_buku SET jum_temp=(jum_temp+1) WHERE judul='$judul'")or die ("Gagal update".mysqli_error($conn));

	if ($us || $uj) {
		echo "<script>alert('Buku telah dikembalikan'); window.location = 'transaksi.php'</script>";
	} else {
		echo "<script>alert('Oops, Buku gagal dikembalikan!'); window.location = 'transaksi.php'</script>";
		echo "<meta http-equiv='refresh' content='0; url=?page=transaksi'>";
	}
}
