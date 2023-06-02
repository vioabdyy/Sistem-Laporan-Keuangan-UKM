-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 07.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pbl6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_ukm`
--

CREATE TABLE `akun_ukm` (
  `id_ukm` int(11) NOT NULL,
  `nomor_ukm` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `nama_ukm` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_ukm`
--

INSERT INTO `akun_ukm` (`id_ukm`, `nomor_ukm`, `username`, `password`, `nama_ukm`, `alamat`, `nohp`, `email`, `level`) VALUES
(2, 2, 'widi', 'widi', 'widi', 'barelang', '089682922897', 'hadi12@gmail.com', 'user'),
(4, 1, 'abdi', 'abdi', 'abdilah', 'BENGKONG SARMEN RAYAa', '089682922897', 'jiwanaja@gmail.com', 'user'),
(6, 0, 'admin', 'admin', NULL, NULL, '', NULL, 'admin'),
(7, 3, 'kira', 'kira', 'kira', 'bengkong sulawesi', '0438438', 'kira@gmail.com', 'user'),
(8, 4, 'aulia', 'aulia', 'aulia', 'bengkong', '08213344312', 'jiwanaja@gmail.com', 'user'),
(9, 5, 'cece', 'cece', 'cece', 'tiban', '089682922897', 'cupidmeong12@gmail.com', 'user'),
(10, 6, 'admin6', 'admin6', 'admin6', 'bengkong sulawesi', '089682922897', 'cece@gmail.com', 'user'),
(11, 7, 'admin7', 'admin7', 'admin7', 'bengkong sulawesi', '089682922897', 'admin@gmail.com', 'user'),
(12, 8, 'admin8', 'admin8', 'admin8', 'sarmen raya', '089682922897', 'jiwanaja@gmail.com', 'user'),
(13, 9, 'admin9', 'admin9', 'admin9', 'BENGKONG SARMEN RAYAa', '089682922897', 'jiwanaja@gmail.com', 'user'),
(14, 10, 'admin10', 'admin10', 'admin10', 'sarmen raya', '089682922897', 'jiwanaja@gmail.com', 'user'),
(15, 11, 'admin11', 'admin11', 'admin11', 'sarmen raya', '089682922897', 'jiwanaja@gmail.com', 'user'),
(16, 12, 'admin12', 'admin12', 'admin12', 'sarmen raya', '089682922897', 'jiwanaja@gmail.com', 'user'),
(17, 13, 'admin13', 'admin13', 'admi13', 'Bengkong Sarmen', '089682922897', 'jiwanaja@gmail.com', 'user'),
(19, 2, 'bagas', 'bagas', 'bagas', 'bengkong', '089682922897', 'jiwanaja@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modal`
--

CREATE TABLE `modal` (
  `id_modal` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `modal`
--

INSERT INTO `modal` (`id_modal`, `nilai`, `id_ukm`) VALUES
(5, 18, 2),
(6, 1000000, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemasukan`
--

INSERT INTO `pemasukan` (`id_pemasukan`, `ket`, `nilai`, `tanggal`, `id_ukm`) VALUES
(11, 'beli sabun n', 70000, '2022-12-01', 2),
(12, 'makan malam', 86, '2022-12-31', 2),
(13, 'pembelian meja', 1000000, '2022-09-01', 4),
(14, 'pembelian minyak', 5000, '2022-10-19', 2),
(21, 'pembelian leptop', 1000000, '2022-12-02', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_ukm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id_pengeluaran`, `ket`, `nilai`, `tanggal`, `id_ukm`) VALUES
(3, ' ban motor baru', 9000, '2020-10-10', 4),
(4, 'makan siang', 200000, '2022-12-01', 2),
(5, 'gaji bulanan', 100, '2022-12-31', 2),
(6, 'perbaikan meja', 100000, '2022-09-05', 4),
(12, 'gaji hariann', 50000, '2022-12-31', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `akun_ukm`
--
ALTER TABLE `akun_ukm`
  ADD PRIMARY KEY (`id_ukm`);

--
-- Indeks untuk tabel `modal`
--
ALTER TABLE `modal`
  ADD PRIMARY KEY (`id_modal`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- Indeks untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`),
  ADD KEY `id_ukm` (`id_ukm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `akun_ukm`
--
ALTER TABLE `akun_ukm`
  MODIFY `id_ukm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `modal`
--
ALTER TABLE `modal`
  MODIFY `id_modal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `modal`
--
ALTER TABLE `modal`
  ADD CONSTRAINT `modal_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `akun_ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD CONSTRAINT `pemasukan_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `akun_ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD CONSTRAINT `pengeluaran_ibfk_1` FOREIGN KEY (`id_ukm`) REFERENCES `akun_ukm` (`id_ukm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
