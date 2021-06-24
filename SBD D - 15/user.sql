-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `kesalahan`
--

CREATE TABLE `kesalahan` (
  `id` int(11) NOT NULL,
  `nama` int(100) NOT NULL,
  `email` int(120) NOT NULL,
  `password` int(100) NOT NULL,
  `kl_1` int(100) NOT NULL,
  `kl_2` int(100) NOT NULL,
  `kl_3` int(100) NOT NULL,
  `kl_4` int(100) NOT NULL,
  `kl_5` int(100) NOT NULL,
  `dll` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `jk` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `no_telepon` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `alamat` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `kabupaten` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_estonian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_lengkap`, `jk`, `no_telepon`, `alamat`, `kabupaten`, `email`, `password`) VALUES
(10, 'Alfian Nurdiani', 'perempuan', '085230957679', 'Pasongsongan', 'Bangkalan', 'alfiank123@gmail.com', 'alfiannurdiani'),
(11, 'Aisyatin Nabilah', 'perempuan', '085719838742', 'pasongsongan', 'Pamekasan', 'ainiyahquratul@gmail.com', 'aisyatinnabilah'),
(12, 'Nur Zelfi Firdaus', 'perempuan', '081939069600', 'Pasongsongan', 'Sumenep', 'sundusiyahkarim@gmail.com', 'zelfifirdaus'),
(13, 'Alfian nurdiani', 'laki-laki', '085719838742', 'asf', 'Bangkalan', 'jatimahicha55@gmail.com', '1234567'),
(14, 'Alfian Nurdiani Karimah', 'perempuan', '085719838742', 'Dusun Pakotan RT/RW 001/001 Kec.Pasongsongan -Sumenep', 'Sumenep', 'alfiank123@gmail.com', 'alfiannurdiani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kesalahan`
--
ALTER TABLE `kesalahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kesalahan`
--
ALTER TABLE `kesalahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
