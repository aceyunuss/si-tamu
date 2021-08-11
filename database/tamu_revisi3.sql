-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 22, 2021 at 03:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamu_revisi3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE `tb_departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'tes deprtemen'),
(2, 'tes deprtemen 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ijin`
--

CREATE TABLE `tb_ijin` (
  `id_ijin` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `penanggungjawab` varchar(255) NOT NULL,
  `jenis_pekerjaan` varchar(255) NOT NULL,
  `jml_tenaga` int(11) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `potensi_bahaya` varchar(255) NOT NULL,
  `apd` varchar(255) NOT NULL,
  `daftar_alat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ijin`
--

INSERT INTO `tb_ijin` (`id_ijin`, `nama_perusahaan`, `penanggungjawab`, `jenis_pekerjaan`, `jml_tenaga`, `waktu_pelaksanaan`, `potensi_bahaya`, `apd`, `daftar_alat`) VALUES
(4, 'PT. MAJU MUNDUR', 'bejo', 'macul', 10, '2021-07-22', 'Mudah Terbakar, Ketinggian', 'Safety Helmet, Respirator', 'Welding Set, Stager'),
(5, 'PT. MAJU MUNDUR', 'bejo', 'macul', 10, '2021-07-22', 'Mudah Terbakar, Ketinggian', 'Respirator, Safety Body Harness', 'Welding Set, Stager');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai2`
--

CREATE TABLE `tb_pegawai2` (
  `id_pegawai` int(9) NOT NULL,
  `nip` varchar(70) DEFAULT NULL,
  `nama_peg` varchar(255) DEFAULT NULL,
  `id_u_kerja` int(9) DEFAULT NULL,
  `telpon` varchar(15) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pegawai2`
--

INSERT INTO `tb_pegawai2` (`id_pegawai`, `nip`, `nama_peg`, `id_u_kerja`, `telpon`, `qr_code`) VALUES
(542, '3221222', 'Dading Hermawan', 100, '6211111', '3221222.png'),
(543, '5454545', 'Nurhayati Manurung', 100, '6211111223', '5454545.png'),
(544, '344444543', 'PRASETYA N', 101, '62233', '344444543.png'),
(546, '33343443311', 'bejo santosa2', 101, '6211111', '33343443311.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perlu`
--

CREATE TABLE `tb_perlu` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perlu`
--

INSERT INTO `tb_perlu` (`id`, `judul`) VALUES
(2, 'Rapat\r\n\r\n'),
(9, 'Penawaran'),
(3, 'Konsultasi'),
(10, 'Mengurus Perizinan'),
(11, 'Mengantar Barang/Paket'),
(12, 'Keperluan Kerja Beresiko');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nama_perusahaan`, `foto`) VALUES
(1, 'PT. MAJU MUNDUR', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id_tamu` int(9) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `jam_keluar` time NOT NULL,
  `ketemu` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `id_departemen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tamu`
--

INSERT INTO `tb_tamu` (`id_tamu`, `nik`, `nama`, `alamat`, `telp`, `keperluan`, `tanggal`, `jam`, `jam_keluar`, `ketemu`, `instansi`, `id_departemen`) VALUES
(23, '2323232', 'FSSF', 'SFS', '4545', '12', '2021-06-22', '20:36:33', '05:27:32', '5454545', 'SSF12', 1),
(24, '43434', 'bupati', 'aad', '08578140396', '2', '2021-06-23', '10:12:46', '00:00:00', '3221222', 'daa', 1),
(25, '32121423', 'Sekpri Bupati', 'sfsf', '08578140396', '2', '2021-06-23', '10:13:05', '00:00:00', '3221222', 'sfs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(9) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `unit_kerja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `pass`, `level`, `foto`, `unit_kerja`) VALUES
(5, 'Sekretaris', 'user_sekretaris', '123456', 'sekretaris', 'avatar5.png', 0),
(7, 'Security', 'user_security', '123456', 'security', 'logo.png', 0),
(8, 'K3 & HSE Dept', 'user_k3', '123456', 'K3 & HSE Dept', 'logo.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tb_ijin`
--
ALTER TABLE `tb_ijin`
  ADD PRIMARY KEY (`id_ijin`);

--
-- Indexes for table `tb_pegawai2`
--
ALTER TABLE `tb_pegawai2`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_perlu`
--
ALTER TABLE `tb_perlu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_departemen`
--
ALTER TABLE `tb_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_ijin`
--
ALTER TABLE `tb_ijin`
  MODIFY `id_ijin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pegawai2`
--
ALTER TABLE `tb_pegawai2`
  MODIFY `id_pegawai` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=548;

--
-- AUTO_INCREMENT for table `tb_perlu`
--
ALTER TABLE `tb_perlu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id_tamu` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
