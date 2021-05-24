-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 mai 2021 à 08:39
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `museum`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

CREATE TABLE `achat` (
  `ID_ARTICLE` int(11) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `DATE_ACHAT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(40) NOT NULL,
  `PRIX` float NOT NULL,
  `QUANTITE` float NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PHOTO` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `creation_topic`
--

CREATE TABLE `creation_topic` (
  `ID_USER` int(11) NOT NULL,
  `ID_TOPIC` int(11) NOT NULL,
  `DATE_CREATION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `donation`
--

CREATE TABLE `donation` (
  `ID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `MONTANT` float NOT NULL,
  `ID_USER` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
  `ID` int(11) NOT NULL,
  `MESSAGE` text NOT NULL,
  `DATE_CREATION` date NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_TOPIC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `ID` int(11) NOT NULL,
  `SUJET` varchar(100) NOT NULL,
  `TEXT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `goldbook`
--

CREATE TABLE `goldbook` (
  `ID` int(11) NOT NULL,
  `TEXT` text NOT NULL,
  `STARS` int(1) NOT NULL,
  `VALIDATION` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `popvehicules`
--

CREATE TABLE `popvehicules` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESCRIPTION` varchar(100) NOT NULL,
  `IMAGE` blob NOT NULL,
  `CONTENT` longtext NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `EVALUATION` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `popvehicules`
--

INSERT INTO `popvehicules` (`ID`, `NAME`, `DESCRIPTION`, `IMAGE`, `CONTENT`, `TYPE`, `EVALUATION`) VALUES
(1, 'voiture_test', 'description', '', 'text-description', 'terrestre', 0);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(40) NOT NULL,
  `LASTNAME` varchar(40) NOT NULL,
  `NICKNAME` varchar(40) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ADRESS` varchar(100) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `CP` int(5) NOT NULL,
  `TEL` int(10) NOT NULL,
  `MOVIE` varchar(200) DEFAULT NULL,
  `BOOK` varchar(200) DEFAULT NULL,
  `SPORT` varchar(200) DEFAULT NULL,
  `MUSIC` varchar(200) DEFAULT NULL,
  `VG` varchar(200) DEFAULT NULL,
  `BIO` text DEFAULT NULL,
  `AVATAR` blob DEFAULT NULL,
  `ROLE` varchar(11) NOT NULL,
  `GOLDBOOK_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `achat`
--
ALTER TABLE `achat`
  ADD PRIMARY KEY (`ID_ARTICLE`,`ID_USER`),
  ADD KEY `ID_USER` (`ID_USER`),
  ADD KEY `ID_ARTICLE` (`ID_ARTICLE`) USING BTREE;

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `creation_topic`
--
ALTER TABLE `creation_topic`
  ADD PRIMARY KEY (`ID_USER`,`ID_TOPIC`),
  ADD KEY `ID_TOPIC` (`ID_TOPIC`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Index pour la table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_TOPIC` (`ID_TOPIC`),
  ADD KEY `ID_USER` (`ID_USER`);

--
-- Index pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `goldbook`
--
ALTER TABLE `goldbook`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `popvehicules`
--
ALTER TABLE `popvehicules`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `GOLDBOOK_ID` (`GOLDBOOK_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `donation`
--
ALTER TABLE `donation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `goldbook`
--
ALTER TABLE `goldbook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `popvehicules`
--
ALTER TABLE `popvehicules`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `achat`
--
ALTER TABLE `achat`
  ADD CONSTRAINT `achat_ibfk_1` FOREIGN KEY (`ID_ARTICLE`) REFERENCES `article` (`ID`),
  ADD CONSTRAINT `achat_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `creation_topic`
--
ALTER TABLE `creation_topic`
  ADD CONSTRAINT `creation_topic_ibfk_1` FOREIGN KEY (`ID_TOPIC`) REFERENCES `forum_topic` (`ID`),
  ADD CONSTRAINT `creation_topic_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `forum_message`
--
ALTER TABLE `forum_message`
  ADD CONSTRAINT `forum_message_ibfk_1` FOREIGN KEY (`ID_TOPIC`) REFERENCES `forum_topic` (`ID`),
  ADD CONSTRAINT `forum_message_ibfk_2` FOREIGN KEY (`ID_USER`) REFERENCES `user` (`ID`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`GOLDBOOK_ID`) REFERENCES `goldbook` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
