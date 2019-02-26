<div class="row">
	<aside class="col-sm-3"></aside>
	<aside class="col-sm-6">
		<br>
		<div class="card">
			<article class="card-body">
				<h4 class="card-title text-center mb-4 mt-1">Iniciar Sesión</h4>
				<hr>
				<p class="text-success text-center">Ingrese sus datos y el tipo de usuario</p>
				<form method="post" action="">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
						 </div>
						<input name="carnet" class="form-control" placeholder="Carnet o Nombre de Usuario" type="text" required>
					</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						 </div>
					    <input name="pass" class="form-control" placeholder="Contraseña" type="password" required>
					</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
					<label for="exampleFormControlSelect1">Tipo de Usuario</label>
						<select name="role" class="form-control" id="exampleFormControlSelect1" required>
					    	<option value="">-- Seleccione Uno --</option>
					    	<option value="estudiantes">Estudiante</option>
					    	<option value="docentes">Docente</option>
					    	<option value="administradores">Administracion</option>
					    </select>
					</div>
					<div class="form-group">
						<button name="login" type="submit" class="btn btn-raised btn-primary btn-block">Iniciar Sesión</button>
						<a href="/metodista/" class="btn btn-raised btn-secondary btn-block">Volver al Inicio</a>
					</div> <!-- form-group// -->
				</form>
			</article>
		</div> <!-- card.// -->
	</aside> <!-- col.// -->
	<aside class="col-sm-3"></aside>
</div>
<?php
if(isset($_POST['login'])){
	extract($_POST);
	login_usuario($config,$objBD,$carnet,$pass,$role);
}
?>