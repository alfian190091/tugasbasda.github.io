-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:42 AM
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
-- Database: `asisten`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_asisten`
--

CREATE TABLE `data_asisten` (
  `id` int(50) NOT NULL,
  `id_jns_kerja` int(50) NOT NULL,
  `id_jns_kelamin` int(50) NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `jk` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `hp` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_asisten`
--

INSERT INTO `data_asisten` (`id`, `id_jns_kerja`, `id_jns_kelamin`, `nama`, `jk`, `alamat`, `hp`) VALUES
(1, 1, 1, 'Siti Maysaroh', 'Perempuan', 'Dusun Pakotan Kec.Pasongsongan - Sumenep', '081939069600'),
(2, 1, 2, 'Susanto', 'Laki-laki', 'Dusun Benteng Kec.Pasongsongan - Sumenep', '085230957678'),
(3, 2, 1, 'Sumiati', 'Perempuan', 'Jl.Trunojoyo Kec.Manding - Sumenep', '085719838745'),
(4, 2, 2, 'Supriadi', 'Laki-laki', 'Jl.Setia Budi No 5 Jakarta utara ', '085719838765'),
(5, 3, 1, 'Siti Jamilah', 'Perempuan', 'Jl.Cempaka no 15 Palangkaraya', '085230957679'),
(6, 3, 2, 'Susilo', 'Laki-laki', 'Jl.KH.Abu Bakar Shiddiq No 30 Pasongsongan - Sumen', '085719838675'),
(7, 4, 1, 'Anisa Rahmawati', 'Perempuan', 'Jl.KH>Agussalim No 19 Pangarangan Pamekasan', '085719856743'),
(8, 4, 2, 'Ahmad Rudi', 'Laki-laki', 'Ambunten Tengah - Ambunten Kabupaten Sumenep', '085198769087');

-- --------------------------------------------------------

--
-- Table structure for table `jns_kelamin`
--

CREATE TABLE `jns_kelamin` (
  `id` int(50) NOT NULL,
  `jk` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_kelamin`
--

INSERT INTO `jns_kelamin` (`id`, `jk`) VALUES
(1, 'perempuan'),
(2, 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `jns_kerja`
--

CREATE TABLE `jns_kerja` (
  `id` int(10) NOT NULL,
  `jenis_kerja` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jns_kerja`
--

INSERT INTO `jns_kerja` (`id`, `jenis_kerja`) VALUES
(1, 'Pembantu Rumah Tangga'),
(2, 'Supir Pribadi'),
(3, 'Tukang Kebun'),
(4, 'Baby Siter');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `Jenis_Kelamin` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `perhari` int(50) NOT NULL,
  `perminggu` int(50) NOT NULL,
  `perbulan` int(50) NOT NULL,
  `start_kerja` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `jam_istirahat` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `cuti` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `Jenis_Kelamin`, `perhari`, `perminggu`, `perbulan`, `start_kerja`, `jam_istirahat`, `cuti`) VALUES
(1, 'Perempuan', 12, 23, 45, '13.00', '17:00-18:00', 'Hari Besar'),
(2, 'Perempuan', 12, 11, 34, '13.00', '12:00-13:00', 'Weekend'),
(3, 'Perempuan', 12, 23, 12, '13.00', '12:00-13:00', 'Sakit'),
(4, 'Perempuan', 12, 3, 4, '07.00', '12:00-13:00', 'Weekend'),
(5, 'Perempuan', 12, 12, 12, '13.00', '12:00-13:00', 'Weekend'),
(6, 'Perempuan', 12, 12, 12, '13.00', '12:00-13:00', 'Weekend'),
(7, 'Perempuan', 12, 23, 12, '13.00', '12:00-13:00', 'Weekend'),
(8, 'Laki-Laki', 2, 23, 12, '07.00', '12:00-13:00', 'Weekend'),
(9, 'Perempuan', 2, 10, 3, '18.00', '12:00-13:00', 'Weekend'),
(10, 'Laki-Laki', 2, 23, 12, '13.00', '12:00-13:00', 'Weekend'),
(11, 'Perempuan', 2, 12, 12, '07.00', '12:00-13:00', 'Weekend'),
(12, 'Laki-Laki', 2, 2, 3, '07.00', '12:00-13:00', 'Hari Besar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_asisten`
--
ALTER TABLE `data_asisten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jns_kelamin`
--
ALTER TABLE `jns_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jns_kerja`
--
ALTER TABLE `jns_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_asisten`
--
ALTER TABLE `data_asisten`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jns_kelamin`
--
ALTER TABLE `jns_kelamin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jns_kerja`
--
ALTER TABLE `jns_kerja`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
