-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 10:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bkg`
--

-- --------------------------------------------------------

--
-- Table structure for table `exchange`
--

CREATE TABLE `exchange` (
  `idexc` int(6) NOT NULL,
  `ttlexc` varchar(500) NOT NULL,
  `excdesc` text NOT NULL,
  `exclink` varchar(700) NOT NULL,
  `excpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exchange`
--

INSERT INTO `exchange` (`idexc`, `ttlexc`, `excdesc`, `exclink`, `excpic`) VALUES
(1, 'Program Japanese Studies 2020 (program non-gelar)/Japanese Studies Program 2020 (non-title program)', 'Kementerian Pendidikan, Budaya, Olahraga, Ilmu Pengetahuan dan Teknologi (Monbukagakusho/MEXT) menawarkan beasiswa bagi mahasiswa S1 jurusan sastra atau pendidikan bahasa Jepang untuk belajar selama satu tahun di universitas di Jepang. Program ini bertujuan untuk memperdalam pemahaman mengenai bahasa dan kebudayaan Jepang. Program ini adalah program non-gelar. Peserta yang telah menyelesaikan program ini akan mendapatkan sertifikat.\r\nPenerima beasiswa akan berkuliah mulai dari bulan September atau Oktober 2020 hingga September atau Oktober 2021. Peserta yang telah menyelesaikan program ini akan mendapatkan sertifikat.', 'https://www.id.emb-japan.go.jp/sch_js.html', 'japan.jpg'),
(2, 'Indonesia-USA 70th Youth Ambassadors', '#IndonesiaUSA70th Youth Ambassadors adalah program kolaborasi antara Outstanding Youth for the World (OYTW) dari Pemerintah Indonesia dan International Visitor Leadership Program (IVLP) dari Pemerintah Amerika Serikat.\r\n\r\nOYTW telah diselenggarakan oleh Kementerian Luar Negeri sejak tahun 2011, dengan mengirimkan para pemuda pemudi Indonesia yang berprestasi ke luar negeri, guna memperluas jejaring dan wawasan. Negara-negara yang pernah dikunjungi yaitu, Amerika Serikat, Jepang, Inggris, Kanada, Hong Kong, India, Australia, sehingga pelaksanaan OYTW 2019 ke Amerika Serikat menjadi yang kedelapan kalinya.', 'https://kemlu.go.id/portal/id/read/168/lembar_informasi/indonesiausa70th-youth-ambassadors?fbclid=IwAR3RGAAwbwFQdUSWpclSL2peFf_8MmXG-ts69hx9CYQjnK40RLr8CYM2wnk', 'OYTW.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `idteam` int(6) NOT NULL,
  `teamname` varchar(500) NOT NULL,
  `teamttl` varchar(600) NOT NULL,
  `tmbd` date NOT NULL,
  `tmdesc` text NOT NULL,
  `tmpic` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`idteam`, `teamname`, `teamttl`, `tmbd`, `tmdesc`, `tmpic`) VALUES
(1, 'NH4', 'Administrator', '2000-03-27', '', 'profile.jpg'),
(2, 'RRQ', 'Consultant', '1998-04-18', '', 'kenboo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `resid` int(6) NOT NULL,
  `ttlres` varchar(500) NOT NULL,
  `resdesc` text NOT NULL,
  `reslink` varchar(700) NOT NULL,
  `pictres` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id_sc` int(6) NOT NULL,
  `ttlsc` varchar(500) NOT NULL,
  `ttlscid` varchar(500) NOT NULL,
  `scdesc` text NOT NULL,
  `scdescid` text NOT NULL,
  `sclink` varchar(700) NOT NULL,
  `scpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id_sc`, `ttlsc`, `ttlscid`, `scdesc`, `scdescid`, `sclink`, `scpic`) VALUES
(1, 'Government of Flanders Master Mind Scholarships for International Students', '', ' Level/Field of study:\r\n\r\nEligible Masters Degree Programmes offered at participating Flemish Institutions except preparatory programmes; bridging programmes; or distance learning.\r\n\r\n', '', 'http://www.studyinflanders.be/en/scholarship-programmes/master-mind-scholarships/', 'flanders.png\r\n'),
(2, 'Bristol University Think Big Scholarships', '', 'Brief description: \r\n\r\nIn 2020, Bristol University is investing £500,000 to help the brightest and best international students come to the University of Bristol. Think Big Undergraduate scholarships and Think Big Postgraduate scholarships are available for courses starting in 2020.\r\n\r\n', '', 'http://www.bristol.ac.uk/fees-funding/awards/think-big-undergraduate/', 'britishschlr.jpg'),
(4, 'dasdas', 'asdsad', 'asdsadas', 'asdasdasdasd', '', ''),
(5, 'fdsfds', 'sdfsd', 'sfs', 'sfs', '', ''),
(6, 'fdsfds', 'sdfsd', 'sfs', 'sfs', '', ''),
(7, 'fdsfds', 'sdfsd', 'sfs', 'sfs', '', ''),
(8, '', 'sdfsd', 'sfs', 'sfs', '', ''),
(9, '', 'ju', 'sfs', 'sfs', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `suffpass`
--

CREATE TABLE `suffpass` (
  `spid` int(6) NOT NULL,
  `ttlsp` varchar(500) NOT NULL,
  `spdesc` text NOT NULL,
  `splink` varchar(700) NOT NULL,
  `pictsp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id`, `username`, `password`) VALUES
(1, 'lanipa-nipa', '12345'),
(2, 'nh4', 'saya');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_berita`
--

CREATE TABLE `tabel_berita` (
  `id` int(6) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_berita`
--

INSERT INTO `tabel_berita` (`id`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(2, 'Gotong Royong', '<p><strong>Gotong royong adalah</strong> suatu kegiatan yang dilakukan secara bersama-sama dan bersifat suka rela agaer kegiatan yang dikerjakan dapat berjalan dengan lancer, mudah dan ringan. Contoh kegiatan yang dapat dilakukan secara bergotong royong antara lain pembangunan fasilitas umum dan membersihkan lingkungan sekitar .</p>\r\n', '2019-10-27', 'upload.jpeg'),
(6, 'my name is admin', 'get to the safe zone!', '2020-02-03', 'download.jpg'),
(7, 'my name is admin', 'safe zone ', '2020-02-03', 'download.jpg'),
(10, 'my name is admin', 'sadsad', '2020-02-03', 'download.jpg'),
(11, 'my name is admin', 'fdcffgh', '2020-02-03', 'download.jpg'),
(12, '', '', '2020-02-03', ''),
(13, '', '', '2020-02-03', ''),
(14, '', '', '2020-02-03', ''),
(15, '', '', '2020-02-03', '');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kontak`
--

CREATE TABLE `tabel_kontak` (
  `id` int(6) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_kontak`
--

INSERT INTO `tabel_kontak` (`id`, `name`, `email`, `subjek`, `pesan`) VALUES
(1, '', 'marlinatkj2@gmail.com', 'peluang', 'peluang usaha'),
(2, 'marlina', 'marlina@gmail.com', 'desa lanipa-nipa', 'desa yang bersih'),
(3, 'marlina', 'marlina@gmail.com', 'desa lanipa-nipa', 'maju');

-- --------------------------------------------------------

--
-- Table structure for table `tb_file`
--

CREATE TABLE `tb_file` (
  `id_file` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `descfile` text NOT NULL,
  `upldate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_file`
--

INSERT INTO `tb_file` (`id_file`, `nama_file`, `descfile`, `upldate`) VALUES
(1, 'Pra Uts_Etika Profesi.pdf', 'testing my download file', '2020-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `visa`
--

CREATE TABLE `visa` (
  `visaid` int(7) NOT NULL,
  `titlevs` varchar(500) NOT NULL,
  `isivs` text NOT NULL,
  `vslink` varchar(700) NOT NULL,
  `pictvs` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visa`
--

INSERT INTO `visa` (`visaid`, `titlevs`, `isivs`, `vslink`, `pictvs`) VALUES
(1, 'Pengajuan VISA Untuk Warga Negara Asing', '', 'http://www.kdei-taipei.org/index.php/berita/item/531-Pengajuan-VISA-Untuk-Warga-Negara-Asing/Foreigners', 'kdei.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exchange`
--
ALTER TABLE `exchange`
  ADD PRIMARY KEY (`idexc`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`idteam`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`resid`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id_sc`);

--
-- Indexes for table `suffpass`
--
ALTER TABLE `suffpass`
  ADD PRIMARY KEY (`spid`);

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_file`
--
ALTER TABLE `tb_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `visa`
--
ALTER TABLE `visa`
  ADD PRIMARY KEY (`visaid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exchange`
--
ALTER TABLE `exchange`
  MODIFY `idexc` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `idteam` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `resid` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id_sc` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suffpass`
--
ALTER TABLE `suffpass`
  MODIFY `spid` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_berita`
--
ALTER TABLE `tabel_berita`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tabel_kontak`
--
ALTER TABLE `tabel_kontak`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visa`
--
ALTER TABLE `visa`
  MODIFY `visaid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
