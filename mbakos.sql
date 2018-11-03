-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 26, 2017 at 04:31 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kos`
--

CREATE TABLE IF NOT EXISTS `tbl_kos` (
  `id_kos` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `alamat` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` int(11) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `tipe` enum('Putri','Putra','Campur') NOT NULL,
  `image_header` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tbl_kos`
--

INSERT INTO `tbl_kos` (`id_kos`, `id_user`, `deskripsi`, `alamat`, `slug`, `date`, `time`, `status`, `kota`, `harga`, `nama`, `tipe`, `image_header`) VALUES
(12, 3, 'Batas kunjungan jam 10 malam. 1 kamar 1 penghuni tidak bisa berdua. Tidak terima pasutri. Kunci gerbang diberikan masing - masing. Tamu dilarang menginap. Pembayaran kost paling telat tanggal 5 setiap bulannya. Cuci baju sendiri / laundry. Dilarang berisik / gaduh. Tidak boleh bawa binatang peliharaan.', 'Jl.Raya Paledang Bandung No.33', 'Kost-BR-46-Pasteur-Bandung', '2017-07-10', '22:51:49', 1, 'Bandung', 500000, 'Kost BR 46 Pasteur Jawa Barat Bandung', 'Putra', 'kos1.jpg'),
(13, 3, 'Sekamar berdua 1.325.000/bulan. Harga sewa kamar lainnya 1.175.000/ bulan (Ada air panas) atau bila sekamar berdua menjadi 1.575.000/bulan.', 'Jl. Permai No.17 Cigadung Cibeunying Kaler Kota Bandung ', 'Kost-Cibeunying-Permai', '2017-06-07', '13:56:15', 1, 'bandung', 700000, 'Kost Cibeunying Permai', 'Putri', 'kos2.jpg'),
(14, 3, 'Wifi 24 jam unlimited, termasuk listrik (bawa dispenser tambah 50rb/bulan) , tersedia cuci setrika', 'Jl.Anjani Sukasari Bandung No.90', 'guest-house-anjani-sukasari-bandung', '2017-06-07', '15:47:06', 1, 'Bandung', 600000, 'Guest House Anjani Sukasari Bandung', 'Campur', 'kos3.jpg'),
(33, 6, '10 menit Ber jalan kaki ke UNPAR ,TV Cable, Wifi 24 Jam, Fasilitas Kost Bersih, Satpam 24 Jam, CCTV 24 Jam, Cleaning Service Terlatih,', 'Jl.Cidadap No.1', 'kost-platinum-cidadap-bandung', '2017-07-12', '15:27:02', 1, 'Bandung', 900000, 'Kost Platinum Cidadap Bandung', 'Putra', '1.jpg'),
(34, 7, 'fasilitas kamar standar: wifi, kasur, lemari, gantungan baju, cermin, ember, gayung, dllrequest tambahan fasilitas seperti : tv, saluran tv cable, ac, air panas (harga berbeda)listrik token\r\nup grade untuk penambahan fasilitas ac, air panas, tv cable disesuaikan dengan request fasilitas yabgbdiinginkan penyewa', 'Jl. Cibiru No.900', 'kost-bowie-cibiru-bandung', '2017-07-12', '15:29:56', 1, 'Bandung', 1000000, 'Kost Bowie Cibiru Bandung', 'Putra', '2.jpg'),
(35, 8, 'Bayar 2 bulan di awal. Untuk selanjutnya bisa bayar bulanan sebelum tgl 5 di awal bulan.Bisa berdua dalam 1 kamar. Biaya kos masing2 rp 750 ribu per bulan.Batas kunjungan jam 9 malam.Batas pergi jam 11 malam, sekali2 bisa lebih malam dengan perjanjian dahulu dengan pengelola', 'Jl. Sukaluyu No.222', 'kost-sapujagad-2-sukaluyu-bandung', '2017-07-12', '15:32:13', 1, 'Bandung', 850000, 'Kost Sapujagad 2 Sukaluyu Bandung', 'Putra', '3.jpg'),
(36, 9, 'Dekat dengan telkom university. Depan Lapangan Bola (luas)AmanBebas BanjirDekat Kampus Telkom University', 'Jl. Wisma No.88', 'kost-wisma-lentera-bandung', '2017-07-12', '15:34:44', 1, 'Bandung', 1100000, 'Kost Wisma Lentera Bandung', 'Putra', '4.jpg'),
(37, 10, 'Dilarang melakukan tindakan yg melanggar norma-norma kesusilaan. Harga kosan sudah termasuk biaya laundry 20 Kg/bulan, 5 Kg/minggu.Jam check out maksimal 13.00 , akan dikenakan extra time 25rbu/6 jam. Harga sewa tergantung kamar yg dipilih, dan fasilitas yg di ambil', 'Jl. Rancasari No.88', 'kost-pondok-mars-barat-iii-no-8-tipe-b-rancasari-bandung', '2017-07-12', '15:37:02', 1, 'Bandung', 1500000, 'Kost Pondok Mars Barat III No. 8 Tipe B Rancasari Bandung', 'Putra', '6.JPG'),
(38, 11, 'biaya tambahan internet Rp. 50.000', 'Jl. Subur Coblong No.21', 'kost-sadang-subur-i-coblong-bandung', '2017-07-12', '15:39:31', 1, 'Bandung', 550000, 'Kost Sadang Subur I Coblong Bandung', 'Campur', '7.jpg'),
(39, 12, 'Nyaman,,aman,,cocok untuk mahasiswa dan pekerja. sebagian besar bangunan baru jadi. byr kosan 1 thn cash byr hanya 11 bulan saja.dan kost ini dekat dengan kampus UPI,UIN, STIKES BAKTI KENCANA, bisa ditempuh dengan berjalan kaki tidak perlu naik ojek bagi yang tdk membawa kendaraan, karena jaraknya yg sangat dekat dengan jalan raya. Pemilik kos rumahnya di depan kosan yang ada gambar burung dan rusa di temboknya', 'Jl. Cibiru No.21', 'kost-pondok-jati-cibiru-bandung', '2017-07-12', '15:41:26', 1, 'Bandung', 750000, 'Kost Pondok Jati Cibiru Bandung', 'Campur', '8.jpg'),
(40, 13, 'Angkutan umum .Dkt jalan Besar,sirkulasi udara bagus', 'Jl. Sukasari No.121', 'kost-niji-house-sukasari-bandung', '2017-07-12', '15:44:16', 1, 'Bandung', 500000, 'Kost Niji House Sukasari Bandung', 'Campur', '9.JPG'),
(41, 14, 'Fasilitas:-Kamar mandi di dalam-Listrik token masing-masing kamar-Tidak ada tagihan sampah dan air tiap bulan nya-Antena TV masing-masing kamar-Tersedia warung kebutuhan sehari-hari (sembako, pulsa, tiken listrik, galon, dll)-Dekat warung nasi dan tempat makan -Dekat dengan minimarket-Dekat dengan jalan raya-Ke kampus UIN tinggal jalan.', 'Jl. Cibeurem No.812', 'kost-nyaman-cibeurem-bandung', '2017-07-12', '10:47:04', 1, 'Bandung', 650000, 'Kost Nyaman Cibeurem Bandung', 'Putri', '10.jpg'),
(42, 15, 'Design Kamar Tidur Minimalis, Perlengkapan Kamar Mandi sudah Tersedia kasur Springbed,Meja belajar, Kursi, Lemari baju, Kamar Mandi di dalam, Lengkap dengan air Panas, kloset duduk dan wastafelJaringan Internet khusus Penghuni 24 JamJaringan TV kabel,Cleaning service khusus kamar di bersihkan seminggu 2 kali,Cuci Baju dan Setrika 8 potong /2 hari sekali , Tersedia ruang belajar yang luas dan nyaman, Tersedia parkir mobil dan motor', 'Jl. Peta 90', 'kost-amara-residence-bandung', '2017-07-12', '15:50:08', 1, 'Bandung', 450000, 'Kost Amara Residence Bandung', 'Putri', '11.jpg'),
(43, 16, 'Harga sudah termasuk listrik. Bila sekamar berdua dikenai tambahan 500ribu. Tersedia harga 1,6juta (ukuran kamar lebih kecil).', 'Jl. Tubagus Ismanil No.90', 'kost-tipe-a-tubagus-ismail-depan-no-90-bandung', '2017-07-12', '15:53:42', 1, 'Bandung', 950000, 'Kost Tipe A Tubagus Ismail Depan No. 90 Bandung', 'Campur', '12.jpg'),
(44, 17, 'Batas jam berkunjung sampai jam 10. Harga sudah termasuk listrik', 'Jl. Kosambi No.18', 'kost-wartawan-18-bandung', '2017-07-12', '15:55:52', 1, 'Bandung', 1600000, 'Kost wartawan 18 Bandung', 'Putri', '13.jpg'),
(45, 18, 'Harga sudah termasuk listrik dan air. Free Nasi putih malam saja. Sekamar berdua tambah 300.000/bulan.', 'Jl. Ciheulang No.235', 'kost-terusan-ciheulang-no-235-b-type-a-coblong-bandung', '2017-07-12', '15:57:43', 1, 'Bandung', 1700000, 'Kost Terusan Ciheulang No. 235 B Type A Coblong Bandung', 'Putri', '14.jpg'),
(46, 19, 'Jam berkunjung sampai jam 10 malam. Tamu lawan jenis tidak boleh menginap,jika berkunjung seperlunya saja. Harga sudah termasuk listrik. Biaya tambahan 50rb jika bawa tv & dispenser. Sekamar berdua biaya jadi 600rb/bulan.', 'Jl. Antanan 1', 'kost-antanan-1-bandung', '2017-07-12', '16:00:09', 1, 'Bandung', 1300000, 'Kost Antanan 1 Bandung', 'Putri', '15.jpg'),
(47, 20, 'Semua kamar kost dan paviliun baru selesai direnovasi dan di cat ulang. Tersedia 4 kamar kost dan 3 Paviliun. Kamar kost berada di lantai atas dg fasilitas 2 (dua) kamar mandi luar dan 1 (satu) pantry utk dipakai bersama. Untuk paviliun berada di lantai bawah, masing-masing memiliki dua ruangan/kamar, kamar mandi dalam dan pantry.', 'Jl. Dago No.87', 'kost-dan-paviliun-dago-cintawangi-bandung', '2017-07-12', '16:11:53', 1, 'Bandung', 1050000, 'Kost dan Paviliun Dago Cintawangi Bandung', 'Putri', '16.jpg'),
(48, 21, 'Jam malam sampai pukul 22.00. Harga sudah termasuk listrik dan air. Free air minum. Free Laundry 4 potong. Parkir mobil 150.000/bulan (Free cuci mobil 2-3x)', 'Jl. Coblong No.6', 'kost-yayu-no16-type-b-coblong-bandung', '2017-07-12', '16:14:28', 1, 'Bandung', 1400000, 'Kost Yayu No.16 Type B Coblong Bandung', 'Putri', '18.jpg'),
(49, 22, 'Harga sudah termasuk listrik, Wifi-Internet, pembayaran bisa perbulan, Laundri 20kg/bulan, batas bertamu jam 22.00 WIB', 'Jl. Sukajadi No.23', 'kost-light-home-sukajadi-bandung', '2017-07-12', '16:16:38', 1, 'Bandung', 2000000, 'Kost Light Home Sukajadi Bandung', 'Putri', '20.jpg'),
(50, 23, '. Batasan Kunjungan Tamu : -*. Harga Termasuk listrik : belum*. Biaya tambahan untuk parkir mobil : Tidak ada biaya tambahan*. Ada Cleaning Room ? : -*. Ada Fasilitas laundry? : -*. Akses kunci 24 jam? : Ya, penghuni diberikan kunci gerbang*. WIFI memakai sistem voucer? : ada Wifi*. Fasilitas dapur, gas harus iuran ? : ada Dapur', 'Jl. Dipatiukur No.17', 'kost-nur-house-bandung', '2017-07-12', '16:18:49', 1, 'Bandung', 1150000, 'Kost Nur House bandung', 'Campur', '17.jpg'),
(51, 24, 'Harga sudah termasuk listrik dan air tapi belum termasuk Laundry. Sekamar berdua ada tambahan biaya.- Terdapat teras pribadi di kamar, beserta kursi dan meja - Memiliki pemandangan indah dari kamar dan teras- Terdapat bath up pribadi & kamar mandi luas', 'Jl. Pagarsih No.78', 'kost-tian-jalan-pagarsih-no78', '2017-07-12', '16:20:36', 1, 'Bandung', 2700000, 'Kost Tian Jalan Pagarsih No.78', 'Campur', '19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE IF NOT EXISTS `tb_role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `nama_role`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `fullname`, `jk`, `email`, `no_hp`, `alamat`, `id_role`) VALUES
(1, 'sheptian', 'e2d74b7c4ccda2a5a2ac3819f419e4ef', 'sheptian bagja utama', 'Pria', 'sheptian96@gmail.com', '087824392239', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 1),
(3, 'alvian', 'e10adc3949ba59abbe56e057f20f883e', 'alvian ahja wijaya', 'Pria', 'alvian@gmail.com', '085222549953', 'Jl.Pagarsih Gg.Holili No.120 Blok 87 RT02/RW09', 2),
(5, 'bla', 'e10adc3949ba59abbe56e057f20f883e', 'bla bla bla', 'Wanita', 'bla@gmail.com', '789456142', 'Jl.Cibiru', 2),
(6, 'kurniawan', 'e10adc3949ba59abbe56e057f20f883e', 'Kurniawan Aditya', 'Pria', 'kurniawan@gmail.com', '08752563663', 'Jl.Raya Cibeurem No.19', 2),
(7, 'nawan', 'e10adc3949ba59abbe56e057f20f883e', 'Nawan Tutu Syah Lampah', 'Pria', 'nawan@gmail.com', '085322145896', 'Jl. Raya Cimahi No.90', 2),
(8, 'rudy', 'e10adc3949ba59abbe56e057f20f883e', 'Rudy Setiawan', 'Pria', 'rudy@gmail.com', '085369985555', 'Jl.Pasir Impun No.90', 2),
(9, 'firman', 'e10adc3949ba59abbe56e057f20f883e', 'Firman Alhadiansyah', 'Pria', 'firman@gmail.com', '085244215511', 'Jl. Ir.Hj Juanda No.11', 2),
(10, 'tantan', 'e10adc3949ba59abbe56e057f20f883e', 'Tantan Faturahman', 'Pria', 'tantan@gmail.com', '08125648974', 'Jl. Gede Bangkong No.12', 2),
(11, 'azzi', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Azzi Alfurqon', 'Pria', 'azzi@gmail.com', '082133669988', 'Jl. Dipatiukur No.67', 2),
(12, 'reza', 'e10adc3949ba59abbe56e057f20f883e', 'Reza Yogi Andria', 'Pria', 'reza@gmail.com', '0228956938', 'Jl. Soekarno Hatta No.90', 2),
(13, 'angga', 'e10adc3949ba59abbe56e057f20f883e', 'Rangga Jaya Utama', 'Pria', 'rangga@gmail.com', '08526335214', 'Jl. Pasirkoja No.90', 2),
(14, 'yuliani', 'e10adc3949ba59abbe56e057f20f883e', 'Yuliani Putri Utama', 'Wanita', 'yuliani@gmail.com', '087758521245', 'Jl.Holis No.87', 2),
(15, 'rahma', 'e10adc3949ba59abbe56e057f20f883e', 'Rahma Aulia', 'Wanita', 'rahma@gmail.com', '085245696963', 'Jl. Peta No.88', 2),
(16, 'ani', 'e10adc3949ba59abbe56e057f20f883e', 'Ani Yani', 'Wanita', 'ani@gmail.com', '085254698988', 'Jl.Sereh No.78', 2),
(17, 'rani', 'e10adc3949ba59abbe56e057f20f883e', 'Rani Suryani', 'Wanita', 'rani@gmail.com', '0852633562312', 'Jl. Jamika No.4', 2),
(18, 'rita', 'e10adc3949ba59abbe56e057f20f883e', 'Rita Asih', 'Wanita', 'rita@gmail.com', '085245658878', 'Jl. Sukamulya No.2', 2),
(19, 'Kartika', 'e10adc3949ba59abbe56e057f20f883e', 'Kartika Sari', 'Wanita', 'kartika@gmail.com', '089563652145', 'Jl. Sunda No.22', 2),
(20, 'ariska', 'e10adc3949ba59abbe56e057f20f883e', 'Sri Ariska', 'Wanita', 'ariska@gmail.com', '085622325645', 'Jl. Ciroyom', 2),
(21, 'yayu', 'e10adc3949ba59abbe56e057f20f883e', 'Yayu', 'Wanita', 'yayu@gmail.com', '085698974563', 'Jl. Burangrang No.82', 2),
(22, 'kezia', 'e10adc3949ba59abbe56e057f20f883e', 'Kezia Andria', 'Wanita', 'kezia@gmail.com', '08545689758', 'Jl. Buah Batu No.32', 2),
(23, 'Nurhikmah', 'e10adc3949ba59abbe56e057f20f883e', 'Nurhikmah', 'Wanita', 'nur@gmail.com', '0856478945', 'Jl. Dipatiukur No.56', 2),
(24, 'tian', 'e10adc3949ba59abbe56e057f20f883e', 'Tian Bagja ', 'Pria', 'tian@gmail.com', '087854446958', 'Jl. Pagarsih', 2),
(25, 'test', 'e10adc3949ba59abbe56e057f20f883e', 'testest', 'Pria', 'test@gmail.com', '087857846', 'Jl.Pagarsih', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
