-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 29 Mars 2018 à 15:35
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

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `avis_id` int(11) NOT NULL,
  `avis_commentaire` varchar(200) DEFAULT NULL,
  `avis_util_id` int(11) DEFAULT NULL,
  `avis_pro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `comm_id` int(11) NOT NULL,
  `comm_comment` varchar(200) DEFAULT NULL,
  `comm_util_id_dest` int(11) DEFAULT NULL,
  `comm_util_id_exp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contribution`
--

CREATE TABLE `contribution` (
  `contrib_util_id` int(11) NOT NULL,
  `contrib_pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_news` varchar(200) DEFAULT NULL,
  `post_util_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `projet`
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

-- --------------------------------------------------------

--
-- Structure de la table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tag_pro`
--

CREATE TABLE `tag_pro` (
  `tag_pro_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tag_util`
--

CREATE TABLE `tag_util` (
  `tag_util_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `util_id` int(11) NOT NULL,
  `util_nom` varchar(50) DEFAULT NULL,
  `util_prenom` varchar(50) DEFAULT NULL,
  `util_email` varchar(100) DEFAULT NULL,
  `util_mdp` varchar(25) DEFAULT NULL,
  `util_pseudo` varchar(25) DEFAULT NULL,
  `util_avatar` varchar(200) DEFAULT NULL,
  `util_notif` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`avis_id`),
  ADD KEY `FK_avis_util_id` (`avis_util_id`),
  ADD KEY `FK_avis_pro_id` (`avis_pro_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`comm_id`),
  ADD KEY `FK_commentaire_util_id` (`comm_util_id_dest`),
  ADD KEY `FK_commentaire_util_id_utilisateur` (`comm_util_id_exp`);

--
-- Index pour la table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`contrib_util_id`,`contrib_pro_id`),
  ADD KEY `FK_contribution_pro_id` (`contrib_pro_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `FK_post_util_id` (`post_util_id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `FK_projet_util_id` (`pro_util_id`);

--
-- Index pour la table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`);

--
-- Index pour la table `tag_pro`
--
ALTER TABLE `tag_pro`
  ADD PRIMARY KEY (`tag_pro_id`,`tag_id`),
  ADD KEY `FK_tag_pro_tag_id` (`tag_id`);

--
-- Index pour la table `tag_util`
--
ALTER TABLE `tag_util`
  ADD PRIMARY KEY (`tag_util_id`,`tag_id`),
  ADD KEY `FK_tag_util_tag_id` (`tag_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`util_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `avis_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `comm_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tag`
--
ALTER TABLE `tag`
  MODIFY `tag_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `util_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `FK_avis_pro_id` FOREIGN KEY (`avis_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_avis_util_id` FOREIGN KEY (`avis_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_commentaire_util_id` FOREIGN KEY (`comm_util_id_dest`) REFERENCES `utilisateur` (`util_id`),
  ADD CONSTRAINT `FK_commentaire_util_id_utilisateur` FOREIGN KEY (`comm_util_id_exp`) REFERENCES `utilisateur` (`util_id`);

--
-- Contraintes pour la table `contribution`
--
ALTER TABLE `contribution`
  ADD CONSTRAINT `FK_contribution_pro_id` FOREIGN KEY (`contrib_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_contribution_util_id` FOREIGN KEY (`contrib_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `FK_post_util_id` FOREIGN KEY (`post_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `FK_projet_util_id` FOREIGN KEY (`pro_util_id`) REFERENCES `utilisateur` (`util_id`);

--
-- Contraintes pour la table `tag_pro`
--
ALTER TABLE `tag_pro`
  ADD CONSTRAINT `FK_tag_pro_pro_id` FOREIGN KEY (`tag_pro_id`) REFERENCES `projet` (`pro_id`),
  ADD CONSTRAINT `FK_tag_pro_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);

--
-- Contraintes pour la table `tag_util`
--
ALTER TABLE `tag_util`
  ADD CONSTRAINT `FK_tag_util_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`),
  ADD CONSTRAINT `FK_tag_util_util_id` FOREIGN KEY (`tag_util_id`) REFERENCES `utilisateur` (`util_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
