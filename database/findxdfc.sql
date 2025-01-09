-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2024 at 12:38 PM
-- Server version: 8.0.39-0ubuntu0.24.04.2
-- PHP Version: 8.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findxdfc`
--

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Osint','Geoint','Socmint','Humint') NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `name`, `type`, `link`) VALUES
(3, 'Maltego', 'Osint', 'https://maltego.com'),
(4, 'PublicWWW', 'Osint', 'https://publicwww.com'),
(5, 'Shodan', 'Osint', 'https://shodan.io'),
(6, 'OSINT Framework', 'Osint', 'https://osintframework.com'),
(7, 'Have I Been Pwned', 'Osint', 'https://haveibeenpwned.com/'),
(8, 'Awesome OSINT', 'Osint', 'https://github.com/julianscheel/awesome-osint'),
(9, 'Social Searcher', 'Osint', 'https://www.social-searcher.com/'),
(10, 'Spyse', 'Osint', 'https://spyse.com'),
(11, 'Censys', 'Osint', 'https://censys.com/'),
(12, 'Silobreaker', 'Osint', 'https://www.silobreaker.com/'),
(13, 'Google Earth', 'Geoint', 'https://earth.google.com/'),
(14, 'Sprinklr', 'Socmint', 'https://www.sprinklr.com/'),
(15, 'CareerBuilder', 'Humint', 'https://www.careerbuilder.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
