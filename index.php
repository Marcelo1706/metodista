<?php
@session_start();
//Requerimiento de Archivos necesarios para cargar el sistema correctamente
require_once("core/configuracion.php");
require_once("core/funcionesBase.php");
require_once("core/baseDatos.php");

//Instanciar BD
$objBD = new baseDatos($config['host'],$config['baseDatos'],$config['nombreUsuario'],$config['clave']);

$url = isset($_SERVER['PATH_INFO']) ? explode('/', ltrim($_SERVER['PATH_INFO'],'/')) : '/';

//Verificar la sesion
if(isset($_SESSION['user@metodista']) && $url == "/"){
	header("location: ".$_SESSION['location']);
}

//La primera parte de la URL es el directorio
//La segunda parte es el archivo a llamar
if($url == "/"){
	//Si la URL Está vacía, procedemos a cargar el index
	//Cabecera de página
	require_once($config['home']."header.php");
	require_once($config['home']."home.php");
	//requerimento del final de página
	require_once($config['home']."footer.php");
}else{
	$folder = $url[0];
	if(isset($url[1]) && $url[1] != ""){
		$archivo = $url[1];
		if(file_exists($folder."/".$archivo.".php")){
			//Cabecera de página
			require_once($config['home']."header.php");
			require_once($folder."/".$archivo.".php");
			//requerimento del final de página
			require_once($config['home']."footer.php");

		} else {
			//Cabecera de página
			require_once($config['home']."header.php");
			require_once($config['home']."error.php");
			//requerimento del final de página
			require_once($config['home']."footer.php");
		}
	} else {
		if(file_exists($folder."/index.php")){
			//Cabecera de página
			require_once($config['home']."header.php");
			require_once($folder."/index.php");
			//requerimento del final de página
			require_once($config['home']."footer.php");
		} else {
			//Cabecera de página
			require_once($config['home']."header.php");
			require_once($config['home']."error.php");
			//requerimento del final de página
			require_once($config['home']."footer.php");
		}
	}
}
?>