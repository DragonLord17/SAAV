<?php
    include_once 'header.html';
    include_once 'model/conexion.php';
    Conexion::abrirConexion();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/tabla.css">
</head>
<body>
  <body>
    <section>
      <aside class="cliente">
        <div class="container-form"><br><br>
            <h1 class="R">Datos Cliente</h1><br>
        </div>
        <div class="tablaCli">
          <table>
            <tr>
              <th>ID_Cliente</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Direccion</th>
              <th>Celular</th>
              <th>E-Mail</th>
              <th>Toma de Agua</th>
              <th>Mes de Pago</th>
              <th>Fecha Limite</th>
            </tr>
            <?php
              $sql = "SELECT * FROM cliente";
              $conexion = Conexion::obtenerConexion();
              $ejecutar = mysqli_query($conexion,$sql);
              while ($row=mysqli_fetch_assoc($ejecutar)) {
            ?>
            <tr>
              <td><?php echo $row["ID_cliente"] ?></td>
              <td><?php echo $row["Nombre"] ?></td>
              <td><?php echo $row["Paterno"] ?></td>
              <td><?php echo $row["Materno"] ?></td>
              <td><?php echo $row["Direc"] ?></td>
              <td><?php echo $row["Celular"] ?></td>
              <td><?php echo $row["eMail"] ?></td>
              <td><?php echo $row["TomaAgua"] ?></td>
              <td><?php echo $row["MesPago"] ?></td>
              <td><?php echo $row["FechaLim"] ?></td>
            </tr>
            <?php
            };
            mysqli_free_result($ejecutar);
            ?>
          </table>
        </div>
      </aside>
      <aside class="empleado">
        <div class="container-form"><br><br>
            <h1 class="R">Datos Emplado</h1><br>
        </div>
        <div class="tablaEmp">
          <table>
            <tr>
              <th>ID_Empleado</th>
              <th>Nombre</th>
              <th>Apellido Paterno</th>
              <th>Apellido Materno</th>
              <th>Direccion</th>
              <th>Celular</th>
              <th>E-Mail</th>
              <th>Puesto</th>
              <th>Horario</th>
              <th>Sueldo</th>
            </tr>
            <?php
              $sql = "SELECT * FROM empleado";
              $conexion = Conexion::obtenerConexion();
              $ejecutar = mysqli_query($conexion,$sql);
              while ($row=mysqli_fetch_assoc($ejecutar)) {
            ?>
            <tr>
              <td><?php echo $row["ID_empleado"] ?></td>
              <td><?php echo $row["NombreEmp"] ?></td>
              <td><?php echo $row["PaternoEmp"] ?></td>
              <td><?php echo $row["MaternoEmp"] ?></td>
              <td><?php echo $row["DirecEmp"] ?></td>
              <td><?php echo $row["CelularEmp"] ?></td>
              <td><?php echo $row["eMailEmp"] ?></td>
              <td><?php echo $row["Puesto"] ?></td>
              <td><?php echo $row["Horario"] ?></td>
              <td><?php echo $row["Sueldo"] ?></td>
            </tr>
            <?php
            };
            mysqli_free_result($ejecutar);
            ?>
          </table>
        </div>
      </aside>
      <button class="boton" type="button" name="button" onclick="location.href='menu.php'">Regresar</button>
    </section>
</body>
</html>
<br><br><br><br><br>
<?php
    include_once 'footer.html';
?>
