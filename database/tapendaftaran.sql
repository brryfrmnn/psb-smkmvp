-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2015 pada 16.29
-- Versi Server: 5.6.24
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tapendaftaran`
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_asal_sekolah`
--

INSERT INTO `mvp_asal_sekolah` (`asal_sekolah_id`, `user_id`, `asalsekolah`, `provinsisekolah`, `kotakabsekolah`, `created_at`, `updated_at`) VALUES
(3, 13, '4', 6, '4', '2015-08-01 17:55:15', '2015-08-01 17:55:15'),
(4, 13, '4', 6, '4', '2015-08-01 17:58:34', '2015-08-01 18:38:43'),
(5, 2, '3', 13, '3', '2015-08-02 19:42:21', '2015-08-02 19:42:21'),
(6, 15, '5', 29, '5', '2015-08-03 08:44:53', '2015-08-03 08:44:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_calon_siswa`
--

INSERT INTO `mvp_calon_siswa` (`calon_siswa_id`, `user_id`, `nisn`, `tempatlahir`, `tanggallahir`, `jk`, `goldar`, `telprumah`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `alamat`, `status`, `tahunkelulusan`, `no_skhun`, `nilai_un`, `no_formulir`, `diterima`, `created_at`, `updated_at`) VALUES
(19, 2, '4', '4', '1999-11-11', 'l', 'a', '(4__) ___-____', 4, '3', '3', '3', '33', 1, '1999/1999', '2', 90, '15001', 1, '2015-08-02 19:42:21', '2015-08-03 08:41:04'),
(20, 15, '5', '5', '1999-09-09', 'l', 'a', '(5__) ___-____', 14, '5', '5', '5', '5', 1, '2000/2001', '5', 5, '16001', 0, '2015-08-03 08:44:53', '2015-08-09 07:21:13'),
(21, 11, '4141', '44', '2015-08-18', 'l', 'b', '3', 3, '3', '3', '3', '3', 33, '3', '3', 3, '15002', 3, '2015-08-11 17:00:00', '2015-08-17 17:00:00');

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
(4, '13-SKHUN-DPN-ekaaria-11265587_826098110813308_6083498223343954044_n.jpg', '13-SKHUN-BLKG-ekaaria-RIKU-PC - PHOTO KELAS.jpg', '13-AKTE-ekaaria-cute-cat-praying.jpg', '13-FOTO3x4-ekaaria-cute-cat-praying.jpg', 13, '2015-08-01 18:41:21', '2015-08-04 07:19:45');

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
-- Struktur dari tabel `mvp_jurusan`
--

CREATE TABLE IF NOT EXISTS `mvp_jurusan` (
  `jurusan_id` tinyint(4) NOT NULL,
  `nama_jurusan` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_konfirmasi`
--

INSERT INTO `mvp_konfirmasi` (`konfirmasi_id`, `user_id`, `konfirmasi_nama_bank`, `konfirmasi_no_rekening`, `konfirmasi_pemilik_rekening`, `created_at`) VALUES
(1, 14, 'bca', '4371680068', 'Berry Firmann', '2015-08-02 02:58:53'),
(2, 14, 'bri', '111111', 'rara', '2015-08-02 03:18:01'),
(4, 15, 'bca', '43716800000', 'berry', '2015-08-03 08:36:08');

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
  `kontak_dibuat` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `kontak_dibalas` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_kontak`
--

INSERT INTO `mvp_kontak` (`kontak_id`, `kontak_nama`, `kontak_email`, `kontak_telp`, `kontak_pesan`, `kontak_dibuat`, `kontak_dibalas`) VALUES
(3, 'Berry', 'berry@gmail.com', '0988888', 'saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?saya mau protes kenapa saya sulit sekali untuk mendaftar ??? padahal saya sudah mengikut petunjuk yang ada? kok tetes saya ga s ya?', '2015-08-26 00:00:00', '2015-08-04 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_orangtua`
--

INSERT INTO `mvp_orangtua` (`orangtua_id`, `user_id`, `namaayah`, `pendidikanayah`, `pekerjaanayah`, `instansi`, `penghasilanayah`, `alamatayah`, `provinsiayah`, `kotaayah`, `kecamatanayah`, `kodeposayah`, `rtayah`, `rwayah`, `telprumahayah`, `hpayah`, `namaibu`, `pendidikanibu`, `pekerjaanibu`, `penghasilanibu`, `alamatibu`, `provinsiibu`, `kotaibu`, `kecamatanibu`, `kodeposibu`, `rtibu`, `rwibu`, `telprumahibu`, `hpibu`, `created_at`, `updated_at`) VALUES
(2, 13, '455', '4', '4', '4', '1jt', '4', 17, '4', '4', '4', 4, 4, '(476) ___-____', '(4___) ___-_____', '4', '4', '4', 'on', '4', 12, '4', '4', '4', 46, 4, '(627) ___-____', '(4___) ___-_____', '2015-08-01 17:55:16', '2015-08-01 18:39:07'),
(3, 13, '455', '4', '4', '4', '1jt', '4', 17, '4', '4', '4', 4, 4, '(476) ___-____', '(4___) ___-_____', '4', '4', '4', 'on', '4', 12, '4', '4', '4', 46, 4, '(627) ___-____', '(4___) ___-_____', '2015-08-01 17:58:34', '2015-08-01 18:39:07'),
(4, 2, '3', '3', '3', '33', '1jt', '3', 16, '3', '3', '3', 3, 3, '(3__) ___-____', '(3___) ___-_____', '3', '3', '3', 'on', '3', 16, '3', '3', '3', 3, 3, '(3__) ___-____', '(3___) ___-_____', '2015-08-02 19:42:21', '2015-08-02 19:42:21'),
(5, 15, '5', '5', '5', '5', '1jt', '5', 13, '5', '5', '5', 5, 5, '(5__) ___-____', '(5___) ___-_____', '5', '5', '5', 'on', '5', 12, '5', '5', '5', 5, 5, '(5__) ___-____', '(5___) ___-_____', '2015-08-03 08:44:53', '2015-08-03 08:44:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_siswa`
--

INSERT INTO `mvp_siswa` (`siswa_id`, `user_id`, `nisn`, `tempatlahir`, `tanggallahir`, `jk`, `goldar`, `telprumah`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `alamat`, `status`, `tahunkelulusan`, `no_skhun`, `nilai_un`, `no_formulir`, `diterima`, `created_at`, `updated_at`, `status_delete`) VALUES
(3, 13, '4', '4', '1999-09-09', 'l', 'a', '(4__) ___-____', 13, '4', '4', '4', '4', 1, '1999/2000', '44', 100, '15004', 1, '2015-08-02 11:22:12', '2015-08-02 11:22:12', 0),
(9, 2, '12129276', 'Majalengka', '1992-12-13', 'p', 'ab', '', 1, 'Majalengka', 'Majalengka Kulon', '45459', 'faf', 1, '2000/2001', '', 100, '15001', 1, '2015-08-02 17:38:30', '2015-08-02 17:38:30', 0);

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
  `telepon` varchar(17) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `konfirmasi` char(40) NOT NULL,
  `status_konfirmasi` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mvp_user`
--

INSERT INTO `mvp_user` (`user_id`, `username`, `password`, `nama_depan`, `nama_belakang`, `email`, `telepon`, `status`, `konfirmasi`, `status_konfirmasi`, `created_at`, `updated_at`) VALUES
(1, 'admin', '4bb788c58789a43d4cd421a4b2dce309', 'Berry', 'Firmann', 'clickdisini@gmail.com', '', 1, '0', 1, '2015-06-30 16:00:01', '2015-07-10 10:46:03'),
(2, 'clickdisini', '4bb788c58789a43d4cd421a4b2dce309', 'Sari', 'Susanti', 'sarisusanti95@gmail.com', '089699929549', 0, '0', 1, '2015-06-30 16:00:00', '2015-07-12 09:34:15'),
(3, 'riku', 'd318402bf2537f1852e0b8c2dcf7b324', 'Sari', 'Kurniasally', 'rikuchan@gmail.com', '089699929549', 0, '0', 0, '2015-07-09 16:36:29', '2015-08-06 08:22:07'),
(11, 'harmaezza', '4932b0e614d97055c021d516d64433f3', 'Harmaezza', 'Ramadona', 'harmaezza@gmail.com', '(0888) 997-888', 0, 'bec8c1e300fba59936d192ce80ac7ffad6191bb7', 1, '2015-07-23 08:35:28', '2015-08-06 08:22:25'),
(13, 'ekaaria', '845395c339d0e70a584c836ab1fbbcc6', 'Eka', 'Aria', 'ekaaria123@gmail.com', '(0896) 777-555', 0, 'e9f4fde031e068a57ee3a5ab516b59ef4f3a62a9', 1, '2015-08-01 22:37:30', '2015-08-01 18:38:42'),
(14, 'asri', 'e16dab4e46083ef1e68a98b6cd24ab68', 'Asri', 'Wahyuni', 'sarisusanti@ta.id', '08766664445553', 0, '57032532ed60aefc063c74fad2d52f034becbe73', 0, '2015-08-02 03:29:11', '2015-08-06 08:23:31'),
(15, 'berryfirmann', '33540fbef29ce9ab23f3a846f962f6e9', 'Berry', 'Firmann', 'berryfirmann@gmail.com', '089699929544', 0, '91440fcc52de26cfcdd4e5f343a9788d66597f45', 1, '2015-08-03 15:12:20', '2015-08-03 08:37:50'),
(16, 'dadan', '19a3a1d674bf930c012cea808f8cdd9d', 'dadan', 'mulyana', 'dadan@dadan.co', '0999999999999', 0, '22ec3db2afdd22c80b082dbcde5f363d10705255', 1, '2015-08-03 15:28:51', '2015-08-03 08:38:47');

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
  ADD PRIMARY KEY (`file_calon_siswa_id`),
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `mvp_jurusan`
--
ALTER TABLE `mvp_jurusan`
  ADD PRIMARY KEY (`jurusan_id`);

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
  ADD PRIMARY KEY (`orangtua_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `asal_sekolah_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mvp_calon_siswa`
--
ALTER TABLE `mvp_calon_siswa`
  MODIFY `calon_siswa_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
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
-- AUTO_INCREMENT for table `mvp_jurusan`
--
ALTER TABLE `mvp_jurusan`
  MODIFY `jurusan_id` tinyint(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mvp_konfirmasi`
--
ALTER TABLE `mvp_konfirmasi`
  MODIFY `konfirmasi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mvp_kontak`
--
ALTER TABLE `mvp_kontak`
  MODIFY `kontak_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mvp_kuota`
--
ALTER TABLE `mvp_kuota`
  MODIFY `kuota_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mvp_orangtua`
--
ALTER TABLE `mvp_orangtua`
  MODIFY `orangtua_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mvp_provinsi`
--
ALTER TABLE `mvp_provinsi`
  MODIFY `provinsi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `mvp_siswa`
--
ALTER TABLE `mvp_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `mvp_user`
--
ALTER TABLE `mvp_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mvp_calon_siswa`
--
ALTER TABLE `mvp_calon_siswa`
  ADD CONSTRAINT `mvp_calon_siswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mvp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mvp_file_calon_siswa`
--
ALTER TABLE `mvp_file_calon_siswa`
  ADD CONSTRAINT `mvp_file_calon_siswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mvp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mvp_konfirmasi`
--
ALTER TABLE `mvp_konfirmasi`
  ADD CONSTRAINT `mvp_konfirmasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mvp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mvp_orangtua`
--
ALTER TABLE `mvp_orangtua`
  ADD CONSTRAINT `mvp_orangtua_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mvp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mvp_siswa`
--
ALTER TABLE `mvp_siswa`
  ADD CONSTRAINT `mvp_siswa_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `mvp_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
