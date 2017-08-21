-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 06:05 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major`
--

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ID` int(11) NOT NULL,
  `Artist_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ID`, `Artist_category`) VALUES
(1, 'Art & Craft'),
(2, 'Musician & Bands'),
(5, 'Entertainer & Performers '),
(7, 'Designers');

-- --------------------------------------------------------

--
-- Table structure for table `art_field`
--

CREATE TABLE `art_field` (
  `A_id` int(11) NOT NULL,
  `a_field` varchar(50) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_field`
--

INSERT INTO `art_field` (`A_id`, `a_field`, `ID`) VALUES
(1, 'painting & drawing', 1),
(2, 'paper craft', 1),
(3, 'mud art', 1),
(4, 'Decors', 1),
(5, 'Singer', 2),
(6, 'Band', 2),
(7, 'Musician', 2),
(8, 'Dance performers', 5),
(9, 'Comedians', 5),
(10, 'Anchors', 5),
(11, 'Group Artists', 5),
(12, 'UX/UI', 7),
(13, 'Costume Designer', 7),
(14, 'Wall Crafting/Painting', 7),
(15, 'Video Animators & Editors', 7);

-- --------------------------------------------------------

--
-- Table structure for table `art_reg`
--

CREATE TABLE `art_reg` (
  `Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `middlename` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rpass` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `field` varchar(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `zip` int(10) DEFAULT NULL,
  `about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art_reg`
--

INSERT INTO `art_reg` (`Id`, `username`, `firstname`, `middlename`, `lastname`, `email`, `password`, `rpass`, `category`, `field`, `image`, `city`, `country`, `zip`, `about`) VALUES
(2, 'naman', 'naman', '', 'gupta', 'naman@gmail.com', 'qwer', 'qwer', '2', '5', 'profilepic/images (2).jpg', 'jabalpur', 'india', 482005, 'I am a singer.'),
(3, 'Mohit', '', '', '', 'mohit@gmail.com', 'qwer', 'qwer', '1', '1', 'profilepic/moh.jpg', '', '', 0, ''),
(4, 'raman', 'Raman', '', 'Singh', 'rsm.13r@gmail.com', 'asdf', 'asdf', '1', '2', 'profilepic/Picture1.png', '', '', 0, ''),
(5, 'ankit', '', '', '', 'ankit@gmail.com', 'zxcv', 'zxcv', '1', '3', '', '', '', NULL, ''),
(6, 'hola', '', '', '', 'hola@gmail.com', 'ghjk', 'ghjk', '1', '4', '', '', '', NULL, ''),
(7, 'rani', 'rajeshvaree', 'kumar', 'singh', 'rani@gmail.com', '123456', '123456', '2', '6', 'profilepic/Maximum-Music-DJ-background.jpg', 'jabalpur', 'india', 482001, 'i am drummer in band'),
(8, 'shivansh', '', '', '', 'shivansh@gmail.com', 'qwerty', 'qwerty', '2', '7', '', '', '', NULL, ''),
(9, 'golu', 'Golu', '', 'singh', 'golu@gmail.com', 'mnbv', 'mnbv', '5', '8', 'profilepic/vlcsnap-2016-02-16-17h40m26s217.png', '', '', 0, ''),
(10, 'akash', '', '', '', 'akash@gmail.com', 'akash', 'akash', '7', '12', '', '', '', NULL, ''),
(11, 'praveen', '', '', '', 'praveen@gmail.com', 'qwerty', 'qwerty', '2', '6', '', '', '', NULL, ''),
(13, 'kalia', '', '', '', 'yo@gmail.com', '123456', '123456', '1', '1', '', '', '', NULL, ''),
(14, 'mksaini', 'Mohit', 'kumar', 'Saini', 'mksaini278@gmail.com', 'mummyrocks', 'mummyrocks', '1', '1', 'profilepic/Picture1.png', 'JABALPUR', 'INDIA', 482005, 'SWAGXY..'),
(15, 'ranjan', '', '', '', 'ranjan@gmail.com', 'qwerty', 'qwerty', '5', '8', '', '', '', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `com_reg`
--

CREATE TABLE `com_reg` (
  `c_Id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `mobile` bigint(13) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `zip` int(10) NOT NULL,
  `about` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `com_reg`
--

INSERT INTO `com_reg` (`c_Id`, `username`, `email`, `company`, `mobile`, `city`, `country`, `zip`, `about`, `image`, `Id`) VALUES
(8, 'abcd', 'abdc11@gmail.com', 'abcd', 9584171745, 'adsasa', 'asfdfsdfs', 2000145, 'asasasdasd																						', 'profilepic/download.jpg', 3),
(9, 'naman', 'rsm.13r@gmail.com', 'rmn', 9806163328, 'hhhfhgf', 'fasdafdaf', 482005, 'shgvbedyhtryaSXzX', 'profilepic/download (4).jpg', 1),
(10, 'Mohit', 'me.naman123@gmail.co', 'xyz', 9823561525, 'jbp', 'ind', 250036, 'nmjhghfsaqetyty', 'profilepic/download (4).jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `name`, `email`, `message`) VALUES
(1, 'naman', 'naman@gmail.com', 'heleo...!'),
(2, 'amir', 'amir@gmail.com', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `cuser_reg`
--

CREATE TABLE `cuser_reg` (
  `Id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `rpass` varchar(20) NOT NULL,
  `company` varchar(20) NOT NULL,
  `mobile` bigint(13) NOT NULL,
  `designation` varchar(25) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuser_reg`
--

INSERT INTO `cuser_reg` (`Id`, `username`, `email`, `firstname`, `lastname`, `password`, `rpass`, `company`, `mobile`, `designation`, `image`) VALUES
(1, 'naman', 'naman.guptacs@gmail.com', 'qwertyholo', 'lipo', 'qwer', 'qwer', 'rmn', 9806163328, 'hell guard', 'profilepic/'),
(2, 'Mohit', 'mksaini278@gmail.com', 'Mohit kumar', 'saini', 'mohit', 'mohit', 'xyz', 9584171745, '', 'profilepic/images (2).jpg'),
(3, 'abcd', 'abdc@gmail.com', 'ritu', 'saini', '1234', '1234', 'abcd', 9584171745, 'it anlysis', 'profilepic/di1.jpg'),
(4, 'Rohit', 'rohitsaini257@gmail.com', 'Rohit Kumar', 'Saini', 'rohit', 'rohit', 'MR Group', 8879329147, 'IT Analyst', 'profilepic/Mohit.jpg'),
(5, 'AAA', 'aa@gmail.com', '', '', '123456', '123456', 'ftftf', 7894561233, '', 'profilepic/'),
(6, 'john', 'john@gmail.com', '', '', '123', '123', 'ABCD', 9893164622, '', 'profilepic/841268_4822646037986_870333081_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `Id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `size` int(30) NOT NULL,
  `profession` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`Id`, `title`, `about`, `file`, `type`, `size`, `profession`) VALUES
(3, 'song', 'song of the day', '48400-93740-na-sochu-phir-bhi-tera-chehra-song-aur', 'audio/mp3', 501133, '5'),
(4, 'Music', 'sdgsgdbdxb', '86501-14260-85338-let-it-snow-8177.mp3', 'audio/mp3', 1045106, '5'),
(6, 'song', 'good', '88828-14260-85338-let-it-snow-8177.mp3', 'audio/mp3', 1045106, '5'),
(7, 'emotion', 'flow of emotion', '21212-video.mp4', 'video/mp4', 383412, '8'),
(8, 'Sand Art', 'Draw your imagination on the blank canvas of sand.', '21544-video1.mp4', 'video/mp4', 332401, '8'),
(9, 'Random Paint Art', 'A street painter having a chance to display his art on stage.', '58456-video2.mp4', 'video/mp4', 212568, '8');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `art_by` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `profession` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Id`, `title`, `art_by`, `about`, `image`, `type`, `amount`, `profession`) VALUES
(1, 'art', '', '', 'upload/324457_2443945451958_1362433000_o.jpg', '', '', '1'),
(4, 'qq', 'qqqq', 'qqqqqqqq', 'upload/IMG-20140509-WA0011.jpg', 'jpg', '123RS', '1'),
(7, 'art attack', 'Designer', 'lalalallal', 'upload/Screenshot (8).png', 'png', '599RS', '1'),
(8, 'Nature', 'abc', 'it is an image', 'upload/nature.jpg', 'jpg', '500RS', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `art_field`
--
ALTER TABLE `art_field`
  ADD PRIMARY KEY (`A_id`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `art_reg`
--
ALTER TABLE `art_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `com_reg`
--
ALTER TABLE `com_reg`
  ADD PRIMARY KEY (`c_Id`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cuser_reg`
--
ALTER TABLE `cuser_reg`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `art_field`
--
ALTER TABLE `art_field`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `art_reg`
--
ALTER TABLE `art_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `com_reg`
--
ALTER TABLE `com_reg`
  MODIFY `c_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cuser_reg`
--
ALTER TABLE `cuser_reg`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `com_reg`
--
ALTER TABLE `com_reg`
  ADD CONSTRAINT `com_reg_ibfk_1` FOREIGN KEY (`Id`) REFERENCES `cuser_reg` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
