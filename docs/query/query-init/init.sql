CREATE DATABASE IF NOT EXISTS infiltrar_db_php;

USE infiltrar_db_php;

-- Tabla armas
CREATE TABLE IF NOT EXISTS `armas`
(
    `id`                 int          NOT NULL AUTO_INCREMENT,
    `tipo`               varchar(255) NOT NULL,
    `modelo`             varchar(255) NOT NULL,
    `condicion`          enum('nuevo', 'usado') NOT NULL,
    PRIMARY KEY (`id`)
);

