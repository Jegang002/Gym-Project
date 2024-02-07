-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 06:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arnoldgym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `usern` varchar(20) NOT NULL,
  `pass` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`usern`, `pass`) VALUES
('admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `basic`
--

CREATE TABLE `basic` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `current_weight` float NOT NULL,
  `height` int(11) NOT NULL,
  `bmi` float DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Amount` varchar(6) NOT NULL,
  `health_problems` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `premium`
--

CREATE TABLE `premium` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `current_weight` float NOT NULL,
  `height` int(11) NOT NULL,
  `bmi` float DEFAULT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Amount` varchar(6) NOT NULL,
  `health_problems` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainee2_book`
--

CREATE TABLE `trainee2_book` (
  `id` int(11) NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  `fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainee3_book`
--

CREATE TABLE `trainee3_book` (
  `id` int(11) NOT NULL,
  `trainer_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  `fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainee_booking`
--

CREATE TABLE `trainee_booking` (
  `trainer_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `from_date` date NOT NULL,
  `end_date` date NOT NULL,
  `fees` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainee_booking`
--

INSERT INTO `trainee_booking` (`trainer_name`, `username`, `email`, `phone`, `from_date`, `end_date`, `fees`) VALUES
('Teejay', 'jaya', '210701521@rajalakshmi.edu.in', '08838762653', '2023-11-09', '2023-12-09', '₹600'),
('Teejay', 'gp', '210701521@rajalakshmi.edu.in', '08838762653', '2023-11-23', '2023-11-30', '₹600'),
('Teejay', 'Jegan', '210701521@rajalakshmi.edu.in', '8838765955', '2023-11-23', '2023-12-23', '₹600');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `usern` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`usern`, `pass`, `email`, `gender`) VALUES
('Jegan', '123', '210701521@rajalakshm', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `basic`
--
ALTER TABLE `basic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium`
--
ALTER TABLE `premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee2_book`
--
ALTER TABLE `trainee2_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainee3_book`
--
ALTER TABLE `trainee3_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `basic`
--
ALTER TABLE `basic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `premium`
--
ALTER TABLE `premium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `trainee2_book`
--
ALTER TABLE `trainee2_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainee3_book`
--
ALTER TABLE `trainee3_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
