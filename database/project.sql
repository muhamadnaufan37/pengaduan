-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2022 pada 14.05
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` varchar(128) NOT NULL,
  `jenis_pengaduan` varchar(128) NOT NULL,
  `pengaduan` text NOT NULL,
  `s_pengaduan` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `id_user`, `nama`, `nik`, `jenis_pengaduan`, `pengaduan`, `s_pengaduan`, `image`, `reason`, `created_at`) VALUES
(2, 1, 'admin', '124893492374', 'LAINNYA', '&lt;span xss=removed&gt;keoasashfhowehfonnnnnnnnn&lt;/span&gt;', 2, 'success_buat_ranking.png', 'hehe', '2022-12-01 10:50:46'),
(4, 6, 'tester', '123456789', 'AKTA KELAHIRAN', '                                        Uraikan &lt;em&gt;pengaduan&lt;/em&gt; &lt;u&gt;secara&lt;/u&gt; &lt;strong&gt;detail&lt;/strong&gt;\r\n                                    ', 0, 'statistics1.png', '', '2022-06-01 11:02:55'),
(5, 10, 'Shifa', '3214065808000008', 'LAINNYA', '&lt;font xss=removed&gt;&lt;font xss=removed&gt;Tst&lt;/font&gt;&lt;/font&gt;', 0, '20220713_123242.png', '', '2022-12-01 11:34:50'),
(7, 11, 'Shifa Silfiana', '3214065808000008', 'KARTU KELUARGA', 'test', 0, 'Screenshot_(3)1.png', '', '2022-04-06 11:52:28'),
(8, 6, 'tester', '123456789', 'E-KTP', '                                        Uraikan &lt;em&gt;pengaduan&lt;/em&gt; &lt;u&gt;secara&lt;/u&gt; &lt;strong&gt;detail&lt;/strong&gt;\r\n                                    ', 0, '9f9pl8M6ajLft1.png', '', '2022-12-04 07:35:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nik` text NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `nik`, `contact`, `email`, `password`, `is_active`, `role_id`, `image`, `created_at`) VALUES
(1, 'admin', '124893492374', '324838263862', 'admin@admin.com', '$2y$10$Is/f72Uc/CWFUBx.Rt5V3uxgw84gVhe6fQDYT75zhZXvJsVcAAruS', 1, 1, 'default.jpg', '2022-11-16 04:54:14'),
(6, 'tester', '123456789', '12345678910', 'test@test.com', '$2y$10$T3/Re1KQINQSwJussb7j3OYw5wtL/2uztLXNfB4fi1jj89C0gOB5G', 1, 3, 'default.jpg', '2022-12-01 06:44:07'),
(9, 'Petugas', '32140117119900011', '32342313', 'petugas@petugas.com', '$2y$10$oA/EqBWDdeIrRqU8k8nOcuyp5tSskEsaEljwhzoxSjuLKluuhiTeW', 1, 2, 'default.jpg', '2022-12-01 10:31:28'),
(10, 'Shifa', '3214065808000008', '085703604021', 'shifasilfiana29@gmail.c', '$2y$10$FXQe3S.kYfMVHQzMVxKZsuXlrjLUkDs2Kpls7eVbz8urgVn44XOi6', 1, 3, 'default.jpg', '2022-12-01 11:27:01'),
(11, 'Shifa Silfiana', '3214065808000008', '085703604021', 'shifasilfiana29@gmail.com', '$2y$10$Dj4rd3SoaiEFyo2.06GdFOx8AnohXVCtPx4EtmjYX2jnkqKPzzWpu', 1, 3, 'default.jpg', '2022-12-01 11:44:09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
