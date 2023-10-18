-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:28 AM
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
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `first_name`, `last_name`, `email`, `department`, `designation`, `role`) VALUES
(1, 'Abu Raihan', 'Mostofa Kamal', 'raihan.kamal@iut-dhaka.edu', 'Computer Science and Engineering', 'Professor and Head of the Department', 'head'),
(2, 'Dr. Muhammad', 'Mahbub Alam', 'mma@iut-dhaka.edu', 'Computer Science and Engineering', 'Professor', 'faculty'),
(3, 'Md. Hasanul', 'Kabir', 'hasanul@iut-dhaka.edu', 'Computer Science and Engineering', 'Professor', 'faculty');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(11) NOT NULL,
  `applicant_name` varchar(255) NOT NULL,
  `application_date` date NOT NULL DEFAULT current_timestamp(),
  `designation` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `meeting_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `ict_help_reason` text DEFAULT NULL,
  `other_support` text DEFAULT NULL,
  `pc` tinyint(1) DEFAULT NULL,
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
  `add_chair` tinyint(1) DEFAULT NULL,
  `add_mic` tinyint(1) DEFAULT NULL,
  `other` text DEFAULT NULL,
  `photography` tinyint(1) DEFAULT NULL,
  `video_recording` tinyint(1) DEFAULT NULL,
  `cafe` tinyint(1) DEFAULT NULL,
  `own_arrange` tinyint(1) DEFAULT NULL,
  `meeting_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `applicant_name`, `application_date`, `designation`, `details`, `meeting_date`, `start_time`, `end_time`, `ict_help_reason`, `other_support`, `pc`, `glass_board`, `mic_wireless`, `mic_wire`, `big_displays`, `wifi`, `add_projector`, `bdren`, `table_cloth`, `vase`, `wireless_mic_bat`, `add_chair`, `add_mic`, `other`, `photography`, `video_recording`, `cafe`, `own_arrange`, `meeting_status`) VALUES
(1, 'sakhawatadib@gmail.com', '2023-08-30', 'Student', 'abcdef', '2023-08-31', '17:43:00', '19:41:00', 'None', 'None', 1, 0, 0, 1, 1, 0, 0, 1, 0, 1, 1, 1, 0, 'None', 0, 1, 1, 0, 'completed'),
(4, 'test@gmail.com', '2023-08-30', 'Lecturer', 'New Test', '2023-09-06', '07:30:00', '11:00:00', 'None', 'None', 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1, 'None', 0, 0, 1, 0, 'approved'),
(5, 'previoustest@gmail.com', '2023-08-25', 'Professor', 'Previous Test', '2023-08-28', '04:30:00', '08:00:00', 'None', 'None', 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1, 'None', 0, 0, 1, 0, 'completed'),
(6, 'pendingtest@gmail.com', '2023-08-31', 'Professor', 'Pending Test', '2023-09-02', '04:30:00', '08:00:00', 'None', 'None', 1, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 1, 'None', 0, 0, 1, 0, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(2, 'Meeting 2', 'Test description Meeting2', '2023-09-16 14:00:00', '2023-09-16 16:00:00'),
(5, 'Appointment Now', 'Meeting Appointment 3', '2023-10-15 08:30:00', '2023-10-15 10:30:00'),
(6, '20230902043000', 'Pending Test', '2023-09-02 04:30:00', '2023-09-02 08:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
