-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2021 at 10:53 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_paud`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `iddokumen` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL,
  `nama_file` varchar(256) DEFAULT NULL,
  `keterangan` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`iddokumen`, `siswa_id`, `nama_file`, `keterangan`) VALUES
(4, 1, 'dbfe846fe1c383664ebd5661eba32834.jpeg', 'Fotocopy KTP'),
(5, 1, 'c4b783de30cad1a5556ff02aa8c540c5.jpeg', 'Fotocopy Akta Kelahiran'),
(7, 4, '54f80e68337fcae96ee44cf7f7dabb7c.jpeg', 'Fotocopy KTP');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `idorang_tua` int(11) NOT NULL,
  `ayah_nama` varchar(128) DEFAULT NULL,
  `ayah_nik` varchar(32) DEFAULT NULL,
  `ayah_tmp_lahir` varchar(128) DEFAULT NULL,
  `ayah_tgl_lahir` date DEFAULT NULL,
  `ayah_negara` varchar(64) DEFAULT NULL,
  `ayah_agama` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `ayah_hp` varchar(16) DEFAULT NULL,
  `ayah_pend_terakhir` enum('Tidak Sekolah','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4','S1','S2','Doktor') DEFAULT NULL,
  `ayah_pekerjaan` varchar(32) DEFAULT NULL,
  `ayah_penghasilan` varchar(16) DEFAULT NULL,
  `ayah_nama_ibu` varchar(128) DEFAULT NULL,
  `ibu_nama` varchar(128) DEFAULT NULL,
  `ibu_nik` varchar(32) DEFAULT NULL,
  `ibu_tmp_lahir` varchar(128) DEFAULT NULL,
  `ibu_tgl_lahir` date DEFAULT NULL,
  `ibu_negara` varchar(64) DEFAULT NULL,
  `ibu_agama` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `ibu_hp` varchar(16) DEFAULT NULL,
  `ibu_pend_terakhir` enum('Tidak Sekolah','SD Sederajat','SMP Sederajat','SMA Sederajat','D1','D2','D3','D4','S1','S2','Doktor') DEFAULT NULL,
  `ibu_pekerjaan` varchar(32) DEFAULT NULL,
  `ibu_penghasilan` varchar(16) DEFAULT NULL,
  `ibu_nama_ibu` varchar(128) DEFAULT NULL,
  `pengguna_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`idorang_tua`, `ayah_nama`, `ayah_nik`, `ayah_tmp_lahir`, `ayah_tgl_lahir`, `ayah_negara`, `ayah_agama`, `ayah_hp`, `ayah_pend_terakhir`, `ayah_pekerjaan`, `ayah_penghasilan`, `ayah_nama_ibu`, `ibu_nama`, `ibu_nik`, `ibu_tmp_lahir`, `ibu_tgl_lahir`, `ibu_negara`, `ibu_agama`, `ibu_hp`, `ibu_pend_terakhir`, `ibu_pekerjaan`, `ibu_penghasilan`, `ibu_nama_ibu`, `pengguna_id`) VALUES
(1, 'nama ayah', '9219999999999999', 'Tmp Lahir Ayah', '2021-11-04', 'negara ayah', 'Kristen Protestan', '6282248577297', 'Tidak Sekolah', 'ayah kerja', '2.000.000', 'ibu ayah', 'nama ibu', '9129999999999999', 'tmp Lahir ibu', '2021-11-05', 'negara ibu', 'Kristen Katolik', '082398748896', 'SD Sederajat', 'ibu kerja', '1.000.000', 'ibu ibu', 1),
(4, 'nama', '9219999999999999', 'Tmp Lahir Ayah', '2021-11-04', 'negara ayah', 'Kristen Protestan', '6282248577297', 'Tidak Sekolah', 'ayah kerja', '2.000.000', 'ibu ayah', 'nama ibu', '9129999999999999', 'tmp Lahir ibu', '2021-11-05', 'negara ibu', 'Kristen Katolik', '082398748896', 'SD Sederajat', 'ibu kerja', '1.000.000', 'ibu ibu', 1),
(5, 'Eka Saputra', '12312', '1312', '2021-11-07', '123', 'Islam', '123', 'Tidak Sekolah', '123', '123', '123', '123', '123', '123', '2021-11-08', '123', 'Kristen Protestan', '123', 'SD Sederajat', '123', '123', '123', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `level` enum('Admin','Siswa') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `nama_lengkap`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', '$2y$10$M514AKRQOTIpASqe2IQyH.lR.dfF5qx4hgUfLrfncx0Xl3dIzb.ZK', 'Admin'),
(2, 'Eka Saputra', 'user', '$2y$10$DvWUZrpKUtUgsz.d/rnNDOQEqOruBGMQ8Nh/CThA0kd7rJnFh1zF.', 'Admin'),
(5, 'Eka Saputra', '123456', '$2y$10$ci6SzrBen7MVkOZamybble./srvkZoDdh8y703Q9FVk/NI.Aw6d0e', 'Siswa'),
(6, 'Eka Saputra', '654321', '$2y$10$LgmoZsRaWyeRXbX1N4IumurerrAMHk13pyZmovYmZWlGAWSyeN5Jq', 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `idprofil_sekolah` int(11) NOT NULL,
  `nama` varchar(128) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `website` varchar(64) DEFAULT NULL,
  `telp` varchar(16) DEFAULT NULL,
  `prov` varchar(64) DEFAULT NULL,
  `kab` varchar(64) DEFAULT NULL,
  `kode_pos` varchar(5) DEFAULT NULL,
  `logo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`idprofil_sekolah`, `nama`, `email`, `alamat`, `website`, `telp`, `prov`, `kab`, `kode_pos`, `logo`) VALUES
(1, 'PENDIDIKAN TK PAUD KIDS HOLISTIK', 'sekolah@gmail.com', 'Jl. Trikora Sowi II, Distrik Manokwari Selatan, Kabupaten Manokwari, Provinsi Papua Barat', '-', '0980000000', 'Papua Barat', 'Manokwari', '98312', 'c16b7fb66afe08cb2843c47eaa12cec2.png');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `idsiswa` int(11) NOT NULL,
  `orang_tua_id` int(11) NOT NULL,
  `no_kk` varchar(32) DEFAULT NULL,
  `nik` varchar(32) DEFAULT NULL,
  `nama_alias` varchar(32) DEFAULT NULL,
  `nama_lengkap` varchar(128) DEFAULT NULL,
  `jk` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(64) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `no_akta` varchar(32) DEFAULT NULL,
  `agama` enum('Islam','Kristen Protestan','Kristen Katolik','Hindu','Budha','Konghucu') DEFAULT NULL,
  `warga_negara` varchar(64) DEFAULT NULL,
  `anak_ke` int(11) DEFAULT NULL,
  `sdr_kandung` int(11) DEFAULT NULL,
  `jml_orang` int(11) DEFAULT NULL,
  `tinggi_badan` int(11) DEFAULT NULL,
  `berat_badan` int(11) DEFAULT NULL,
  `alamat` varchar(256) DEFAULT NULL,
  `jarak_sekolah` varchar(32) DEFAULT NULL,
  `berat_lahir` int(11) DEFAULT NULL,
  `h_penyakit` varchar(256) DEFAULT NULL,
  `alergi` varchar(128) DEFAULT NULL,
  `k_khusus` varchar(128) DEFAULT NULL,
  `kelas` varchar(32) DEFAULT NULL,
  `u_baju` varchar(16) DEFAULT NULL,
  `no_daftar` varchar(16) DEFAULT NULL,
  `status` enum('Baru','Diterima','Ditolak') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`idsiswa`, `orang_tua_id`, `no_kk`, `nik`, `nama_alias`, `nama_lengkap`, `jk`, `tmp_lahir`, `tgl_lahir`, `no_akta`, `agama`, `warga_negara`, `anak_ke`, `sdr_kandung`, `jml_orang`, `tinggi_badan`, `berat_badan`, `alamat`, `jarak_sekolah`, `berat_lahir`, `h_penyakit`, `alergi`, `k_khusus`, `kelas`, `u_baju`, `no_daftar`, `status`) VALUES
(1, 4, '1', '3', NULL, 'Eka Saputra', 'P', '4', '2021-11-05', '5', 'Kristen Katolik', 'Indonesia', 7, 8, 9, 10, 11, '12', 'Antara 10 - 15 KM', 13, '14', '15', '16', '17', '18', '1636245055', 'Diterima'),
(2, 1, '1', '3', NULL, 'Eka Saputra', 'P', '4', '2021-11-05', '5', 'Kristen Protestan', 'Indonesia', 7, 8, 9, 10, 11, '12', 'Antara 10 - 15 KM', 13, '14', '15', '16', '17', '18', '1636245069', 'Diterima'),
(3, 1, '1', '3', NULL, 'Eka Saputra', 'L', '4', '2021-11-05', '5', 'Islam', 'Indonesia', 7, 8, 9, 10, 11, '12', 'Antara 10 - 15 KM', 13, '14', '15', '16', '17', '18', '1636245081', 'Ditolak'),
(4, 5, '123', '123', '321', '123', 'L', '123', '2021-11-07', '123', 'Kristen Protestan', '123', 123, 123, 123, 123, 13, '123', 'Kurang Dari 1 KM', 13, '123', '123', '123', '123', '123', '1636264719', 'Baru');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`iddokumen`),
  ADD KEY `fk_dokumen_siswa1_idx` (`siswa_id`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`idorang_tua`),
  ADD KEY `fk_orang_tua_pengguna1_idx` (`pengguna_id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`idprofil_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`idsiswa`),
  ADD KEY `fk_siswa_orang_tua1_idx` (`orang_tua_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `iddokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `idorang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `idpengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `idprofil_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `idsiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD CONSTRAINT `fk_dokumen_siswa1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`idsiswa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `fk_orang_tua_pengguna1` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`idpengguna`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_orang_tua1` FOREIGN KEY (`orang_tua_id`) REFERENCES `orang_tua` (`idorang_tua`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
