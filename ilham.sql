-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2019 at 10:13 PM
-- Server version: 5.7.26-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-6+ubuntu16.04.1+deb.sury.org+3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ilham`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas`
--

CREATE TABLE `aktivitas` (
  `no` int(50) NOT NULL,
  `pekerjaan` varchar(200) NOT NULL,
  `bahaya` text NOT NULL,
  `dampak` text NOT NULL,
  `pencegahan` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_aktivitas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas`
--

INSERT INTO `aktivitas` (`no`, `pekerjaan`, `bahaya`, `dampak`, `pencegahan`, `keterangan`, `id_aktivitas`) VALUES
(63, '1', 'tes', 'tes', 'tes', 'tes', '28052019925'),
(73, 'Kerja', 'Tes', 'tes', 'tes', 'tes', '28052019174'),
(74, 'Pengeboran', 'tes', 'tes', 'tes', 'tes', '28052019174'),
(75, 'Pengelasan', 'Jatuh', 'Luka Ringan', 'Tindak Pencegahan', 'Tindak Pencegahan', '13062019420'),
(76, 'Uraian Kerjaan 2', 'Identifikasi Bahaya 2', 'Dampak 2', 'Tindak Pencegahan 2', 'Tindak Pencegahan 2', '13062019420'),
(85, 'Uraian Pekerjaan 1', 'Identifikasi Bahaya 1', 'Dampak 1', 'Pencegahan 1', 'Pencegahan 1', '13062019851'),
(86, 'Uraian 2', 'Identifikasi Bahaya 2', 'Dampak 2', 'Pencegahan 2', 'Pencegahan 2', '13062019851'),
(95, 'pekerjaan', 'identifikasi bahaya', 'dampak ', 'tindak pencegahan', 'tindak pencegahan', '13062019610'),
(105, 'Pekerjaan Bongkaran', 'Tertimbun Material terkena debu terkena peralatan ', 'patah tulang, memar, meninggal', 'membuat pengaman, memakai peralatan apd', 'membuat pengaman, memakai peralatan apd', '13062019725'),
(115, 'testing', 't', 't', 't', 't', '13062019116'),
(116, 'testing', 't', 't', 't', 't', '13062019116'),
(125, 'Uraian Kerjaan 2', 'Identifikasi Bahaya', 'Dampak ', 'Tindakan Pencegahan', 'Tindakan Pencegahan', '13062019547');

-- --------------------------------------------------------

--
-- Table structure for table `aktivitas_bulanan`
--

CREATE TABLE `aktivitas_bulanan` (
  `id` int(11) NOT NULL,
  `program` text NOT NULL,
  `jumlah` text NOT NULL,
  `uraian` text NOT NULL,
  `tanggal` text NOT NULL,
  `id_bulanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktivitas_bulanan`
--

INSERT INTO `aktivitas_bulanan` (`id`, `program`, `jumlah`, `uraian`, `tanggal`, `id_bulanan`) VALUES
(1, '["Pelatihan","Pengelasan"]', '["10","10"]', '["Tes","tes"]', '["2019-10-02","2019-02-01"]', '28052019789'),
(2, '["testing","testing2"]', '["100","20"]', '["kegiatan","kegiatan saja"]', '["1995-09-11","2019-02-01"]', '0706201912'),
(3, '["Testing","Tesla"]', '["100","20"]', '["Kegiatan","Kegiatan terbaik"]', '["2019-10-10","2010-11-01"]', '19062019101'),
(4, '["1"]', '["10"]', '["1"]', '["2019-10-10"]', '19062019119');

-- --------------------------------------------------------

--
-- Table structure for table `bulanan`
--

CREATE TABLE `bulanan` (
  `no` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `dokumen` varchar(50) NOT NULL,
  `kontraktor` varchar(100) NOT NULL,
  `periode` varchar(100) NOT NULL,
  `tenaga_kerja` text NOT NULL,
  `jam_kerja_normal` text NOT NULL,
  `jam_kerja_overtime` text NOT NULL,
  `hari_kerja` text NOT NULL,
  `nearmiss` text NOT NULL,
  `incident` text NOT NULL,
  `accident_ringan` text NOT NULL,
  `accident_berat` text NOT NULL,
  `accident_fatal` text NOT NULL,
  `kerusakan_property` varchar(50) NOT NULL,
  `hilang_hari_kerja` varchar(50) NOT NULL,
  `biaya_pengobatan` varchar(50) NOT NULL,
  `id_program_k3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bulanan`
--

INSERT INTO `bulanan` (`no`, `id`, `dokumen`, `kontraktor`, `periode`, `tenaga_kerja`, `jam_kerja_normal`, `jam_kerja_overtime`, `hari_kerja`, `nearmiss`, `incident`, `accident_ringan`, `accident_berat`, `accident_fatal`, `kerusakan_property`, `hilang_hari_kerja`, `biaya_pengobatan`, `id_program_k3`) VALUES
(4, '19062019101', '99282718', 'PT Tunas', '2019', '["10","10","20"]', '["13","2","10"]', '["2","13","13"]', '["3","12","12"]', '["12","3","4"]', '["1","1566","13"]', '["13","1","21"]', '["12","4","24"]', '["1","26","1"]', '20000', '20', '250000', '19062019101'),
(3, '19062019233', '12334451', 'PT Tuna Asmara', '2019', '', '', '', '', '', '', '', '', '', '150000', '10', '100000', '19062019233'),
(1, '28052019789', '12122010192', 'CV Tuna Asmara', '1', '["0","0","10"]', '["0","0","10"]', '["0","0","13"]', '["10","12","10"]', '["5","5","5"]', '["10","7","7"]', '["198","81","8"]', '["818","81","8"]', '["1","12","10"]', '15000', '10', '100000', '28052019789'),
(2, '706201912', '221133221231', 'Chalid', '2019', '', '', '', '', '', '', '', '', '', '15000', '10', '130000', '0706201912');

-- --------------------------------------------------------

--
-- Table structure for table `closing_inspeksi`
--

CREATE TABLE `closing_inspeksi` (
  `no` int(11) NOT NULL,
  `id_inspeksi` varchar(25) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `foto_closing` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `closing_inspeksi`
--

INSERT INTO `closing_inspeksi` (`no`, `id_inspeksi`, `tanggal`, `foto_closing`, `status`) VALUES
(2, '19062019266', '19/06/2019', '["upload/Screenshot from 2019-06-17 16-18-25.png","upload/Screenshot from 2019-05-22 15-59-22.png","upload/Screenshot from 2019-05-28 21-51-20.png","upload/"]', 1);

-- --------------------------------------------------------

--
-- Table structure for table `harian`
--

CREATE TABLE `harian` (
  `nomer` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `no` varchar(20) NOT NULL,
  `hari_kerja` varchar(20) NOT NULL,
  `total_pekerja` varchar(20) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `id_aktivitas` varchar(20) NOT NULL,
  `nr1` varchar(10) NOT NULL,
  `nr2` varchar(10) NOT NULL,
  `nr3` varchar(10) NOT NULL,
  `ic1` varchar(10) NOT NULL,
  `ic2` varchar(10) NOT NULL,
  `ic3` varchar(10) NOT NULL,
  `fat` varchar(10) NOT NULL,
  `jum_pekerja1` varchar(10) NOT NULL,
  `jum_pekerja2` varchar(10) NOT NULL,
  `jam_efektif1` varchar(10) NOT NULL,
  `jam_efektif2` varchar(10) NOT NULL,
  `jam_normal` varchar(10) NOT NULL,
  `total_jam` varchar(10) NOT NULL,
  `total_hari` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `pt` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harian`
--

INSERT INTO `harian` (`nomer`, `id`, `date`, `pekerjaan`, `no`, `hari_kerja`, `total_pekerja`, `jenis_kegiatan`, `id_aktivitas`, `nr1`, `nr2`, `nr3`, `ic1`, `ic2`, `ic3`, `fat`, `jum_pekerja1`, `jum_pekerja2`, `jam_efektif1`, `jam_efektif2`, `jam_normal`, `total_jam`, `total_hari`, `keterangan`, `pt`, `status`) VALUES
(10, '13062019644', '13/06/2019', 'Welding', '4100044923', '14/06/2019', '100', 'Inspeksi', '13062019547', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 'Keterangan', 'PT Gunadharma Perkasa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(10) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `aktivitas` varchar(50) NOT NULL,
  `id_aktivitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `tanggal`, `aktivitas`, `id_aktivitas`) VALUES
(2, '28-05-2019 09:22:35pm', 'harian', '28052019777'),
(3, '28-05-2019 09:23:49pm', 'Bulanan', '28052019789'),
(4, '07-06-2019 10:13:44pm', 'Bulanan', '0706201912'),
(5, '13-06-2019 10:41:42am', 'Mingguan', '13062019118'),
(6, '13-06-2019 10:44:50am', 'Mingguan', '13062019590'),
(7, '13-06-2019 10:45:06am', 'Mingguan', '13062019520'),
(8, '13-06-2019 10:55:34am', 'Mingguan', '13062019453'),
(9, '13-06-2019 10:55:56am', 'Mingguan', '1306201948'),
(10, '13-06-2019 10:56:50am', 'Mingguan', '13062019336'),
(11, '13-06-2019 11:02:29am', 'Mingguan', '13062019993'),
(12, '13-06-2019 11:05:54am', 'Mingguan', '13062019189'),
(13, '13-06-2019 12:06:35pm', 'Mingguan', '13062019248'),
(14, '13-06-2019 12:11:01pm', 'Mingguan', '1306201932'),
(15, '13-06-2019 08:28:17pm', 'harian', '13062019745'),
(16, '13-06-2019 08:31:15pm', 'harian', '13062019506'),
(17, '13-06-2019 09:09:40pm', 'harian', '13062019129'),
(18, '13-06-2019 09:13:40pm', 'harian', '13062019854'),
(19, '13-06-2019 10:32:20pm', 'harian', '13062019644'),
(20, '13-06-2019 10:38:43pm', 'Mingguan', '13062019226'),
(21, '13-06-2019 10:39:06pm', 'Mingguan', '13062019598'),
(22, '19-06-2019 06:48:45pm', 'Bulanan', '19062019233'),
(23, '19-06-2019 07:13:10pm', 'Bulanan', '19062019101'),
(24, '19-06-2019 07:29:25pm', 'Bulanan', '19062019119'),
(25, '19-06-2019 08:19:09pm', 'Mingguan', '19062019629');

-- --------------------------------------------------------

--
-- Table structure for table `inspeksi`
--

CREATE TABLE `inspeksi` (
  `no` int(11) NOT NULL,
  `id` varchar(20) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `shift` varchar(11) NOT NULL,
  `id_checklist` varchar(1000) NOT NULL,
  `uk_pihak` varchar(100) NOT NULL,
  `uk_lokasi` varchar(200) NOT NULL,
  `temuan` text NOT NULL,
  `potensi_bahaya` text NOT NULL,
  `tindak_lanjut` text NOT NULL,
  `batas_tindak_lanjut` varchar(2000) NOT NULL,
  `bukti_tindak_lanjut` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inspeksi`
--

INSERT INTO `inspeksi` (`no`, `id`, `tanggal`, `shift`, `id_checklist`, `uk_pihak`, `uk_lokasi`, `temuan`, `potensi_bahaya`, `tindak_lanjut`, `batas_tindak_lanjut`, `bukti_tindak_lanjut`, `keterangan`, `status`) VALUES
(2, '14062019177', '14/06/2019', '1', '["Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', 'PT Cipta Karya', 'Surabaya', '["Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', '["Potensi Bahaya","Bahay","Potensi Bahaya"]', '["Tindak Lanjut","Tindak Lanjut","tindak lanjut"]', '["2019-10-10","2019-10-10","2019-10-10"]', '', '', 1),
(1, '14062019395', '14/06/2019', '1', '["Beroperasi/Bekerja Tanpa Otoritas","Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Panas, getaran yang berlebihan"]', 'PT Gunadharma Perkasa', 'Welding', '["Beroperasi/Bekerja Tanpa Otoritas","Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Panas, getaran yang berlebihan"]', '["Potensi Bahaya","Testing","Testing","Testing"]', '["Tindak Lanjut","Tindak Lanjut","Testing","Testing"]', '["2019-10-10","2019-10-10","2019-10-10","2019-10-10"]', '1', '', 0),
(3, '14062019679', '14/06/2019', '1', '["Beroperasi/Bekerja Tanpa Otoritas","Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Pelindung/Pembatas tidak ada/layak","Kurangnya pengawasan/kepemimpinan"]', 'PT Pertamina Tbk.', 'Surabaya', '["Beroperasi/Bekerja Tanpa Otoritas","Memperbaiki peralatan dlm keadaan beroperasi","Area kerja yang kotor","Pelindung/Pembatas tidak ada/layak","Kurangnya pengawasan/kepemimpinan"]', '["","","","",""]', '["","","","",""]', '["","","","",""]', '', '', 0),
(5, '19062019101', '19/06/2019', '1', '["Beroperasi/Bekerja Tanpa Otoritas","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', 'PT Terusan Jaya Abadi', 'Surabaya', '["Beroperasi/Bekerja Tanpa Otoritas","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', '["tes","",""]', '["","",""]', '["","",""]', '["upload/Screenshot from 2019-06-11 10-47-19.png","upload/Screenshot from 2019-05-22 07-04-29.png","upload/Screenshot from 2019-05-22 15-59-22.png"]', '', 0),
(6, '19062019266', '19/06/2019', '1', '["Beroperasi/Bekerja Tanpa Otoritas","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', 'PT Gunadharma Perkasa', 'Pengelasan', '["Beroperasi/Bekerja Tanpa Otoritas","Area kerja yang kotor","Kurangnya pengawasan/kepemimpinan"]', '["Potensi Bahaya","Jatuh","Sakit"]', '["Tindak Lanjut","Terperanjak","diobati"]', '["2019-06-19","2019-06-19","2019-06-27"]', '["upload/Screenshot from 2019-05-28 21-52-34.png","upload/Screenshot from 2019-05-16 00-23-23.png","upload/Screenshot from 2019-05-28 21-51-20.png"]', '', 1),
(4, '19062019594', '19/06/2019', '1', '["Beroperasi/Bekerja Tanpa Otoritas","Memperbaiki peralatan dlm keadaan beroperasi","Alat pelindung mesin yang terbuka","Kurangnya pengawasan/kepemimpinan"]', 'PT Antiaka Mandiri', 'Surabaya', '[null,null,null,null]', '[null,null,null,null]', '[null,null,null,null]', '[null,null,null,null]', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mingguan`
--

CREATE TABLE `mingguan` (
  `no` int(11) NOT NULL,
  `Id` varchar(50) NOT NULL,
  `jenis_pekerjaan` varchar(150) NOT NULL,
  `no_pekerjaan` varchar(50) NOT NULL,
  `minggu_ke` varchar(5) NOT NULL,
  `tahun_ke` varchar(10) NOT NULL,
  `progress_pekerjaan` varchar(5) NOT NULL,
  `masa_kerja_mulai` varchar(50) NOT NULL,
  `masa_kerja_akhir` varchar(50) NOT NULL,
  `hari_kerja_bulan_ini` varchar(10) NOT NULL,
  `jumlah_jam_kerja` int(10) NOT NULL,
  `total_har_kerja_berlangsung` varchar(10) NOT NULL,
  `total_jam_kerja` varchar(10) NOT NULL,
  `data_man_power_induk` varchar(10) NOT NULL,
  `data_man_power_outsource` varchar(10) NOT NULL,
  `temuan_unsafe_action` varchar(10) NOT NULL,
  `close_unsafe_action` varchar(10) NOT NULL,
  `total_unsafe_action` varchar(10) NOT NULL,
  `temuan_unsafe_condition` varchar(10) NOT NULL,
  `colse_unsafe_condition` varchar(10) NOT NULL,
  `total_unsafe_condition` varchar(10) NOT NULL,
  `nearmiss_jumlah` varchar(10) NOT NULL,
  `nearmiss_total` varchar(10) NOT NULL,
  `p3_jumlah` varchar(10) NOT NULL,
  `p3_total` varchar(10) NOT NULL,
  `ringan_jumlah` varchar(10) NOT NULL,
  `ringan_total` varchar(10) NOT NULL,
  `berat_jumlah` varchar(10) NOT NULL,
  `berat_total` varchar(10) NOT NULL,
  `fatality_jumlah` varchar(10) NOT NULL,
  `fatality_total` varchar(10) NOT NULL,
  `kerusakan_aset_jumlah` varchar(10) NOT NULL,
  `kerusakan_aset_total` varchar(10) NOT NULL,
  `kebakaran_jumlah` varchar(10) NOT NULL,
  `kebakaran_total` varchar(10) NOT NULL,
  `kerusakan_property` varchar(50) NOT NULL,
  `hilang_hari_kerja` varchar(50) NOT NULL,
  `biaya_pengobatan` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `pt` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mingguan`
--

INSERT INTO `mingguan` (`no`, `Id`, `jenis_pekerjaan`, `no_pekerjaan`, `minggu_ke`, `tahun_ke`, `progress_pekerjaan`, `masa_kerja_mulai`, `masa_kerja_akhir`, `hari_kerja_bulan_ini`, `jumlah_jam_kerja`, `total_har_kerja_berlangsung`, `total_jam_kerja`, `data_man_power_induk`, `data_man_power_outsource`, `temuan_unsafe_action`, `close_unsafe_action`, `total_unsafe_action`, `temuan_unsafe_condition`, `colse_unsafe_condition`, `total_unsafe_condition`, `nearmiss_jumlah`, `nearmiss_total`, `p3_jumlah`, `p3_total`, `ringan_jumlah`, `ringan_total`, `berat_jumlah`, `berat_total`, `fatality_jumlah`, `fatality_total`, `kerusakan_aset_jumlah`, `kerusakan_aset_total`, `kebakaran_jumlah`, `kebakaran_total`, `kerusakan_property`, `hilang_hari_kerja`, `biaya_pengobatan`, `keterangan`, `pt`) VALUES
(4, '13062019598', 'Pengelasan', '412200012', '1', '2019', '', '2019-01-01', '2019-01-08', '26', 5, '20', '100', '10', '10', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', 'Keterangan', 'PT Gunadharma Perkasa'),
(5, '19062019629', '1', '1', '1', '1', '', '0001-01-01', '0001-01-01', '1', 1, '10', '1', '10', '11', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `program_k3`
--

CREATE TABLE `program_k3` (
  `id` int(11) NOT NULL,
  `internal_safety_jumlah` int(11) NOT NULL,
  `internal_safety__uraian` int(11) NOT NULL,
  `internal_safety_tanggal` date NOT NULL,
  `pelatihan_jumlah` int(11) NOT NULL,
  `pelatihan_kegiatan` int(11) NOT NULL,
  `pelatihan_tanggal` date NOT NULL,
  `house_keeping_jumlah` int(11) NOT NULL,
  `house_keeping_kegiatan` int(11) NOT NULL,
  `house_keeping_tanggal` date NOT NULL,
  `lain_jumlah` int(11) NOT NULL,
  `lain_kegiatan` int(11) NOT NULL,
  `lain_tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jabatan` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Nama`, `Jabatan`, `Email`, `Password`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '123'),
(2, 'PT JAYA WIJAYA', 'SO', 'so@gmail.com', '123'),
(3, 'Rudi', 'Kasi', 'kasi@gmail.com', '123'),
(4, 'PT Gunadharma Perkasa', 'Kontraktor', 'kontraktor@gmail.com', '123'),
(5, 'Fikri', 'Manajer', 'manager@gmail.com', '123'),
(7, 'Rahmad', 'Manajer', 'rahmad@gmail.com', '1'),
(8, 'Dani', 'Kontraktor', 'dani@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` varchar(50) NOT NULL,
  `vendor` varchar(200) NOT NULL,
  `CV_PT` varchar(20) NOT NULL,
  `no_sap` int(50) NOT NULL,
  `pic` varchar(150) NOT NULL,
  `telp` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `bidang` varchar(200) NOT NULL,
  `spesialis` varchar(200) NOT NULL,
  `penilaian_kontraktor` varchar(50) NOT NULL,
  `area` text NOT NULL,
  `kualifikasi` varchar(200) NOT NULL,
  `expired_date_siujk` varchar(50) NOT NULL,
  `expired_date_sbujk` varchar(50) NOT NULL,
  `alamat_pt` text NOT NULL,
  `alamat_pengurus` text NOT NULL,
  `sbujk_siujk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktivitas`
--
ALTER TABLE `aktivitas`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `aktivitas_bulanan`
--
ALTER TABLE `aktivitas_bulanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulanan`
--
ALTER TABLE `bulanan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_program_k3` (`id_program_k3`),
  ADD UNIQUE KEY `No` (`no`);

--
-- Indexes for table `closing_inspeksi`
--
ALTER TABLE `closing_inspeksi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `harian`
--
ALTER TABLE `harian`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aktivitas` (`id_aktivitas`),
  ADD UNIQUE KEY `nomer` (`nomer`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_aktivitas` (`id_aktivitas`);

--
-- Indexes for table `inspeksi`
--
ALTER TABLE `inspeksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `mingguan`
--
ALTER TABLE `mingguan`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `program_k3`
--
ALTER TABLE `program_k3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktivitas`
--
ALTER TABLE `aktivitas`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `aktivitas_bulanan`
--
ALTER TABLE `aktivitas_bulanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `bulanan`
--
ALTER TABLE `bulanan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `closing_inspeksi`
--
ALTER TABLE `closing_inspeksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `harian`
--
ALTER TABLE `harian`
  MODIFY `nomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `inspeksi`
--
ALTER TABLE `inspeksi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mingguan`
--
ALTER TABLE `mingguan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
