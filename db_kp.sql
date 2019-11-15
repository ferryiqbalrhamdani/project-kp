-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2019 pada 01.19
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jenis_barang` varchar(128) NOT NULL,
  `merk` varchar(128) NOT NULL,
  `sn` varchar(128) NOT NULL,
  `mac` varchar(128) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `id_barang`, `jenis_barang`, `merk`, `sn`, `mac`, `jumlah`, `status`, `is_active`, `date_created`) VALUES
(3, 1, 'AP', 'Huawei', 'FGL1705S6HX', 'B0FAEB3D5807', 0, 'Ready', 1, 1571916883),
(4, 1, 'AP', 'Cisco', 'KWC22480BKV', '7018A7C62E08', 0, 'Ready', 1, 1571917060),
(5, 1, 'AP', 'Huawei', 'FGL1804S896', '18E72811511B', 0, 'Ready', 1, 1571930851),
(6, 1, 'AP', 'Huawei', 'FGL1813S0EN', '7426AC38B8D4', 0, 'Rusak', 1, 1571930884),
(7, 1, 'AP', 'Cisco', 'KWC2133014E', 'A0F849E23C40', 0, 'Ready', 1, 1572189284),
(8, 1, 'AP', 'Huawei', 'FGL1652S71G', '4403A78B0575', 0, 'Rusak', 1, 1572588505),
(9, 1, 'AP', 'Huawei', 'FGL1642S3LC', 'E4D3F11B3260', 0, 'Ready', 1, 1572588660),
(10, 1, 'AP', 'Huawei', 'FGL1804S6NM', '18E72835CEDE', 0, 'Ready', 1, 1572588676),
(11, 1, 'AP', 'Huawei', 'FGL1721X2P4', '6C416AB5BE53', 0, 'Ready', 1, 1572588692),
(12, 1, 'AP', 'Huawei', 'FGL1708S7VY', 'B0FAEB3D660A', 0, 'Ready', 1, 1572588927),
(16, 1, 'AP', 'Huawei', 'FGL1705S3YJ', '0006F66BF5B1', 0, 'Rusak', 1, 1572876281),
(17, 2, 'Breket', '', '', '', 12, 'Ready', 1, 1572927991),
(22, 2, 'Breket', '', '', '', 7, 'Ready', 1, 1572929295),
(24, 3, 'POE', 'Huawei', 'FGL1708SFFF', '', 0, 'Ready', 1, 1573121909);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(128) NOT NULL,
  `warna` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_barang`
--

INSERT INTO `jenis_barang` (`id`, `nama_barang`, `warna`, `date_created`) VALUES
(1, 'AP', 'primary', 1573123273),
(2, 'POE', 'info', 1573123285),
(3, 'Router', 'danger', 1573123292),
(4, 'Breket', 'success', 1573123302);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merk_barang`
--

CREATE TABLE `merk_barang` (
  `id` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_merk` varchar(128) NOT NULL,
  `jenis_barang` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merk_barang`
--

INSERT INTO `merk_barang` (`id`, `id_barang`, `nama_merk`, `jenis_barang`, `date_created`) VALUES
(3, 1, 'Huawei', 'AP', 1571839347),
(4, 1, 'Cisco', 'AP', 1571839368),
(6, 3, 'Huawei', 'POE', 1572597872),
(7, 5, 'Cisco', 'Router', 1572597908),
(9, 5, 'Huawei', 'Router', 1573121661);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `telp` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nip`, `nama`, `email`, `tgl_lahir`, `jenis_kelamin`, `telp`, `alamat`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(2, 'P003', 'User', 'user@gmail.com', '1998-11-01', 'Perempuan', '08213456789', 'Jl. Semarang Indah', 'default.jpg', '$2y$10$iC7.yPtr4egDOTk5qnDz4eYnGf4qx7FpvzTTBdDd5kFgqdaJiYhue', 3, 1, 1571421541),
(3, 'P002', 'Manager', 'manager@gmail.com', '1995-04-19', 'Laki-laki', '083123456789', 'Jl. Semarang Indah', 'default.jpg', '$2y$10$PqZhpNYVD.xleZRk7Wj7puMryUXgGpmd0ThkjsNY9M5SGctiyHhJG', 2, 1, 1571422197),
(4, 'P004', 'Ferry Iqbal Rhamdani', 'rhamdani128@gmail.com', '1997-12-28', 'Laki-laki', '081323456789', 'Jl. Semarang Indah', 'default.jpg', '$2y$10$mihZepODB5uK39HhoPhuC.dEnxbfyOiZDUJTJ7DQgzPgAAtbcCYVK', 3, 0, 1572599081),
(5, 'P001', 'Admin', 'admin@admin.com', '1997-06-11', 'Laki-laki', '08764532123', 'Jl. Semarang Indah', 'default.jpg', '$2y$10$juM2wy.UyxwCMumgqvB03edhTAtWVMBx9xCzcaZdSu.oLndEU7wVG', 1, 1, 1572870502);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(6, 2, 1),
(7, 2, 3),
(8, 2, 4),
(10, 3, 1),
(11, 3, 3),
(13, 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Dashboard'),
(2, 'Administrator'),
(3, 'User'),
(4, 'Barang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'My Profile', 'user/profile', 'fas fa-fw fa-user', 1),
(4, 2, 'Data User', 'admin/users', 'fas fa-fw fa-folder', 1),
(5, 4, 'Daftar Barang', 'barang', 'fas fa-fw fa-folder', 1),
(6, 4, 'Tambah Barang', 'barang/tambah', 'fas fa-fw fa-folder', 1),
(7, 2, 'Jenis Barang', 'barang/jenis_barang', 'fas fa-fw fa-folder', 1),
(8, 2, 'Merk Barang', 'barang/merk_barang', 'fas fa-fw fa-folder', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `merk_barang`
--
ALTER TABLE `merk_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
