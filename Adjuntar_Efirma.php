<HTML>
<HEAD>
<TITLE>SAT</TITLE>
</HEAD>
<BODY>

<!-- Formulario que envia los documentos .cer, .key y el archivo a firmar a Adjuntar_EFirma_back para su procesamiento -->
<form action="Adjuntar_Efirma_Back.php" method="POST" enctype="multipart/form-data">
  Selecciona tu .cer:
  <input type="file" name="certificado">
  <br><br><br>
  Selecciona tu .key:   
  <input type="file" name="llave">
  <br><br><br>
  Selecciona tu archivo:
  <input type="file" name="archivo">
  <br><br><br>
  Ingresa tu contraseña:
<input type="password" name="contraseña">
<br>
<br>
  <input type="submit" name="upload" value="Cargar" /> 
</form>

</BODY>
</HTML>
