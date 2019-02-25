<?php 
//Funciones globales para todas las páginas

function verificar_sesion(){
	if(isset($_SESSION['user@metodista'])){
		header("location: ".$_SESSION['location']);
	} else {
		return false;
	}
}
?>