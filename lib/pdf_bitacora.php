<?php
require "./fpdf/fpdf.php";
include './conexion.php';
include './config.php';

$id_bitacora = MysqlQuery::RequestGet('id_bitacora');
$sql = Mysql::consulta("SELECT * FROM tbl_bitacoras WHERE id_bitacora= '$id_bitacora'");
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
$pdf->Cell(0, 5, utf8_decode('Soporte Técnico 9-1-1'), 0, 1, 'C');

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0, 5, utf8_decode('Información de Bitacora'), 0, 1, 'C');


//Espacios en blanco
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(50, 10, 'Fecha y Hora', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['fecha']), 1, 1, 'L');

$pdf->Cell(50, 10, 'Departamento', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['departamento_ticket']), 1, 1, 'L');

$pdf->Cell(50, 10, 'Regionales', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['regional_ticket']), 1, 1, 'L');

$pdf->Cell(50, 10, utf8_decode('Técnicos Asignados'), 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['tecnicos_ticket']), 1, 1, 'L');

$pdf->Cell(50, 10, utf8_decode('Descripción de Equipo'), 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['descripcion_equipos']), 1, 1, 'L');

$pdf->Cell(50, 45, 'Problema Presentado', 1, 0, 'C', true);
$pdf->MultiCell(0, 15, utf8_decode($reg['problema_presentado']), 1, 'L');

$pdf->Cell(50, 60, utf8_decode('Solución de problema'), 1, 0, 'C', true);
$pdf->MultiCell(0, 15, utf8_decode($reg['solucion']), 1, 'L');

$pdf->Cell(50, 15, utf8_decode('Estado de Bitacora'), 1, 0, 'C', true);
$pdf->Cell(0, 15, utf8_decode($reg['estado_bitacora']), 1, 1, 'L');

$pdf->Ln();






$pdf->output();