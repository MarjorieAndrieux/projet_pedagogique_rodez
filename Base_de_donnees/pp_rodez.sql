-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 03:03 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pp_rodez`
--

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `avis_id` int(11) NOT NULL,
  `avis_commentaire` varchar(200) DEFAULT NULL,
  `avis_util_id` int(11) DEFAULT NULL,
  `avis_pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `comm_id` int(11) NOT NULL,
  `comm_comment` varchar(200) DEFAULT NULL,
  `comm_util_id_dest` int(11) DEFAULT NULL,
  `comm_util_id_exp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`comm_id`, `comm_comment`, `comm_util_id_dest`, `comm_util_id_exp`) VALUES
(1, 'C\'est top ton projet!', 1, 2),
(2, 'C\'est naze ton projet!', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE `contribution` (
  `contrib_util_id` int(11) NOT NULL,
  `contrib_pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_news` varchar(200) DEFAULT NULL,
  `post_util_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `pro_id` int(11) NOT NULL,
  `pro_nom` varchar(50) DEFAULT NULL,
  `pro_description` varchar(200) DEFAULT NULL,
  `pro_image` varchar(200) DEFAULT NULL,
  `pro_deadline` date DEFAULT NULL,
  `pro_date` datetime DEFAULT NULL,
  `pro_statut` tinyint(1) DEFAULT NULL,
  `pro_util_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projet`
--

INSERT INTO `projet` (`pro_id`, `pro_nom`, `pro_description`, `pro_image`, `pro_deadline`, `pro_date`, `pro_statut`, `pro_util_id`) VALUES
(1, 'projet_test_1', 'ceci est un test_1', 'images/fond1.jpg', '2018-04-12', '2018-04-01 00:00:00', 0, 1),
(2, 'projet_test_2', 'ceci est un test_2', 'images/fond2.jpg', '2018-05-12', '2018-04-02 00:00:00', 0, 2),
(3, 'projet_test_3', 'ceci est un test_3', 'images/fond3.jpg', '2018-06-12', '2018-04-03 00:00:00', 1, 1),
(4, 'projet_test_4', 'ceci est un test_4', 'images/fond4.jpg', '2018-07-12', '2018-03-30 00:00:00', 1, 2),
(5, 'projet_test_5', 'ceci est un test_5', 'images/fond5.jpg', '2018-08-12', '2018-03-31 00:00:00', 1, 1),
(6, 'projet_test_6', 'Bla bla bla 6', 'images/banana_phone.jpg', '2018-04-04', '2018-04-04 00:00:00', 0, NULL),
(7, 'projet_test_7', 'oiuzgoieng ozine 7', 'images/reggae_shark.jpg', '2018-04-05', '2018-04-05 00:00:00', 1, NULL),
(8, 'projet_test_8', 'azeaze 8', 'images/langage.jpg', '2018-04-30', '2018-04-06 00:00:00', 1, NULL),
(9, 'projet_test_9', 'blip bloup 9', 'images/fond1.jpg', '2018-04-05', '2018-04-07 00:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_nom`) VALUES
(7, 'Illustration'),
(8, 'Graphic design'),
(9, 'Photography'),
(10, 'Motion'),
(11, 'Architecture'),
(12, 'Fashion'),
(13, 'Fine art'),
(14, 'Game design'),
(15, 'Sound');

-- --------------------------------------------------------

--
-- Table structure for table `tag_pro`
--

CREATE TABLE `tag_pro` (
  `tag_pro_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_pro`
--

INSERT INTO `tag_pro` (`tag_pro_id`, `tag_id`) VALUES
(2, 7),
(4, 7),
(5, 8),
(1, 9),
(4, 9),
(3, 10),
(1, 11),
(4, 12),
(2, 13),
(2, 14),
(5, 14),
(3, 15),
(5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tag_util`
--

CREATE TABLE `tag_util` (
  `tag_util_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tag_util`
--

INSERT INTO `tag_util` (`tag_util_id`, `tag_id`) VALUES
(1, 7),
(1, 8),
(2, 8),
(1, 9),
(2, 9),
(1, 11),
(2, 13),
(2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `util_id` int(11) NOT NULL,
  `util_nom` varchar(50) DEFAULT NULL,
  `util_prenom` varchar(50) DEFAULT NULL,
  `util_email` varchar(100) DEFAULT NULL,
  `util_mdp` varchar(25) DEFAULT NULL,
  `util_pseudo` varchar(25) DEFAULT NULL,
  `util_avatar` varchar(200) DEFAULT NULL,
  `util_notif` tinyint(1) DEFAULT NULL,
  `util_description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`util_id`, `util_nom`, `util_prenom`, `util_email`, `util_mdp`, `util_pseudo`, `util_avatar`, `util_notif`, `util_description`) VALUES
(1, 'Andrieux', 'Marjorie', 'andrieux.m@live.fr', 'greenday', 'Marjo', 'images/photo_profil.jpg', 1, 'Développeuse web en formation chez Simplon.co'),
(2, 'Pineiro', 'Thomas', 'onixyros@gmail.com', 'thomas', 'Toto', 'images/fond4.jpg', 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`avis_id`),
  ADD KEY `avis_pro_id` (`avis_pro_id`) USING BTREE,
  ADD KEY `avis_util_id` (`avis_util_id`) USING BTREE;

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `commentaire_util_id` (`comm_util_id_dest`) USING BTREE,
  ADD KEY `commentaire_util_id_utilisateur` (`comm_util_id_exp`) USING BTREE;

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`contrib_util_id`,`contrib_pro_id`),
  ADD KEY `contribution_pro_id` (`contrib_pro_id`) USING BTREE;

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_util_id` (`post_util_id`) USING BTREE;

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `pro_util_id` (`pro_util_id`) USING BTREE;

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Indexes for table `tag_pro`
--
ALTER TABLE `tag_pro`
  ADD PRIMARY KEY (`tag_pro_id`,`tag_id`),
  ADD KEY `tag_pro_id` (`tag_id`) USING BTREE;

--
-- Indexes for table `tag_util`
--
ALTER TABLE `tag_util`
  ADD PRIMARY KEY (`tag_util_id`,`tag_id`),
  ADD KEY `tag_util_id` (`tag_id`) USING BTREE;

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`util_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `avis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `util_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_avis_pro_id` FOREIGN KEY (`avis_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_avis_util_id` FOREIGN KEY (`avis_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Constraints for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_commentaire_util_id` FOREIGN KEY (`comm_util_id_dest`) REFERENCES `utilisateur` (`util_id`),
  ADD CONSTRAINT `FK_commentaire_util_id_utilisateur` FOREIGN KEY (`comm_util_id_exp`) REFERENCES `utilisateur` (`util_id`);

--
-- Constraints for table `contribution`
--
ALTER TABLE `contribution`
  ADD CONSTRAINT `FK_contribution_pro_id` FOREIGN KEY (`contrib_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_contribution_util_id` FOREIGN KEY (`contrib_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_util_id` FOREIGN KEY (`post_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Constraints for table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_projet_util_id` FOREIGN KEY (`pro_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Constraints for table `tag_pro`
--
ALTER TABLE `tag_pro`
  ADD CONSTRAINT `FK_tag_pro_pro_id` FOREIGN KEY (`tag_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_tag_pro_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);

--
-- Constraints for table `tag_util`
--
ALTER TABLE `tag_util`
  ADD CONSTRAINT `FK_tag_util_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`),
  ADD CONSTRAINT `FK_tag_util_util_id` FOREIGN KEY (`tag_util_id`) REFERENCES `utilisateur` (`util_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
