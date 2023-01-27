-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 27 Janvier 2023 à 14:32
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
  `bg_image` text NOT NULL
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
  `id` int(11) NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `payed` tinyint(1) NOT NULL DEFAULT '0'
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
('b', 'b51006a2ff53aeba12ace847c4966c8f', 1),
('c', '9e47a093203e76071bfc0145e45ab310', 1),
('d', 'f8b196494d0a5cacda588686e8d6f31c', 1),
('e', '6d382695b8fac7f0e0e3b9d2bc1e13b0', 0),
('f', '27e7dc484d183d6ea718cc86b0f25cdf', 0),
('g', '8d0718022bf53d0830e1d00613c9e2e9', 0),
('h', 'c4b1a755ddcb11a356660035bd8674a9', 0),
('i', '9f605d4e70d01e2400c258d35b4f08e8', 0),
('j', '200449384d99310f7be2744cf5d80156', 0),
('k', 'b2c4789b09c5921c8ed2ca485b945fcd', 0),
('l', 'ed5d1646053647ac3594fe752da8d254', 0),
('m', '7a734d71ce57e5a0d180e84045dc6318', 0),
('n', 'd43e132f8ec57c3079af8726b7b0f441', 0),
('o', 'a72e8d84af2246b93669cff80b9174e7', 0),
('p', '797e1b7a573194a692cff4e1e630c0de', 0),
('q', '1cb028c30e9a5e1eda0858da3c6edde8', 1),
('r', '7203ad78a5281b13f5fd3e5e045e0f21', 0),
('s', '40d62b360517872e3e2cb5d6bb462da1', 0),
('t', '5f8bdda8d653b377ab6523ca14225b50', 0),
('u', '03b77d37b0911a34733bbc950da40cb0', 0),
('v', '74817cd1e633c7c85cffb266d2a7995b', 0),
('w', 'a4671d3bba067bc917977227cbc42c79', 0),
('x', '1dd900f1d50dc1d98aad94290a2d1e36', 0),
('y', 'dcfb98e5ac62962ec980378fc8a5d690', 0),
('z', '26d95af4e6217d871b09ac166eae9984', 0);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_2` (`user_email`),
  ADD KEY `user_email` (`user_email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
