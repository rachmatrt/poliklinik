-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2018 at 08:51 AM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_poliklinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `no_antrian` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `poli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `nama_pasien`, `no_antrian`, `tanggal`, `poli_id`) VALUES
(1, 'dani', 1, '2018-07-06', 1),
(6, 'Noval', 1, '2018-07-21', 2),
(7, 'Noval', 1, '2018-07-21', 3),
(8, 'Rachmat', 2, '2018-07-21', 3),
(9, 'Rachmat', 3, '2018-07-21', 3),
(10, 'Rachmat', 4, '2018-07-21', 3),
(11, 'Rachmat', 5, '2018-07-21', 3),
(12, 'Rachmat', 6, '2018-07-21', 3),
(13, 'Dani', 2, '2018-07-21', 2),
(14, 'Subandi', 3, '2018-07-21', 2),
(15, 'Subandi', 4, '2018-07-21', 2),
(16, 'Subandi', 5, '2018-07-21', 2),
(17, 'Surya', 1, '2018-07-21', 1),
(18, 'Purnama', 2, '2018-07-21', 1),
(19, 'Rangsang', 1, '2018-07-22', 1),
(20, 'Rangsang', 2, '2018-07-22', 1),
(21, 'Rangsang', 3, '2018-07-22', 1),
(22, 'Rangsang', 4, '2018-07-22', 1),
(25, 'bismillah', 5, '2018-07-22', 1),
(26, 'Bismillah', 6, '2018-07-22', 1),
(27, 'Kemenagan', 7, '2018-07-22', 1),
(28, 'Ahamdulillah Tidur', 1, '2018-07-22', 3),
(29, 'Tidur', 8, '2018-07-22', 1),
(30, 'Brian', 9, '2018-07-22', 1),
(31, 'Pujianto', 1, '2018-07-22', 2),
(32, 'Rachmat', 1, '2018-07-23', 1),
(33, 'Boruto', 1, '2018-07-23', 2),
(34, 'Zulfikar', 1, '2018-07-23', 3),
(35, 'RT', 2, '2018-07-23', 3),
(36, 'RT', 3, '2018-07-23', 3),
(37, 'RT', 4, '2018-07-23', 3),
(38, 'RT', 5, '2018-07-23', 3),
(39, 'rachmat', 2, '2018-07-23', 2),
(40, '', 1, '2018-07-23', 0),
(41, '', 2, '2018-07-23', 0),
(42, 'Rachmat', 1, '2018-07-24', 3),
(43, 'Rachmat', 1, '2018-07-24', 2),
(44, 'asdasd', 1, '2018-07-24', 1),
(45, '', 1, '2018-07-24', 0),
(46, 'kkk', 2, '2018-07-24', 0),
(47, 'asdasd', 3, '2018-07-24', 0),
(48, 'aaa', 2, '2018-07-24', 1),
(49, 'dani', 3, '2018-07-24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kepuasan_pasien`
--

CREATE TABLE `kepuasan_pasien` (
  `id` int(11) NOT NULL,
  `antrian_id` int(11) NOT NULL,
  `nilai` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama_obat`, `harga`, `deskripsi`, `stok`) VALUES
(1, 'Antangin', 2500, 'Obat Masuk Angin ', 10),
(2, 'Herosin', 10000, 'Obat Gatal - Gatal', 10),
(4, 'Ultraflu', 2000, 'Obat Batuk dan Flu ', 20),
(5, 'Decolsin', 3000, 'Obat Batuk dan Flu ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `obat_pasien`
--

CREATE TABLE `obat_pasien` (
  `id` int(11) NOT NULL,
  `obat_id` int(11) NOT NULL,
  `antrian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `antrian_id` int(11) NOT NULL,
  `total_bayar` int(20) NOT NULL,
  `diterima` int(20) NOT NULL,
  `kembalian` int(20) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `antrian_id`, `total_bayar`, `diterima`, `kembalian`, `tanggal`) VALUES
(1, 49, 500, 700, 200, '2018-07-24 21:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE `pemeriksaan` (
  `id` int(11) NOT NULL,
  `tindakan_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `antrian_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`id`, `tindakan_id`, `dokter_id`, `antrian_id`) VALUES
(1, 1, 6, 42),
(2, 1, 6, 43),
(3, 1, 6, 44),
(4, 1, 0, 0),
(5, 1, 6, 43),
(6, 2, 6, 43),
(7, 3, 6, 49),
(8, 2, 0, 49);

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `biaya_poli` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id`, `nama_poli`, `biaya_poli`) VALUES
(1, 'Gigi', 50000),
(2, 'Mata', 50000),
(3, 'Umum', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `poli_tindakan`
--

CREATE TABLE `poli_tindakan` (
  `id` int(11) NOT NULL,
  `nama_tindakan` varchar(100) NOT NULL,
  `biaya_tindakan` int(20) NOT NULL,
  `poli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poli_tindakan`
--

INSERT INTO `poli_tindakan` (`id`, `nama_tindakan`, `biaya_tindakan`, `poli_id`) VALUES
(1, 'Memriksa Tenggorokan', 100, 3),
(2, ' Memeriksa Mata', 200, 2),
(3, 'Suntik', 300, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `token` text,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `alamat`, `role`, `token`, `created_at`, `updated_at`) VALUES
(6, 'ZulfikarUsername', '   Zulfikar123   ', 'Zulfikar, Sp.M', 'Jl Kedangan 16A No 27 Surabaya', 'dokter', '', '2018-07-20 06:07:10', '2018-07-21 00:07:42'),
(7, 'Suyana', 'Suayan123', 'Suyana', 'Jl Diponegoro', 'dokter', '', '2018-07-21 11:07:24', '2018-07-21 04:07:24'),
(8, 'Suryana', 'suryana123', 'Suryana', 'Jl Kedangan 16A No 28 Surabaya', 'dokter', '', '2018-07-22 09:07:34', '2018-07-22 02:07:29'),
(9, 'Bagio', 'Bagio123', 'Bagio', 'Jl Kedangan 16A No 30 Surabaya', 'dokter', '', '2018-07-22 09:07:57', '2018-07-22 02:07:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obat_pasien`
--
ALTER TABLE `obat_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poli_tindakan`
--
ALTER TABLE `poli_tindakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `obat_pasien`
--
ALTER TABLE `obat_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pemeriksaan`
--
ALTER TABLE `pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `poli_tindakan`
--
ALTER TABLE `poli_tindakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
