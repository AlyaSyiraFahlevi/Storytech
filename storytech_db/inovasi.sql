-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 29 Apr 2025 pada 05.28
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storytech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `inovasi`
--

CREATE TABLE `inovasi` (
  `id` int(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `tagline` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `subjudul` varchar(255) NOT NULL,
  `subkonten` varchar(255) NOT NULL,
  `judul_info` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inovasi`
--

INSERT INTO `inovasi` (`id`, `judul`, `slug`, `tagline`, `gambar`, `subjudul`, `subkonten`, `judul_info`, `deskripsi`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'Awal Mula Internet', 'awal-mula-internet', 'Cerita tentang bagaimana internet dimulai', 'hero-bg.jpg', 'Lahirnya Era Digital', 'Internet mengubah dunia dengan cara yang tak terbayangkan sebelumnya. Dari sistem komunikasi hingga ekonomi digital.', 'Sejarah Internet', 'Internet pertama kali ditemukan pada tahun 1960-an oleh ilmuwan komputer. Internet berkembang pesat, membawa revolusi digital dan menghubungkan dunia.', 'FZ8S9ug5DsQ', '2025-04-28', '2025-04-28'),
(2, 'Kecerdasan Buatan (AI)', 'kecerdasan-buatan', 'Bagaimana kecerdasan buatan mengubah dunia kita', 'hero-bg.jpg', 'Revolusi AI', 'Kecerdasan buatan kini menjadi bagian penting dari kehidupan kita, dengan aplikasi yang meluas di banyak sektor.', 'AI dalam Kehidupan Sehari-hari', 'Kecerdasan buatan (AI) berkembang pesat dalam beberapa dekade terakhir, membawa transformasi besar di sektor kesehatan, pendidikan, dan bisnis.', 'FZ8S9ug5DsQ', '2025-04-28', '2025-04-28'),
(3, 'Teknologi 5G', 'teknologi-5g', 'Apa itu teknologi 5G dan bagaimana mengubah cara kita berkomunikasi', 'hero-bg.jpg', '5G: Masa Depan Koneksi', 'Teknologi 5G akan membawa kecepatan internet super cepat dan membuka kemungkinan baru dalam konektivitas global.', '5G dan Kecepatan Koneksi', '5G akan menjadi game-changer dalam dunia komunikasi, memungkinkan koneksi internet dengan latensi rendah dan kecepatan transfer data yang luar biasa.', 'FZ8S9ug5DsQ', '2025-04-28', '2025-04-28'),
(4, 'Inovasi 4', 'inovasi-4', 'Tagline Inovasi 4', 'hero-bg.jpg', 'Subjudul 4', 'Subkonten 4', 'Judul Info 4', 'Deskripsi inovasi 4', 'dQw4w9WgXcQ', '2025-04-29', '2025-04-29'),
(5, 'qfqef', 'qfqef', 'wqefqfqef', 'default.jpg', 'fqfqfq', 'fqwwf', 'qfwfqw', 'aDFfsegwergrwgwrg', 'qwfqgqegew', '2025-04-29', '2025-04-29'),
(6, 'Inovasi 6', 'inovasi-6', 'Tagline Inovasi 6', 'hero-bg.jpg', 'Subjudul 6', 'Subkonten 6', 'Judul Info 6', 'Deskripsi inovasi 6', '3JZ_D3ELwOQ', '2025-04-29', '2025-04-29'),
(7, 'Inovasi 7', 'inovasi-7', 'Tagline Inovasi 7', 'hero-bg.jpg', 'Subjudul 7', 'Subkonten 7', 'Judul Info 7', 'Deskripsi inovasi 7', 'L_jWHffIx5E', '2025-04-29', '2025-04-29'),
(8, 'Inovasi 8', 'inovasi-8', 'Tagline Inovasi 8', 'hero-bg.jpg', 'Subjudul 8', 'Subkonten 8', 'Judul Info 8', 'Deskripsi inovasi 8', 'kJQP7kiw5Fk', '2025-04-29', '2025-04-29'),
(9, 'Inovasi 9', 'inovasi-9', 'Tagline Inovasi 9', 'hero-bg.jpg', 'Subjudul 9', 'Subkonten 9', 'Judul Info 9', 'Deskripsi inovasi 9', '2Vv-BfVoq4g', '2025-04-29', '2025-04-29'),
(10, 'Inovasi 10', 'inovasi-10', 'Tagline Inovasi 10', 'hero-bg.jpg', 'Subjudul 10', 'Subkonten 10', 'Judul Info 10', 'Deskripsi inovasi 10', 'UceaB4D0jpo', '2025-04-29', '2025-04-29'),
(11, 'Inovasi 11', 'inovasi-11', 'Tagline Inovasi 11', 'hero-bg.jpg', 'Subjudul 11', 'Subkonten 11', 'Judul Info 11', 'Deskripsi inovasi 11', 'RgKAFK5djSk', '2025-04-29', '2025-04-29'),
(12, 'Inovasi 12', 'inovasi-12', 'Tagline Inovasi 12', 'hero-bg.jpg', 'Subjudul 12', 'Subkonten 12', 'Judul Info 12', 'Deskripsi inovasi 12', 'YQHsXMglC9A', '2025-04-29', '2025-04-29'),
(13, 'Inovasi 13', 'inovasi-13', 'Tagline Inovasi 13', 'hero-bg.jpg', 'Subjudul 13', 'Subkonten 13', 'Judul Info 13', 'Deskripsi inovasi 13', 'JGwWNGJdvx8', '2025-04-29', '2025-04-29'),
(14, 'Inovasi 14', 'inovasi-14', 'Tagline Inovasi 14', 'hero-bg.jpg', 'Subjudul 14', 'Subkonten 14', 'Judul Info 14', 'Deskripsi inovasi 14', 'CevxZvSJLk8', '2025-04-29', '2025-04-29'),
(15, 'Inovasi 15', 'inovasi-15', 'Tagline Inovasi 15', 'hero-bg.jpg', 'Subjudul 15', 'Subkonten 15', 'Judul Info 15', 'Deskripsi inovasi 15', 'ktvTqknDobU', '2025-04-29', '2025-04-29'),
(16, 'Inovasi 16', 'inovasi-16', 'Tagline Inovasi 16', 'hero-bg.jpg', 'Subjudul 16', 'Subkonten 16', 'Judul Info 16', 'Deskripsi inovasi 16', 'hT_nvWreIhg', '2025-04-29', '2025-04-29'),
(17, '', 'inovasi-17', 'Tagline Inovasi 17', 'hero-bg.jpg', 'Subjudul 17', 'Subkonten 17', 'Judul Info 17', 'Deskripsi inovasi 17', 'https://www.youtube.com/watch?v=fRh_vgS2dFE', '2025-04-29', '2025-04-29'),
(18, 'Inovasi 18', 'inovasi-18', 'Tagline Inovasi 18', 'hero-bg.jpg', 'Subjudul 18', 'Subkonten 18', 'Judul Info 18', 'Deskripsi inovasi 18', 'https://www.youtube.com/watch?v=VYOjWnS4cMY', '2025-04-29', '2025-04-29'),
(19, 'Inovasi 19', 'inovasi-19', 'Tagline Inovasi 19', 'hero-bg.jpg', 'Subjudul 19', 'Subkonten 19', 'Judul Info 19', 'Deskripsi inovasi 19', 'https://www.youtube.com/watch?v=opU1urLhw50', '2025-04-29', '2025-04-29'),
(20, 'Inovasi 20', 'inovasi-20', 'Tagline Inovasi 20', 'hero-bg.jpg', 'Subjudul 20', 'Subkonten 20', 'Judul Info 20', 'Deskripsi inovasi 20', 'https://www.youtube.com/watch?v=XpqqjU7u5Yc', '2025-04-29', '2025-04-29'),
(21, 'Inovasi 21', 'inovasi-21', 'Tagline Inovasi 21', 'hero-bg.jpg', 'Subjudul 21', 'Subkonten 21', 'Judul Info 21', 'Deskripsi inovasi 21', 'https://www.youtube.com/watch?v=uelHwf8o7_U', '2025-04-29', '2025-04-29'),
(22, 'Inovasi 22', 'inovasi-22', 'Tagline Inovasi 22', 'hero-bg.jpg', 'Subjudul 22', 'Subkonten 22', 'Judul Info 22', 'Deskripsi inovasi 22', 'https://www.youtube.com/watch?v=FlsCjmMhFmw', '2025-04-29', '2025-04-29'),
(23, 'Inovasi 23', 'inovasi-23', 'Tagline Inovasi 23', 'hero-bg.jpg', 'Subjudul 23', 'Subkonten 23', 'Judul Info 23', 'Deskripsi inovasi 23', 'https://www.youtube.com/watch?v=kXYiU_JCYtU', '2025-04-29', '2025-04-29'),
(24, 'Inovasi 5', 'inovasi-5', 'Tagline Inovasi 5', 'hero-bg.jpg', 'Subjudul 5', 'Subkonten 5', 'Judul Info 5', 'Deskripsi inovasi 5', 'https://www.youtube.com/watch?v=9bZkp7q19f0', '2025-04-29', '2025-04-29'),
(25, 'Coba Terbaru', 'coba-terbaru', 'bebas', 'default.jpg', 'bebas', 'bebas', 'bebas', 'bebas', 'FZ8S9ug5DsQ', '2025-04-30', '2025-04-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `created_at`) VALUES
(4, 'admin', '$2y$10$DUP3L60MxuRkSKU/pg9WpOOj/yf1F.qYg6WOEsAHZNMmOjehukGT6', 'Admin', NULL),
(5, 'dhae', '$2y$10$Md3YyNJoEaUBCDbnqizjwexfwnOnmvupeRJQXg06bVLjIpDO5krRC', 'Andricha Dea Mitra', NULL),
(6, 'alya', '$2y$10$iRIk7dhavYW6cPZxbsogxuOJlXiKJ1aIClpoGTNmc0ZK29B8ZCQWe', 'Alya Ayira Fahlevi', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inovasi`
--
ALTER TABLE `inovasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inovasi`
--
ALTER TABLE `inovasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
