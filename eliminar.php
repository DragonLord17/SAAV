<?php include_once 'header.html' ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/eliminar.css">
  <title>Eliminar Registros</title>
</head>
<body>
  <section>
    <aside class="eliminarCli">
      <h1>Eliminar Cliente</h1>
      <form class="cliente" action="model/eliminarCli.php" method="post">
        <label for="idCliente">ID Cliente</label>
        <input type="text" name="inputID" value="" placeholder="ID del Cliente"><br>
        <button class="btn" type="submit" name="button">Eliminar</button>
      </form>
    </aside>
    <aside class="eliminarEmp">
      <h1>Eliminar Empleado</h1>
      <form class="empleado" action="model/eliminarEmp.php" method="post">
        <label for="idEmpleado">ID Empleado</label>
        <input type="text" name="inputID" value="" placeholder="ID del Empleado"><br>
        <button class="btn"type="submit" name="button">Eliminar</button>
      </form>
    </aside> <br><br><br>
    <button class="btn "type="button" name="button" onclick="location.href='menu.php'">Regresar</button>
  </section>
</body>
</html>

<?php include_once 'footer.html' ?>
