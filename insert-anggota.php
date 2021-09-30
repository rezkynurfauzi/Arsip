<?php

include "conn.php";
$email = $_POST['email'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$jk = $_POST['jk'];
$umur = $_POST['umur'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO data_anggota(id,email,nama,username,password,jk,umur,ttl,alamat,foto) VALUES
            ('','$email','$nama','$username','$password','$jk','$umur','$ttl','$alamat','')";
$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "Data anda telah berhasil diinput, Masukkan Username dan password anda di <span><a href='login.html'><b> Disini </b></a></span>";
echo "<h3><a href='login.html'>Klik Disini</a>  untuk Login </h3>";
