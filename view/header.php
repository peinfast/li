<!DOCTYPE html>
<html lang="es">
	<header>
        <meta name="viewport" content="width=device-widht,user-scalable=no,initial-scale=1.0,masimum-scale=1.0,minimun-scale=1.0" charset="utf-8"/>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
				<script type="text/javascript">
					$(document).ready(function(){
						var cuentaInputs=$('#elementos').children().length;
						$('#agrega').click(function(){
								cuentaInputs++;
								$('<br class="fila'+cuentaInputs+'" /><label class="fila'+cuentaInputs+'" for="dato'+cuentaInputs+'">Ingrese el Dato No.'+cuentaInputs+':<label><input type="text" name="dato'+cuentaInputs+'" class="fila'+cuentaInputs+'" id="dato'+cuentaInputs+'" />').appenTo('#inputs');
								if (cuentaInputs==2) {
									$('input type="button" id="eliminame value="-"/>').insertAfter('#agrega');
								}	
						});
					}
			    </script>
	</header>
    <body>
		<?php
		  session_start();
		  if(isset($_SESSION['txtusuario'])){
		    $usuases=$_SESSION['txtusuario'];
		    $user=htmlspecialchars($usuases);
		  }
			include 'menu.php';
		 ?>
    <div class="container">
