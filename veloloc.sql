-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 12 sep. 2019 à 07:15
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `veloloc`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE IF NOT EXISTS `adresse` (
  `idadresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresse1` varchar(250) DEFAULT NULL,
  `adresse2` varchar(250) DEFAULT NULL,
  `codePostal` varchar(20) DEFAULT NULL,
  `ville_idville` int(11) NOT NULL,
  PRIMARY KEY (`idadresse`),
  KEY `fk_adresse_ville1_idx` (`ville_idville`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idArticle` int(11) NOT NULL AUTO_INCREMENT,
  `nomArticle` varchar(45) DEFAULT NULL,
  `categorieArticle` varchar(55) DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `prixArticle` int(11) NOT NULL,
  `imageArticle` varchar(250) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  PRIMARY KEY (`idArticle`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idArticle`, `nomArticle`, `categorieArticle`, `stock`, `prixArticle`, `imageArticle`, `actif`) VALUES
(2, 'cornichon', 'cucurubitacé', 2, 4, NULL, 1),
(3, 'Vélo électrique', 'vélo', 99, 10, NULL, 1),
(4, 'Vélo classique', 'vélo', 99, 10, NULL, 1);

-- --------------------------------------------------------

--
-- Structure de la table `carte_bleue`
--

DROP TABLE IF EXISTS `carte_bleue`;
CREATE TABLE IF NOT EXISTS `carte_bleue` (
  `idcarte_bleue` int(11) NOT NULL AUTO_INCREMENT,
  `numero_cb` varchar(45) DEFAULT NULL,
  `nom_titulaire` varchar(45) DEFAULT NULL,
  `date_validite` date DEFAULT NULL,
  `users_idusers` int(11) NOT NULL,
  PRIMARY KEY (`idcarte_bleue`),
  KEY `fk_carte_bleue_users1_idx` (`users_idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE IF NOT EXISTS `entreprise` (
  `identreprise` int(11) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(250) DEFAULT NULL,
  `numero_RCS` varchar(45) DEFAULT NULL,
  `adresse_idadresse` int(11) NOT NULL,
  PRIMARY KEY (`identreprise`),
  KEY `fk_entreprise_adresse1_idx` (`adresse_idadresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ope_stock`
--

DROP TABLE IF EXISTS `ope_stock`;
CREATE TABLE IF NOT EXISTS `ope_stock` (
  `idope_stock` int(11) NOT NULL AUTO_INCREMENT,
  `qtite_article` int(11) DEFAULT NULL,
  `date_operation` datetime DEFAULT NULL,
  `motif_operation` longtext,
  `stock_idstock` int(11) NOT NULL,
  PRIMARY KEY (`idope_stock`),
  KEY `fk_ope_stock_stock1_idx` (`stock_idstock`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `date_creation_panier` datetime DEFAULT NULL,
  `panier_paye` int(11) DEFAULT NULL,
  `Actif` int(11) DEFAULT NULL,
  `litige` int(11) DEFAULT NULL,
  `ville_idville` int(11) NOT NULL,
  `users_idusers` int(11) NOT NULL,
  PRIMARY KEY (`idPanier`),
  KEY `fk_Panier_ville1_idx` (`ville_idville`),
  KEY `fk_Panier_users1_idx` (`users_idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `idPays` int(11) NOT NULL AUTO_INCREMENT,
  `nom_pays` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `periode`
--

DROP TABLE IF EXISTS `periode`;
CREATE TABLE IF NOT EXISTS `periode` (
  `idperiode` int(11) NOT NULL AUTO_INCREMENT,
  `nom_periode` varchar(45) DEFAULT NULL,
  `abv_periode` varchar(45) DEFAULT NULL,
  `actif` int(2) DEFAULT '1',
  PRIMARY KEY (`idperiode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sous_panier`
--

DROP TABLE IF EXISTS `sous_panier`;
CREATE TABLE IF NOT EXISTS `sous_panier` (
  `idsous_panier` int(11) NOT NULL AUTO_INCREMENT,
  `qte_article` int(11) DEFAULT NULL,
  `nb_duree` int(11) DEFAULT NULL,
  `date_retour_prevue` datetime DEFAULT NULL,
  `date_retour_reel` datetime DEFAULT NULL,
  `Panier_idPanier` int(11) NOT NULL,
  `tarif_idtarif` int(11) NOT NULL,
  PRIMARY KEY (`idsous_panier`),
  KEY `fk_sous_panier_Panier1_idx` (`Panier_idPanier`),
  KEY `fk_sous_panier_tarif1_idx` (`tarif_idtarif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `idstock` int(11) NOT NULL AUTO_INCREMENT,
  `quantite_stock` int(11) DEFAULT NULL,
  `ville_idville` int(11) NOT NULL,
  `article_idarticle` int(11) NOT NULL,
  PRIMARY KEY (`idstock`),
  KEY `fk_stock_ville1_idx` (`ville_idville`),
  KEY `fk_stock_article1_idx` (`article_idarticle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE IF NOT EXISTS `tarif` (
  `idtarif` int(11) NOT NULL AUTO_INCREMENT,
  `tarifHT` float DEFAULT NULL,
  `type_user_idtype_user` int(11) NOT NULL,
  `article_idarticle` int(11) NOT NULL,
  `TVA_idTVA` int(11) NOT NULL,
  `periode_idperiode` int(11) NOT NULL,
  PRIMARY KEY (`idtarif`),
  KEY `fk_tarif_type_user1_idx` (`type_user_idtype_user`),
  KEY `fk_tarif_article1_idx` (`article_idarticle`),
  KEY `fk_tarif_TVA1_idx` (`TVA_idTVA`),
  KEY `fk_tarif_periode1_idx` (`periode_idperiode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tva`
--

DROP TABLE IF EXISTS `tva`;
CREATE TABLE IF NOT EXISTS `tva` (
  `idTVA` int(11) NOT NULL AUTO_INCREMENT,
  `valeur_TVA` float DEFAULT NULL,
  `actif_TVA` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`idTVA`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_user`
--

DROP TABLE IF EXISTS `type_user`;
CREATE TABLE IF NOT EXISTS `type_user` (
  `idtype_user` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idtype_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `nom_user` varchar(250) DEFAULT NULL,
  `prenom_user` varchar(250) DEFAULT NULL,
  `date_naissance_user` date DEFAULT NULL,
  `tel_user` varchar(45) DEFAULT NULL,
  `email_user` varchar(250) DEFAULT NULL,
  `date_creation_user` datetime DEFAULT NULL,
  `actif` int(2) DEFAULT NULL,
  `entreprise_identreprise` int(11) DEFAULT NULL,
  `type_user_idtype_user` int(11) NOT NULL,
  `adresse_idadresse` int(11) NOT NULL,
  PRIMARY KEY (`idusers`),
  UNIQUE KEY `idusers_UNIQUE` (`idusers`),
  KEY `fk_users_entreprise1_idx` (`entreprise_identreprise`),
  KEY `fk_users_type_user1_idx` (`type_user_idtype_user`),
  KEY `fk_users_adresse1_idx` (`adresse_idadresse`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

DROP TABLE IF EXISTS `ville`;
CREATE TABLE IF NOT EXISTS `ville` (
  `idville` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ville` varchar(250) DEFAULT NULL,
  `centre_location` tinyint(4) DEFAULT '0',
  `Pays_idPays` int(11) NOT NULL,
  PRIMARY KEY (`idville`),
  UNIQUE KEY `idville_UNIQUE` (`idville`),
  KEY `fk_ville_Pays1_idx` (`Pays_idPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD CONSTRAINT `fk_adresse_ville1` FOREIGN KEY (`ville_idville`) REFERENCES `ville` (`idville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `carte_bleue`
--
ALTER TABLE `carte_bleue`
  ADD CONSTRAINT `fk_carte_bleue_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `fk_entreprise_adresse1` FOREIGN KEY (`adresse_idadresse`) REFERENCES `adresse` (`idadresse`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ope_stock`
--
ALTER TABLE `ope_stock`
  ADD CONSTRAINT `fk_ope_stock_stock1` FOREIGN KEY (`stock_idstock`) REFERENCES `stock` (`idstock`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `fk_Panier_users1` FOREIGN KEY (`users_idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Panier_ville1` FOREIGN KEY (`ville_idville`) REFERENCES `ville` (`idville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sous_panier`
--
ALTER TABLE `sous_panier`
  ADD CONSTRAINT `fk_sous_panier_Panier1` FOREIGN KEY (`Panier_idPanier`) REFERENCES `panier` (`idPanier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_sous_panier_tarif1` FOREIGN KEY (`tarif_idtarif`) REFERENCES `tarif` (`idtarif`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `fk_stock_article1` FOREIGN KEY (`article_idarticle`) REFERENCES `article` (`idArticle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stock_ville1` FOREIGN KEY (`ville_idville`) REFERENCES `ville` (`idville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `tarif`
--
ALTER TABLE `tarif`
  ADD CONSTRAINT `fk_tarif_TVA1` FOREIGN KEY (`TVA_idTVA`) REFERENCES `tva` (`idTVA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarif_article1` FOREIGN KEY (`article_idarticle`) REFERENCES `article` (`idArticle`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarif_periode1` FOREIGN KEY (`periode_idperiode`) REFERENCES `periode` (`idperiode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tarif_type_user1` FOREIGN KEY (`type_user_idtype_user`) REFERENCES `type_user` (`idtype_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_adresse1` FOREIGN KEY (`adresse_idadresse`) REFERENCES `adresse` (`idadresse`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_entreprise1` FOREIGN KEY (`entreprise_identreprise`) REFERENCES `entreprise` (`identreprise`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_type_user1` FOREIGN KEY (`type_user_idtype_user`) REFERENCES `type_user` (`idtype_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `fk_ville_Pays1` FOREIGN KEY (`Pays_idPays`) REFERENCES `pays` (`idPays`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
