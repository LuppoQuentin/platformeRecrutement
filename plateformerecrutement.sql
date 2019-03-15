-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 15 mars 2019 à 14:25
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `plateformerecrutement`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

DROP TABLE IF EXISTS `annonce`;
CREATE TABLE IF NOT EXISTS `annonce` (
  `ID_ANNONCE` int(11) NOT NULL AUTO_INCREMENT,
  `TYPE_ETUDE` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_ANNONCE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

DROP TABLE IF EXISTS `competence`;
CREATE TABLE IF NOT EXISTS `competence` (
  `ID_COMPETENCE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  PRIMARY KEY (`ID_COMPETENCE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `ID_COMPTE` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL` varchar(25) NOT NULL,
  `LOGIN` varchar(15) NOT NULL,
  `MOT_DE_PASSE` varchar(15) NOT NULL,
  `DATE_CREATION` date NOT NULL,
  PRIMARY KEY (`ID_COMPTE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

DROP TABLE IF EXISTS `ecole`;
CREATE TABLE IF NOT EXISTS `ecole` (
  `ID_ECOLE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `VILLE` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_ECOLE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `ID_ENTREPRISE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  `VILLE` varchar(30) NOT NULL,
  `NOMBRE_EMPLOYE` int(8) NOT NULL,
  PRIMARY KEY (`ID_ENTREPRISE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID_ETUDIANT` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_ETUDIANT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `profils`
--

DROP TABLE IF EXISTS `profils`;
CREATE TABLE IF NOT EXISTS `profils` (
  `ID_PROFILS` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `VILLE` varchar(25) NOT NULL,
  `NUMERO_TELEPHONE` varchar(10) NOT NULL,
  PRIMARY KEY (`ID_PROFILS`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recrutement`
--

DROP TABLE IF EXISTS `recrutement`;
CREATE TABLE IF NOT EXISTS `recrutement` (
  `ID_RECRUTEMENT` int(11) NOT NULL AUTO_INCREMENT,
  `TITRE` varchar(50) NOT NULL,
  `ENTREPRISE` varchar(30) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `ETAT` varchar(30) NOT NULL,
  `VILLE` varchar(30) NOT NULL,
  `DATE_DEBUT` date NOT NULL,
  `DATE_FIN` date NOT NULL,
  `DATE_CREATION` date NOT NULL,
  `COMPETENCES_REQUISES` text NOT NULL,
  `COMPETENCES_OPTIONELLES` text NOT NULL,
  PRIMARY KEY (`ID_RECRUTEMENT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recruteur`
--

DROP TABLE IF EXISTS `recruteur`;
CREATE TABLE IF NOT EXISTS `recruteur` (
  `ID_RECRUTEUR` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID_RECRUTEUR`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_etude`
--

DROP TABLE IF EXISTS `type_etude`;
CREATE TABLE IF NOT EXISTS `type_etude` (
  `ID_TYPE_ETUDE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_TYPE_ETUDE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
