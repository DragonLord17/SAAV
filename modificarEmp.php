<?php
    include_once 'header.html';
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/registraEmp.css">
    <title></title>
</head>

<body>
    <div class="container">
        <div class="titulo" style="padding-top:10px;">
            <h1 id="titulo1">Modificar Empleado</h1>
            <p>Nota: Es OBLIGATORIO introducir el el ID del empleado</p>
            <br>
        </div>

        <div id="formulario">
            <form method="post" action="model/modificarEmp.php">
                <div class="input-conteiner">
                <label class="lbl">ID_emp</label>
                <input class="input-field" type="text" name="id_emp" required>
                </div>
                <div class="input-conteiner">
                <label class="lbl">Nombre</label>
                <input class="input-field" type="text" name="nombre" required
                </div>
                <div class="input-conteiner">
                <label class="lbl">Apellido materno</label>
                <input class="input-field" type="text" name="apma" required>
                </div>
                <div  class="input-conteiner">
                <label class="lbl">Apellido paterno</label>
                <input class="input-field" type="text" name="appa" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Password</label>
                <input class="input-field" type="password" name="contra" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Repite Password</label>
                <input class="input-field" type="password" name="contra2" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Direccion</label>
                <input class="input-field" type="text" name="dir" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Telefono</label>
                <input class="input-field" type="text" name="tel" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">E - mail</label>
                <input class="input-field" type="text" name="email" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Puesto</label>
                <input class="input-field" type="text" name="puesto" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Horario</label>
                <input class="input-field" type="text" name="horario" required>
                 </div>
                <div class="input-conteiner">
                <label class="lbl">Sueldo</label>
                <input  class="input-field" type="text" name="sueldo" required>
                 </div>
                <button class="btnEmp" type="submit" name="button">Actualizar</button>
            </form> <br><br>
            <button class="btn" type="button" name="button" onclick="location.href='menu.php'">Regresar</button>
        </div>
    </div> <br><br><br>
</body>

</html>

<?php
    include_once 'footer.html';
?>
