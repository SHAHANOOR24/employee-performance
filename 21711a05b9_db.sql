-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 08:13 AM
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
-- Database: `21711a05b9_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('shahanoor', '1234**'),
('rose', '1234**'),
('tom', '1234**'),
('jerry', '1234**'),
('jimin', '1234**');

-- --------------------------------------------------------

--
-- Table structure for table `registration1`
--

CREATE TABLE `registration1` (
  `emp_name` varchar(255) NOT NULL,
  `emp_pass` int(50) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `quality_of_work` varchar(50) NOT NULL,
  `communication` varchar(50) NOT NULL,
  `group_work` varchar(255) NOT NULL,
  `technical_skills` varchar(50) NOT NULL,
  `overall_rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration1`
--

INSERT INTO `registration1` (`emp_name`, `emp_pass`, `performance`, `quality_of_work`, `communication`, `group_work`, `technical_skills`, `overall_rating`) VALUES
('Angel', 7648, 'Very Good', 'Very Good', 'Good', 'Average', 'Good', '9'),
('john', 2312, 'Good', 'Very Good', 'Very Good', 'Very Good', 'Very Good', '9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
