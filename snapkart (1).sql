-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 06:22 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snapkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `adagency`
--

CREATE TABLE `adagency` (
  `aid` int(7) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `website` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adagency`
--

INSERT INTO `adagency` (`aid`, `aname`, `address`, `city`, `pincode`, `contactno`, `email`, `website`, `password`) VALUES
(3, 'setu', 'adada', 'mehsana', 384002, '7879987964', 'lab@gmail.com', 'www.photolab.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mimg` varchar(100) DEFAULT NULL,
  `mid` int(7) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`mimg`, `mid`, `mname`, `address`, `city`, `pincode`, `gender`, `email`, `contactno`, `password`) VALUES
('modelprofile/6306-vlcsnap-2016-04-15-11h43m29s123.png', 1, 'raj', 'aaaaaaa', 'mehsana', 384002, 'male', 'raj@gmail.com', '9978944598', '123'),
('modelprofile/8388-AAruIdP.jpg', 2, 'himal', 'adadad', 'mehsana', 384002, 'male', 'hemal@gmail.com', '9978944597', '123'),
('modelprofile/9957-2017_ferrari_j50-2560x1440.jpg', 10, 'Vishal', 'aajajaaa', 'mehsana', 384002, 'male', 'vvc@gmail.com', '8000282727', 'vishal');

-- --------------------------------------------------------

--
-- Table structure for table `photocatagory`
--

CREATE TABLE `photocatagory` (
  `catagoryid` varchar(40) NOT NULL,
  `catagoryname` varchar(100) NOT NULL,
  `catimg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photocatagory`
--

INSERT INTO `photocatagory` (`catagoryid`, `catagoryname`, `catimg`) VALUES
('aaa', 'asd', 'catphotos/9165-2234030_1.jpg'),
('coffytime', 'coffy', 'catphotos/b8.jpg'),
('Entertainment', 'Entertainment', 'catphotos/pf21.jpg'),
('natural', 'natural', 'catphotos/pf23.jpg'),
('party', 'miyau', 'catphotos/pf8.jpg'),
('test', 'Study', 'catphotos/2768-bc8.jpg'),
('tst', 'wander', 'catphotos/5162-AAruIdP.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photoid` varchar(30) NOT NULL,
  `catagoryid` varchar(40) NOT NULL,
  `filepath` varchar(100) NOT NULL,
  `mid` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photoid`, `catagoryid`, `filepath`, `mid`) VALUES
('1067-5116.jpg', 'mainframe', 'modelphotos/1067-5116.jpg', 2),
('1195-5116.jpg', 'mainframe', 'modelphotos/1195-5116.jpg', 2),
('1796-download.png', 'test', 'modelphotos/1796-download.png', 2),
('1932-p13.jpg', 'natural', 'modelphotos/1932-p13.jpg', 1020),
('2156-download.png', 'Entertainment', 'modelphotos/2156-download.png', 2),
('2288-download.png', 'Entertainment', 'modelphotos/2288-download.png', 1),
('2427-b3-full.jpg', 'natural', 'modelphotos/2427-b3-full.jpg', 1020),
('3661-Virat Kohli8.jpg', 'party', 'modelphotos/3661-Virat Kohli8.jpg', 7707),
('3875-AAruz5u.jpg', 'natural', 'modelphotos/3875-AAruz5u.jpg', 4),
('3893-bc2.jpg', 'coffytime', 'modelphotos/3893-bc2.jpg', 1020),
('4203-download.png', 'colorful', 'modelphotos/4203-download.png', 3),
('4661-5116.jpg', 'setu', 'modelphotos/4661-5116.jpg', 2),
('4731-vlcsnap-error419.png', 'natural', 'modelphotos/4731-vlcsnap-error419.png', 4),
('4992-bc6.jpg', 'coffytime', 'modelphotos/4992-bc6.jpg', 7777),
('5044-b3.jpg', 'natural', 'modelphotos/5044-b3.jpg', 1010),
('5152-IMG_20150911_011200.jpg', 'colorful', 'modelphotos/5152-IMG_20150911_011200.jpg', 1034),
('5795-download.png', 'setu', 'modelphotos/5795-download.png', 3),
('5817-about.jpg', 'Entertainment', 'modelphotos/5817-about.jpg', 1020),
('5950-p5.jpg', 'Entertainment', 'modelphotos/5950-p5.jpg', 1021),
('6161-bct8.jpg', 'party', 'modelphotos/6161-bct8.jpg', 1021),
('6358-p9.jpg', 'party', 'modelphotos/6358-p9.jpg', 1020),
('6529-b5.jpg', 'party', 'modelphotos/6529-b5.jpg', 1020),
('6645-download.png', 'hemal', 'modelphotos/6645-download.png', 3),
('6795-download.png', 'Entertainment', 'modelphotos/6795-download.png', 3),
('7084-download.png', 'coffytime', 'modelphotos/7084-download.png', 9),
('7306-download.png', 'party', 'modelphotos/7306-download.png', 3),
('7520-Virat-Kohali-full-HD-wall', 'natural', 'modelphotos/7520-Virat-Kohali-full-HD-wallpaper-300x250.jpg', 7707),
('7866-Virat-Kohli-HD-Image.jpg', 'Entertainment', 'modelphotos/7866-Virat-Kohli-HD-Image.jpg', 7707),
('7957-DSC02901.JPG', 'natural', 'modelphotos/7957-DSC02901.JPG', 1023),
('8122-Virat-Kohli-images-hd-fre', 'Entertainment', 'modelphotos/8122-Virat-Kohli-images-hd-free-download.jpg', 7707),
('8571-7575-bct7.jpg', 'Entertainment', 'modelphotos/8571-7575-bct7.jpg', 2),
('9027-AAruz5u.jpg', 'natural', 'modelphotos/9027-AAruz5u.jpg', 1),
('9071-AAruz5u.jpg', 'natural', 'modelphotos/9071-AAruz5u.jpg', 10),
('9204-bc8.jpg', 'colorful', 'modelphotos/9204-bc8.jpg', 1020),
('9370-bc3.jpg', 'natural', 'modelphotos/9370-bc3.jpg', 1020),
('9546-download.png', 'coffytime', 'modelphotos/9546-download.png', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adagency`
--
ALTER TABLE `adagency`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mname_2` (`mname`),
  ADD KEY `mname` (`mname`);

--
-- Indexes for table `photocatagory`
--
ALTER TABLE `photocatagory`
  ADD PRIMARY KEY (`catagoryid`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photoid`),
  ADD KEY `catagoryid` (`catagoryid`),
  ADD KEY `catagoryid_2` (`catagoryid`),
  ADD KEY `catagoryid_3` (`catagoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adagency`
--
ALTER TABLE `adagency`
  MODIFY `aid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
