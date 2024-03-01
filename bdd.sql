-- Création de la BDD
CREATE DATABASE IF NOT EXISTS `gestion_du_site`;
USE `gestion_du_site`;

-- Création de table1
CREATE TABLE IF NOT EXISTS `table1` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(255) NOT NULL,
    `prenom` varchar(255) NOT NULL,
    `age` , INT NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

delete from `table1`;
insert into `table1` (`nom`, `prenom`, `age`, `id`) values ('claudant', `kylian`, 17, 1);
