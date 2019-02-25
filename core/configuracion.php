<?php
//Archivo de configuracion global
$config = array();

//Ruta por defecto del sistema
$config['rutaBase'] = "metodista";

//Datos de autenticación de la base de datos
$config['nombreUsuario'] = "root"; //Usuario
$config['clave'] = strrev(base64_decode("bHFzeW0=")); //Contraseña
$config['baseDatos'] = "metodista";

//Datos de rutas específicas
//Recursos
$config['recursos'] = "/".$config['rutaBase']."/assets/";
//CSS
$config['css'] = $config['recursos']."css/";
//JS
$config['js'] = $config['recursos']."js/";
//Imágenes
$config['img'] = $config['recursos']."img/";
//Subida de archivos
$config['upload'] = $config['recursos']."upload/";

//Carpetas del sistema
$config['core'] = "core/";
$config['home'] = "home/";
$config['docentes'] = "docentes/";
$config['administracion'] = "administracion/";
$config['estudiantes'] = "estudiantes/";
?>