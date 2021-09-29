-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 05:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_beasiswa`
--

CREATE TABLE `data_beasiswa` (
  `id` int(255) NOT NULL,
  `nama_bea` varchar(200) NOT NULL,
  `Jenis_bea` varchar(50) NOT NULL,
  `Fak_bea` varchar(50) NOT NULL,
  `jangka_bea` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_beasiswa`
--

INSERT INTO `data_beasiswa` (`id`, `nama_bea`, `Jenis_bea`, `Fak_bea`, `jangka_bea`, `deskripsi`) VALUES
(2, 'Djarum', 'Prestasi', 'FILKOM', '3 Tahun', 'Beasiswa djarum merupakan beasiswa yang disediakan oleh perusahaan djarum guna menunjang prestasi dibidang pendidikan serta sebagai kontribusi nyata untuk bangsa dan negara.'),
(3, 'Pertamina', 'Prestasi', 'FILKOM', '4 Tahun', 'Beasiswa Pertamina merupakan basiswa yang disediakan oleh BUMN dalam sebagai wujud nyata membantu di dunia pendidikan'),
(4, 'Paramex Group', 'Pemberdayaan', 'FIA', '2 Tahun', 'beasiswa ini merupakan beasiswa untuk menyembuhkan sakit kepala mahasiswa yang binggung memikirkan UKT'),
(5, 'Pertamini', 'Prestasi', 'FILKOM', '4 tahun', 'beasiswa pertamini disiapkan untuk mahasiswa yang mampu melakukan penakaran bensin secara presisi dan tidak tumpah');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar_beasiswa`
--

CREATE TABLE `pendaftar_beasiswa` (
  `id_pendaftaran` int(255) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `dokumen` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Belum Diterima',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar_beasiswa`
--

INSERT INTO `pendaftar_beasiswa` (`id_pendaftaran`, `nim`, `id`, `dokumen`, `status`, `created_at`) VALUES
(5, '175150200111078', '2', '175150200111078-kholel-2', 'Diterima', '2019-11-30 21:13:17'),
(6, '175150200111078', '3', '175150200111078-kholel-3', 'Belum Diterima', '2019-11-30 20:25:50'),
(7, '175150200111078', '4', '175150200111078-kholel-4', 'Diterima', '2019-12-05 02:02:20'),
(8, '175150201111036', '2', '175150201111036-Alif Fahrizal-2', 'Belum Diterima', '2019-12-04 15:11:32'),
(9, '175150201111036', '3', '175150201111036-Alif Fahrizal-3', 'Belum Diterima', '2019-12-04 15:21:06'),
(10, '175150201111036', '4', '175150201111036-Alif Fahrizal-4', 'Belum Diterima', '2019-12-04 15:29:24'),
(11, '175150201111053', '2', '175150201111053-Tania Malik Iryana-2', 'Diterima', '2019-12-05 02:01:47'),
(12, '175150201111053', '5', '175150201111053-Tania Malik Iryana-5', 'Diterima', '2019-12-05 02:03:24');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_data_beasiswa`
--

CREATE TABLE `riwayat_data_beasiswa` (
  `id` int(255) NOT NULL,
  `nama_bea` varchar(200) NOT NULL,
  `Jenis_bea` varchar(50) NOT NULL,
  `Fak_bea` varchar(50) NOT NULL,
  `jangka_bea` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_data_beasiswa`
--

INSERT INTO `riwayat_data_beasiswa` (`id`, `nama_bea`, `Jenis_bea`, `Fak_bea`, `jangka_bea`, `deskripsi`) VALUES
(1, 'Pertamina', 'parsial', 'pertanian', '2 tahun', 'cobaa'),
(2, 'Djarum', 'Prestasi', 'FILKOM', '3 Tahun', 'Beasiswa djarum merupakan beasiswa yang disediakan oleh perusahaan djarum guna menunjang prestasi dibidang pendidikan serta sebagai kontribusi nyata untuk bangsa dan negara.'),
(3, 'Pertamina', 'Prestasi', 'FILKOM', '4 Tahun', 'Beasiswa Pertamina merupakan basiswa yang disediakan oleh BUMN dalam sebagai wujud nyata membantu di dunia pendidikan'),
(4, 'Paramex Group', 'Pemberdayaan', 'FIA', '2 Tahun', 'beasiswa ini merupakan beasiswa untuk menyembuhkan sakit kepala mahasiswa yang binggung memikirkan UKT'),
(5, 'Pertamini', 'Prestasi', 'FILKOM', '4 tahun', 'beasiswa pertamini disiapkan untuk mahasiswa yang mampu melakukan penakaran bensin secara presisi dan tidak tumpah'),
(6, 'dfk', 'kj', 'klefj', 'jk', 'fe'),
(7, '', '', '', '', ''),
(8, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(10) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `nama`, `password`, `level`) VALUES
('175150200111078', 'kholel', 'sembarang', 1),
('175150201111036', 'Alif Fahrizal', 'tes', 1),
('175150201111053', 'Tania Malik Iryana', '123', 1),
('admin', 'wkwkwk', 'tes', 2),
('adminB', 'kholilulloh', 'sembarang', 2),
('adminku', 'kholilulloh', 'tes', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indexes for table `riwayat_data_beasiswa`
--
ALTER TABLE `riwayat_data_beasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_beasiswa`
--
ALTER TABLE `data_beasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pendaftar_beasiswa`
--
ALTER TABLE `pendaftar_beasiswa`
  MODIFY `id_pendaftaran` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `riwayat_data_beasiswa`
--
ALTER TABLE `riwayat_data_beasiswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
