<?php
require "./fpdf/fpdf.php";
include './conexion.php';
include './config.php';


$id_calendario = MysqlQuery::RequestGet('id');
$sql = Mysql::consulta("SELECT * FROM tbl_calendario WHERE id= '$id_calendario'");
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
$pdf->Cell(0, 5, utf8_decode('Reporte de problema mediante Ticket'), 0, 1, 'C');

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();


$pdf->Cell(0, 5, utf8_decode('Información de Ticket:  #' . utf8_decode($reg['serie'])), 0, 1, 'C');


//Espacios en blanco
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(50, 10, 'Evento', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['evento']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Fecha Inicio', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['fecha_inicio']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Fecha Final', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['fecha_fin']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Hora', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['hora']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Nombre Usuario', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['nombre_usuario']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Correo', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['correo']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Departamento', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['departamento_ticket']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Area solicitud', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['area_solicitud']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Regional Ticket', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['regional_ticket']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Tecnicos Asignados', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['tecnicos_ticket']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Problema Presentado', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['problema_presentado']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Serie', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['serie']), 1, 1, 'L');
$pdf->Cell(50, 10, 'Estado', 1, 0, 'C', true);
$pdf->Cell(0, 10, utf8_decode($reg['estado_bitacora']), 1, 1, 'L');

$pdf->Ln();

$pdf->Cell(0, 5, utf8_decode('Soporte Técnico 9-1-1'), 0, 1, 'C');

$pdf->output();
