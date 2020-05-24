<?php

  include_once 'conexion.php';
  Conexion::abrirConexion();

  $Nombre = $_POST["nombre"];
  $Paterno = $_POST["appa"];
  $Materno = $_POST["apma"];
  $Direc = $_POST["dir"];
  $Celular= $_POST["tel"];
  $eMail = $_POST["email"];
  $toma= $_POST["toma"];
  $mes = $_POST["mes"];
  $fecha = $_POST["fehca"];

  try{
  $sql = "INSERT INTO cliente VALUES ('',
                                        '$Nombre',
                                        '$Paterno',
                                        '$Materno',
                                        '$Direc',
                                        '$Celular',
                                        '$eMail',
                                        '$toma',
                                        '$mes',
                                        '$fecha'
                                      )";
  $enlace = Conexion::obtenerConexion();
  $ejecutar = mysqli_query($enlace, $sql);
  if($ejecutar){
   header('location: ../clientereg.php');
  }
} catch(Exception $e){
  echo "<p>Error al Insertar los datos del Empleado</p>";
}

?>
