
<?php
  include_once 'model/conexion.php';
  Conexion::abrirConexion();
?>

<section>
    <div id="bienvenido">
        <h1>Sistema de Agua de Abasolo del Valle</h1>
        <h3>Bienvenidos a las oficinas de agua potable</h3>
        <br>
        <img src="img/logo.png" alt=""> <br><br>
    </div>
</section>

<section>
   <div class="formulario _login">
       <form id="frm" method="post" action="model/validaLogin.php" style="max-width:500px;margin:auto">
        <h1>Iniciar Sesi&oacute;n</h1>
        <div class="input-container">
        <i class="fa fa-user icon"></i>
		<input class="input-field" type="text" placeholder="ID del Empleado" name="id_emp" id="id_emp">
		</div>
		<div class="input-container">
            <i class="fa fa-key icon"></i>
            <input class="input-field" type="password" placeholder="Contraseña" name="contra" id="contra">
        </div>
		 <input class="btn" type="submit" value="Iniciar Sesi&oacute;n" onclick="validaCamposLogin()">
	</form>

   </div>
</section>
