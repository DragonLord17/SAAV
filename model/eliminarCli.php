<?php
  include_once 'conexion.php';
  Conexion::abrirConexion();

  $id_cliente = $_POST['inputID'];

  $enlace = Conexion::obtenerConexion();

  try{
    $sql1 = "SELECT * FROM cliente WHERE ID_cliente = '$id_cliente'";
    $ejecutar1 = mysqli_query($enlace, $sql1);
    $rows = mysqli_num_rows($ejecutar1);
    if($rows==1){
      $sql2 = "DELETE FROM cliente WHERE ID_cliente = '$id_cliente'";
      $ejecutar2 = mysqli_query($enlace, $sql2);
      if($ejecutar2){
          header('location: ../clienteEli.php');
      }
    }else{
      echo "<h1 style='text-align=center'>El cliente no existe !! </h1>";
    }
  } catch(Exception $e){
  echo "<p>Error al Eliminar los datos del Cliente</p>;
  }
 ?>
