-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Agu 2020 pada 11.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118100_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `kode_kelas` char(8) NOT NULL,
  `nip` char(8) DEFAULT NULL,
  `nama_kelas` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kode_kelas`, `nip`, `nama_kelas`) VALUES
('10119100', '10118100', 'kelas kimia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nim` char(8) NOT NULL,
  `kode_kelas` char(8) DEFAULT NULL,
  `nama_siswa` varchar(30) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nim`, `kode_kelas`, `nama_siswa`, `jk`) VALUES
('10118100', '1122833', 'rifki permana', 'laki laki'),
('10118111', '1122833', 'michael jordal', 'laki laki'),
('10118199', '1122833', 'mikasa ', 'perempuan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali`
--

CREATE TABLE `wali` (
  `nip` char(8) NOT NULL,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wali`
--

INSERT INTO `wali` (`nip`, `nama`) VALUES
('10118100', 'rifki permana'),
('10118111', 'johnwick'),
('10118222', 'Ridwan kamil');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kode_kelas`),
  ADD KEY `fk` (`nip`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `fk_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`nip`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `fk` FOREIGN KEY (`nip`) REFERENCES `wali` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_kelas` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
