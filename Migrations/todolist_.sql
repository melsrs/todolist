-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 21 mars 2024 à 12:16
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist_`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ID_Category` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  PRIMARY KEY (`ID_Category`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`ID_Category`, `Name`) VALUES
(1, 'Personnel');

-- --------------------------------------------------------

--
-- Structure de la table `possede`
--

DROP TABLE IF EXISTS `possede`;
CREATE TABLE IF NOT EXISTS `possede` (
  `ID_Task` int NOT NULL,
  `ID_Category` int NOT NULL,
  PRIMARY KEY (`ID_Task`,`ID_Category`),
  KEY `Possede_Category0_FK` (`ID_Category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `priority`
--

DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `ID_Priority` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  PRIMARY KEY (`ID_Priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

DROP TABLE IF EXISTS `task`;
CREATE TABLE IF NOT EXISTS `task` (
  `ID_Task` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `ID_User` int NOT NULL,
  `ID_Priority` int NOT NULL,
  PRIMARY KEY (`ID_Task`),
  KEY `Task_User_FK` (`ID_User`),
  KEY `Task_Priority0_FK` (`ID_Priority`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int NOT NULL AUTO_INCREMENT,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(80) NOT NULL,
  PRIMARY KEY (`ID_User`),
  UNIQUE KEY `User_AK` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `possede`
--
ALTER TABLE `possede`
  ADD CONSTRAINT `Possede_Category0_FK` FOREIGN KEY (`ID_Category`) REFERENCES `category` (`ID_Category`),
  ADD CONSTRAINT `Possede_Task_FK` FOREIGN KEY (`ID_Task`) REFERENCES `task` (`ID_Task`);

--
-- Contraintes pour la table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `Task_Priority0_FK` FOREIGN KEY (`ID_Priority`) REFERENCES `priority` (`ID_Priority`),
  ADD CONSTRAINT `Task_User_FK` FOREIGN KEY (`ID_User`) REFERENCES `user` (`ID_User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
