-- Dumping database structure for latpim_transmigrasi
CREATE DATABASE IF NOT EXISTS `latpim_transmigrasi` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `latpim_transmigrasi`;

-- Dumping structure for table latpim_transmigrasi.tb_rekomendasi
CREATE TABLE IF NOT EXISTS `tb_rekomendasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(250) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `tempat_lahir` varchar(100) DEFAULT NULL,
  `tanggal_lahir` varchar(250) DEFAULT NULL,
  `jk` varchar(15) DEFAULT NULL,
  `status` varchar(25) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `alamat` varchar(250) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `id_ttd` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table latpim_transmigrasi.tb_rekomendasi: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_rekomendasi` DISABLE KEYS */;
INSERT INTO `tb_rekomendasi` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `status`, `agama`, `alamat`, `pendidikan_terakhir`, `id_ttd`) VALUES
	(1, '7322032308760002', 'NAMRI', 'NGAWI', '2019-06-14', 'L', 'LAJANG', 'ISLAM', 'N', 'S1', 3),
	(2, '7322032308760002', 'MUH. NAMRI NAWIR', 'LUWU UTARA', '2019-06-14', 'L', 'LAJANG', 'Islam', 'jlskald', 'S1', NULL),
	(3, '7322032308760002', 'SULASMI AMIR, S.STP', 'LUWU UTARA', '2019-06-14', 'L', 'LAJANG', 'Islam', 'jlskald', 'S1', NULL);
/*!40000 ALTER TABLE `tb_rekomendasi` ENABLE KEYS */;

-- Dumping structure for table latpim_transmigrasi.tb_ttd
CREATE TABLE IF NOT EXISTS `tb_ttd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `nip` varchar(50) DEFAULT NULL,
  `pangkat` varchar(250) DEFAULT NULL,
  `jabatan` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table latpim_transmigrasi.tb_ttd: ~6 rows (approximately)
/*!40000 ALTER TABLE `tb_ttd` DISABLE KEYS */;
INSERT INTO `tb_ttd` (`id`, `nama`, `nip`, `pangkat`, `jabatan`) VALUES
	(1, 'Ir. H. AGUSSAMIL LAMBONG', '19620419 199103 1 004', 'Pembina Utama Muda/ IV/c', 'KEPALA DINAS'),
	(2, 'Ir. MARTHINA SIMON, M.Si', '19660301 199610 2 001', 'Pembina TK.I / IV/b', 'SEKRETARIS'),
	(3, 'FITRIANI BAKRI, SE, M.Si', '19720115 200701 2 018', 'Penata Tk.I / III/d', 'KABID PEMBERDAYAAN TENAGA KERJA'),
	(4, 'FAHARUDDIN, A.Md', '19650506 198603 1 014', 'Penata Tk.I / III/d', 'KASI PELATIHAN & PRODUKTIFITAS TENAGA KERJA'),
	(5, 'NILASARI, SH', '19780111 200701 2 014', 'Penata/ III/c', 'KASI INFORMASI PASAR KERJA & PERLINDUNGAN TENAGA KERJA'),
	(6, 'NURAINI SYARIFUDDIN, SE', '19750915 200901 2 002', 'Penata Muda Tk.I / III/b', 'KASI PENEMPATAN PERLUASAN & PENGEMBANGAN KESEMPATAN KERJA');
/*!40000 ALTER TABLE `tb_ttd` ENABLE KEYS */;

-- Dumping structure for table latpim_transmigrasi.tb_users
CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table latpim_transmigrasi.tb_users: ~0 rows (approximately)
/*!40000 ALTER TABLE `tb_users` DISABLE KEYS */;
INSERT INTO `tb_users` (`id`, `username`, `password`, `email`) VALUES
	(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com');
