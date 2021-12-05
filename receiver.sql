-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2021 at 06:34 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receiver`
--

-- --------------------------------------------------------

--
-- Table structure for table `receiverdata`
--

DROP TABLE IF EXISTS `receiverdata`;
CREATE TABLE IF NOT EXISTS `receiverdata` (
  `NAME` varchar(50) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `PHONENO` varchar(10) DEFAULT NULL,
  `AGE` varchar(3) NOT NULL,
  `PINCODE` int(7) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `BLOODGROUP` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiverdata`
--

INSERT INTO `receiverdata` (`NAME`, `GENDER`, `EMAIL`, `PHONENO`, `AGE`, `PINCODE`, `STATE`, `BLOODGROUP`) VALUES
('hari', '', '', '9290296396', '87', 520003, '', 'on'),
('hari', '', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'on'),
('hari', '', 'hari.kanch.3@gmail.com', '8332819773', '18', 520003, 'andhrapradesh', 'on'),
('hari', '', 'hari.kanch.3@gmail.com', '8332819773', '78', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '15', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '7', 520003, 'andhrapradesh', 'B-'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '18', 520003, 'andhrapradesh', 'B-'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '81', 520003, 'andhrapradesh', 'A+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '67', 520003, 'andhrapradesh', 'B-'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '78', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '99', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '78', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '78', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '89', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '90', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '18', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '90', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '90', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '90', 534201, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com89', '8332819773', '18', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '90', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '8', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '1', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '9', 534201, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '89', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '89', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '90', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '09', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '89', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '9', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '9', 520003, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '90', 534201, 'andhrapradesh', 'O+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'A+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '19', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '18', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '19', 534201, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '19', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '19', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '9', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '19', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '89', 534201, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '9', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '18', 520003, 'andhrapradesh', 'AB+'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '18', 534201, 'andhrapradesh', 'A-'),
('hari', 'Female', 'hari.kanch.3@gmail.com', '8332819773', '89', 520003, 'andhrapradesh', 'B+'),
('ooha', 'Female', 'ooha@gmail.com', '8332819773', '19', 520003, 'andhrapradesh', 'B+'),
('hari', 'Female', 'sri.kancherla.3@gmail.com', '9290296396', '19', 520003, 'andhrapradesh', 'O+');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
