-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la table jerescir. matiere
CREATE TABLE IF NOT EXISTS `matiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_matiere` varchar(255) NOT NULL,
  `coeff_matiere` float NOT NULL,
  `seuil` float NOT NULL,
  `id_module` int(11) DEFAULT NULL,
  `nom_promo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_matiere_id_module` (`id_module`),
  KEY `FK_matiere_nom_promo` (`nom_promo`),
  CONSTRAINT `FK_matiere_id_module` FOREIGN KEY (`id_module`) REFERENCES `module` (`id`),
  CONSTRAINT `FK_matiere_nom_promo` FOREIGN KEY (`nom_promo`) REFERENCES `promo` (`nom_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table jerescir. module
CREATE TABLE IF NOT EXISTS `module` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_module` varchar(255) NOT NULL,
  `ects` tinyint(4) NOT NULL,
  `seuil_ects` tinyint(4) NOT NULL,
  `nom_promo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_module_nom_promo` (`nom_promo`),
  CONSTRAINT `FK_module_nom_promo` FOREIGN KEY (`nom_promo`) REFERENCES `promo` (`nom_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table jerescir. note
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` float NOT NULL,
  `coeff_note` float NOT NULL DEFAULT '1',
  `id_utilisateur` int(11) DEFAULT NULL,
  `id_matiere` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_note_id_utilisateur` (`id_utilisateur`),
  KEY `FK_note_id_matiere` (`id_matiere`),
  CONSTRAINT `FK_note_id_matiere` FOREIGN KEY (`id_matiere`) REFERENCES `matiere` (`id`),
  CONSTRAINT `FK_note_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table jerescir. promo
CREATE TABLE IF NOT EXISTS `promo` (
  `nom_promo` varchar(128) NOT NULL,
  PRIMARY KEY (`nom_promo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Les données exportées n'étaient pas sélectionnées.
-- Export de la structure de la table jerescir. utilisateur
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(255) NOT NULL,
  `nom` varchar(128) DEFAULT NULL,
  `prenom` varchar(128) DEFAULT NULL,
  `mail` varchar(255) NOT NULL,
  `password` varchar(2048) DEFAULT NULL,
  `nom_promo` varchar(128) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_utilisateur_nom_promo` (`nom_promo`),
  CONSTRAINT `FK_utilisateur_nom_promo` FOREIGN KEY (`nom_promo`) REFERENCES `promo` (`nom_promo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Les données exportées n'étaient pas sélectionnées.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
