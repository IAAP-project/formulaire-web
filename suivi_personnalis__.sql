-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2021 at 12:47 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suivi personnalisé`
--

-- --------------------------------------------------------

--
-- Table structure for table `consommation`
--

CREATE TABLE `consommation` (
  `id_conso` int(11) NOT NULL,
  `sucre` int(11) NOT NULL,
  `sel` int(11) NOT NULL,
  `medicament` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `identite`
--

CREATE TABLE `identite` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `naissance` date NOT NULL,
  `poids` float NOT NULL,
  `taille` int(11) NOT NULL,
  `conso` int(11) NOT NULL,
  `sport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sante`
--

CREATE TABLE `sante` (
  `id_sante` int(11) NOT NULL,
  `maladie` text NOT NULL,
  `symptome` text NOT NULL,
  `conseil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `id_sport` int(11) NOT NULL,
  `activite` int(11) NOT NULL,
  `tension` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identite`
--
ALTER TABLE `identite`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
