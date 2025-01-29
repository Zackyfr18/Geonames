-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2025 at 07:27 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geonames`
--

-- --------------------------------------------------------

--
-- Table structure for table `geonames`
--

CREATE TABLE `geonames` (
  `geonameid` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `asciiname` varchar(200) DEFAULT NULL,
  `alternatenames` varchar(5000) DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  `feature_class` char(1) DEFAULT NULL,
  `feature_code` varchar(10) DEFAULT NULL,
  `country_code` char(2) DEFAULT NULL,
  `cc2` varchar(60) DEFAULT NULL,
  `admin1_code` varchar(20) DEFAULT NULL,
  `admin2_code` varchar(80) DEFAULT NULL,
  `admin3_code` varchar(20) DEFAULT NULL,
  `admin4_code` varchar(20) DEFAULT NULL,
  `population` bigint(20) DEFAULT NULL,
  `elevation` int(11) DEFAULT NULL,
  `dem` int(11) DEFAULT NULL,
  `timezone` varchar(40) DEFAULT NULL,
  `modification_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `geonames`
--

INSERT INTO `geonames` (`geonameid`, `name`, `asciiname`, `alternatenames`, `latitude`, `longitude`, `feature_class`, `feature_code`, `country_code`, `cc2`, `admin1_code`, `admin2_code`, `admin3_code`, `admin4_code`, `population`, `elevation`, `dem`, `timezone`, `modification_date`) VALUES
(939103, 'Zacky Fatut Rachman', 'JAckk', 'JAclkkk', '99.99999999', '-999.99999999', 'P', 'PPL', 'CA', '', '', '', '', '', 0, 0, 0, '', '0000-00-00'),
(5881791, 'Abbotsford', 'Abbotsford', 'Abbotsford,YXX,??????????', '49.05798000', '-122.25257000', 'P', 'PPL', 'CA', '', '02', '5957659', '', '', 151683, NULL, 114, 'America/Vancouver', '2013-04-22'),
(5882142, 'Acton Vale', 'Acton Vale', '', '45.65007000', '-72.56582000', 'P', 'PPL', 'CA', '', '10', '16', '', '', 5135, NULL, 90, 'America/Montreal', '2008-04-11'),
(5882799, 'Airdrie', 'Airdrie', 'Erdri,ai er de li,ayrdray,ayrdry,eeodeuli,?????,???????,???????,??????,????,????', '51.30011000', '-114.03528000', 'P', 'PPL', 'CA', '', '01', '', '', '', 24673, NULL, 1086, 'America/Edmonton', '2008-04-11'),
(5882873, 'Ajax', 'Ajax', 'Adzhaks,Ehjdzhaks,Ejdzaks,ajaks, awntaryw,eijegseu,??????,??????,???????,?????? ????????,????', '43.85012000', '-79.03288000', 'P', 'PPL', 'CA', '', '08', '', '', '', 90167, NULL, 97, 'America/Toronto', '2011-12-30'),
(5884083, 'Alma', 'Alma', 'Al\'ma,Alma,YTF,alma,alma, kbk,alma, kybk,????,?????,????,????? ???,????? ????', '48.55009000', '-71.64910000', 'P', 'PPL', 'CA', '', '10', '02', '', '', 29526, NULL, 90, 'America/Montreal', '2010-01-29'),
(5884473, 'Amherstburg', 'Amherstburg', '', '42.11679000', '-83.04985000', 'P', 'PPL', 'CA', '', '08', '', '', '', 11459, NULL, 183, 'America/Toronto', '2006-01-22'),
(5884588, 'Amos', 'Amos', 'Amos,YEY,amws,amws, kbk,amws, kybk,????,????? ???,????? ????,????', '48.56688000', '-78.11624000', 'P', 'PPL', 'CA', '', '10', '08', '', '', 17918, NULL, 298, 'America/Montreal', '2010-09-22'),
(5885280, 'Angus', 'Angus', '', '44.31681000', '-79.88295000', 'P', 'PPLL', 'CA', '', '08', '', '', '', 10269, NULL, 193, 'America/Toronto', '2006-01-27'),
(5885383, 'Anmore', 'Anmore', '', '49.31637000', '-122.85263000', 'P', 'PPL', 'CA', '', '02', '5915', '', '', 126456, NULL, 183, 'America/Vancouver', '2013-08-28'),
(5886182, 'Antigonish', 'Antigonish', '', '45.61685000', '-61.99858000', 'P', 'PPL', 'CA', '', '07', '', '', '', 5003, NULL, 17, 'America/Halifax', '2008-04-11'),
(5887214, 'Arnprior', 'Arnprior', '', '45.43341000', '-76.34939000', 'P', 'PPL', 'CA', '', '08', '', '', '', 9607, NULL, 72, 'America/Toronto', '2008-04-11'),
(5887470, 'Asbestos', 'Asbestos', '', '45.76678000', '-71.93240000', 'P', 'PPL', 'CA', '', '10', '05', '', '', 7190, NULL, 252, 'America/Montreal', '2008-04-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geonames`
--
ALTER TABLE `geonames`
  ADD PRIMARY KEY (`geonameid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
