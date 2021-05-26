<HTML>
<HEAD>
<TITLE>SAT</TITLE>
</HEAD>
<BODY>


<!-- Formulario que envia a la pagina Registrarse_Back donde manda y valida los datos necesario para crear un usuario-->

<form method="POST" action="Registrarse_Back.php">

<div class="wrapper fadeInDown">
 <div id="formContent">

					<div class="form-group">
						<label>Nombre(s):</label>
						<input type="text" name="Nombre" class="form-control" placeholder="Escriba su Nombre"><br />
					</div>

					<div class="form-group">
						<label>Apellido Paterno:</label>
						<input type="text" name="AP" class="form-control" placeholder="Escriba su Apellido Paterno"><br />
					</div>

					<div class="form-group">
						<label>Apellido Materno:</label>
						<input type="text" name="AM" class="form-control" placeholder="Escriba su Apellido Materno"><br />
					</div>

					<div class="form-group">
						<label>Email:</label>
						<input type="text" name="Correo" class="form-control" placeholder="Escriba su Correo Electronico"><br />
					</div>

					<div class="form-group">
						<label>Contraseña:</label>
						<input type="password" name="Contraseña" class="form-control" placeholder="Escriba su Contraseña"><br />
					</div>

					<div class="form-group">
					<input type="submit" name="insert" class="btn btn-warning" value="Registrate"><br />
					</div>

				<div id="formFooter"></div>

			</div>
	</div>
</form>


</BODY>
</HTML>

