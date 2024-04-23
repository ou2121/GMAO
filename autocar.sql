-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 24 avr. 2024 à 01:20
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
-- Base de données : `autocar`
--

-- --------------------------------------------------------

--
-- Structure de la table `listeautocar`
--

CREATE TABLE `listeautocar` (
  `id` int(11) NOT NULL,
  `marque` varchar(225) NOT NULL,
  `immatricule` int(11) NOT NULL,
  `numero_parc` int(11) NOT NULL,
  `numero_chassis` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `listeautocar`
--

INSERT INTO `listeautocar` (`id`, `marque`, `immatricule`, `numero_parc`, `numero_chassis`) VALUES
(1, 'volvo', 544942025, 21100, '1gnek13T6yr218087'),
(2, 'cherry', 236741521, 21107, 'EF2 6TYG3F 26835177'),
(13, 'iveco', 479621521, 21369, '125azeds54fgr8s');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `listeautocar`
--
ALTER TABLE `listeautocar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `listeautocar`
--
ALTER TABLE `listeautocar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
