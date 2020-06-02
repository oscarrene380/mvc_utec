DROP DATABASE IF EXISTS mvc_utec;
CREATE DATABASE mvc_utec;
USE mvc_utec;

CREATE TABLE usuarios(
	usuario varchar(50) not null primary key,
	clave varchar(50) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into usuarios(usuario, clave) values ('admin', '123');
