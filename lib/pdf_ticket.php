<?php
require "./fpdf/fpdf.php";
include './conexion.php';
include './config.php';

$serie = MysqlQuery::RequestGet('serie');
$sql = Mysql::consulta("SELECT * FROM tbl_ticket WHERE serie= '$serie'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);

class PDF extends FPDF
{
}

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(15, 20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(237, 187, 153);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFont("Arial", "b", 12);
$pdf->Image('../img/911.png', 30, 10, -500);
$pdf->Cell(0, 5, utf8_decode('Estado Actual De Ticket'), 0, 1, 'C');


$pdf->Ln();
$pdf->Ln();


$pdf->Cell(0, 5, utf8_decode('Información de Ticket #' . utf8_decode($reg['serie'])), 0, 1, 'C');

//Espacios en blanco
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(36, 10, 'Fecha y Hora', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['fecha']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Nombre', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['nombre_usuario']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Email', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['email']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Departamento', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['id_dept']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Atendido Por', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['atendidopor']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Estado', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['estado_ticket']), 1, 1, 'L');
$pdf->Cell(36, 10, 'Asunto', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['asunto']), 1, 1, 'L');

$pdf->Cell(36, 10, 'Solucion', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['solucion']), 1, 1, 'L');


$pdf->Ln();

$pdf->Cell(0, 5, utf8_decode('Soporte Técnico 9-1-1'), 0, 1, 'C');

$pdf->output();