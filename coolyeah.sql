-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2021 pada 09.41
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
-- Database: `coolyeah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(5) NOT NULL,
  `kode_pengajar` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `kode_pengajar`, `nama_matakuliah`) VALUES
('CYB', 'PSA', 'Keamanan Siber'),
('DAP', 'IWY', 'Dasar Algoritma Pemrograman'),
('ITG', 'PSA', 'Integral'),
('MPR', 'IWY', 'Manajemen Proyek'),
('SPT', 'PSA', 'Sistem Paralel dan Terdistribusi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `kode_materi` varchar(5) NOT NULL,
  `kode_matakuliah` varchar(255) NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `file_materi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`kode_materi`, `kode_matakuliah`, `nama_materi`, `file_materi`) VALUES
('CYB-2', 'CYB', 'Networking', '12__Networking_and_communication.pdf'),
('DAP-1', 'DAP', 'Conditional', '2021-1_test_CLO_12.docx'),
('DAP-2', 'DAP', 'Looping', 'COVER.docx'),
('DAP-3', 'DAP', 'List dan Array', '7-000036-01p_INF_Broto_50-60.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelajar`
--

CREATE TABLE `pelajar` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelajar`
--

INSERT INTO `pelajar` (`nim`, `nama`, `jurusan`, `email`, `password`) VALUES
('1301180187', 'Nur Fuad Azizi', 'Informatika', 'fuadazizi@student.telkomuniversity.ac.id', '12345'),
('1301184200', 'Hafidz Lazuardi', 'Informatika', 'hafidz@student.telkomuniversity.ac.id', '12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `kode_pengajar` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`kode_pengajar`, `nama`, `email`, `password`) VALUES
('IWY', 'Indra Wahyudi', 'indra@telkomuniversity.ac.id', '12345'),
('PSA', 'Priyoga Sugeng A', 'priyogaaditya@telkomuniversity.ac.id', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`),
  ADD KEY `idx_pengajar` (`kode_pengajar`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`kode_materi`),
  ADD KEY `idx_matkul` (`kode_matakuliah`),
  ADD KEY `idx_matakuliah` (`kode_matakuliah`);

--
-- Indeks untuk tabel `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`kode_pengajar`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`kode_pengajar`) REFERENCES `pengajar` (`kode_pengajar`);

--
-- Ketidakleluasaan untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `materi_ibfk_1` FOREIGN KEY (`kode_matakuliah`) REFERENCES `matakuliah` (`kode_matakuliah`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
