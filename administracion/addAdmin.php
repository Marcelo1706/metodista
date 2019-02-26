<?php
require_once("inicioAdmin.php");
?>
<br>
<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8">
				<center><h1 class="title">Agregar un Administrador</h1></center>
			</div>
			<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form method="post" action="">
				  <div class="form-group">
				    <label for="formGroupExampleInput">Carnet</label>
				    <input name="carnet" type="text" class="form-control" placeholder="Carnet" required>
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">Contraseña</label>
				    <input name="pass1" type="password" class="form-control" placeholder="Contraseña" required>
				  </div>
				  <div class="form-group">
				    <label for="formGroupExampleInput2">Confirmar Contraseña</label>
				    <input name="pass2" type="password" class="form-control" placeholder="Confirmar Contraseña" required>
				  </div>
				  <button name="enviar" type="submit" class="btn btn-raised btn-primary btn-block">Registrar Administrador</button>
				</form>
			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</div>
<?php 
if(isset($_POST['enviar'])){
	extract($_POST);
	registrar_admin($carnet,$pass1,$pass2,$objBD);
}
?>