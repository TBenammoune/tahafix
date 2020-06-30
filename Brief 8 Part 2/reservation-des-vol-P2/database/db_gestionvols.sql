-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 juin 2020 à 16:16
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_gestionvols`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idClient` int(11) NOT NULL,
  `Nom` varchar(200) NOT NULL,
  `Prenom` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `CIN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `Nom`, `Prenom`, `Email`, `tel`, `CIN`) VALUES
(1, 'lmajad', 'ndor', 'mjid@gmail.com', 'SH6667', '0697546508'),
(2, 'C50', 'red', '\'@uuuyu', 'BH555', '0616825191'),
(3, 'maryam', 'red', 'othmanehannoune1@gmail.com', 'HHH7777', '0616825191'),
(4, '', '', '', '', ''),
(5, 'AB', 'othmane', 'OO@gmail.com', 'BH555', '0766545656'),
(6, 'AB', 'othmane', 'OO@gmail.com', 'BH555', '0766545656'),
(7, 'AB', 'othmane', 'OO@gmail.com', 'BH555', '0766545656'),
(8, 'C50', 'red', 'othmanehannoune1@gmail.com', 'hh1234', '0676765443'),
(9, 'othmane', 'hannonune', 'othmanehannoune1@gmail.com', 'hh5975', '0766545656'),
(10, 'maryam', 'red', 'OO@gmail.com', 'HHH7777', ''),
(11, 'ahmed', 'ahmed', 'ahmed@jj.kk', 'hh7877', '0765432212'),
(12, 'jamal', 'hasoni', 'jamali@gmail.com', 'KK6567', '0765432212'),
(13, 'soumaya', 'hhghg', 'OO@gmail.com', 'BH555', '0697546508'),
(14, 'maryam', 'faouizi', 'maryam@gmail.com', 'hh5554', '0765432212'),
(15, 'mjad', 'ndour', 'majid@hh.fr', 'hh7877', '0697546508'),
(16, 'mjad', 'ndour', 'majid@hh.fr', 'hh7877', '0697546508'),
(17, 'maryam', 'faouzi', 'mane@hh.kk', 'hh1234', '0697546508'),
(18, 'hannoune', 'htdos', 'OO@gmail.com', 'BH555', '0765432212'),
(19, 'maryam', 'red', 'OO@gmail.com', 'HHH7777', '0765432212'),
(20, 'maryam', 'htdos', 'OO@gmail.com', 'hh7877', '0676767676');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `idreservation` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idVol` int(11) NOT NULL,
  `date_reseravtion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`idreservation`, `idClient`, `iduser`, `idVol`, `date_reseravtion`) VALUES
(1, 1, 0, 3, '2020-05-14 17:17:47'),
(2, 2, 0, 2, '2020-05-14 18:13:36'),
(3, 3, 0, 2, '2020-05-14 19:25:28'),
(4, 4, 0, 2, '2020-05-14 19:25:38'),
(5, 5, 0, 3, '2020-05-14 19:32:10'),
(6, 6, 6, 3, '2020-05-14 21:21:09'),
(7, 7, 0, 3, '2020-05-14 21:21:53'),
(8, 8, 0, 3, '2020-05-14 21:22:53'),
(9, 9, 0, 2, '2020-05-14 21:31:43'),
(10, 10, 0, 2, '2020-05-15 00:11:25'),
(11, 11, 0, 2, '2020-05-15 14:05:23'),
(12, 12, 0, 2, '2020-05-28 20:41:40'),
(13, 13, 0, 3, '2020-05-29 14:10:06'),
(14, 14, 0, 2, '2020-05-29 14:50:57'),
(15, 17, 6, 2, '2020-06-02 16:13:19'),
(16, 18, 6, 2, '2020-06-02 19:48:37'),
(17, 19, 6, 1, '2020-06-02 19:50:57'),
(18, 20, 22, 2, '2020-06-04 03:47:15');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `mail` varchar(200) NOT NULL,
  `pass_word` varchar(50) NOT NULL,
  `statu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`iduser`, `username`, `mail`, `pass_word`, `statu`) VALUES
(3, 'othmane ', 'othmanehannoune1@gmail.com', '123', 'Admin'),
(4, 'sahrawi', 'sh@sahra.gafla', 'AZE', 'Admin'),
(6, 'ghizlan', 'ghizlan@yahoo.com', 'AZE', 'User'),
(27, 'khawla', 'khawla@gmail.com', 'kh12', 'User'),
(28, 'khawla', 'khawla@gmail.com', 'kh12', 'User');

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE `vols` (
  `idVol` int(11) NOT NULL,
  `depart` varchar(200) NOT NULL,
  `destination` varchar(200) NOT NULL,
  `date_depart` date NOT NULL,
  `time` time NOT NULL,
  `prix` float NOT NULL,
  `place_disponible` int(11) NOT NULL,
  `statu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `vols`
--

INSERT INTO `vols` (`idVol`, `depart`, `destination`, `date_depart`, `time`, `prix`, `place_disponible`, `statu`) VALUES
(1, 'Safi', 'casablanca', '2020-05-28', '12:00:00', 100, 9, 'Activer'),
(2, 'dakhla', 'fes', '2020-05-26', '10:30:00', 300, 5, 'Activer'),
(3, 'dakhla', 'fes', '2020-06-18', '17:30:00', 300, 10, 'Activer'),
(4, 'fes', 'dakhla', '2020-06-18', '17:30:00', 300, 10, 'Activer'),
(16, 'dakhla', 'fes', '2020-05-26', '13:30:00', 260, 10, 'Activer'),
(17, 'dakhla', 'fes', '2020-06-18', '19:30:00', 210, 10, 'Activer');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idClient`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`idreservation`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- Index pour la table `vols`
--
ALTER TABLE `vols`
  ADD PRIMARY KEY (`idVol`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `idreservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `vols`
--
ALTER TABLE `vols`
  MODIFY `idVol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
