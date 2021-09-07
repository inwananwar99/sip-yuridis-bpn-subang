-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2021 pada 03.03
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smonitoring`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `no_telp`, `username`, `password`) VALUES
(1, 'Inwan', '09878495763', 'lakekkk', 'lakekkk'),
(2, 'inwan', '87899895429', 'inwannn', 'inwannn');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bangunan`
--

CREATE TABLE `bangunan` (
  `id_bangunan` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `nama_pemilik_bangunan` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_ktp` varchar(26) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `nama_pemilik_tanah` varchar(128) NOT NULL,
  `kavling` int(25) NOT NULL,
  `luas` int(25) NOT NULL,
  `jenis_konstruksi` varchar(128) NOT NULL,
  `luas_bangunan` varchar(25) NOT NULL,
  `kelas_konstruksi` varchar(25) NOT NULL,
  `kondisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `estimasi`
--

CREATE TABLE `estimasi` (
  `id_estimasi` int(11) NOT NULL,
  `id_satgas` int(11) NOT NULL,
  `hasil_estimasi` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `estimasi`
--

INSERT INTO `estimasi` (`id_estimasi`, `id_satgas`, `hasil_estimasi`) VALUES
(17, 2, 371),
(18, 1, 371),
(19, 2, 500),
(20, 1, 186),
(21, 2, 514),
(22, 2, 229),
(23, 2, 514),
(24, 2, 129),
(25, 2, 15),
(26, 2, 29),
(27, 2, 43),
(28, 2, 58),
(29, 2, 72),
(30, 2, 86),
(31, 2, 100),
(32, 2, 115),
(33, 2, 129),
(34, 2, 143),
(35, 2, 157),
(36, 2, 172),
(37, 2, 186),
(38, 2, 200),
(39, 2, 215),
(40, 2, 229),
(41, 2, 243),
(42, 2, 257),
(43, 2, 272),
(44, 2, 272),
(45, 2, 286),
(46, 2, 300),
(47, 2, 314),
(48, 2, 329),
(49, 2, 343),
(50, 2, 357),
(51, 2, 371),
(52, 2, 386),
(53, 2, 400),
(54, 2, 414),
(55, 2, 428),
(56, 2, 186),
(57, 2, 72),
(58, 2, 215);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemdes`
--

CREATE TABLE `pemdes` (
  `id_pemdes` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemdes`
--

INSERT INTO `pemdes` (`id_pemdes`, `nama`, `no_telp`, `username`, `password`) VALUES
(1, 'Inwan Anwar Solihudin', '087778814955', 'inwan', 'politeknik99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendataan`
--

CREATE TABLE `pendataan` (
  `id_pendataan` int(11) NOT NULL,
  `id_estimasi` int(11) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `desa` varchar(128) NOT NULL,
  `jumlah_bidang_tanah` varchar(128) NOT NULL,
  `estimasi_waktu` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendataan`
--

INSERT INTO `pendataan` (`id_pendataan`, `id_estimasi`, `kecamatan`, `desa`, `jumlah_bidang_tanah`, `estimasi_waktu`) VALUES
(47, 17, 'Patokbeusi', 'Tanjungrasa kidul', '2600', 371),
(48, 17, 'Patokbeusi', 'Tanjungrasa', '2600', 371),
(49, 19, 'Patokbeusi', 'Ciberes', '3500', 500),
(50, 20, 'Patokbeusi', 'Gempolsari', '1300', 186),
(51, 22, 'Patokbeusi', 'Gempolsari', '1600', 229),
(52, 23, 'Cipeundeuy', 'Wantilan', '3600', 514),
(53, 24, 'Kalijati', 'Marengmang', '900', 129),
(54, 57, 'Jalancagak', 'Tambakan', '500', 72),
(55, 58, 'Pusakanagara', 'Rancadaka', '1500', 215);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_pemdes` int(11) NOT NULL,
  `nis` int(12) NOT NULL,
  `id_admin` int(15) NOT NULL,
  `jenis_data_tanah` varchar(25) NOT NULL,
  `pesan_pengajuan` text NOT NULL,
  `data_pengajuan` varchar(128) NOT NULL,
  `status_pengajuan` enum('Belum diproses','Sedang diproses','Selesai diproses','') NOT NULL,
  `tgl_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `id_pemdes`, `nis`, `id_admin`, `jenis_data_tanah`, `pesan_pengajuan`, `data_pengajuan`, `status_pengajuan`, `tgl_pengajuan`) VALUES
(70, 1, 2, 2, 'Inventarisasi Bangunan', 'vsfgfdsfs', '27578-32194-1-PB9.pdf', 'Selesai diproses', '2021-07-24'),
(71, 1, 2, 2, 'Inventarisasi Tanaman', 'fdsgshhgj', '215-Article_Text-409-1-10-2016072114.pdf', 'Sedang diproses', '2021-07-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_tanah`
--

CREATE TABLE `permohonan_tanah` (
  `id_permohonan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nis` int(20) NOT NULL,
  `no_berkas` varchar(32) NOT NULL,
  `no_register` varchar(31) NOT NULL,
  `pemohon` varchar(128) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `pekerjaan` varchar(128) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `alamat` varchar(75) NOT NULL,
  `alas_hak` varchar(50) NOT NULL,
  `tgl_alas_hak` date NOT NULL,
  `blok` varchar(20) NOT NULL,
  `desa/kelurahan` varchar(25) NOT NULL,
  `no_letter_c` varchar(21) NOT NULL,
  `nama_letter_c` varchar(21) NOT NULL,
  `no_persil` int(11) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `rt/rw` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `no_sppt` varchar(15) NOT NULL,
  `nama_sppt` varchar(21) NOT NULL,
  `luas` int(21) NOT NULL,
  `no_blok` int(15) NOT NULL,
  `luas_ukur` int(15) NOT NULL,
  `batas_utara` varchar(15) NOT NULL,
  `batas_selatan` varchar(15) NOT NULL,
  `batas_timur` varchar(15) NOT NULL,
  `batas_barat` varchar(15) NOT NULL,
  `riwayat_penguasaan` text NOT NULL,
  `penggunaan` text NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `nama_pewaris` varchar(28) NOT NULL,
  `tahun_meninggal` int(5) NOT NULL,
  `tempat_meninggal` varchar(28) NOT NULL,
  `rencana_penggunaan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `permohonan_tanah`
--

INSERT INTO `permohonan_tanah` (`id_permohonan`, `id_admin`, `nis`, `no_berkas`, `no_register`, `pemohon`, `tempat`, `tgl_lahir`, `umur`, `pekerjaan`, `no_ktp`, `alamat`, `alas_hak`, `tgl_alas_hak`, `blok`, `desa/kelurahan`, `no_letter_c`, `nama_letter_c`, `no_persil`, `kelas`, `rt/rw`, `kecamatan`, `no_sppt`, `nama_sppt`, `luas`, `no_blok`, `luas_ukur`, `batas_utara`, `batas_selatan`, `batas_timur`, `batas_barat`, `riwayat_penguasaan`, `penggunaan`, `tgl_permohonan`, `nama_pewaris`, `tahun_meninggal`, `tempat_meninggal`, `rencana_penggunaan`) VALUES
(8, 2, 2, 'Kas12', '0123h', 'Inwan', 'Karawang', '1999-12-05', 22, 'Mahasiswa', 2147483647, 'Kp. Karang Anyar RT 019/005', 'SHM', '2021-07-28', 'O', 'Tambakan', '43', 'Lakek', 32, 'C', '019/005', 'Jalancagak', '023', 'ganteng', 1200, 31, 1500, 'Akhmad', 'Suratmi', 'Albi', 'Anggi', 'ghshgs', 'Tempat Jualan Ayam Geprek', '2021-07-24', 'Inwan', 1999, 'Karawang', 'Untuk Pengadaan Tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `satgas_b`
--

CREATE TABLE `satgas_b` (
  `id_satgas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(35) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `satgas_b`
--

INSERT INTO `satgas_b` (`id_satgas`, `nama`, `no_telp`, `username`, `password`) VALUES
(1, 'Akhmad Ramdani Isnan Nurrodin', '085723260587', 'cmed', 'cmed98'),
(2, 'Slamet Ibrahim', '0877788', 'slamet', 'ibrahim');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanah`
--

CREATE TABLE `tanah` (
  `id_tanah` int(11) NOT NULL,
  `id_satgas` int(11) NOT NULL,
  `kecamatan` varchar(128) DEFAULT NULL,
  `desa` varchar(128) DEFAULT NULL,
  `blok` int(11) DEFAULT NULL,
  `rt/rw` varchar(128) DEFAULT NULL,
  `nis` int(15) DEFAULT NULL,
  `nama_pemilik` varchar(128) DEFAULT NULL,
  `nik_pemilik` varchar(128) DEFAULT NULL,
  `nama_penggarap` varchar(128) DEFAULT NULL,
  `nik_penggarap` varchar(128) DEFAULT NULL,
  `status_penggarap` varchar(128) DEFAULT NULL,
  `shm` varchar(128) DEFAULT NULL,
  `no_shm` varchar(128) DEFAULT NULL,
  `no_sppt` varchar(128) DEFAULT NULL,
  `kelas` varchar(128) DEFAULT NULL,
  `atas_nama` varchar(128) DEFAULT NULL,
  `perolehan_tanah` enum('Akta Jual Beli','Hibah','Pembagian Bersama') DEFAULT NULL,
  `tgl_perolehan` date NOT NULL,
  `no_perolehan` int(11) DEFAULT NULL,
  `bukti_garapan` varchar(128) DEFAULT NULL,
  `tgl_garapan` date NOT NULL,
  `no_garapan` int(11) DEFAULT NULL,
  `luas_tanah` varchar(23) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tanah`
--

INSERT INTO `tanah` (`id_tanah`, `id_satgas`, `kecamatan`, `desa`, `blok`, `rt/rw`, `nis`, `nama_pemilik`, `nik_pemilik`, `nama_penggarap`, `nik_penggarap`, `status_penggarap`, `shm`, `no_shm`, `no_sppt`, `kelas`, `atas_nama`, `perolehan_tanah`, `tgl_perolehan`, `no_perolehan`, `bukti_garapan`, `tgl_garapan`, `no_garapan`, `luas_tanah`) VALUES
(38, 1, 'Jalancagak', 'Tambakan', 10, '017/005', 2, 'Dika Maulana', '0483673651', 'Inwan', '04735926572', 'Menguasai', 'Milik', '234', '', '', '', 'Akta Jual Beli', '2021-07-05', 5, 'Surket Desa', '2021-06-28', 3, '1500 m2'),
(39, 2, 'Cibogo', 'Padaasih', 32, '019/005', 24, 'Ridwan Baharta', '01230013654721', 'Askalim', '01230013654765', 'Menggarap', 'Milik', '45', '', '', '', 'Akta Jual Beli', '0000-00-00', 0, 'Surket Desa', '2021-08-01', 34, '44000 m2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanaman`
--

CREATE TABLE `tanaman` (
  `id_tanaman` int(11) NOT NULL,
  `nis` int(20) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `rtrw` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_ktp` int(128) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_pemilik_tanah` varchar(100) NOT NULL,
  `kavling/blok` varchar(50) NOT NULL,
  `luas` int(30) NOT NULL,
  `alas_hak` enum('SHM','AJB','Girik','Letter C','Surat Keterangan Desa','SPPT') NOT NULL,
  `jenis_tanaman` varchar(128) NOT NULL,
  `ukuran` enum('Besar','Sedang','Kecil') NOT NULL,
  `jumlah` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`id_bangunan`),
  ADD KEY `nis` (`nis`);

--
-- Indeks untuk tabel `estimasi`
--
ALTER TABLE `estimasi`
  ADD PRIMARY KEY (`id_estimasi`),
  ADD KEY `id_satgas` (`id_satgas`);

--
-- Indeks untuk tabel `pemdes`
--
ALTER TABLE `pemdes`
  ADD PRIMARY KEY (`id_pemdes`);

--
-- Indeks untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  ADD PRIMARY KEY (`id_pendataan`),
  ADD KEY `id_estimasi` (`id_estimasi`);

--
-- Indeks untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_pemdes` (`id_pemdes`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `permohonan_tanah`
--
ALTER TABLE `permohonan_tanah`
  ADD PRIMARY KEY (`id_permohonan`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `satgas_b`
--
ALTER TABLE `satgas_b`
  ADD PRIMARY KEY (`id_satgas`);

--
-- Indeks untuk tabel `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`id_tanah`),
  ADD UNIQUE KEY `nis_2` (`nis`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_satgas` (`id_satgas`);

--
-- Indeks untuk tabel `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`id_tanaman`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `id_bangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `estimasi`
--
ALTER TABLE `estimasi`
  MODIFY `id_estimasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `pemdes`
--
ALTER TABLE `pemdes`
  MODIFY `id_pemdes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  MODIFY `id_pendataan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `permohonan_tanah`
--
ALTER TABLE `permohonan_tanah`
  MODIFY `id_permohonan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `satgas_b`
--
ALTER TABLE `satgas_b`
  MODIFY `id_satgas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanah`
--
ALTER TABLE `tanah`
  MODIFY `id_tanah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bangunan`
--
ALTER TABLE `bangunan`
  ADD CONSTRAINT `bangunan_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tanah` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `estimasi`
--
ALTER TABLE `estimasi`
  ADD CONSTRAINT `estimasi_ibfk_1` FOREIGN KEY (`id_satgas`) REFERENCES `satgas_b` (`id_satgas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  ADD CONSTRAINT `pendataan_ibfk_1` FOREIGN KEY (`id_estimasi`) REFERENCES `estimasi` (`id_estimasi`);

--
-- Ketidakleluasaan untuk tabel `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD CONSTRAINT `pengajuan_ibfk_1` FOREIGN KEY (`id_pemdes`) REFERENCES `pemdes` (`id_pemdes`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pengajuan_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `tanah` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pengajuan_ibfk_4` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permohonan_tanah`
--
ALTER TABLE `permohonan_tanah`
  ADD CONSTRAINT `permohonan_tanah_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tanah` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permohonan_tanah_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Ketidakleluasaan untuk tabel `tanah`
--
ALTER TABLE `tanah`
  ADD CONSTRAINT `tanah_ibfk_1` FOREIGN KEY (`id_satgas`) REFERENCES `satgas_b` (`id_satgas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tanaman`
--
ALTER TABLE `tanaman`
  ADD CONSTRAINT `tanaman_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `tanah` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
