-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 07:25 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktekdokric`
--

-- --------------------------------------------------------

--
-- Table structure for table `berobat`
--

CREATE TABLE `berobat` (
  `id_berobat` int(11) NOT NULL,
  `kode_sakit` varchar(5) NOT NULL,
  `id_pasien` int(5) DEFAULT NULL,
  `id_dokter` int(5) DEFAULT NULL,
  `tgl_berobat` date DEFAULT NULL,
  `keluhan_pasien` varchar(200) DEFAULT NULL,
  `hasil_diagnosa` varchar(200) DEFAULT NULL,
  `penatalaksanaan` enum('Rawat Jalan','Rawat Inap','Rujuk','Lainnya...') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_dokter`
--

CREATE TABLE `dm_dokter` (
  `id_dokter` int(5) NOT NULL,
  `id_poli` int(5) NOT NULL,
  `nama_dokter` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_dokter`
--

INSERT INTO `dm_dokter` (`id_dokter`, `id_poli`, `nama_dokter`) VALUES
(1, 1, 'Humna'),
(2, 1, 'Usro'),
(3, 2, 'Rina');

-- --------------------------------------------------------

--
-- Table structure for table `dm_obat`
--

CREATE TABLE `dm_obat` (
  `id_obat` int(5) NOT NULL,
  `nama_obat` varchar(100) DEFAULT NULL,
  `satuan` varchar(20) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `stock` int(5) NOT NULL,
  `harga` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_pasien`
--

CREATE TABLE `dm_pasien` (
  `id` varchar(16) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `kontak_lain` varchar(13) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `jenis_layanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dm_pasien`
--

INSERT INTO `dm_pasien` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `no_hp`, `kontak_lain`, `pekerjaan`, `alamat`, `desa`, `provinsi`, `kecamatan`, `jenis_layanan`) VALUES
('PS2110111', 'Islahatun Nufusi', 'Pandeglang', '1998-11-07', 'P', '085893324274', 'cvvv', 'dddd', 'dddd', '', '', '', 'ddddd'),
('PS2110112', 'HUMNAMA', 'SERANG', '2021-11-07', 'P', '085893324274', '085893324274', 'Siswa', 'SERANG', '', '', '', 'ddddd'),
('PS2113113', 'SISKA', 'Pandeglang', '1998-03-23', 'L', '085893324274', '085893324274', 'Mahasiswa', 'SERANG', '', '', '', 'BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `dm_pelayanan`
--

CREATE TABLE `dm_pelayanan` (
  `id_pelayanan` int(11) NOT NULL,
  `nama_pelayanan` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dm_poli`
--

CREATE TABLE `dm_poli` (
  `id_poli` int(16) NOT NULL,
  `nama_poli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dm_poli`
--

INSERT INTO `dm_poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_berobat` int(11) DEFAULT NULL,
  `id_obat` int(5) DEFAULT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_pasien` varchar(16) NOT NULL,
  `quantity` int(5) NOT NULL,
  `aturan` varchar(10) NOT NULL,
  `tanggal_resep` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

CREATE TABLE `sys_logs` (
  `log_id` int(11) NOT NULL,
  `log_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_modules`
--

CREATE TABLE `sys_modules` (
  `module_id` int(11) NOT NULL,
  `navbar_id` int(11) DEFAULT NULL,
  `module_name` varchar(150) NOT NULL,
  `link` varchar(250) NOT NULL,
  `src` varchar(250) NOT NULL,
  `m_view` enum('Y','N') DEFAULT 'N' COMMENT 'Y Jika module mempunya fungsi view, N Jika module tidak mempunya fungsi view',
  `m_add` enum('Y','N') DEFAULT 'N',
  `m_upd` enum('Y','N') DEFAULT 'N',
  `m_del` enum('Y','N') DEFAULT 'N',
  `active` enum('Y','N') DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_navbar`
--

CREATE TABLE `sys_navbar` (
  `navbar_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `navbar_icon` varchar(100) DEFAULT NULL,
  `navbar_name` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL DEFAULT '0',
  `active` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_navbar`
--

INSERT INTO `sys_navbar` (`navbar_id`, `parent_id`, `navbar_icon`, `navbar_name`, `url`, `sort`, `active`) VALUES
(1, 0, '<i class="fas fa-tachometer-alt"></i>', 'Dashboard', '', 0, 'Y'),
(3, 0, '<i class="fas fa-user"></i>', 'Pendaftaran', '', 0, 'Y'),
(4, 3, NULL, 'Pasien Baru', 'Pasien', 0, 'Y'),
(5, 3, NULL, ' Pasien Terdaftar', 'Pasien_terdaftar', 0, 'Y'),
(6, 3, NULL, ' Pembatan Transaksi', '', 0, 'Y'),
(7, 0, '<i class="fas fa-server"></i>', 'Master Data', '', 0, 'Y'),
(8, 7, NULL, 'Dokter', '', 0, 'Y'),
(9, 7, NULL, 'Poliklinik', '', 0, 'Y'),
(10, 7, NULL, 'Tindakan', '', 0, 'Y'),
(11, 7, NULL, 'Pasien', '', 0, 'Y'),
(15, 7, NULL, 'Obat', '', 0, 'Y'),
(16, 7, NULL, 'Harta Tetap', '', 0, 'Y'),
(17, 7, NULL, 'Supplier', '', 0, 'Y'),
(18, 0, '<i class="fas fa-calendar-alt"></i>', 'Jadwal Dokter', 'Jadwal_dokter', 0, 'Y'),
(19, 0, '<i class="fas fa-capsules"></i>', 'Farmasi', '', 0, 'Y'),
(20, 0, '<i class="fas fa-stethoscope"></i>', 'Input Tindakan', '', 0, 'Y'),
(21, 0, '<i class="fas fa-shopping-cart"></i>', 'Kasir', '', 0, 'Y'),
(22, 0, '<i class="fas fa-money-bill"></i>', 'Keuangan', '', 0, 'Y'),
(23, 0, '<i class="fas fa-users"></i>', 'Users', '', 0, 'Y'),
(24, 0, '<i class="fas fa-book-medical"></i>', 'Laporan', '', 0, 'Y'),
(27, 0, '<i class="fas fa-warehouse"></i>', 'Inventory', '', 0, 'Y'),
(28, 0, '<i class="fas fa-envelope-open-text"></i>', 'Cetak Surat', '', 0, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `sys_rules`
--

CREATE TABLE `sys_rules` (
  `rule_id` int(11) NOT NULL,
  `rule_name` varchar(150) NOT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_rulesmodules`
--

CREATE TABLE `sys_rulesmodules` (
  `rule_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `m_view` enum('Y','N') DEFAULT NULL,
  `m_add` enum('Y','N') DEFAULT NULL,
  `m_upd` enum('Y','N') DEFAULT NULL,
  `m_del` enum('Y','N') DEFAULT NULL,
  `active` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE `sys_users` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `nik` varchar(18) NOT NULL,
  `password` varchar(250) NOT NULL DEFAULT '',
  `session_id` varchar(250) DEFAULT NULL,
  `active` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`username`, `nik`, `password`, `session_id`, `active`) VALUES
('admin', '', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_dokter`
--

CREATE TABLE `tbl_jadwal_dokter` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(6) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `hari` varchar(7) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_berakhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_dokter`
--

INSERT INTO `tbl_jadwal_dokter` (`id_jadwal`, `id_dokter`, `id_poli`, `hari`, `jam_mulai`, `jam_berakhir`) VALUES
(1, 1, 1, 'senin', '07:48:00', '07:48:00'),
(2, 2, 1, 'senin', '19:47:00', '19:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kunjungan`
--

CREATE TABLE `tbl_kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `no_antrian` int(3) NOT NULL,
  `id_pasien` varchar(16) NOT NULL,
  `id_dokter` int(5) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `layanan` enum('BPJS','UMUM') NOT NULL,
  `tanggal_kunjungan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kunjungan`
--

INSERT INTO `tbl_kunjungan` (`id_kunjungan`, `no_antrian`, `id_pasien`, `id_dokter`, `id_poli`, `layanan`, `tanggal_kunjungan`) VALUES
(1, 0, '0', 1, 0, 'UMUM', '2021-11-13'),
(2, 0, 'PS2110111', 1, 0, 'UMUM', '2021-11-13'),
(3, 0, 'PS2110111', 1, 0, 'UMUM', '2021-11-13'),
(4, 0, 'PS2110111', 1, 0, 'BPJS', '2021-11-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`id_berobat`),
  ADD KEY `FK2` (`id_dokter`);

--
-- Indexes for table `dm_dokter`
--
ALTER TABLE `dm_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `dm_obat`
--
ALTER TABLE `dm_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `dm_pasien`
--
ALTER TABLE `dm_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dm_pelayanan`
--
ALTER TABLE `dm_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `FK_berobat` (`id_berobat`),
  ADD KEY `FK_obat` (`id_obat`);

--
-- Indexes for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `sys_modules`
--
ALTER TABLE `sys_modules`
  ADD PRIMARY KEY (`module_id`);

--
-- Indexes for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  ADD PRIMARY KEY (`navbar_id`);

--
-- Indexes for table `sys_rules`
--
ALTER TABLE `sys_rules`
  ADD PRIMARY KEY (`rule_id`);

--
-- Indexes for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD PRIMARY KEY (`rule_id`,`module_id`),
  ADD KEY `FK_sys_rulesmodules_sys_modules` (`module_id`);

--
-- Indexes for table `sys_users`
--
ALTER TABLE `sys_users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_jadwal_dokter`
--
ALTER TABLE `tbl_jadwal_dokter`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dm_pelayanan`
--
ALTER TABLE `dm_pelayanan`
  MODIFY `id_pelayanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sys_logs`
--
ALTER TABLE `sys_logs`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sys_modules`
--
ALTER TABLE `sys_modules`
  MODIFY `module_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sys_navbar`
--
ALTER TABLE `sys_navbar`
  MODIFY `navbar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sys_rules`
--
ALTER TABLE `sys_rules`
  MODIFY `rule_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jadwal_dokter`
--
ALTER TABLE `tbl_jadwal_dokter`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_kunjungan`
--
ALTER TABLE `tbl_kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berobat`
--
ALTER TABLE `berobat`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`id_dokter`) REFERENCES `dm_dokter` (`id_dokter`) ON UPDATE CASCADE;

--
-- Constraints for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD CONSTRAINT `FK_berobat` FOREIGN KEY (`id_berobat`) REFERENCES `berobat` (`id_berobat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_obat` FOREIGN KEY (`id_obat`) REFERENCES `dm_obat` (`id_obat`);

--
-- Constraints for table `sys_rulesmodules`
--
ALTER TABLE `sys_rulesmodules`
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_modules` FOREIGN KEY (`module_id`) REFERENCES `sys_modules` (`module_id`),
  ADD CONSTRAINT `FK_sys_rulesmodules_sys_rules` FOREIGN KEY (`rule_id`) REFERENCES `sys_rules` (`rule_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
