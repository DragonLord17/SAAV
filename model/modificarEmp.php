<?php
include_once 'conexion.php';
Conexion::abrirConexion();

$ID_empleado = $_POST["id_emp"];
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

$sql1 = "SELECT * FROM empleado WHERE ID_empleado = '$ID_empleado'";
$ejecutar1 = mysqli_query($enlace, $sql1);
$rows = mysqli_num_rows($ejecutar1);
if($rows == 1){
try{
$sql = "UPDATE empleado SET NombreEmp = '$Nombre',
                            PaternoEmp = '$PaternoEmp',
                            MaternoEmp = '$MaternoEmp',
                            ContraEmp = '$ContraEmp',
                            DirecEmp = '$DireEmp',
                            CelularEmp = '$CelularEmp',
                            eMailEmp = '$eMailEmp',
                            Puesto = '$Puesto',
                            Horario = '$Horario',
                            Sueldo = '$Sueldo'
                            WHERE ID_empleado = '$ID_empleado'";
$enlace = Conexion::obtenerConexion();
$ejecutar = mysqli_query($enlace, $sql);
if($ejecutar){
 header('location: ../empleadomod.php');
}
} catch(Exception $e){
echo "<p>Error al Insertar los datos del Empleado</p>";
}
} else{
  echo "<h1> EL EMPLEADO NO EXISTE";
}

?>
