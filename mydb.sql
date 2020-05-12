-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 04:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `hotelno` int(11) NOT NULL,
  `guestno` decimal(5,0) NOT NULL,
  `datefrom` date NOT NULL,
  `dateto` date DEFAULT NULL,
  `roomno` decimal(5,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`hotelno`, `guestno`, `datefrom`, `dateto`, `roomno`) VALUES
(1, '10001', '2004-04-01', '2004-04-08', '501'),
(1, '10002', '2016-05-04', '2004-05-29', '601'),
(1, '10004', '2004-04-15', '2004-05-15', '601'),
(1, '10005', '2004-05-02', '2004-05-07', '501'),
(2, '10001', '2004-05-01', NULL, '701'),
(2, '10003', '2004-05-20', NULL, '1001'),
(2, '10005', '2004-05-12', '2030-05-04', '1101'),
(2, '10006', '2004-04-21', NULL, '1101'),
(2, '10007', '2004-05-13', '2004-05-15', '1001');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guestno` decimal(5,0) NOT NULL,
  `guestname` varchar(20) DEFAULT NULL,
  `guestaddress` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guestno`, `guestname`, `guestaddress`) VALUES
('10001', 'John Kay', '56 High St, London'),
('10002', 'Mike Ritchie', '18 Tain St, London'),
('10003', 'Mary Tregear', '5 Tarbot Rd, Aberdeen'),
('10004', 'Joe Keogh', '2 Fergus Dr, Aberdeen'),
('10005', 'Carol Farrel', '6 Achray St, Glasgow'),
('10006', 'Tina Murphy', '63 Well St, Glasgow'),
('10007', 'Tony Shaw', '12 Park Pl, Glasgow');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelno` int(11) NOT NULL,
  `Name1` varchar(85) NOT NULL,
  `State` varchar(30) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Price` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelno`, `Name1`, `State`, `City`, `Rate`, `Price`) VALUES
(1, 'Maisan Hotel', 'Dubai', 'Abu Dhabi', 4, '88.00'),
(2, 'Holiday In', 'Dubai', 'Abu Dhabi', 5, '98.00'),
(3, 'Rove Dubai Marina', 'Dubai', 'Abu Dhabi', 3, '65.00'),
(4, 'Al Bandar Rotana', 'Dubai', 'Abu Dhabi', 4, '90.00'),
(5, 'Hampton By Hilton', 'Dubai', 'Abu Dhabi', 5, '80.00'),
(6, 'Renaissance', 'Dubai', 'Abu Dhabi', 5, '56.00'),
(7, 'Forenom Oulu', 'Finland', 'Helsinki', 4, '56.00'),
(8, 'Helsinki-Boulevard', 'Finland', 'Helsinki', 5, '90.00'),
(9, 'Lilla Roberts', 'Finland', 'Helsinki', 3, '80.00'),
(10, 'Airport Pilotti', 'Finland', 'Helsinki', 3, '0.00'),
(11, 'Radisson Marina', 'Finland', 'Helsinki', 4, '0.00'),
(12, 'Both Helsinki', 'Finland', 'Helsinki', 5, '0.00'),
(13, 'Volcano Santorini', 'Greece', 'Santorini', 5, '0.00'),
(14, 'Sunset Paros', 'Greece', '', 5, '0.00'),
(15, 'Mykonos Princess', 'Greece', '', 5, '0.00'),
(16, 'Royal Hotel', 'Greece', '', 4, '0.00'),
(17, 'Avaton Luxory', 'Greece', '', 5, '0.00'),
(18, 'Diana Palace', 'Greece', '', 5, '0.00'),
(19, 'B&B Treviso', 'Italy', '', 5, '0.00'),
(20, 'Ocelle Thermae', 'Italy', '', 3, '0.00'),
(21, 'Hotel The Cube', 'Italy', '', 4, '0.00'),
(22, 'Hotel Mozart', 'Italy', '', 5, '0.00'),
(23, 'Best Wester', 'Italy', '', 3, '0.00'),
(24, 'Hotel Abazzia', 'Italy', '', 4, '0.00'),
(25, 'Water Breeze', 'Maldives', '', 5, '0.00'),
(26, 'Wave Sound', 'Maldives', '', 0, '0.00'),
(27, 'Arena Beach', 'Maldives', '', 0, '0.00'),
(28, 'Fihalhohi Island', 'Maldives', '', 0, '0.00'),
(29, 'Velana Blue', 'Maldives', '', 0, '0.00'),
(30, 'Kaani Beach Hotel', 'Maldives', '', 0, '0.00'),
(31, 'Holiday Inn', 'Switzerland', '', 0, '0.00'),
(32, 'Walhalla Guest', 'Switzerland', '', 0, '0.00'),
(33, 'Touchbed Gallen', 'Switzerland', '', 0, '0.00'),
(34, 'Millennium', 'Switzerland', '', 0, '0.00'),
(35, 'Grand Des Bains', 'Switzerland', '', 0, '0.00'),
(36, 'Raddison Blue', 'Switzerland', '', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `image` text NOT NULL,
  `hotelno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `Name`, `image`,`hotelno`) VALUES
(1, 'Maisan Hotel', 'd1.1.jpg',`1`),
(2, 'Maisan Hotel', 'd1.2.jpg',`1`),
(3, 'Maisan Hotel', 'd1.3.jpg',`1`),
(4, 'Maisan Hotel', 'd1.4.jpg',`1`),
(5, 'Maisan Hotel', 'd1.5.jpg',`1`),
(6, 'Maisan Hotel', 'd1.6.jpg',`1`),
(7, 'Holiday In', 'd2.1.jpg',`2`),
(8, 'Holiday In', 'd2.2.jpg',`2`),
(9, 'Holiday In', 'd2.3.jpg',`2`),
(10, 'Holiday In', 'd2.4.jpg',`2`),
(11, 'Holiday In', 'd2.5.jpg',`2`),
(12, 'Holiday In', 'd2.6.jpg',`2`),
(13, 'Rove Dubai Marina', 'd3.1.jpg',`3`),
(14, 'Rove Dubai Marina', 'd3.2.jpg',`3`),
(15, 'Rove Dubai Marina', 'd3.3.jpg',`3`),
(16, 'Rove Dubai Marina', 'd3.4.jpg',`3`),
(17, 'Rove Dubai Marina', 'd3.5.jpg',`3`),
(18, 'Rove Dubai Marina', 'd3.6.jpg',`3`),
(19, 'Al Bandar Rotana', 'd4.1.jpg',`4`),
(20, 'Al Bandar Rotana', 'd4.2.jpg',`4`),
(21, 'Al Bandar Rotana', 'd4.3.jpg',`4`),
(22, 'Al Bandar Rotana', 'd4.4.jpg',`4`),
(23, 'Al Bandar Rotana', 'd4.5.jpg',`4`),
(24, 'Al Bandar Rotana', 'd4.6.jpg',`4`),
(25, 'Hampton By Hilton', 'd5.1.jpg',`5`),
(26, 'Hampton By Hilton', 'd5.2.jpg',`5`),
(27, 'Hampton By Hilton', 'd5.3.jpg',`5`),
(28, 'Hampton By Hilton', 'd5.4.jpg',`5`),
(29, 'Hampton By Hilton', 'd5.5.jpg',`5`),
(30, 'Hampton By Hilton', 'd5.6.webp',`5`),
(31, 'Renaissance', 'd6.1.jpg',`6`),
(32, 'Renaissance', 'd6.2.jpg',`6`),
(33, 'Renaissance', 'd6.3.jpg',`6`),
(34, 'Renaissance', 'd6.4.jpg',`6`),
(35, 'Renaissance', 'd6.5.jpg',`6`),
(36, 'Renaissance', 'd6.6.jpg',`6`),
(37, 'Forenom Oulu', 'f1.1.jpg',`7`),
(38, 'Forenom Oulu', 'f1.2.jpg',`7`),
(39, 'Forenom Oulu', 'f1.3.jpg',`7`),
(40, 'Forenom Oulu', 'f1.4.jpg',`7`),
(41, 'Forenom Oulu', 'f1.5.jpg',`7`),
(42, 'Forenom Oulu', 'f1.6.jpg',`7`),
(43, 'Helsinki-Boulevard', 'f2.1.jpg',`8`),
(44, 'Helsinki-Boulevard', 'f2.2.jpg',`8`),
(45, 'Helsinki-Boulevard', 'f2.3.jpg',`8`),
(46, 'Helsinki-Boulevard', 'f2.4.jpg',`8`),
(47, 'Helsinki-Boulevard', 'f2.5.jpg',`8`),
(48, 'Helsinki-Boulevard', 'f2.6.jpg',`8`),
(49, 'Lilla Roberts', 'f3.1.jpg',`9`),
(50, 'Lilla Roberts', 'f3.2.jpg',`9`),
(51, 'Lilla Roberts', 'f3.3.jpg',`9`),
(52, 'Lilla Roberts', 'f3.4.jpg',`9`),
(53, 'Lilla Roberts', 'f3.5.jpg',`9`),
(54, 'Lilla Roberts', 'f3.6.jpg',`9`),
(55, 'Airport Pilotti', 'f4.1.jpg',`10`),
(56, 'Airport Pilotti', 'f4.2.jpg',`10`),
(57, 'Airport Pilotti', 'f4.3.jpg',`10`),
(58, 'Airport Pilotti', 'f4.4.jpg',`10`),
(59, 'Airport Pilotti', 'f4.5.jpg',`10`),
(60, 'Airport Pilotti', 'f4.6.jpg',`10`),
(61, 'Radisson Marina', 'f5.1.jpg',`11`),
(62, 'Radisson Marina', 'f5.2.jpg',`11`),
(63, 'Radisson Marina', 'f5.3.jpg',`11`),
(64, 'Radisson Marina', 'f5.4.jpg',`11`),
(65, 'Radisson Marina', 'f5.5.jpg',`11`),
(66, 'Radisson Marina', 'f5.6.jpg',`11`),
(67, 'Both Helsinki', 'f6.1.webp',`12`),
(68, 'Both Helsinki', 'f6.2.jpg',`12`),
(69, 'Both Helsinki', 'f6.3.jpg',`12`),
(70, 'Both Helsinki', 'f6.4.jpg',`12`),
(71, 'Both Helsinki', 'f6.5.jpg',`12`),
(72, 'Both Helsinki', 'f6.6.jpg',`12`),
(73, 'Volcano Santorini', 'g1.1.jpg',`13`),
(74, 'Volcano Santorini', 'g1.2.PNG',`13`),
(75, 'Volcano Santorini', 'g1.3.PNG',`13`),
(76, 'Volcano Santorini', 'g1.4.PNG',`13`),
(77, 'Volcano Santorini', 'g1.5.PNG',`13`),
(78, 'Volcano Santorini', 'g1.6.PNG',`13`),
(79, 'Sunset Paros', 'g2.1.PNG',`14`),
(80, 'Sunset Paros', 'g2.2.PNG',`14`),
(81, 'Sunset Paros', 'g2.3.PNG',`14`),
(82, 'Sunset Paros', 'g2.4.PNG',`14`),
(83, 'Sunset Paros', 'g2.5.PNG',`14`),
(84, 'Sunset Paros', 'g2.6.PNG',`14`),
(85, 'Mykonos Princess', 'g3.1.PNG',`15`),
(86, 'Mykonos Princess', 'g3.2.PNG',`15`),
(87, 'Mykonos Princess', 'g3.3.PNG',`15`),
(88, 'Mykonos Princess', 'g3.4.PNG',`15`),
(89, 'Mykonos Princess', 'g3.5.PNG',`15`),
(90, 'Mykonos Princess', 'g3.6.PNG',`15`),
(91, 'Royal Hotel', 'g4.1.PNG',`16`),
(92, 'Royal Hotel', 'g4.2.PNG',`16`),
(93, 'Royal Hotel', 'g4.3.PNG',`16`),
(94, 'Royal Hotel', 'g4.4.PNG',`16`),
(95, 'Royal Hotel', 'g4.5.PNG',`16`),
(96, 'Royal Hotel', 'g4.6.PNG',`16`),
(97, 'Avaton Luxory', 'g5.1.PNG',`17`),
(98, 'Avaton Luxory', 'g5.2.PNG',`17`),
(99, 'Avaton Luxory', 'g5.3.PNG',`17`),
(100, 'Avaton Luxory', 'g5.4.PNG',`17`),
(101, 'Avaton Luxory', 'g5.5.PNG',`17`),
(102, 'Avaton Luxory', 'g5.6.PNG',`17`),
(103, 'Diana Palace', 'g6.1.PNG',`18`),
(104, 'Diana Palace', 'g6.2.PNG',`18`),
(105, 'Diana Palace', 'g6.3.PNG',`18`),
(106, 'Diana Palace', 'g6.4.PNG',`18`),
(107, 'Diana Palace', 'g6.5.PNG',`18`),
(108, 'Diana Palace', 'g6.6.PNG',`18`),
(109, 'B&B Treviso', 'i1.1.jpg',`19`),
(110, 'B&B Treviso', 'i1.2.jpg',`19`),
(111, 'B&B Treviso', 'i1.3.jpg',`19`),
(112, 'B&B Treviso', 'i1.4.jpg',`19`),
(113, 'B&B Treviso', 'i1.5.jpg',`19`),
(114, 'B&B Treviso', 'i1.6.jpg',`19`),
(115, 'Ocelle Thermae', 'i2.1.jpg',`20`),
(116, 'Ocelle Thermae', 'i2.2.jpg',`20`),
(117, 'Ocelle Thermae', 'i2.3.jpg',`20`),
(118, 'Ocelle Thermae', 'i2.4.jpg',`20`),
(119, 'Ocelle Thermae', 'i2.5.jpg',`20`),
(120, 'Ocelle Thermae', 'i2.6.jpg',`20`),
(121, 'Hotel the Cube', 'i3.1.jpg',`21`),
(122, 'Hotel the Cube', 'i3.2.jpg',`21`),
(123, 'Hotel the Cube', 'i3.3.jpg',`21`),
(124, 'Hotel the Cube', 'i3.4.jpg',`21`),
(125, 'Hotel the Cube', 'i3.5.jpg',`21`),
(126, 'Hotel the Cube', 'i3.6.jpg',`21`),
(127, 'Hotel Mozart', 'i4.1.jpg',`22`),
(128, 'Hotel Mozart', 'i4.2.jpg',`22`),
(129, 'Hotel Mozart', 'i4.3.jpg',`22`),
(130, 'Hotel Mozart', 'i4.4.jpg',`22`),
(131, 'Hotel Mozart', 'i4.5.jpg',`22`),
(132, 'Hotel Mozart', 'i4.6.jpg',`22`),
(133, 'Best Wester', 'i5.1.jpg',`23`),
(134, 'Best Wester', 'i5.2.jpg',`23`),
(135, 'Best Wester', 'i5.3.jpg',`23`),
(136, 'Best Wester', 'i5.4.jpg',`23`),
(137, 'Best Wester', 'i5.5.jpg',`23`),
(138, 'Best Wester', 'i5.6.jpg',`23`),
(139, 'Hotel Abazzia', 'i6.1.jpg',`24`),
(140, 'Hotel Abazzia', 'i6.2.jpg',`24`),
(141, 'Hotel Abazzia', 'i6.3.jpg',`24`),
(142, 'Hotel Abazzia', 'i6.4.jpg',`24`),
(143, 'Hotel Abazzia', 'i6.5.jpg',`24`),
(144, 'Hotel Abazzia', 'i6.6.jpg',`24`),
(145, 'Water Breeze', 'm1.1.jpg',`25`),
(146, 'Water Breeze', 'm1.2.jpg',`25`), //m3.6 osht me png
(147, 'Water Breeze', 'm1.3.jpg',`25`),
(148, 'Water Breeze', 'm1.4.jpg',`25`),
(149, 'Water Breeze', 'm1.5.jpg',`25`),
(150, 'Water Breeze', 'm1.6.jpg',`25`),
(151, 'Wave Sound', 'm2.1.jpg',`26`),
(152, 'Wave Sound', 'm2.2.jpg',`26`),
(153, 'Wave Sound', 'm2.3.jpg',`26`),
(154, 'Wave Sound', 'm2.4.jpg',`26`),
(155, 'Wave Sound', 'm2.5.jpg',`26`),
(155, 'Wave Sound', 'm2.6.jpg',`26`),
(157, 'Arena Beach', 'm3.1.jpg',`27`),
(158, 'Arena Beach', 'm3.2.jpg',`27`),
(159, 'Arena Beach', 'm3.3.png',`27`),
(160, 'Arena Beach', 'm3.4.jpg',`27`),
(161, 'Arena Beach', 'm3.5.jpg',`27`),
(162, 'Arena Beach', 'm3.6.jpg',`27`),
(163, 'Fihalhohi Island', 'm4.1.jpg',`28`),
(164, 'Fihalhohi Island', 'm4.2.jpg',`28`),
(165, 'Fihalhohi Island', 'm4.3.jpg',`28`),
(166, 'Fihalhohi Island', 'm4.4.jpg',`28`),
(167, 'Fihalhohi Island', 'm4.5.jpg',`28`),
(168, 'Fihalhohi Island', 'm4.6.jpg',`28`),
(169, 'Velana Blue', 'm5.1.jpg',`29`),
(170, 'Velana Blue', 'm5.2.jpg',`29`),
(171, 'Velana Blue', 'm5.3.jpg',`29`),
(172, 'Velana Blue', 'm5.4.jpg',`29`),
(173, 'Velana Blue', 'm5.5.jpg',`29`),
(174, 'Velana Blue', 'm5.6.jpg',`29`),
(175, 'Kaani Beach Hotel', 'm6.1.jpg',`30`),
(176, 'Kaani Beach Hotel', 'm6.2.jpg',`30`),
(177, 'Kaani Beach Hotel', 'm6.3.jpg',`30`),
(178, 'Kaani Beach Hotel', 'm6.4.jpg',`30`),
(179, 'Kaani Beach Hotel', 'm6.5.jpg',`30`),
(180, 'Kaani Beach Hotel', 'm6.6.jpg',`30`),
(181, 'Holiday Inn', 's1.1.jpg',`31`),
(182, 'Holiday Inn', 's1.2.jpg',`31`),
(183, 'Holiday Inn', 's1.3.jpg',`31`),
(184, 'Holiday Inn', 's1.4.jpg',`31`),
(185, 'Holiday Inn', 's1.5.jpg',`31`),
(186, 'Holiday Inn', 's1.6.jpg',`31`),
(187, 'Walhalla Guest', 's3.3.PNG',`32`),
(188, 'Walhalla Guest', 's2.2.jpg',`32`),
(189, 'Walhalla Guest', 's2.3.jpg',`32`),
(190, 'Walhalla Guest', 's2.4.jpg',`32`),
(191, 'Walhalla Guest', 's2.5.jpg',`32`),
(192, 'Walhalla Guest', 's2.6.jpg',`32`),
(193, 'Touchbed Gallen', 's3.1.jpg',`33`),
(194, 'Touchbed Gallen', 's3.2.jpg',`33`),
(195, 'Touchbed Gallen', 's3.3.jpg',`33`),
(196, 'Touchbed Gallen', 's3.4.jpg',`33`),
(197, 'Touchbed Gallen', 's3.5.jpg',`33`),
(198, 'Touchbed Gallen', 's3.6.jpg',`33`),
(199, 'Millennium', 's4.1.jpg',`34`),
(200, 'Millennium', 's4.2.jpg',`34`),
(201, 'Millennium', 's4.3.jpg',`34`),
(202, 'Millennium', 's4.4.jpg',`34`),
(203, 'Millennium', 's4.5.jpg',`34`),
(204, 'Millennium', 's4.6.jpg',`34`),
(205, 'Grand Des Bains', 's5.1.jpg',`35`),
(206, 'Grand Des Bains', 's5.2.jpg',`35`),
(207, 'Grand Des Bains', 's5.3.jpg',`35`),
(208, 'Grand Des Bains', 's5.4.jpg',`35`),
(209, 'Grand Des Bains', 's5.5.jpg',`35`),
(210, 'Grand Des Bains', 's5.6.jpg',`35`),
(211, 'Raddison Blue', 's6.1.jpg',`36`),
(212, 'Raddison Blue', 's6.2.jpg',`36`),
(213, 'Raddison Blue', 's6.3.jpg',`36`),
(214, 'Raddison Blue', 's6.4.jpg',`36`),
(215, 'Raddison Blue', 's6.5.jpg',`36`),
(216, 'Raddison Blue', 's6.6.jpg',`36`);







-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomno` decimal(5,0) NOT NULL,
  `hotelno` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `pre_price` decimal(5,2) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomno`, `hotelno`, `type`, `pre_price`, `price`) VALUES
('501', 19, 'single', NULL, '19.00'),
('601', 25, 'double', NULL, '29.00'),
('701', 1, 'family', NULL, '39.00'),
('701', 12, 'single', NULL, '10.00'),
('801', 15, 'double', NULL, '15.00'),
('901', 14, 'single', NULL, '18.00'),
('1001', 2, 'single', NULL, '58.00'),
('1001', 11, 'double', NULL, '30.00'),
('1001', 23, 'single', NULL, '29.99'),
('1101', 2, 'double', NULL, '86.00'),
('1101', 29, 'family', NULL, '35.00'),
('1101', 30, 'family', NULL, '59.99');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `City`, `start_date`, `end_date`) VALUES
(1, 'Prishtina', '2020-05-11', '2020-05-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`hotelno`,`guestno`,`datefrom`),
  ADD KEY `roomno` (`roomno`,`hotelno`),
  ADD KEY `guestno` (`guestno`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guestno`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelno`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomno`,`hotelno`),
  ADD KEY `hotelno` (`hotelno`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`roomno`,`hotelno`) REFERENCES `room` (`roomno`, `hotelno`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`guestno`) REFERENCES `guest` (`guestno`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hotelno`) REFERENCES `hotel` (`hotelno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
