-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2021 pada 16.31
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pengarsipan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2021-10-04-042158', 'App\\Database\\Migrations\\Createuser', 'default', 'App', 1633321929, 1),
(2, '2021-10-04-060639', 'App\\Database\\Migrations\\Createuser', 'default', 'App', 1633327636, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `id_kategori`, `no_surat`, `tgl_surat`, `perihal`, `tujuan`, `keterangan`, `file`) VALUES
(1, 0, '2021/IV/001', '2021-09-24', 'Surat Barang Masuk', 'Logistik Barang Makanan', '', ''),
(12346, 0, '2021/VI/005', '2021-10-07', 'Surat Edaran Covid', 'Logistik', '', ''),
(12347, 0, '2021/V/002', '2021-10-13', 'Surat Rancangan Anggaran Biaya', 'Kadiv Produksi', '', 'RENCANA ANGGARAN BIAYA.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tgl_surat` varchar(255) NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `id_kategori`, `no_surat`, `tgl_surat`, `perihal`, `pengirim`, `status`, `keterangan`, `file`) VALUES
(1, 0, '2021/X/IRMA/DKM/001', '2021-10-13', 'Surat Undangan Maulid Nabi', 'Miqat Center', 'Belum Dibaca', 'Maulid Nabi', 'SURAT UNDANGAN.pdf'),
(2, 0, '2021/III/HMTRPL/001', '2021-10-13', 'Surat Undangan Masa Bimbingan', 'HMTRPL', 'Menunggu Konfirmasi', 'Undangan menghadiri pembukaan Mabim', 'SURAT UNDANGAN.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`, `salt`, `role`) VALUES
(7, 'arifin@gmail.com', 'arifin', '81e57eed8ffb6f9e67a54a12b7de2a86615cf6e8eb5ab0.37495581', '615cf6e8eb5ab0.37495581', 'admin'),
(8, 'arufin@gmail.com', 'arufin', 'ee111c1f1be4ea6a71fe9fcf77e14a93615cf783af7174.08400074', '615cf783af7174.08400074', 'user'),
(11, 'alhafizi@gmail.com', 'fizi', '3e1edd536aafba7f6e165826690ca8ca615d1e5f86b7c4.75481024', '615d1e5f86b7c4.75481024', 'admin'),
(12, 'susanti@gmail.com', 'susanti', '9af88532e1ae20f44eec86f99cba0ae9615d1fce112490.43346977', '615d1fce112490.43346977', 'admin'),
(13, 'ehsan@gmail.com', 'ehsan', '715125a665e255ecbd3afc4e0f3f7de7615d249b1b8828.83279124', '615d249b1b8828.83279124', 'user'),
(14, 'jarjitsingh@gmail.com', 'jarjit', 'b2a636d1c036ae204666fcf1a905d178615d27a15fa087.18207550', '615d27a15fa087.18207550', 'admin'),
(16, 'ijat@gmail.com', 'ijat', 'eea1a6c0b35dca50a78038c39656b6de615d8de3857538.18315254', '615d8de3857538.18315254', 'admin'),
(17, 'ismail@gmail.com', 'ismail', '5d6934dc5b395dd10f51cea73f38081b615d8e5c8d35f2.15574754', '615d8e5c8d35f2.15574754', 'user'),
(18, 'ameliaftr@gmail.com', 'ameliafitri', 'bd0715b27996047c1277787e9e7c48516161050fbb3891.21330340', '6161050fbb3891.21330340', 'admin'),
(19, 'mrosmeida@gmail.com', 'mrosmeida', 'mia12345', '', 'admin'),
(21, 'kakros@gmail.com', 'kakros', 'd8a4bfd0b81f9c29b74cc053c4de5ab66169822a542940.30822894', '6169822a542940.30822894', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12348;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
