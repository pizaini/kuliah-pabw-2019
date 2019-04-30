# Kuliah: Pengembangan Aplikasi Berbasis Web (PHP)
## DB Structure

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;