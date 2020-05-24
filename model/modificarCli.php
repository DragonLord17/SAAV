<?php
include_once 'conexion.php';
Conexion::abrirConexion();

$ID_cliente = $_POST["id_cli"];
$Nombre = $_POST["nombre"];
$Paterno = $_POST["appa"];
$Materno = $_POST["apma"];
$Dire = $_POST["dir"];
$Celular = $_POST["tel"];
$eMail = $_POST["email"];
$toma = $_POST["toma"];
$mes = $_POST["mes"];
$fecha = $_POST["fecha"];
$adeudo = $_POST["adeudo"];

$sql1 = "SELECT * FROM cliente WHERE ID_cliente = '$id_cliente'";
$ejecutar1 = mysqli_query($enlace, $sql1);
$rows = mysqli_num_rows($ejecutar1);
if($rows == 1){
try{
$sql = "UPDATE cliente SET Nombre = '$Nombre',
                            Paterno = '$Paterno',
                            Materno = '$Materno',
                            Direc = '$Dire',
                            Celular = '$Celular',
                            eMail = '$eMail',
                            TomaAgua = '$toma',
                            MesPago = '$mes',
                            FechaLim = '$fecha',
                            Adeudo = '$adeudo'
                            WHERE ID_cliente = '$ID_cliente'";
$enlace = Conexion::obtenerConexion();
$ejecutar = mysqli_query($enlace, $sql);
if($ejecutar){
 header('location: ../clientemod.php');
}
} catch(Exception $e){
echo "<p>Error al Insertar los datos del Empleado</p>";
}
} else {
  echo "<h1> EL CLIENTE NO EXISTE <h1>";
}

?>
