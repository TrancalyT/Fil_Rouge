-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 avr. 2021 à 13:57
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
-- Structure de la table `forum_message`
--

CREATE TABLE `forum_message` (
  `ID` int(5) NOT NULL,
  `TOPIC` varchar(255) NOT NULL,
  `AUTHOR` varchar(60) NOT NULL,
  `DATE` date NOT NULL,
  `TEXT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forum_validate`
--

CREATE TABLE `forum_validate` (
  `ID` int(11) NOT NULL,
  `TEXT` int(11) NOT NULL,
  `STARS` int(5) NOT NULL,
  `SIGNATURE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `goldbook_attente`
--

CREATE TABLE `goldbook_attente` (
  `ID` int(5) NOT NULL,
  `TEXT` int(11) NOT NULL,
  `STARS` int(5) NOT NULL,
  `SIGNATURE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `NOM` varchar(20) NOT NULL,
  `PRENOM` varchar(20) NOT NULL,
  `NICKNAME` varchar(20) NOT NULL,
  `MAIL` varchar(50) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `ADRESS` varchar(100) NOT NULL,
  `CITY` varchar(100) NOT NULL,
  `CP` int(5) NOT NULL,
  `TEL` int(10) NOT NULL,
  `MOVIE` varchar(100) NOT NULL,
  `BOOK` varchar(100) NOT NULL,
  `MUSIC` varchar(100) NOT NULL,
  `SPORT` varchar(100) NOT NULL,
  `VG` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `forum_message`
--
ALTER TABLE `forum_message`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `forum_validate`
--
ALTER TABLE `forum_validate`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `goldbook_attente`
--
ALTER TABLE `goldbook_attente`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `forum_message`
--
ALTER TABLE `forum_message`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forum_validate`
--
ALTER TABLE `forum_validate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `goldbook_attente`
--
ALTER TABLE `goldbook_attente`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
