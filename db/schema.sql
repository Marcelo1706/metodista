CREATE DATABASE metodista;
USE metodista;

CREATE TABLE administradores(
	id_administrador int(11) not null auto_increment,
	usuario varchar(100) not null unique,
    clave varchar(500) not null,
    primary key pk_admin(id_administrador)
)ENGINE=InnoDB DEFAULT CHARSET=UTF8;