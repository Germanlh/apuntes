<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Validacion por PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>Formulario GET</h2>
        <form name="validaGET_frm" action="valida.php" method="GET" enctype="application/x-www-form-urlencoded">
            <label for="">Nombre</label>
            <input type="text" name="nombre_txt" id="">
            <br>
            <label for="">Password</label>
            <input type="password" name="psw_txt" id="">
            <br>
            <input type="radio" name="sexo_rdo" id="" value="M">Masculino
            <input type="radio" name="sexo_rdo" id="" value="F">Femenino
            <br>
            <input type="button" name="envia_btn" value="Enviar">
        </form>
    </body>
</html>
