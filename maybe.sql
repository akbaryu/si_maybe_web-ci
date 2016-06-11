-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Des 2015 pada 07.53
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maybe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE IF NOT EXISTS `data_admin` (
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`nama`, `username`, `password`) VALUES
('Kelompok 4', 'lis', 'lis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_event`
--

CREATE TABLE IF NOT EXISTS `data_event` (
`id_event` int(15) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `bataswaktu` varchar(30) DEFAULT NULL,
  `telp` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_event`
--

INSERT INTO `data_event` (`id_event`, `judul`, `deskripsi`, `gambar`, `username`, `email`, `bataswaktu`, `telp`) VALUES
(1, 'Seminar', 'Deskripsi-seminar', 'aku-rapopo-86.jpg', NULL, '', NULL, NULL),
(8, 'eventsekarang', 'eventsekarang', 'MAHASISWA_ngirit.jpg', NULL, '', NULL, NULL),
(9, 'cek1', 'cek1', 'r6_stunt.jpg', NULL, '', NULL, NULL),
(11, 'asdiji', 'jaisjdiasjidjasi', 'sportbiketrackgear_main_logo_1422558528__81986.png', NULL, '', NULL, NULL),
(19, 'bbbbbbbbbbbb', 'asdasd', '1011279_769826713047176_848985948_n.jpg', NULL, 'bbbbbbbbb', NULL, NULL),
(20, 'cccccccc', 'ccccc', '541814_402261003236238_1746332513_n.jpg', NULL, 'ccccccccc', NULL, NULL),
(21, 'cccccccc', 'ccccc', '541814_402261003236238_1746332513_n.jpg', NULL, 'ccccccccc', NULL, NULL),
(22, 'asd', 'asd', 'Stiker_on636.PNG', NULL, 'a', NULL, NULL),
(23, 'ko', 'asodk', 'psikiatri_ku2.PNG', NULL, 'asdko', NULL, NULL),
(24, 'event', 'event', '400581_717782464932882_262586124_n.jpg', NULL, 'event', 'event', 0),
(25, 'tambahtips', 'tambahtips', '1002221_607244736011025_1436007886_a.jpg', NULL, 'tambahtips', 'tambahtips', 0),
(26, '1111111111', 'asd', '1488666_10200822709041200_329329712_n.jpg', NULL, '11111111111', '1111111111', 2147483647),
(27, '222222', '222222', '1002221_607244736011025_1436007886_a.jpg', NULL, '222222', '222222', 222222),
(28, 'asd', 'asd', 'Stiker_on636.PNG', NULL, 'a', NULL, NULL),
(29, 'registereventnow', 'registereventnow', '969308_597299586984721_218865735_n.jpg', NULL, 'registereventnow', NULL, NULL),
(30, 'cobaa', 'coba', '945828_658976917485911_1183193586_n.jpg', NULL, 'coba', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_gejala`
--

CREATE TABLE IF NOT EXISTS `data_gejala` (
`id_gejala` int(100) NOT NULL,
  `nama_gejala` varchar(100) NOT NULL,
  `judul_artikel` varchar(150) NOT NULL,
  `deskripsi_gejala` varchar(5000) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `gambar` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_gejala`
--

INSERT INTO `data_gejala` (`id_gejala`, `nama_gejala`, `judul_artikel`, `deskripsi_gejala`, `username`, `gambar`) VALUES
(1, 'lagi', 'coba', 'ajaaaahhhhhhhhhhhh', NULL, NULL),
(2, 'contoh', 'contoh judul', 'Salju tipis melapis rumput, putih berkilau diseling warna jingga; bayang matahari senja yang memantul. Angin awal musim dingin bertiup menggigilkan, mempermainkan daun-daun sisa musim gugur dan menderaikan bulu-bulu burung berwarna kuning kecoklatan yang sedang meloncat-loncat dari satu ranting ke ranting yang lain.\r\nTopik yang tepat untuk deskripsi misalnya: Keindahan Bukit Kintamani, Suasa pelaksanaan, Promosi, Kompetensi Siswa SMK Tingkat Nasional, Keadaan ruang praktik, Keadaan daerah yang dilanda bencana.\r\n\r\nLangkah menyusun deskripsi: Tentukan objek atau tema yang akan dideskripsikan, Tentukan tujuan, Tentukan aspek-aspek yang akan dideskripsikan dengan melakukan pengamatan, Susunlah aspek-aspek tersebut ke dalam urutan yang baik, apakah urutan lokasi, urutan waktu, atau urutan menurut kepentingan, Kembangkan kerangka menjadi deskripsi', NULL, NULL),
(3, 'contoh', 'lalalal', 'yeyyeyeyeyeyeyeyeyyeyeyey', NULL, NULL),
(4, 'tambahgejala', 'tambahgejala', 'tambahgejala', NULL, '1005026_611990565505069_1579742883_n.jpg'),
(5, 'tambahgejala', 'tambahgejalatambahgejala', 'tambahgejala', NULL, NULL),
(6, '1111111111', '11111111111', '1111111111', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_tips`
--

CREATE TABLE IF NOT EXISTS `data_tips` (
`id_tips` int(50) NOT NULL,
  `judul_tips` varchar(150) NOT NULL,
  `deskripsi_tips` varchar(5000) NOT NULL,
  `jenis_tips` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `tgl` varchar(15) NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_tips`
--

INSERT INTO `data_tips` (`id_tips`, `judul_tips`, `deskripsi_tips`, `jenis_tips`, `username`, `tgl`, `gambar`) VALUES
(1, 'POSISI TIDUR YANG BAIK UNTUK IBU HAMIL', 'Posisi Tidur Saat Hamil\r\nKehamilan adalah hal yang paling dinanti-natikan oleh seorang ibu, apalagi merupakan kehamilan pertama. Banyak calon ibu-ibu baru masih terasa belum nyaman dengan keadaan baru dan status barunya pada saat mau akan tidur. Terkadang bingung harus berbuat apa karena takut akan kenyamanan seorang bayi. Namun jangan khawatir dengan berfikir positif anda akan merasa nyaman dan tenang.\r\nIbu hamil pada trimester pertama boleh tidur dengan posisi apapun yang dapat memberikan rasa nyaman dan rileks, sebab kandungannya belum terlalu besar. Namun ibu hamil biasanya akan cemas saat memasuki trimester ke dua dan ketiga.\r\nTak perlu cemas dan khawatir, secara medis janin yang di dalam kandungan memiliki caranya tersendiri untuk menyamankan diri. Semua ini sudah diciptakan sedemikian rupa oleh Allah sang pencipta segalanya. Janin di dalam kandungan akan mengapung dalam cairan ketuban ibu, sehingga janin bisa berputar atau bergerak bebas sampai terasa nyaman.\r\nAda beberapa posisi tidur yang baik bagi ibu hamil yang di anjurkan setelah kehamilan memasuki trimester ke dua dan ketiga. Yakni pada saat perut mulai terrlihat membesar sehingga memerlukan perhatian lebih. Coba simak tips tidur yang baik bagi ibu hamil.\r\n1.	Tidur Terlentang atau tengkurap : Pada trimester pertama yakni (0-14 minggu)\r\nUntuk trimester pertama ibu hamil tidak perlu khawatir sebab keadaan janin maasih kecil, posisi tidur boleh terlentang ataupun tengkurap. Sebab janin yang di dalam kandungan masih bisa bergerak bebas dan ditopang  oleh cairan air ketuban. Namun perlu diperhatikan biasanya saat tidur tengkurap payudara menempel pada tempat tidur akan sedikit sensitif. Oleh karenanya cari posisi tidur senyaman mungkin.\r\n2.	Tidur miring : Pada trimester kedua yakni (14-28 minggu)\r\nTidur miring dianjurkan setelah kehamilan 14 minggu. Ibu hamil sudah disarankan tidak boleh tidur dengan terlentang apalagi tengkurap, karena dengan tidur posisi terlentang anda akan meletakkan seluruh berat rahim ke bagian belakang, usus, dan vena cava inferior. Tidur posisi terlentang juga dapat meningkatkan resiko sakit pinggang, wasir,dan gangguan pencernaan, dan mengganggu pernapasan dan sirkulasi. Kerja ginjal akan sedikit terganggu sebab terkena beban rahim. Tidur tengkurappun tidak boleh karena rahim atau janin akan menopang beban tubuh ibu hamil sehingga akan tergencat. Jadi tidak disarankan untuk tidur tengkurap.\r\n3.	Tidur miring kanan atau kiri : Pada trimester ketiga (28-42 minggu)\r\nSaat hamil tua atau sudah lebih dari 28 minggu adalah saat beban rahim mulai berat sekali. Untuk itu ibu hamil disarankan untuk tidur dengan posisi miring kanan atau kiri. Tidak boleh tidur terlentang sebab dapat mempengaruhi tekanan darah. Untuk beberapa wanita, dapat menyebabkan penurunan darah yang membuat mereka merasa pusing, untuk yang lain malah meningkatkan tekanan darah. Pada kasus kehamilan dengan tekanan darah tinggi, tidur pada posisi terlentang sangat tidak dianjurkan. Cari posisi senyaman mungkin saat tidur miring. Jaga kehamilan anda dengan baik dengan posisi tidur yang baik. Semoga anda selamat dan lancar sampai masa melahirkan tiba. Serta ibu dan bayinya selamat. Amin.', 'Tips Ibu Hamil', NULL, '8/2/2010', '16679_769807233049124_6967839_n2.jpg'),
(2, 'Resep Makanan Bayi 6-8 Bulan: Bubur Daging', 'Resep Makanan Bayi 6-8 Bulan: Bubur Daging\r\n\r\nBahan:\r\n\r\n1 cangkir beras, cuci bersih\r\n50 gram daging sapi cincang\r\n1 batang seledri, potong-potong\r\n1 batang wortel, kupas, potong-potong\r\n2 cangkir air\r\n\r\nCara Memasak:\r\n\r\nCuci bersih beras\r\nPotong seledri kecil-kecil\r\nKupas dan potong kecil wortel\r\nCampur semua bahan lalu masak hingga menjadi bubur\r\nHaluskan', 'Tips Bayi', 'lis', '3/8/2012', '16679_769807233049124_6967839_n2.jpg'),
(4, 'tipscobaini', 'tipscobaini', 'Tips Bayi', 'lis', '9/9/2017', '16679_769807233049124_6967839_n2.jpg'),
(5, '', '', 'Tips Ibu Hamil', NULL, 'tgl/bulan/tahun', 'Penguins2.jpg'),
(6, 'h8', 'hihi', 'Tips Bayi', NULL, '20 h', 'Desert3.jpg'),
(7, 'aaaaaa', 'aaaaaaaaaaaaa', 'Tips Ibu Hamil', NULL, '12/12/12', '561636_617551868280250_532307067_n.jpg'),
(8, '333333333', '333333333', 'Tips Bayi', NULL, '333333333', '969308_597299586984721_218865735_n1.jpg'),
(9, '333333333', '333333333', 'Tips Bayi', NULL, '333333333', '969308_597299586984721_218865735_n2.jpg'),
(10, 'aaaaaa', 'aaaaa', 'Tips Ibu Hamil', NULL, 'aaaaaa', '150304_488568217909862_545454974_a.jpg'),
(11, 'aaaaaa', 'aaaaa', 'Tips Ibu Hamil', NULL, 'aaaaaa', '150304_488568217909862_545454974_a1.jpg'),
(12, 'aaaaaa', 'aaaaa', 'Tips Ibu Hamil', NULL, 'aaaaaa', '150304_488568217909862_545454974_a2.jpg'),
(13, 'aaaaaa', 'aaaaa', 'Tips Ibu Hamil', NULL, 'aaaaaa', '150304_488568217909862_545454974_a3.jpg'),
(14, 'aaaaaa', 'aaaaa', 'Tips Ibu Hamil', NULL, 'aaaaaa', '150304_488568217909862_545454974_a4.jpg'),
(15, '0000000', '0000000', 'Tips Ibu Hamil', NULL, '0000000', '561636_617551868280250_532307067_n.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_event`
--

CREATE TABLE IF NOT EXISTS `register_event` (
`id_event` int(15) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bataswaktu` varchar(30) DEFAULT NULL,
  `telp` int(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register_event`
--

INSERT INTO `register_event` (`id_event`, `judul`, `deskripsi`, `gambar`, `username`, `email`, `bataswaktu`, `telp`) VALUES
(7, 'asd', 'asd', 'Stiker_on636.PNG', 'asdu', 'a', 'tgl-bulan-tahun', 92892),
(10, 'registereventnow', 'registereventnow', '969308_597299586984721_218865735_n.jpg', 'registereventnow', 'registereventnow', 'registereventnow', 0),
(11, 'cobaa', 'coba', '945828_658976917485911_1183193586_n.jpg', 'coba', 'coba', 'coba', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_uploadimage`
--

CREATE TABLE IF NOT EXISTS `tb_uploadimage` (
`id` int(3) NOT NULL,
  `nm_gbr` varchar(35) DEFAULT NULL,
  `tipe_gbr` varchar(10) DEFAULT NULL,
  `ket_gbr` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_uploadimage`
--

INSERT INTO `tb_uploadimage` (`id`, `nm_gbr`, `tipe_gbr`, `ket_gbr`) VALUES
(5, 'file_1448700596.jpg', 'image/jpeg', 'kopi'),
(6, 'file_1448701881.jpg', 'image/jpeg', 'asd'),
(7, 'file_1448704026.jpg', 'image/jpeg', 'turing'),
(8, 'file_1448705660.PNG', 'image/png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `data_event`
--
ALTER TABLE `data_event`
 ADD PRIMARY KEY (`id_event`), ADD KEY `username` (`username`);

--
-- Indexes for table `data_gejala`
--
ALTER TABLE `data_gejala`
 ADD PRIMARY KEY (`id_gejala`), ADD KEY `username` (`username`);

--
-- Indexes for table `data_tips`
--
ALTER TABLE `data_tips`
 ADD PRIMARY KEY (`id_tips`), ADD KEY `username` (`username`);

--
-- Indexes for table `register_event`
--
ALTER TABLE `register_event`
 ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_uploadimage`
--
ALTER TABLE `tb_uploadimage`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_event`
--
ALTER TABLE `data_event`
MODIFY `id_event` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `data_gejala`
--
ALTER TABLE `data_gejala`
MODIFY `id_gejala` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_tips`
--
ALTER TABLE `data_tips`
MODIFY `id_tips` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `register_event`
--
ALTER TABLE `register_event`
MODIFY `id_event` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_uploadimage`
--
ALTER TABLE `tb_uploadimage`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_event`
--
ALTER TABLE `data_event`
ADD CONSTRAINT `data_event_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_admin` (`username`);

--
-- Ketidakleluasaan untuk tabel `data_gejala`
--
ALTER TABLE `data_gejala`
ADD CONSTRAINT `data_gejala_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_admin` (`username`);

--
-- Ketidakleluasaan untuk tabel `data_tips`
--
ALTER TABLE `data_tips`
ADD CONSTRAINT `data_tips_ibfk_1` FOREIGN KEY (`username`) REFERENCES `data_admin` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
