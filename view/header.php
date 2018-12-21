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
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script>
							function recarga(){
								location.href=location.href
							}
							setInterval('recarga()',300000)
				</script>
				<script>
				$(document).ready(function(){

				  var addButton = $('.btn-danger'); //Add button selector
				  var wrapper = $('.col-sm-9'); //Input field wrapper
				  var fieldHTML = '<input type="text" name="OrdenCompra[]" value="<?php echo $alm->OrdenCompra; ?>" class="form-control" placeholder="Ingrese Orden de Compra" />'; //New input field html
				  $(addButton).click(function(){ //Once add button is clicked
				        $(wrapper).append(fieldHTML);
				  });
				  $(wrapper).on('click', '#btn-erase', function(e){ //Once remove button is clicked
				      e.preventDefault();
				       $(this).parent().parent().remove(); //Remove field html
				  });

				  $("#formulario").submit(function (){ // CUANDO ENVIEN EL FORMULARIO
				    var a = document.querySelectorAll("input[type='text']"); //BUSCAMOS TODOS LOS INPUTS
				     for(var b in a){ //COMO RETORNA UN ARRAY ITERAMOS
				       var c = a[b];
				       if(typeof c == "object"){ // SOLO PUROS OBJECTS
				        if(c.id != "idusuario"){ // SOLO BUSCAMOS LOS PRODUCTOS Y CANTIDADES
				          console.log(c.name,c.value); // NOMBRE DEL INPUT Y SU VALOR DE LA BUSQUEDA...
				        }
				       }
				     }
				  });
				});
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
