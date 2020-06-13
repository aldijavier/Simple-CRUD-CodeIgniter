-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 05:44 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `senjatauts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'aldi', 'lebahganteng');

-- --------------------------------------------------------

--
-- Table structure for table `senjata`
--

CREATE TABLE `senjata` (
  `kode_senjata` varchar(11) NOT NULL,
  `kode_supplier` varchar(11) NOT NULL,
  `nama_senjata` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah_stok` int(11) DEFAULT NULL,
  `foto` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `senjata`
--

INSERT INTO `senjata` (`kode_senjata`, `kode_supplier`, `nama_senjata`, `harga`, `jumlah_stok`, `foto`) VALUES
('S0001', 'A0001', 'AK47', 4000000, 10, 0x3132333137302d3030342d4537464244323242352e6a7067),
('S0002', 'A0001', 'UMP45', 2040000, 4, 0x484b554d5034352e6a7067),
('S0003', 'A0001', 'AWM', 5040000, 5, 0x732d6c3634302e6a7067),
('S0004', 'A0001', 'M16 Rifle', 7300000, 8, 0x50726f647563747332303636312d353630783337342d32383630333239352e6a7067),
('S0005', 'A0002', 'M4 Rifle', 473000, 9, 0x746970706d616e6e2d3532303431312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `kode_supplier` varchar(11) NOT NULL,
  `nama_supplier` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomor_telepon` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`kode_supplier`, `nama_supplier`, `alamat`, `nomor_telepon`) VALUES
('A0001', 'Fredy Aprillia', 'Kutek', '081319201830'),
('A0002', 'Adam', 'Cinere', '913182381283');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senjata`
--
ALTER TABLE `senjata`
  ADD PRIMARY KEY (`kode_senjata`),
  ADD KEY `kode_supplier` (`kode_supplier`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`kode_supplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `senjata`
--
ALTER TABLE `senjata`
  ADD CONSTRAINT `senjata_ibfk_1` FOREIGN KEY (`kode_supplier`) REFERENCES `supplier` (`kode_supplier`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
