-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 20 avr. 2023 à 15:11
-- Version du serveur : 8.0.32-0ubuntu0.22.04.2
-- Version de PHP : 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discoding`
--

-- --------------------------------------------------------

--
-- Structure de la table `channel`
--

CREATE TABLE `channel` (
  `id` int NOT NULL,
  `name_channel` text NOT NULL,
  `id_server` int NOT NULL,
  `date_channel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'poi', 'poi@factory.fr', 'poi', 'poi'),
(2, 'poi', 'poi@factory.fr', 'poi', 'poi'),
(3, 'poi', 'poi@factory.fr', 'poi', 'poiiuyy'),
(4, 'TOP', 'coding@factory.fr', 'Nouveau message de contact', 'k,k'),
(5, 'TOP', 'coding@factory.fr', 'Nouveau message de contact', 'k,k'),
(6, 'poi', 'coding@factory.fr', 'Nouveau message de contact', 'zjz'),
(7, 'frfr', 'coding@factory.fr', 'Nouveau message de contact', '123'),
(8, 'frfr', 'coding@factory.fr', 'Nouveau message de contact', '123'),
(9, 'ewe', 'a@d.com', 'Nouveau message de contact', '<e<'),
(10, 'dd', 'dds@gmail.com', 'Nouveau message de contact', 'oeie'),
(11, 'dd', 'dds@gmail.com', 'Nouveau message de contact', 'oeie'),
(12, 'TP', 'szd@gmail.com', 'Nouveau message de contact', '123HDBJ'),
(13, 'qsds', 'dd@com.com', 'Nouveau message de contact', 'eeffefeef');

-- --------------------------------------------------------

--
-- Structure de la table `conversations`
--

CREATE TABLE `conversations` (
  `id` int NOT NULL,
  `user1_id` int NOT NULL,
  `user2_id` int NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `conversations`
--

INSERT INTO `conversations` (`id`, `user1_id`, `user2_id`, `updated_at`) VALUES
(1, 1, 2, '2021-05-11 08:42:21'),
(5, 3, 1, '2021-05-11 13:31:20');

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE `friends` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `friend_user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_user_id`) VALUES
(1, 1, 2),
(4, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int NOT NULL,
  `conversation_id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `conversation_id`, `user_id`, `content`, `created_at`) VALUES
(1, 1, 1, 'Hello there !', '2021-05-11 12:50:09'),
(2, 1, 2, 'Hi back !', '2021-05-11 12:51:09'),
(10, 1, 1, 'Bonjour test 1 ! ', '2023-04-18 10:35:59');

-- --------------------------------------------------------

--
-- Structure de la table `message_ channel`
--

CREATE TABLE `message_ channel` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `message` text NOT NULL,
  `message_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `servers`
--

CREATE TABLE `servers` (
  `id_server` int NOT NULL,
  `name_server` text NOT NULL,
  `icon_url` text NOT NULL,
  `date_creation` date NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `avatar_url`) VALUES
(1, 'coding@factory.fr', 'coding', '123456', 'https://media-exp1.licdn.com/dms/image/C560BAQFveTMznUt80w/company-logo_200_200/0/1606411224030?e=2159024400&v=beta&t=Q_n0Ieldw9WSqZs5sNwqS4cfTKRJW1nmud2xhjRrgZM'),
(2, 'robin@factory.fr', 'robin', 'robin', 'https://i.pinimg.com/originals/92/57/8a/92578adbf3632f085bffdc00c0eccb47.jpg'),
(3, 'bob@bob.com', 'bob', 'bob', NULL),
(82, 'apenin@factory.fr', 'apenin#0acd', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL),
(83, 'testvendredi@factory.fr', 'test#b4f6', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL),
(84, 'test1@factory.fr', 'testtest1#b978', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `channel`
--
ALTER TABLE `channel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_conversations_to_user1_id` (`user1_id`),
  ADD KEY `fk_conversations_to_user2_id` (`user2_id`);

--
-- Index pour la table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_friends_to_user_id` (`user_id`),
  ADD KEY `fk_friends_to_friend_user_id` (`friend_user_id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_messages_to_conversation_id` (`conversation_id`),
  ADD KEY `fk_messages_to_user_id` (`user_id`);

--
-- Index pour la table `message_ channel`
--
ALTER TABLE `message_ channel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `servers`
--
ALTER TABLE `servers`
  ADD PRIMARY KEY (`id_server`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `channel`
--
ALTER TABLE `channel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `message_ channel`
--
ALTER TABLE `message_ channel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `servers`
--
ALTER TABLE `servers`
  MODIFY `id_server` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `fk_to_user1_id` FOREIGN KEY (`user1_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to_user2_id` FOREIGN KEY (`user2_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `fk_to_friend_user_id` FOREIGN KEY (`friend_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_to_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `fk_messages_to_conversation_id` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_messages_to_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
