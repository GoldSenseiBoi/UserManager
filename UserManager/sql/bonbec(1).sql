-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 déc. 2024 à 10:54
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bonbec`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`) VALUES
(2, 'Bonbon Miel', 1.30),
(3, 'Bonbon Fraise', 1.20),
(4, 'Bonbon Citron', 1.10),
(5, 'Bonbon Orange', 1.30),
(6, 'Bonbon Menthe', 1.40),
(7, 'Bonbon Cola', 1.25),
(8, 'Bonbon Cerise', 1.50),
(9, 'Bonbon Réglisse', 1.60),
(10, 'Bonbon Pomme', 1.35),
(11, 'Bonbon Caramel', 1.45),
(12, 'Bonbon Ananas', 1.55),
(13, 'Bonbon Cassis', 1.20),
(14, 'Bonbon Framboise', 1.30),
(15, 'Bonbon Chocolat', 1.50),
(16, 'Bonbon Noisette', 1.40),
(17, 'Bonbon Nougat', 1.60);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code_postale` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `adresse`, `code_postale`, `city`, `password`, `admin`) VALUES
(4, 'DIALLO', 'ibrahima', 'ib@gmail.com', '20 rue frida kahlo Aljt Docks appartement 512 Aljt Docks appartement 512', '93400', 'SAINT-OUEN-SUR-SEINE', '1d5f3ae5bdb43dd9d62be9129123e863fd400b6f', 1),
(3, 'DIALLO', 'ibrahima', 'acepowerman2305@gmail.com', '20 rue frida kahlo', '93400', 'Saint Ouen', '656178bcd875725daa7308e458436739fee21b7a', 0),
(5, 'DUPONT', 'Jean', 'jean.dupont@example.com', '1 rue des Lilas', '75001', 'Paris', 'cbfdac6008f9cab4083784cbd1874f76618d2a97', 0),
(6, 'MARTIN', 'Claire', 'claire.martin@example.com', '2 avenue de la République', '75002', 'Paris', '0c6f6845bb8c62b778e9147c272ac4b5bdb9ae71', 0),
(7, 'LECLERC', 'Paul', 'paul.leclerc@example.com', '3 boulevard Haussmann', '75003', 'Paris', '7f6d5eea1bcef5ca6209d33b28e3aaeb3db26f24', 0),
(8, 'DURAND', 'Sophie', 'sophie.durand@example.com', '4 rue du Bac', '75004', 'Paris', '523cf99e800d57d0ff0ac7b97e04ebc2b9b4b263', 0),
(9, 'MOREL', 'Luc', 'luc.morel@example.com', '5 place de la Concorde', '75005', 'Paris', '4d3ec0891c07d7a7e5559c89c0e1a83f27658539', 0),
(10, 'ROUSSEAU', 'Emma', 'emma.rousseau@example.com', '6 rue Lafayette', '75006', 'Paris', 'b72a85196dc87d19ba7b4c957d8242ccc6c2a4a1', 0),
(11, 'FAURE', 'Hugo', 'hugo.faure@example.com', '7 avenue Montaigne', '75007', 'Paris', '1e40ca7c54883879a478fa7c328e5d21441490fe', 0),
(12, 'BLANC', 'Julie', 'julie.blanc@example.com', '8 boulevard Saint-Michel', '75008', 'Paris', '5007efea31bf20d9058a2c2873a4a73c79c2b3f0', 0),
(13, 'GARNIER', 'Louis', 'louis.garnier@example.com', '9 rue de Rivoli', '75009', 'Paris', '2b9b7614058277a4f0707b8ca5a94811ce842729', 0),
(14, 'ROBIN', 'Marie', 'marie.robin@example.com', '10 rue Oberkampf', '75010', 'Paris', 'c4f9a953ced093648b1bdb0b2aeb39ea9b1bde24', 0),
(15, 'CHEVALIER', 'Thomas', 'thomas.chevalier@example.com', '11 rue de Rome', '75011', 'Paris', 'fbae9839fc087fb209bfb562202eed3984ecf7cd', 0),
(16, 'PICARD', 'Laura', 'laura.picard@example.com', '12 rue de Londres', '75012', 'Paris', '450931f1b0db96c66b04e716c98a8e53fc48a533', 0),
(17, 'OLIVIER', 'Maxime', 'maxime.olivier@example.com', '13 rue des Fleurs', '75013', 'Paris', '147f0cf2ce51362824606b05636a758bc7a2a452', 0),
(18, 'FERNANDEZ', 'Camille', 'camille.fernandez@example.com', '14 rue des Champs', '75014', 'Paris', 'c2e925ae4dc7e3f40ca823d36545beed4f100621', 0),
(19, 'NOLAN', 'Alice', 'alice.nolan@example.com', '15 rue des Rosiers', '75015', 'Paris', 'd9614c06be35fb57b8dda86392c79798817a8577', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
