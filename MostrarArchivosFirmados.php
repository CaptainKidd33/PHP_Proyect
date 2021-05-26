
<?php

//Esta pagina muestra los documentos existentes en el directorio DocumentosFirmados y da una opcion de descarga

$files = scandir("DocumentosFirmados");
 for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <?php echo $files[$a]; ?>
        <a href="DocumentosFirmados/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
    </p>
    <?php
}
?>


<HTML>
<HEAD>
<TITLE>SAT</TITLE>
</HEAD>
<BODY>

<form action="Main con Firma.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="uploadBtn" value="Regresar"/>
</form>

</BODY>
</HTML>


