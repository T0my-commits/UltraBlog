-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 30 nov. 2021 à 13:05
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `youpi`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `idNews` int(255) NOT NULL,
  `contenu` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(255) NOT NULL,
  `login` varchar(30) NOT NULL,
  `motdepasse` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `d_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Membres du site';

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `login`, `motdepasse`, `nom`, `prenom`, `email`, `tel`, `d_inscription`) VALUES
(1, 'mark', 'mark', 'Zuckerberg', 'Mark', 'mark.zuckerberg@gmail.com', '06.55.77.45.23', '2021-11-19'),
(2, 'thomas', 'thomas', 'Devienne', 'Thomas', 'devienne.thomas@hotmail.fr', '06 95 07 22 83', '2021-11-19');

-- --------------------------------------------------------

--
-- Structure de la table `News`
--

CREATE TABLE `News` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `idMembre` int(255) NOT NULL,
  `dateNews` date NOT NULL,
  `contenu` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `News`
--

INSERT INTO `News` (`id`, `titre`, `idMembre`, `dateNews`, `contenu`) VALUES
(1, 'Comment l\'UX design joue-t-il avec la psychologie humaine ? Les explications du docteur Rieux en exclusivité.', 2, '2021-11-30', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(2, 'Pourquoi les bébés pleuvent-ils ?', 1, '2021-11-28', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(3, 'Quel est la différence entre le pole nord et le pole nord mais pas pareil ?', 2, '2021-11-14', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `News`
--
ALTER TABLE `News`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `News`
--
ALTER TABLE `News`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
