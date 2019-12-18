-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 18 déc. 2019 à 15:51
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(32) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`, `date`, `img`) VALUES
(1, 'Aventurez-vous dans les Terres de feu!', 'Rassemblez vos alliés les plus dévoués et rendez-vous dans le raid des Terres de Feu pour affronter le seigneur élémentaire Ragnaros et ses hordes pendant l’évènement donjon des Marcheurs du temps : Cataclysm du 10 au 17 décembre.\r\n\r\nLes terres de Feu sont le domaine ardent forgé par les titans pour abriter Ragnaros et ses serviteurs incontrôlables. Après l’émergence d’Aile de mort en Azeroth, Ragnaros et ses sous-fifres ont déferlé sur les flancs du mont Hyjal avant d’être repoussés par les vaillants défenseurs de la montagne sacrée. Désormais, Ragnaros rassemble ceux qui lui sont loyaux pour défendre les terres de Feu contre les champions d’Azeroth.\r\n\r\nDates : le raid des terres de Feu est disponible pendant toute la durée de l’évènement donjon des Marcheurs du temps : Cataclysm.\r\nDifficulté : il s’agit d’un raid en mode normal qui ne sera donc pas accessible via l’outil Raids.\r\nNiveau minimum : les personnages de niveau 86 ou supérieur peuvent participer.\r\nBoss : (7) Beth’tilac, Seigneur Rhyolith, Alysrazor, Shannox, Baleroc, le Gardien de la porte, Chambellan Forteramure, Ragnaros\r\n\r\nPendant l’évènement donjon des Marcheurs du temps : Cataclysm, vous pouvez créer un groupe de raid de 1 à 30 joueurs afin de rejoindre le domaine ardent de Ragnaros. Vous n’avez pas de groupe ? L’outil Recherche de groupe (I) est là pour vous. Créez votre propre groupe dans la section « Groupes prédéfinis » ou recherchez des aventuriers qui partagent vos ambitions.', 'Antho', '2019-12-14 10:44:14', 'Aventurez-vous dans les Terresterrefeu.jpg'),
(3, 'Nouveau donjon de combat de mascottes', 'Passez votre ménagerie en revue et envoyez vos meilleures mascottes de combat dans les méandres volcaniques des profondeurs de Rochenoire, un nouveau donjon de combat de mascottes disponible en modes héroïque et défi dans la mise à jour Visions de N’Zoth.\r\n\r\nNous avons enfin découvert le repaire secret du sinistre groupe qui mène des expériences sur toutes sortes de mascottes d’Azeroth. Les dompteurs de mascottes pourront bientôt prendre part à un ultime combat pour mettre un terme à ces machinations et faire la lumière sur cette mystérieuse organisation.\r\n\r\nPour commencer votre périple, vous devrez avoir terminé les quatre premières quêtes de donjon de combat de mascottes : « Bestioles lamentables », « Les Mortemines contre-attaquent », « Les nouveaux gardiens de Gnomeregan » et « Terreurs minuscules de Stratholme ». Lorsque vous aurez terminé ces quatre suites de quêtes en mode normal ou défi, vous pourrez accepter une nouvelle quête donnée par Panik Heurtécrou à Boralus ou Radek Fonverrou à Dazar’alor, et entamer votre aventure aux côtés de vos mascottes dans les profondeurs de Rochenoire.', 'Antho', '2019-12-14 10:50:55', 'Nouveau donjon de combat de mascottesmascottes.jpg'),
(4, 'Célébrons 15 ans de World of Warcraft !', 'Ce mois de novembre marque le 15e anniversaire de World of Warcraft, et nous avons prévu quelques surprises spéciales pour l’occasion.\r\n\r\nChromie a séparé les flux temporels, vous permettant de remonter le temps et de revivre des combats de raid épiques de Burning Crusade, Wrath of the Lich King et Cataclysm. Chacun de ces raids disponibles pour une durée limitée propose 3 boss emblématiques, et sera accessible sous forme d’ailes séparées dans l’outil Raids.\r\n\r\nPour accéder au raid, il vous faudra un niveau d’objet minimum de 380. Les joueurs qui terminent les 3 ailes débloqueront le haut fait Souvenirs de cristal, qui offre le brise-monde d’obsidienne, une monture du Vol draconique noir inspirée d’Aile de mort.\r\n\r\nRetour dans la vallée d’Alterac d’antan\r\n\r\nAbattez vos ennemis, rasez leurs défenses et monnayez le butin arraché à leurs cadavres pour invoquer de puissants renforts dans la Vengeance de Korrak, un champ de bataille rendant hommage à la vallée d’Alterac d’origine.\r\n\r\nLes joueurs qui participent à la Vengeance de Korrak et qui accomplissent le haut fait Vallée d’Alterac d’antan peuvent obtenir deux nouvelles montures : le Bélier de combat foudrepique (Alliance) et le Grogneur loup-de-givre (Horde).\r\n\r\nCadeau d’anniversaire\r\n\r\nPréparez-vous à célébrer les 15 ans de World of Warcraft avec style ! Les joueurs qui se connecteront pendant la période de l’évènement recevront un cadeau d’anniversaire dans leur boîte aux lettres, qui contient une mascotte mini Nefarian, un paquet cadeau festif augmentant les gains d’expérience et de réputation tout au long de l’évènement, un feu d’artifice à utiliser pendant toute la célébration, un objet permettant de se téléporter aux grottes du Temps (uniquement pendant l’évènement) et d’autres bonus en jeu.', 'Antho', '2019-12-14 10:52:44', 'Célébrons 15 ans de World of Warcraft !dragon.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `comment` text NOT NULL,
  `date_comment` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `login`, `comment`, `date_comment`) VALUES
(6, 4, 'Antho', 'Que la fête commence!', '2019-12-16 12:50:59'),
(7, 4, 'Leila', 'Très bel article, merci!', '2019-12-16 13:13:42'),
(8, 4, 'Clément', 'Commentaire', '2019-12-18 10:36:03');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(64) NOT NULL,
  `status` varchar(16) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `login`, `pass`, `email`, `status`) VALUES
(15, 'Antho', '$2y$10$9W1zbHUgyXvBhqMEeBH9yO4dBo1RkH.yvXtnyxkF/efsf0zU3SNqS', 'yahoo@outlook.fr', 'admin'),
(21, 'Leila', '$2y$10$o7/fHoa8WpHP2I/oPrmuAOyeSxCfS.NuO./aqru2H.EZMa5N4lifa', 'aol@wanadoo.fr', 'member'),
(23, 'Iuliia', '$2y$10$P0IfVkDvTZxfI.xS/n8GG.HGaezNgaKYtqSVWvbATZq98Lur79/aG', 'Boubou@yandex.ru', 'member'),
(24, 'Clément', '$2y$10$bG5l78ZjPPhxwogkFgeXi.nmTPkESuhziAGH5jJiu4QQXDFtSPB/O', 'google@hotmail.com', 'member');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_article` FOREIGN KEY (`id_article`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
