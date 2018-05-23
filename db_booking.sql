-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 05:55 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbooking`
--

CREATE TABLE `tbooking` (
  `id` int(11) NOT NULL,
  `Tim` varchar(50) DEFAULT NULL,
  `Lapang` int(11) DEFAULT NULL,
  `Jam` time DEFAULT NULL,
  `Sampai` time DEFAULT NULL,
  `Tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbooking`
--

INSERT INTO `tbooking` (`id`, `Tim`, `Lapang`, `Jam`, `Sampai`, `Tanggal`) VALUES
(11, 'asdaf', 1, '13:05:00', '13:06:00', '2018-01-01'),
(12, 'abal-abal', 2, '01:00:00', '01:00:00', '2018-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL DEFAULT '0',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `password`, `level`) VALUES
(5, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(8, 'cahya', '7513810474271763d6f8f0c999466094', 'user'),
(9, 'dafiq', 'a953912adf1750386ac3c9d64b38c21e', 'user'),
(10, 'al', '97282b278e5d51866f8e57204e4820e5', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbooking`
--
ALTER TABLE `tbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbooking`
--
ALTER TABLE `tbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
