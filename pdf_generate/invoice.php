<?php
$db = new mysqli('localhost', 'root', '', 'tod_database');
$rawData = $db->query("SELECT * FROM  air_tick_req");
$row = $rawData->fetch_object();
require('fpdf186/fpdf.php');

// Create PDF
$pdf = new FPDF();
$pdf->AddPage();

// Set Font
$pdf->SetFont('Arial', 'B', 16);

// Invoice Title
$pdf->Cell(190, 10, 'INVOICE', 0, 1, 'C');
$pdf->Ln(5);

// Company Info
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(100, 8, 'Travelers of Destination', 0, 1);
$pdf->Cell(100, 8, 'Dhaka, Bangladesh', 0, 1);
$pdf->Cell(100, 8, 'Phone: 01959-186101', 0, 1);
$pdf->Ln(5);

// Invoice Details
$pdf->Cell(100, 8, 'Invoice No: INV-1001', 0, 0);
$pdf->Cell(90, 8, 'Date: ' . date('d-m-Y'), 0, 1);
$pdf->Ln(5);

// Table Header
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 8, '#', 1);
$pdf->Cell(60, 8, 'Departure From', 1);
$pdf->Cell(60, 8, 'Arrival To', 1);
$pdf->Cell(30, 8, 'Price', 1);
$pdf->Cell(30, 8, 'Total', 1);
$pdf->Ln();

// Table Data
$pdf->SetFont('Arial', '', 12);

$pdf->Cell(10, 8, '1', 1);
$pdf->Cell(60, 8, $row->from, 1);
$pdf->Cell(60, 8, $row->to, 1);
$pdf->Cell(30, 8, $row->price, 1);
$pdf->Cell(30, 8, $row->price, 1);
$pdf->Ln();

// Grand Total
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(160, 8, 'Grand Total', 1);
$pdf->Cell(30, 8, 10000 . ' BDT', 1);

// Output PDF
$pdf->Output();
?>
