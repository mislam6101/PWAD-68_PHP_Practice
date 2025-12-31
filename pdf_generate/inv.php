<?php
$db = new mysqli('localhost', 'root', '', 'tod_database');
$rawData = $db->query("SELECT * FROM  air_tick_req");
$row = $rawData->fetch_object();
require('fpdf186/fpdf.php');

$pdf = new FPDF('P', 'mm', [200, 200]);
$pdf->AddPage();

/* ---------- LOGO ---------- */
$pdf->Image('tod-logo.png', 10, 10, 30);

/* ---------- TITLE ---------- */
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'INVOICE', 0, 1, 'C');
$pdf->Ln(5);

/* ---------- COMPANY & BUYER DETAILS ---------- */
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(45);

// Company Details (Left)
$pdf->Cell(95, 6, 'Agency Details', 0, 0);
$pdf->Cell(95, 6, 'Client Details', 0, 1);

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(95, 6, 'Travelers of Destination', 0, 0);
$pdf->Cell(95, 6, $row->client_name, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(95, 6, 'Dhaka, Bangladesh', 0, 0);
$pdf->Cell(95, 6, 'Email: '. $row->client_email, 0, 1);
$pdf->Cell(95, 6, 'Phone: 01959-186101', 0, 0);

$pdf->Ln(5);

$pdf->Ln(5);

/* ---------- INVOICE INFO ---------- */
$pdf->Cell(95, 6, 'Invoice No: INV-1001', 0, 0);
$pdf->Cell(95, 6, 'Date: ' . date('d-m-Y'), 0, 1);

$pdf->Ln(5);

/* ---------- TABLE HEADER ---------- */
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 8, '#', 1);
$pdf->Cell(65, 8, 'Departure From', 1);
$pdf->Cell(65, 8, 'Arrival To', 1);
$pdf->Cell(30, 8, 'Price', 1);
$pdf->Ln();

/* ---------- TABLE DATA ---------- */
$pdf->SetFont('Arial', '', 10);

$pdf->Cell(10, 8, '1', 1);
$pdf->Cell(65, 8, $row->from, 1);
$pdf->Cell(65, 8, $row->to, 1);
$pdf->Cell(30, 8, $row->price, 1);
$pdf->Ln();

/* ---------- Service Charge ---------- */
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(140, 8, 'Service Charge (5%)', 1);
$pdf->Cell(30, 8,$sv = $row->price*(5/100) , 1);

$pdf->Ln();
$total = $row->price + $sv;
/* ---------- GRAND TOTAL ---------- */
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(140, 8, 'Grand Total', 1);
$pdf->Cell(30, 8, (int) round($total) . ' BDT', 1);

$pdf->Ln(15);

// /* ---------- SIGNATURE ---------- */
// $pdf->Image('signature.png', 130, 150, 40);
// $pdf->SetY(175);
// $pdf->SetX(120);
// $pdf->SetFont('Arial', '', 10);
// $pdf->Cell(60, 6, 'Authorized Signature', 0, 1, 'C');

/* ---------- OUTPUT ---------- */
$pdf->Output();
?>
