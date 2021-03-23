<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envío de Datos GET y POST</title>
</head>
<body>
    <h1>Enviando POST y GET a PHP</h1>
    <!-- **************************** -->
    <h2>envia GET</h2>
    <form name="enviaGET_frm" action="envia.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label for="">Nombre</label>
        <input type="text" name="nombre_txt">
        <br/>
        <label for="">Password</label>
        <input type="password" name="psw_txt">
        <br>
        <input type="submit" name="enviar_btn" value="enviaGET">
    </form>
    <br><br>
    <!-- **************************** -->
    <h2>envia POST</h2>
    <form name="enviaPOST_frm" action="envia.php" method="POST" enctype="application/x-www-form-urlencoded">
        <label for="">Nombre</label>
        <input type="text" name="nombre_txt">
        <br/>
        <label for="">Password</label>
        <input type="password" name="psw_txt">
        <br>
        <input type="submit" name="enviar_btn" value="enviaPOST">
    </form>

</body>
</html>