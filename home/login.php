<div class="row">
	<aside class="col-sm-4"></aside>
	<aside class="col-sm-4">
		<br>
		<div class="card">
			<article class="card-body">
				<h4 class="card-title text-center mb-4 mt-1">Iniciar Sesión</h4>
				<hr>
				<p class="text-success text-center">Ingrese sus datos y el tipo de usuario</p>
				<form method="post" action="/metodista/core/login">
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
						 </div>
						<input name="" class="form-control" placeholder="Carnet o Nombre de Usuario" type="text" required>
					</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
					<div class="input-group">
						<div class="input-group-prepend">
						    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
						 </div>
					    <input class="form-control" placeholder="Contraseña" type="password" required>
					</div> <!-- input-group.// -->
					</div> <!-- form-group// -->
					<div class="form-group">
					<label for="exampleFormControlSelect1">Tipo de Usuario</label>
						<select class="form-control" id="exampleFormControlSelect1" required>
					    	<option value="">-- Seleccione Uno --</option>
					    	<option value="estudiante">Estudiante</option>
					    	<option value="docente">Docente</option>
					    	<option value="administrador">Administrador</option>
					    </select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-raised btn-primary btn-block">Iniciar Sesión</button>
						<a href="/metodista/" class="btn btn-raised btn-secondary btn-block">Volver al Inicio</a>
					</div> <!-- form-group// -->
				</form>
			</article>
		</div> <!-- card.// -->
	</aside> <!-- col.// -->
	<aside class="col-sm-4"></aside>
	</div>