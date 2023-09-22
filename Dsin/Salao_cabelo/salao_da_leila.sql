CREATE DATABASE salao_da_leila;

USE salao_da_leila;

CREATE TABLE `contato` (
	-- NOT NULL = não pode ser nulo essa chave
	-- AUTO...= irá incrementar automaticamente no banco de dados em ordem, de cima para baixo(1,2,3)
	`id` INT NOT NULL AUTO_INCREMENT,
	-- o VARCHAR = se adapta conforme o tamanho da string adicionada a chave;
	-- Isso torna um pouco mais consumidor devido o tamanho reservado a memória (100);
	`name` VARCHAR(100) NOT NULL,
	`subject` VARCHAR(50) NOT NULL,
	`description` VARCHAR(200) NOT NULL,
	-- essa chave primária é uam chave que será distinta para cada item(linha/row) armazenado nesse tabela
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
