CREATE DATABASE salao_da_leila;

USE salao_da_leila;

CREATE TABLE `contato` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(100) NOT NULL,
	`subject` VARCHAR(50) NOT NULL,
	`description` VARCHAR(200) NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE `usuarios` (
	`CPF` CHAR(14) NOT NULL,
	`senha` CHAR(32) NOT NULL,
	`RG` VARCHAR(12) NOT NULL,
	`telefone` VARCHAR(15) NOT NULL,
	`data_nascimento` DATE NOT NULL,
	`nome` VARCHAR(50) NOT NULL,
	`email` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`CPF`) USING BTREE
)
;
