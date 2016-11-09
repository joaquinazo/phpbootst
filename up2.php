<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Backend</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style type="text/css">
			.boton{
				color: black;
				background-color:#FFFFFF;
				border-color: black;
				-webkit-transition-duration: 0.4s; /* Safari */
   				transition-duration: 0.4s;
			}
			.boton:hover {
			    background-color: black; /* Green */
			    color: white;
			    border-color: black;

			}
		</style>
	</head>
	<body>
	<?php 
			include 'php.php';

			
			$clave = $_POST['clave'];
			$nombre = $_POST['nombre'];
			$valor = $_POST['precio'];
			$cantidad = $_POST['cantidad'];
			$sql = "UPDATE `dispensador` SET clave = '$clave', nombre = '$nombre' , precio = '$valor',cantidad = '$cantidad'  WHERE clave = '$clave'"; 
			print($sql);
			$result = $conexion->query($sql);
			

						

	?>
	 <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		  	
		  </div>
		  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 center-block offset-4">
		  	<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<strong>Succesful</strong> The row has been deleted succesfully
			</div>
		  </div>