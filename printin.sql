-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2020 pada 15.34
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `printin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `penggunaprintin`
--

CREATE TABLE `penggunaprintin` (
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penggunaprintin`
--

INSERT INTO `penggunaprintin` (`nama`, `password`, `email`, `no_hp`) VALUES
('Donny', 'password', 'donny@gmail.com', '08123456789'),
('Nicolas Neville', 'password', 'nicolas.neville@gmail.com', '08123456789'),
('Vincent Oktavian', 'password', 'vincent.oktavian@gmail.com', '08123456789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
