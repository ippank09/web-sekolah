-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Mar 2024 pada 22.13
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(50) DEFAULT NULL,
  `slug_berita` varchar(11) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(50) DEFAULT NULL,
  `tgl_berita` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(9, 'MAS PP YASRIB LAPAJUNG', NULL, '<p><strong>MAS PP YASRIB LAPAJUNG</strong> adalah salah satu satuan pendidikan dengan jenjang <a href=\"https://data.sekolah-kita.net/jenjang/MA\">MA</a> di Lapajung, Kec. Lalabata, Kab. Soppeng, Sulawesi Selatan. Dalam menjalankan kegiatannya, MAS PP YASRIB LAPAJUNG berada di bawah naungan Kementerian Agama.</p>', 'pesantren1.jpg', '2024-03-05 11:00:00', 1),
(10, 'Pondok Pesantren Sukabumi', NULL, '<p>Pondok Pesantren Sukabumi Pondok Pesantren Sukabumi Pondok Pesantren Sukabumi Pondok Pesantren Sukabumi</p>', 'Pondok-Pesantren-Al-Matuq-Sukabumi.jpg', '2024-03-05 11:00:00', 1),
(11, 'Contoh 1', NULL, '<p>Pilpres 2024</p>', 'pesantren2.jpg', '2024-03-07 11:00:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_foto`
--

CREATE TABLE `tb_foto` (
  `id_foto` int(11) NOT NULL,
  `id_galeri` int(11) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_foto`
--

INSERT INTO `tb_foto` (`id_foto`, `id_galeri`, `ket_foto`, `foto`) VALUES
(2, 6, 'makan siang gratis', '4_0011.jpg'),
(3, 5, 'makan pagi gratis', 'FOTOk3.jpg'),
(4, 4, 'makan makan gratis', '0011.jpg'),
(5, 6, 'apa kabar', '0021.jpg'),
(6, 6, 'kabar baik', '2_0011.jpg'),
(7, 6, 'prabowo', 'NPWP_01.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `nama_galeri`, `sampul`) VALUES
(4, 'kegiatanku', 'im7.jpg'),
(5, 'lari pagi', 'LOGO.jpg'),
(6, 'makan malam', 'book.jpg'),
(7, 'Upacara', 'ponpes.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` int(20) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(2) DEFAULT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto`) VALUES
(4, 7777, 'adian yusuf', 'Makassar', '2023-12-07', 10, 'S1', '2_001.jpg'),
(5, 231, 'irfan busrah', 'Ujung Pandang', '2024-02-01', 12, 'S2', 'FOTOk2.jpg'),
(6, 5564, 'Alif', 'Makassar', '2024-02-09', 1, 'S1', 'Screenshot_2024-02-05_100601.png'),
(7, 9900, 'Budi Gunawan', 'Makassar', '2024-02-16', 8, 'S1', 'Screenshot_2024-02-21_152415.png'),
(8, 3455, 'dfffg', 'gfgfg', '2024-03-29', 2, 'D3', 'book.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_mapel`
--

INSERT INTO `tb_mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Matematika'),
(2, 'Bahasa Inggris'),
(6, 'Berpikir Komputasi'),
(7, 'Robotika dan Industri'),
(8, 'Kalkulus'),
(10, 'Sistem Tenaga Listrik'),
(11, 'Sistem Proteksi'),
(12, 'Cyber Security'),
(13, 'Ilmu Bahan Listrik'),
(15, 'Fisika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl_pengumuman`) VALUES
(1, 'pengumuman', 'Pangkajene dan Kepulauan - Presiden RI Joko Widodo didampingi Menteri Pekerjaan Umum dan Perumahan Rakyat (PUPR) Basuki Hadimuljono, Menteri BUMN Erick Thohir, Anggota Komisi V DPR RI Andi Iwan Darmawan Aras, PJ Gubernur Provinsi Sulawesi Selatan Bahtiar Baharuddin, dan Bupati Pangkajene dan Kepulauan (Pangkep) Muhammad Yusran Lalogau, meresmikan 27 ruas jalan dan 1 jembatan yang dilaksanakan melalui Inpres Jalan Daerah (IJD) di Provinsi Sulawesi Selatan. Peresmian dilaksanakan di ruas Soreang - Senggerang - Kalajong yang berada di Kabupaten Pangkajene dan Kepulauan', '2024-02-27 11:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id_setting` int(11) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `kepala_sekolah` varchar(100) DEFAULT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_setting`
--

INSERT INTO `tb_setting` (`id_setting`, `nama_sekolah`, `alamat`, `no_telp`, `kepala_sekolah`, `foto_kepsek`, `visi`, `misi`, `sejarah`) VALUES
(1, 'MAS PP YASJIB sambarang', 'Soppeng Riaja', '0821456', 'Sampara', 'FOTOk.jpg', '<p><strong>Unggul dalam Prestasi, Berakhlakul Karimah, Terampil dan Mandiri</strong></p>', '1.	sssss', '1.	sssss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(100) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `foto_siswa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(3, '55990', 'alifurrahman', 'Makassar', '2024-02-03', 'II', 'FOTOk.jpg'),
(4, '55656', 'gfdgfg', 'Makassar', '2024-03-08', 'II', 'book.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'irfan busrah', 'admin', '123456', 1),
(2, 'adian yusuf', 'user', '123456', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_foto`
--
ALTER TABLE `tb_foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_mapel`
--
ALTER TABLE `tb_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
