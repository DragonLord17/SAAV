<?php
    include_once 'header.html';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body class="cuerpo">
<div class="container-form">
        <div class="titulo" style="padding-top:10px;">
           <h1 class="R">Modificar Cliente</h1><br>
           <p class="R" style="color: red">Nota: Es OBLIGATORIO introducir el el ID del Cliente</p>
        </div>
<form class= "i" method="post" action="model/modificarCli.php">
                    <label>Id_cliente</label>
                    <input type="text" name="id_cli" required>
                   <label>Nombre</label>
                    <input type="text" name="nombre" required>
                    <label>Apellido paterno</label>
                    <input type="text" name="appa" required>
                    <label>Apellido materno</label>
                    <input type="text" name="apma" required>
                    <label>Direccion</label>
                    <input type="text" name="dir" required>
                    <label>Telefono</label>
                    <input type="text" name="tel" required>
                   <label>E - mail</label>
                   <input type="text" name="email" required>
                    <label>Toma de agua</label>
                    <input type="text" name="toma" required>
                    <label>Mes a pagar</label>
                    <input type="text" name="mes" required>
                     <label>Fecha limite</label>
                    <input type="text" name="fecha" required>
                     <label>Adeudo</label>
                    <input type="text" name="adeudo" required>

                    <button class="g" type="submit" name="button">Guardar</button>
                </form>
                 <br>
    <br>

    <div class="pie">
      <button class="Btn"type="button" name="button" onclick="location.href='menu.php'">Regresar</button>
    </div>
    </div>
</body>
</html>
<?php
    include_once 'footer.html';
?>
