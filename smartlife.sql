-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.23 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for smartlife
CREATE DATABASE IF NOT EXISTS `smartlife` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `smartlife`;

-- Dumping structure for table smartlife.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `nom` varchar(50) NOT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  `etat` enum('0','1') DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nom`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`nom`, `numero`, `email`, `password`, `code`, `etat`, `img`) VALUES
	('Ghost-Tall', '48004894', 'smarlife@sm.mr', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'smartcode', '1', 'img/admin-settings-male.png');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;

-- Dumping structure for table smartlife.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `fixe` varchar(255) DEFAULT NULL,
  `apropos` text,
  `etat` enum('0','1') DEFAULT '0',
  `groupes_id` int DEFAULT NULL,
  `messages_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contacts_goupes_idx` (`groupes_id`),
  KEY `fk_contacts_messages1_idx` (`messages_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `nom`, `numero`, `email`, `fonction`, `ville`, `fixe`, `apropos`, `etat`, `groupes_id`, `messages_id`) VALUES
	(8, 'Nayra Delgado', '+36 25 00 25 00', 'mauriprod@gmail.mr', NULL, NULL, NULL, NULL, '0', NULL, NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table smartlife.dates
CREATE TABLE IF NOT EXISTS `dates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.dates: ~0 rows (approximately)
/*!40000 ALTER TABLE `dates` DISABLE KEYS */;
/*!40000 ALTER TABLE `dates` ENABLE KEYS */;

-- Dumping structure for table smartlife.dettes
CREATE TABLE IF NOT EXISTS `dettes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `montant` varchar(255) DEFAULT NULL,
  `patron` varchar(255) DEFAULT NULL,
  `etat` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.dettes: ~0 rows (approximately)
/*!40000 ALTER TABLE `dettes` DISABLE KEYS */;
/*!40000 ALTER TABLE `dettes` ENABLE KEYS */;

-- Dumping structure for table smartlife.documentcategories
CREATE TABLE IF NOT EXISTS `documentcategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.documentcategories: ~0 rows (approximately)
/*!40000 ALTER TABLE `documentcategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentcategories` ENABLE KEYS */;

-- Dumping structure for table smartlife.documents
CREATE TABLE IF NOT EXISTS `documents` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `lien` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `documentcategories_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_documents_documentCategories1_idx` (`documentcategories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.documents: ~0 rows (approximately)
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` (`id`, `nom`, `lien`, `date`, `documentcategories_id`) VALUES
	(9, 'Cv-5', 'docs/cv-5.pdf', '2021-03-03', 0);
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;

-- Dumping structure for table smartlife.evenements
CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL DEFAULT '0',
  `lieu` varchar(255) NOT NULL DEFAULT '0',
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  `note` text,
  `etat` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.evenements: ~0 rows (approximately)
/*!40000 ALTER TABLE `evenements` DISABLE KEYS */;
INSERT INTO `evenements` (`id`, `nom`, `lieu`, `debut`, `fin`, `note`, `etat`) VALUES
	(15, 'Entretient', 'Big Market', '2021-03-03', '2021-03-07', 'Urgent		', NULL);
/*!40000 ALTER TABLE `evenements` ENABLE KEYS */;

-- Dumping structure for table smartlife.frais
CREATE TABLE IF NOT EXISTS `frais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prix` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `fraiscategories_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_frais_fraisCategories1_idx` (`fraiscategories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.frais: ~0 rows (approximately)
/*!40000 ALTER TABLE `frais` DISABLE KEYS */;
/*!40000 ALTER TABLE `frais` ENABLE KEYS */;

-- Dumping structure for table smartlife.fraiscategories
CREATE TABLE IF NOT EXISTS `fraiscategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.fraiscategories: ~0 rows (approximately)
/*!40000 ALTER TABLE `fraiscategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `fraiscategories` ENABLE KEYS */;

-- Dumping structure for table smartlife.groupes
CREATE TABLE IF NOT EXISTS `groupes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.groupes: ~0 rows (approximately)
/*!40000 ALTER TABLE `groupes` DISABLE KEYS */;
/*!40000 ALTER TABLE `groupes` ENABLE KEYS */;

-- Dumping structure for table smartlife.membres
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `domaine` varchar(255) DEFAULT 'developpeur',
  `projet_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.membres: ~0 rows (approximately)
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;

-- Dumping structure for table smartlife.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `contenu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.messages: ~0 rows (approximately)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Dumping structure for table smartlife.notes
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) DEFAULT NULL,
  `contenu` longtext,
  `date` date DEFAULT NULL,
  `notescategories_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_notes_notesCategories1_idx` (`notescategories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.notes: ~0 rows (approximately)
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` (`id`, `titre`, `contenu`, `date`, `notescategories_id`) VALUES
	(9, 'Resume1', 'Lorem Ipsum dolor					', '2021-03-03', 0);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;

-- Dumping structure for table smartlife.notescategories
CREATE TABLE IF NOT EXISTS `notescategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.notescategories: ~0 rows (approximately)
/*!40000 ALTER TABLE `notescategories` DISABLE KEYS */;
/*!40000 ALTER TABLE `notescategories` ENABLE KEYS */;

-- Dumping structure for table smartlife.projets
CREATE TABLE IF NOT EXISTS `projets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `debut` date DEFAULT NULL,
  `description` text,
  `document` varchar(255) DEFAULT NULL,
  `taches_id` int DEFAULT NULL,
  `membres_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_projets_taches1_idx` (`taches_id`),
  KEY `fk_projets_membres1_idx` (`membres_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.projets: ~0 rows (approximately)
/*!40000 ALTER TABLE `projets` DISABLE KEYS */;
INSERT INTO `projets` (`id`, `nom`, `debut`, `description`, `document`, `taches_id`, `membres_id`) VALUES
	(7, 'Projet-Alpha', '2021-03-03', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `projets` ENABLE KEYS */;

-- Dumping structure for table smartlife.soustaches
CREATE TABLE IF NOT EXISTS `soustaches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `etat` enum('1','2','3') DEFAULT '1',
  `taches_id` int DEFAULT NULL,
  `projets_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.soustaches: ~0 rows (approximately)
/*!40000 ALTER TABLE `soustaches` DISABLE KEYS */;
/*!40000 ALTER TABLE `soustaches` ENABLE KEYS */;

-- Dumping structure for table smartlife.taches
CREATE TABLE IF NOT EXISTS `taches` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `description` text,
  `etat` enum('0','1') DEFAULT NULL,
  `projet_id` int DEFAULT NULL,
  `sousTaches_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_taches_sousTaches1_idx` (`sousTaches_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.taches: ~0 rows (approximately)
/*!40000 ALTER TABLE `taches` DISABLE KEYS */;
/*!40000 ALTER TABLE `taches` ENABLE KEYS */;

-- Dumping structure for table smartlife.todo
CREATE TABLE IF NOT EXISTS `todo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table smartlife.todo: ~0 rows (approximately)
/*!40000 ALTER TABLE `todo` DISABLE KEYS */;
/*!40000 ALTER TABLE `todo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
