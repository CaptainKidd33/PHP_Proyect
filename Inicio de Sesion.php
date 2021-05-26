<HTML>
<HEAD>
<TITLE>SAT</TITLE>
</HEAD>
<BODY>

<!-- Formulario que envia el correo y la contraseña a la pagina Inicio_Back para verificar la existencia del usuario -->
<form method="POST" action="Inicio_Back.php">
           <div class="wrapper fadeInDown">
            <div id="formContent">

              <form >
                <div class="form-group">
                  <label>Correo:</label>
                  <input type="text" name="correo" class="form-control" placeholder="Introduzca su correo"><br />
                </div>

                <div class="form-group">
                  <label label-cols-sm="3">Contraseña:</label>
                  <input type="password" name="contraseña" class="form-control" placeholder="Introduzca su contraseña"><br />
                </div>

                <input type="submit" name="uploadBtn" value="Inicia Sesion"/>
              </form>


<!-- Boton para que te lleve a la pagina Registrarse para generar un nuevo usuario -->
<div id="formFooter">
  <label></label>
  <a href="Registrarse.php"><input type="button" value="Registrarse"></a>
</div>

</BODY>
</HTML>