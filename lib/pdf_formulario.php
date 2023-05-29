<?php
require "./fpdf/fpdf.php";
include './nuevaConexion.php';
include './config.php';
include './conexion.php';

$id = MysqlQuery::RequestGet('id');
$sql = Mysql::consulta("SELECT * FROM tbl_equipo_entrada WHERE id= '$id'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);

class PDF extends FPDF
{
    function Footer()
    {
        $this->SetFont('helvetica', 'B', 8);
        $this->SetY(-15);
        $this->Cell(250, 5, utf8_decode('Página') . $this->PageNo() . ' / {nb}', 00, 2, 'R');
        $this->Cell(0, 5, utf8_decode("Sistema Nacional de Emergencia 9-1-1 © Todos los derechos reservados."), 0, 0, "C");
    }
}

$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(15, 20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(237, 187, 153);
$pdf->SetDrawColor(0, 0, 0);
$pdf->SetFont("Arial", "b", 12);
$pdf->Image('img/formatodocumentación.png', 1, -11, 200);

$pdf->Ln(20);


/*INICIO DE TITULOS COLOR GRIS  */
$pdf->SetFillColor(192, 192, 192); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetFont('Arial', 'B', 12); // Establece el estilo de fuente en negrita
$pdf->SetX(20);
$pdf->Cell(184, 8, utf8_decode("SERVICIO DE SOPORTE TÉCNICO"), 1, 1, 'C', true);
/*FIN DE TITULOS COLOR GRIS  */


$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->Cell(92, 8, utf8_decode("Fecha: " . $reg['fecha_entrega']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("Hora: " . $reg['hora']), 'TLR', 1, 'L', 1);



$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->Cell(92, 8, utf8_decode("Edificio: " . $reg['edificio']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("Departamento: " . $reg['departamento']), 'TLR', 1, 'L', 1);


//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->Cell(92, 8, utf8_decode("Técnico: " . $reg['tecnico']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("Usuario: " . $reg['usuario']), 'TLR', 1, 'L', 1);
//FIN DEL LUGAR DE TRABAJO

/*INICIO DE TITULOS COLOR GRIS  */
$pdf->SetFillColor(192, 192, 192); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetFont('Arial', 'B', 12); // Establece el estilo de fuente en negrita
$pdf->SetX(20);
$pdf->Cell(184, 8, utf8_decode("ESPECIFICACIÓN DEL EQUIPO"), 1, 1, 'C', true);
/*FIN DE TITULOS COLOR GRIS  */



//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->Cell(92, 8, utf8_decode("Equipo: " . $reg['procesador']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("RAM: " . $reg['memoria']), 'TLR', 1, 'L', 1);
//FIN DEL LUGAR DE TRABAJO


//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->Cell(92, 8, utf8_decode("HDD: " . $reg['disco']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("Procesador: " . $reg['procesador']), 'TLR', 1, 'L', 1);
//FIN DEL LUGAR DE TRABAJO


//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->Cell(92, 8, utf8_decode("Service/Tag(Serie): " . $reg['service']), 'TLR', 0, 'L', 1);
$pdf->Cell(92, 8, utf8_decode("No.Inventario: " . $reg['inventario']), 'TLR', 1, 'L', 1);
//FIN DEL LUGAR DE TRABAJO


$pdf->SetFont("Arial", "", 10);
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Dispositivos Adicionales: " . $reg['adicionales'] . "."), 'TLR', 1, 'L', 1);



/*INICIO DE TITULOS COLOR GRIS  */
$pdf->SetFillColor(192, 192, 192); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetFont('Arial', 'B', 12); // Establece el estilo de fuente en negrita
$pdf->SetX(20);
$pdf->Cell(184, 8, utf8_decode("DESCRIPCIÓN DEL EQUIPO"), 1, 1, 'C', true);
/*FIN DE TITULOS COLOR GRIS  */




/* $pdf->SetFont("Arial", "", 10);
$pdf->SetX(25);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(25);
$pdf->Cell(100, 8, utf8_decode("Diagnóstico:"), 'TLR', 0, 'L', 1); // Celda del título del diagnóstico
$pdf->Cell(82, 8, utf8_decode("Lugar De Trabajo: " . $reg['lugar']), 'TLR', 1, 'L', 1); // Celda del lugar de trabajo
$pdf->SetX($pdf->GetX() + 5); // Ajusta la posición horizontal para el contenido de $reg['diagnostico']
$pdf->SetX(25);
$pdf->Cell(100, 18, utf8_decode($reg['diagnostico']), 'LR', 1, 'L', 1); // Celda del contenido de $reg['diagnostico']
 */


$pdf->SetFont("Arial", "", 10);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Lugar De Trabajo: " . $reg['lugar'] . "."), 'TLR', 1, 'C', 1);



$pdf->SetFont("Arial", "", 10);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Diagnóstico: " . $reg['diagnostico'] . "."), 'TLR', 1, 'L', 1);



$pdf->SetFont("Arial", "", 10);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Solucion: " . $reg['solucion'] . "."), 'TLR', 1, 'L', 1);



$pdf->SetFont("Arial", "", 10);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Requerimiento: " . $reg['requerimiento'] . "."), 'TLR', 1, 'L', 1);




$pdf->SetFont("Arial", "", 10);
$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetX(20);
$pdf->MultiCell(184, 8, utf8_decode("Observaciones: " . $reg['observaciones'] . "."), 'TLR', 1, 'L', 1);



/*INICIO DE TITULOS COLOR GRIS  */
$pdf->SetFillColor(192, 192, 192); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetFont('Arial', 'B', 12); // Establece el estilo de fuente en negrita
$pdf->SetX(20);
$pdf->Cell(184, 8, utf8_decode("CIERRE DE SOLICITUD"), 1, 1, 'C', true);



$pdf->SetFillColor(255, 255, 255); // Establece el color de fondo gris (RGB: 192, 192, 192)
$pdf->SetFont("Arial", "B", 10);
$pdf->SetX(20);
$pdf->MultiCell(184, 52, utf8_decode('              Nombre y Firma Del Usuario                                                                Nombre y Firma del Técnico'), 'BLR', 1, 'L', 1);


//LINEA 220 ALTURA , 85 FORMA LINEA
$pdf->Line(30, 220, 88, 220);
$pdf->Line(140, 220, 198, 220);




//BLR ES LA LINEA AL FINAL DEL CUADRO 







$pdf->output();