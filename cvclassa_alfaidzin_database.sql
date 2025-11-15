-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2025 at 03:56 PM
-- Server version: 10.6.24-MariaDB
-- PHP Version: 8.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvclassa_alfaidzin_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tagline` varchar(150) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(50) DEFAULT NULL,
  `gol_darah` varchar(3) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `hobi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tagline`, `deskripsi`, `email`, `telepon`, `gol_darah`, `alamat`, `hobi`) VALUES
(1, 'Muchamad Alfaidzin', 'Understand that you have to die, but your legacy is eternal.', 'Seorang mahasiswa yang senang belajar teknologi dan berusaha mengembangkan diri setiap hari. \r\nPercaya bahwa hidup harus dijalani dengan tujuan dan karya bermakna.', 'muchamadalfaidzin@gmail.com', '0895332182249', 'B', 'Jl. Raya Karangtengah, Cibadak, Kabupaten Sukabumi', 'Membaca, Musik, Coding');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `sekolah` varchar(150) DEFAULT NULL,
  `jurusan` varchar(150) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `sekolah`, `jurusan`, `tahun_mulai`, `tahun_selesai`) VALUES
(1, 'MAN 1 Sukabumi', 'IPA', '2020', '2023'),
(2, 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int(11) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `tahun_mulai` year(4) DEFAULT NULL,
  `tahun_selesai` year(4) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `posisi`, `perusahaan`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(2, 'Website Portfolio Pribadi', 'Pribadi', '2024', NULL, 'Membangun website personal menggunakan HTML, CSS, dan PHP untuk menampilkan biodata, riwayat pendidikan, dan proyek pembelajaran.'),
(3, 'Aplikasi Android: TILAS (Thrift in Love and Stuff)', 'Proyek Tugas Akhir', '2024', '2025', 'Membuat aplikasi sederhana menggunakan Android Studio sebagai tugas akhir. Aplikasi ini dirancang untuk membantu pengguna mencari, mengelola, dan menampilkan produk thrift secara lebih praktis.'),
(4, 'Belajar Mandiri Web Development', 'Self-Learning', '2023', NULL, 'Mempelajari dasar-dasar pembuatan website melalui kursus online, tutorial, dan proyek pribadi untuk meningkatkan pemahaman tentang HTML, CSS, JavaScript, dan PHP.');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `teknologi` varchar(255) DEFAULT NULL COMMENT 'Contoh: PHP, CodeIgniter, Tailwind CSS',
  `waktu` date NOT NULL COMMENT 'Tanggal Proyek Selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `judul`, `deskripsi`, `teknologi`, `waktu`) VALUES
(1, 'Website Kamus Bahasa Inggris', 'Proyek tugas akhir mata kuliah. Mengembangkan aplikasi kamus digital berbasis web dengan fitur pencarian cepat dan penyimpanan histori kata.', 'HTML, CSS, JavaScript, PHP Native/MySQL', '2023-06-01'),
(2, 'TILAS (Thrift in Love and Stuff)', 'Aplikasi mobile/web konsep thrift store (barang bekas) dengan fitur unggulan  dan sistem lelang sederhana antar pengguna.', 'React Native/Flutter, Firebase/MongoDB', '2024-03-20'),
(3, 'Portofolio CV Web Interaktif', 'Website Portofolio pribadi untuk menampilkan biodata, riwayat pendidikan, pengalaman kerja, dan daftar kemampuan (skill) secara interaktif.', 'CodeIgniter, Bootstrap, PHP, MySQL', '2025-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `nama_skill` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `nama_skill`, `level`) VALUES
(1, 'HTML', 85),
(2, 'CSS', 80),
(3, 'PHP', 70),
(4, 'Kotlin', 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
