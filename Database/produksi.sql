-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 05:20 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `id` bigint(10) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`id`, `user`, `password`, `status`) VALUES
(1, 'herupanriki', 'herupan1998', 'administrator'),
(6, 'produksi', 'produksi1', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` bigint(20) NOT NULL,
  `permintaan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `permintaan`) VALUES
(1, 5000),
(2, 4500),
(3, 3500),
(4, 3000),
(5, 5000),
(6, 4700),
(7, 3300),
(8, 4500),
(9, 2500),
(10, 1000),
(11, 1000),
(12, 1000),
(13, 1000),
(14, 1000),
(15, 5000),
(16, 5000),
(17, 5000),
(18, 5000),
(19, 5000),
(20, 3375),
(21, 2873),
(22, 2700),
(23, 4700),
(24, 3600),
(25, 5000),
(26, 4000),
(27, 1300),
(28, 3500),
(29, 3000),
(30, 4500);

-- --------------------------------------------------------

--
-- Table structure for table `persediaan`
--

CREATE TABLE `persediaan` (
  `id` bigint(20) NOT NULL,
  `persediaan` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persediaan`
--

INSERT INTO `persediaan` (`id`, `persediaan`) VALUES
(1, 570),
(2, 600),
(3, 500),
(4, 350),
(5, 600),
(6, 420),
(7, 320),
(8, 370),
(9, 120),
(10, 100),
(11, 100),
(12, 100),
(13, 100),
(14, 100),
(15, 600),
(16, 600),
(17, 600),
(18, 600),
(19, 600),
(20, 473),
(21, 577),
(22, 450),
(23, 400),
(24, 360),
(25, 120),
(26, 600),
(27, 220),
(28, 330),
(29, 150),
(30, 600);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id` bigint(20) NOT NULL,
  `produksi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id`, `produksi`) VALUES
(1, 4440),
(2, 3900),
(3, 3000),
(4, 2650),
(5, 4600),
(6, 4300),
(7, 3000),
(8, 4200),
(9, 2400),
(10, 1000),
(11, 1000),
(12, 1000),
(13, 1000),
(14, 1000),
(15, 4500),
(16, 4500),
(17, 4500),
(18, 4500),
(19, 4500),
(20, 3000),
(21, 2300),
(22, 2250),
(23, 4300),
(24, 3300),
(25, 4900),
(26, 3500),
(27, 1100),
(28, 3200),
(29, 2900),
(30, 3900);

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `id` bigint(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanggal`
--

INSERT INTO `tanggal` (`id`, `tanggal`) VALUES
(1, '1 september 2019'),
(2, '2 september 2019'),
(3, '3 september 2019'),
(4, '4 september 2019'),
(5, '5 september 2019'),
(6, '6 september 2019'),
(7, '7 september 2019'),
(8, '8 september 2019'),
(9, '9 september 2019'),
(10, '10 september 2019'),
(11, '11 september 2019'),
(12, '12 september 2019'),
(13, '13 september 2019'),
(14, '14 september 2019'),
(15, '15 september 2019'),
(16, '16 september 2019'),
(17, '17 september 2019'),
(18, '18 september 2019'),
(19, '19 september 2019'),
(20, '20 september 2019'),
(21, '21 september 2019'),
(22, '22 september 2019'),
(23, '23 september 2019'),
(24, '24 september 2019'),
(25, '25 september 2019'),
(26, '26 september 2019'),
(27, '27 september 2019'),
(28, '28 september 2019'),
(29, '29 september 2019'),
(30, '30 september 2019');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password`
--
ALTER TABLE `password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password`
--
ALTER TABLE `password`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
