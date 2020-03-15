-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 06:12 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travels`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_pakage`
--

CREATE TABLE `client_pakage` (
  `c_pkg_id` int(11) NOT NULL,
  `p_pic` varchar(200) DEFAULT NULL,
  `c_pkg_name` varchar(50) NOT NULL,
  `c_pkg_cost` double NOT NULL,
  `c_pkg_desc` varchar(500) NOT NULL,
  `c_pkg_create_date` date NOT NULL,
  `c_pkg_chkIN_date` date NOT NULL,
  `c_pkg_chkOut_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_pakage`
--

INSERT INTO `client_pakage` (`c_pkg_id`, `p_pic`, `c_pkg_name`, `c_pkg_cost`, `c_pkg_desc`, `c_pkg_create_date`, `c_pkg_chkIN_date`, `c_pkg_chkOut_date`) VALUES
(1, 'uploads/packagesimages/Palaceresort.jpg', 'Holiday Special', 50000, 'This Package is special package from Holiday Planner. Eash adult person should pay  50000 (Fifty Thousand taka)  and For child (age under 12) have to pay 25000 (Twenty Five Thousand Taka) each. 3days and 2nights in The Palace Resort and Spa . Bahubal, Sylhet, Bangladesh.', '2018-01-31', '2018-02-20', '2018-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `client_table`
--

CREATE TABLE `client_table` (
  `c_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
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
  `c_pkg_id` int(11) NOT NULL,
  `c_pkg_desc` varchar(700) NOT NULL,
  `c_pkg_chkIN_date` date NOT NULL,
  `c_pkg_chkOut_date` date NOT NULL,
  `c_total_amount` int(11) NOT NULL,
  `c_status` enum('NW','PN','DW','PR','DN') CHARACTER SET latin1 NOT NULL DEFAULT 'PN',
  `c_paymenttype` varchar(500) NOT NULL,
  `c_paymentdate` date NOT NULL,
  `bkash` int(11) NOT NULL,
  `bkashTranXId` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_table`
--

INSERT INTO `client_table` (`c_id`, `customer_id`, `customer_name`, `c_fname`, `c_lname`, `c_address`, `c_nid`, `c_date`, `c_phone`, `c_age`, `c_email`, `c_bkash`, `c_adult`, `c_child`, `c_pakage`, `c_pkg_id`, `c_pkg_desc`, `c_pkg_chkIN_date`, `c_pkg_chkOut_date`, `c_total_amount`, `c_status`, `c_paymenttype`, `c_paymentdate`, `bkash`, `bkashTranXId`) VALUES
(153, 20, '', '', '', '', 0, '0000-00-00', 0, '', '', '', '2', '3', 'Holiday Special', 1, 'This Package is special package from Holiday Planner. Eash adult person should pay  50000 (Fifty Thousand taka)  and For child (age under 12) have to pay 25000 (Twenty Five Thousand Taka) each. 3days and 2nights in The Palace Resort and Spa . Bahubal, Sylhet, Bangladesh.', '2018-02-20', '2018-02-25', 175000, 'PN', '', '0000-00-00', 0, ''),
(154, 20, '', '', '', '', 0, '0000-00-00', 0, '', '', '', '2', '3', 'Holiday Special', 1, 'This Package is special package from Holiday Planner. Eash adult person should pay  50000 (Fifty Thousand taka)  and For child (age under 12) have to pay 25000 (Twenty Five Thousand Taka) each. 3days and 2nights in The Palace Resort and Spa . Bahubal, Sylhet, Bangladesh.', '2018-02-20', '2018-02-25', 175000, 'PN', '', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_pass` varchar(250) NOT NULL,
  `customer_address` varchar(250) NOT NULL,
  `customer_nid` varchar(250) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_dateofbirth` int(11) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_pass`, `customer_address`, `customer_nid`, `customer_phone`, `customer_dateofbirth`, `customer_email`, `customer_reg_date`) VALUES
(10, 'akter', '6zHAqWaDBVgc7byyncNCJi0lCHTPcoeoNRJA+7N4P5epIcXpYZwfN/biPz2tMFnDgQzNXAAw+5eOZS2gW5teaQ==', '', '', 0, 0, 'a@gmail.com', '0000-00-00'),
(20, 'aaa', '9/uIYDqCaelBygKEGKUzIoi17QEQ1yev5/Xk49sArkj2zSLZx45fTBv7PLu3mfWDhOJ4VbsZzrDHZPcZSFeLTQ==', '', '', 0, 0, 'a@gmail.com', '0000-00-00'),
(26, 'new', 'oOuLn6p5nNMvlqu13DM4WhYV1BwANRWtbaKg4c5onYX++ZJLcK81ucefVs5MAuUdcB+nWFeVCQE4ZDC8BEXCwQ==', '', '', 0, 0, 'EGRGvfey5hyjh6ujukji7jujuyjuyjuyjgguyjujguyjuguygj', '0000-00-00');

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
  `usr_reg_date` date NOT NULL,
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

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_fname`, `usr_lname`, `usr_sex`, `usr_dob`, `usr_user_type`, `usr_pic`, `usr_add`, `usr_email`, `usr_reg_date`, `usr_phone`, `usr_blood`, `usr_pass`, `usr_nid`, `usr_status`, `usr_view`) VALUES
(1, 'akter', 'Akter', 'Hossan', 'Male', '1993-06-27', 1, 'uploads/profilepic/Prof_20160106091323.jpg', '15 Dipika R/A, Islampur,Majortila,Sylhet', 'akter21hossan@gmail.com', '0000-00-00', '01749776211', NULL, 'Jp0AYdgVgpfhsy+hEAiqNOt2oUmymcwzXB3taHeyUFCw2ZCuEOAGhu/4+dQiUby4gWPYKgYKsNf0QJLThzZI2Q==', NULL, 'L', 'H'),
(2, 'HIRUS ', 'Abedur', 'Rahman', NULL, '2016-01-21', 1, 'uploads/profilepic/Prof_20160121122727.png', 'test', 'info@WilsonWalkerCanada.com', '0000-00-00', '18668667749', NULL, '02jANxXHFieY1EI1qaFik00Op71FOEaDCE2G2qV5La9F9GZ2D9mUZfK/TdFcui3poSDJrvNQT9YvN81ZMY9FRw==', NULL, 'L', 'S'),
(5, 'sufian', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, '0000-00-00', NULL, NULL, 'pHkzBG++ImBozvGXGfn/GMpgwKN9YadE5Gg6NFPhgZ2Q0jkMy0D4fqp+yDdaR7Fw3STtcjPnEjG3DMUGleFyBg==', NULL, NULL, 'S'),
(6, 'afzal', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, '0000-00-00', NULL, NULL, 'kSLtuugRQibrgEayRV94b1xxartSs7BE/C/v4sr2Ul5y5ncL8nf3NIReJlziNILmskXvoQ2LMIP6/5NFa230dQ==', NULL, NULL, 'S'),
(7, 'tanvir', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, '0000-00-00', NULL, NULL, 'Z+P7sRZjX31uzg30WFfFaXv+WXg5AZ4QqKt4SXZLUSz57wIaYXGkfsqGCIf6Iq80JdkLM9oHDKJjtKC1kvLCfA==', NULL, NULL, 'S'),
(8, 'mahdi', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, '0000-00-00', NULL, NULL, 'fCYNg9wOv6iWHJ2ideFHJP+/bip3UckE0EcaKJtKrQJq8pIBuLq1AvkY4WuIsNvVTnt5lJ8RoYiJ/Pho8JQK7w==', NULL, NULL, 'S'),
(20, 'aaa', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', NULL, '0000-00-00', NULL, NULL, '2CY/gkrMPKpSDPSu3Bkl35H2odzQ3j+RsB3iF98C83jzNKwfsoWcHFsHPVHpC0C6I9ZdhCes5VazrCayF7nvig==', NULL, NULL, 'S'),
(21, 'akter2', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika', 'hello@gmail.com', '2017-04-29', '879879', NULL, 'XezqvThro35XKpXQx/2dp0+GsD1vn8IjXjXWEOo4ea3cLyRO+UBB2qMCeBife3q/wgh1Os0ZgQWt504VaQUpAQ==', NULL, NULL, 'S'),
(27, 'akter3', NULL, NULL, NULL, NULL, NULL, NULL, 'dipika r/a', 'hello@gmail.com', '2018-02-22', '90989', NULL, '2o9k4hOIpOehEqxMkAFcBaf0pk9nyH+4BGvq+E/Ic7igPBTbrhk+Io+paxXYTL0cLzrnbtytPQgYXdD55EuGYQ==', NULL, NULL, 'S');

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
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

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
  MODIFY `c_pkg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `client_table`
--
ALTER TABLE `client_table`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
