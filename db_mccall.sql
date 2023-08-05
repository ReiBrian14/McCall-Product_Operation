-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 04:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mccall`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `correctness`
--

CREATE TABLE `correctness` (
  `id` int(11) NOT NULL,
  `id_correctness` varchar(10) NOT NULL,
  `nilai_completeness` float NOT NULL,
  `nilai_consistency` float NOT NULL,
  `nilai_treacebility` float NOT NULL,
  `nilai_correctness` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `correctness`
--

INSERT INTO `correctness` (`id`, `id_correctness`, `nilai_completeness`, `nilai_consistency`, `nilai_treacebility`, `nilai_correctness`, `persentase`, `kategori`) VALUES
(17, 'cor1', 5.23, 2.87, 1.4, 3.17, '63', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `efficiency`
--

CREATE TABLE `efficiency` (
  `id` int(11) NOT NULL,
  `id_efficiency` varchar(10) NOT NULL,
  `nilai_excution` float NOT NULL,
  `nilai_efficiency` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `efficiency`
--

INSERT INTO `efficiency` (`id`, `id_efficiency`, `nilai_excution`, `nilai_efficiency`, `persentase`, `kategori`) VALUES
(15, 'eff1', 2.57, 2.57, '51', 'Cukup Baik');

-- --------------------------------------------------------

--
-- Table structure for table `glue`
--

CREATE TABLE `glue` (
  `id` int(11) NOT NULL,
  `id_hasilakhir` int(11) DEFAULT NULL,
  `id_sumber` varchar(15) DEFAULT NULL,
  `tipe_sumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `glue`
--

INSERT INTO `glue` (`id`, `id_hasilakhir`, `id_sumber`, `tipe_sumber`) VALUES
(50, 22, 'Cor 01', 'correctness'),
(51, 22, 'Rel01', 'reliability'),
(52, 22, 'Eff01', 'efficiency'),
(53, 22, 'Int01', 'integrity'),
(54, 22, 'Usa01', 'usability'),
(56, 24, 'Cor02', 'correctness'),
(57, 24, 'Rel02', 'reliability'),
(58, 24, 'Eff02', 'efficiency'),
(59, 24, 'Int02', 'integrity'),
(60, 24, 'Usa02', 'usability'),
(61, 22, 'C01', 'correctness'),
(62, 22, 'R01', 'reliability'),
(63, 22, 'E01', 'efficiency'),
(64, 22, 'I01', 'integrity'),
(65, 22, 'U01', 'usability'),
(66, 27, 'crns1', 'correctness'),
(67, 27, 'reli1', 'reliability'),
(68, 27, 'efi1', 'efficiency'),
(69, 27, 'inte1', 'integrity'),
(70, 27, 'usa1', 'usability'),
(71, 29, 'cor1', 'correctness'),
(72, 29, 'rel1', 'reliability'),
(73, 29, 'eff1', 'efficiency'),
(74, 29, 'int1', 'integrity'),
(75, 29, 'usab1', 'usability');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_akhir`
--

CREATE TABLE `hasil_akhir` (
  `id` int(11) NOT NULL,
  `nama_hasil` varchar(255) DEFAULT NULL,
  `persentase` float DEFAULT 0,
  `kategory` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hasil_akhir`
--

INSERT INTO `hasil_akhir` (`id`, `nama_hasil`, `persentase`, `kategory`) VALUES
(26, 'Gym1', 0, ''),
(27, 'gym2', 0, ''),
(28, 'gym_exmp', 0, ''),
(29, 'reysstone_gym', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `indikator`
--

CREATE TABLE `indikator` (
  `id` int(11) NOT NULL,
  `id_indikator` varchar(5) NOT NULL,
  `indikator` varchar(25) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `indikator`
--

INSERT INTO `indikator` (`id`, `id_indikator`, `indikator`, `bobot`) VALUES
(1, 'IND01', 'Correctness', 0.3),
(2, 'IND02', 'Reliability', 0.2),
(3, 'IND03', 'Efficiency', 0.2),
(4, 'IND04', 'Integrity', 0.3),
(5, 'IND05', 'Usability', 0.3);

-- --------------------------------------------------------

--
-- Table structure for table `integrity`
--

CREATE TABLE `integrity` (
  `id` int(11) NOT NULL,
  `id_integrity` varchar(10) NOT NULL,
  `nilai_security` float NOT NULL,
  `nilai_integrity` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `integrity`
--

INSERT INTO `integrity` (`id`, `id_integrity`, `nilai_security`, `nilai_integrity`, `persentase`, `kategori`) VALUES
(14, 'int1', 2.06, 2.06, '41', 'Cukup Baik');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelayakan`
--

CREATE TABLE `kategori_kelayakan` (
  `id` int(11) NOT NULL,
  `id_kk` varchar(5) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `persentasi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori_kelayakan`
--

INSERT INTO `kategori_kelayakan` (`id`, `id_kk`, `kategori`, `persentasi`) VALUES
(1, 'KK05', 'Sangat Baik', '81% - 100%'),
(2, 'KK04', 'Baik', '61% - 80%'),
(3, 'KK03', 'Cukup Baik', '41% - 60%'),
(4, 'KK02', 'Tidak Baik', '21% - 40%'),
(5, 'KK01', 'Sangat Tidak Baik', '0% - 20%');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_penilaian` varchar(5) NOT NULL,
  `hasil` float NOT NULL,
  `kelayakan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_penilaian`, `hasil`, `kelayakan`) VALUES
('22', 89, 'Sangat Baik'),
('24', 89, 'Sangat Baik'),
('27', 68, 'Baik'),
('29', 68, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `id_pertanyaan` varchar(5) NOT NULL,
  `sub_indikator` varchar(20) NOT NULL,
  `pertanyaan` text NOT NULL,
  `bobot_pertanyaan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `id_pertanyaan`, `sub_indikator`, `pertanyaan`, `bobot_pertanyaan`) VALUES
(1, 'Per01', 'Completeness  ', 'Website ini mampu melalukan proses pengolahan data (Penampilan Data).', 0.4),
(2, 'Per02', 'Completeness ', 'Fitur-fitur yang terdapat pada sistem ini sudah berfungsi semua.', 0.4),
(3, 'Per03', 'Completeness  ', 'Ketersediaan informasi sesuai yang dibutuhkan dan up to date', 0.4),
(4, 'Per04', 'Consistency  ', 'Fitur dan desain form dan tombol di setiap halaman sama.', 0.2),
(5, 'Per05', 'Consistency ', 'Bahasa yang digunakan sudah konsisten pada setiap halaman.', 0.3),
(6, 'Per06', 'Consistency  ', 'Bentuk dan struktur pelaporan data sama', 0.2),
(7, 'Per07', 'Treaceability ', 'Website mampu melakukan pelacakan kesalahan pengguna.', 0.4),
(8, 'Per08', 'Communicativeness ', 'Bahasa yang digunakan mudah dipahami.', 0.4),
(9, 'Per09', 'Communicativeness  ', 'Tulisan dari setiap halaman dapat terbaca dengan jelas.', 0.4),
(10, 'Per10', 'Communicativeness ', 'Fungsi dari setiap tombol jelas.', 0.4),
(11, 'Per11', 'Operability ', 'Pilihan menu dan tombol pada sistem mudah digunakan.', 0.4),
(12, 'Per12', 'Operability ', 'Secara keseluruhan website dapat memberikan kepuasan dan kenyamanan terhadap pengguna.', 0.4),
(13, 'Per13', 'Operability  ', 'Website memberikan pengalaman positif (Menambah pengetahuan tentang produk / jasa lembaga).', 0.3),
(14, 'Per14', 'Training ', ' Ada layanan petunjuk yang disediakan oleh sistem guna membantu pengguna baru', 0.3),
(15, 'Per15', 'Security  ', 'Proses akses dapat berjalan dengan lancar dan sesuai harapan.', 0.3),
(16, 'Per16', 'Security ', 'Website dapat mengontrol akses pengguna dengan membatasi hak akses.', 0.3),
(17, 'Per17', 'Accuracy ', 'Kebutuhan pengguna ditampilkan dengan tepat', 0.4),
(18, 'Per18', 'Accuracy ', 'Informasi dan data yang disediakan sesuai dengan kebutuhan pengguna dengan cepat.', 0.3),
(19, 'Per19', 'Accuracy ', 'Informasi dari website ini akurat dan bebas kesalahan.', 0.4),
(20, 'Per20', 'Accuracy ', 'Pengguna dapat memperoleh informasi yang dibutuhkan dalam waktu yang tepat.', 0.4),
(21, 'Per21', 'Error Tolerancy ', 'Akses ke web dan data tidak bisa digunakan oleh pihak yang tidak berhak untuk menggunakannya.', 0.4),
(22, 'Per22', 'Simplicity ', 'Informasi yang ada pada website mudah dipahami.', 0.3),
(23, 'Per23', 'Simplicity ', 'Menu yang ada pada website ini dapat dengan mudah dipahami tanpa ada kesulitan.', 0.4),
(24, 'Per24', 'Execution Efficiency', 'Effisiensi waktu yang dibutuhkan website dalam memproses data dan menyajikan informasi.', 0.3),
(25, 'Per25', 'Execution Efficiency', 'Menu layanan fungsi dan datanya sudah sesuai dengan kebutuhan.', 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `reliability`
--

CREATE TABLE `reliability` (
  `id` int(11) NOT NULL,
  `id_reliability` varchar(10) NOT NULL,
  `nilai_accuracy` float NOT NULL,
  `nilai_errortolerancy` float NOT NULL,
  `nilai_simplicity` float NOT NULL,
  `nilai_reliability` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reliability`
--

INSERT INTO `reliability` (`id`, `id_reliability`, `nilai_accuracy`, `nilai_errortolerancy`, `nilai_simplicity`, `nilai_reliability`, `persentase`, `kategori`) VALUES
(15, 'rel1', 5.31, 1.2, 2.78, 3.1, '62', 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `sub_indikator`
--

CREATE TABLE `sub_indikator` (
  `id` int(11) NOT NULL,
  `id_sub` varchar(5) NOT NULL,
  `id_indikator` varchar(10) NOT NULL,
  `indikator` varchar(15) NOT NULL,
  `sub_indikator` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_indikator`
--

INSERT INTO `sub_indikator` (`id`, `id_sub`, `id_indikator`, `indikator`, `sub_indikator`) VALUES
(1, 'SUB01', 'ID1', 'Correctness', 'Completeness'),
(2, 'SUB10', 'ID5', 'Usability', 'Operability'),
(3, 'SUB11', 'ID5', 'Usability', 'Training'),
(4, 'SUB02', 'ID1', 'Correctness', 'Consistency'),
(5, 'SUB03', 'ID1', 'Correctness', 'Treaceability'),
(6, 'SUB04', 'ID2', 'Reliability', 'Accuracy'),
(7, 'SUB05', 'ID2', 'Reliability', 'Error Tolerancy'),
(8, 'SUB06', 'ID2', 'Reliability', 'Simplicity'),
(9, 'SUB07', 'ID3', 'Efficiency', 'Execution Efficiency'),
(10, 'SUB08', 'ID4', 'Integrity', 'Security'),
(11, 'SUB09', 'ID5', 'Usability', 'Communicativeness');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bobot`
--

CREATE TABLE `tbl_bobot` (
  `id` int(11) NOT NULL,
  `id_bobot` varchar(5) NOT NULL,
  `bobot` float NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_bobot`
--

INSERT INTO `tbl_bobot` (`id`, `id_bobot`, `bobot`, `keterangan`) VALUES
(1, 'BBT01', 0.1, 'Sangat Tidak Penting'),
(2, 'BBT02', 0.2, 'Tidak Penting'),
(3, 'BBT03', 0.3, 'Penting'),
(4, 'BBT04', 0.4, 'Sangat Penting');

-- --------------------------------------------------------

--
-- Table structure for table `usability`
--

CREATE TABLE `usability` (
  `id` int(11) NOT NULL,
  `id_usability` varchar(10) NOT NULL,
  `nilai_communicativeness` float NOT NULL,
  `nilai_operability` float NOT NULL,
  `nilai_training` float NOT NULL,
  `nilai_usability` float NOT NULL,
  `persentase` varchar(10) NOT NULL,
  `kategori` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usability`
--

INSERT INTO `usability` (`id`, `id_usability`, `nilai_communicativeness`, `nilai_operability`, `nilai_training`, `nilai_usability`, `persentase`, `kategori`) VALUES
(10, 'Usa01', 6.34, 4.87, 1.6, 4.27, '85', 'Sangat Baik'),
(11, 'Usa02', 6.34, 4.87, 1.6, 4.27, '85', 'Sangat Baik'),
(12, 'U01', 6, 4, 1.6, 3.87, '77', 'Baik'),
(13, 'usa1', 4.98, 4.54, 0.98, 3.5, '70', 'Baik'),
(14, 'usab1', 4.98, 4.54, 0.98, 3.5, '70', 'Baik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `correctness`
--
ALTER TABLE `correctness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `efficiency`
--
ALTER TABLE `efficiency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glue`
--
ALTER TABLE `glue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `indikator`
--
ALTER TABLE `indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `integrity`
--
ALTER TABLE `integrity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reliability`
--
ALTER TABLE `reliability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_indikator`
--
ALTER TABLE `sub_indikator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usability`
--
ALTER TABLE `usability`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `correctness`
--
ALTER TABLE `correctness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `efficiency`
--
ALTER TABLE `efficiency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `glue`
--
ALTER TABLE `glue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `indikator`
--
ALTER TABLE `indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `integrity`
--
ALTER TABLE `integrity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori_kelayakan`
--
ALTER TABLE `kategori_kelayakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `reliability`
--
ALTER TABLE `reliability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sub_indikator`
--
ALTER TABLE `sub_indikator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_bobot`
--
ALTER TABLE `tbl_bobot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usability`
--
ALTER TABLE `usability`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
