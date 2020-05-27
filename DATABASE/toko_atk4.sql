-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2020 pada 05.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_atk4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_atk`
--

CREATE TABLE `tbl_atk` (
  `id_atk` int(10) NOT NULL,
  `id_category` varchar(25) NOT NULL,
  `nama_atk` text NOT NULL,
  `gambar` longtext NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_atk`
--

INSERT INTO `tbl_atk` (`id_atk`, `id_category`, `nama_atk`, `gambar`, `deskripsi`, `stok`, `tanggal`) VALUES
(6, '3', 'Buku', 'buku.png', 'ini adalah buku, ya tau sendiri lanh fungsinya buat apa wkwkwk :v', 0, '2019-05-17 21:58:38'),
(9, '1', 'balpoint', 'balpoin.jpg', 'ini adalah balpoint, sama sajang dengan pulpen.									', 0, '2019-05-19 22:44:29'),
(10, '5', 'Kalkulator', 'kalkulator.jpg', 'Ini adalah Kalkulator fungsinya untuk menghitung.										', 0, '2019-05-19 22:50:07'),
(11, '5', 'paper clips', 'paper_clips.jpg', 'ini buat menjepit kertas											', 0, '2019-05-20 22:57:46'),
(13, '4', 'Stop Map', 'stopmap.jpg', 'ini adalah map, map biasa.								', 0, '2019-05-26 19:46:56'),
(14, '2', 'Kertas A4', 'a4.jpg', 'Kertas A4 1 Rim								', 0, '2019-05-26 19:47:42'),
(15, '4', 'Map Business File', 'mapb.jpg', ' untuk menyimpan kertas								', 0, '2019-05-26 19:49:19'),
(16, '2', 'contoh kertas', '1.jpg', '	ini adalah contoh kertas									', 0, '2019-05-26 20:31:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(2) NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `category_name`) VALUES
(1, 'Alat Tulis'),
(2, 'Kertas'),
(3, 'Buku'),
(4, 'File Organizer'),
(5, 'Peralatan Kantor Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tamu`
--

CREATE TABLE `tbl_tamu` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(50) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tamu`
--

INSERT INTO `tbl_tamu` (`nama`, `email`, `website`, `komentar`) VALUES
('satia adhi', 'satiaaadhi@roketmail.com', 'satiaadi', 'tesss'),
('satia adhi', 'satiaadi13@yahoo.com', 'satiaad', 'tesss'),
('satia adhi', 'satiaadi13@yahoo.com', 'satiaad', 'tesss'),
('satia', 'satiaeaeaea', 'tess', 'sdaasdassad'),
('asd', 'sadas', 'sadasd', 'sadasd'),
('asd', 'sadas', 'sadasd', 'sadasd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`username`, `password`) VALUES
('admin', 'admin'),
('admin2', 'admin2'),
('satia', '$2y$10$i.9OQGVhTIf4uZrpBb'),
('tes1', '$2y$10$r8EYvIfyFMFbNl8QcO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_atk`
--
ALTER TABLE `tbl_atk`
  ADD PRIMARY KEY (`id_atk`);

--
-- Indeks untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_atk`
--
ALTER TABLE `tbl_atk`
  MODIFY `id_atk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
