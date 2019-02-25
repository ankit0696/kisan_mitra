-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 07:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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
-- Table structure for table `admin_login_tbl`
--

CREATE TABLE `admin_login_tbl` (
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_tbl`
--

INSERT INTO `admin_login_tbl` (`email`, `password`) VALUES
('sih2019@admin', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `state_wise_rice_tbl`
--

CREATE TABLE `state_wise_rice_tbl` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `showLabel` int(5) NOT NULL DEFAULT '1',
  `state` varchar(50) NOT NULL,
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

INSERT INTO `state_wise_rice_tbl` (`id`, `showLabel`, `state`, `rice_jan`, `rice_feb`, `rice_mar`, `rice_apr`, `rice_may`, `rice_jun`, `rice_jul`, `rice_aug`, `rice_sep`, `rice_oct`, `rice_nov`, `rice_dec`) VALUES
(001, 1, 'ANDAMAN AND NICOBAR ISLANDS', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(002, 1, 'ANDHRA PRADESH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(003, 1, 'ARUNACHAL PRADESH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(004, 1, 'ASSAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(005, 1, 'BIHAR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(006, 1, 'CHATTISGARH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(007, 1, 'CHANDIGARH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(008, 1, 'DAMAN AND DIU', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(009, 1, 'DELHI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(010, 1, 'DADRA AND NAGAR HAVELI', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(011, 1, 'GOA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(012, 1, 'GUJARAT', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(013, 1, 'HIMACHAL PRADESH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(014, 1, 'HARYANA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(015, 1, 'JAMMU AND KASHMIR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(016, 1, 'JHARKHAND', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(017, 1, 'KERALA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(018, 1, 'KARNATAKA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(019, 1, 'LAKSHADWEEP', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(020, 1, 'MEGHALAYA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(021, 1, 'MAHARASHTRA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(022, 1, 'MANIPUR', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(023, 1, 'MADHYA PRADESH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(024, 1, 'MIZORAM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(025, 1, 'NAGALAND', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(026, 1, 'ORISSA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(027, 1, 'PUNJAB', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(028, 1, 'PONDICHERRY', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(029, 1, 'RAJASTHAN', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(030, 1, 'SIKKIM', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(031, 1, 'TAMIL NADU', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(032, 1, 'TRIPURA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(033, 1, 'UTTARAKHAND', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(034, 1, 'UTTAR PRADESH', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(035, 1, 'WEST BENGAL', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(036, 1, 'TELANGANA', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_tbl`
--
ALTER TABLE `admin_login_tbl`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `state_wise_rice_tbl`
--
ALTER TABLE `state_wise_rice_tbl`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
