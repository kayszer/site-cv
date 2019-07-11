-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 10 juil. 2019 à 11:49
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `site_cv`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(100) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `note` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `nom`, `note`) VALUES
(NULL, '0', 60);

-- --------------------------------------------------------

--
-- Structure de la table `coordonnee`
--

CREATE TABLE `coordonnee` (
  `id_coordonnees` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `naissance` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `cp` int(5) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `coordonnee`
--

INSERT INTO `coordonnee` (`id_coordonnees`, `nom`, `prenom`, `naissance`, `adresse`, `cp`, `ville`, `email`, `telephone`) VALUES
(1, 'Kassas', 'Kayes', '15 mai 1991', '52 - 64 avenue du général Gallieni', 93380, 'Pierrefitte-sur-seine', 'kassas.kayes93@gmail.com', '0763972543');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(100) NOT NULL,
  `societe` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `emploi` varchar(100) NOT NULL,
  `tache` varchar(100) NOT NULL,
  `date_debut` varchar(100) NOT NULL,
  `date_fin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `societe`, `ville`, `emploi`, `tache`, `date_debut`, `date_fin`) VALUES
(4, 'Air2Jeux', 'Croissy beaubourg', 'Regisseur chef d\'equipe', 'Multi-taches', '20/05/2009', '30/12/2018'),
(5, 'Carrefour St Brice', 'Croissy beaubourg', 'Employe Polyvalent', 'Multi-taches', '2009', '2018'),
(6, 'course@dom', 'morangis', 'chauffeur livreur', 'Chauffeur livreur', '31/08/2016', '27/07/2018'),
(8, 'Geos', 'La defense', 'Agent chauffeur securite', 'Agent chauffeur securite', '10/01/2017', '20/06/2017'),
(9, 'Mairie de pierrefitte', 'Pierrefitte-sur-seine', 'Gardien de mairie', 'Gardien de marie et de complexe sportif', '10-12-2015', '28-02-2016');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(100) NOT NULL,
  `ecole` varchar(100) NOT NULL,
  `ville` varchar(100) NOT NULL,
  `formation` varchar(100) NOT NULL,
  `date_debut` varchar(100) NOT NULL,
  `date_fin` varchar(100) NOT NULL,
  `obtenue` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `ecole`, `ville`, `formation`, `date_debut`, `date_fin`, `obtenue`) VALUES
(2, 'LycÃ©e Maurice Utrillo', 'Stains', 'Bac Pro Comptabilite', '03/09/2007', '27/06/2011', 'oui'),
(3, 'Aston', 'bagneux', 'MMIR', '03/09/2011', '4/07/2012', 'oui'),
(5, 'Lepoles', 'Pierrefitte-sur-seine', 'Developpeur Web', '29/11/2018', 'en cours', 'en cours');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `username`, `password`) VALUES
(10, 'kayes', 'R3@lm@drid');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `langages` varchar(100) NOT NULL,
  `temps` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `nom`, `langages`, `temps`, `note`) VALUES
(1, 'Pro 2 lanim', 'wordpress', 'en cours', '12/20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `coordonnee`
--
ALTER TABLE `coordonnee`
  ADD PRIMARY KEY (`id_coordonnees`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `coordonnee`
--
ALTER TABLE `coordonnee`
  MODIFY `id_coordonnees` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
