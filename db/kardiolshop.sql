-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 03:30 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kardiolshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bagikan`
--

CREATE TABLE `bagikan` (
  `id` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `dibagikanke` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bagikan`
--

INSERT INTO `bagikan` (`id`, `idp`, `dibagikanke`) VALUES
(4, 4, 'Twitter');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `garansi` varchar(25) NOT NULL,
  `pengiriman` varchar(25) NOT NULL,
  `foto` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama`, `jenis`, `harga`, `garansi`, `pengiriman`, `foto`) VALUES
(4, 'Kaos 1', 'Kaos', '56000', '3 Hari', 'JNE', '1508432708.jpg'),
(5, 'Celana Jeans', 'Celana', '80000', '5 Hari', 'TIKI', '1508432739.jpg'),
(6, 'Kaos Tengkorak', 'Kaos', '68000', '4 Hari', 'PAHALA', '1508432764.jpg'),
(7, 'Kaos Trend', 'Kaos', '70000', '2 Hari', 'JNE', '1508432797.jpg'),
(8, 'Kaos Trend 2', 'Kaos', '66000', '1 Hari', 'JNE', '1508432819.jpg'),
(9, 'Kaos Masa Kini', 'Kaos', '75000', '6 Hari', 'JNE', '1508432853.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bagikan`
--
ALTER TABLE `bagikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bagikan`
--
ALTER TABLE `bagikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
