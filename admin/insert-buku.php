<?php
$namafolder = "buku/"; //tempat menyimpan file

include "../conn.php";

if (!empty($_FILES["nama_file"]["tmp_name"])) {
   $buku = $_FILES['nama_file']['type'];
   $id = $_POST['id'];
   $judul = $_POST['judul'];
   $kategori = $_POST['kategori'];
   $asal = $_POST['asal'];
   $tgl_input = $_POST['tgl_input'];

   if ($buku == "application/pdf"){
      $buku = $namafolder . basename($_FILES['nama_file']['name']);
      if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $buku)) {
         $sql = "INSERT INTO data_dokumen (id,judul,kategori,asal,tgl_input,buku) VALUES
        ('$id','$judul','$kategori','$asal','$tgl_input','$buku')";
         $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
         echo '<script>
            alert("Data berhasil disimpan");
            window.location.href = "buku.php";
         </script>';
      } else {
         echo '<script>
            alert("Dokumen gagal dikirim");
            window.location.href = "input-buku.php";
         </script>';
      }
   } else {
      echo '<script>
         alert("Jenis Dokumen yang anda kirim salah. Harus .pdf .docx .xls");
         window.location.href = "input-buku.php";
      </script>';
   }
} else {
   echo '<script>
      alert("Anda belum memilih Dokumen");
      window.location.href = "input-buku.php";
   </script>';
}
