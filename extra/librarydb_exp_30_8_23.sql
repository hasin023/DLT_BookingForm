-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2023 at 01:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librarydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `ID` int(11) NOT NULL,
  `Applicant` varchar(128) NOT NULL,
  `Application_date` datetime NOT NULL,
  `Designation` varchar(32) NOT NULL,
  `Details` text NOT NULL,
  `Booking_date` date NOT NULL,
  `Time_from` time NOT NULL,
  `Time_to` time NOT NULL,
  `ict_help_reason` text DEFAULT NULL,
  `other_support` text DEFAULT NULL,
  `Pc` tinyint(1) DEFAULT NULL,
  `glass_board` tinyint(1) DEFAULT NULL,
  `mic_wireless` tinyint(1) DEFAULT NULL,
  `mic_wire` tinyint(1) DEFAULT NULL,
  `big_displays` tinyint(1) DEFAULT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `add_projector` tinyint(1) DEFAULT NULL,
  `bdren` tinyint(1) DEFAULT NULL,
  `table_cloth` tinyint(1) DEFAULT NULL,
  `vase` tinyint(1) DEFAULT NULL,
  `wireless_mic_bat` tinyint(1) DEFAULT NULL,
  `Add_chair` tinyint(1) DEFAULT NULL,
  `Add_mic` tinyint(1) DEFAULT NULL,
  `Other` text DEFAULT NULL,
  `photography` tinyint(1) DEFAULT NULL,
  `video_recording` tinyint(1) DEFAULT NULL,
  `cafe` tinyint(1) DEFAULT NULL,
  `own_arrange` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`ID`, `Applicant`, `Application_date`, `Designation`, `Details`, `Booking_date`, `Time_from`, `Time_to`, `ict_help_reason`, `other_support`, `Pc`, `glass_board`, `mic_wireless`, `mic_wire`, `big_displays`, `wifi`, `add_projector`, `bdren`, `table_cloth`, `vase`, `wireless_mic_bat`, `Add_chair`, `Add_mic`, `Other`, `photography`, `video_recording`, `cafe`, `own_arrange`) VALUES
(3, 'sakhawatadib@gmail.com', '2023-08-30 00:00:00', 'other', 'abcdef', '2023-08-31', '17:43:00', '19:41:00', '', '', 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, '', 0, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
