-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Avril 2018 à 10:36
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pp_rodez`
--

--
-- Contenu de la table `projet`
--

INSERT INTO `projet` (`pro_id`, `pro_nom`, `pro_description`, `pro_image`, `pro_deadline`, `pro_date`, `pro_statut`, `pro_util_id`) VALUES
(1, 'projet_test_1', 'ceci est un test_1', 'images/logo.jpg', NULL, NULL, NULL, NULL),
(2, 'projet_test_2', 'ceci est un test_2', 'images/logo.jpg', NULL, NULL, NULL, NULL),
(3, 'projet_test_3', 'ceci est un test_3', 'images/logo.jpg', NULL, NULL, NULL, NULL),
(4, 'projet_test_4', 'ceci est un test_4', 'images/logo.jpg', NULL, NULL, NULL, NULL),
(5, 'projet_test_5', 'ceci est un test_5', 'images/logo.jpg', NULL, NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
