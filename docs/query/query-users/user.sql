CREATE DATABASE IF NOT EXISTS infiltrar_db_php;

USE infiltrar_db_php;

-- Tabla usuarios
CREATE TABLE IF NOT EXISTS `usuarios`
(
    `id`                 int          NOT NULL AUTO_INCREMENT,
    `username`           varchar(255) NOT NULL UNIQUE,
    `email`              varchar(255) NOT NULL UNIQUE,
    `password`           varchar(255) NOT NULL,
    `estado`             boolean      DEFAULT TRUE NOT NULL,
    PRIMARY KEY (`id`)
    );
