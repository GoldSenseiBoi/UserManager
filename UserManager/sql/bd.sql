create database bonbec
use  bonbec


DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `produit` (`nom`, `prix`) VALUES
('Bonbon Fraise', 1.20),
('Bonbon Citron', 1.10),
('Bonbon Orange', 1.30),
('Bonbon Menthe', 1.40),
('Bonbon Cola', 1.25),
('Bonbon Cerise', 1.50),
('Bonbon Réglisse', 1.60),
('Bonbon Pomme', 1.35),
('Bonbon Caramel', 1.45),
('Bonbon Ananas', 1.55),
('Bonbon Cassis', 1.20),
('Bonbon Framboise', 1.30),
('Bonbon Chocolat', 1.50),
('Bonbon Noisette', 1.40),
('Bonbon Nougat', 1.60);





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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `user` (`nom`, `prenom`, `email`, `adresse`, `code_postale`, `city`, `password`, `admin`) VALUES
('DUPONT', 'Jean', 'jean.dupont@example.com', '1 rue des Lilas', '75001', 'Paris', SHA1('password123'), 0),
('MARTIN', 'Claire', 'claire.martin@example.com', '2 avenue de la République', '75002', 'Paris', SHA1('password456'), 0),
('LECLERC', 'Paul', 'paul.leclerc@example.com', '3 boulevard Haussmann', '75003', 'Paris', SHA1('password789'), 0),
('DURAND', 'Sophie', 'sophie.durand@example.com', '4 rue du Bac', '75004', 'Paris', SHA1('password101'), 0),
('MOREL', 'Luc', 'luc.morel@example.com', '5 place de la Concorde', '75005', 'Paris', SHA1('password102'), 0),
('ROUSSEAU', 'Emma', 'emma.rousseau@example.com', '6 rue Lafayette', '75006', 'Paris', SHA1('password103'), 0),
('FAURE', 'Hugo', 'hugo.faure@example.com', '7 avenue Montaigne', '75007', 'Paris', SHA1('password104'), 0),
('BLANC', 'Julie', 'julie.blanc@example.com', '8 boulevard Saint-Michel', '75008', 'Paris', SHA1('password105'), 0),
('GARNIER', 'Louis', 'louis.garnier@example.com', '9 rue de Rivoli', '75009', 'Paris', SHA1('password106'), 0),
('ROBIN', 'Marie', 'marie.robin@example.com', '10 rue Oberkampf', '75010', 'Paris', SHA1('password107'), 0),
('CHEVALIER', 'Thomas', 'thomas.chevalier@example.com', '11 rue de Rome', '75011', 'Paris', SHA1('password108'), 0),
('PICARD', 'Laura', 'laura.picard@example.com', '12 rue de Londres', '75012', 'Paris', SHA1('password109'), 0),
('OLIVIER', 'Maxime', 'maxime.olivier@example.com', '13 rue des Fleurs', '75013', 'Paris', SHA1('password110'), 0),
('FERNANDEZ', 'Camille', 'camille.fernandez@example.com', '14 rue des Champs', '75014', 'Paris', SHA1('password111'), 0),
('NOLAN', 'Alice', 'alice.nolan@example.com', '15 rue des Rosiers', '75015', 'Paris', SHA1('password112'), 0);