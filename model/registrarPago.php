<?php
  include_once 'conexion.php';
  Conexion::abrirConexion();

$ID_cli = $_POST['ID_cli'];
$Nombre = $_POST['Nombre'];
$Paterno = $_POST['Paterno'];
$Materno = $_POST['Materno'];
$fechaPago = date('Y-m-d');
$importe = $_POST['importe'];
$pagoSig = date("Y")."-".(date("m")+1)."-".date("d");

$enlace = Conexion::obtenerConexion();
$cliente = "SELECT * FROM cliente WHERE ID_cliente = '$ID_cli'";
$ejecutar = mysqli_query($enlace, $cliente);
$rows = mysqli_num_rows($ejecutar);

if($rows<1){
  echo "<h1>No EXISTE EL CLIENTE</h1>";
} else{
try{
$sql = "INSERT INTO comprobante VALUES ('',
                                      '$Nombre',
                                      '$Paterno',
                                      '$Materno',
                                      '$fechaPago',
                                      '$importe',
                                      '$pagoSig'
                                    )";

$ejecutar = mysqli_query($enlace, $sql);
if($ejecutar){
 header('location: ../pagoRealizado.php');
}
} catch(Exception $e){
echo "<p>Error al Ralizar el pago del Cliente</p>";
}
}

?>
