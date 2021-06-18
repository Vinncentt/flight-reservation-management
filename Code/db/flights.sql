-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 juin 2021 à 15:50
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `flights`
--

-- --------------------------------------------------------

--
-- Structure de la table `flights`
--

CREATE TABLE `flights` (
  `id` int(11) NOT NULL,
  `fro_m` varchar(200) NOT NULL,
  `city_to` varchar(200) NOT NULL,
  `date_time` datetime NOT NULL,
  `arrive_time` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `seats_number` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `flights`
--

INSERT INTO `flights` (`id`, `fro_m`, `city_to`, `date_time`, `arrive_time`, `price`, `seats_number`, `status`) VALUES
(6, 'tanger', 'Frankfurt', '2021-05-04 15:05:00', '2021-05-21 15:05:00', 245, 33, 1),
(7, 'Agadir', 'Liverpool', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2300, 34, 0),
(9, 'tanger', 'marrakech', '2021-05-12 14:48:00', '2021-05-13 14:48:00', 436, 35, 1),
(10, 'tanger', 'laayoun', '2021-05-26 20:13:00', '2021-05-26 23:17:00', 567, 36, 1),
(11, 'tanger', 'marrakech', '2021-05-21 19:01:00', '2021-05-28 20:57:00', 25, 678, 0),
(13, 'safi', 'eljadida', '2021-06-30 10:45:00', '2021-06-30 12:45:00', 3450, 36, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_flight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `id_user`, `id_flight`) VALUES
(1, 84, 6),
(2, 84, 7),
(3, 83, 7),
(4, 83, 7),
(5, 83, 11),
(6, 83, 7),
(7, 84, 9),
(8, 84, 11),
(9, 84, 6),
(10, 53, 9),
(11, 53, 10),
(12, 53, 13),
(13, 83, 13);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'sif eddine', 'allo', '$2y$12$bxEo5LRyYG9K/w2ynjDCDu9feYwW98U344vBptsx6c4cZR1m4afrq', 'user'),
(2, 'sami', 'alloo', '$2y$12$XmqbidySPdjEjWYwkY3jXekTi1/TSVzeP5q0MAPipUJzPd7CmayVu', 'user'),
(3, 'sif eddine', 'sif1414', '$2y$12$Lo77mIOJ7DACD.lNPk98neunNjBKUewjY4iH6Sl69kvf.eSUxBPmS', 'user'),
(5, 'karim', 'karim1', 'karim1', 'user'),
(46, 'sif eddine', 'sif', '$2y$12$kKu65nBeoMvB8Ab/mI.zWuZzogWfqBQ9UBapMnDDj268EJhVd0pwa', 'user'),
(47, 'sldksl', 'rabii', '$2y$12$L469gz0lbAhqqx.FYLGEmubp5j5.eRNAXa61utZ8hptwTkb.S4pua', 'user'),
(48, 'sami', 'kar', '$2y$12$SPffMdsXDdDVr.iKJG5UOu2zgou6kwl76yxNxRjDy3O81pPtxHkhO', 'user'),
(49, 'kaled', 'kaled1', '$2y$12$VqkwNqgPKnW3elZ6cqWNAuija7hn6GxwtjQWLG1EEudDSj3JHY1cO', 'user'),
(51, 'sami', 'eeee', '$2y$12$fvmwzXINwpcBMfiOwgrLzePeWIr/LeW/nftRFjN6LevjJnDTfMLaK', 'user'),
(53, 'rrr', 'rrr', '$2y$12$St9q3bHROrZTJc8.7LwFPOs/1KaKvO8G.D96m4krzuAaApRPoXOqG', 'user'),
(55, 'eee', 'rrrr', '$2y$12$nXGrFk4JY18nup.G0SSmHOTFvIuO6zgp14M0XIUBylH12gOzz16NK', 'user'),
(57, 'sif eddine', 'ggg', '$2y$12$wD/EwkpL0ILkA8FSXAYyJ.jEIWHvICUWYTv2MOtSJEmMPIuOk1Cru', 'user'),
(61, 'ssss', 'sss', '$2y$12$UbdA/IdzyKUAJCxBNQJm2uUsjveiJvHrFszxF88/xvwskUQzQJ0Li', 'user'),
(62, 'sami', 'hhh', '$2y$12$qX6eW/Kph9Dr0AcUbwyQkOTfbTTR.Y7S7AmYbBY9l40npUjpn/5Ba', 'user'),
(63, 'sami', 'kayy', '$2y$12$7PTsWUMLmJ/uRaSQn0UVCOW61Nzncv1G/S5p95uHu6S8loDFSrEmO', 'user'),
(64, 'sami', 'si', '$2y$12$/0UW5U/mKT2431s.0ALnd.JLe8JF.oUA7qUVG/qQosHBKJqfAEpui', 'user'),
(66, 'sami', 'allpp', '$2y$12$aTW2PxFXitFp.XPaSK4HQuy.VvW6XQ5eG7oqAVLeSrjZKxKCZFY9C', 'user'),
(69, 'sami', 'karimERE', '$2y$12$s0s6JiYiQjY/WGRpWnKrbuHgu2k88eOqTH.er.4susZxgWIiWBv9a', 'user'),
(72, 'aeraze', 'allohhh', '$2y$12$cbL/K695Bmx92VnsgWkJJ.sumDYaE4fblgUwXDn1os0KrEcgN4i/m', 'user'),
(75, 'sldksl', 'oakeoz', '$2y$12$9H1828E8i/X52peJAnvuEOIAg4GxXB/3aFqG1M5Ixfqo6elYuBsW6', 'user'),
(77, 'sami', 'pppp', '$2y$12$74W5So.EMGJWj/BmB1DB2eJBe1fMfhYo7IA4Q2VXtMIdNaJKK7avy', 'user'),
(79, 'zdaze', 'azez', '$2y$12$m6df/swR2Z5hW3S/VW0Oc.jWGC1F/I0a6RpPZbfoO41l.qkKrMbxi', 'user'),
(80, 'jjj', 'jjj', '$2y$12$cWm5kcf0P4o36UPizUvJCODWajapz1lDvCxzAltQAI93OnYvtK8Ve', 'admin'),
(83, 'uuu', 'uuu', '$2y$12$ZVjJLjE3AcMQfenDUTGBYeph0XBCBnoOp8m6QqjwEgZmevrSdRz4K', 'user'),
(84, 'mmm', 'mmm', '$2y$12$dmEcgKzTRyGyYFBc6G3QFO0OH2lIjaYbzfn0eGVv1W0oTKhQFSDny', 'user'),
(85, 'sds', 'sds', '$2y$12$gWNXDLcF/iAJKRMLsVktmOWrA649VCEC3czjciaauTHnH3OIe4dbC', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_flight` (`id_flight`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_value` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`id_flight`) REFERENCES `flights` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
