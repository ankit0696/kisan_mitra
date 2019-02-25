-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 04:45 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kisan_mitra_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `state_wise_rice_tbl`
--

CREATE TABLE `state_wise_rice_tbl` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `showLabel` int(5) NOT NULL DEFAULT '1',
  `rice_jan` int(5) NOT NULL,
  `rice_feb` int(5) NOT NULL,
  `rice_mar` int(5) NOT NULL,
  `rice_apr` int(5) NOT NULL,
  `rice_may` int(5) NOT NULL,
  `rice_jun` int(5) NOT NULL,
  `rice_jul` int(5) NOT NULL,
  `rice_aug` int(5) NOT NULL,
  `rice_sep` int(5) NOT NULL,
  `rice_oct` int(5) NOT NULL,
  `rice_nov` int(5) NOT NULL,
  `rice_dec` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_wise_rice_tbl`
--

INSERT INTO `state_wise_rice_tbl` (`id`, `showLabel`, `rice_jan`, `rice_feb`, `rice_mar`, `rice_apr`, `rice_may`, `rice_jun`, `rice_jul`, `rice_aug`, `rice_sep`, `rice_oct`, `rice_nov`, `rice_dec`) VALUES
(001, 1, 54, 32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(002, 1, 66, 87, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state_wise_rice_tbl`
--
ALTER TABLE `state_wise_rice_tbl`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
