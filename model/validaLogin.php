<?php
  include_once 'conexion.php';
  Conexion::abrirConexion();

  if(!empty($_POST["id_emp"]) && !empty($_POST["contra"]) || empty($_POST["id_emp"]) && empty($_POST["contra"])){
    $usuario = $_POST["id_emp"];
    $contra = $_POST["contra"];

    try{
      $sql = "SELECT * FROM empleado WHERE ID_empleado='$usuario' AND ContraEmp='$contra'";
      $enlace = Conexion::obtenerConexion();
      $ejecutar = mysqli_query($enlace, $sql);
      $rows = mysqli_num_rows($ejecutar);

      if($rows==1){
        header('Location: ../menu.php');
      } else {
        header('Location: ../notuser.php');
      }

    } catch(Exception $e){
      echo "Error !!".$e->getMessage();
    }

  }

?>
