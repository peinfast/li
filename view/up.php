<!DOCTYPE html>
<html lang="es">
	<header>
        <meta name="viewport" content="width=device-widht,user-scalable=no,initial-scale=1.0,masimum-scale=1.0,minimun-scale=1.0" charset="utf-8"/>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
				<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="assets/css/bootstrap.css"/>
        <link rel="stylesheet" href="assets/css/main.css"/>
        <script src="assets/js/modernizr-2.6.2.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
				<script>
							function recarga(){
								location.href=location.href
							}
							setInterval('recarga()',300000)
			  </script>

	</header>
    <body>
		<?php
		  session_start();
		  if(isset($_SESSION['txtusuario'])){
		    $usuases=$_SESSION['txtusuario'];
		    $user=htmlspecialchars($usuases);
		  }
			include 'side.php';
		 ?>
    <div class="container">
