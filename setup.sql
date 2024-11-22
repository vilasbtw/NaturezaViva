CREATE DATABASE NaturezaViva;
USE NaturezaViva;

CREATE TABLE Usuarios(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	tipoUsuario INT NOT NULL
);

CREATE TABLE Espacos(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome VARCHAR(255) NOT NULL,
	tipo ENUM('salão', 'auditório') NOT NULL,
	endereco VARCHAR(255) NOT NULL,
	capacidade INT NOT NULL
)

CREATE TABLE Horarios (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    	espaco_id INT NOT NULL,
   	data DATE NOT NULL,
	horario TIME NOT NULL,
    	status ENUM('disponivel','pendente','reservado') DEFAULT 'disponivel',
	FOREIGN KEY (espaco_id) REFERENCES Espacos(id)    
);
