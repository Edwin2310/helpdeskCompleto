
<!-- Fecha y hora que se muestra en cada pagina del Sistema -->
<?php
date_default_timezone_set('America/Tegucigalpa');
setlocale(LC_TIME, 'spanish');
echo utf8_encode(strftime("%A %#d de %B del %Y"));

 /* Hora */
$DateAndTime = date('H:i A', time());  
echo " - $DateAndTime.";
?>
