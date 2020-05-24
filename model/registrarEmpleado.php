<?php

  include_once 'conexion.php';
  Conexion::abrirConexion();

  $Nombre = $_POST["nombre"];
  $PaternoEmp = $_POST["appa"];
  $MaternoEmp = $_POST["apma"];
  $ContraEmp = $_POST["contra"];
  $DireEmp = $_POST["dir"];
  $CelularEmp = $_POST["tel"];
  $eMailEmp = $_POST["email"];
  $Puesto = $_POST["puesto"];
  $Horario = $_POST["horario"];
  $Sueldo = $_POST["sueldo"];

  try{
  $sql = "INSERT INTO empleado VALUES ('',
                                        '$Nombre',
                                        '$PaternoEmp',
                                        '$MaternoEmp',
                                        '$ContraEmp',
                                        '$DireEmp',
                                        '$CelularEmp',
                                        '$eMailEmp',
                                        '$Puesto',
                                        '$Horario',
                                        '$Sueldo'
                                      )";
  $enlace = Conexion::obtenerConexion();
  $ejecutar = mysqli_query($enlace, $sql);
  if($ejecutar){
   header('location: ../empleadoreg.php');
  }
} catch(Exception $e){
  echo "<p>Error al Insertar los datos del Empleado</p>";
}

?>
