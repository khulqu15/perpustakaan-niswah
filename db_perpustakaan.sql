-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 19 Mei 2020 pada 13.46
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nim` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat_lahir` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('l','p') NOT NULL,
  `keahlian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `keahlian`) VALUES
(11113, 'Rara', 'Jakarta', '2020-05-13', 'p', ''),
(11114, 'Alexander', 'Jakarta', '2020-05-22', 'l', 'Rpl'),
(11115, 'Naura', 'Bandung', '2020-05-05', 'p', 'mm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(150) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(20) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `jumlah_buku` int(5) NOT NULL,
  `lokasi` enum('rak1','rak2','rak3') NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(2, 'Bahasa Jawa', 'JAINUDIN', 'Gramedia', '2007', '678290', 200, 'rak1', '2020-04-08'),
(5, 'bahasa indonesia', 'aaaaa', 'Gramedia', '1991', '234-8778', 200, 'rak1', '2020-05-16'),
(6, 'Pemograman Web', 'aa', 'Gramedia', '2010', '121', 114, 'rak1', '2020-05-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tgl_pinjam` varchar(30) NOT NULL,
  `tgl_kembali` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `judul`, `nim`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(30, 'Pemograman Web', '11112', 'Ricko', '01-05-2020', '09-05-2020', 'Pinjam'),
(31, 'Bahasa Indonesia', '11113', 'Keyla', '10-05-2020', '20-05-2020', 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(3, 'admin', 'admin', 'admin', 'admin', '1.png'),
(5, 'user', 'user', 'user', 'user', '2.png'),
(6, 'user2', 'user2', 'user2', 'user2', '8.png'),
(7, 'admin2', 'admin2', 'admin2', 'admin2', '7.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  MODIFY `nim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11116;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
