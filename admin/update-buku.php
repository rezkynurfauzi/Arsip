<?php
$namafolder = "buku/"; //tempat menyimpan file

include "../conn.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$asal = $_POST['asal'];
$tgl_input = $_POST['tgl_input'];

if (!empty($_FILES["nama_file"]["tmp_name"])) {
   $buku = $_FILES['nama_file']['type'];
   if ($buku == "application/pdf") {
      $buku = $namafolder . basename($_FILES['nama_file']['name']);
      if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $buku)) {
         $sql = "UPDATE data_dokumen SET judul='$judul', kategori='$kategori', asal='$asal', tgl_input='$tgl_input',buku='$buku' where id = '$id'";
         $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         echo '<script>
            alert("Data berhasil diupdate. Dokumen berhasil dikirim ke direktori'.$gambar.'");
            window.location.href = "buku.php";
         </script>';
      } else {
         echo '<script>
            alert("Dokumen gagal dikirim");
            window.location.href = "edit-buku.php?hal=edit&kd="'.$id.';
         </script>';
      }
   } else {
      echo '<script>
         alert("Jenis Dokumen yang anda kirim salah. Harus .pdf .docx .xls");
         window.location.href = "edit-buku.php?hal=edit&kd="'.$id.';
      </script>';
   }
} else {
   $sql = "UPDATE data_dokumen SET judul='$judul', kategori='$kategori', asal='$asal', tgl_input='$tgl_input' where id = '$id'";
   $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   echo '<script>
      alert("Data berhasil di update");
      window.location.href = "buku.php";
   </script>';
}
