<?php
include "../conn.php";
require('../fpdf17/fpdf.php');

$result = mysqli_query($conn, "SELECT * FROM data_dokumen ORDER BY id ASC") or die(mysqli_error($conn));

//Inisiasi untuk membuat header kolom
$column_id = "";
$column_judul = "";
$column_kategori = "";
$column_asal = "";
$column_tgl_input = "";
$column_buku = "";

//For each row, add the field to the corresponding column
while ($row = mysqli_fetch_array($result)) {
    $id = $row["id"];
    $judul = $row["judul"];
    $kategori = $row["kategori"];
    $asal = $row["asal"];
    $tgl_input = $row["tgl_input"];

    $column_id = $column_id . $id . "\n";
    $column_judul = $column_judul . $judul . "\n";
    $column_kategori = $column_kategori . $kategori . "\n";
    $column_asal = $column_asal . $asal . "\n";
    $column_tgl_input = $column_tgl_input . $tgl_input . "\n";

    //Create a new PDF file
    $pdf = new FPDF('P', 'mm', array(297, 210)); //L For Landscape / P For Portrait
    $pdf->AddPage();

    $pdf->SetFont('Arial', 'B', 13);
    $pdf->Cell(80);
    $pdf->Cell(30, 10, 'DATA BUKU', 0, 0, 'C');
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
$pdf->SetX(20);
$pdf->Cell(10, 8, 'ID', 1, 0, 'C', 1);
$pdf->SetX(30);
$pdf->Cell(55, 8, 'Judul', 1, 0, 'C', 1);
$pdf->SetX(85);
$pdf->Cell(25, 8, 'kategori', 1, 0, 'C', 1);
$pdf->SetX(110);
$pdf->Cell(40, 8, 'Asal ', 1, 0, 'C', 1);
$pdf->SetX(150);
$pdf->Cell(40, 8, 'Tanggal Masuk', 1, 0, 'C', 1);
$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial', '', 10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);
$pdf->MultiCell(10, 6, $column_id, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(30);
$pdf->MultiCell(55, 6, $column_judul, 1, 'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(85);
$pdf->MultiCell(25, 6, $column_kategori, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(110);
$pdf->MultiCell(40, 6, $column_asal, 1, 'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(150);
$pdf->MultiCell(40, 6, $column_tgl_input, 1, 'L');

$pdf->Output();
