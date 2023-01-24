-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 24 Janvier 2023 à 10:34
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `grpa-5-gamebox`
--
CREATE DATABASE IF NOT EXISTS `grpa-5-gamebox` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grpa-5-gamebox`;

-- --------------------------------------------------------

--
-- Structure de la table `admin_gestion`
--

CREATE TABLE `admin_gestion` (
  `theme_title` varchar(100) NOT NULL,
  `navbar_color` varchar(7) NOT NULL,
  `bg_color` varchar(7) NOT NULL,
  `font_family` text NOT NULL,
  `font_family_2` text NOT NULL,
  `month` varchar(10) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `cgv` text NOT NULL
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
-- Structure de la table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payment_status` text NOT NULL,
  `payment_amount` text NOT NULL,
  `payment_currency` text NOT NULL,
  `payment_date` datetime NOT NULL,
  `payer_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Index pour les tables exportées
--

--
-- Index pour la table `admin_gestion`
--
ALTER TABLE `admin_gestion`
  ADD KEY `user_email` (`user_email`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `product_id` (`product_id`);

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
-- Index pour la table `payments`
--
ALTER TABLE `payments`
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
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
