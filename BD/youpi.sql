-- phpMyAdmin SQL Dump
-- version 4.6.6deb4+deb9u1
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mer 15 Décembre 2021 à 14:59
-- Version du serveur :  10.3.31-MariaDB-0+deb10u1
-- Version de PHP :  7.3.31-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbmaorillon`
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

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `login`, `idNews`, `contenu`) VALUES
(1, 'mark', 3, 'j\'adore'),
(2, 'papaCome', 1, 'trop cool'),
(3, 'scully', 4, 'the truth is out there'),
(4, 'Gred', 7, 'fantastique!'),
(5, 'Molly', 7, 'Fred, George, rentrez au terrier!'),
(6, 'forge', 4, 'c\'est fun');

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
  `email` varchar(30) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `d_inscription` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Membres du site';

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `login`, `motdepasse`, `nom`, `prenom`, `email`, `tel`, `d_inscription`) VALUES
(1, 'mark', 'mark', 'Zuckerberg', 'Mark', 'mark.zuckerberg@gmail.com', '06.55.77.45.23', '2021-11-19'),
(2, 'thomas', 'thomas', 'Devienne', 'Thomas', 'devienne.thomas@hotmail.fr', '06 95 07 22 83', '2021-11-19'),
(4, 'forge', 'farce', 'weasley', 'fred', NULL, NULL, '2021-12-14'),
(5, 'scully', 'alien', 'scully', 'dana', NULL, NULL, '2021-12-14');

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
-- Contenu de la table `News`
--

INSERT INTO `News` (`id`, `titre`, `idMembre`, `dateNews`, `contenu`) VALUES
(1, 'Comment l\'UX design joue-t-il avec la psychologie humaine ? Les explications du docteur Rieux en exclusivité.', 2, '2021-11-30', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(2, 'Pourquoi les bébés pleuvent-ils ?', 1, '2021-11-28', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(3, 'Quel est la différence entre le pole nord et le pole nord mais pas pareil ?', 2, '2021-11-14', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.'),
(4, 'Pourquoi Facebook est le meilleur réseau social?', 1, '2021-12-13', 'Tout simplement parce que je l\'ai créé.'),
(5, 'hey biloute', 2, '2021-12-15', 'je viens du ch\'noooord!'),
(6, 'comment reconnaître un alien?', 5, '2021-12-15', 'Tu pousse le bouchon un peu trop loin Maurice, un alien n\'a pas la peau verte!'),
(7, 'Comment piéger vos professeurs?', 4, '2021-12-14', 'Rendez-vous dans notre boutique \"Farces pour sorciers facétieux\" où vous trouverez votre bonheur!'),
(8, 'Comment vider un corps de son sang?', 5, '2021-12-14', 'Cet article est pour les médecins légistes et non pour les meurtriers!!!'),
(9, 'Comment savoir si votre collègue est complètement fou ou savoir si vous en êtes amoureuse?', 5, '2021-12-14', 'Pourquoi es-tu en train de lire...?'),
(10, 'yo', 5, '2021-12-15', 'yo');

--
-- Index pour les tables exportées
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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `News`
--
ALTER TABLE `News`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
