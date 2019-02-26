<?php
require_once("inicioAdmin.php");
?>
<br>
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<center><h1 class="title">Gestión de Administradores</h1></center>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<table class="table table-striped table-bordered table-hover table-responsive d-table w-100">
				  <thead class="thead-dark">
				    <tr>
				      <th scope="col" width="5%">ID</th>
				      <th scope="col" width="30%">Usuario</th>
				      <th scope="col" width="25%">Contraseña</th>
				      <th scope="col" width="40%">Opciones</th>
				    </tr>
				  </thead>
				  <tbody>
					<?php
				 		$admins = $objBD->leer_uno("administradores","*"); 

				 		$id = 1;
				 		foreach ($admins as $valor) {
				 			extract($valor);
				 			echo "
								<tr>
									<td>$id_administrador</td>
									<td>$usuario</td>
									<td><p id='$id'>********* <a onclick='revelar(\"".base64_decode($clave)."\",$id)' href='#'>Ver</a></p></td>
									<td>
										<button class=\"btn btn-raised btn-success\">Cambiar Clave</button>
										<button class=\"btn btn-raised btn-danger\">Eliminar</button>
									</td>
								</tr>
				 			";
				 			$id++;
				 		}
					?>
				  </tbody>
				</table>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function revelar(texto,id){
		document.getElementById(id).innerHTML = texto+" <a onclick=\"ocultar('"+texto+"',"+id+")\" href='#'>Ocultar</a>";
	}
	function ocultar(texto,id){
		document.getElementById(id).innerHTML = "********* <a onclick=\"revelar('"+texto+"',"+id+")\" href='#'>Ver</a>";
	}
</script>