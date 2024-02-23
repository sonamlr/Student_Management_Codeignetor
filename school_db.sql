-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2024 at 02:34 PM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_fees`
--

DROP TABLE IF EXISTS `class_fees`;
CREATE TABLE IF NOT EXISTS `class_fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `classname` varchar(250) NOT NULL,
  `fees` int NOT NULL,
  `delete_flag` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `class_fees`
--

INSERT INTO `class_fees` (`id`, `classname`, `fees`, `delete_flag`) VALUES
(1, 'Nursery ', 6500, 0),
(2, 'KG-1', 6500, 0),
(3, 'First', 6500, 0),
(4, 'Second', 7000, 0),
(5, 'Third', 7000, 0),
(6, 'Fourth', 7000, 0),
(7, 'Fifth', 7000, 0),
(8, 'Sixth', 8000, 0),
(9, 'Seventh', 8000, 0),
(10, 'Eigth', 8000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fees_payment`
--

DROP TABLE IF EXISTS `fees_payment`;
CREATE TABLE IF NOT EXISTS `fees_payment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `amount` varchar(100) NOT NULL,
  `student_id` int NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `enrollment_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fees_payment`
--

INSERT INTO `fees_payment` (`id`, `amount`, `student_id`, `class_id`, `enrollment_number`, `date`) VALUES
(1, '3250', 1, '1', '001', '2024-02-23 11:24:32'),
(2, '500', 1, '1', '001', '2024-02-23 11:24:57'),
(7, '100', 1, '1', '001', '2024-02-23 14:52:55'),
(8, '500', 1, '1', '001', '2024-02-23 14:53:30');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `adhar_id` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `session_start_from` varchar(100) NOT NULL,
  `admission_class` varchar(100) NOT NULL,
  `vehical` varchar(1) DEFAULT NULL,
  `enrollment` varchar(30) NOT NULL,
  `delete_flag` int NOT NULL DEFAULT '0',
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `enrollment` (`enrollment`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `first_name`, `last_name`, `father_name`, `mother_name`, `dob`, `adhar_id`, `mobile_no`, `session_start_from`, `admission_class`, `vehical`, `enrollment`, `delete_flag`, `date`) VALUES
(1, 'Rohan', 'Kumar', 'Mr. Kumar', 'Mrs. S', '2019-10-18', '768987657867', '6789876545', '2024-04-03', '1', 'N', '001', 0, '2024-02-23 11:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
