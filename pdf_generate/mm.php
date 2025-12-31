/* ---------- SIGNATURE ---------- */
// $pdf->Image('signature.png', 130, 150, 40); // signature image
// $pdf->SetY(175);
// $pdf->SetX(120);
// $pdf->SetFont('Arial', '', 10);
// $pdf->Cell(60, 6, 'Authorized Signature', 0, 1, 'C');

/* ---------- LOGO ---------- */
$pdf->Image('tod-logo.png', 10, 10, 30); // x, y, width


// Table Header
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 8, '#', 1);
$pdf->Cell(55, 8, 'Departure', 1);
$pdf->Cell(55, 8, 'Arrival', 1);
$pdf->Cell(35, 8, 'Price', 1);
$pdf->Cell(35, 8, 'Total', 1);
$pdf->Ln();
