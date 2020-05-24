<?php
    include_once 'header.html';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>
  <body>
    <div class="container-form"><br><br>
            <h1 class="R">Menu</h1>
               <br>
            </div>
                <form class="menu">
                    <button class="Bt" type="button" name="menu"><a href="pago_servicio.php">Realizar pago</button>
                     <br><br>
                    <button class="Bt" type="button" name="menu"><a href="registraCliente.php">Registrar Cliente</button>
                        <br><br>
                    <button class="Bt" type="button" name="menu"><a href="registraEmpleado.php">Registrar Empleado</button>
                        <br><br>
                    <button class="Bt" type="button" name="menu"><a href="modificarCliente.php">Modificar cliente</button>
                        <br><br>
                    <button class="Bt" type="button" name="menu"><a href="modificarEmp.php">Modificar Empleado</button>
                            <br><br>
                    <button class="Bt" type="button" name="menu"><a href="eliminar.php">Eliminar Empleado y/o Cliente</button>
                            <br><br>
                    <button class="Bt" type="button" name="menu"><a href="mostrar.php">Mostrar Datos</button>
                                    <br><br>

                    <button class="Bt" type="button" name="menu"><a href="index.php">Salir</button>
                </form>
</body>
</html>
<br><br><br><br><br>
<?php
    include_once 'footer.html';
?>
