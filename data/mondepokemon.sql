-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 20 fév. 2018 à 11:53
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
-- Structure de la table `apparition`
--

CREATE TABLE `apparition` (
  `idApparition` int(11) NOT NULL,
  `idPokemon` int(11) NOT NULL,
  `episode` int(11) NOT NULL,
  `description` text NOT NULL,
  `majeur` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apparition`
--

INSERT INTO `apparition` (`idApparition`, `idPokemon`, `episode`, `description`, `majeur`) VALUES
(1, 1, 247, 'Sa première apparition dans l\'animé se fait quand le Têtarte d\'Ondine évolue en Tarpaud dans l\'épisode 247, quand celui-ci rentre en contact avec la Roche Royale de Sacha. On ne verra ce dernier que très rarement dans la série.', 1),
(2, 1, 249, 'Tammy en possède un appelé Bill dans l\'épisode 249.', 0),
(3, 2, 746, 'Un Noacier qui appartient à un Agent Jenny apparaît dans l\'épisode 746.', 1),
(4, 3, 140, 'La première apparition de Cizayox dans l\'animé se fait dans l\'épisode 140 \"Engagé pour Combattre\", où il affronte le Scarhino de Sacha', 1),
(5, 3, 270, 'Régis en possède un que l\'on découvre dans l\'épisode 270 lors de la Conférence Argentée.', 1);

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
(3, 'Cizayox5', 'Acier', 2, 'Ses deux pinces font penser aux motifs que les papillons possèdent sur leurs ailes pour effrayer les prédateurs.', 'cizayox.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apparition`
--
ALTER TABLE `apparition`
  ADD PRIMARY KEY (`idApparition`);

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`idPokemon`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apparition`
--
ALTER TABLE `apparition`
  MODIFY `idApparition` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `idPokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
