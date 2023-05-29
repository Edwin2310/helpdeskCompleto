<?php
require "./fpdf/fpdf.php";
include './conexion.php';
include './config.php';

$id_informe = MysqlQuery::RequestGet('id_informe');
$sql = Mysql::consulta("SELECT * FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);

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

        $this->Image('img/formatodocumentación.png', 8, -11, 200);
        $this->SetY(30);
        $this->SetX(14);
        $this->SetFont('Arial', 'B', 12);
        ;


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

$pdf->SetFont('Arial', '', 10);





$pdf = new PDF('P', 'mm', 'Letter');
$pdf->SetMargins(15, 20);
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(253, 254, 254);
$pdf->SetFont("Arial", "b", 14);
$pdf->Image('img/formatodocumentación.png', 8, -11, 200);

//Espacios en blanco

$pdf->SetX(70);
$pdf->Cell(0, 5, utf8_decode('DIRECCION DE TECNOLOGIA'), 'C', 1, );


//Espacios en blanco
$pdf->Ln();




//INCIO DEL ASUNTO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(30);
$pdf->Cell(180, 8, utf8_decode("Asunto: " . $reg['asunto']), 'C', 1, );
//FIN DEL ASUNTO


//INCIO DE LA HORA Y FECHA
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(30);
$pdf->Cell(180, 8, utf8_decode("Fecha Y Hora: " . $reg['fecha']), 'C', 1, );
//FIN DE LA HORA Y FECHA


//INCIO DE LOS DATOS GENERALES
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('1.Datos Generales'), 'C', 1, );
//FIN DE LOS DATOS GENERALES


//INCIO DE LOS TIPOS DE SERVICIOS
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(30);
$pdf->Cell(180, 8, utf8_decode("Tipo de Servicio: " . $reg['tipo_servicio']), 'C', 1, );
//FIN DE LOS TIPOS DE SERVICIOS


//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(30);
$pdf->Cell(180, 8, utf8_decode("Lugar de Trabajo: " . $reg['lugar_trabajo']), 'C', 1, );
//FIN DEL LUGAR DE TRABAJO


//INCIO DEL LUGAR DE TRABAJO
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(30);
$pdf->Cell(180, 8, utf8_decode("Departamento Asignado: " . $reg['departamento_ticket']), 'C', 1, );
//FIN DEL LUGAR DE TRABAJO



//INCIO DE ANTECEDENTES
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('2.Antecedentes'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);
$pdf->MultiCell(180, 8, utf8_decode($reg['antecedentes']), 'C', 1, );
$pdf->Ln();
//FIN DE ANTECEDENTES


//INCIO DE ANALISIS
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('3.Análisis'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);
$pdf->MultiCell(180, 8, utf8_decode($reg['analisis']), 'C', 1, );
$pdf->Ln();
//FIN DE ANALISIS



//INCIO DE RECOMENDACIONES
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('4.Recomendaciones'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);
$pdf->MultiCell(180, 8, utf8_decode($reg['recomendaciones']), 'C', 1, );
$pdf->Ln();
//FIN DE RECOMENDACIONES


//INCIO DE CONCLUSIONES
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('5.Conclusiones'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);
$pdf->MultiCell(180, 8, utf8_decode($reg['conclusiones']), 'C', 1, );
$pdf->Ln();

//FIN DE CONCLUSIONES


//INCIO DE ANEXOS
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('6.Anexos'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->SetX(35);

//ANEXO 1
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT anexos FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->Cell(100, 5, $pdf->Image('../imagenes/' . $row['anexos'], $pdf->GetX() + 0, $pdf->GetY() + 3, 150), 'C', 1, ); //PONER DIRECTORIO DE ../IMAGENES QUE ES DONDE SE ALMACENAN 
    $pdf->Ln();
    $pdf->Ln();
    $i++;
}

//FIN ANEXO 1



//INCIO DE ANEXOS2

//IMPORTANTE DEBEN SEGUIR ESTE ORDE SETY Y ABAJO SETX
$pdf->SetY(150); //ESPACIOS ENTRE LAS IMAGENES
$pdf->SetX(35); //CONTROLAR LOS LATERALES DE IZQUIERDA A DERECHA 
//ANEXO 2
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT anexos2 FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->Cell(100, 5, $pdf->Image('../imagenes/' . $row['anexos2'], $pdf->GetX() + 0, $pdf->GetY() + 3, 150), 'C', 1, ); //PONER DIRECTORIO DE ../IMAGENES QUE ES DONDE SE ALMACENAN 
    $pdf->Ln();
    $i++;
}

//FIN ANEXO 2
$pdf->Ln();
$pdf->Ln();

//FIN DE ANEXOS




//INCIO DE ANEXOS
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('6.Anexos'), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);

//ANEXO 1
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT anexos FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->Cell(100, 5, $pdf->Image('../imagenes/' . $row['anexos'], $pdf->GetX() + 0, $pdf->GetY() + 3, 150), 'C', 1, ); //PONER DIRECTORIO DE ../IMAGENES QUE ES DONDE SE ALMACENAN 
    $pdf->Ln();
    $pdf->Ln();
    $i++;
}

//FIN ANEXO 1



//INCIO DE ANEXOS2

//IMPORTANTE DEBEN SEGUIR ESTE ORDE SETY Y ABAJO SETX
$pdf->SetY(150); //ESPACIOS ENTRE LAS IMAGENES
$pdf->SetX(35); //CONTROLAR LOS LATERALES DE IZQUIERDA A DERECHA 
//ANEXO 2
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT anexos2 FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->Cell(100, 5, $pdf->Image('../imagenes/' . $row['anexos2'], $pdf->GetX() + 0, $pdf->GetY() + 3, 150), 'C', 1, ); //PONER DIRECTORIO DE ../IMAGENES QUE ES DONDE SE ALMACENAN 
    $pdf->Ln();
    $i++;
}

//FIN ANEXO 2
$pdf->Ln();
$pdf->Ln();






//INCIO DE ANEXOS


$pdf->AddPage();

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(253, 254, 254);
$pdf->SetFont("Arial", "b", 14);
$pdf->Image('img/formatodocumentación.png', 8, -11, 200);



//INCIO DE ANEXOS
$pdf->SetFont("Arial", "B", 14);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode(''), 'C', 1, );
$pdf->SetFont("Arial", "", 10);
$pdf->Ln();
$pdf->SetX(35);



//ANEXO 3
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT anexos3 FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->Cell(100, 5, $pdf->Image('../imagenes/' . $row['anexos3'], $pdf->GetX() + 0, $pdf->GetY() + 3, 150), 'C', 1, ); //PONER DIRECTORIO DE ../IMAGENES QUE ES DONDE SE ALMACENAN 
    $pdf->Ln();
    $pdf->Ln();
    $i++;
}

//FIN ANEXO 3
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();







//INICO DE FOOTER

$pdf->SetFont("Arial", "B", 10);
$pdf->SetX(37);
$pdf->Cell(0, 5, utf8_decode('Informe elaborado por:                                                                            Informe aprobado por:'), 'C', 1, );
$pdf->Ln();

//LINEA 190 ALTURA , 85 FORMA LINEA
$pdf->Line(30, 190, 85, 190);

$pdf->Line(140, 190, 198, 190);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont("Arial", "B", 10);
$pdf->SetX(33);
$pdf->Cell(0, 5, utf8_decode('Unidad de Soporte Técnico                                                               Asesor en el área de Tecnología'), 'C', 1, );
$pdf->Ln();

//MOSTRANDO EL NOMBRE DEL TECNICO
$id_informe = MysqlQuery::RequestGet('id_informe');
$sqli = Mysql::consulta("SELECT nombre_tecnico FROM tbl_informe WHERE id_informe= '$id_informe'");
$reg = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$i = 1;


while ($row = mysqli_fetch_array($sqli)) {
    $pdf->SetFont("Arial", "", 10);

    //ALINEAR TEXTO
    $pdf->SetY(200); //ALTURA DE TEXTO
    $pdf->Cell(18); //ORIENTACION DERECHA O IZQUIERA DEPENDIENDO EL NUMERO

    $pdf->Cell(100, 5, ($row['nombre_tecnico']), 'C', 1);

    //ALINEAR TEXTO
    $pdf->SetY(200); //ALTURA DE TEXTO
    $pdf->Cell(135); //ORIENTACION DERECHA O IZQUIERA DEPENDIENDO EL NUMERO
    $pdf->Cell(40, 5, utf8_decode('Ing. Emerson Vázquez'), 'C', 1, );

    $pdf->Ln();
    $pdf->Ln();
    $i++;
}

//FIN DE INFORME ELABORADOR POR



/* //INFORME APROBADO POR
$pdf->SetFont("Arial", "B", 10);
$pdf->SetX(35);
$pdf->Cell(0, 5, utf8_decode('Informe aprobado por:'), 'C', 1,);
$pdf->Ln();

//LINEA 190 ALTURA , 85 FORMA LINEA
$pdf->Line(30, 190, 85, 190);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont("Arial", "B", 10);
$pdf->SetX(33);
$pdf->Cell(0, 5, utf8_decode('Director de Tecnología'), 'C', 1,);
$pdf->Ln();
$pdf->SetFont("Arial", "", 10);
$pdf->Cell(0, 5, utf8_decode('Ing. Moisés Rodríguez'), 'C', 1,);


 */




//FIN DEL FOOTER




$pdf->Ln();
$pdf->Ln();

//FIN DE ANEXOS





$pdf->output();






?>