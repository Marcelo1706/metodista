<?php
@session_start();
//Requerimiento de Archivos necesarios para cargar el sistema correctamente
require_once("core/configuracion.php");
require_once("core/funcionesBase.php");

//Verificacion de sesión
verificar_sesion();

//Cabecera de página
require_once($config['home']."header.php");

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

//La primera parte de la URL es el directorio
//La segunda parte es el archivo a llamar
if($url == "/"){
	//Si la URL Está vacía, procedemos a cargar el index
	require_once($config['home']."home.php");
}else{
	$folder = $url[0];
	$archivo = $url[1];
	if(file_exists($folder."/".$archivo.".php")){
		require_once($folder."/".$archivo.".php");
	} else {
		require_once($config['home']."error.php");
	}
}

//requerimento del final de página
require_once($config['home']."footer.php");
?>