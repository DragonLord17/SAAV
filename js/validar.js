function validar()
{
    var ID_cli, Contra, Nombre, Paterno, Materno, Direc, Celular, Abono;
    ID_cli = document.getElementById("ID_cli").value;
    Contra = document.getElementById("Contra").value;
    Nombre = document.getElementById("Nombre").value;
    Paterno = document.getElementById("Paterno").value;
    Materno = document.getElementById("Materno").value;
    Direc = document.getElementById("Direc").value;
    Celular = document.getElementById("Celular").value;
    Abono = document.getElementById("Abono").value;

      Nombre varchar(30) NOT NULL,
      Paterno varchar(20) NOT NULL,
      Materno varchar(20) NOT NULL,
      Direc varchar(100) NOT NULL,
      Celular char(10) NOT NULL,

    if(ID_cli === "" || Contra === "" || Nombre === "" || Paterno === "" || Materno === "" || Direc === "" || Celular === "" || Abono === "")
        {
            alert("Debes llenar todos los campos");
            return false;
        }

    /*else*/ if(ID_cli.length>6)//Evita que sobrepase el número de caractéres.
        {
            alert("La ID es muy larga");
            return false;
        }
    if(Contra.length>6)
        {
            alert("La contraseña es muy larga");
            return false;
        }

    if(Nombre.length>30)
        {
            alert("El nombre es muy largo");
            return false;
        }
    if(Paterno.length>20 || Materno.length>20)
        {
            alert("Los apellidos son muy largos");
            return false;
        }
    if(Direc.length>100)
        {
            alert("La dirección es muy larga");
            return false;
        }
    if(Celular.length>10)
        {
            alert("El número de celular es muy largo");
            return false;
        }

    if(isNaN(Celular))//Verifica si los valores son o no son un número
        {
            alert("El teléfono ingresado no es un número");
            return false;
        }
}

function validaCliente(){
  var Nombre, Paterno, Materno, Direccion, Telefono, Email, Toma, Mes, Fecha;

  Nombre = document.getElementById('Nombre').value;
  Paterno = document.getElementById('Paterno').value;
  Materno = document.getElementById('Materno').value;
  Direccion = document.getElementById('Direccion').value;
  Telefono = document.getElementById('Telefono').value;
  Email = document.getElementById('Email').value;
  Toma = document.getElementById('Toma').value;
  Mes = document.getElementById('Mes').value;
  Fecha = document.getElementById('Fecha').value;

  if(Nombre === "" || Paterno === "" || Materno === "" || Direccion === "" || Telefono === "" || Email === "" || Toma === "" || Mes === "" || Fecha === ""){
    alert("Debes llenar todos los campos >:v");
  }
}

function verificarContra(){
  var contra1 = document.getElementById('contra1');
  var contra2 = document.getElementById('contra2');
  if (contra1 != contra2) {
    alert("Las contraseñas no coinciden :c");
  }
}
