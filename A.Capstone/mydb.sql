-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 11, 2023 at 10:10 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

DROP TABLE IF EXISTS `crud`;
CREATE TABLE IF NOT EXISTS `crud` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `first_name`, `last_name`, `email`) VALUES
(1, 'A', 'B', 'p@yahoo.com'),
(2, 'A', 'B', 'p@yahoo.com'),
(3, 'A', 'B', 'p@yahoo.com'),
(4, 'A', 'B', 'p@yahoo.com'),
(5, 'A', 'B', 'p@yahoo.com'),
(6, 'A', 'B', 'p@yahoo.com'),
(7, 'A', 'B', 'p@yahoo.com'),
(8, 'o', 'o', 'p@yahoo.com'),
(9, 'o', 'o', 'p@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

DROP TABLE IF EXISTS `tbl_account`;
CREATE TABLE IF NOT EXISTS `tbl_account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`id`, `uname`, `pass`, `fname`, `mname`, `lname`) VALUES
(1, 'user1', 'pass', 'John', 'A', 'Doe'),
(11, 'admin911', 'pass', 'A', 'B', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset`
--

DROP TABLE IF EXISTS `tbl_asset`;
CREATE TABLE IF NOT EXISTS `tbl_asset` (
  `id` int NOT NULL AUTO_INCREMENT,
  `asset_no` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `asset_name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `asset_type` int NOT NULL,
  `asset_weight` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `asset_desc` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `asset_acquired` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_asset`
--

INSERT INTO `tbl_asset` (`id`, `asset_no`, `asset_name`, `asset_type`, `asset_weight`, `asset_desc`, `asset_acquired`, `active`) VALUES
(1, 'A-0001', 'Desktop Computer 1', 1, '10kg', 'Description...', '2023-05-25 08:12:32', 1),
(2, 'A-0002', 'Desktop Computer 2', 1, '10kg', 'Description...', '2023-05-25 08:13:00', 1),
(3, 'A-0003', 'Desktop Computer 3', 1, '10kg', 'Description...', '2023-05-25 08:13:44', 1),
(4, 'A-0004', 'Desktop Computer 4', 1, '10kg', 'Description...', '2023-05-25 08:14:08', 1),
(5, 'A-0005', 'Desktop Computer 5', 1, '10kg', 'Description...', '2023-05-25 08:14:52', 1),
(6, 'A-0006', 'Sofa 1', 2, '10kg', 'Description...', '2023-05-25 08:16:58', 1),
(7, 'A-0007', 'Sofa 222', 2, '10kg', 'Description222', '2023-05-25 08:17:27', 1),
(8, 'A-9999', 'Laptop for Supervisor', 1, '1.5kg', 'no comment', '2023-06-05 07:50:00', 1),
(9, 'A-88889', 'Sofa 3', 1, '1000kg', 'desc', '2023-06-22 04:48:41', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_asset_type`
--

DROP TABLE IF EXISTS `tbl_asset_type`;
CREATE TABLE IF NOT EXISTS `tbl_asset_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `asset_type` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `tbl_asset_type`
--

INSERT INTO `tbl_asset_type` (`id`, `asset_type`) VALUES
(1, 'Computer Hardware'),
(2, 'Office Furniture');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
