<?php
include "../conn.php";
require('../fpdf17/fpdf.php');
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Arsip Buku
 Blog   : www.arsipbuku.com
 Web    : www.arsipbuku.com
 Email  : arsipbuku@gmail.com
 
 **/
//Menampilkan data dari tabel di database

$result = mysqli_query($conn, "SELECT * FROM data_anggota ORDER BY id ASC") or die(mysqli_error($conn));

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_nama = "";
$column_jk = "";
$column_umur = "";
$column_ttl = "";
$column_alamat = "";

//For each row, add the field to the corresponding column
while ($row = mysqli_fetch_array($result)) {
    //$id = $row["id"];
    $id = $row["id"];
    $nama = $row["nama"];
    $jk = $row["jk"];
    $umur = $row["umur"];
    $ttl = $row["ttl"];
    $alamat = $row["alamat"];

    $column_id = $column_id . $id . "\n";
    $column_nama = $column_nama . $nama . "\n";
    $column_jk = $column_jk . $jk . "\n";
    $column_umur = $column_umur . $umur . "\n";
    $column_ttl = $column_ttl . $ttl . "\n";
    $column_alamat = $column_alamat . $alamat . "\n";
    
    //Create a new PDF file
    $pdf = new FPDF('P', 'mm', array(220, 297)); //L For Landscape / P For Portrait
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'DATA ANGGOTA', 0, 0, 'C');
    $pdf->Ln();
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'Website Arsip Buku', 0, 0, 'C');
    $pdf->Ln();
}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110, 180, 230);
//Bold Font for Field Name
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(20, 8, 'ID', 1, 0, 'C', 1);
$pdf->SetX(25);
$pdf->Cell(55, 8, 'Nama', 1, 0, 'C', 1);
$pdf->SetX(80);
$pdf->Cell(15, 8, 'JK', 1, 0, 'C', 1);
$pdf->SetX(95);
$pdf->Cell(15, 8, 'Usia', 1, 0, 'C', 1);
$pdf->SetX(110);
$pdf->Cell(50, 8, 'Tempat Tanggal Lahir', 1, 0, 'C', 1);
$pdf->SetX(160);
$pdf->Cell(55, 8, 'Alamat', 1, 0, 'C', 1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial', '', 10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(20, 6, $column_id, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(25);
$pdf->MultiCell(55, 6, $column_nama, 1, 'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(15, 6, $column_jk, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(95);
$pdf->MultiCell(15, 6, $column_umur, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(50, 6, $column_ttl, 1, 'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(160);
$pdf->MultiCell(55, 6, $column_alamat, 1, 'L');

$pdf->Output();
