<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
		<style media="screen">
		@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
font-family: 'Poppins', sans-serif;
background: #fafafa;
}

p {
font-family: 'Poppins', sans-serif;
font-size: 1.1em;
font-weight: 300;
line-height: 1.7em;
color: #999;
}

a,
a:hover,
a:focus {
text-decoration: none;
transition: all 0.3s;
}

.navbar {
padding: 15px 10px;
background: #fff;
border: none;
border-radius: 0;
margin-bottom: 40px;
box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
box-shadow: none;
outline: none !important;
border: none;
}

.line {
width: 100%;
height: 1px;
border-bottom: 1px dashed #ddd;
margin: 40px 0;
}


/* ---------------------------------------------------
	SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
display: flex;
align-items: stretch;
}

#sidebar {
min-width: 250px;
max-width: 250px;
background: #7386D5;
color: #fff;
transition: all 0.3s;
}

#sidebar a,
#sidebar a:hover,
#sidebar a:focus {
color: inherit;
}

#sidebar.active {
margin-left: -250px;
}

#sidebar .sidebar-header {
padding: 20px;
background: #6d7fcc;
}

#sidebar ul.components {
padding: 20px 0;
border-bottom: 1px solid #47748b;
}

#sidebar ul p {
color: #fff;
padding: 10px;
}

#sidebar ul li a {
padding: 10px;
font-size: 1.1em;
display: block;
}

#sidebar ul li a:hover {
color: #7386D5;
background: #fff;
}

#sidebar ul li.active > a,
a[aria-expanded="true"] {
color: #fff;
background: #6d7fcc;
}

a[data-toggle="collapse"] {
position: relative;
}

a[aria-expanded="false"]::before,
a[aria-expanded="true"]::before {
content: '\e259';
display: block;
position: absolute;
right: 20px;
font-family: 'Glyphicons Halflings';
font-size: 0.6em;
}

a[aria-expanded="true"]::before {
content: '\e260';
}

ul ul a {
font-size: 0.9em !important;
padding-left: 30px !important;
background: #6d7fcc;
}

ul.CTAs {
padding: 20px;
}

ul.CTAs a {
text-align: center;
font-size: 0.9em !important;
display: block;
border-radius: 5px;
margin-bottom: 5px;
}

a.download {
background: #fff;
color: #7386D5;
}

a.article,
a.article:hover {
background: #6d7fcc !important;
color: #fff !important;
}


/* ---------------------------------------------------
	CONTENT STYLE
----------------------------------------------------- */

#content {
width: 100%;
padding: 20px;
min-height: 100vh;
transition: all 0.3s;
}

#content p a {
color:
}


/* ---------------------------------------------------
	MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
#sidebar {
	margin-left: -250px;
}
#sidebar.active {
	margin-left: 0;
}
#sidebarCollapse span {
	display: none;
}
}
		</style>
		<script type="text/javascript">
		$(document).ready(function() {
$("#sidebarCollapse").on("click", function() {
$("#sidebar").toggleClass("active");
$(this).toggleClass("active");
});
});
		</script>
	</head>
	<body>
		<div class="wrapper">
<!-- Sidebar Holder -->
<nav id="sidebar">
	<div class="sidebar-header">
		<h3>Logistica Inversa</h3>
	</div>

	<ul class="list-unstyled components">
		<li class="active">
			<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Rechazos</a>
			<ul class="collapse list-unstyled" id="homeSubmenu">
				<li><a href="?c=Inversa&a=Rechazo">Registro</a></li>
				<li><a href="?c=Inversa&a=NC">Nota de Credito</a></li>
				<li><a href="?c=Inversa&a=Salida">Salida</a></li>
			</ul>
		</li>
		<li>
			<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Polaroid</a>
			<ul class="collapse list-unstyled" id="pageSubmenu">
				<li><a href="#">Ingreso</a></li>
				<li><a href="#">Clasificacion</a></li>
				<li><a href="#">Paletizado</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Portfolio</a>
		</li>
		<li>
			<a href="#">Contact</a>
		</li>
	</ul>

	<ul class="list-unstyled CTAs">
		<li><a href="index.html" class="article">Cerrar Sesion</a></li>
	</ul>
</nav>

<!-- Page Content Holder -->
<div id="content">

	<nav class="navbar navbar-default">
		<div class="container-fluid">

			<div class="navbar-header">
				<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
															<i class="glyphicon glyphicon-align-left"></i>
															<span>Inicio</span>
													</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Ingreso</a></li>
					<li><a href="#">Clasificacion</a></li>
					<li><a href="#">Paletizado</a></li>
					<li><a href="#">Rechazos</a></li>
				</ul>
			</div>
		</div>
	</nav>
	</body>
</html>
