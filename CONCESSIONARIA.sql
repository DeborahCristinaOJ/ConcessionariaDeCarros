CREATE DATABASE CONCESSIONARIA;

USE CONCESSIONARIA;

CREATE TABLE usuario
(
	id int not null auto_increment,
    email varchar(45) not null,
    senha varchar(45) not null,
    
    primary key (id)
);

CREATE TABLE carro
(
	id int not null auto_increment,
    ano_fabircacao varchar(45) not null,
    quilometragem int not null,
    combustivel varchar(45) not null,
    cor varchar(10) not null,
    placa varchar(7) not null,
    descricao varchar(1000),
    preco double not null,
	primary key (id)
);

CREATE TABLE funcionario
(
	id int not null auto_increment,
	nome varchar(45) not null,
    telefone int not null,
	email varchar(45) not null,
    primary key (id)
);

