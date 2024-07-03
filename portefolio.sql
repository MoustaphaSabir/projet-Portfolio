-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 03 juil. 2024 à 09:10
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `portefolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date_soumission` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `prenom`, `email`, `telephone`, `message`, `date_soumission`) VALUES
(10, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', '0605954312', 'qssqqs', '2024-06-17 12:47:02'),
(11, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', '0605954312', 'iooi', '2024-06-17 12:59:49'),
(12, 'Moussa', 'Moustapha', 'moustaphasabirmoussa61@gmail.com', '0605954312', 'Helolo world , how are you ?', '2024-06-24 11:34:04');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id_projet` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `image-1` varchar(250) NOT NULL,
  `image-2` varchar(250) NOT NULL,
  `image-3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id_projet`, `titre`, `image`, `description`, `url`, `image-1`, `image-2`, `image-3`) VALUES
(3, 'CENTRE DE FORMATION INFO-TECH', 'images/image-centre/formation.png', 'Formation Microsoft Office : Word, Excel, PowerPoint , Access.\r\nObjectif :\r\nMaîtriser les fonctionnalités de Word, Excel, et PowerPoint pour créer des documents, analyser des données, et concevoir des présentations professionnelles.\r\n\r\nContenu :\r\nWor', '', 'images/image-centre/detail.png', 'images/image-centre/devis.png', ''),
(22, 'BOULANGERIE-PATISSERIE', 'images/images-boulanger-patisserie/Capture dl’écran acceuil.png', 'Située au cœur de la ville, Le Moulin est une boulangerie-pâtisserie artisanale où chaque produit est confectionné avec passion et savoir-faire. Nous croyons en l’importance de la tradition et de l\'authenticité, ce qui se reflète dans chaque pain cro', '', 'images/images-boulanger-patisserie/Capture patisserie.png ', 'images/images-boulanger-patisserie/contact.png', 'images/images-boulanger-patisserie/Capture d’écran 2024-06-19 135730.png'),
(25, 'PAtisserie', 'images/image-centre/detail.png', 'gvzqjf', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
