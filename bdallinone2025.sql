-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 mars 2025 à 16:44
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdallinone2025`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `login` varchar(25) NOT NULL,
  `passwd` varchar(25) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naiss` date NOT NULL,
  `heure` time NOT NULL,
  `email` varchar(70) NOT NULL,
  `sexe` enum('H','F') NOT NULL,
  `language` varchar(20) NOT NULL,
  `foot` enum('O','N') NOT NULL,
  `hand` enum('O','N') NOT NULL,
  `tennis` enum('O','N') NOT NULL,
  `freelance` enum('O','N') NOT NULL,
  `hybride` enum('O','N') NOT NULL,
  `site` enum('O','N') NOT NULL,
  `remote` enum('O','N') NOT NULL,
  `pays` varchar(30) NOT NULL,
  `remarques` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`login`, `passwd`, `nom`, `prenom`, `date_naiss`, `heure`, `email`, `sexe`, `language`, `foot`, `hand`, `tennis`, `freelance`, `hybride`, `site`, `remote`, `pays`, `remarques`) VALUES
('bahaeddine', '123456789', 'krayem ', 'bahaeddine', '2025-01-31', '12:28:00', 'bahaeddinekrayem@gmail.com', 'H', 'Javascript', 'O', 'O', 'N', 'N', 'O', 'O', 'N', 'TN', 'salut comment ca va tu fait quoi!! pas grand chose,,'),
('israasma', '', 'Bahar ', 'Bahar', '0000-00-00', '00:00:00', 'baharbaharbahar194@gmail.com', '', 'HTML', 'N', 'N', 'N', 'N', 'N', 'N', 'N', 'Veuillez choisir un pays SVP', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
