-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Okt 2017 pada 07.42
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
 
--
-- Database: `mahasiswa`
--
 
-- --------------------------------------------------------
 
--
-- Struktur dari tabel `mhs`
--
 
CREATE TABLE `mhs` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
 
--
-- Dumping data untuk tabel `mhs`
--
 
INSERT INTO `mhs` (`id`, `nama`) VALUES
(1, 'Jamaludin'),
(2, 'Sanusi'),
(3, 'Muhammad Haikal'),
(4, 'Roki sinamuna'),
(5, 'Diki Alfarabi Hadi'),
(6, 'Samsul Bahri'),
(7, 'Khairul Bahri'),
(8, 'Samsul Arifin'),
(9, 'Sumantini'),
(10, 'Aisyah Nur Hikmah');
 
--
-- Indexes for dumped tables
--
 
--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`id`);
 
--
-- AUTO_INCREMENT for dumped tables
--
 
--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;