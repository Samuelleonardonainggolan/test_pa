-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 08 Apr 2024 pada 16.41
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pa1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `alumni_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `informasi_berita` varchar(100) NOT NULL,
  `informasi_alumni` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasekolah`
--

CREATE TABLE `datasekolah` (
  `Npsn` int(11) NOT NULL,
  `sk_pendirian_sekolah` varchar(50) NOT NULL,
  `tanggal_sk_izin_operasional` date NOT NULL,
  `tanggal_sk_pendirian` date NOT NULL,
  `sk_izin_operasional` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fasilitas_id` int(11) NOT NULL,
  `kelas` text NOT NULL,
  `gudang` text NOT NULL,
  `perpustakaan` text NOT NULL,
  `ruangpimpinan` text NOT NULL,
  `toilet` text NOT NULL,
  `ruangguru` text NOT NULL,
  `ruangibadah` text NOT NULL,
  `laboratorium` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepalasekolah`
--

CREATE TABLE `kepalasekolah` (
  `kepalasekolah_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang`
--

CREATE TABLE `tentang` (
  `tentang_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ketuayayasan` text NOT NULL,
  `kepsek` text NOT NULL,
  `visimisi` varchar(100) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumni_id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `datasekolah`
--
ALTER TABLE `datasekolah`
  ADD PRIMARY KEY (`Npsn`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fasilitas_id`);

--
-- Indeks untuk tabel `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD PRIMARY KEY (`kepalasekolah_id`);

--
-- Indeks untuk tabel `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`tentang_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fasilitas_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  MODIFY `kepalasekolah_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tentang`
--
ALTER TABLE `tentang`
  MODIFY `tentang_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kepalasekolah`
--
ALTER TABLE `kepalasekolah`
  ADD CONSTRAINT `kepalasekolah_ibfk_1` FOREIGN KEY (`kepalasekolah_id`) REFERENCES `alumni` (`alumni_id`),
  ADD CONSTRAINT `kepalasekolah_ibfk_2` FOREIGN KEY (`kepalasekolah_id`) REFERENCES `berita` (`berita_id`),
  ADD CONSTRAINT `kepalasekolah_ibfk_3` FOREIGN KEY (`kepalasekolah_id`) REFERENCES `datasekolah` (`Npsn`),
  ADD CONSTRAINT `kepalasekolah_ibfk_4` FOREIGN KEY (`kepalasekolah_id`) REFERENCES `fasilitas` (`fasilitas_id`),
  ADD CONSTRAINT `kepalasekolah_ibfk_5` FOREIGN KEY (`kepalasekolah_id`) REFERENCES `tentang` (`tentang_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
