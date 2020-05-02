-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2020 at 05:22 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftar_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` text NOT NULL,
  `resume` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama`, `email`, `alamat`, `pekerjaan`, `resume`) VALUES
(1, 'Lubna Abidah', 'lubna16abidah@gmail.com', '', 'Staff', 'sample text'),
(2, 'Hanifa', 'hanifa@gmail.com', '', 'Public Relation', 'sample text'),
(3, 'Akram', 'akram@gmail.com', '', 'CEO', 'sample text'),
(4, 'Sandi', 'sandi@gmail.com', '', 'CTO', 'sample text'),
(5, 'Maidah', 'maidah@gmail.com', '', 'HRD', 'HRD oke'),
(6, 'Mela', 'melania@gmail.com', '', 'OPT Service', 'OPT Service'),
(7, 'Ramdan', 'ramdan@gmail.com', '', 'Staff', 'sample text'),
(8, 'Malika', 'malika@gmail.com', '', 'Marketing', 'sample text'),
(9, 'Tiyur Amanda', 'tiyur123@gmail.com', 'Jl. bambu no 3', 'koki, juru masak, desainer', 'saya adalah pekerja keras');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
