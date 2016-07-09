-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2016 at 07:25 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sembarang`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1467006531),
('m130524_201442_init', 1467006534);

-- --------------------------------------------------------

--
-- Table structure for table `progdi`
--

CREATE TABLE `progdi` (
  `kd_progdi` int(11) NOT NULL,
  `nama_progdi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `progdi`
--

INSERT INTO `progdi` (`kd_progdi`, `nama_progdi`) VALUES
(69, 'S1 - DKV Desain Grafis'),
(70, 'S1 - Pendidikan Teknik Informatika dan Komputer'),
(6701, 'S1 - Teknik Informatika Jaringan'),
(6702, 'S1 - Teknik Informatika Web Engineering'),
(6703, 'S1 - Teknik Informatika Mobile Development'),
(6801, 'S1 - Sistem Informasi Manajemen'),
(6802, 'S1 - Sistem Informasi Pariwisata'),
(6803, 'S1 - Sistem Informasi Akuntansi'),
(6901, 'S1 - DKV Multimedia'),
(6902, 'S1 - DKV Pengembangan Game');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `kd_dosen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`kd_dosen`, `nama`, `username`, `password`) VALUES
(0, '-', '-', '-'),
(1604, 'Elizabeth Sri Lestari, S.Pd., M.LIS.', 'Elizabeth', 'elizabeth'),
(10005, 'Dra. Lina Sinatra, M.A', 'Lina', 'lina'),
(10009, 'Titi Susilowati nDoen, S.Pd., MA., Ph.D.', 'Titi', 'titi'),
(10023, 'Rini Kartika Hudiono, S.Pd., MA.', 'Rini', 'rini'),
(10503, 'Drs. Prihanto Ngesti Basuki, M.Kom.', 'Prihanto', 'prihanto'),
(55002, 'Ir. Christ Rudianto, MT.', 'Christ', 'christ'),
(55902, 'Titin Pranoto, SE., M.Si.', 'Titin', 'titin'),
(55904, 'Endang Haryani, SE, MMSI.', 'Endang', 'endang'),
(55905, 'Ariya Dwika Cahyono, S.Kom., MT.', 'Ariya', 'ariya'),
(55906, 'Evi Maria, SE., Macc., Ak.', 'Evi', 'evi'),
(55907, 'Purwanto, SE.', 'Purwanto', 'purwanto'),
(55909, 'Sri Winarso Martyas Edi, S.Kom.', 'SriW', 'sriw'),
(56907, 'Budhi Kristianto, S.Kom., M.Sc.', 'Budhi', 'budhi'),
(59901, 'Rini Darmastuti, S.Sos., M.Si', 'Rini', 'rini'),
(59903, 'George Nikolas Huwae, S.Pd., M.I.Kom.', 'GeorgeN', 'georgen'),
(67001, 'Prof. Ir. Danny Manongga, M.Sc., Ph.D.', 'Danny', 'danny'),
(67002, 'M. A. Ineke Pakereng, M.Kom.', 'Ineke', 'ineke'),
(67003, 'Prof. Dr. Ir. Eko Sediyono, M.Kom.', 'Eko', 'eko'),
(67004, 'Kristoko Dwi Hartomo, M.Kom.', 'Kristoko', 'kristoko'),
(67005, 'Felix David, S.Kom.', 'Felix', 'felix'),
(67006, 'Dr. Dharmaputera Palekahelu, M.Pd.', 'Dharmaputera', 'dharmaputera'),
(67501, 'Theophillus Herman Wellem, ST., MS.', 'Theophillus', 'theophillus'),
(67502, 'Dr. Ir. Wiranto H. Utomo, M.Kom.', 'Wiranto', 'wiranto'),
(67503, 'Teguh Wahyono, S.Kom., M.Cs.', 'Teguh', 'teguh'),
(67505, 'Yugowati Praharsi, S.Si., MS.', 'Yugowati', 'yugowati'),
(67506, 'Sri Yulianto Joko Prasetyo, S.Si., M.Kom.', 'SriY', 'sriy'),
(67507, 'Wiwin Sulistyo, ST., M.Kom.', 'Wiwin', 'wiwin'),
(67508, 'T. Arie Setiawan Prasida, ST., M.Cs.', 'Arie', 'arie'),
(67509, 'Andeka Rocky Tanaamah, SE., M.Cs.', 'Andeka', 'andeka'),
(67510, 'Yani Rahardja, SE., MM.', 'Yani', 'yani'),
(67511, 'Krismiyati, S.Pd., MA.', 'Krismiyati', 'krismiyati'),
(67512, 'Irwan Sembiring, ST., M.Kom.', 'Irwan', 'irwan'),
(67513, 'Hindriyanto D. Purnomo, ST., MS.', 'Hindriyanto', 'hindriyanto'),
(67514, 'Johan Tambotoh, SE., MTI.', 'Johan', 'johan'),
(67515, 'Adi Nugroho, ST., MMSI.', 'Adi', 'adi'),
(67517, 'Dra. Ade Iriani, MM.', 'Ade', 'ade'),
(67521, 'Hendro Steven Tampake, S.Kom.', 'Hendro', 'hendro'),
(67522, 'Frederik Samuel Papilaya, S.Kom., M.Cs.', 'Frederik', 'frederik'),
(67523, 'Indrastanti Ratna Widiasari, MT.', 'Indrastanti', 'indrastanti'),
(67524, 'Yessica Nataliani, S.Si., M.Kom. ', 'Yessica', 'Yessica'),
(67525, 'Jasson Prestiliano, ST., M.Cs.', 'Jasson', 'jasson'),
(67528, 'Rudy Latuperissa, S.E., M.Cs.', 'Rudy', 'rudy'),
(67529, 'Amelia Rukmasari, S.Sn.', 'Amelia', 'amelia'),
(67530, 'Dian W. Chandra, S.Kom., M.Cs.', 'Dian', 'dian'),
(67531, 'Anthony Y. M. Tumimomor, S.Kom., M.Cs.', 'Anthony', 'anthony'),
(67532, 'Yos Richard Beeh, S.T.', 'Yos', 'yos'),
(67533, 'Angela Atik Setiyanti, S.Pd.', 'Angela', 'angela'),
(67534, 'Michael Bezaleel, S.Kom., M.Cs.', 'Michael', 'michael'),
(67535, 'George J. L. Nikijuluw, S.Pd.', 'GeorgeJ', 'georgej'),
(67536, 'Martin Setyawan, ST.', 'Martin', 'martin'),
(67537, 'Augie David Manuputty, S.Kom., M.Cs.', 'Augie', 'augie'),
(67538, 'Birmanti Setia Utami, S.Sn.', 'Birmanti', 'birmanti'),
(67544, 'Agustinus Fritz Wijaya, S.Kom., M.Cs.', 'Agustinus', 'agustinus'),
(67545, 'Suprihadi, S.Si., M.Kom.', 'Suprihadi', 'suprihadi'),
(67547, 'Yesaya Sandang, SH., M.Hum.', 'Yesaya', 'yesaya'),
(67554, 'Teguh Indra Bayu, S.Kom.', 'Teguh', 'teguh'),
(67555, 'Hendry, M.Kom.', 'Hendry', 'hendry'),
(67557, 'Adriyanto Juliastomo Gundo, S.Si., M.Pd.', 'Adriyanto', 'adriyanto'),
(67559, 'Mila Chrismawati Paseleng, S.Si., M.Pd.', 'Mila', 'mila'),
(67560, 'Charitas Fibriani,S.Kom., M.Eng.', 'Charitas', 'charitas'),
(67561, 'Ramos Somya, S.Kom.', 'Ramos', 'ramos'),
(67564, 'Alz Danny Wowor, S.Si., M.Cs', 'Alz', 'alz'),
(67565, 'Radius tanone, S.Kom., M.Cs.', 'Radius', 'radius'),
(67567, 'Widya Damayanti, S.Pd., M.Sc.', 'Widya', 'widya'),
(67802, 'Yerik Singgalen, S.SI.', 'Yerik', 'yerik'),
(67909, 'Christine Dewi, S.Kom., M.Cs.', 'Christine', 'christine'),
(67920, 'Evangs Mailoa, S.Kom., M.Cs.', 'Evangs', 'evangs'),
(67941, 'Richard G. Mayopu S.Sos., M.Si	', 'Richard', 'richard'),
(67990, 'Ir.Rudi Waluyo Spd.i', 'rudi', 'rudi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` int(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `progdi` int(11) NOT NULL,
  `judul` text NOT NULL,
  `pembimbing_1` int(11) NOT NULL,
  `pembimbing_2` int(11) NOT NULL,
  `foto` int(11) DEFAULT NULL,
  `catatan` text,
  `keterangan` text,
  `ipk` float NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum diverifikasi',
  `artikeljurnal` int(11) DEFAULT NULL,
  `cdaplikasi` int(11) DEFAULT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `sertifikat_profesi` int(11) DEFAULT NULL,
  `point_card` int(11) DEFAULT NULL,
  `periode` varchar(100) DEFAULT NULL,
  `sks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `no_telp`, `progdi`, `judul`, `pembimbing_1`, `pembimbing_2`, `foto`, `catatan`, `keterangan`, `ipk`, `status`, `artikeljurnal`, `cdaplikasi`, `tempat_lahir`, `tanggal_lahir`, `sertifikat_profesi`, `point_card`, `periode`, `sks`) VALUES
(69200870, 'Stefani Setiawan', '0298 321396', 69, 'Perancangan Gendis Arumanis dengan Metode SWOT\r\n', 67555, 0, 1, 'Berkas Sudah Lengkap', 'Dapat Maju Ujian', 3, '1', 1, 1, 'Semarang', '1992-12-19', 1, 1, '2012', 140),
(672008052, 'Valencia Tjahjono', '085641009321', 6703, 'Pembuatan Media Pembelajaran Dasar Bahasa Korea menggunakan AndEngine Berbasis Android\r\n', 67004, 67561, NULL, NULL, NULL, 3.23, 'Belum diverifikasi', NULL, NULL, 'Bandung', '1994-06-13', NULL, NULL, '2/2011-2012', 0),
(672011211, 'Agung Haryono', '0873472728002', 70, 'Rahasia Awet muda', 55907, 0, NULL, NULL, NULL, 3.13, 'Belum diverifikasi', NULL, NULL, 'Salatiga', '1991-12-19', NULL, NULL, '2011', 141),
(682006048, 'Elia Laemba', '0999777777', 6801, 'Perancangan Sistem Informasi Persediaan Pada Perusahaan Distributor. (Studi Kasus : PT. Aneka Raya)\r\n\r\n\r\n', 67001, 67544, NULL, NULL, NULL, 3.23, 'Belum diverifikasi', NULL, NULL, 'Ulu Watu', '1993-06-28', NULL, NULL, '1/2011-2012', 143),
(682007068, 'Sadrakh Purnama Graha', '085670099', 6802, 'Sistem Informasi Distribusi yang Di Integrasikan dengan Google Map API (Studi Kasus : Sari Pangan Makmur).\r\n\r\n\r\n', 67555, 0, NULL, NULL, NULL, 3.4, 'Belum diverifikasi', NULL, NULL, 'Ulu Watu', '1994-07-12', NULL, NULL, '1/2010-2011', 0),
(692008023, 'Julie Christie Herliem', '085290911995', 6901, 'Perancangan Buku Panduan Perkuliahan Dengan Ilustrasi Tokoh Perwayangan dan Teknik Pop-Up Sebagai Penunjang Desain\r\n', 59901, 55904, NULL, NULL, NULL, 3.45, 'Belum diverifikasi', NULL, NULL, 'Semarang ', '1990-03-16', NULL, NULL, '2012', 139),
(692008801, 'Maryshela King', '081805888739', 69, 'Perancangan Corporate Identity ODDS Denim dan Pengaplikasianya Pada Media Ramah Lingkungan\r\n', 67561, 67535, NULL, NULL, NULL, 3.13, 'Belum diverifikasi', NULL, NULL, 'Tangerang', '1993-01-12', NULL, NULL, '1/2010-2011', 140);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ujian`
--

CREATE TABLE `tb_ujian` (
  `nim` int(11) NOT NULL,
  `penguji_1` int(11) NOT NULL,
  `penguji_2` int(11) NOT NULL,
  `nilai` float DEFAULT NULL,
  `hari` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `ruang` varchar(100) DEFAULT NULL,
  `periode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ujian`
--

INSERT INTO `tb_ujian` (`nim`, `penguji_1`, `penguji_2`, `nilai`, `hari`, `tanggal`, `jam_mulai`, `jam_selesai`, `ruang`, `periode`) VALUES
(69200870, 10009, 10023, NULL, 3, '2016-07-05', '08:00:00', '09:30:00', 'LTC', 2013),
(672008052, 67506, 0, NULL, 5, '2016-07-06', '11:00:00', '12:30:00', 'Runag Rapat Lt 2', 2013),
(682006048, 67511, 67508, NULL, 4, '2016-07-07', '10:00:00', '11:30:00', 'Ruang Rapat lt 3', 2013);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'jNBNL_gMQqbtb3tlDn41fRkgOxkO0c3J', '$2y$13$FHv8NtnQRmCjDds44GTQauPcEvjglO8sff4li9Rd2kYfQ57dSjbm.', NULL, 'admin123@gmail.com', 10, 1467398057, 1467398057),
(2, 'mahasiswa', '8wCML0vNuaAwcfwUB1GadapkpgEwFLSx', '$2y$13$NS39I0pEn.wlWQDlsIr9PO5PsBooiRy4ryX3N1JWsfmHO9OMhKz7S', NULL, 'mahasiswa@gmail.com', 10, 1467398735, 1467398735);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `progdi`
--
ALTER TABLE `progdi`
  ADD PRIMARY KEY (`kd_progdi`),
  ADD UNIQUE KEY `kd_progdi` (`kd_progdi`);

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`kd_dosen`),
  ADD UNIQUE KEY `kd_dosen` (`kd_dosen`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `pembimbing_1` (`pembimbing_1`),
  ADD KEY `pembimbing_2` (`pembimbing_2`);

--
-- Indexes for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `penguji_2` (`penguji_2`),
  ADD KEY `penguji_1` (`penguji_1`),
  ADD KEY `nim` (`nim`),
  ADD KEY `penguji_1_2` (`penguji_1`),
  ADD KEY `penguji_2_2` (`penguji_2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD CONSTRAINT `tb_mahasiswa_ibfk_1` FOREIGN KEY (`pembimbing_1`) REFERENCES `tb_dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mahasiswa_ibfk_2` FOREIGN KEY (`pembimbing_2`) REFERENCES `tb_dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_ujian`
--
ALTER TABLE `tb_ujian`
  ADD CONSTRAINT `tb_ujian_ibfk_3` FOREIGN KEY (`nim`) REFERENCES `tb_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ujian_ibfk_4` FOREIGN KEY (`penguji_1`) REFERENCES `tb_dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_ujian_ibfk_5` FOREIGN KEY (`penguji_2`) REFERENCES `tb_dosen` (`kd_dosen`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
