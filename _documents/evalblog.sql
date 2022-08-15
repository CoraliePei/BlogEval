-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 15 août 2022 à 17:45
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `evalblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `statut` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id_article`, `titre`, `contenu`, `created_at`, `modified_at`, `statut`) VALUES
(1, 'Séjour à Quimper', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sit expedita mollitia corporis minus atque, dolorum dicta, quaerat facilis cumque ducimus recusandae, ipsa optio architecto quo ratione. Illo inventore itaque aliquam deleniti. Praesentium numquam perferendis laborum consectetur officiis corporis saepe distinctio, ratione enim adipisci rerum, quos maiores iusto! Illum, explicabo.', '2022-08-05 20:26:19', '2022-08-05 20:26:19', 'brouillon'),
(2, 'Recette de la tartre aux citrons', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sit expedita mollitia corporis minus atque, dolorum dicta, quaerat facilis cumque ducimus recusandae, ipsa optio architecto quo ratione. Illo inventore itaque aliquam deleniti. Praesentium numquam perferendis laborum consectetur officiis corporis saepe distinctio, ratione enim adipisci rerum, quos maiores iusto! Illum, explicabo.', '2022-08-05 20:28:19', '2022-08-05 20:28:19', 'brouillon'),
(3, 'Kayak en Australie', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sit expedita mollitia corporis minus atque, dolorum dicta, quaerat facilis cumque ducimus recusandae, ipsa optio architecto quo ratione. Illo inventore itaque aliquam deleniti. Praesentium numquam perferendis laborum consectetur officiis corporis saepe distinctio, ratione enim adipisci rerum, quos maiores iusto! Illum, explicabo.', '2022-08-05 20:30:19', '2022-08-05 20:30:19', 'brouillon'),
(12, 'Via Ferrata au lac de Tolla', 'Début de séjour en Corse sportif, découverte des joies de la via ferrata. \r\nDécor splendide, montagnes entourant le lac de Tolla, nous débutons la via par une légère descente sur un chemin très pentu, avant de rapidement nous retrouver à longer les rochers en escaladant complètement au dessus du vide. \r\nAventuriers que nous sommes (ou plutôt étions persuadés d\'être) nous avons pris l\'option sans guide, et donc n\'avons pas eu accès à la tyrolienne qui permettait d\'échapper à une bonne partie du parcours, mais nous avons eu droit à un super pont de singe sensationnel à la place !\r\nDeux - trois heures plus tard, alors que le soleil tape très fort en cette fin de matinée, les stocks d\'eau s\'épuisent et les pauses derrières les rares arbustes sur le passage se font on ne peut plus nécessaires. On ne perd pas espoir puisqu\'on réalise assez vite que nous sommes proches du sommet et que la fin approche à grand pas. \r\nCe fût une superbe expérience, nous en avons pris plein la vue, les obstacles étaient accessibles car nous avons tous deux l\'avantage d\'être grands, la principale difficulté fut la chaleur de mon côté et le vertige parfois pour monsieur.\r\nOn recommande à 100% !', '2022-08-15 16:28:21', '2022-08-15 16:28:21', 'publié'),
(13, 'Restaurant aux îles Sanguinaires', 'Les îles Sanguinaires sont situées sur la pointe gauche d\'Ajaccio, elles offrent un décor splendide pour les couchers de soleil. \r\nRéservé une semaine à l\'avance, nous avons eu la chance d\'avoir la table en terrasse dans le coin idéal pour être face au coucher sans être gênés par les autres tables. Nous avons très bien mangé et passé un agréable moment !', '2022-08-15 16:44:16', '2022-08-15 16:44:16', 'publié'),
(14, 'Réserve de tortues', 'Nous avons profité de notre escale à Corte pour s\'arrêter en chemin dans une réserve de tortues. \r\nDécouverte de toutes sortes de tortues, allant de très colorées, toutes bossues, au très long cou, ou à des tortues géantes de 300kg très impressionnantes ! Elles étaient  peu pudiques et copulaient dans tous les coins, mais étaient très mignonnes.', '2022-08-15 16:52:47', '2022-08-15 16:52:47', 'publié'),
(15, 'Escale à Corte, aux gorges de la Restonica', 'Nous avons fait escale une soirée au cœur de la Corse, à Corte, dans un hôtel situé à l\'entrée de la route des gorges de la Restonica, et à deux pas à pieds du vieux Corte. Les gorges offrent de magnifiques petites piscines, dans lesquelles nous sommes allés tremper les pieds, avant de se faire déloger par des guêpes attirées par notre pique-nique. Ayant eu la merveilleuse idée de céder un bout de sandwich pour qu\'elles s\'éloignent de nous, il y en a eu rapidement une 10ene tout autour puis apparition de la reine. Première fois que j\'en voyais une !\r\nAprès de nombreuses péripéties pour récupérer nos déchets sans se faire attaquer, nous nous sommes décalés plus bas dans la rivière et avons plié bagages lorsque le tonnerre a commencé à retentir. Pas de chance pour cette fois mais l\'endroit valait quand même le coup.', '2022-08-15 16:56:08', '2022-08-15 16:56:08', 'publié'),
(16, 'Visite du vieux Corte', 'Corte est un village en montagne, dont la vieille ville est très pentue et très jolie. Nous nous sommes baladés dans ses rues jusqu\'au sommet pour atteindre le point de vue, puis sommes allés visiter la citadelle qui surplombe la ville. Celle-ci est devancée par un musée qu\'il faut payer pour accéder à la visite de la citadelle, ce qui a failli nous refroidir pour son prix, mais chanceux nous sommes arrivés derrière une famille de 8 personnes qui nous ont adopté le temps d\'une visite pour avoir le tarif groupé à 10, bien que les caissiers n\'avaient pas l\'air d\'apprécier le geste. Nous avons pu discuter un peu avec eux lors de la visite, ce fût beaucoup plus drôle et sympathique!\r\nNous sommes ressortis le soir pour manger au restaurant La Rivière des Vins, qui était absolument excellent ! ', '2022-08-15 17:04:31', '2022-08-15 17:04:31', 'publié');

-- --------------------------------------------------------

--
-- Structure de la table `articles_has_categories`
--

CREATE TABLE `articles_has_categories` (
  `articles_id_article` int(11) NOT NULL,
  `categories_id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles_has_categories`
--

INSERT INTO `articles_has_categories` (`articles_id_article`, `categories_id_categorie`) VALUES
(1, 1),
(2, 2),
(3, 5),
(12, 5),
(13, 2),
(14, 1),
(15, 1),
(16, 1);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id_avis` int(11) NOT NULL,
  `utilisateurs_has_articles_utilisateurs_id_utilisateur` int(11) NOT NULL,
  `utilisateurs_has_articles_articles_id_article` int(11) NOT NULL,
  `utilisateurs_has_articles_categories_id_categorie` int(11) NOT NULL,
  `note` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id_categorie` int(11) NOT NULL,
  `intitule` varchar(25) NOT NULL,
  `couleur` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `intitule`, `couleur`) VALUES
(1, 'Voyage', '706d61'),
(2, 'Nourriture', '3a3522'),
(3, 'Lifestyle', '4f8839'),
(4, 'Association', '737771'),
(5, 'Sport', 'a9c59b');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int(11) NOT NULL,
  `commentaires_id_commentaire` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `posted_at` datetime NOT NULL,
  `modified_at` datetime NOT NULL,
  `statut` varchar(20) NOT NULL,
  `utilisateurs_has_articles_utilisateurs_id_utilisateur` int(11) NOT NULL,
  `utilisateurs_has_articles_articles_id_article` int(11) NOT NULL,
  `utilisateurs_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` char(255) NOT NULL,
  `avatar` varchar(255) DEFAULT '/path/pictures/avatar.default.png',
  `telephone` varchar(12) DEFAULT NULL,
  `UUID` varchar(45) DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'utilisateur'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `pseudo`, `email`, `mdp`, `avatar`, `telephone`, `UUID`, `role`) VALUES
(1, 'CrabySword', 'CrabySword@gmail.com', '2078ab2f5a053b9ad8054a20c43228f1438850d7', '/path/pictures/avatar.default.png', NULL, NULL, 'utilisateur'),
(24, 'admino', 'admino@gmail.com', '$2y$10$KggrFWXkaGqHyDOwT7DQY.nfxoJb1KE4qnA.t6/cnCdW5nepmctxG', '/path/pictures/avatar.default.png', NULL, NULL, 'admin'),
(37, 'adminzer', 'adminzer@gmail.com', '$2y$10$9UA1rG6GcZLlEqCxdJb7qO8h8NEcEnBY/vlaTCEQU1.XuOvN1S52C', '/path/pictures/avatar.default.png', NULL, NULL, 'admin'),
(38, 'user', 'user@gmail.com', '$2y$10$DgXCeTbmU05lepSkAFIX5.fDES4t/RdBbGHtiXrU4/EvFqbgIpBOG', '/path/pictures/avatar.default.png', NULL, NULL, 'utilisateur'),
(39, 'redacteur', 'redacteur@gmaill.com', '$2y$10$Cw8wl2OVz.AI02NUARHtXepRN/OSGljHyylKGkyV3ibOiFE6FfJha', '/path/pictures/avatar.default.png', NULL, NULL, 'redacteur'),
(40, 'admin', 'admin@gmail.com', '$2y$10$cSplTb5vOo.kfLhYuQ/azuOTvPL5JMDUxClhU0vVbgOHWqJstcV22', '/path/pictures/avatar.default.png', NULL, NULL, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs_has_articles`
--

CREATE TABLE `utilisateurs_has_articles` (
  `utilisateurs_id_utilisateur` int(11) NOT NULL,
  `articles_id_article` int(11) NOT NULL,
  `categories_id_categorie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `articles_has_categories`
--
ALTER TABLE `articles_has_categories`
  ADD PRIMARY KEY (`articles_id_article`,`categories_id_categorie`),
  ADD KEY `fk_articles_has_categories_categories1_idx` (`categories_id_categorie`),
  ADD KEY `fk_articles_has_categories_articles1_idx` (`articles_id_article`);

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id_avis`,`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`,`utilisateurs_has_articles_categories_id_categorie`),
  ADD KEY `fk_avis_utilisateurs_has_articles1_idx` (`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`,`utilisateurs_has_articles_categories_id_categorie`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`,`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`),
  ADD KEY `fk_commentaires_commentaires1_idx` (`commentaires_id_commentaire`),
  ADD KEY `fk_commentaires_utilisateurs_has_articles1_idx` (`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`),
  ADD KEY `fk_commentaires_utilisateurs1_idx` (`utilisateurs_id_utilisateur`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Index pour la table `utilisateurs_has_articles`
--
ALTER TABLE `utilisateurs_has_articles`
  ADD PRIMARY KEY (`utilisateurs_id_utilisateur`,`articles_id_article`,`categories_id_categorie`),
  ADD KEY `fk_utilisateurs_has_articles_articles1_idx` (`articles_id_article`),
  ADD KEY `fk_utilisateurs_has_articles_utilisateurs1_idx` (`utilisateurs_id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id_avis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles_has_categories`
--
ALTER TABLE `articles_has_categories`
  ADD CONSTRAINT `fk_articles_has_categories_articles1` FOREIGN KEY (`articles_id_article`) REFERENCES `articles` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_articles_has_categories_categories1` FOREIGN KEY (`categories_id_categorie`) REFERENCES `categories` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `fk_avis_utilisateurs_has_articles1` FOREIGN KEY (`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`,`utilisateurs_has_articles_categories_id_categorie`) REFERENCES `utilisateurs_has_articles` (`utilisateurs_id_utilisateur`, `articles_id_article`, `categories_id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `fk_commentaires_commentaires1` FOREIGN KEY (`commentaires_id_commentaire`) REFERENCES `commentaires` (`id_commentaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaires_utilisateurs1` FOREIGN KEY (`utilisateurs_id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_commentaires_utilisateurs_has_articles1` FOREIGN KEY (`utilisateurs_has_articles_utilisateurs_id_utilisateur`,`utilisateurs_has_articles_articles_id_article`) REFERENCES `utilisateurs_has_articles` (`utilisateurs_id_utilisateur`, `articles_id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateurs_has_articles`
--
ALTER TABLE `utilisateurs_has_articles`
  ADD CONSTRAINT `fk_utilisateurs_has_articles_articles1` FOREIGN KEY (`articles_id_article`) REFERENCES `articles` (`id_article`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateurs_has_articles_utilisateurs1` FOREIGN KEY (`utilisateurs_id_utilisateur`) REFERENCES `utilisateurs` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
