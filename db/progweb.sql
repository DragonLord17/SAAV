DROP TABLE IF EXISTS cliente;
CREATE TABLE IF NOT EXISTS cliente (
  ID_cli char(6) NOT NULL,
  Nombre varchar(30) NOT NULL,
  Paterno varchar(20) NOT NULL,
  Materno varchar(20) NOT NULL,
  Contra varchar(6) NOT NULL,
  Direc varchar(100) NOT NULL,
  Celular char(10) NOT NULL,
  eMail varchar(50) NOT NULL,
  TomaAgua float NOT NULL,
  Importe float NOT NULL,
  MesPago date NOT NULL,
  FechaLim date NOT NULL,
  Abono float NOT NULL,
  Adeudo float NOT NULL,
  PRIMARY KEY (ID_cli)
);

DROP TABLE IF EXISTS empleado;
CREATE TABLE empleado (
  id_emp char(6) NOT NULL,
  nombreEmp varchar(30) NOT NULL,
  paternoEmp varchar(20) NOT NULL,
  maternoEmp varchar(20) NOT NULL,
  contraEmp varchar(200) NOT NULL,
  direcEmp varchar(100) NOT NULL,
  celularEmp varchar(20) NOT NULL,
  emailEmp varchar(50) NOT NULL,
  puesto varchar(30) NOT NULL,
  horario varchar(30) NOT NULL,
  sueldo float NOT NULL,
  PRIMARY KEY (id_emp)
);


CREATE TABLE IF NOT EXISTS empresa (
  ID_Empresa char(6) NOT NULL,
  DirecLocal varchar(100) NOT NULL,
  TelLocal char(10) NOT NULL,
  PRIMARY KEY (ID_Empresa)
);

DROP TABLE IF EXISTS comprobante;
CREATE TABLE IF NOT EXISTS comprobante (
  FOLIO varchar(6) NOT NULL,
    
  Nombre_cliente varchar(30) NOT NULL,
  Paterno_cliente varchar(20) NOT NULL,
  Materno_cliente varchar(20) NOT NULL,
  Nombre_empleado varchar(30) NOT NULL,
  Paterno_empleado varchar(20) NOT NULL,
  Materno_empleado varchar(20) NOT NULL,
  Fecha_pago date NOT NULL,
  Importe float NOT NULL,
  Adeudo float NOT NULL,
  Cambio float NOT NULL,
  Fecha_pago_siguiente date NOT NULL,
    
  PRIMARY KEY (FOLIO)
);
