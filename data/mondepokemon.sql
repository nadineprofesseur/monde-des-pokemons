-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 09 fév. 2018 à 06:05
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mondepokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `idPokemon` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `generation` int(11) NOT NULL,
  `resume` text NOT NULL,
  `illustration` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`idPokemon`, `nom`, `type`, `generation`, `resume`, `illustration`) VALUES
(1, 'Tarpaud', 'Eau', 2, 'Ce Pokémon est semblable à une grenouille arboricole, potentiellement inspirée de la rainette verte.', 'tarpaud.png'),
(2, 'Noacier', 'Plante', 5, 'Noacier est un Pokémon ressemblant à une grosse bogue de marron fermée en acier et de forme ovale. Trois lianes partent du sommet de sa tête.', 'noacier.png'),
(3, 'Cizayox', 'Acier', 2, 'Ses deux pinces font penser aux motifs que les papillons possèdent sur leurs ailes pour effrayer les prédateurs.', 'cizayox.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`idPokemon`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `idPokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
