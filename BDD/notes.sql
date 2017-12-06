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
-- Contenu de la table `notes`
--

INSERT INTO `notes` (`id`, `matiere`, `note`, `id_Users`) VALUES
(14, 'Anglais', '12.50', 2),
(15, 'Maths', '12.00', 2),
(16, 'Physique', '14.00', 2),
(17, 'XML', '18.67', 2),
(18, 'Design Pattern', '13.20', 2),
(19, 'Cisco', '20.00', 2),
(20, 'Contrat Moral', '20.00', 2),
(21, 'Python', '16.00', 2),
(22, 'Sécurité Informatique', '16.67', 2),
(23, 'Anglais', '16.00', 3),
(24, 'Maths', '11.00', 3),
(25, 'Physique', '13.00', 3),
(26, 'XML', '16.00', 3),
(27, 'Design Pattern', '10.80', 3),
(28, 'Sécurité Informatique', '18.00', 3),
(29, 'Framework', '15.00', 3),
(30, 'Cisco', '11.80', 3),
(31, 'Python', '9.00', 3),
(32, 'Linux Administrateur', '19.33', 2),
(33, 'Linux Administrateur', '8.00', 3),
(34, 'Contrat Moral', '20.00', 3),
(35, 'Design Pattern', '14.30', 7),
(36, 'Linux Administrateur', '19.00', 7),
(37, 'Physique', '8.75', 7),
(38, 'Python', '16.00', 7),
(39, 'Cisco', '17.50', 8),
(40, 'Sécurité Informatique', '17.33', 7),
(41, 'XML', '13.00', 7),
(42, 'Maths', '9.50', 7),
(43, 'Anglais', '13.50', 7),
(44, 'Physique', '10.75', 8),
(45, 'Cisco', '14.77', 7),
(47, 'Rapport de stage et soutenance', '13.80', 3),
(48, 'Rapport de stage et soutenance', '15.90', 7),
(49, 'Rapport de stage et soutenance', '12.80', 2),
(50, 'Physique', '13.00', 10),
(53, 'XML', '12.33', 10),
(54, 'Linux Administrateur', '15.33', 10),
(55, 'Sécurité Informatique', '15.33', 10),
(56, 'Framework', '16.50', 10),
(57, 'Rapport de stage et soutenance', '12.02', 10),
(58, 'Maths', '9.00', 10),
(59, 'Python', '8.00', 10),
(60, 'Design Pattern', '9.50', 10),
(61, 'Cisco', '7.33', 10),
(62, 'Contrat Moral', '20.00', 10),
(63, 'Framework', '19.50', 2),
(65, 'Maths', '11.50', 11),
(66, 'Contrat Moral', '20.00', 11),
(67, 'XML', '14.00', 11),
(68, 'Python', '10.00', 11),
(70, 'Sécurité Informatique', '13.33', 11),
(71, 'Sécurité Informatique', '16.67', 12),
(73, 'Linux Administrateur', '16.67', 11),
(74, 'Python', '16.50', 12),
(75, 'Physique', '11.50', 11),
(76, 'Design Pattern', '14.40', 12),
(77, 'Linux Administrateur', '17.00', 12),
(79, 'Cisco', '16.14', 12),
(80, 'XML', '15.33', 12),
(83, 'Contrat Moral', '20.00', 12),
(84, 'Physique', '12.75', 12),
(85, 'Maths', '12.50', 12),
(91, 'Anglais', '14.05', 12),
(93, 'Framework', '17.00', 11),
(94, 'Cisco', '15.68', 11),
(96, 'Rapport de stage et soutenance', '10.50', 11),
(97, 'Design Pattern', '14.50', 11),
(98, 'Anglais', '10.00', 11),
(99, 'Anglais', '12.00', 11),
(101, 'FPGA-VHDL', '15.60', 11),
(102, 'ELA 1', '15.50', 11),
(107, 'ELA 1', '19.10', 12),
(108, 'Framework', '18.00', 12),
(109, 'FPGA-VHDL', '13.82', 12),
(114, 'Physique', '14.25', 13),
(115, 'Design Pattern', '16.00', 13),
(116, 'Linux Administrateur', '11.67', 13),
(117, 'Python', '16.50', 13),
(118, 'Sécurité Informatique', '17.33', 13),
(119, 'Rapport de stage et soutenance', '14.20', 13),
(120, 'XML', '14.33', 13),
(121, 'Cisco', '9.77', 13),
(122, 'Maths', '12.50', 13),
(123, 'Framework', '17.00', 13),
(124, 'Contrat Moral', '20.00', 13),
(127, 'Framework', '16.50', 7),
(129, 'Design Pattern', '14.50', 14),
(130, 'Framework', '19.00', 14),
(131, 'Linux Administrateur', '16.67', 14),
(132, 'Physique', '10.75', 14),
(133, 'Python', '18.30', 14),
(134, 'Sécurité Informatique', '16.67', 14),
(135, 'Rapport de stage et soutenance', '13.60', 14),
(136, 'XML', '19.33', 14),
(137, 'Cisco', '14.55', 14),
(138, 'Anglais', '16.50', 14),
(139, 'Anglais', '17.50', 14),
(140, 'Anglais', '17.00', 14),
(141, 'Anglais', '15.00', 14),
(142, 'Anglais', '18.00', 14),
(143, 'Maths', '12.00', 14),
(144, 'Anglais', '16.00', 14);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
