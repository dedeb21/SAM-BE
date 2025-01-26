-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2025 at 05:00 PM
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
-- Database: `athlift`
--

-- --------------------------------------------------------

--
-- Table structure for table `athleteinformation`
--

CREATE TABLE `athleteinformation` (
  `athleteID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `socialmedia` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `athleteinformation`
--

INSERT INTO `athleteinformation` (`athleteID`, `image`, `name`, `description`, `socialmedia`) VALUES
(1, 'assets/O1.png', 'Carlos Yulo', 'Made history as the first Filipino and Southeast Asian gymnast to win a gold medal at the World Artistic Gymnastics Championships by clinching the floor exercise title. ', 'https://www.instagram.com/c_edrielzxs/?hl=en'),
(2, 'assets/O2.png', 'Hidilyn Diaz', 'Secured three gold medals at the Roma 2020 World Cup in weightlifting, dominating the women\'s 55 kg category.', 'https://www.instagram.com/hidilyndiaz/?hl=en'),
(3, 'assets/O3.png', 'EJ Obiena', 'Broke the Asian pole vault record by clearing 5.93 meters at the Golden Rooftop Challenge in Innsbruck, Austria, setting a new benchmark for Filipino and Asian athletes.', 'https://www.instagram.com/ernestobienapv/?hl=en'),
(4, 'assets/O4.png', 'Nesthy Petecio', 'Won the gold medal in the featherweight division at the AIBA Women\'s World Boxing Championships, becoming the second Filipino woman to achieve this honor.', 'https://www.instagram.com/neshpetecio/?hl=en'),
(5, 'assets/O5.png', 'Margielyn Didal', 'Represented the Philippines in skateboarding at the Tokyo 2020 Olympics, reaching the finals in the women\'s street event and finishing seventh, bringing significant attention to the sport in the country.', 'https://www.instagram.com/margielyndidal/?hl=en');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `athleteinformation`
--
ALTER TABLE `athleteinformation`
  ADD PRIMARY KEY (`athleteID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `athleteinformation`
--
ALTER TABLE `athleteinformation`
  MODIFY `athleteID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
