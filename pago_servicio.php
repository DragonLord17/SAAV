
<?php include_once 'header.html' ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title> Pago del servicio </title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/validar.js"></script>
    </head>

    <body> <br><br><br>
        <h1 > Pago del servicio </h1>
        <form action="model/registrarPago.php" method="post" class="form-register" onsubmit="return validar();">
            <h2 class="form_titulo"> Información del cliente </h2>
            <div class="contenedor-inputs">
                <input type="text" id="ID_cli" name="ID_cli" placeholder="ID del Cliente" class="input-100" required>
                <input type="text" id="Nombre" name="Nombre" placeholder="Nombre(s) del cliente" class="input-100" required>
                <input type="text" id="Paterno" name="Paterno" placeholder="Apellido paterno del Cliente" class="input-48" required>
                <input type="text" id="Materno" name="Materno" placeholder="Apellido materno del Cliente" class="input-48" required>
                <input type="text" id="Direc" name="Direc" placeholder="Dirección del Cliente" class="input-100" required>
                <input type="text" id="Celular" name="Celular" placeholder="Celular del usuario" class="input-48" required>
                <input type="text" id="Abono" name="importe" placeholder="Dinero a Cliente" class="input-48" required>
                <input type="submit" value="Pagar" class="btn-enviar">

            </div>
            <!--<h6></h6>
            <h2 class="form_titulo"> Información del empleado </h2>-->
            <button class="btn" type="button" name="button" onclick="location.href='menu.php'">Regresar</button>
        </form>
    </body>_
</html>
<?php include_once 'footer.html' ?>
