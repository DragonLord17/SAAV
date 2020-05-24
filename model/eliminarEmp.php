<?php
  include_once 'conexion.php';
  Conexion::abrirConexion();

  $id_empleado = $_POST['inputID'];

  $enlace = Conexion::obtenerConexion();
  
  try{
    $sql1 = "SELECT * FROM empleado WHERE ID_empleado = '$id_empleado'";
    $ejecutar1 = mysqli_query($enlace, $sql1);
    $rows = mysqli_num_rows($ejecutar1);
    if($rows == 1){
      $sql2 = "DELETE FROM empleado WHERE ID_empleado = '$id_empleado'";
      $ejecutar2 = mysqli_query($enlace, $sql2);
      if($ejecutar2){
          header('location: ../empleadoEli.php');
      }
    }else{
      echo "<h1>El cliente no existe !! </h1>";
    }
  } catch(Exception $e){
  echo "<p>Error al Eliminar los datos del Cliente</p>";
  }
 ?>
