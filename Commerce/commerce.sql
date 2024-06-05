-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Août 2018 à 14:06
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheter`
--

CREATE TABLE IF NOT EXISTS `acheter` (
  `code` int(11) NOT NULL,
  `idPart` int(11) NOT NULL,
  `qtachat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `creditcli`
--

CREATE TABLE IF NOT EXISTS `creditcli` (
  `idPart` int(11) NOT NULL,
  `montantcreditcli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `creditcli`
--

INSERT INTO `creditcli` (`idPart`, `montantcreditcli`) VALUES
(3, 7000000),
(4, 3200000),
(4, 3200000),
(3, 1600000);

-- --------------------------------------------------------

--
-- Structure de la table `creditf`
--

CREATE TABLE IF NOT EXISTS `creditf` (
  `idEnt` int(11) NOT NULL,
  `montantcreditf` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `creditf`
--

INSERT INTO `creditf` (`idEnt`, `montantcreditf`) VALUES
(1, 6950000),
(2, 19950000),
(2, 795000);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
`idEnt` int(11) NOT NULL,
  `raisonS` varchar(50) NOT NULL,
  `adrEnt` varchar(50) NOT NULL,
  `telEnt` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`idEnt`, `raisonS`, `adrEnt`, `telEnt`) VALUES
(1, 'Benoit et frÃ¨res', 'Kaffrine', 334565656),
(2, 'Ndiaye_Meuble', 'Dakar', 339464646),
(3, 'Help Family', 'Dakar', 333454545);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE IF NOT EXISTS `facture` (
`numFact` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `pu` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `reglement` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `facture`
--

INSERT INTO `facture` (`numFact`, `code`, `pu`, `quantite`, `montant`, `reglement`) VALUES
(58, 5, 695000, 10, 6950000, 'credit'),
(59, 6, 795000, 13, 10335000, 'comptant'),
(60, 7, 1995000, 10, 19950000, 'credit'),
(61, 6, 795000, 1, 795000, 'credit'),
(62, 5, 700000, 10, 7000000, 'liquide'),
(63, 6, 800000, 4, 3200000, 'liquide'),
(64, 6, 800000, 4, 3200000, 'liquide'),
(65, 6, 800000, 2, 1600000, 'liquide'),
(66, 7, 2000000, 10, 20000000, 'chÃ¨que'),
(67, 6, 800000, 2, 1600000, 'chÃ¨que'),
(68, 6, 800000, 2, 1600000, 'chÃ¨que'),
(69, 5, 695000, 60, 41700000, 'comptant'),
(70, 5, 700000, 10, 7000000, 'chÃ¨que'),
(71, 5, 700000, 20, 14000000, 'cheque');

-- --------------------------------------------------------

--
-- Structure de la table `fournir`
--

CREATE TABLE IF NOT EXISTS `fournir` (
  `code` int(11) NOT NULL,
  `idEnt` int(11) NOT NULL,
  `qtfournie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fournir`
--

INSERT INTO `fournir` (`code`, `idEnt`, `qtfournie`) VALUES
(5, 1, 10),
(6, 2, 13),
(7, 2, 10),
(6, 2, 1),
(5, 3, 10),
(6, 3, 2),
(5, 1, 60),
(5, 3, 20);

-- --------------------------------------------------------

--
-- Structure de la table `particulier`
--

CREATE TABLE IF NOT EXISTS `particulier` (
`idPart` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `adrPart` varchar(50) NOT NULL,
  `telPart` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `particulier`
--

INSERT INTO `particulier` (`idPart`, `prenom`, `nom`, `adrPart`, `telPart`) VALUES
(3, 'Julienne', 'Malou', 'ThiÃ¨s', 772928282),
(4, 'Astou', 'Faye', 'BondiÃ©', 774595959);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
`code` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `qtstock` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`code`, `designation`, `prix`, `qtstock`) VALUES
(5, 'Meuble pour salon', 700000, 30),
(6, 'Meuble pour chambre', 800000, 0),
(7, 'MEUBLE POUR SALLE A MANGER', 2000000, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acheter`
--
ALTER TABLE `acheter`
 ADD KEY `code` (`code`,`idPart`), ADD KEY `idPart` (`idPart`);

--
-- Index pour la table `creditcli`
--
ALTER TABLE `creditcli`
 ADD KEY `idPart` (`idPart`);

--
-- Index pour la table `creditf`
--
ALTER TABLE `creditf`
 ADD KEY `idEnt` (`idEnt`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
 ADD PRIMARY KEY (`idEnt`), ADD UNIQUE KEY `raisonS` (`raisonS`,`telEnt`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
 ADD PRIMARY KEY (`numFact`), ADD KEY `code` (`code`);

--
-- Index pour la table `fournir`
--
ALTER TABLE `fournir`
 ADD KEY `code` (`code`,`idEnt`), ADD KEY `idEnt` (`idEnt`);

--
-- Index pour la table `particulier`
--
ALTER TABLE `particulier`
 ADD PRIMARY KEY (`idPart`), ADD UNIQUE KEY `telPart` (`telPart`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
 ADD PRIMARY KEY (`code`), ADD UNIQUE KEY `designation` (`designation`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
MODIFY `idEnt` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
MODIFY `numFact` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT pour la table `particulier`
--
ALTER TABLE `particulier`
MODIFY `idPart` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
MODIFY `code` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acheter`
--
ALTER TABLE `acheter`
ADD CONSTRAINT `acheter_ibfk_1` FOREIGN KEY (`idPart`) REFERENCES `particulier` (`idPart`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `acheter_ibfk_2` FOREIGN KEY (`code`) REFERENCES `produit` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `creditcli`
--
ALTER TABLE `creditcli`
ADD CONSTRAINT `creditcli_ibfk_1` FOREIGN KEY (`idPart`) REFERENCES `particulier` (`idPart`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `creditf`
--
ALTER TABLE `creditf`
ADD CONSTRAINT `creditf_ibfk_1` FOREIGN KEY (`idEnt`) REFERENCES `entreprise` (`idEnt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`code`) REFERENCES `produit` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `fournir`
--
ALTER TABLE `fournir`
ADD CONSTRAINT `fournir_ibfk_1` FOREIGN KEY (`idEnt`) REFERENCES `entreprise` (`idEnt`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `fournir_ibfk_2` FOREIGN KEY (`code`) REFERENCES `produit` (`code`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
