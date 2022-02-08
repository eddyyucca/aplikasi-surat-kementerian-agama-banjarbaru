-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2022 pada 16.29
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `bidang` varchar(11) NOT NULL,
  `jabatan` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `level`, `bidang`, `jabatan`, `nama`) VALUES
(1, 'admin666', 'fae0b27c451c728867a567e8c1bb4e53', 'admin', 'tes', 'tes2', 'tes3'),
(3, '123', '202cb962ac59075b964b07152d234b70', 'user', 'tes', 'tes2', 'tes3'),
(4, 'nadi', 'a6d91358169c3540346213cbcb439322', 'user', 'Pengadaan', 'Kepala', 'nadi'),
(5, 'eddy', '5aa8fed9741d33c63868a87f1af05ab7', 'user', 'Pengadaan', 'Kepala', 'Eddy Adha Saputra');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `nama_disposisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`id_disposisi`, `nama_disposisi`) VALUES
(1, 'ESDM 2'),
(3, 'KEPEGAWAIAN'),
(4, 'uji 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_izin`
--

CREATE TABLE `surat_izin` (
  `id_surat_izin` int(11) NOT NULL,
  `keperluan` varchar(100) NOT NULL,
  `dari_tanggal` varchar(50) NOT NULL,
  `sampai_tanggal` varchar(50) NOT NULL,
  `akun_izin` varchar(11) NOT NULL,
  `bulan_si` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_izin`
--

INSERT INTO `surat_izin` (`id_surat_izin`, `keperluan`, `dari_tanggal`, `sampai_tanggal`, `akun_izin`, `bulan_si`) VALUES
(1, 'Cuti tahunan', '2022-02-08', '2022-02-09', '1', '02'),
(3, 'Cuti tahunan', '2022-03-08', '2022-03-09', '1', '03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat_keluar` int(15) NOT NULL,
  `tanggal_surat` varchar(20) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `nomor_surat` varchar(255) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  `file_surat` text NOT NULL,
  `bulan_skeluar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat_keluar`, `tanggal_surat`, `tujuan_surat`, `nomor_surat`, `perihal`, `file_surat`, `bulan_skeluar`) VALUES
(1, '2021-05-24', 'Surabaya', '123/2021-SRB', 'Terima Kerjasama', '2111NA7796.pdf', '05'),
(2, '2021-05-24', 'Surabaya', '123/2021-jkt', 'Persetujuan kerjasama', '2111NA7796.pdf', '03'),
(3, '2021-05-26', 'Surabaya', '123/2021-jkt-90', 'Persetujuan Kerjasam', '2111NA7796.pdf', '01'),
(4, '2022-02-08', 'sasa', 'mag/123/22/4', 'as', '2111NA7796.pdf', '02'),
(5, '2022-02-07', 'aaaa', 'mag/123/22/5', 'aaaa', '2111NA7796.pdf', '02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_s_masuk` varchar(50) NOT NULL,
  `tgl_t_sm` varchar(50) NOT NULL,
  `asal_surat_masuk` varchar(100) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `file_surat` text NOT NULL,
  `disposisi` varchar(20) NOT NULL,
  `bulan_smasuk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat_masuk`, `nama_surat`, `no_surat`, `tgl_s_masuk`, `tgl_t_sm`, `asal_surat_masuk`, `perihal`, `file_surat`, `disposisi`, `bulan_smasuk`) VALUES
(1, 'asassaas 2', 'sasa', '2022-12-12', '2022-12-12', 'a', 'sadsa\"', '', '1', '02'),
(3, 'qqq', 'qqq', '2022-02-08', '2022-02-08', 'qqqq', 'qqq', '', '1', '2-08'),
(4, 'www', 'w', '2022-02-18', '2022-02-18', 'w', 'w', '', '1', '-18'),
(5, 'pp', 'p', '2022-02-09', '2022-02-25', 'p', 'p', '', '3', '02'),
(6, 'asas', 'asas', '2022-10-08', '2022-10-22', 'sasa', 'sa', '', '1', '10'),
(7, 'zzzz', 'zzzz', '2022-02-08', '2022-02-08', 'zzzz', 'zzz', '2111NA7796.pdf', '1', '02'),
(8, 'tessss', 'tttt', '2022-02-08', '2022-02-10', 'tttt', 'tttt', 'ARTIKEL_EDDY_ADA_SAPUTRA.pdf', '1', '02');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indeks untuk tabel `surat_izin`
--
ALTER TABLE `surat_izin`
  ADD PRIMARY KEY (`id_surat_izin`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `surat_izin`
--
ALTER TABLE `surat_izin`
  MODIFY `id_surat_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat_keluar` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
