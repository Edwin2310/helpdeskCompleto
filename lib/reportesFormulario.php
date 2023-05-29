<?php
require "./fpdf/fpdf.php";
include './nuevaConexion.php';
include './config.php';
include './conexion.php';

date_default_timezone_set('America/El_Salvador');

if (isset($_GET['Tipoticket'])) {
  $Tipoticket = $_GET['Tipoticket'];


  if ($Tipoticket == 0) {
    $sql = "SELECT * FROM tbl_equipo_entrada";
  }
  if ($Tipoticket == 1) {
    $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Resuelto'";
  }

  if ($Tipoticket == 2) {
    $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Pendiente'";
  }

  if ($Tipoticket == 3) {
    $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='Rechazado'";
  }

  if ($Tipoticket == 4) {
    $sql = "SELECT * FROM tbl_equipo_entrada WHERE estado_informe='En proceso'";
  }

} else {
  $sql = "SELECT * FROM tbl_equipo_entrada";
}
$query = mysqli_query($mysqli, $sql);



class PDF extends FPDF
{



  // Cabecera de página
  //Numeros de paginas
  //SetTextColor(255,255,255);es RGB extraer colores con GIMP
  //SetFillColor()
  //SetDrawColor()
  //Line(derecha-izquierda, arriba-abajo,ancho,arriba-abajo)
  //Color line setDrawColor(61,174,233)
  //GetX() || GetY() posiciones en cm
  //Grosor SetLineWidth(1)
  // SetFont(tipo{COURIER, HELVETICA,ARIAL,TIMES,SYMBOL, ZAPDINGBATS}, estilo[normal,B,I ,A], tamaño)
  // Cell(ancho , alto,texto,borde,salto(0/1),alineacion,rellenar, link)
  //AddPage(orientacion[PORTRAIT, LANDSCAPE], tamño[A3.A4.A5.LETTER,LEGAL],rotacion)
  //Image(ruta, poscisionx,pocisiony,alto,ancho,tipo,link)
  //SetMargins(10,30,20,20) luego de addpage


  function Header()
  {

    $this->Image('img/formatodocumentación.png', 1, -11, 200);
    $this->SetY(30);
    $this->SetX(14);
    $this->SetFont('Arial', 'B', 12);
    $this->SetTextColor(114, 116, 119);
    $this->Cell(89, 8, 'Informe de HelpDesk - Total de Entradas y Salidas', 0, 1);
    $this->SetY(35);
    $this->SetX(14);
    $this->SetFont('Arial', '', 8);
    $this->Cell(40, 8, date('d/m/Y | g:i:a'));


    $this->Ln(13);




    $this->SetX(15);
    $this->SetFillColor(136, 207, 224);
    $this->SetFont('Arial', 'B', 10);

    $this->SetTextColor(114, 116, 119);
    // $this->Cell(37, 12, utf8_decode('Fecha de Documento'),0,0,'C',1);
    // $this->Cell(34, 12, utf8_decode('| Fecha de Hecho'),0,0,'C',1);
    // $this->Cell(40, 12, utf8_decode('| Destinatario'),0,0,'C',1);
    // $this->Cell(30, 12, utf8_decode('| N° Memorandum'),0,0,'C',1);
    // $this->Cell(45, 12, utf8_decode('| Departamento'),0,0,'C',1);
    // $this->Cell(36, 12, utf8_decode('| Documento'),0,0,'C',1);
    // $this->Cell(33, 12, utf8_decode('| Remitente'),0,1,'C',1);

    // $this->SetFont('Arial','',10);
  }

  function Footer()
  {
    $this->SetFont('helvetica', 'B', 8);
    $this->SetY(-15);
    $this->Cell(250, 5, utf8_decode('Página') . $this->PageNo() . ' / {nb}', 00, 2, 'R');
    $this->Cell(0, 5, utf8_decode("Sistema Nacional de Emergencia 9-1-1 © Todos los derechos reservados."), 0, 0, "C");
  }
}

ob_start();


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage('Portrait', 'letter');
$pdf->SetAutoPageBreak(true, 20);
$pdf->SetTopMargin(12);


$pdf->SetTextColor(114, 116, 119);


// $pdf->SetX(15);
// $pdf->SetFillColor(136,207,224);
// $pdf->SetFont('Arial','B',10);

// $pdf->SetTextColor(114, 116, 119);
// $pdf->Cell(37, 12, utf8_decode('Fecha de Documento'),0,0,'C',1);
// $pdf->Cell(34, 12, utf8_decode('| Fecha de Hecho'),0,0,'C',1);
// $pdf->Cell(40, 12, utf8_decode('| Destinatario'),0,0,'C',1);
// $pdf->Cell(30, 12, utf8_decode('| N° Memorandum'),0,0,'C',1);
// $pdf->Cell(45, 12, utf8_decode('| Departamento'),0,0,'C',1);
// $pdf->Cell(36, 12, utf8_decode('| Documento'),0,0,'C',1);
// $pdf->Cell(33, 12, utf8_decode('| Remitente'),0,1,'C',1);

$pdf->SetFont('Arial', '', 10);


//--------------------------------TERMINAMOS DE PINTAR----------------------------
$cont = 1;
$estado_bitacora = "";
while ($tik = mysqli_fetch_array($query)) {
  $dic = $tik['estado_informe'];

  if ($estado_bitacora == "") {
    $estado_bitacora = "No";
  } else {
    $estado_bitacora = $dic;
  }
  $pdf->SetX(15); //posicionamos en x


  if ($cont % 2 == 0) {
    $pdf->SetFillColor(207, 224, 249);
    $pdf->SetDrawColor(65, 61, 61);
  } else {
    $pdf->SetFillColor(255, 255, 255);
    $pdf->SetDrawColor(65, 61, 61);
  }

  $cont++;

  $vari = "mario bross";
  // Cell(ancho , alto,texto,borde,salto(0/1),alineacion,rellenar, link)
  //DATOS




  $pdf->Cell(180, 8, utf8_decode("Serie: " . $tik['serie'] . "                                                                          Fecha de creación: " . $tik['fecha']), 'TLR', 1, 'L', 1);
  $pdf->SetX(15);


  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Edificio: " . $tik['edificio'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Departamento: " . $tik['departamento'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Tecnico: " . $tik['tecnico'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Usuario: " . $tik['usuario'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Procesador: " . $tik['procesador'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("HDD: " . $tik['disco'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Memoria RAM: " . $tik['memoria'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Service/Tag: " . $tik['service'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("No.Inventario: " . $tik['inventario'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Equipo: " . $tik['equipo'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Cell(180, 8, utf8_decode("Dispositivos Adicionales: " . $tik['adicionales'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Diagnostico: " . $tik['diagnostico'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Solución: " . $tik['solucion'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Requerimiento: " . $tik['requerimiento'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Lugar: " . $tik['lugar'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Fecha Entrega: " . $tik['fecha_entrega'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Hora: " . $tik['hora'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Observaciones: " . $tik['observaciones'] . "."), 'LR', 1, 'L', 1);

  $pdf->SetX(15);
  $pdf->Multicell(180, 8, utf8_decode("Estado: " . $tik['estado_informe'] . "."), 'BLR', 1, 'L', 1);





  $pdf->Ln(30);
}



$pdf->Output();

ob_end_flush();