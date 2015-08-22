-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2015 pada 15.26
-- Versi Server: 5.6.24
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaranmvp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_asal_sekolah`
--

CREATE TABLE IF NOT EXISTS `mvp_asal_sekolah` (
  `asal_sekolah_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `asalsekolah` varchar(50) DEFAULT NULL,
  `provinsisekolah` tinyint(4) DEFAULT NULL,
  `kotakabsekolah` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_asal_sekolah`
--

INSERT INTO `mvp_asal_sekolah` (`asal_sekolah_id`, `user_id`, `asalsekolah`, `provinsisekolah`, `kotakabsekolah`, `created_at`, `updated_at`) VALUES
(3, 13, '4', 6, '4', '2015-08-01 17:55:15', '2015-08-01 17:55:15'),
(4, 13, '4', 6, '4', '2015-08-01 17:58:34', '2015-08-01 18:38:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_calon_siswa`
--

CREATE TABLE IF NOT EXISTS `mvp_calon_siswa` (
  `calon_siswa_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `nisn` char(10) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jk` enum('p','l') NOT NULL,
  `goldar` enum('a','b','ab','o') NOT NULL,
  `telprumah` varchar(20) DEFAULT NULL,
  `provinsi` tinyint(4) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `alamat` varchar(140) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `tahunkelulusan` char(9) NOT NULL,
  `no_skhun` varchar(20) NOT NULL,
  `nilai_un` float NOT NULL,
  `no_formulir` varchar(7) NOT NULL,
  `diterima` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_calon_siswa`
--

INSERT INTO `mvp_calon_siswa` (`calon_siswa_id`, `user_id`, `nisn`, `tempatlahir`, `tanggallahir`, `jk`, `goldar`, `telprumah`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `alamat`, `status`, `tahunkelulusan`, `no_skhun`, `nilai_un`, `no_formulir`, `diterima`, `created_at`, `updated_at`) VALUES
(1, 2, '12129276', 'Majalengka', '1992-12-13', 'p', 'ab', '', 1, 'Majalengka', 'Majalengka Kulon', '45459', 'faf', 1, '2000/2001', '', 0, '15001', 0, '2015-07-10 20:35:14', '2015-07-31 09:05:07'),
(2, 9, '12126606', 'bandung', '1992-08-16', 'l', 'o', '', 1, 'bandung', 'sukabungah', '14022', 'jl.pasirkaliki', 2, '2006/2007', '', 79, '15002', 0, '2015-07-11 22:04:29', '2015-08-02 08:40:13'),
(4, 10, 'ww', 'www', '1999-12-12', 'l', 'a', '(111) 111-1111', 1, '1', '1', '1', '1', 1, '2000/2001', '', 80, '15003', 1, '2015-07-12 18:03:45', '2015-08-02 11:22:12'),
(18, 13, '4', '4', '1999-09-09', 'l', 'a', '(4__) ___-____', 13, '4', '4', '4', '4', 1, '1999/2000', '44', 100, '15004', 1, '2015-08-01 17:58:34', '2015-08-02 11:22:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_cara_daftar`
--

CREATE TABLE IF NOT EXISTS `mvp_cara_daftar` (
  `cara_daftar_id` tinyint(4) NOT NULL,
  `cara_daftar_judul` varchar(100) NOT NULL,
  `cara_daftar_isi` text NOT NULL,
  `cara_daftar_dibuat` datetime NOT NULL,
  `cara_daftar_diubah` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_file_calon_siswa`
--

CREATE TABLE IF NOT EXISTS `mvp_file_calon_siswa` (
  `file_calon_siswa_id` int(11) NOT NULL,
  `file_calon_siswa_skhun_depan` varchar(255) NOT NULL,
  `file_calon_siswa_skhun_belakang` varchar(255) NOT NULL,
  `file_calon_siswa_akte` varchar(255) NOT NULL,
  `file_calon_siswa_foto` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_file_calon_siswa`
--

INSERT INTO `mvp_file_calon_siswa` (`file_calon_siswa_id`, `file_calon_siswa_skhun_depan`, `file_calon_siswa_skhun_belakang`, `file_calon_siswa_akte`, `file_calon_siswa_foto`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '11-SKHUN-DPN-harmaezza-6.jpg', '11-SKHUN-BLKG-harmaezza-8.jpg', '11-AKTE-harmaezza-5.jpg', '11-FOTO3x4-harmaezza-4.jpg', 11, '2015-07-23 16:32:43', '2015-07-23 16:43:36'),
(4, '13-SKHUN-DPN-ekaaria-RIKU-PC - C360_2014-09-08-16-20-09-123.jpg', '13-SKHUN-BLKG-ekaaria-RIKU-PC - PHOTO KELAS.jpg', '13-AKTE-ekaaria-cute-cat-praying.jpg', '13-FOTO3x4-ekaaria-cute-cat-praying.jpg', 13, '2015-08-01 18:41:21', '2015-08-01 18:41:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_info`
--

CREATE TABLE IF NOT EXISTS `mvp_info` (
  `info_id` tinyint(4) NOT NULL,
  `info_judul` varchar(12) DEFAULT NULL,
  `info_keterangan` varchar(140) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_info_detail`
--

CREATE TABLE IF NOT EXISTS `mvp_info_detail` (
  `info_detail_id` int(11) NOT NULL,
  `info_detail_judul` varchar(30) DEFAULT NULL,
  `info_detail_keterangan` varchar(140) DEFAULT NULL,
  `info_id` tinyint(4) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `mvp_konfirmasi` (
  `konfirmasi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `konfirmasi_nama_bank` varchar(25) NOT NULL,
  `konfirmasi_no_rekening` varchar(16) NOT NULL,
  `konfirmasi_pemilik_rekening` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_konfirmasi`
--

INSERT INTO `mvp_konfirmasi` (`konfirmasi_id`, `user_id`, `konfirmasi_nama_bank`, `konfirmasi_no_rekening`, `konfirmasi_pemilik_rekening`, `created_at`) VALUES
(1, 14, 'bca', '4371680068', 'Berry Firmann', '2015-08-02 02:58:53'),
(2, 14, 'bri', '111111', 'rara', '2015-08-02 03:18:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_kontak`
--

CREATE TABLE IF NOT EXISTS `mvp_kontak` (
  `kontak_id` bigint(20) NOT NULL,
  `kontak_nama` varchar(32) DEFAULT NULL,
  `kontak_email` varchar(100) DEFAULT NULL,
  `kontak_telp` varchar(14) DEFAULT NULL,
  `kontak_pesan` text,
  `kontak_balas` text,
  `kontak_status_balas` tinyint(4) NOT NULL,
  `kontak_dibuat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kontak_dibalas` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_kuota`
--

CREATE TABLE IF NOT EXISTS `mvp_kuota` (
  `kuota_id` tinyint(4) NOT NULL,
  `kuota` int(11) NOT NULL,
  `passing_grade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_kuota`
--

INSERT INTO `mvp_kuota` (`kuota_id`, `kuota`, `passing_grade`) VALUES
(1, 300, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_orangtua`
--

CREATE TABLE IF NOT EXISTS `mvp_orangtua` (
  `orangtua_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `namaayah` varchar(30) NOT NULL,
  `pendidikanayah` varchar(50) NOT NULL,
  `pekerjaanayah` varchar(20) NOT NULL,
  `instansi` varchar(30) NOT NULL,
  `penghasilanayah` varchar(5) NOT NULL,
  `alamatayah` varchar(140) NOT NULL,
  `provinsiayah` tinyint(4) NOT NULL,
  `kotaayah` varchar(20) NOT NULL,
  `kecamatanayah` varchar(20) NOT NULL,
  `kodeposayah` varchar(6) NOT NULL,
  `rtayah` tinyint(4) NOT NULL,
  `rwayah` tinyint(4) NOT NULL,
  `telprumahayah` varchar(20) DEFAULT NULL,
  `hpayah` varchar(20) NOT NULL,
  `namaibu` varchar(30) NOT NULL,
  `pendidikanibu` varchar(50) NOT NULL,
  `pekerjaanibu` varchar(20) NOT NULL,
  `penghasilanibu` varchar(5) NOT NULL,
  `alamatibu` varchar(140) NOT NULL,
  `provinsiibu` tinyint(4) NOT NULL,
  `kotaibu` varchar(20) NOT NULL,
  `kecamatanibu` varchar(20) NOT NULL,
  `kodeposibu` varchar(6) NOT NULL,
  `rtibu` tinyint(4) NOT NULL,
  `rwibu` tinyint(4) NOT NULL,
  `telprumahibu` varchar(20) DEFAULT NULL,
  `hpibu` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_orangtua`
--

INSERT INTO `mvp_orangtua` (`orangtua_id`, `user_id`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `instansi`, `penghasilanayah`, `alamatayah`, `provinsiayah`, `kotaayah`, `kecamatanayah`, `kodeposayah`, `rtayah`, `rwayah`, `telprumahayah`, `hpayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `alamatibu`, `provinsiibu`, `kotaibu`, `kecamatanibu`, `kodeposibu`, `rtibu`, `rwibu`, `telprumahibu`, `hpibu`, `created_at`, `updated_at`) VALUES
(2, 13, '455', '4', '4', '4', '1jt', '4', 17, '4', '4', '4', 4, 4, '(476) ___-____', '(4___) ___-_____', '4', '4', '4', 'on', '4', 12, '4', '4', '4', 46, 4, '(627) ___-____', '(4___) ___-_____', '2015-08-01 17:55:16', '2015-08-01 18:39:07'),
(3, 13, '455', '4', '4', '4', '1jt', '4', 17, '4', '4', '4', 4, 4, '(476) ___-____', '(4___) ___-_____', '4', '4', '4', 'on', '4', 12, '4', '4', '4', 46, 4, '(627) ___-____', '(4___) ___-_____', '2015-08-01 17:58:34', '2015-08-01 18:39:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_provinsi`
--

CREATE TABLE IF NOT EXISTS `mvp_provinsi` (
  `provinsi_id` int(11) NOT NULL,
  `provinsi_nama` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_provinsi`
--

INSERT INTO `mvp_provinsi` (`provinsi_id`, `provinsi_nama`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(2, 'Bali', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(3, 'Banten', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(4, 'Bengkulu', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(5, 'Gorontalo', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(6, 'Jakarta', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(7, 'Jambi', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(8, 'Jawa Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(9, 'Jawa Tengah', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(10, 'Jawa Timur', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(11, 'Kalimantan Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(12, 'Kalimantan Selatan', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(13, 'Kalimantan Timur', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(14, 'Kalimantan Utara', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(15, 'Kepulauan Bangka Belitung', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(16, 'Kepulauan Riau', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(17, 'Lampung', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(18, 'Maluku', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(19, 'Maluku Utara', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(20, 'Nusa Tenggara Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(21, 'Nusa Tenggara Timur', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(22, 'Papua', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(23, 'Papua Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(24, 'Riau', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(25, 'Sulawesi Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(26, 'Sulawesi Selatan', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(27, 'Sulawesi Tengah', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(28, 'Sulawesi Tenggara', 1, '2015-07-23 04:09:44', '2015-07-23 04:27:17'),
(29, 'Kalimantan Tengah', 1, '2015-07-23 04:09:44', '2015-07-23 04:29:12'),
(30, 'Sulawesi Utara', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(31, 'Sumatera Barat', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(32, 'Sumatera Selatan', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(33, 'Sumatera Utara', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44'),
(34, 'Yogyakarta', 1, '2015-07-23 04:09:44', '2015-07-23 04:09:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_siswa`
--

CREATE TABLE IF NOT EXISTS `mvp_siswa` (
  `siswa_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tanggallahir` date NOT NULL,
  `jk` enum('p','l') NOT NULL,
  `goldar` enum('a','b','ab','o') NOT NULL,
  `telprumah` varchar(20) DEFAULT NULL,
  `provinsi` tinyint(4) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kodepos` varchar(6) NOT NULL,
  `alamat` varchar(140) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `tahunkelulusan` char(9) NOT NULL,
  `no_skhun` varchar(20) NOT NULL,
  `nilai_un` float NOT NULL,
  `no_formulir` varchar(7) NOT NULL,
  `diterima` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_delete` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_siswa`
--

INSERT INTO `mvp_siswa` (`siswa_id`, `user_id`, `nisn`, `tempatlahir`, `tanggallahir`, `jk`, `goldar`, `telprumah`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `alamat`, `status`, `tahunkelulusan`, `no_skhun`, `nilai_un`, `no_formulir`, `diterima`, `created_at`, `updated_at`, `status_delete`) VALUES
(3, 13, '4', '4', '1999-09-09', 'l', 'a', '(4__) ___-____', 13, '4', '4', '4', '4', 1, '1999/2000', '44', 100, '15004', 1, '2015-08-02 11:22:12', '2015-08-02 11:22:12', 0),
(4, 10, 'ww', 'www', '1999-12-12', 'l', 'a', '(111) 111-1111', 1, '1', '1', '1', '1', 1, '2000/2001', '', 80, '15003', 1, '2015-08-02 11:22:12', '2015-08-02 11:22:12', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mvp_user`
--

CREATE TABLE IF NOT EXISTS `mvp_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` char(32) NOT NULL,
  `nama_depan` varchar(12) NOT NULL,
  `nama_belakang` varchar(20) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(14) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `konfirmasi` char(40) NOT NULL,
  `status_konfirmasi` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_user`
--

INSERT INTO `mvp_user` (`user_id`, `username`, `password`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `status`, `konfirmasi`, `status_konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 'admin', '4bb788c58789a43d4cd421a4b2dce309', 'Berry', 'Firmann', 'clickdisini@gmail.com', '', 1, '0', 1, '2015-06-30 16:00:01', '2015-07-10 10:46:03'),
(2, 'clickdisini', '4bb788c58789a43d4cd421a4b2dce309', 'Sari', 'Susanti', 'sarisusanti95@gmail.com', '089699929549', 0, '0', 1, '2015-06-30 16:00:00', '2015-07-12 09:34:15'),
(3, 'riku', 'd318402bf2537f1852e0b8c2dcf7b324', 'Sari', 'Susanti', 'rikuchan@gmail.com', '089699929549', 0, '0', 0, '2015-07-09 16:36:29', '0000-00-00 00:00:00'),
(5, 'a', 'a', 'a', 'a', 'a', 'a', 0, '0', 0, '2015-07-09 00:00:00', '2015-07-09 09:38:04'),
(6, 'aAAA', '35d41cb5c8eb1ab939b614a62ac9571d', 'a', 'a', 'aikarienasari@yahoo.com', '089699929544', 0, '0', 0, '2015-07-09 16:41:05', '2015-07-09 09:41:05'),
(7, 'beary', '2a370a990ae996c3dfe7c27b621e1c66', 'beruang', 'api', 'beruang@bear.com', '08888888888', 0, 'b7d60ba6e48d4ac36504d0e44d864fd7947335e8', 0, '2015-07-10 17:37:22', '2015-07-10 10:37:22'),
(8, 'parabhayam', '3acad6fbb87e430a4431b2dbac3f30e8', 'Bennuy', 'faaa', 'parabhayam@yam.co.id', '08999999888', 0, '5babe64b14148f80927048ad890cb38f73355328', 0, '2015-07-10 17:44:24', '2015-07-10 10:44:24'),
(9, 'bani.mahesa', 'ee9cf4d6b91e133c010aea045016cd03', 'bani', 'mahesa', 'bani.mahesa@gmail.com', '081394449046', 0, 'eec6e19168cb8badf730f285bcec9571c73e16b7', 1, '2015-07-12 16:42:15', '2015-07-12 09:45:19'),
(10, 'ekka', '7bd1bd4f6b421b544c1f614e15edcb15', 'ekka', 'Rosdiana', 'ekkarosdiana@gmail.com', '089666777888', 0, '05fa60a8622a20fa05b7246f110c0c40e7fe10dc', 1, '2015-07-13 12:25:35', '2015-07-13 05:26:05'),
(11, 'harmaezza', '4932b0e614d97055c021d516d64433f3', 'Harmaezza', 'Ramadona1144', 'harmaezza@gmail.com', '(0888) 997-888', 0, 'bec8c1e300fba59936d192ce80ac7ffad6191bb7', 1, '2015-07-23 08:35:28', '2015-07-23 12:18:29'),
(12, 'buyung', '5e6240913ffb47bd6bc98a4737e97325', 'Buyung`', 'Nasution', 'buyung@nasution.com', '0999777666444', 0, 'cad1144ab28d1ad3844aaa61e47f5a80c84dd39e', 0, '2015-07-25 23:36:35', '2015-07-25 16:36:35'),
(13, 'ekaaria', '845395c339d0e70a584c836ab1fbbcc6', 'Eka', 'Aria', 'ekaaria123@gmail.com', '(0896) 777-555', 0, 'e9f4fde031e068a57ee3a5ab516b59ef4f3a62a9', 1, '2015-08-01 22:37:30', '2015-08-01 18:38:42'),
(14, 'sarisusanti', 'e16dab4e46083ef1e68a98b6cd24ab68', 'sari', 'Susanti', 'sarisusanti@ta.id', '08766664445553', 0, '57032532ed60aefc063c74fad2d52f034becbe73', 0, '2015-08-02 03:29:11', '2015-08-01 20:29:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mvp_asal_sekolah`
--
ALTER TABLE `mvp_asal_sekolah`
  ADD PRIMARY KEY (`asal_sekolah_id`);

--
-- Indexes for table `mvp_calon_siswa`
--
ALTER TABLE `mvp_calon_siswa`
  ADD PRIMARY KEY (`calon_siswa_id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mvp_cara_daftar`
--
ALTER TABLE `mvp_cara_daftar`
  ADD PRIMARY KEY (`cara_daftar_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mvp_file_calon_siswa`
--
ALTER TABLE `mvp_file_calon_siswa`
  ADD PRIMARY KEY (`file_calon_siswa_id`);

--
-- Indexes for table `mvp_info`
--
ALTER TABLE `mvp_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `mvp_info_detail`
--
ALTER TABLE `mvp_info_detail`
  ADD PRIMARY KEY (`info_detail_id`);

--
-- Indexes for table `mvp_konfirmasi`
--
ALTER TABLE `mvp_konfirmasi`
  ADD PRIMARY KEY (`konfirmasi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mvp_kontak`
--
ALTER TABLE `mvp_kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `mvp_kuota`
--
ALTER TABLE `mvp_kuota`
  ADD PRIMARY KEY (`kuota_id`);

--
-- Indexes for table `mvp_orangtua`
--
ALTER TABLE `mvp_orangtua`
  ADD PRIMARY KEY (`orangtua_id`);

--
-- Indexes for table `mvp_provinsi`
--
ALTER TABLE `mvp_provinsi`
  ADD PRIMARY KEY (`provinsi_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mvp_siswa`
--
ALTER TABLE `mvp_siswa`
  ADD PRIMARY KEY (`siswa_id`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mvp_user`
--
ALTER TABLE `mvp_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mvp_asal_sekolah`
--
ALTER TABLE `mvp_asal_sekolah`
  MODIFY `asal_sekolah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mvp_calon_siswa`
--
ALTER TABLE `mvp_calon_siswa`
  MODIFY `calon_siswa_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `mvp_cara_daftar`
--
ALTER TABLE `mvp_cara_daftar`
  MODIFY `cara_daftar_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvp_file_calon_siswa`
--
ALTER TABLE `mvp_file_calon_siswa`
  MODIFY `file_calon_siswa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mvp_info`
--
ALTER TABLE `mvp_info`
  MODIFY `info_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvp_info_detail`
--
ALTER TABLE `mvp_info_detail`
  MODIFY `info_detail_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvp_konfirmasi`
--
ALTER TABLE `mvp_konfirmasi`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mvp_kontak`
--
ALTER TABLE `mvp_kontak`
  MODIFY `kontak_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvp_kuota`
--
ALTER TABLE `mvp_kuota`
  MODIFY `kuota_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mvp_orangtua`
--
ALTER TABLE `mvp_orangtua`
  MODIFY `orangtua_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mvp_provinsi`
--
ALTER TABLE `mvp_provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mvp_siswa`
--
ALTER TABLE `mvp_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mvp_user`
--
ALTER TABLE `mvp_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
