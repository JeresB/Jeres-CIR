-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 01 Décembre 2017 à 15:11
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `jerescir`
--

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `password`, `mail`) VALUES
(2, 'Boiselet', 'Jeres', '*BCEE107DCFBBBA92E6ACF7181FA36D7F065CDFF5', 'boiselet.jeremy@gmail.com'),
(3, 'Lelievre', 'Tristan', '*16D55D2278C02ADAC1824F1D926E6059D62D6C8C', 'titactique@gmail.com'),
(4, 'Nom test', 'Prénom test', '*94BDCEBE19083CE2A1F959FD02F964C7AF4CFC29', 'test@gmail.com'),
(5, 'Lelièvre', 'Tristan', '*BCEE107DCFBBBA92E6ACF7181FA36D7F065CDFF5', 'titactique@gmail.com'),
(6, 'Lelièvre', 'Tristan', '*D7EDAFEB0D98302D47907A2D183EE59DF6FE92A6', 'titactique@gmail.com'),
(7, 'Sicard', 'Arthur', '*234FAA6BBCDA359B6D2BDFCCBFF070B5E595021C', 'arthur4rennes@gmail.com'),
(8, 'Clouet', 'Matthias', '*998F614E4721B92256B0693B155289B2BAB6756A', 'clouet.matthias@gmail.com'),
(9, 'bourdonnec', 'Quentin', '*CF005747010DDC3874B38721E016FBBD32C1F396', 'quentin.bourdonnec@laposte.net'),
(10, 'tetchi', 'bertin', '*2BD443F4EA32CC67A589557494B253033DCDBE7F', 'jeanfrancoistetchi@yahoo.fr'),
(11, 'Ta mere', 'la reine des putes', '*7B272372A6EE59392EA2FAAEB66D8968560807CB', 'dupont.tete@gmail.com'),
(12, 'Al Qaida', 'BG Maghrebain', '*F2E84D3EB14990103E27F92513BB854ECAA8C727', 'carboyer@hotmail.fr'),
(13, 'Basciano', 'Morgane', '*94A92AF9D72B193E951ABE801D828BAA931EC358', 'morgane.basciano@gmail.com'),
(14, 'Nouvellon', 'Adrien', '*31E9D6B34976E10F94163A3413BDAC0C868E3759', 'adrien.nouvellon13@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
