-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 15 oct. 2023 à 22:21
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20231014112250', '2023-10-14 14:11:38', 95),
('DoctrineMigrations\\Version20231014121319', '2023-10-14 14:13:27', 75),
('DoctrineMigrations\\Version20231015095847', '2023-10-15 11:58:57', 95),
('DoctrineMigrations\\Version20231015111513', '2023-10-15 13:15:37', 72),
('DoctrineMigrations\\Version20231015192912', '2023-10-15 21:29:30', 70),
('DoctrineMigrations\\Version20231015195549', '2023-10-15 21:55:59', 61);

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `title`, `image`, `author`, `category`, `date`, `quantity`) VALUES
(19, 'l\'art de la guerre', 'https://m.media-amazon.com/images/I/61gi9XB57pL._SL1220_.jpg', 'Sun Tzu', 'non-fiction', 'Ve siècle av. J.-C.', 0),
(20, ' Les Naufragés du Wager', 'https://m.media-amazon.com/images/I/41F8d6sY-FL._SX195_.jpg', 'David Grann', 'non-fiction', '18 avril 2023', 12),
(21, 'Le jardin des oiseaux', 'https://www.babelio.com/couv/CVT_Le-jardin-des-oiseaux_188.jpg', 'Jean Louis Lovisa', 'non-fiction', '20 septembre2023', 20),
(22, 'Titeuf, tome 18 : Suivez la mèche', 'https://m.media-amazon.com/images/I/51aU+JkaKaL._SX195_.jpg', 'ZEP', 'bande dessinée', 'août 2023', 5),
(23, 'Les Bijoux de la Castafiore', 'https://www.babelio.com/couv/CVT_Les-Bijoux-de-la-Castafiore-edition-du-Journal-de-_2077.jpg', 'Hergé', 'bande dessinée', '4 septembre 1962', 0),
(24, 'Les Guerres de Lucas', 'https://www.babelio.com/couv/CVT_Les-Guerres-de-Lucas_984.jpg', 'Renaud Roche', 'bande dessinée', '4 octobre 2023', 10),
(25, 'One Piece, tome 105 : Le rêve de Luffy', 'https://www.babelio.com/couv/CVT_One-Piece-tome-105_787.jpg', 'Eiichirô Oda', 'manga', '30 septembre 2023', 100),
(26, 'My Hero Academia, tome 1', 'https://www.babelio.com/couv/CVT_My-Hero-Academia-tome-1_2849.jpg', 'Kôhei Horikoshi', 'manga', '4 novembre 2014', 25),
(27, 'Dragon Ball Super, tome 20', 'https://www.babelio.com/couv/CVT_Dragon-Ball-Super-tome-20_4187.jpg', 'Akira Toriyama ', 'manga', '23 août 2023', 14);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`)),
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`) VALUES
(3, 'mickael@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$b1kyM0dkdTRMUTJYY3NUag$UIQ/GH+57i43vnWL7MWAgB0S2/YymMS2Brh4IHcbAvk');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
