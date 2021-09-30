<?php
include "../conn.php";
$id = $_GET['kd'];

$query = mysqli_query($conn, "DELETE FROM data_dokumen WHERE id='$id'");
if ($query){
	echo "<script>alert('Data Berhasil dihapus!'); window.location = 'buku.php'</script>";	
} else {
	echo "<script>alert('Data Gagal dihapus!'); window.location = 'buku.php'</script>";	
}
