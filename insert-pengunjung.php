<?php
include "conn.php";
$id          = $_POST['id'];
$nama        = $_POST['nama'];
$keperluan 	 = $_POST['keperluan'];
$cari 		 = $_POST['cari'];
$saran	     = $_POST['saran'];
$tgl_kunjung = $_POST['tgl_kunjung'];
$jam_kunjung = $_POST['jam_kunjung'];

$query = mysqli_query($conn, "INSERT INTO pengunjung (id, nama, keperluan, cari, saran, tgl_kunjung, jam_kunjung) VALUES ('$id', '$nama', '$keperluan', '$cari', '$saran', '$tgl_kunjung', '$jam_kunjung')");
if ($query){
	echo "<script>alert('Data Berhasil dimasukan!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dimasukan!'); window.location = 'index.php'</script>";	
}
//}
