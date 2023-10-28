-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 04:39 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` varchar(70) NOT NULL,
  `Time` datetime(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `mail`, `message`, `Time`) VALUES
(1, '', 'ashishkadu11@gmail.com', '', '2023-02-19 15:33:42.790435'),
(2, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(3, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(4, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(5, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(6, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(7, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(8, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(9, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(10, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(11, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(26, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(27, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(28, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(29, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(30, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(31, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(32, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(33, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(34, 'ashish', 'ashishk@gmail.com', 'hello', '2023-02-19 15:33:42.790435'),
(38, 'sahil', 'sahil@gmail.com', 'asdadas6das6das6da6sd', '2023-02-19 15:33:42.790435'),
(39, 'sahil', 'sahil@gmail.com', 'asdadas6das6das6da6sd', '2023-02-19 15:33:42.790435'),
(40, 'sahil', 'sahil@gmail.com', 'asdadas6das6das6da6sd', '2023-02-19 15:33:42.790435'),
(41, 'sahil', 'sahil@gmail.com', 'asdadas6das6das6da6sd', '2023-02-19 15:33:42.790435'),
(42, 'ramesh ', 'ramesh123@gmail.com', 'nice website !!!', '2023-02-19 15:33:42.790435'),
(43, 'ramesh ', 'ramesh123@gmail.com', 'nice website !!!', '2023-02-19 15:33:42.790435'),
(44, 'ramesh ', 'ramesh123@gmail.com', 'nice website !!!', '2023-02-19 15:33:42.790435'),
(45, '', '', '', '2023-02-19 15:33:42.790435'),
(46, '', '', '', '2023-02-19 15:33:42.790435'),
(47, '', '', '', '2023-02-19 15:33:42.790435'),
(48, '', '', '', '2023-02-19 15:33:42.790435'),
(49, '', '', '', '2023-02-19 16:43:03.990413'),
(50, '', '', '', '2023-02-19 16:53:01.683566'),
(51, '', '', '', '2023-02-19 17:11:45.342948'),
(52, '', '', '', '2023-02-19 17:12:06.231625'),
(53, '', '', '', '2023-02-21 21:02:34.211240'),
(54, '', '', '', '2023-02-21 21:02:42.891744'),
(55, '', '', '', '2023-02-21 21:03:41.385560'),
(56, '', '', '', '2023-02-21 21:04:25.111074'),
(57, '', '', '', '2023-02-21 21:06:38.278971'),
(58, '', '', '', '2023-02-21 21:09:50.303103'),
(59, '', '', '', '2023-02-21 21:09:59.317822'),
(60, '', '', '', '2023-02-23 13:06:37.196685'),
(61, 'Ashish', 'kaduA9876@gmail.com', 'Helheim', '2023-02-23 13:09:12.363606'),
(62, '', '', '', '2023-02-23 13:09:45.065109'),
(63, '', '', '', '2023-02-23 13:10:09.008650'),
(64, '', '', '', '2023-02-23 13:10:44.966945');

-- --------------------------------------------------------

--
-- Table structure for table `gamedata`
--

CREATE TABLE `gamedata` (
  `GameID` int(11) UNSIGNED NOT NULL,
  `GameName` varchar(255) NOT NULL,
  `GameType` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `img` varchar(100) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gamedata`
--

INSERT INTO `gamedata` (`GameID`, `GameName`, `GameType`, `Price`, `img`, `img1`, `img2`, `img3`, `img4`) VALUES
(1, 'Grand theft auto', 'Action-adventure', '49.99', 'Grand.jpg', 'GTAm1.jpg', 'GTAm2.jpg', 'GTAm3.jpg', 'GTAm4.jpg'),
(2, 'Assassin Creed Origins', 'Action-adventure', '24.99', 'origin.jpg', 'ASSm1.jpg', 'ASSm2.jpg', 'ASSm3.jpg', 'ASSm4.jpg'),
(3, 'Call of Duty: Infinite Warfare', 'Battle royale', '69.00', '', '', '', '', ''),
(4, 'God of war 4', 'Action-adventure', '99.90', '', '', '', '', ''),
(5, 'Dota 2', 'Multiplayer online battle arena', '189.99', '', '', '', '', ''),
(6, 'Takken 7', 'Battle royale', '79.00', '', '', '', '', ''),
(7, 'BATTLEGROUNDS Mobile', 'Battle royale', '59.00', '', '', '', '', ''),
(8, 'Clash Royal', 'Real-time strategy', '79.00', '', '', '', '', ''),
(9, 'Clash of clans', 'Real-time strategy', '56.00', '', '', '', '', ''),
(10, 'Pokemon unite', 'Multiplayer online battle arena', '59.00', '', '', '', '', ''),
(11, 'Pokemon Go', 'Augmented reality', '79.00', '', '', '', '', ''),
(12, 'Asphalt 9: legends', 'Racing', '89.00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `inserted_games`
--

CREATE TABLE `inserted_games` (
  `GameID` int(11) NOT NULL,
  `GameName` varchar(50) NOT NULL,
  `GameType` varchar(50) NOT NULL,
  `Size` varchar(30) NOT NULL,
  `Price` float NOT NULL,
  `img` varchar(100) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inserted_games`
--

INSERT INTO `inserted_games` (`GameID`, `GameName`, `GameType`, `Size`, `Price`, `img`, `img1`, `img2`, `img3`, `img4`) VALUES
(8, 'Valorant', 'first-person tactical hero shooter', '20.39', 89, 'Valorant.jpg', 'VALm1.jpg', 'VALm2.jpg', 'VALm3.jpg', 'VALm4.jpg'),
(9, 'Roller Champions', '3v3 sports game', '10.545', 49.98, 'Roller_Champ.jpg', 'RCm1.jpg', 'RCm2.jpg', 'RCm3.jpg', 'RCm4.jpg'),
(10, 'Forza Horizon 5', 'Racing', ' 103', 59.89, 'Forza_horizon_5.jpg', 'FHm1.jpg', 'FHm2.jpg', 'FHm3.jpg', 'FHm4.jpg'),
(12, 'Minecraft', '3D sandbox game', '2.9', 26.95, 'Minecraft.jpg', 'MCm1.jpg', 'MCm2.jpg', 'MCm3.jpg', 'MCm4.jpg'),
(13, 'CS-GO', 'multiplayer tactical first-person shooter', '3.5', 14.99, 'CS-GO.jpg', 'CGm1.jpg', 'CGm2.jpg', 'CGm3.jpg', 'CGm4.jpg'),
(15, 'High On Life', 'First-person shooter', '40', 59.99, 'high_on_life.jpg', 'HOFm1.jpg', 'HOFm2.jpg', 'HOFm3.jpg', 'HOFm4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'xyz', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `Fullname`, `mail`, `username`, `password`, `Time`) VALUES
(1, 'asdsdsasdsd', 'asdasdas@gmail.com', 'sadasdas', '5446445454', '2023-02-19 10:03:16.343449'),
(2, 'ashish kadu', 'ashishkadu11@gmail.com', 'orlon', '1452367894', '2023-02-19 10:03:16.343449'),
(5, 'sur', 'ashishkadu11@gmail.com', 'sur12345', '0', '2023-02-19 10:03:16.343449'),
(6, 'ramesh', 'ramesh123@gmail.com', 'ramya', '142536', '2023-02-19 10:03:16.343449'),
(7, 'suresh', 'suresh145@gmail.com', 'suresh', '147325698', '2023-02-19 10:03:16.343449'),
(8, 'suresh', 'suresh14588@gmail.com', 'suresh784', '874569845', '2023-02-19 10:03:16.343449'),
(16, 'ashish kadu7878', 'ashishkadu117878@gmail.com', 'orlon_7878', '78784578', '2023-02-19 11:05:18.367472'),
(17, 'abc', 'adcs@gmail.com', 'xyz', '1234', '0000-00-00 00:00:00.000000'),
(18, 'Ashish', 'ashishkadu11@gmail.com', 'AAA', '030303', '2023-02-21 15:40:26.426459'),
(19, 'Pradnya', 'pradnya@gmail.com', 'pradnya', '1234', '2023-05-04 09:07:26.085524'),
(20, 'pradnya1', 'pradnya1@gmail.com', 'pradnya1', '1234', '2023-05-04 09:08:43.131630');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gamedata`
--
ALTER TABLE `gamedata`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `inserted_games`
--
ALTER TABLE `inserted_games`
  ADD PRIMARY KEY (`GameID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `gamedata`
--
ALTER TABLE `gamedata`
  MODIFY `GameID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `inserted_games`
--
ALTER TABLE `inserted_games`
  MODIFY `GameID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
