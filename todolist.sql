-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 03 oct. 2022 à 18:00
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `tasklist`
--

CREATE TABLE `tasklist` (
  `task` varchar(300) DEFAULT NULL,
  `dateToAdd` date DEFAULT NULL,
  `statu` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tasklist`
--

INSERT INTO `tasklist` (`task`, `dateToAdd`, `statu`, `id`) VALUES
('vvv', NULL, 0, 3),
('rrr', NULL, 0, 4),
('d', NULL, 0, 5),
('d', NULL, 0, 6),
('joigarjgoi', NULL, 0, 7),
('amine', NULL, 0, 8),
('eeee', NULL, 0, 9),
('ffff', NULL, 0, 10),
('eeeeeeeeeeeeeee', NULL, 0, 11),
('eeééé', NULL, 0, 12),
('eeee\"e\"e\"', NULL, 0, 13);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tasklist`
--
ALTER TABLE `tasklist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tasklist`
--
ALTER TABLE `tasklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
