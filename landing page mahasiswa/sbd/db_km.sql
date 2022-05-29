-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 11:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_km`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `join_program`
--

CREATE TABLE `join_program` (
  `id_mhs` int(11) NOT NULL,
  `id_program` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kontrak`
--

CREATE TABLE `kontrak` (
  `id_mhs` int(11) DEFAULT NULL,
  `id_matkul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_program` int(11) DEFAULT NULL,
  `id_matkul` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(11) NOT NULL,
  `nim` varchar(255) DEFAULT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `prodi` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `jumlah_sks` int(11) DEFAULT NULL,
  `tahun_daftar` int(11) DEFAULT NULL,
  `bukti_lolos` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `status` varchar(11) DEFAULT '',
  `id_PA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(255) DEFAULT NULL,
  `nama_matkul` varchar(255) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`, `sks`) VALUES
(1, 'IK501', 'Pengujian dan Pemeliharaan Perangkat Lunak', 2),
(2, 'IK511', 'Rekayasa Aplikasi Kemaritiman', 2),
(3, 'IK521', 'Service Computing Engineering', 2),
(4, 'IK531', 'Game Application Development', 2),
(5, 'IK541', 'Teknik Interfacing', 3),
(6, 'IK551', 'Manajemen Kualitas Perangkat Lunak', 3),
(7, 'IK561', 'Rekayasa Aplikasi Bisnis', 2),
(8, 'IK571', 'Rekayasa Informasi', 3),
(9, 'IK581', 'Software Quality Assurance', 2),
(10, 'IK591', 'Teknik Kompilasi', 3),
(11, 'IK502', 'Pengolahan Citra Digital', 2),
(12, 'IK512', 'Intelligent Games', 2),
(13, 'IK522', 'Pengolahan Bahasa Alami', 2),
(14, 'IK532', 'Deep Learning', 3),
(15, 'IK542', 'Computer Vision', 2),
(16, 'IK552', 'Internet of Things', 2),
(17, 'IK562', 'Kontrol dan Robotika', 3),
(18, 'IK572', 'Expert System', 3),
(19, 'IK582', 'Speech Recognition and Synthesis', 3),
(20, 'IK340', 'Sistem Cerdas', 2),
(21, 'IK503', 'Teknik Audio dan Video', 2),
(22, 'IK513', 'Game Programming', 2),
(23, 'IK523', 'Visual Communication Design', 2),
(24, 'IK533', 'Audio and Video Manipulation', 2),
(25, 'IK543', 'Multimedia Production', 3),
(26, 'IK553', 'Sosial dan Inovasi Media', 2),
(27, 'IK563', 'Teknik Animasi', 3),
(28, 'IK573', 'Open Distance Learning', 3),
(29, 'IK504', 'Mobile Networking', 2),
(30, 'IK514', 'Teknologi Cloud', 2),
(31, 'IK524', 'Administrasi Jaringan', 2),
(32, 'IK534', 'Teknologi Nirkabel', 3),
(33, 'IK544', 'Komputer Forensik', 2),
(34, 'IK554', 'Desain Jaringan Telekomunikasi', 2),
(35, 'IK564', 'Keamanan Sistem Informasi', 3),
(36, 'IK574', 'Jaringan Komputer Lanjut', 3),
(37, 'IK515', 'Computational Statistics', 2),
(38, 'IK525', 'Sistem Pendukung Keputusan', 3),
(39, 'IK535', 'Data Visualization', 2),
(40, 'IK555', 'Data Analysis', 2),
(41, 'IK565', 'Time Series Data Analysis', 2),
(42, 'IK575', 'Data Management', 2),
(43, 'IK585', 'Financial Technology', 3),
(44, 'IK370', 'Teknik Simulasi dan Pemodelan', 2),
(45, 'IK506', 'Perencanaan Strategik Sistem Informasi', 3),
(46, 'IK516', 'Arsitektur dan Integrasi Aplikasi Perusahaan', 2),
(47, 'IK526', 'Sistem Informasi Akuntansi', 2),
(48, 'IK536', 'Sistem Informasi Pendidikan', 3),
(49, 'IK546', 'Audit Sistem Informasi', 2),
(50, 'IK556', 'IT Infrastructure and Emerging Trends', 2),
(51, 'IK566', 'Business Intelligence', 2),
(52, 'IK576', 'Aplikasi Sistem Fungsi Bisnis', 2),
(53, 'IK586', 'Sistem Informasi Geografis', 3),
(54, 'IK530', 'Mobile Application Development', 3),
(55, 'IK510', 'Komputasi Paralel dan Terdistribusi', 3),
(56, 'IK350', 'Interaksi Manusia dan Komputer', 3),
(57, 'IK380', 'Basis Data Non Relational', 2),
(58, 'IK330', 'Manajemen Proyek Perangkat Lunak', 3),
(59, 'IK520', 'Project Keahlian', 3),
(60, 'KU108', 'Pendidikan Jasmani dan Olahraga/Pendidikan Kesenian *', 2),
(61, 'KU400', 'Kuliah Kerja Nyata', 2),
(62, 'IK120', 'Paradigma Pemrograman', 2),
(63, 'IK227', 'Teknik Riset Operasi', 2),
(64, 'IK190', 'Etika Profesi Teknologi Informasi dan Komunikasi', 2),
(65, 'IK140', 'Bahasa Inggris', 2),
(66, 'IK150', 'Statistika', 2),
(67, 'IK430', 'E-Business', 2),
(68, 'IK420', 'Seminar', 2),
(69, 'IK180', 'Aljabar Linier dan Matriks', 2),
(70, 'IK210', 'Metode Numerik', 2),
(71, 'IK410', 'Kewirausahaan Ilmu Komputer', 2),
(72, 'IK360', 'Kapita Selekta', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pa`
--

CREATE TABLE `pa` (
  `id_PA` int(11) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nama_PA` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pa`
--

INSERT INTO `pa` (`id_PA`, `nip`, `nama_PA`) VALUES
(1, '920200419930811201', 'Ani Anisyah, S.Pd., M.T.'),
(2, '197112232006041001', 'Dr. Asep Wahyudin, M.T.'),
(3, '197505152008011014', 'Eddy Prasetyo Nugroho, M.T.'),
(4, '198512202012122002', 'Enjun Junaeti, M.Si.'),
(5, '198607082018031001', 'Erlangga, MT'),
(6, '197005022008121001', 'Herbert Siregar, M.T.'),
(7, '197909292006041002', 'Dr. Muhammad Nursalman, \r\nM.T.'),
(8, '920200419891122201', 'Nusuki Syariati Fathimah, \r\nS.Pd., M.Pd.'),
(9, '198705242014042002', 'Dr. Rani Megasari, M.T'),
(10, '197407252006041002', 'Rasim, M.T.'),
(11, '197711252006041002', 'Rizky Rahman J., M.Kom. '),
(12, '198109182009122003', 'Rosa Ariani Sukamto, M.T.'),
(13, '199005302019031013', '199005302019031013'),
(14, '197507072003121003', 'Dr. Yudi Wibisono, M.T. '),
(15, '197809262008121001', 'Lala Septem Riza, Ph.D.');

-- --------------------------------------------------------

--
-- Table structure for table `program_km`
--

CREATE TABLE `program_km` (
  `id_program` int(11) NOT NULL,
  `nama_program` varchar(255) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `sks_konversi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_km`
--

INSERT INTO `program_km` (`id_program`, `nama_program`, `semester`, `sks_konversi`) VALUES
(1, 'Bangkit by Google, Goto, Traveloka', 5, 20),
(2, 'Indonesian Internasional Student Mobility Awards', 4, 20),
(3, 'Kampus Mengajar', 5, 20),
(4, 'Kementerian ESDM-GERILYA', 5, 20),
(5, 'Magang', 5, 20),
(6, 'Membangun Desa (KKN Tematik)', 5, 20),
(7, 'Pejuang Muda Kampus Merdeka', 5, 20),
(8, 'Pertukaran Mahasiswa Merdeka', 5, 20),
(9, 'Proyek Kemanusiaan ', 5, 20),
(10, 'Riset atau Penelitian', 5, 20),
(11, 'Studi Independen', 5, 20),
(12, 'Wirausaha', 5, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `join_program`
--
ALTER TABLE `join_program`
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_mhs` (`id_mhs`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id_program` (`id_program`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`),
  ADD KEY `id_PA` (`id_PA`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `pa`
--
ALTER TABLE `pa`
  ADD PRIMARY KEY (`id_PA`);

--
-- Indexes for table `program_km`
--
ALTER TABLE `program_km`
  ADD PRIMARY KEY (`id_program`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pa`
--
ALTER TABLE `pa`
  MODIFY `id_PA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `program_km`
--
ALTER TABLE `program_km`
  MODIFY `id_program` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `join_program`
--
ALTER TABLE `join_program`
  ADD CONSTRAINT `join_program_ibfk_1` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`),
  ADD CONSTRAINT `join_program_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program_km` (`id_program`);

--
-- Constraints for table `kontrak`
--
ALTER TABLE `kontrak`
  ADD CONSTRAINT `kontrak_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `kontrak_ibfk_2` FOREIGN KEY (`id_mhs`) REFERENCES `mahasiswa` (`id_mhs`);

--
-- Constraints for table `konversi`
--
ALTER TABLE `konversi`
  ADD CONSTRAINT `konversi_ibfk_1` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`),
  ADD CONSTRAINT `konversi_ibfk_2` FOREIGN KEY (`id_program`) REFERENCES `program_km` (`id_program`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_PA`) REFERENCES `pa` (`id_PA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
