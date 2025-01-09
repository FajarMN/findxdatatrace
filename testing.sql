-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 06:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

DROP TABLE IF EXISTS `reference`;
CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `category` enum('Osint','Geoint','Socmint','Humint','Cybint') NOT NULL,
  `link` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `name`, `keterangan`, `category`, `link`, `created_at`) VALUES
(3, 'Maltego', 'test', 'Osint', 'https://www.maltego.com/', '2025-01-09 21:33:14'),
(6, 'Osint Framework', 'tesf 2', 'Osint', 'https://osintframework.com/', '2025-01-09 21:33:14'),
(7, 'Censys', '', 'Osint', 'https://censys.com/', '2025-01-09 21:33:14'),
(12, 'BuiltWith', '', 'Osint', 'https://builtwith.com/', '2025-01-09 21:33:14'),
(17, 'Robtex', 'test pukii gak jelas kayak urutan presentasi huha', 'Osint', 'https://www.robtex.com/', '2025-01-09 21:33:14'),
(18, 'Storyful', '', 'Socmint', 'https://storyful.com/', '2025-01-09 21:33:14'),
(26, 'Mention', '', 'Socmint', 'https://mention.com/en/', '2025-01-09 21:33:14'),
(30, 'Brand24', '', 'Socmint', 'https://brand24.com/', '2025-01-09 21:33:14'),
(31, 'SociableKIT', '', 'Socmint', 'https://www.sociablekit.com/', '2025-01-09 21:33:14'),
(33, 'Elfsight', '', 'Socmint', 'https://elfsight.com/', '2025-01-09 21:33:14'),
(35, 'ArcGIS', '', 'Geoint', 'https://www.arcgis.com/', '2025-01-09 21:33:14'),
(37, 'QGIS', '', 'Geoint', 'https://www.qgis.org/', '2025-01-09 21:33:14'),
(39, 'Sentinel Hub', '', 'Geoint', 'https://www.sentinel-hub.com/', '2025-01-09 21:33:14'),
(42, 'SAS Planet', '', 'Geoint', 'https://www.sasgis.org/', '2025-01-09 21:33:14'),
(46, 'DroneDeploy', '', 'Geoint', 'https://www.dronedeploy.com/', '2025-01-09 21:33:14'),
(50, 'CrowdStrike', '', 'Cybint', 'https://www.crowdstrike.com/en-us/', '2025-01-09 21:33:14'),
(53, 'OpenCTI', '', 'Cybint', 'https://filigran.io/', '2025-01-09 21:33:14'),
(56, 'VirusTotal', '', 'Cybint', 'https://www.virustotal.com/gui/', '2025-01-09 21:33:14'),
(64, 'Babel Street', '', 'Humint', 'https://www.babelstreet.com/', '2025-01-09 21:33:14'),
(67, 'GeoTime', '', 'Humint', 'https://www.geotime.com/', '2025-01-09 21:33:14'),
(69, 'Trace Labs', '', 'Humint', 'https://www.tracelabs.org/', '2025-01-09 21:33:14'),
(70, 'Hunchly', '', 'Humint', 'https://hunch.ly/', '2025-01-09 21:33:14'),
(71, 'Maltego', '', 'Humint', 'https://www.maltego.com/', '2025-01-09 21:33:14'),
(72, 'OSINT Combine', '', 'Humint', 'https://www.osintcombine.com/', '2025-01-09 21:33:14'),
(82, 'adsadsadmemek', 'asdasd', 'Osint', 'asddsa', '2025-01-10 00:20:46');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
