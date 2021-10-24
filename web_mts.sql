-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 03:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_mts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '$2y$10$JL9tBIEQhwgD0CHKxAVYjedcnwovIfoB2tVAyBowAeQVh/7VCmWkK', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_upload` varchar(255) NOT NULL,
  `penulis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul`, `isi`, `gambar`, `tanggal_upload`, `penulis`) VALUES
(34, 'Proses Visit Akreditasi Secara Daring MTs Negeri 1 Tahun 20211', '                                    <p><span style=\"font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\">Muara Bulian, MTsN1 (TIM Web)--- pelaksanaan akreditasi Madrasah secra daring di MTs Negeri 1 Batang Hari mulai dilaksanakan. Setelah menyiapkan dokumen yang diperlukan untuk persiapan akreditasi madrasah oleh TIM akreditasi MTsN 1 Batang Hari berupa file dokumen upload dan dokumen bukti fisik.</span><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><span style=\"font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\">MTs Negeri 1 Batang Hari mendapatkan jadwal pada kelimpok 1 yang dimulai hari ini tanggal 14 sampai dengan tanggal 15 Oktober 2021. Pelaksanaan visit akreditasi tahun ini dilaksanakan secara daring oleh 2 orang asesor Bapak M. Nurzen.S dari Kerinci dan Ibu Nazpi dari Kota Sungai Penuh. Pelaksanaan akreditasi daring MTs Negeri 1 Batang Hari berlangsung diruang aula asrama MTs Negeri 1 Batang Hari yang dimulai dari jam 08.00 WIB sampai dengan jam 16.00 untuk hari pertama, acara dimulai dengan pembukaan kegiatan visitasi yang dipimpin oleh host dari anggota BAN-S/M Provinsi Jambi yang diawali dengan menyanyikan lagu kebangsaan Indonesia Raya, Pembacaan Do’a, Laporan pelaksanaan Visitasi daring, arahan ketua BAN-S/M dan penutup kemudian dilanjutkan dengan acara inti yang diawali dengan presentasi singkat Kepala Madrasah tentang rencana pengembangan Madrasah, sistem tata pamong Madrasah, sistem pengelolaan Madrasah dan capaian Madrasah yang disampaikan langsung oleh Kepala MTs Negeri 1 Batang Hari Bapak Erman, S.Pd.I, M.Pd secara lengkap dan terperinci.</span><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><span style=\"font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\">Agenda Pelaksanaan visit hari ini dimulai dengan pertanyaan tim asesor kepada kepala madrasah, wakil kepala madrasah, kepala labor, kepala perpustakaan, ketua komite, kaur tata usaha serta guru dan masih banyak lainnya, untuk agenda Jum’at tanggal 15 oktober 2021 agenda yang akan dilaksanakan ialah metode observasi kelas, wawancara dan angket serta wawancara dan telaah dokumen yang akan dilaksanakan pada jam 07.15 s/d jam 16.30 sebagai kegiatan penutup akreditasi madrasah daring MTs Negeri 1 Batang Hari. Ucap Kepala MTs Negeri 1 Batang Hari Bapak Erman, S.Pd.I, M.Pd</span><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><br style=\"box-sizing: inherit; margin: 0px; font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\"><span style=\"font-family: \"Century Gothic\", Tahoma, Arial, Helvetica, sans-serif; font-size: 17.3333px;\">Semoga kegiatan akreditasi daring di MTs Negeri 1 Batang Hari ini berjalan dengan lancar sesuai dengan yang diharapkan dan mendapatkan hasil yang diinginkan, terima kasih kepada seluruh tim akreditasi yang telah membantu berjalannya kegiatan hari ini dan tetap semangat untuk kegiatan esok, semoga MTs Negeri 1 mendapat hasil yang terbaik,, (RF)</span><br></p>                                ', 'artikel5.png', 'Thursday, 21 October 2021', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`id`, `gambar`) VALUES
(3, 'carousel2.png'),
(4, 'carousel1.png');

-- --------------------------------------------------------

--
-- Table structure for table `ekskul`
--

CREATE TABLE `ekskul` (
  `id` int(11) NOT NULL,
  `pembina` varchar(255) NOT NULL,
  `ekskul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `tagline` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `tagline`, `gambar`) VALUES
(18, 'a', 'galeri1.png'),
(19, 'v', 'galeri2.png');

-- --------------------------------------------------------

--
-- Table structure for table `kesiswaan`
--

CREATE TABLE `kesiswaan` (
  `id` int(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `vii` int(11) NOT NULL,
  `viii` int(11) NOT NULL,
  `ix` int(11) NOT NULL,
  `jumlah` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kesiswaan`
--

INSERT INTO `kesiswaan` (`id`, `tahun`, `vii`, `viii`, `ix`, `jumlah`) VALUES
(1, '2018/2019', 104, 64, 76, 244);

-- --------------------------------------------------------

--
-- Table structure for table `ketenagaan`
--

CREATE TABLE `ketenagaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ketenagaan`
--

INSERT INTO `ketenagaan` (`id`, `nama`, `status`, `keterangan`) VALUES
(1, 'Abdul Gafur Kholidin, S.Pd.I', 'GTY', 'Kepala Madrasah / Guru Mapel Fiqih'),
(4, 'Khusnul Kh, S.H, S.Pd', 'GTY', 'Guru Mapel PKN');

-- --------------------------------------------------------

--
-- Table structure for table `non_bangunan`
--

CREATE TABLE `non_bangunan` (
  `id` int(11) NOT NULL,
  `halaman_madrasah` varchar(50) NOT NULL,
  `lapangan_olahraga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `non_bangunan`
--

INSERT INTO `non_bangunan` (`id`, `halaman_madrasah`, `lapangan_olahraga`) VALUES
(1, '80', '360');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id` int(11) NOT NULL,
  `tahun` varchar(20) NOT NULL,
  `kejuaraan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id`, `tahun`, `kejuaraan`) VALUES
(1, '2017/2018', 'Juara 1 Lomba Baca Puisi Tk. Kabupaten');

-- --------------------------------------------------------

--
-- Table structure for table `profile_madrasah`
--

CREATE TABLE `profile_madrasah` (
  `id_profile` int(11) NOT NULL,
  `nama_madrasah` varchar(50) NOT NULL,
  `no_statistik` varchar(20) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `tahun_berdiri` varchar(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `terakreditasi` varchar(1) NOT NULL,
  `nama_kepala` varchar(100) NOT NULL,
  `TMT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile_madrasah`
--

INSERT INTO `profile_madrasah` (`id_profile`, `nama_madrasah`, `no_statistik`, `npsn`, `alamat`, `tahun_berdiri`, `status`, `terakreditasi`, `nama_kepala`, `TMT`) VALUES
(1, 'MTs AT TAQWA JATINGARANG', '121233270036', '20364614', 'Jl. Raya Bodeh Watukumpul KM 17 \nDesa Jatingarang Kec. Bodeh Kab. Pemalang Prov. Jawa Tengah', '2005', 'swasta', 'A', 'Abdul Gafur Kholidin, S.Pd.I', '20 November 2019');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_gedung`
--

CREATE TABLE `ruang_gedung` (
  `id` int(11) NOT NULL,
  `nama_bangunan` varchar(50) NOT NULL,
  `status_kepemilikan` varchar(50) NOT NULL,
  `baik` varchar(11) NOT NULL,
  `sedang` varchar(11) NOT NULL,
  `rusak` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tanah_bangunan`
--

CREATE TABLE `tanah_bangunan` (
  `id` int(11) NOT NULL,
  `luas_tanah` varchar(50) NOT NULL,
  `luas_bangunan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanah_bangunan`
--

INSERT INTO `tanah_bangunan` (`id`, `luas_tanah`, `luas_bangunan`) VALUES
(1, '4500', '450');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` varchar(255) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`) VALUES
(1, 'TERWUJUDNYA PESERTA DIDIK YANG BERIMAN, DISIPLIN, DAN UNGGUL DALAM BERPRESTASI', '<p style=\"line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"></p><p style=\"line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"></p><ol></ol>\n\n\n\n\n\n<ol></ol><p></p><ol><li></li><li></li><li></li><li></li><li><ol><li style=\"text-align: justify; line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"><span style=\"font-size: 16pt; font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";mso-ascii-font-family:=\"\" \"times=\"\" roman\";mso-fareast-font-family:\"times=\"\" roman\";mso-bidi-font-family:=\"\" roman\";color:white;mso-color-index:1;mso-font-kerning:12.0pt;=\"\" language:id\"=\"\">1.Menyelenggarakan pendidikan islami dengan lingkungan madrasah yang agamis</span></li><li style=\"text-align: justify; line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"><span style=\"font-size: 16pt; font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";mso-ascii-font-family:\"times=\"\" roman\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-bidi-font-family:\"times=\"\" color:white;mso-color-index:1;mso-font-kerning:12.0pt;language:id\"=\"\">2.Menciptakan\nlingkungan madrasah yang aman, rapi, bersih, sehat, indah, tertib dan nyaman</span><span style=\"font-size: 16pt; font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";=\"\" color:white;mso-color-index:1;mso-font-kerning:12.0pt;language:en-us\"=\"\">\n</span></li><li style=\"text-align: justify; line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"><span style=\"font-size:16.0pt\"><span style=\"font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" numbullet0\\,1\";color:#ebf25a;mso-color-index:10;=\"\" font-family:+mj-lt;font-size:80%\"=\"\">3.</span></span><span style=\"font-size: 16pt; font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";mso-ascii-font-family:\"times=\"\" roman\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-bidi-font-family:\"times=\"\" color:white;mso-color-index:1;mso-font-kerning:12.0pt;language:id\"=\"\">Menciptakan\nsuasana kekeluargaan antara warga madrasah dengan lingkungan sekitar.</span></li><li style=\"text-align: justify; line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"><span style=\"font-size: 16pt; font-family: Roboto;\" times=\"\" new=\"\" roman\";\"=\"\" roman\";mso-ascii-font-family:\"times=\"\" roman\";=\"\" mso-fareast-font-family:\"times=\"\" roman\";mso-bidi-font-family:\"times=\"\" color:white;mso-color-index:1;mso-font-kerning:12.0pt;language:id\"=\"\">4.Menyelenggarakan pendidikan yang efektif dan berkualitas dalam pencapaian prestasi akademik dan non akademik</span></li><li style=\"text-align: justify; line-height: 150%; margin-top: 0pt; margin-bottom: 0pt; margin-left: 0.38in; text-indent: -0.38in; direction: ltr; unicode-bidi: embed; vertical-align: baseline;\"><br></li></ol></li></ol>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ekskul`
--
ALTER TABLE `ekskul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kesiswaan`
--
ALTER TABLE `kesiswaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ketenagaan`
--
ALTER TABLE `ketenagaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_bangunan`
--
ALTER TABLE `non_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_madrasah`
--
ALTER TABLE `profile_madrasah`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `ruang_gedung`
--
ALTER TABLE `ruang_gedung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tanah_bangunan`
--
ALTER TABLE `tanah_bangunan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekskul`
--
ALTER TABLE `ekskul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `kesiswaan`
--
ALTER TABLE `kesiswaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ketenagaan`
--
ALTER TABLE `ketenagaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `non_bangunan`
--
ALTER TABLE `non_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profile_madrasah`
--
ALTER TABLE `profile_madrasah`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruang_gedung`
--
ALTER TABLE `ruang_gedung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tanah_bangunan`
--
ALTER TABLE `tanah_bangunan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
