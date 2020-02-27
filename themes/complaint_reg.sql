-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 11:29 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complaint_reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE `authassignment` (
  `itemname` varchar(64) COLLATE utf8_bin NOT NULL,
  `userid` varchar(64) COLLATE utf8_bin NOT NULL,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('Guest', '3', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE `authitem` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('ComplaintsRegistration.Admin', 0, NULL, NULL, 'N;'),
('ComplaintsRegistration.Create', 0, NULL, NULL, 'N;'),
('ComplaintsRegistration.Delete', 0, NULL, NULL, 'N;'),
('ComplaintsRegistration.Index', 0, NULL, NULL, 'N;'),
('ComplaintsRegistration.Update', 0, NULL, NULL, 'N;'),
('ComplaintsRegistration.View', 0, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE `authitemchild` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('Authenticated', 'ComplaintsRegistration.Admin'),
('Authenticated', 'ComplaintsRegistration.Create'),
('Authenticated', 'ComplaintsRegistration.Delete'),
('Authenticated', 'ComplaintsRegistration.Update'),
('Guest', 'ComplaintsRegistration.Create');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(225) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `complaint` varchar(1000) NOT NULL,
  `workAssignTo` varchar(30) NOT NULL,
  `actionTaken` varchar(1000) NOT NULL,
  `status` varchar(30) NOT NULL,
  `workDoneOn` date DEFAULT NULL,
  `updatedBy` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `name`, `date`, `location`, `contact`, `complaint`, `workAssignTo`, `actionTaken`, `status`, `workDoneOn`, `updatedBy`) VALUES
(53, 'gaikwad1', '2018-01-19', 'M20', '60163', 'PC LAN not working', 'Hemant', 'Change cable now working ok', 'COMPLETED', '2018-01-19', 'computeradmin'),
(54, 'computeradmin', '2018-01-19', 'M20', '60163', 'PC restarting every 25 min.Printer also not working.', '', '', 'pending', '1970-01-01', ''),
(55, 'computeradmin', '2018-01-19', 'M-36', '60336', 'Smart Time not working', '', '', 'pending', '1970-01-01', ''),
(56, 'vivek', '2018-02-08', 'Servive bilding', '60178', 'Hdd replacement', 'ADHI', 'Pc HD CHANGE', 'COMPLETED', '2018-12-18', 'shreyas'),
(57, 'admin', '2018-02-08', 'M 3', '60384', 'Auto Cad installation.\r\n', 'Hemant pawar', 'Installed auotcad', 'COMPLETED', '2018-02-08', 'admin'),
(58, 'shreyas', '2018-12-18', 'M-20', '60163', 'Pc very Slow. MS office not working', 'Adhi', 'Ram up grade', 'COMPLETED', '2018-12-18', 'admin'),
(59, 'Guest', '2018-12-21', 'M-9', '2312312', 'wefsddfsgf', '', '', 'pending', '1970-01-01', ''),
(60, 'vivek', '2018-12-21', 'M-9', '2323', 'eeefsd', '', '', 'pending', '1970-01-01', ''),
(61, '123', '2018-12-21', 'AFFF', '7789123456', 'fjfjfjfd', '', '', 'pending', '1970-01-01', ''),
(62, 'ShAaGGy', '2018-12-21', 'mumbai', '60613', 'BIOS has unrecognized password.', '', '', 'pending', '1970-01-01', ''),
(63, 'admin', '2018-12-21', 'M-20', '60163', 'xxxx', '', '', 'pending', '1970-01-01', ''),
(64, 'vivek', '2018-12-21', 'M-20', '60', 'xxxxxxxxxx', '', '', 'pending', '1970-01-01', ''),
(65, 'normal', '2018-12-21', 'M-9', '796', '1. vjkgj,g,g', 'fwgf', 'ersfsrgf', 'COMPLETED', '2018-12-21', 'admin'),
(66, 'normal', '2018-12-21', '97', '26', '2.xxnxx', '', '', 'pending', '1970-01-01', '');

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `itemname` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(3, 'gaikwad', 'vivek', '1984-02-13'),
(16, 'admin', 'civil', '0000-00-00'),
(17, 'admin', 'com', '0000-00-00'),
(18, 'admin', 'electrical', '0000-00-00'),
(19, 'admin', 'electronic', '0000-00-00'),
(20, 'admin', 'mech', '0000-00-00'),
(21, 'Kulshreshtha', 'Amit', '1967-05-23'),
(22, 'Patil', 'Shreyas', '1997-10-23'),
(23, 'sdasd', 'sqdas', '0000-00-00'),
(24, 'Dummy', 'Dummy', '1999-12-02'),
(25, 'Vartak', 'Sagar', '1998-09-25'),
(26, 'Pawar', 'Shantanu', '1999-04-05'),
(27, 'normal', 'normal', '0000-00-00'),
(28, '123', '123', '1998-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE `tbl_profiles_fields` (
  `id` int(10) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(255) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{\"ui-theme\":\"redmond\"}', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1545474427, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1511951670, 0, 1),
(3, 'vivek', '061a01a98f80f415b1431236b62bb10b', 'vivek@yahoo.com', '741b86afa403d58c79560a894dcefc7a', 1511948640, 1545430539, 0, 1),
(16, 'civiladmin', '3ee7e7b7e175ff6da542f49bf453a3fd', 'civil@yahoo.com', 'e520cad46b4a7746f9a40868b056af23', 1516346021, 1516861469, 0, 1),
(17, 'computeradmin', '17f95bea32debd5705d53c1543e1bcc1', 'com@yahoo.com', '3ac02a29e7ddaff1a5cd9d2c0f1964f5', 1516347134, 1516351565, 0, 1),
(18, 'electricaladmin', 'c996722caa964d5f0906dcc445daa7ca', 'yahoo@yahoo.com', 'd0b43683fcfcaa7385508d893630dc12', 1516360129, 1516360129, 0, 1),
(19, 'electronicadmin', '0b4097f75d329d17cd8dd9b2bebf52e9', 'tyahho@yahoo.com', '4237d68bc09a0814bdffaa08c3cfaf2b', 1516360188, 1516360343, 0, 1),
(20, 'mechadmin', '28ef26773adf7a738d91a5afdd22f133', 'mech@yahoo.com', '42b122ceb5b2d0f5f20f749a5ebd695d', 1516360245, 1516360245, 0, 1),
(21, 'amitk', '5af8170528842c510d70eff31a44e24a', 'amitkulshrestha@barctara.gov.in', '1458f71c075ca901bc36907b611784df', 1516779856, 0, 0, 0),
(22, 'Shreyas', '08fa0a7e19b1eaaa7655d54fabf8ec61', '123@gmail.com', '849efc1829f6944a8f785e868f838645', 1545175718, 1545430722, 0, 1),
(23, 'Testjsbbn', '4297f44b13955235245b2497399d7a93', '123rrr@gmail.com', 'd59f7cc53d2553dfd3c564f43b297940', 1545349336, 0, 0, 0),
(24, '123', '827ccb0eea8a706c4c34a16891f84e7b', '12345@gmail.com', '52fdb650c3bf8a29675a11c09ef207a2', 1545353049, 1545353114, 0, 1),
(25, 'ShAaGGy', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'shaaggy.nusta.raada@gmail.com', '9718f3fd003e00c07ff99b07eded3839', 1545413828, 1545430522, 0, 1),
(26, 'SXDPZ13', 'e13dd027be0f2152ce387ac0ea83d863', 'sxdpz13@gmail.com', '75ca35d73158c48301dc36228b1223d3', 1545416422, 1545431136, 1, 1),
(27, 'normal', 'fea087517c26fadd409bd4b9dc642555', 'normal@gmail.com', '2dc9ab311cfa8d16a5712f7aa2774078', 1545431004, 1545474294, 0, 1),
(28, '1234', '81dc9bdb52d04dc20036dbd8313ed055', '12344@gmail.com', '76f9d1ba006db1b550058b835d3ad53c', 1545431230, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`itemname`);

--
-- Indexes for table `tbl_profiles`
--
ALTER TABLE `tbl_profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varname` (`varname`,`widget`,`visible`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `superuser` (`superuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tbl_profiles_fields`
--
ALTER TABLE `tbl_profiles_fields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
