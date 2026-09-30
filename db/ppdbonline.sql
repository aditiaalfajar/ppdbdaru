-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2026 at 07:38 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komp`
--

CREATE TABLE `tbl_komp` (
  `id_komp` int(11) NOT NULL,
  `kompetensi` varchar(100) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_komp`
--

INSERT INTO `tbl_komp` (`id_komp`, `kompetensi`) VALUES
(1, 'IPA'),
(2, 'IPS'),
(5, 'UMUM'),
(6, 'LAINNYA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pdd`
--

CREATE TABLE `tbl_pdd` (
  `id_pdd` int(11) NOT NULL,
  `nama_pdd` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pdd`
--

INSERT INTO `tbl_pdd` (`id_pdd`, `nama_pdd`) VALUES
(1, 'SD/Sederajat'),
(2, 'SMP/Sederajat'),
(3, 'SMA/Sederajat'),
(4, 'D1'),
(5, 'D2'),
(6, 'D3'),
(7, 'D4/S1'),
(8, 'S2'),
(9, 'S3'),
(10, 'Tidak Berpendidikan Formal');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pekerjaan`
--

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(100) DEFAULT NULL,
  `ket_pekerjaan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pekerjaan`
--

INSERT INTO `tbl_pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `ket_pekerjaan`) VALUES
(1, 'Tidak Bekerja', 'ayah'),
(2, 'Pensiunan', 'ayah'),
(3, 'PNS Selain (Guru dan Dokter/Bidan/Perawat)', 'ayah'),
(4, 'PNS', 'ayah'),
(5, 'TNI/POLRI', 'ayah'),
(6, 'Pegawai Swasta', 'ayah'),
(7, 'Wiraswasta', 'ayah'),
(8, 'Pengacara/Hakim/Jaksa/Notaris ', 'ayah'),
(9, 'Seniman/Pelukis/Artis/Sejenis\r\n', 'ayah'),
(10, 'Dokter/Bidan/Perawat', 'ayah'),
(11, 'Pilot/Pramugara', 'ayah'),
(12, 'Pedagang', 'ayah'),
(13, 'Petani/Peternak', 'ayah'),
(14, 'Nelayan', 'ayah'),
(15, 'Buruh (Tani/Pabrik/Bangunan)', 'ayah'),
(16, 'Sopir/Masinis/Kondektur', 'ayah'),
(17, 'Politikus', 'ayah'),
(18, 'Lainnya', 'ayah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penghasilan`
--

CREATE TABLE `tbl_penghasilan` (
  `id_penghasilan` int(10) NOT NULL,
  `nama_penghasilan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_penghasilan`
--

INSERT INTO `tbl_penghasilan` (`id_penghasilan`, `nama_penghasilan`) VALUES
(1, '< 500rb'),
(2, '500-1jt'),
(3, '1jt-2jt'),
(4, '2jt-3jt'),
(5, '3jt-5t'),
(6, '>5jt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(10) NOT NULL,
  `ket_pengumuman` text DEFAULT NULL,
  `tgl_pengumuman` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `ket_pengumuman`, `tgl_pengumuman`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p style=\"margin-left:0cm; margin-right:0cm\"><span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><strong><u>Keterangan :</u></strong></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp; 1.&nbsp;Registrasi daftar ulang dilaksanakan pada tanggal 8 &ndash; 11 Juli 2026.</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;2. Mencetak dan membawa Surat Pengumuman ini sebagai bukti&nbsp; lulus seleksi.</span></span></span></span><br />\r\n<span style=\"font-size:11pt\"><span style=\"line-height:normal\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.0pt\">&nbsp; &nbsp; &nbsp; &nbsp; 3.&nbsp;Membawa materi Rp. 10.000,- sebanyak 2 lembar<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; 4.Mencetak dan membawa Surat Pendaftaran sebagai bukti pendaftaran.</span></span></span></span></p>\r\n</body>\r\n</html>\r\n', '2026-04-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(100) NOT NULL,
  `no_pendaftaran` varchar(20) NOT NULL,
  `password` text DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `nik` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` text DEFAULT NULL,
  `tgl_lahir` varchar(10) DEFAULT NULL,
  `agama` varchar(30) DEFAULT NULL,
  `status_keluarga` varchar(30) DEFAULT NULL,
  `anak_ke` varchar(100) DEFAULT NULL,
  `jml_saudara` varchar(100) DEFAULT NULL,
  `hobi` varchar(100) DEFAULT NULL,
  `cita` varchar(100) DEFAULT NULL,
  `paud` varchar(100) DEFAULT NULL,
  `tk` varchar(100) DEFAULT NULL,
  `alamat_siswa` text DEFAULT NULL,
  `jenis_tinggal` varchar(100) DEFAULT NULL,
  `desa` varchar(100) DEFAULT NULL,
  `kec` varchar(100) DEFAULT NULL,
  `kab` varchar(100) DEFAULT NULL,
  `prov` varchar(100) DEFAULT NULL,
  `kode_pos` varchar(100) DEFAULT NULL,
  `jarak` varchar(100) DEFAULT NULL,
  `trans` varchar(100) DEFAULT NULL,
  `no_hp_siswa` varchar(14) DEFAULT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `kepala_keluarga` varchar(100) DEFAULT NULL,
  `nama_ayah` varchar(100) DEFAULT NULL,
  `nik_ayah` varchar(20) DEFAULT NULL,
  `status_ayah` varchar(100) DEFAULT NULL,
  `th_lahir_ayah` varchar(10) DEFAULT NULL,
  `pdd_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(100) DEFAULT NULL,
  `penghasilan_ayah` varchar(100) DEFAULT NULL,
  `nama_ibu` varchar(100) DEFAULT NULL,
  `nik_ibu` varchar(20) DEFAULT NULL,
  `status_ibu` varchar(100) DEFAULT NULL,
  `th_lahir_ibu` varchar(10) DEFAULT NULL,
  `pdd_ibu` varchar(100) DEFAULT NULL,
  `pekerjaan_ibu` varchar(100) DEFAULT NULL,
  `penghasilan_ibu` varchar(100) DEFAULT NULL,
  `nama_wali` varchar(100) DEFAULT NULL,
  `nik_wali` varchar(20) DEFAULT NULL,
  `th_lahir_wali` varchar(100) DEFAULT NULL,
  `pdd_wali` varchar(100) DEFAULT NULL,
  `pekerjaan_wali` varchar(100) DEFAULT NULL,
  `penghasilan_wali` varchar(100) DEFAULT NULL,
  `no_hp_ortu` varchar(14) DEFAULT NULL,
  `npsn_sekolah` varchar(100) DEFAULT NULL,
  `nama_sekolah` varchar(100) DEFAULT NULL,
  `status_sekolah` varchar(100) DEFAULT NULL,
  `jenjang_sekolah` varchar(100) DEFAULT NULL,
  `lokasi_sekolah` varchar(100) DEFAULT NULL,
  `no_kjp` varchar(100) DEFAULT NULL,
  `no_pkh` varchar(100) DEFAULT NULL,
  `no_kip` varchar(100) DEFAULT NULL,
  `komp_ahli` varchar(100) DEFAULT NULL,
  `tgl_siswa` datetime DEFAULT NULL,
  `status_verifikasi` varchar(30) DEFAULT NULL,
  `status_pendaftaran` varchar(20) DEFAULT NULL,
  `file_ijazah` varchar(255) DEFAULT NULL,
  `file_akte` varchar(255) DEFAULT NULL,
  `file_kk` varchar(255) DEFAULT NULL,
  `file_rapot` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `no_pendaftaran`, `password`, `nis`, `nisn`, `nik`, `nama_lengkap`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `status_keluarga`, `anak_ke`, `jml_saudara`, `hobi`, `cita`, `paud`, `tk`, `alamat_siswa`, `jenis_tinggal`, `desa`, `kec`, `kab`, `prov`, `kode_pos`, `jarak`, `trans`, `no_hp_siswa`, `no_kk`, `kepala_keluarga`, `nama_ayah`, `nik_ayah`, `status_ayah`, `th_lahir_ayah`, `pdd_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `nik_ibu`, `status_ibu`, `th_lahir_ibu`, `pdd_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `nama_wali`, `nik_wali`, `th_lahir_wali`, `pdd_wali`, `pekerjaan_wali`, `penghasilan_wali`, `no_hp_ortu`, `npsn_sekolah`, `nama_sekolah`, `status_sekolah`, `jenjang_sekolah`, `lokasi_sekolah`, `no_kjp`, `no_pkh`, `no_kip`, `komp_ahli`, `tgl_siswa`, `status_verifikasi`, `status_pendaftaran`, `file_ijazah`, `file_akte`, `file_kk`, `file_rapot`) VALUES
(18, '2026-1783094490', '1213213213', NULL, '1213213213', '223232342325343543', 'Aditia Alfajar', 'Laki-Laki', 'jakarta', '01-01-2015', 'Islam', 'Anak Kandung', '3', '4', 'Olah raga', 'PNS', 'pernah', 'pernah', 'Jl. rawasari', 'Tinggal dengan orang tua', 'rawasari', 'rawasari', 'jakarta pusat', 'dki jakarta', '122334', '5km - 10 km', 'jalan kaki', '081382269743', '7777678655564445', 'ayah', 'ayah', '1133324343454656', 'masih hidup', '1975', 'SMP/Sederajat', 'Pensiunan', '500-1jt', 'ibu', '12323434', 'masih hidup', '1976', 'SD/Sederajat', 'Tidak Bekerja', '< 500rb', 'ibu', '1232323423242322', '1976', 'SD/Sederajat', 'Tidak Bekerja', '< 500rb', '081382269743', '2343434345', 'sd rawasari', 'NEGERI', 'sd', 'dalam kabupaten', '12233442', '-', '-', 'IPA', '2026-07-03 18:05:55', NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2026-1781485350', '1213213214', NULL, '1213213214', '223232342325343543', 'aditia', 'Laki-Laki', 'jakarta', '03-03-2003', 'Islam', 'Anak Kandung', '3', '4', 'Olah raga', 'PNS', 'pernah', 'pernah', 'Jl. rawasari', '', 'rawasari', 'rawasari', 'jakarta pusat', 'dki jakarta', '122334', 'kurang dari 5 km', 'jalan kaki', '081382269743', '7777678655564445', 'ayah', 'ayah', '1133324343454656', '', '1975', 'SD/Sederajat', 'Pensiunan', '< 500rb', 'ibu', '12323434', '', '1976', 'SD/Sederajat', 'Pensiunan', '500-1jt', 'ibu', '1232323423242322', '1976', 'SD/Sederajat', 'Tidak Bekerja', '< 500rb', '', '2343434345', 'sd rawasari', 'NEGERI', '', '', '-', '-', '-', 'IPA', '2026-06-15 03:08:48', 'Terverifikasi', 'lulus', NULL, '2026-1781485350-akte-1781720641.pdf', '2026-1781485350-kk-1781721356.pdf', '2026-1781485350-rapot-1781720593.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `telp` varchar(100) DEFAULT NULL,
  `kab_sekolah` varchar(100) DEFAULT NULL,
  `ketua_panitia` varchar(100) DEFAULT NULL,
  `nip_ketua` varchar(100) DEFAULT NULL,
  `th_pelajaran` varchar(100) DEFAULT NULL,
  `no_surat` varchar(100) DEFAULT NULL,
  `kepsek` varchar(100) DEFAULT NULL,
  `nip_kepsek` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `alamat`, `email`, `website`, `telp`, `kab_sekolah`, `ketua_panitia`, `nip_ketua`, `th_pelajaran`, `no_surat`, `kepsek`, `nip_kepsek`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin123', 'SMP DARUSSA\'ADAH', 'Jl. Kosmabi I No. 1, Kali Baru, Kec. Cilincing, Kota Jakarta Uta', 'smpdarussaadah20106498@gmail.com', 'darussaadah.wordpress.com', '4405233', 'Jakarta Utara', 'Abdulrahman', '-', '2026-2027', '-', 'hj.mustajir', '-', 'admin', '2018-04-12 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_verifikasi`
--

CREATE TABLE `tbl_verifikasi` (
  `id_verifikasi` int(10) NOT NULL,
  `isi` text DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `tgl_verifikasi` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_verifikasi`
--

INSERT INTO `tbl_verifikasi` (`id_verifikasi`, `isi`, `ket`, `tgl_verifikasi`) VALUES
(1, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `status_ppdb` varchar(30) DEFAULT NULL,
  `tgl_diubah` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `status_ppdb`, `tgl_diubah`) VALUES
(1, 'buka', '2026-06-18 01:18:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_komp`
--
ALTER TABLE `tbl_komp`
  ADD PRIMARY KEY (`id_komp`);

--
-- Indexes for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  ADD PRIMARY KEY (`id_pdd`);

--
-- Indexes for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indexes for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indexes for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  ADD PRIMARY KEY (`id_verifikasi`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_komp`
--
ALTER TABLE `tbl_komp`
  MODIFY `id_komp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pdd`
--
ALTER TABLE `tbl_pdd`
  MODIFY `id_pdd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pekerjaan`
--
ALTER TABLE `tbl_pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_penghasilan`
--
ALTER TABLE `tbl_penghasilan`
  MODIFY `id_penghasilan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_verifikasi`
--
ALTER TABLE `tbl_verifikasi`
  MODIFY `id_verifikasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
