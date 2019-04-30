-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 avr. 2018 à 22:19
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `idC` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Sexe` varchar(255) NOT NULL,
  `Pseudo` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`idC`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`idC`, `nom`, `prenom`, `Sexe`, `Pseudo`, `Email`) VALUES
(1, 'ksila', 'ons', 'Femme', 'ons', 'ons.ksila@esprit.tn'),
(2, 'ksila', 'ons', 'Femme', 'ons', 'ons.ksila@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `idCommande` int(11) NOT NULL AUTO_INCREMENT,
  `dateCommande` date NOT NULL,
  `montantCommande` int(11) NOT NULL,
  `etatCommande` varchar(255) NOT NULL,
  `lieuLivraison` varchar(255) NOT NULL,
  `prixLivraison` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idCommande`, `dateCommande`, `montantCommande`, `etatCommande`, `lieuLivraison`, `prixLivraison`, `idClient`) VALUES
(1, '2019-04-22', 18, 'en cours', 'Ariana', 5, 2);


-- --------------------------------------------------------

--
-- Structure de la table `historiquecommande`
--

DROP TABLE IF EXISTS `historiquecommande`;
CREATE TABLE IF NOT EXISTS `historiquecommande` (
  `idCommande` int(11) NOT NULL,
  `dateCommande` date NOT NULL,
  `montantCommande` int(11) NOT NULL,
  `etatCommande` varchar(255) NOT NULL,
  `lieuLivraison` varchar(255) NOT NULL,
  `prixLivraison` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idCommande`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `historiquecommande`
--

INSERT INTO `historiquecommande` (`idCommande`, `dateCommande`, `montantCommande`, `etatCommande`, `lieuLivraison`, `prixLivraison`, `idClient`) VALUES
(1, '2019-04-22', 18, 'Validee', 'Ariana', 5, 2);

-- --------------------------------------------------------

--
-- Structure de la table `lignecommande`
--

DROP TABLE IF EXISTS `lignecommande`;
CREATE TABLE IF NOT EXISTS `lignecommande` (
  `idLC` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`idLC`),
  KEY `id` (`id`),
  KEY `idCommande` (`idCommande`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `lignecommande`
--

INSERT INTO `lignecommande` (`idLC`, `id`, `idCommande`, `idClient`, `prix`, `quantite`, `nom`) VALUES
(1, 1, 2, 2, 18, 1, 'Baguette classique');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idp` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`idp`, `id`, `nom`, `prix`, `quantite`, `idClient`) VALUES
(1, 1, 'Baguette classique', 18, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `quantite`, `categorie`) VALUES

(2, 'Baguette classique', 18, 2, 'Boulangerie');

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `idw` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idw`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`idw`, `id`, `nom`, `prix`, `quantite`, `idClient`) VALUES
(1, 2, 'Baguette classique', 2, 1, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
