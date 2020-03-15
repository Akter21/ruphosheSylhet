-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2016 at 04:06 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_pakage`
--

CREATE TABLE `client_pakage` (
  `c_pkg_id` int(11) NOT NULL,
  `c_pkg_name` varchar(50) NOT NULL,
  `c_pkg_cost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_pakage`
--

INSERT INTO `client_pakage` (`c_pkg_id`, `c_pkg_name`, `c_pkg_cost`) VALUES
(1, 'ko', 980),
(4, 'syl-ctg-syl 2DAYS 3 NIGHTS ', 20000),
(5, 'syl-ctg-syl 3 DAYS 3 NIGHTS ', 15000),
(6, 'syl-ctg-syl 5DAYS 3NIGHTS', 30000),
(7, 'syl-dha-syl 5DAYS 3NIGHTS', 20000),
(8, 'syl-dha-syl 3DAYS 2NIGHTS', 16000),
(9, 'syl-ctg-syl 5DAYS 3NIGHTS', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE `client_table` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `c_nid` int(50) NOT NULL,
  `c_date` date NOT NULL,
  `c_phone` int(11) NOT NULL,
  `c_age` varchar(15) NOT NULL,
  `c_email` varchar(60) NOT NULL,
  `c_bkash` varchar(30) NOT NULL,
  `c_adult` varchar(50) NOT NULL,
  `c_child` varchar(50) NOT NULL,
  `c_pakage` varchar(100) NOT NULL,
  `c_total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_table`
--

INSERT INTO `client_table` (`c_id`, `c_fname`, `c_lname`, `c_address`, `c_nid`, `c_date`, `c_phone`, `c_age`, `c_email`, `c_bkash`, `c_adult`, `c_child`, `c_pakage`, `c_total_amount`) VALUES
(4, 'Abedur', 'Rahman', 'Islampur', 987654, '2016-12-08', 1749776211, '30', 'sufian@gmail.com', '3456', '3', '1', 'syl-ctg-syl 2DAYS 3 NIGHTS ', 0),
(5, 'sufian', 'ahmed', 'test', 987654, '2016-12-15', 1749776211, '23', 'sufian@gmail.com', '3456', '3', '1', 'syl-ctg-syl 2DAYS 3 NIGHTS ', 80000),
(6, 'razzakur', 'rashid', 'saymoli', 8975432, '2016-12-01', 1715678765, '23', 'razzakur@engineersit.com', '5466', '2', '1', 'syl-dha-syl 5 DAYS 3 NIGHTS ', 60000),
(7, 'ad', 'bd', 'fjehrkf', 2147483647, '2016-12-07', 78642, '23', 'jhfjrewhfre', '7868643', '3', '2', 'syl-ctg-syl 5DAYS 3NIGHTS', 150000),
(8, 'akter', 'hossan', 'dipika', 2147483647, '2016-12-13', 1749776211, '23', 'akter21hossan@gmail.com', '9876', '2', '1', 'syl-ctg-syl 5DAYS 3NIGHTS', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(45) DEFAULT NULL,
  `usr_fname` varchar(45) DEFAULT NULL,
  `usr_lname` varchar(45) DEFAULT NULL,
  `usr_sex` varchar(10) DEFAULT NULL,
  `usr_dob` date DEFAULT NULL,
  `usr_user_type` int(11) DEFAULT NULL,
  `usr_pic` varchar(150) DEFAULT NULL,
  `usr_add` varchar(250) DEFAULT NULL,
  `usr_email` varchar(45) DEFAULT NULL,
  `usr_phone` varchar(45) DEFAULT NULL,
  `usr_blood` varchar(45) DEFAULT NULL,
  `usr_pass` varchar(250) DEFAULT NULL,
  `usr_nid` varchar(45) DEFAULT NULL,
  `usr_status` enum('L','D','B') DEFAULT NULL,
  `usr_view` enum('S','H') DEFAULT 'S'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_fname`, `usr_lname`, `usr_sex`, `usr_dob`, `usr_user_type`, `usr_pic`, `usr_add`, `usr_email`, `usr_phone`, `usr_blood`, `usr_pass`, `usr_nid`, `usr_status`, `usr_view`) VALUES
(1, 'akter', 'Akter', 'Hossan', 'Male', '1993-06-27', 1, 'uploads/profilepic/Prof_20160106091323.jpg', '15 Dipika R/A, Islampur,Majortila,Sylhet', 'akter21hossan@gmail.com', '01749776211', NULL, 'Jp0AYdgVgpfhsy+hEAiqNOt2oUmymcwzXB3taHeyUFCw2ZCuEOAGhu/4+dQiUby4gWPYKgYKsNf0QJLThzZI2Q==', NULL, 'L', 'H'),
(2, 'HIRUS ', 'Abedur', 'Rahman', NULL, '2016-01-21', 1, 'uploads/profilepic/Prof_20160121122727.png', 'test', 'info@WilsonWalkerCanada.com', '18668667749', NULL, '02jANxXHFieY1EI1qaFik00Op71FOEaDCE2G2qV5La9F9GZ2D9mUZfK/TdFcui3poSDJrvNQT9YvN81ZMY9FRw==', NULL, 'L', 'S'),
(5, 'sufian', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, NULL, NULL, 'pHkzBG++ImBozvGXGfn/GMpgwKN9YadE5Gg6NFPhgZ2Q0jkMy0D4fqp+yDdaR7Fw3STtcjPnEjG3DMUGleFyBg==', NULL, NULL, 'S'),
(6, 'afzal', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, NULL, NULL, 'kSLtuugRQibrgEayRV94b1xxartSs7BE/C/v4sr2Ul5y5ncL8nf3NIReJlziNILmskXvoQ2LMIP6/5NFa230dQ==', NULL, NULL, 'S'),
(7, 'tanvir', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, NULL, NULL, 'Z+P7sRZjX31uzg30WFfFaXv+WXg5AZ4QqKt4SXZLUSz57wIaYXGkfsqGCIf6Iq80JdkLM9oHDKJjtKC1kvLCfA==', NULL, NULL, 'S'),
(8, 'mahdi', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, NULL, NULL, 'fCYNg9wOv6iWHJ2ideFHJP+/bip3UckE0EcaKJtKrQJq8pIBuLq1AvkY4WuIsNvVTnt5lJ8RoYiJ/Pho8JQK7w==', NULL, NULL, 'S'),
(9, 'kolil', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, NULL, NULL, '4XH6L+CIEKLUUI+Wyp1V/IcOVBSMgYNsD+DkueEcA6fLFyPhgclBoKVHj3jP9PHLPmMVWH3YdCaE17TbdHL5ZA==', NULL, NULL, 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_pakage`
--
ALTER TABLE `client_pakage`
  ADD PRIMARY KEY (`c_pkg_id`);

--
-- Indexes for table `client_table`
--
ALTER TABLE `client_table`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_pakage`
--
ALTER TABLE `client_pakage`
  MODIFY `c_pkg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `client_table`
--
ALTER TABLE `client_table`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
