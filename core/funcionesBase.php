<?php 

function login_usuario($config,$objBD,$carnet,$pass,$role){

	//Hacer consulta
	$datos = $objBD->leer_uno($role,"*",array('usuario' => $carnet));
	if(gettype($datos) == 'string'){
		//Manejo de errores
		echo '
			<script type="text/javascript">
				swal({
					text: "'.$datos.'",
					title: "Error",
					icon: "error"
				})
			</script>
			';
	} else {
		if(count($datos) == 1){
			$pass1 = $datos[0]['clave'];
			if($pass1 == base64_encode($pass)){
				crear_sesion($config,$carnet,$role);
			} else {
				echo '
				<script type="text/javascript">
					swal({
						text: "La contraseña Proporcionada es Incorrecta",
						title: "Error",
						icon: "error"
					})
				</script>
				';
			}
		} else {
			echo '
			<script type="text/javascript">
				swal({
					text: "No se puede encontrar el usuario, si es correcto, verifique que el Tipo de Usuario sea el adecuado",
					title: "Error",
					icon: "error"
				})
			</script>
			';
		}
	}
}

function crear_sesion($config,$carnet,$role){
	switch($role){
		case 'administradores':
			$_SESSION['user@metodista'] = $carnet;
			$_SESSION['location'] = "/".$config['rutaBase']."/".$config['administracion']."index";
			$_SESSION['role'] = $role;
			$_SESSION['carpeta'] = "administracion";
			header('location: '.$_SESSION['location']);
		break;
		case 'estudiantes':
			$_SESSION['user@metodista'] = $carnet;
			$_SESSION['location'] = "/".$config['rutaBase']."/".$config['estudiantes']."index";
			$_SESSION['role'] = $role;
			$_SESSION['carpeta'] = "estudiantes";
			header('location: '.$_SESSION['location']);
		break;
		case 'docentes':
			$_SESSION['user@metodista'] = $carnet;
			$_SESSION['location'] = "/".$config['rutaBase']."/".$config['docentes']."index";
			$_SESSION['carpeta'] = "docentes";
			$_SESSION['role'] = $role;
			header('location: '.$_SESSION['location']);
		break;
	}
}

function registrar_admin($carnet,$pass1,$pass2,$objBD){
	if($pass1 != $pass2){
		echo '
			<script type="text/javascript">
				swal({
					text: "Las contraseñas no coinciden",
					icon: "warning",
					button: "Aceptar"
				})
			</script>
		';
	} else {
		if(count($objBD->leer_uno("administradores","*",array('usuario' => $carnet))) > 0){
			echo '
				<script type="text/javascript">
					swal({
						text: "Ya existe un administrador con ese carnet",
						icon: "warning",
						button: "Aceptar"
					})
				</script>
			';
		} else {
			$valores = array(
				'usuario' => $carnet,
				'clave' => base64_encode($pass2)
			);
			$exito = $objBD->insertar("administradores",$valores);
			if($exito == 1){
				echo '
					<script type="text/javascript">
						swal({
							text: "Administrador Registrado Exitosamente",
							icon: "success",
							button: "Aceptar"
						})
					</script>
				';
			}else{
				echo '<script type="text/javascript">
						swal({
							text: "Error '.$exito.'",
							icon: "error",
							button: "Aceptar"
						})
					</script>';
			}
		}
	}
}
?>