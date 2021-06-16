-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 15 Juin 2021 à 17:04
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS =@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `mynoama_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `tele` int(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `business_adress` varchar(320) NOT NULL,
  `home_adress` varchar(320) NOT NULL,
  `remarque` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `client`
--

INSERT INTO `client` (`id_client`, `full_name`, `class`, `group`, `gender`, `tele`, `email`, `facebook`, `date_naissance`, `business_adress`, `home_adress`, `remarque`) VALUES
(2, 'gfjyhfiy', 'ps', 'a', 'masculine', 86975974, 'jgfut@hjgiuyg.com', 'hjythedtr', '2021-05-06 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'gfuyfuyg'),
(3, 'btissamyaqine', '', '', 'Gender', 879865983, 'btissamyaqine123@gmail.com', 'btissamyaqine', '0000-00-00 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'asrysgsfdbgfdsvfz'),
(4, 'HSDJHG', 'CE1', 'B', 'masculine', 86975974, 'btissamyaqine123@gmail.com', 'btissamyaqine', '2021-05-26 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', '4FRFC'),
(7, 'issam', 'PS', 'A', 'masculine', 0, '', '', '0000-00-00 00:00:00', '', '', ''),
(10, 'btissam', '', '', 'Gender', 6541254, '', '', '0000-00-00 00:00:00', '', '', ''),
(15, 'hahahha', '', 'C', 'masculine', 2147483647, 'jgfut@hjgiuyg.com', 'hahh', '0000-00-00 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'hfdnfdmbvksgf;owibvd'),
(17, 'hahahhas', 'Class', 'Group', 'Gender', 2147483647, 'jgfut@hjgiuyg.com', 'hahh', '0000-00-00 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', ''),
(20, 'issm test', '', '', 'Gender', 0, '', '', '0000-00-00 00:00:00', '', '', ''),
(21, 'issam test 65', '', '', 'Gender', 0, '', '', '0000-00-00 00:00:00', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `credit`
--

CREATE TABLE `credit` (
  `id_credit` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `tele` int(255) NOT NULL,
  `email` varchar(320) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `date_naissance` datetime NOT NULL,
  `business_adress` varchar(320) NOT NULL,
  `home_adress` varchar(320) NOT NULL,
  `remarque` varchar(1000) NOT NULL,
  `credit` int(11) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `credit`
--

INSERT INTO `credit` (`id_credit`, `id_client`, `full_name`, `class`, `group`, `gender`, `tele`, `email`, `facebook`, `date_naissance`, `business_adress`, `home_adress`, `remarque`, `credit`, `create_at`) VALUES
(2, 2, 'gfjyhfiy', 'ps', 'a', 'masculine', 86975974, 'jgfut@hjgiuyg.com', 'hjythedtr', '2021-05-06 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'gfuyfuyg', 0, '2021-05-31 12:27:28'),
(3, 3, 'btissamyaqine', 'CE6', 'b', 'feminine', 879865983, 'btissamyaqine123@gmail.com', 'btissamyaqine', '2021-04-29 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'asrysgsfdbgfdsvfz', 0, '2021-05-31 12:27:28'),
(4, 0, 'HSDJHG', 'CE1', 'B', 'masculine', 86975974, 'btissamyaqine123@gmail.com', 'btissamyaqine', '2021-05-26 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', '4FRFC', 0, '2021-05-31 12:27:28'),
(7, 0, 'issam', 'PS', 'A', 'Gender', 0, '', '', '0000-00-00 00:00:00', '', '', '', 0, '2021-05-31 12:27:28'),
(8, 0, 'btissam', 'Class', 'Group', 'Gender', 661452145, '', '', '0000-00-00 00:00:00', '', '', '', 0, '2021-05-31 12:27:28'),
(10, 0, 'btissam', '', '', 'Gender', 0, '', '', '0000-00-00 00:00:00', '', '', '', 0, '2021-05-31 12:27:28'),
(15, 0, 'hahahha', 'PS', 'B', 'masculine', 2147483647, 'jgfut@hjgiuyg.com', 'hahh', '2021-05-26 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', 'hfdnfdmbvksgf;owibvd', 0, '2021-05-31 12:27:28'),
(16, 16, 'Nouamane Ajana', 'CE2', 'A', 'Gender', 698738346, '', '', '0000-00-00 00:00:00', '', '', '', 0, '2021-05-31 12:27:28'),
(17, 17, 'hahahhas', 'Class', 'Group', 'Gender', 2147483647, 'jgfut@hjgiuyg.com', 'hahh', '0000-00-00 00:00:00', 'gbhnttgbgfbgfbgf', 'fvrghtngfb@jdvcjhdv', '', 0, '2021-05-31 12:27:28'),
(25, 19, 'aSASAS', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 0, '2021-05-31 13:32:35'),
(26, 0, 'aSASAS', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 12, '2021-05-31 13:43:13'),
(27, 0, 'aSASAS', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 23, '2021-05-31 21:02:28'),
(28, 20, 'issm test', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', -15, '2021-06-01 14:39:51'),
(29, 20, 'issm test', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 20, '2021-06-01 14:40:02'),
(30, 18, 'wswssw', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 12, '2021-06-02 16:03:00'),
(31, 18, 'wswssw', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', -45, '2021-06-02 16:03:19'),
(32, 22, 'anas', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', 10, '2021-06-02 16:14:39'),
(33, 22, 'anas', '', '', '', 0, '', '', '0000-00-00 00:00:00', '', '', '', -15, '2021-06-02 16:15:00');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

CREATE TABLE `ingredient` (
  `id_ing` int(11) NOT NULL,
  `name_ing` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `ingredient`
--

INSERT INTO `ingredient` (`id_ing`, `name_ing`, `create_at`) VALUES
(1, 'test 01', '2021-06-02 18:24:56'),
(2, 'test 01', '2021-06-02 18:24:56'),
(3, 'test 01', '2021-06-02 18:24:58'),
(4, 'test 01', '2021-06-02 18:24:58'),
(5, '545454', '2021-06-01 23:00:00'),
(6, 'sdsdsd', '2021-06-02 20:01:36'),
(7, 'test02', '2021-06-02 20:01:42'),
(8, 'tomat', '2021-06-02 21:38:54');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_price` float NOT NULL DEFAULT '0',
  `ingredients` varchar(2550) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu_name`, `menu_price`, `ingredients`, `create_at`) VALUES
(1, 'test', 120, '545454,sdsdsd,test02,', '2021-06-02 21:33:48'),
(2, 'test 2 ', 675, 'test - test - test02 - ', '2021-06-02 21:35:54'),
(3, 'tacos', 35, '545454 - test - tomat - ', '2021-06-02 21:39:39');

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_client` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `tele` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remarque` varchar(320) NOT NULL,
  `remise` int(255) NOT NULL,
  `order_menus` varchar(255) NOT NULL,
  `price_total` float NOT NULL,
  `price_remise` float NOT NULL,
  `price_final` float NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `order`
--

INSERT INTO `order` (`id_order`, `id_client`, `full_name`, `tele`, `class`, `status`, `remarque`, `remise`, `order_menus`, `price_total`, `price_remise`, `price_final`, `create_at`) VALUES
(1, 0, '<br />\r\n<b>Notice</b>:  Undefined variable: full_name in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>92</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: tele in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>93</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>94</b><br />\r\n', 'Pending', 'tacos add without fries', 100, '', 0, 0, 0, '2021-06-11 15:16:56'),
(2, 0, '<br />\r\n<b>Notice</b>:  Undefined variable: full_name in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>84</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: tele in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>85</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', '50', 0, '', 0, 0, 0, '2021-06-11 15:24:03'),
(3, 0, '<br />\r\n<b>Notice</b>:  Undefined variable: full_name in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>84</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: tele in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>85</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', '25', 0, '', 0, 0, 0, '2021-06-11 15:28:56'),
(4, 0, 'btissamyaqine', '879865983', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', '50', 0, '', 0, 0, 0, '2021-06-11 15:30:53'),
(5, 0, 'btissam', '6541254', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', 'tacos add without fries', 25, '', 0, 0, 0, '2021-06-11 15:32:00'),
(6, 0, 'HSDJHG', '86975974', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', 'add tacos', 25, '', 0, 0, 0, '2021-06-11 15:36:53'),
(7, 0, 'btissam', '6541254', '<br />\r\n<b>Notice</b>:  Undefined variable: class in <b>C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php</b> on line <b>86</b><br />\r\n', 'Pending', 'remar', 25, '', 0, 0, 0, '2021-06-15 14:23:53'),
(8, 0, 'hahahhas', '2147483647', '&lt;br /&gt;\r\n&lt;b&gt;Notice&lt;/b&gt;:  Undefined variable: class in &lt;b&gt;C:\\xampp8\\htdocs\\Noa\\admin\\order_add_s2.php&lt;/b&gt; on line &lt;b&gt;82&lt;/b&gt;&lt;br /&gt;\r\n', 'Pending', 'test with sauce', 25, 'tacos - 35Dhs - Qte:2,test - 120Dhs - Qte:3,', 430, 107.5, 322.5, '2021-06-15 14:40:36'),
(9, 10, 'btissam', '6541254', '/', 'Pending', 'kharayaaaaaaa', 50, 'tacos - 35Dhs - Qte:2,test - 120Dhs - Qte:1,test - 675Dhs - Qte:1,', 865, 432.5, 432.5, '2021-06-15 14:55:06'),
(10, 10, 'btissam', '6541254', '/', 'Pending', '', 0, 'tacos - 35Dhs - Qte:1,', 35, 0, 35, '2021-06-15 15:03:09');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `create_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `fname`, `lname`, `role`, `active`, `create_on`) VALUES
(1, 'test', 'test', 'btissam', 'yaqine', 'admin', 0, '2021-05-25 12:41:29');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`id_credit`);

--
-- Index pour la table `ingredient`
--
ALTER TABLE `ingredient`
  ADD PRIMARY KEY (`id_ing`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT pour la table `credit`
--
ALTER TABLE `credit`
  MODIFY `id_credit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `ingredient`
--
ALTER TABLE `ingredient`
  MODIFY `id_ing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
