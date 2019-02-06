<?php 
session_start();
if(isset($_SESSION['sesion_id'])){
	header('location: '.$_SESSION['ubicacion']);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio | Colegio Metodista Ahuachapaneco</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>
<body>
	<div class="bg-image"></div>
	<div class="wrapper-index">
		<div class="columns">
			<div class="column is-2">
				<div class='card equal-height' style="background-color: rgb(0,0,0); background-color: rgba(0,0,0,0);">
				    <div class='card-content is-flex is-horizontal-center'>
				    	<figure class='image is-128x128'><img src='assets/img/cole_logo.png'></figure>
					</div>
				</div>
			</div>
			<div class="column is-10">
				<p class="title has-text-white is-size-1-desktop is-size-3-touch">COLEGIO METODISTA AHUACHAPANECO</p>
			</div>
		</div>
		<div class="columns">
			<div class="column is-7">
				<p class="title has-text-white">Misión</p>
				<p>Somos una institución educativa que impulsa el desarrollo integral de nuestros alumnos potencializando sus capacidades, habilidades y actitudes, para contribuir a la formación de seres humanos con un pensamiento crítico, científico y humanista, capaces de trabajar en equipo y trazar su proyecto de vida en el marco de un ambiente multicultural sustentado en los valores de honestidad, respeto, lealtad, solidaridad y responsabilidad social.</p>
				<p class="title has-text-white">Visión</p>
				<p>Ser la primera elección de las familias que garantice la formación académica, la madurez emocional y la educación en valores necesarios para el futuro de sus hijos en un mundo tecnológico y global.</p>
			</div>
			<div class="column is-5">
				<a href="administracion" class="button is-large is-info is-fullwidth">Acceso Administrativo</a><br>
				<a href="docentes" class="button is-large is-link is-fullwidth">Acceso Docentes</a><br>
				<a href="alumno" class="button is-large is-success is-fullwidth">Acceso Estudiantes</a>
			</div>
		</div>
	</div>
</body>
</html>