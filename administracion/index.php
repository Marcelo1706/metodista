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
	<title>Administración | Colegio Metodista Ahuachapaneco</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login.css">
	<script type="text/javascript" src="assets/js/jquery.min.js"></script>
</head>
<body>
	<section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">COLEGIO METODISTA AHUACHAPANECO</h3>
                    <p class="subtitle has-text-grey">Inicie Sesión Para Continuar.</p>
                    <div class="box">
                        <figure class="avatar">
                            <img src="../assets/img/cole_logo.png" width="128" height="128">
                        </figure>
                        <form>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" placeholder="Nombre de Usuario" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" placeholder="Contraseña">
                                </div>
                            </div>
                            <button class="button is-block is-info is-large is-fullwidth">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>