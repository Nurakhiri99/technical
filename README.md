-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jun 2020 pada 09.42
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kontak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `telepon`
--

CREATE TABLE `telepon` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(13) NOT NULL,
  `is_married` varchar(13) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `telepon`
--

INSERT INTO `telepon` (`id`, `name`, `email`, `password`, `gender`, `is_married`, `address`) VALUES
(1, 'aisyah', 'aisyah@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'cewek', 'belum nikah', 'Semarang'),
(2, 'ainun', 'ainun@gmail.com', '41a5898f9d02092c1e32d02e8d74cfe77a2f2760', 'cewek', 'belum nikah', 'cirebon'),
(3, 'ainun', 'ainun@gmail.com', '41a5898f9d02092c1e32d02e8d74cfe77a2f2760', 'cewek', 'belum nikah', 'cirebon'),
(4, 'nur', 'nur@gmail.com', '41a5898f9d02092c1e32d02e8d74cfe77a2f2760', 'cewek', 'belum nikah', 'cirebon');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `telepon`
--
ALTER TABLE `telepon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
