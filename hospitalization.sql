-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2016 at 12:33 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospitalization`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mitra_bekasi`
--

CREATE TABLE IF NOT EXISTS `doctor_mitra_bekasi` (
  `no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_mitra_bekasi`
--

INSERT INTO `doctor_mitra_bekasi` (`no`, `name`, `specialist`, `hospital`, `address`) VALUES
(1, 'Dr. A. Rahim Lambona', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(2, 'Dr. A.Imron, Sp.An', 'Poli Anestesi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(3, 'Dr. Adi Mirsa P., Sp', 'THT', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(4, 'Dr. Agustinus Gatot,', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(5, 'Dr. Amir Santoso, Sp', 'THT', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(6, 'Dr. Anthony Atmadja,', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(7, 'Dr. Anthony D. Tulak', 'Paru &amp; Asma', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(8, 'Dr. Bastian, Sp.S', 'Saraf', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(9, 'Dr. Basuki Sudaryant', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(10, 'Dr. Budi  SH Gultom,', 'Bedah Umum', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(11, 'Dr. Budi Raharjo, Sp', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(12, 'Dr. Dewi Permatasari', 'Akupunktur, Klinik A', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(13, 'Dr. Djaelani, Sp.An', 'Poli Anestesi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(14, 'Dr. dr. Dody Ranuhar', 'Darah &amp; Kanker', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(15, 'Dr. Dwi Ajeng Rembul', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(16, 'Dr. Dwi Santy, Sp.OG', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(17, 'Dr. Eni Nuryani, Sp.', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(18, 'Dr. Entjeng Hidayat,', 'Saluran Kemih', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(19, 'Dr. Etty Aminah, Sp.', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(20, 'Dr. Faris Basalamah,', 'Jantung &amp; Pembul', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(21, 'Dr. Ferdy Limengka, ', 'Bedah Umum', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(22, 'Dr. Gatot Purwoto, S', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(23, 'Dr. Hadi S.M, MS, Sp', 'Gizi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(24, 'Dr. Hario Untoro, Sp', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(25, 'Dr. Harjanto E., Sp.', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(26, 'Dr. Harminayanti, MA', '', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(27, 'Dr. Hartoyo, Sp.An', 'Poli Anestesi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(28, 'Dr. Herman Trisdiant', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(29, 'Dr. Herman Wihandojo', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(30, 'Dr. Heru Sobiran, Sp', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(31, 'Dr. Himawan Wijoyo H', 'THT', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(32, 'Dr. Inawati, Sp.RM', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(33, 'Dr. Irwanto Husada, ', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(34, 'Dr. J. Indrajana, Sp', 'Mata', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(35, 'Dr. Jadaru Pudjiwati', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(36, 'Dr. Joyce Setyawati,', 'Mata', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(37, 'Dr. Kasnawi', '', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(38, 'Dr. Kim Sudarsono, S', 'Paru &amp; Asma', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(39, 'Dr. Kosasih Yusuf, S', 'THT', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(40, 'Dr. Kunkun Achmad M.', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(41, 'Dr. Kusmarwati, Sp.B', 'Bedah Plastik', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(42, 'Dr. L. Meilina Pudji', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(43, 'Dr. Lidya Liliana, S', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(44, 'Dr. Linnie Pranadjaj', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(45, 'Dr. M. Djamal A. Has', 'Jantung &amp; Pembul', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(46, 'Dr. M. Ma’mun, Sp.JP', 'Jantung &amp; Pembul', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(47, 'Dr. Maria Basir Djat', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(48, 'Dr. Maryun Wiriasuka', 'Bedah Umum', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(49, 'Dr. Med. Jimmy Sugih', 'Bedah Saraf', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(50, 'Dr. Mille Milasari, ', 'Bedah Umum', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(51, 'Dr. Mulyadi Serangan', 'Bedah Plastik', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(52, 'Dr. Nuzwar Noer, Sp.', 'THT', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(53, 'Dr. Olly Renaldi, Sp', 'Diabetes &amp; Endok', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(54, 'Dr. Petrus Fr. C. Ta', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(55, 'Dr. Qomaruddin Bausa', 'Bedah Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(56, 'Dr. Rachelia Salanti', '', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(57, 'Dr. Robert Loho, Sp.', 'Saraf', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(58, 'Dr. Santi Christiani', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(59, 'Dr. Santoso Chandra,', 'Ginjal &amp; Hiperte', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(60, 'Dr. Sengdy Chandra, ', 'Mata', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(61, 'Dr. Sugijarto, Sp.PD', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(62, 'Dr. Suijanta Kartadi', 'Bedah Digestif', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(63, 'Dr. Sumono H.,  Sp.O', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(64, 'Dr. Surachtono, Sp.A', 'Poli Anestesi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(65, 'Dr. Suwito Indra, Sp', 'Darah &amp; Kanker', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(66, 'Dr. Syamsu Hudaya, S', 'Saluran Kemih', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(67, 'Dr. Tisa Rori, Sp.A ', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(68, 'Dr. Titik Haryati Ha', 'Umum', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(69, 'Dr. Tito S., Sp.B, S', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(70, 'Dr. Tri Bowo Hasmoro', 'Andrologi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(71, 'Dr. Vaya Dasitania, ', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(72, 'Dr. Vico Lie Bing Ho', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(73, 'Dr. Vonny Indriati, ', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(74, 'Dr. Wim Panggar Besi', 'Tumor &amp; Kanker', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(75, 'Dr. Winarno, Sp.A', 'Anak', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(76, 'Dra. Destrina N., MA', 'Psikologi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(77, 'Drg. Aditya, Sp.Ort', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(78, 'Drg. Helmiyanis, Sp.', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(79, 'Drg. Robert Lessang,', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(80, 'Drg. Ronny Corputty,', 'Bedah Mulut', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(81, 'Drg. Sulistyowati', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(82, 'Drg. Syafril Gafar', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(83, 'Drg. Tita Agustia', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144'),
(84, 'Drg. Yura Muharsya', 'Gigi', 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mitra_bekasi_timur`
--

CREATE TABLE IF NOT EXISTS `doctor_mitra_bekasi_timur` (
  `no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialist` varchar(50) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_mitra_bekasi_timur`
--

INSERT INTO `doctor_mitra_bekasi_timur` (`no`, `name`, `specialist`, `hospital`, `address`) VALUES
(1, 'dr. Adang Sabarudin,', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(2, 'Dr. Agni Anastasia S', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(3, 'dr. Agustinus Gatot,', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(4, 'Dr. Albert Maramis, ', 'Psikiatri', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(5, 'dr. Andi Nurjihad, S', 'Paru &amp; Pernapasan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(6, 'dr. Andre Chandra  P', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(7, 'dr. Ardita Puspitade', 'Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(8, 'dr. Benedictus Vimal', 'THT', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(9, 'Dr. Budimulia Wullur', 'Akupunktur', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(10, 'dr. Chandra Satria I', 'Bedah Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(11, 'dr. Chrisdiono Meina', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(12, 'dr. Daniel Polhaupes', 'Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(13, 'Dr. Danny Ernest Jon', 'Patologi Anatomi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(14, 'dr. Data Putri Angka', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(15, 'dr. David Kristanto,', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(16, 'dr. Dina S. Daliyant', 'Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(17, 'Dr. Elia Semiarti, S', 'Radiologi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(18, 'Dr. Eni Nuryani, Sp.', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(19, 'Dr. Eric Prawiro, Sp', 'Anestesi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(20, 'dr. Erwin Surjana Se', 'Jantung &amp; Pembuluh Darah', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(21, 'dr. Esther H. Situme', 'Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(22, 'dr. Faris Basalamah,', 'Jantung &amp; Pembuluh Darah', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(23, 'dr. Ferdy Limengka, ', 'Bedah Umum', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(24, 'dr. Fritz Sumantri, ', 'Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(25, 'dr. Gunawan Effendi,', 'THT', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(26, 'dr. Gusti Ayu Putu Y', 'Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(27, 'dr. Hamdi Syarifudin', 'Paru &amp; Pernapasan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(28, 'dr. Hanif Gordang To', 'Bedah Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(29, 'Dr. Hendry Andi Sult', 'Anestesi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(30, 'dr. Herman Trisdiant', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(31, 'dr. Hildegardis Yeni', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(32, 'Dr. I Nyoman Mudasta', 'Anestesi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(33, 'Dr. I Nyoman Murdana', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(34, 'Dr. Indra Setia Huta', 'Patalogi Klinik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(35, 'dr. Irwansyah, SpS', 'Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(36, 'dr. Isman Firdaus, S', 'Jantung &amp; Pembuluh Darah', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(37, 'Dr. Ita Kartika, Sp.', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(38, 'dr. Ita Trisnawati, ', 'Mata', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(39, 'dr. Joyce Setyawati,', 'Mata', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(40, 'dr. Kusmarwati, SpBP', 'Bedah Plastik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(41, 'dr. Kusmaryati, SpOG', 'Kebidanan &amp; Kandungan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(42, 'dr. Lakshmi Nawasasi', 'Bedah Umum', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(43, 'Dr. Leonardo Rudy, S', 'Radiologi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(44, 'dr. Lia Marliana, Sp', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(45, 'Dr. Lisda Temka, Sp.', 'Patologi Anatomi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(46, 'dr. Lukman Hakim, Sp', 'Saluran Kemih', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(47, 'Dr. Maria Renanti Yu', 'Patologi Anatomi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(48, 'Dr. Nuzwar Noer, Sp.', 'THT', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(49, 'dr. Olly Renaldi, Sp', 'Diabetes &amp; Endokrin', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(50, 'dr. Poppy Kristina S', 'Saraf', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(51, 'Dr. Poppy Syafnita, ', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(52, 'Dr. Pratista Hendarj', 'Anestesi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(53, 'Dr. Rahmi Afifi, Sp.', 'Radiologi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(54, 'dr. Riadhy B. Praset', 'Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(55, 'dr. Riana Novy Evija', 'Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(56, 'Dr. Ridhawati Muchta', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(57, 'Dr. Risma Pasaribu, ', 'Rehabilitasi Medik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(58, 'dr. Ruankha Bilommi,', 'Bedah Anak', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(59, 'dr. Ruchika, SpBTKV', 'Bedah Toraks Kardiovaskular', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(60, 'Dr. Samuel Tandionug', 'Radiologi Intervensi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(61, 'Dr. Sengdy Chandar C', 'Mata', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(62, 'Dr. Stella Evalengin', 'Gizi Klinik', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(63, 'dr. Suijanta Kartadi', 'Bedah Umum', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(64, 'dr. Syaiful Hadi, Sp', 'Bedah Tulang', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(65, 'dr. Tri Sutowo, SpPD', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(66, 'dr. Vera Sumual, SpM', 'Mata', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(67, 'Dr. Vonny Indriati W', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(68, 'dr. Wimpie Florentin', 'Bedah Tumor', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(69, 'dr. Yusalena Sophia ', 'Penyakit Dalam', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(70, 'Dra. Destryna Naingg', 'Psikologi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(71, 'Drg. Andriyani Ameid', 'Gigi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(72, 'drg. Asri Diah Sastr', 'Bedah Gusi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(73, 'drg. Benardi Catur I', 'Gigi Tiruan', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(74, 'Drg. Erdina Savitri', 'Gigi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(75, 'Drg. Estinigtiyastut', 'Gigi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(76, 'Drg. Ine Ayu Tri Bha', 'Bedah Gusi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(77, 'drg. Kurnia Natalia ', 'Bedah Mulut', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(78, 'Drg. Marcella Budhia', 'Perataan Gigi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(79, 'drg. Sigit Supartono', 'Bedah Mulut', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang'),
(80, 'Drg. Wenny Irsyad, S', 'Perataan Gigi', 'RS Mitra Keluarga Bekasi Timur', 'Jl. Industri Raya, Lemah abang, Cikarang');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_mitra_cikarang`
--

CREATE TABLE IF NOT EXISTS `doctor_mitra_cikarang` (
  `no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `schedule` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_mitra_cikarang`
--

INSERT INTO `doctor_mitra_cikarang` (`no`, `name`, `specialist`, `hospital`, `address`, `schedule`) VALUES
(1, 'Dr. Adimas Tjindarbu', 'Bedah Umum', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(2, 'Dr. Andi Amirudin No', 'Radiologi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(3, 'Dr. Budi SH Gultom, ', 'Bedah Umum', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(4, 'Dr. Dewi Anggraini, ', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(5, 'Dr. Dian Yulianti, S', 'Paru &amp; Pernapasa', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(6, 'Dr. Dina Udayani Swa', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(7, 'Dr. Dwidjo Siswojo, ', 'Radiologi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(8, 'Dr. Evelyn Tunardy ,', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(9, 'Dr. Ferry Doni Trila', 'Bedah Orthopedi &amp', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(10, 'Dr. Freddy Hartono, ', 'Rehabilitasi Medik', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(11, 'Dr. Frengky Susanto,', 'Anak', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(12, 'Dr. Hampri Seda, SpM', 'Mata', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(13, 'Dr. Himawan Wicakson', 'Jantung &amp; Pembul', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(14, 'Dr. Hyhot Mausar, Sp', 'Penyakit Dalam', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(15, 'Dr. Kristiawan Abri ', 'THT', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(16, 'Dr. Lia Marliana, Sp', 'Bedah Orthopedi &amp', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(17, 'Dr. Mahdian Nur Nasu', 'Bedah Saraf', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(18, 'Dr. Merry Zustianova', 'Radiologi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(19, 'Dr. MM Tri Widiyati,', 'Anak', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(20, 'Dr. Muhammad Fitrah,', 'Saluran Kemih', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(21, 'Dr. Muharmansyah Boe', 'Jantung &amp; Pembul', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(22, 'Dr. Nancy Liona Agus', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(23, 'Dr. Ni Putu Titien S', 'Kebidanan &amp; Kand', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(24, 'Dr. Nur Intan, SpM', 'Mata', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(25, 'Dr. Poppy Syafnita, ', 'Kulit &amp; Kelamin', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(26, 'Dr. Rina Astuti, SpS', 'Saraf', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(27, 'Dr. Ruchika, SpBTKV', 'Bedah Toraks Kardiov', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(28, 'Dr. Serly, SpS', 'Saraf', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(29, 'Dr. Shiella Gunawan,', 'Penyakit Dalam', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(30, 'Dr. Shinta Irbaryant', 'Saraf', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(31, 'Dr. Sita Ariyani, Sp', 'Anak', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(32, 'Dr. Sri Prasetyowati', 'Rehabilitasi Medik', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(33, 'Dr. Vinci Edy Wibowo', 'Paru &amp; Pernapasa', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(34, 'Dr. Wimbo Indratno H', 'Bedah Saraf', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(35, 'Dr. Wiro Anton Sumil', 'THT', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(36, 'Dr. Yulia Antolis, S', 'Anak', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(37, 'Drg. Andi Alfatahul ', 'Bedah Mulut', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(38, 'Drg. Ary Kasrini', 'Gigi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(39, 'Drg. Deddy Wijaya', 'Gigi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(40, 'Drg. Evie Lamtiur Pa', 'Perataan Gigi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(41, 'Drg. Juretta Sintawa', 'Konsultan Gigi Anak', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', ''),
(42, 'Drg. Wenny Asteriant', 'Konservasi Gigi', 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_siloam_cikarang`
--

CREATE TABLE IF NOT EXISTS `doctor_siloam_cikarang` (
  `no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `schedule` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_siloam_cikarang`
--

INSERT INTO `doctor_siloam_cikarang` (`no`, `name`, `specialist`, `hospital`, `address`, `schedule`) VALUES
(1, 'dr. Abner Penalemen ', 'Medical Rehabilitati', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(2, 'dr. Andreas Wardono,', 'Medical Rehabilitati', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(3, 'DR. dr. Ninis Sri Pr', 'Medical Rehabilitati', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(4, 'Dr. Freddy Hartono, ', 'Medical Rehabilitati', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(5, 'dr. Achmad Rizky Her', 'Urologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(6, 'dr. Paulus RK Hasibu', 'Urologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(7, 'dr. Adhiarta, Sp.PD,', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(8, 'dr. Anugrah Maya Pur', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(9, 'dr. Hans Kusuma Muli', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(10, 'dr. Ida Melani Santo', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(11, 'dr. Indra S. M Manul', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(12, 'dr. Okto Dewantoro,S', 'Internist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(13, 'dr. Adhitya Indrapra', 'Obstetrician and Gyn', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(14, 'dr. Agebrina Satolom', 'Obstetrician and Gyn', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(15, 'dr. Ariati, Sp. OG', 'Obstetrician and Gyn', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(16, 'dr. Jusuf Sidharta, ', 'Obstetrician and Gyn', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(17, 'dr. Piliansjah T, Sp', 'Obstetrician and Gyn', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(18, 'dr. Afrizal, Sp.BS', 'Neuro Surgeon', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(19, 'dr. Andreas Andri Le', 'Cardio Thoraric & Va', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(20, 'dr. Anggita Marissa ', 'Anaesthetic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(21, 'dr. Fabianus Buyung,', 'Anaesthetic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(22, 'dr. Parlin Simanjunt', 'Anaesthetic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(23, 'dr. Bambang Hari San', 'ENT/THT', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(24, 'dr. Christian Harry ', 'ENT/THT', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(25, 'dr. Yan Runtung, Sp.', 'ENT/THT', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(26, 'dr. Budi Santoso Adj', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(27, 'dr. Heraldine M. Kal', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(28, 'dr. Melisa Anggraeni', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(29, 'dr. Musim, M.Kes, Sp', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(30, 'dr. Naomi Esthernita', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(31, 'dr. Purwanto W. Iraw', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(32, 'dr. Sugianto Wiriadi', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(33, 'dr. Theresia Santi, ', 'Pediatrician', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(34, 'dr. Catherina Tulong', 'Opthalmologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(35, 'dr. Hilarius Dicky, ', 'Opthalmologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(36, 'dr. Marjasa D. Dicky', 'Opthalmologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(37, 'dr. Datok Simon, Sp.', 'Pediatric Surgeon', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(38, 'dr. Ester Asima Novi', 'Anatomical Pathologi', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(39, 'dr. Feronica Kusuma ', 'Clinical Pathologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(40, 'dr. Ferry Doni Trila', 'Surgeon - Orthopedic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(41, 'dr. Hendra Andry Wij', 'Surgeon - Orthopedic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(42, 'dr. Nucky Indrapradj', 'Surgeon - Orthopedic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(43, 'dr. Poetranto Hari N', 'Surgeon - Orthopedic', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(44, 'dr. H. Muharman S. B', 'Cardiologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(45, 'dr. Himawan, Sp.JP', 'Cardiologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(46, 'dr. I Ketut D. Artan', 'Dermato-Venerologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(47, 'dr. Ineke Winda Feri', 'Dermato-Venerologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(48, 'dr. Marsia Rusfianti', 'Dermato-Venerologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(49, 'dr. Lina Kamarga, Sp', 'Neurologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(50, 'dr. Pudji Sugianto, ', 'Neurologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(51, 'dr. Loekwin Frederic', 'Surgeon', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(52, 'dr. Louis Lourence, ', 'Surgeon', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(53, 'dr. Magy Satolom, Sp', 'Pulmonologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(54, 'dr. Widhi Usansi, Sp', 'Pulmonologist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(55, 'dr. Muchtar, Sp.BP', 'Plastic & Reconstruc', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(56, 'dr. Rudi Hartoko, Sp', 'Radiology', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(57, 'dr. Viva Agusniaty, ', 'Radiology', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(58, 'dr. Ryanto K Sitepu,', 'Digestive Surgeon', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(59, 'dr. Titis Diah, Sp.K', 'Psychiatrist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(60, 'drg. Andi Alfatahul ', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(61, 'drg. C. Dewi Anggria', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(62, 'drg. Danesa Tanzil', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(63, 'drg. Devi Ekawati', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(64, 'drg. Dona Angelica E', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(65, 'drg. Fransiscus', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', ''),
(66, 'drg. Hendratna Setya', 'Dentist', 'Siloam Hospitals Lippo Cikarang', ': Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_siloam_jambi`
--

CREATE TABLE IF NOT EXISTS `doctor_siloam_jambi` (
  `no` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specialist` varchar(20) NOT NULL,
  `hospital` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `schedule` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_siloam_jambi`
--

INSERT INTO `doctor_siloam_jambi` (`no`, `name`, `specialist`, `hospital`, `address`, `schedule`) VALUES
(1, ' dr. Alfian Taher, S', 'ENT/THT', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(2, 'dr. Agus Multazar, M', 'ENT/THT', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(3, 'dr. Jamaluddin,Sp.TH', 'ENT/THT', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(4, 'dr. Yasril, Sp.THT -', 'ENT/THT', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(5, 'dr. Aaron Manullang.', 'Radiology', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(6, 'dr. Erni Zainudin Sp', 'Radiology', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(7, 'dr. Ade Susanti, Sp.', 'Anesthetic', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(8, 'dr. Isrun Masari, Sp', 'Anesthetic', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(9, 'dr. Patra R. Harly, ', 'Anesthetic', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(10, 'dr. Sulistiowati, Sp', 'Anesthetic', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(11, 'dr. Alfindra Tamin, ', 'Neurologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(12, 'dr. Harly MT. Lumban', 'Neurologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(13, 'dr. Nur Amaliah Verb', 'Neurologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(14, 'dr. Amran H. Sinaga,', 'Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(15, 'dr. Meiko Adriansyah', 'Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(16, 'dr. Muhammad Arif Hi', 'Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(17, 'dr. Rixendo, Sp.B', 'Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(18, 'dr. Supian Sembiring', 'Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(19, 'dr. Andi Hidayat', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(20, 'dr. Dini Paramita Se', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(21, 'dr. Eric Pangeran', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(22, 'dr. Eva Liana', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(23, 'dr. Hendra Kurniawan', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(24, 'dr. Lanceri Sijabat', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(25, 'dr. Leonard Chandra', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(26, 'dr. Masni Meria Sila', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(27, 'dr. Muh Hadinata', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(28, 'dr. Muji Harto', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(29, 'dr. Mutiara', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(30, 'dr. Norberta Dessy N', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(31, 'dr. Paramita', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(32, 'dr. Rika Aggraini', 'General Practitioner', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(33, 'dr. Andri Budiman, S', 'Internist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(34, 'dr. Arif Sejati, Sp.', 'Internist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(35, 'dr. Bambang Sutopo, ', 'Internist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(36, 'dr. Mulyadi Joyo San', 'Internist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(37, 'dr. Samsirun Halim, ', 'Internist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(38, 'dr. Apriyanto Latief', 'Neuro Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(39, 'dr. Ronny Setiawan, ', 'Neuro Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(40, 'dr. Charles A Simanj', 'Orthopedic Surgeon -', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(41, 'DR. dr. Herlambang N', 'Obstetrician and Gyn', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(42, 'dr. Gorga IVW Udjung', 'Obstetrician and Gyn', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(43, 'dr. Ismail Usman, M.', 'Obstetrician and Gyn', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(44, 'dr. Sindhung Harjono', 'Obstetrician and Gyn', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(45, 'DR. dr. Sotianingsih', 'Clinical Pathologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(46, 'dr. Fairuz C. Quzwai', 'Anatomical Pathologi', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(47, 'dr. Frans Ferdinansy', 'Medical Rehabilitati', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(48, 'dr. Humaryanto, Sp.O', 'Orthopedic Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(49, 'dr. Rolandi Indra Pr', 'Orthopedic Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(50, 'dr. Ifo Faujiah, Sp.', 'Pediatrician', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(51, 'dr. Mustarim, M.Med,', 'Pediatrician', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(52, 'dr. Sutomo Talkah, S', 'Pediatrician', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(53, 'dr. M.Fuad Arbi, Sp.', 'Cardiologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(54, 'dr. Riadi Ali, Sp.B.', 'Oncology Surgeon', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(55, 'dr. Rudy Gunawan, Sp', 'Obstetrician and Gyn', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(56, 'dr. Subagio, Sp.KK', 'Dermato-Venerologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(57, 'dr. Sudarto, Sp.P', 'Pulmonologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(58, 'dr. Victor Eliezer, ', 'Psychiatrist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(59, 'dr. Vonna Risari, Sp', 'Opthalmologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(60, 'dr. Wendi Rachman, S', 'Urologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(61, 'drg. Bernard Pasarib', 'Orthodontist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(62, 'drg. Deasy Berliana', 'Dentist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(63, 'drg. Febby Padang', 'Dentist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(64, 'drg. Ngo Megawati', 'Dentist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(65, 'drg. Faurina Ulfa B,', 'Phrosthodontist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(66, 'Natalia Damayanti, S', 'Psychologist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(67, 'Rahma, S.Gz', 'Nutritionist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', ''),
(68, 'Rina, A.md.Gz', 'Nutritionist', 'Siloam Hospitals Jambi', ': Jl. Soekarno Hatta Paal Merah Jambi', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `no` int(2) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`no`, `name`, `address`, `phone`, `email`) VALUES
(1, 'Siloam Hospitals Jambi', 'Jl. Soekarno Hatta Paal Merah Jambi', '(+62 741) 591 9000', 'siloamjambi.cs@siloamhospitals.com'),
(2, 'Siloam Hospitals Lippo Cikarang', 'Jl. MH. Thamrin Kav. 105 Lippo Cikarang, Cikarang, Jawa Barat 17550', '(+62 21) 2963 6900', 'info.shlc@siloamhospitals.com'),
(3, 'RS Mitra Keluarga Cikarang', 'Jl. Industri Raya, Lemah abang, Cikarang', '(+62-21) 89840500', 'cikarang@mitrakeluarga.com'),
(4, 'RS Mitra Keluarga Bekasi', 'Jl. Jenderal Ahmad Yani, Bekasi 17144', '(+62-21) 8853333', 'bekasi@mitrakeluarga.com'),
(5, 'RS Mitra Keluarga Bekasi Timur', 'Jl. Pengasinan – Rawa Semut Margahayu, Bekasi Timur 17113', '(+62-21) 89999222', 'bekasitimur@mitrakeluarga.com'),
(6, 'RS. Harapan Keluarga Jababeka', 'Jl. Kasuari Raya KAV. 1A & 1B Cikarang Baru – Bekasi 17550', '021 8984 0745', 'marketingrshk@gmail.com'),
(7, 'Rs Hosana Medica Lippo Cikarang', 'Jl. Utama BIIE No. 01 Lippo Cikarang Cikarang Jawa Barat 17550', '(021)897 24 72', 'lippocikarang@hosana-medica.com'),
(8, 'RS Hosana Medica Cikarang Baru', 'Jl Anggrek I B2/2 Rt.01 Rw.11 Cikarang Baru – Jababeka', '(021)8983 1626', 'cikarangbaru@hosana-medica.com'),
(9, 'Rs Hosana Medica Bekasi', 'Jl. Pramuka No. 12 Rt.04 Rw.02 Kec. Rawa Lumbu Bekasi Jawa Barat', '(021) 822 1573', 'bekasi@hosana-medica.com'),
(10, 'Rs Annisa', 'JL. Cikarang Baru No.31 Cikarang Utara Bekasi 17836, Jawa Barat', '021 890 4165', 'info@rsannisa-cikarang.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_mitra_bekasi`
--
ALTER TABLE `doctor_mitra_bekasi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doctor_mitra_bekasi_timur`
--
ALTER TABLE `doctor_mitra_bekasi_timur`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doctor_mitra_cikarang`
--
ALTER TABLE `doctor_mitra_cikarang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doctor_siloam_cikarang`
--
ALTER TABLE `doctor_siloam_cikarang`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `doctor_siloam_jambi`
--
ALTER TABLE `doctor_siloam_jambi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`no`,`name`), ADD FULLTEXT KEY `name` (`name`), ADD FULLTEXT KEY `address` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_mitra_bekasi`
--
ALTER TABLE `doctor_mitra_bekasi`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `doctor_mitra_bekasi_timur`
--
ALTER TABLE `doctor_mitra_bekasi_timur`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `doctor_mitra_cikarang`
--
ALTER TABLE `doctor_mitra_cikarang`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `doctor_siloam_cikarang`
--
ALTER TABLE `doctor_siloam_cikarang`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `doctor_siloam_jambi`
--
ALTER TABLE `doctor_siloam_jambi`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `no` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
