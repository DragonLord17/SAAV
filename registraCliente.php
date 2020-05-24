<?php
    include_once 'header.html';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro</title>
    <link rel="stylesheet" href="css/estilos2.css">

<script src="js/validar.js"></script>
</head>
<body class="cuerpo">
<div class="container-form">
        <div class="titulo" style="padding-top:10px;">
           <h1 class="R">Registro de cliente</h1>
        </div>
<form class= "i" method="post" action="model/registrarCliente.php"  >
                   <label>Nombre</label>
                    <input type="text" name="nombre" id="Nombre" required>
                    <label>Apellido paterno</label>
                    <input type="text" name="appa" id="Paterno" required>
                    <label>Apellido materno</label>
                    <input type="text" name="apma" id="Materno" required>
                    <label>Direccion</label>
                    <input type="text" name="dir" id="Direccion" required>
                    <label>Telefono</label>
                    <input type="text" name="tel" id="Telefono" required>
                   <label>E - mail</label>
                   <input type="text" name="email" id="Email" required>
                    <label>Toma de agua</label>
                    <input type="text" name="toma" id="Toma" required>
                    <label>Mes a pagar</label>
                    <input type="text" name="mes" id="Mes" required>
                     <label>Fecha limite</label>
                    <input type="text" name="fecha" id="Fecha" required>

                    <button class="g" type="submit" name="button" onclick="return validaCliente();">Guardar</button>
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
