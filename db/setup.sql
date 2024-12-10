CREATE DATABASE Natureza_Viva;
USE Natureza_Viva;

CREATE TABLE Usuarios (
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL,
	senha varchar(255) NOT NULL
);

CREATE TABLE Administradores (
	id int PRIMARY KEY AUTO_INCREMENT, 
	nome varchar(255) NOT NULL, 
	senha varchar(255) NOT NULL 
);

CREATE TABLE Espacos (
	id int PRIMARY KEY AUTO_INCREMENT,
	nome varchar(255) NOT NULL,
	endereco varchar(255),

	id_administrador int,
	FOREIGN KEY (id_administrador) REFERENCES Administradores(id)
);

CREATE TABLE Horarios (
	id int PRIMARY KEY AUTO_INCREMENT,
	inicio date, fim date,
	ocorrencia varchar(255),
	status varchar(255) default 'sem reserva',

	id_espaco int,
	id_usuario int,

	FOREIGN KEY (id_espaco) REFERENCES Espacos(id),
	FOREIGN KEY (id_usuario) REFERENCES Usuarios(id)
);