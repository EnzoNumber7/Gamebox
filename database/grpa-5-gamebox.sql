-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Janvier 2023 à 17:22
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa-5-gamebox`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_gestion`
--

CREATE TABLE `admin_gestion` (
  `theme_title` varchar(100) NOT NULL,
  `bg_image` text NOT NULL,
  `main_color` text CHARACTER SET utf8 NOT NULL,
  `title_font` text CHARACTER SET utf8 NOT NULL,
  `main_font` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `box`
--

CREATE TABLE `box` (
  `id_product_1` int(11) NOT NULL,
  `id_product_2` int(11) NOT NULL,
  `id_product_3` int(11) NOT NULL,
  `id_product_4` int(11) NOT NULL,
  `id_product_5` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `box`
--

INSERT INTO `box` (`id_product_1`, `id_product_2`, `id_product_3`, `id_product_4`, `id_product_5`, `stock`) VALUES
(1, 2, 3, 4, 5, 250);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `object` text NOT NULL,
  `text` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `qte` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `img_2` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `products`
--

INSERT INTO `products` (`id`, `img`, `name`, `description`, `img_2`) VALUES
(1, 'img/deadbydaylight.jpg', 'Dead by Daylight', 'Jeu de survival d’horreur, multijoueur sorti en 2016. Sur le principe du cache-cache, tueurs et survivants s’affrontent. Vous pourrez choisir votre personnage ainsi que votre camps pour prendre part à la bataille.', 'img/dbd.jpg'),
(2, 'img/pj.jpg', 'Pumpkin Jack', 'Platformer 3D indépendant sortien 2020. A travers des paysages fantastiques et au travers d’un univers effrayant et amusant incarnez Jack, le seigneur à la tête de citrouille pour l’aider à triompher du bien.', 'img/pumpkinjack.jpg'),
(3, 'img/sh.jpg', 'T-Shirt Silent Hill', '', 'img/sh.jpg'),
(4, 'img/nendoroid.jpg', 'Nendoroid Le Piégeur', '', 'img/nendoroid.jpg'),
(5, 'img/mystery.png', 'Goodies Mystère', '', 'img/mystery.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`email`, `password`, `admin`) VALUES
('t', '5f8bdda8d653b377ab6523ca14225b50', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `box`
--
ALTER TABLE `box`
  ADD KEY `id_product_1` (`id_product_1`),
  ADD KEY `id_product_2` (`id_product_2`),
  ADD KEY `id_product_3` (`id_product_3`),
  ADD KEY `id_product_4` (`id_product_4`),
  ADD KEY `id_product_5` (`id_product_5`),
  ADD KEY `stock` (`stock`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD KEY `email` (`email`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Métadonnées
--
USE `phpmyadmin`;

--
-- Métadonnées pour admin_gestion
--

--
-- Métadonnées pour box
--

--
-- Métadonnées pour contact
--

--
-- Métadonnées pour payment
--

--
-- Métadonnées pour products
--

--
-- Métadonnées pour user
--

--
-- Métadonnées pour grpa-5-gamebox
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
