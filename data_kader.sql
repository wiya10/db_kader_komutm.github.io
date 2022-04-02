-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_kader`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakader`
--

CREATE TABLE `datakader` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `tahun_lk` char(4) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakader`
--

INSERT INTO `datakader` (`id`, `nama`, `tahun_lk`, `jk`) VALUES
(1, 'Raehatul Hasanah', '2021', 'P'),
(2, 'Ananda Fitria Agisni', '2021', 'P'),
(3, 'Ida Zulfiani', '2021', 'P'),
(4, 'Komalasari', '2021', 'P'),
(5, 'Siswandi', '2021', 'L'),
(6, 'Abdul Hamid', '2021', 'L'),
(7, 'Baiq Milenia Fitriani', '2021', 'P'),
(8, 'Tomi Hidayat', '2021', 'L'),
(9, 'Yuni Adiyanti', '2021', 'P'),
(10, 'Rabiatul Adawiyah', '2021', 'P'),
(11, 'Aulia Ardi Utami', '2021', 'P'),
(12, 'Farida Komala Sari', '2021', 'P'),
(13, 'Juniati', '2021', 'P'),
(14, 'Suriati', '2021', 'P'),
(15, 'Dini Milhiani', '2021', 'P'),
(16, 'Baiq Sri Warni', '2021', 'P'),
(17, 'Azwin Rahadi', '2021', 'L'),
(18, 'Heti Ayu Wahyuni', '2021', 'P'),
(19, 'Luluk Puspawati', '2021', 'P'),
(20, 'Endi Widia Hartadi', '2021', 'L'),
(21, 'Ijul Mulkarimah', '2021', 'P'),
(22, 'Darmawan', '-', 'L'),
(24, 'Syahru Ramadhan', '-', 'L'),
(25, 'Erik Faradofa', '-', 'L'),
(26, 'Hifzil Khair', '-', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakader`
--
ALTER TABLE `datakader`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakader`
--
ALTER TABLE `datakader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
