<html>
<?php
	include ("../archivos/conexion.php");
	include_once "../lib/conexion.php";
?>
	<head>
		<title>CAMBIAR ESTADO</title>
	</head>
	<body>
	<?php
		
		$rut = $_REQUEST['id_usuario'];
		//$rut = $_POST['estado'];

		$consulta = "UPDATE tbl_usuarios 
									SET
										estado = 1
									WHERE
									id_usuario = '$rut'";
		$query_run = mysqli_query($con, $consulta);

	?>	
		<h1>Se ha cambiado el estado de la persona RUT: <?php echo $rut; ?></h1><br><br>
	
	</body>
</html>