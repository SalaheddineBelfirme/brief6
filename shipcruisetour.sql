-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 02:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shipcruisetour`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `num_chambre` int(11) NOT NULL,
  `id_navire` int(11) NOT NULL,
  `id_ty_chombre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`num_chambre`, `id_navire`, `id_ty_chombre`) VALUES
(1, 29, 2),
(2, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `croisiere`
--

CREATE TABLE `croisiere` (
  `id_croisiere` int(11) NOT NULL,
  `nb_nuits` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `navire` int(11) NOT NULL,
  `port_de_depart` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `datee` datetime DEFAULT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `croisiere`
--

INSERT INTO `croisiere` (`id_croisiere`, `nb_nuits`, `image`, `navire`, `port_de_depart`, `name`, `datee`, `prix`) VALUES
(135, 5, '63c34d8e81929.jpg', 29, '20', 'morcros', '1999-02-23 16:40:00', 9999),
(137, 3, '63cc5762a80d9.jpg', 30, '19', 'sin', '2023-01-21 22:21:00', 123),
(139, 3, '63cc5852722d7.jpg', 30, '18', 'salah-eddine belfirmem,bwn', '2023-04-05 22:24:00', 1231),
(142, 3, '63d6fdd774b99.jpg', 30, '19', 'srdf', '2023-01-30 00:14:00', 123),
(143, 22, '63d6fe4bc0fa0.png', 30, '19', 'dftyg', '2023-02-28 00:15:00', 2345);

-- --------------------------------------------------------

--
-- Table structure for table `navire`
--

CREATE TABLE `navire` (
  `id_navire` int(11) NOT NULL,
  `nameN` varchar(60) NOT NULL,
  `nb_chombre` int(11) NOT NULL,
  `nb_place` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `navire`
--

INSERT INTO `navire` (`id_navire`, `nameN`, `nb_chombre`, `nb_place`) VALUES
(29, 'navier', 300, 1000),
(30, 'navier3', 400, 700);

-- --------------------------------------------------------

--
-- Table structure for table `port`
--

CREATE TABLE `port` (
  `id_port` int(11) NOT NULL,
  `nameP` varchar(100) NOT NULL,
  `pays` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `port`
--

INSERT INTO `port` (`id_port`, `nameP`, `pays`) VALUES
(17, 'port1', 'Qui nisi magnam modi'),
(18, 'port2', 'Exercitation volupta'),
(19, 'port3', 'Pariatur Eaque aut '),
(20, 'port5', 'moroco');

-- --------------------------------------------------------

--
-- Table structure for table `prot_croisi`
--

CREATE TABLE `prot_croisi` (
  `id_port` int(11) NOT NULL,
  `id_croisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prot_croisi`
--

INSERT INTO `prot_croisi` (`id_port`, `id_croisi`) VALUES
(17, 135),
(17, 137),
(17, 139),
(17, 142),
(17, 143),
(18, 135),
(18, 137),
(18, 139),
(18, 142),
(18, 143),
(19, 135),
(19, 137),
(19, 139),
(19, 142),
(19, 143),
(20, 137);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_chambre` int(11) DEFAULT NULL,
  `date_reseravation` date DEFAULT NULL,
  `prix_reservation` float DEFAULT NULL,
  `id_croisiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_client`, `id_chambre`, `date_reseravation`, `prix_reservation`, `id_croisiere`) VALUES
(1, 1, 1, '2011-11-11', 1233, 135);

-- --------------------------------------------------------

--
-- Table structure for table `type _chambre`
--

CREATE TABLE `type _chambre` (
  `id_ty_chombre` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type _chambre`
--

INSERT INTO `type _chambre` (`id_ty_chombre`, `type`, `prix`) VALUES
(1, 'solo', 100),
(2, 'duo', 200),
(3, 'famliy', 500);

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `id_user` int(11) NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `passwordd` varchar(60) NOT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`id_user`, `Nom`, `prenom`, `email`, `passwordd`, `role`) VALUES
(1, 'belfirme', 'salaheddine', 'salah@gmail.com', '', 1),
(2, 'salah', 'belfirme', 'salah@gmail.com', '123', 1),
(3, 'amine', 'sss', 'amine@gamil.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_croisiere`
--

CREATE TABLE `user_croisiere` (
  `id_user` int(11) NOT NULL,
  `id_croisiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`num_chambre`),
  ADD KEY `id_navire` (`id_navire`),
  ADD KEY `id_ty_chombre` (`id_ty_chombre`);

--
-- Indexes for table `croisiere`
--
ALTER TABLE `croisiere`
  ADD PRIMARY KEY (`id_croisiere`),
  ADD KEY `croisiere_ibfk_1` (`navire`);

--
-- Indexes for table `navire`
--
ALTER TABLE `navire`
  ADD PRIMARY KEY (`id_navire`);

--
-- Indexes for table `port`
--
ALTER TABLE `port`
  ADD PRIMARY KEY (`id_port`);

--
-- Indexes for table `prot_croisi`
--
ALTER TABLE `prot_croisi`
  ADD PRIMARY KEY (`id_port`,`id_croisi`),
  ADD KEY `id_croisi` (`id_croisi`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `fk_croisier` (`id_croisiere`),
  ADD KEY `fk_client` (`id_client`),
  ADD KEY `FK_CHOMBRE` (`id_chambre`);

--
-- Indexes for table `type _chambre`
--
ALTER TABLE `type _chambre`
  ADD PRIMARY KEY (`id_ty_chombre`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_croisiere`
--
ALTER TABLE `user_croisiere`
  ADD PRIMARY KEY (`id_user`,`id_croisiere`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `num_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `croisiere`
--
ALTER TABLE `croisiere`
  MODIFY `id_croisiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `navire`
--
ALTER TABLE `navire`
  MODIFY `id_navire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `port`
--
ALTER TABLE `port`
  MODIFY `id_port` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type _chambre`
--
ALTER TABLE `type _chambre`
  MODIFY `id_ty_chombre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `userr`
--
ALTER TABLE `userr`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_navire`) REFERENCES `navire` (`id_navire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chambre_ibfk_2` FOREIGN KEY (`id_ty_chombre`) REFERENCES `type _chambre` (`id_ty_chombre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `croisiere`
--
ALTER TABLE `croisiere`
  ADD CONSTRAINT `croisiere_ibfk_1` FOREIGN KEY (`navire`) REFERENCES `navire` (`id_navire`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prot_croisi`
--
ALTER TABLE `prot_croisi`
  ADD CONSTRAINT `prot_croisi_ibfk_1` FOREIGN KEY (`id_croisi`) REFERENCES `croisiere` (`id_croisiere`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `prot_croisi_ibfk_2` FOREIGN KEY (`id_port`) REFERENCES `port` (`id_port`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK_CHOMBRE` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`num_chambre`),
  ADD CONSTRAINT `fk_client` FOREIGN KEY (`id_client`) REFERENCES `userr` (`id_user`),
  ADD CONSTRAINT `fk_croisier` FOREIGN KEY (`id_croisiere`) REFERENCES `croisiere` (`id_croisiere`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
