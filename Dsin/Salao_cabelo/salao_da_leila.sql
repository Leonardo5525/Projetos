CREATE DATABASE salao_da_leila;

USE salao_da_leila;

CREATE TABLE `contato` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL,
	`subject` VARCHAR(100) NOT NULL,
	`description` VARCHAR(300) NOT NULL,
	PRIMARY KEY (`id`)
);