-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08 Sep 2019 pada 18.06
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `erporate`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `karyawan_id` int(11) NOT NULL,
  `karyawan_nama` varchar(128) NOT NULL,
  `jekel` enum('Pria','Wanita') NOT NULL,
  `jabatan` enum('Programmer','Analisis','Android Dev','Bisnis Develop') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`karyawan_id`, `karyawan_nama`, `jekel`, `jabatan`, `no_hp`, `alamat`) VALUES
(1, 'Ahmad', 'Pria', 'Programmer', '085641345581', 'Jalan 1'),
(2, 'Lutfi', 'Pria', 'Analisis', '087812345678', 'Jalan 2'),
(3, 'Sidiq', 'Pria', 'Android Dev', '08232575112', 'Jalan 3'),
(4, 'Nadia', 'Wanita', 'Bisnis Develop', '085747556009', 'Jalan 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kehadiran`
--

CREATE TABLE IF NOT EXISTS `tb_kehadiran` (
  `kehadiran_id` int(11) NOT NULL,
  `karyawan_id` int(11) NOT NULL,
  `tgl_kehadiran` date NOT NULL,
  `jam_datang` time NOT NULL,
  `jam_pulang` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kehadiran`
--

INSERT INTO `tb_kehadiran` (`kehadiran_id`, `karyawan_id`, `tgl_kehadiran`, `jam_datang`, `jam_pulang`) VALUES
(1, 1, '2018-02-19', '07:30:00', '16:00:00'),
(2, 1, '2018-02-20', '08:00:00', '16:30:00'),
(3, 4, '2018-02-19', '07:50:00', '17:00:00'),
(4, 2, '2018-02-19', '08:10:00', '17:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`karyawan_id`);

--
-- Indexes for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD PRIMARY KEY (`kehadiran_id`),
  ADD KEY `karyawan_id` (`karyawan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `karyawan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  MODIFY `kehadiran_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kehadiran`
--
ALTER TABLE `tb_kehadiran`
  ADD CONSTRAINT `tb_kehadiran_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `tb_karyawan` (`karyawan_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
