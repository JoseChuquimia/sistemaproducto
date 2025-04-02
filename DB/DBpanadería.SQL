-- eliminar la base de datos
DROP DATABASE if EXISTS DBpanaderia;
-- crear la base de datos
create database DBpanaderia;
-- activar la base de datos a usar
use DBpanaderia;

-- eliminar tabla si existe
DROP TABLE if EXISTS permiso;
-- crear la tabla de permiso
create table permiso(
id int not null primary key auto_increment,
nombre varchar(50) not NULL
)engine=innoDB;

-- eliminar la tabla usuario si existe
drop table if exists usuario;
-- crear tabla usuario
create table usuario(
id int not null primary KEY auto_increment,
nombre varchar(100) not null,
email varchar (100) not null,
password varchar (250) not null,
telefono varchar(15),
idpermiso int not null,
foreign key (idpermiso) references permiso(id)
)engine=innoDB;

-- adicionar datos a la tabla permiso
INSERT INTO permiso(nombre)
values('admin');
INSERT INTO permiso(nombre)
values('vendedor');
INSERT INTO permiso(nombre)
values('cliente');
INSERT INTO permiso(nombre)
values('propietario');
INSERT INTO permiso(nombre)
values('invitado');

-- realizar la consulta de la tabla permiso
SELECT * FROM PERMISO;
-- adicionar datos a la tabla usuario
INSERT INTO USUARIO(NOMBRE,EMAIL,PASSWORD,TELEFONO,IDPERMISO)
VALUES('marcos','marcos@gmail.com','123456','7215555',2);
SELECT * FROM usuario;






