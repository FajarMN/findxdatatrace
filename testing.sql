-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2025 at 02:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--
CREATE DATABASE IF NOT EXISTS `testing` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `testing`;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--
-- Creation: Dec 23, 2024 at 06:36 PM
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `news`:
--

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `category`, `img`, `link`, `created_at`) VALUES
(16, 'Keseruan Mengenal OSINT di Bidang Jurnalistik Era Digital', 'Osint', 'osint2.webp', 'https://www.detik.com/jabar/berita/d-6977056/keseruan-mengenal-osint-di-bidang-jurnalistik-era-digital', '2025-01-05 16:01:41'),
(17, 'Menelusuri Jejak Pocong yang Nangkring di Atas Baliho Garut', 'Osint', 'osint3.webp', 'https://www.detik.com/jabar/berita/d-6921770/menelusuri-jejak-pocong-yang-nangkring-di-atas-baliho-garut', '2025-01-05 16:01:57'),
(18, 'South Korea’s top HUMINT agency probes potentially catastrophic data breach', 'Humint', 'humint2.webp', 'https://intelnews.org/2024/07/29/01-3357/', '2025-01-05 16:02:38'),
(19, 'Seoul investigating leak of secret military agents’ identities to North Korea', 'Humint', 'humint3.webp', 'https://www.nknews.org/2024/07/seoul-investigating-leak-of-secret-military-agents-identities-to-north-korea/', '2025-01-05 16:03:39'),
(20, 'NGA Eyes Multimodal AI in Next Phase of Geospatial Analysis', 'Geoint', 'geoint~1.webp', 'https://govciomedia.com/nga-eyes-multimodal-ai-in-next-phase-of-geospatial-analysis/', '2025-01-05 16:04:19'),
(21, 'CYBINT investigation: how the Orlan-10 manufacturer imports parts bypassing sanctions', 'Cybint', 'cybint2.webp', 'https://informnapalm.org/en/cybint-stc/', '2025-01-05 16:04:30'),
(22, 'Social media platforms are using what you create for artificial intelligence. Here’s how to opt out', 'Socmint', 'socmint2.webp', 'https://edition.cnn.com/2024/09/23/tech/social-media-ai-data-opt-out/index.html', '2025-01-05 16:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--
-- Creation: Dec 23, 2024 at 06:36 PM
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('Osint','Geoint','Socmint','Humint','Cybint') NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `reference`:
--

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `name`, `type`, `link`) VALUES
(3, 'Maltego', 'Osint', 'https://www.maltego.com/'),
(6, 'Osint Framework', 'Osint', 'https://osintframework.com/'),
(7, 'Censys', 'Osint', 'https://censys.com/'),
(12, 'BuiltWith', 'Osint', 'https://builtwith.com/'),
(17, 'Robtex', 'Osint', 'https://www.robtex.com/'),
(18, 'Storyful', 'Socmint', 'https://storyful.com/'),
(26, 'Mention', 'Socmint', 'https://mention.com/en/'),
(30, 'Brand24', 'Socmint', 'https://brand24.com/'),
(31, 'SociableKIT', 'Socmint', 'https://www.sociablekit.com/'),
(33, 'Elfsight', 'Socmint', 'https://elfsight.com/'),
(35, 'ArcGIS', 'Geoint', 'https://www.arcgis.com/'),
(37, 'QGIS', 'Geoint', 'https://www.qgis.org/'),
(39, 'Sentinel Hub', 'Geoint', 'https://www.sentinel-hub.com/'),
(42, 'SAS Planet', 'Geoint', 'https://www.sasgis.org/'),
(46, 'DroneDeploy', 'Geoint', 'https://www.dronedeploy.com/'),
(50, 'CrowdStrike', 'Cybint', 'https://www.crowdstrike.com/en-us/'),
(53, 'OpenCTI', 'Cybint', 'https://filigran.io/'),
(56, 'VirusTotal', 'Cybint', 'https://www.virustotal.com/gui/'),
(64, 'Babel Street', 'Humint', 'https://www.babelstreet.com/'),
(67, 'GeoTime', 'Humint', 'https://www.geotime.com/'),
(69, 'Trace Labs', 'Humint', 'https://www.tracelabs.org/'),
(70, 'Hunchly', 'Humint', 'https://hunch.ly/'),
(71, 'Maltego', 'Humint', 'https://www.maltego.com/'),
(72, 'OSINT Combine', 'Humint', 'https://www.osintcombine.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
