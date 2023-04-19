-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 04:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(5) NOT NULL,
  `tanggal_absen` date NOT NULL,
  `status_absen` varchar(15) DEFAULT NULL,
  `id_orang_tua` int(5) NOT NULL,
  `nm_ortu` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `tanggal_absen`, `status_absen`, `id_orang_tua`, `nm_ortu`) VALUES
(113, '2022-06-21', 'hadir', 0, 'MIFTAKHUR RAMAH'),
(114, '2022-06-21', 'hadir', 0, 'SITI FATAYANAH'),
(115, '2022-06-21', 'tidak hadir', 0, 'NUR ASIYAH'),
(116, '2022-06-21', 'tidak hadir', 0, 'SAMI'),
(117, '2022-04-21', 'tidak hadir', 0, 'ARIN FITRIANA W');

-- --------------------------------------------------------

--
-- Table structure for table `dataset`
--

CREATE TABLE `dataset` (
  `id_dataset` int(5) NOT NULL,
  `jenis_kelamin` tinyint(4) NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `bb` tinyint(4) NOT NULL,
  `tb` tinyint(4) NOT NULL,
  `status_gizi` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataset`
--

INSERT INTO `dataset` (`id_dataset`, `jenis_kelamin`, `umur`, `bb`, `tb`, `status_gizi`) VALUES
(149, 1, 27, 6, 20, 1),
(150, 1, 27, 8, 29, 1),
(151, 1, 49, 6, 33, 2),
(152, 1, 46, 10, 37, 1),
(153, 1, 34, 7, 27, 1),
(154, 1, 28, 9, 27, 1),
(155, 1, 31, 10, 32, 1),
(156, 1, 18, 3, 18, 2),
(157, 1, 18, 4, 18, 1),
(158, 1, 9, 8, 18, 1),
(159, 1, 20, 4, 18, 1),
(160, 1, 20, 4, 17, 1),
(161, 2, 47, 10, 41, 1),
(162, 2, 45, 7, 34, 1),
(163, 2, 43, 6, 32, 2),
(164, 2, 46, 9, 34, 1),
(165, 2, 40, 10, 34, 1),
(166, 2, 32, 5, 27, 2),
(167, 2, 22, 5, 24, 1),
(168, 2, 32, 11, 29, 1),
(169, 2, 16, 3, 15, 1),
(170, 2, 7, 7, 14, 1),
(171, 2, 3, 2, 9, 1),
(172, 1, 28, 4, 21, 1),
(173, 1, 28, 8, 30, 1),
(174, 1, 47, 11, 37, 1),
(175, 1, 32, 10, 33, 1),
(176, 1, 19, 4, 19, 1),
(177, 1, 10, 4, 19, 1),
(178, 1, 21, 4, 19, 1),
(179, 2, 48, 10, 42, 1),
(180, 2, 46, 7, 35, 1),
(181, 2, 44, 11, 33, 1),
(182, 2, 47, 10, 35, 1),
(183, 2, 33, 10, 27, 1),
(184, 2, 23, 6, 25, 1),
(185, 2, 33, 11, 29, 1),
(186, 2, 17, 4, 16, 1),
(187, 2, 8, 4, 15, 1),
(188, 2, 4, 2, 10, 1),
(189, 2, 1, 2, 8, 1),
(190, 2, 47, 9, 19, 1),
(191, 2, 27, 8, 25, 1),
(192, 2, 32, 7, 22, 1),
(193, 2, 28, 7, 18, 1),
(194, 2, 26, 7, 26, 1),
(195, 2, 27, 6, 20, 1),
(196, 2, 43, 7, 32, 1),
(197, 2, 26, 3, 35, 2),
(198, 2, 45, 11, 26, 1),
(199, 1, 44, 8, 33, 1),
(200, 2, 37, 11, 31, 1),
(201, 1, 45, 7, 27, 1),
(202, 1, 30, 8, 35, 1),
(203, 2, 25, 8, 32, 1),
(204, 2, 43, 8, 38, 1),
(205, 2, 42, 11, 36, 1),
(206, 2, 45, 6, 34, 2),
(207, 2, 36, 11, 37, 1),
(208, 2, 40, 11, 28, 1),
(209, 1, 33, 7, 29, 1),
(210, 2, 43, 9, 36, 1),
(211, 1, 31, 7, 26, 1),
(212, 1, 21, 7, 22, 1),
(213, 2, 23, 5, 23, 1),
(214, 1, 21, 7, 16, 1),
(215, 1, 19, 5, 15, 1),
(216, 2, 20, 4, 22, 2),
(217, 1, 21, 6, 13, 1),
(218, 1, 19, 3, 29, 2),
(219, 2, 17, 4, 34, 2),
(220, 2, 39, 4, 17, 1),
(221, 2, 12, 4, 14, 1),
(222, 2, 10, 2, 32, 2),
(223, 2, 9, 2, 12, 2),
(224, 2, 7, 2, 15, 2),
(225, 1, 9, 7, 8, 1),
(226, 2, 8, 4, 7, 1),
(227, 1, 16, 4, 7, 1),
(228, 1, 11, 6, 16, 1),
(229, 1, 11, 4, 8, 1),
(230, 1, 9, 3, 23, 2),
(231, 1, 6, 3, 21, 2),
(232, 1, 3, 3, 8, 1),
(233, 2, 3, 2, 1, 1),
(234, 2, 13, 4, 5, 1),
(235, 1, 3, 2, 12, 1),
(236, 1, 1, 2, 1, 1),
(237, 1, 2, 2, 2, 1),
(238, 2, 2, 4, 1, 1),
(239, 2, 1, 3, 1, 1),
(240, 2, 1, 1, 6, 2),
(241, 1, 11, 1, 1, 1),
(242, 1, 21, 9, 12, 1),
(243, 2, 28, 9, 13, 1),
(244, 2, 49, 6, 34, 2),
(245, 2, 35, 3, 20, 2),
(246, 2, 14, 2, 32, 2),
(247, 1, 23, 3, 29, 2),
(248, 2, 21, 4, 34, 2),
(249, 1, 15, 2, 14, 2),
(250, 1, 33, 4, 23, 2),
(251, 1, 34, 4, 24, 2),
(252, 1, 35, 11, 33, 1),
(253, 1, 7, 1, 7, 2),
(254, 1, 5, 2, 4, 1),
(255, 1, 8, 1, 8, 2),
(256, 1, 4, 2, 5, 1),
(257, 1, 14, 4, 13, 1),
(258, 1, 17, 2, 6, 2),
(259, 1, 15, 4, 13, 1),
(260, 1, 12, 3, 13, 2),
(261, 1, 22, 4, 20, 1),
(262, 1, 25, 9, 22, 1),
(263, 1, 24, 5, 20, 1),
(264, 2, 6, 3, 8, 1),
(265, 2, 11, 3, 11, 1),
(266, 2, 18, 6, 16, 1),
(267, 2, 24, 3, 15, 1),
(268, 2, 31, 7, 25, 1),
(269, 2, 41, 9, 28, 1),
(270, 2, 29, 9, 13, 1),
(271, 2, 38, 11, 32, 1),
(272, 2, 30, 8, 24, 1),
(273, 2, 34, 6, 23, 1),
(274, 2, 15, 2, 15, 2),
(275, 1, 26, 7, 27, 1),
(276, 1, 36, 11, 41, 1),
(277, 1, 37, 9, 36, 1),
(278, 1, 39, 9, 35, 1),
(279, 1, 43, 10, 37, 1),
(280, 1, 42, 11, 41, 1),
(281, 1, 38, 9, 32, 1),
(282, 2, 5, 2, 2, 1),
(283, 2, 19, 1, 8, 2),
(284, 1, 13, 2, 3, 1),
(285, 1, 29, 8, 23, 1),
(286, 1, 40, 7, 33, 1),
(287, 1, 48, 8, 35, 1),
(288, 2, 15, 3, 12, 1),
(290, 1, 29, 7, 39, 2),
(291, 2, 45, 9, 40, 1),
(292, 2, 45, 7, 40, 2),
(293, 2, 3, 1, 4, 1),
(294, 1, 3, 2, 6, 1),
(295, 1, 8, 1, 9, 2),
(296, 1, 4, 2, 6, 1),
(297, 2, 1, 1, 3, 1),
(298, 2, 37, 7, 21, 1),
(299, 2, 48, 11, 39, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE `data_anak` (
  `id_anak` int(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` varchar(40) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `nama_ortu` int(5) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto_anak` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anak`
--

INSERT INTO `data_anak` (`id_anak`, `nik`, `nama`, `anak_ke`, `tempat_lahir`, `tanggal_lahir`, `umur`, `jenis_kelamin`, `nama_ortu`, `alamat`, `foto_anak`, `status`) VALUES
(60, '3519127590180005', 'ARFANDI PRATAMA', 1, 'Madiun', '2018-12-20', '3 tahun, 6 bulan ', 'Laki-laki', 73, 'RT. 18 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '20220623_062753.jpg', 'belum diberikan'),
(62, '3519129765430005', 'M. IRSYAD M.', 2, 'Madiun', '2017-05-30', '5 tahun, 0 bulan ', 'Laki-laki', 75, 'RT. 18 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '20220623_062842.jpg', 'belum diberikan'),
(63, '3519127615000001', 'KENZIE F. N. S. ', 3, 'Madiun', '2018-05-23', '4 tahun, 1 bulan ', 'Laki-laki', 76, 'RT. 15 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '20220623_062827.jpg', 'belum diberikan');

-- --------------------------------------------------------

--
-- Table structure for table `data_ortu`
--

CREATE TABLE `data_ortu` (
  `id_ortu` int(5) NOT NULL,
  `nik_ortu` varchar(16) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_ortu`
--

INSERT INTO `data_ortu` (`id_ortu`, `nik_ortu`, `nama_ortu`, `pekerjaan`, `alamat_ortu`, `no_hp`, `foto`) VALUES
(73, '3519121876000001', 'MIFTAKHUR RAMAH', 'Ibu Rumah Tangga', 'RT. 18 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '085607497600', '20220705_124832.jpg'),
(75, '3519123187650006', 'NUR ASIYAH', 'Ibu Rumah Tangga', 'RT. 18 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '082156187658', '20220623_062644.jpg'),
(76, '3519123678690005', 'SAMI', 'Ibu Rumah Tangga', 'RT. 15 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '085127897615', '20220623_062656.jpg'),
(78, '3519127896545432', 'Tina', 'Ibu Rumah Tangga', 'RT. 17 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '081645987135', '20220705_124922.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengguna`
--

CREATE TABLE `data_pengguna` (
  `id_pengguna` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengguna`
--

INSERT INTO `data_pengguna` (`id_pengguna`, `nama`, `email`, `username`, `password`, `foto`) VALUES
(1, 'kader', 'admin@gmail.com', 'kader', 'kader', '20220705_124753.jpg'),
(2, 'Kotim', 'kotim@gmail.com', 'kotim', 'kotim', ''),
(3, 'Yuni', 'yuni@gmail.com', 'yuni', 'yuni', '20220316_132604.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_penimbangan`
--

CREATE TABLE `data_penimbangan` (
  `id_penimbangan` int(5) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jenis_kelamin_anak` varchar(10) NOT NULL,
  `umur_anak` varchar(40) NOT NULL,
  `tgl_timbang_anak` date NOT NULL,
  `bb_anak` varchar(10) NOT NULL,
  `tb_anak` varchar(10) NOT NULL,
  `id_anakk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penimbangan`
--

INSERT INTO `data_penimbangan` (`id_penimbangan`, `nik_anak`, `nama_anak`, `jenis_kelamin_anak`, `umur_anak`, `tgl_timbang_anak`, `bb_anak`, `tb_anak`, `id_anakk`) VALUES
(4, '3519127590180005', 'ARFANDI PRATAMA', 'Laki-laki', '3 tahun, 0 bulan ', '2022-01-09', '12.1', '86.2 ', 60),
(5, '3519127590180005', 'ARFANDI PRATAMA', 'Laki-laki', '3 tahun, 1 bulan ', '2022-02-09', '12.2 ', '87.5 ', 60),
(6, '3519127590180005', 'ARFANDI PRATAMA', 'Laki-laki', '3 tahun, 2 bulan ', '2022-03-09', '12.4 ', '88.2', 60),
(7, '3519127615000001', 'KENZIE F. N. S.', 'Laki-laki', '3 tahun, 8 bulan', '2022-01-09', '12.9 ', '93.2 ', 63),
(8, '3519127615000001', 'KENZIE F. N. S.', 'Laki-laki', '3 tahun, 9 bulan', '2022-02-09', '13', '94.5 ', 63),
(9, '3519127615000001', 'KENZIE F. N. S.', 'Laki-laki', '3 tahun, 10 bulan', '2022-03-09', '13.7 ', '95.1 ', 63),
(10, '3519129765430005', 'M. IRSYAD M.', 'Laki-laki', '4 tahun, 8 bulan ', '2022-01-09', '16.7 ', '103.8', 62),
(11, '3519129765430005', 'M. IRSYAD M.', 'Laki-laki', '4 tahun, 9 bulan ', '2022-02-09', '16.6 ', '104.3 ', 62),
(12, '3519129765430005', 'M. IRSYAD M.', 'Laki-laki', '4 tahun, 10 bulan ', '2022-03-09', '17.5 ', '104.8', 62);

-- --------------------------------------------------------

--
-- Table structure for table `data_petugas`
--

CREATE TABLE `data_petugas` (
  `id_petugas` int(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_petugas`
--

INSERT INTO `data_petugas` (`id_petugas`, `nik`, `nama_petugas`, `jenis_kelamin`, `alamat`, `no_hp`, `foto`) VALUES
(3, '3519125608970001', 'MIFTAKHUL ROHMAH', 'Perempuan', 'RT. 15 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '085606861214', '20220519_014409.png'),
(4, '3519122600994001', 'DYAH SEPTIANA', 'Perempuan', 'RT. 15 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '085334673535', '20220519_014227.png'),
(5, '3519124701910004', 'WULANDARI', 'Perempuan', 'RT. 17 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '082132961343', '20220519_014610.png'),
(6, '3519126509900004', 'LIA RAHAYUNINGSIH', 'Perempuan', 'RT. 17 RW. 05 Dsn. Kopen Ds. Sidorejo Kec. Saradan', '085785713831', '20220519_014539.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_pmt`
--

CREATE TABLE `data_pmt` (
  `id_pmt` int(5) NOT NULL,
  `nama_menu` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pmt`
--

INSERT INTO `data_pmt` (`id_pmt`, `nama_menu`) VALUES
(1, 'Nasi kuning, telor, pepaya');

-- --------------------------------------------------------

--
-- Table structure for table `data_vitamin`
--

CREATE TABLE `data_vitamin` (
  `id_vitamin` int(5) NOT NULL,
  `nik_anak` varchar(16) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `umur_anak` varchar(40) NOT NULL,
  `tgl_vitamin` date NOT NULL,
  `jenis_vitamin` varchar(25) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_anakk` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_vitamin`
--

INSERT INTO `data_vitamin` (`id_vitamin`, `nik_anak`, `nama_anak`, `umur_anak`, `tgl_vitamin`, `jenis_vitamin`, `nama_petugas`, `id_anakk`) VALUES
(2, '3519127615000001', 'KENZIE F. N. S.', '3 tahun, 9 bulan ', '2022-02-09', 'Vit A Kapsul Merah', 'LIA RAHAYUNINGSIH', 63);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_vitamin`
--

CREATE TABLE `jenis_vitamin` (
  `id_jenis_vitamin` int(5) NOT NULL,
  `jenis_vitamin` varchar(30) NOT NULL,
  `umur` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_vitamin`
--

INSERT INTO `jenis_vitamin` (`id_jenis_vitamin`, `jenis_vitamin`, `umur`) VALUES
(1, 'Vit A Kapsul Biru', '6-11 bulan'),
(2, 'Vit A Kapsul Merah', '1-5 tahun');

-- --------------------------------------------------------

--
-- Table structure for table `menu_pmt`
--

CREATE TABLE `menu_pmt` (
  `id_menu_pmt` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `ket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_pmt`
--

INSERT INTO `menu_pmt` (`id_menu_pmt`, `tanggal`, `nama_menu`, `ket`) VALUES
(7, '2022-03-18', 'Nasi Kuning, Telur, Jus Jeruk, Donat', 'balita'),
(8, '2022-02-18', 'Kue, Jus Jambu, Telur', 'balita'),
(9, '2022-01-19', 'Nasi Kuning, Telur, Jus Jeruk', 'balita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `dataset`
--
ALTER TABLE `dataset`
  ADD PRIMARY KEY (`id_dataset`);

--
-- Indexes for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD PRIMARY KEY (`id_anak`),
  ADD KEY `nama_ortu` (`nama_ortu`);

--
-- Indexes for table `data_ortu`
--
ALTER TABLE `data_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  ADD PRIMARY KEY (`id_penimbangan`),
  ADD KEY `id_anakk` (`id_anakk`);

--
-- Indexes for table `data_petugas`
--
ALTER TABLE `data_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `data_pmt`
--
ALTER TABLE `data_pmt`
  ADD PRIMARY KEY (`id_pmt`);

--
-- Indexes for table `data_vitamin`
--
ALTER TABLE `data_vitamin`
  ADD PRIMARY KEY (`id_vitamin`),
  ADD KEY `id_anakk` (`id_anakk`);

--
-- Indexes for table `jenis_vitamin`
--
ALTER TABLE `jenis_vitamin`
  ADD PRIMARY KEY (`id_jenis_vitamin`);

--
-- Indexes for table `menu_pmt`
--
ALTER TABLE `menu_pmt`
  ADD PRIMARY KEY (`id_menu_pmt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT for table `dataset`
--
ALTER TABLE `dataset`
  MODIFY `id_dataset` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `data_anak`
--
ALTER TABLE `data_anak`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `data_ortu`
--
ALTER TABLE `data_ortu`
  MODIFY `id_ortu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `data_pengguna`
--
ALTER TABLE `data_pengguna`
  MODIFY `id_pengguna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  MODIFY `id_penimbangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `data_petugas`
--
ALTER TABLE `data_petugas`
  MODIFY `id_petugas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_pmt`
--
ALTER TABLE `data_pmt`
  MODIFY `id_pmt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `data_vitamin`
--
ALTER TABLE `data_vitamin`
  MODIFY `id_vitamin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jenis_vitamin`
--
ALTER TABLE `jenis_vitamin`
  MODIFY `id_jenis_vitamin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `menu_pmt`
--
ALTER TABLE `menu_pmt`
  MODIFY `id_menu_pmt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD CONSTRAINT `data_anak_ibfk_1` FOREIGN KEY (`nama_ortu`) REFERENCES `data_ortu` (`id_ortu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_penimbangan`
--
ALTER TABLE `data_penimbangan`
  ADD CONSTRAINT `data_penimbangan_ibfk_1` FOREIGN KEY (`id_anakk`) REFERENCES `data_anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_vitamin`
--
ALTER TABLE `data_vitamin`
  ADD CONSTRAINT `data_vitamin_ibfk_1` FOREIGN KEY (`id_anakk`) REFERENCES `data_anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
