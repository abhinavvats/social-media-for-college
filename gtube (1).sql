-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 05:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `name`, `location`, `title`) VALUES
(32, 'a.jpg', 'art/a.jpg', 'My First art'),
(33, 'Screenshot (5).png', 'art/Screenshot (5).png', 'My art'),
(34, 'Screenshot (628).jpg', 'art/Screenshot (628).jpg', 'Shivangi'),
(35, 'Alan_Walker_-_Alone.mp3', 'art/Alan_Walker_-_Alone.mp3', 'Aditya Raj 🔥'),
(36, 'IMG_2250.JPG', 'art/IMG_2250.JPG', 'gg');

-- --------------------------------------------------------

--
-- Table structure for table `audio`
--

CREATE TABLE `audio` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audio`
--

INSERT INTO `audio` (`ID`, `name`, `location`, `title`, `date`) VALUES
(14, '_22Uska_Hi_Banana_22_1920_Evil_Returns_Full_Video_Song_HD_7C_Arijit_Singh_2C_Aftab_Shivd.mp3', 'audio/_22Uska_Hi_Banana_22_1920_Evil_Returns_Full_Video_Song_HD_7C_Arijit_Singh_2C_Aftab_Shivd.mp3', 'First', '2020-07-05 22:10:58'),
(19, 'Pani-Da-Rang-(Mashup-Mix)-DJ-Ravi-More-DJ-Rax-(Pagalworld.Com).mp3', 'audio/Pani-Da-Rang-(Mashup-Mix)-DJ-Ravi-More-DJ-Rax-(Pagalworld.Com).mp3', 'planet', '2020-07-05 22:11:18'),
(20, '04 Allah Waariyan - Yaariyan [PagalWorld.com].mp3', 'audio/04 Allah Waariyan - Yaariyan [PagalWorld.com].mp3', 'my audio', '2020-07-09 19:32:42'),
(21, '_22Tum_Hi_Ho_Aashiqui_2_22_Full_Video_Song_HD__7C_Aditya_Roy_Kapur_2C_Shraddha_Kapoor__7C_.mp3', 'audio/_22Tum_Hi_Ho_Aashiqui_2_22_Full_Video_Song_HD__7C_Aditya_Roy_Kapur_2C_Shraddha_Kapoor__7C_.mp3', 'vv', '2020-12-18 19:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `sno` int(8) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'aditya', 'aj@email.com', 'videos', 'please upload My video', '2020-07-05 20:36:42'),
(2, '', '', '', '', '2020-07-05 21:07:55'),
(3, '', '', '', '', '2020-07-05 21:08:40'),
(5, 'aditya raj', 'ajraj@gmail.com', 'audio', 'eeihe', '2020-07-05 22:44:09'),
(6, 'aditya raj', 'adityabkrajs@gmail.com', 'computer network', 'hii', '2020-07-06 19:14:28'),
(7, 'aditya raj', 'adityabkrajs@gmail.com', 'biology', 'rferrgtrhythdh', '2020-07-27 13:22:22'),
(8, 'Aditya Raj', 'adityabkrajs@gmail.com', '', 'fjeifiewheiwhfoewifhewiohfoiewfh', '2020-12-09 23:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`ID`, `name`, `location`, `title`) VALUES
(0, 'sharon-pittaway-iMdsjoiftZo-unsplash.jpg', 'photography/sharon-pittaway-iMdsjoiftZo-unsplash.jpg', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `username`, `password`, `dt`) VALUES
(10, 'admin', 'admin', '2020-07-05 17:36:20'),
(11, 'Dear', 'raj', '2020-07-05 17:40:05'),
(12, 'admin7870', 'admin@7870', '2020-11-30 17:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `title` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `audio`
--
ALTER TABLE `audio`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `audio`
--
ALTER TABLE `audio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
