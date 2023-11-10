CREATE DATABASE CONCESSIONARIA;

USE CONCESSIONARIA;

CREATE TABLE usuario
(
	id int not null auto_increment,
    email varchar(45) not null,
    senha varchar(45) not null,
    
    primary key (id)
);

CREATE TABLE VEICULO (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(255) NOT NULL,
    modelo TEXT NOT NULL,
    ano_fabricacao INT NOT NULL,
    quilometragem VARCHAR(255) NOT NULL,
    combustivel VARCHAR(255) NOT NULL,
    cor VARCHAR(255) NOT NULL,
    placa VARCHAR(20) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2) NOT NULL
);

CREATE TABLE funcionario
(
	id int not null auto_increment,
	nome varchar(45) not null,
    telefone int not null,
	email varchar(45) not null,
    primary key (id)
);

