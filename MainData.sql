-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2020 at 01:58 AM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourcitru_MainData`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `phone` varchar(100) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  `ip` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `date_send` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id`, `email`, `fullname`, `message`, `phone`, `lat`, `lng`, `ip`, `lokasi`, `date_send`) VALUES
(1, 'pujiermanto@gmail.com', 'Puji Ermanto', '&lt;p&gt;halo admin aku testing buku tamu&lt;/p&gt;\r\n\r\n&lt;p&gt;&lt;strong&gt;hai admin apa kabarnya?&lt;/strong&gt;&lt;/p&gt;\r\n', '0882-2227-8772', -6.9217, 107.607, '139.195.31.114', 'Bandung-West Java', 1589746065),
(2, 'ujiganteng@hotmail.com', 'Uji Ganteng', '&lt;p&gt;halo brok apa kabarnya nih mudah2an pada sehat walaupun beraktifitas di tengah pandemi yang melanda sekarang ini.&lt;/p&gt;\r\n', '0892-2666-887', -6.9217, 107.607, '139.195.31.114', 'Indonesia/Bandung-West Java(Linknet-Fastnet ASN)', 1589818937);

-- --------------------------------------------------------

--
-- Table structure for table `halloffame`
--

CREATE TABLE `halloffame` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `totalincome` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halloffame`
--

INSERT INTO `halloffame` (`id`, `judul`, `nama`, `username`, `image`, `kota`, `negara`, `totalincome`, `url`) VALUES
(1, 'INTERNATIONAL DIRECTOR', 'IVA YULIANI ', 'TRILIUNER', '', 'SURABAYA', 'INDONESIA', '', 'International-Director'),
(2, 'INTERNATIONAL DIRECTOR', 'GICHA KHAIRUNNISA ', 'GICHANISSA', '', 'PONTIANAK ', 'INDONESIA', '', 'International-Director'),
(3, 'INTERNATIONAL MANAGER ', 'RIYANTI PRATIWI ', 'RICHME', '', 'SUMEDANG ', 'INDONESIA', '', 'International-Manager'),
(4, 'INTERNATIONAL MANAGER ', 'AYU JUNITA ', 'SUNSHINE', '', 'BANDUNG ', 'INDONESIA', '', 'International-Manager'),
(5, 'INTERNATIONAL MANAGER  ', 'CHAIRUL IZWAN ', '', '', 'SURABAYA', 'INDONESIA', '', 'International-Manager'),
(6, 'INTERNATIONAL MANAGER ', 'FERRY YULIANTO ', 'FERRY001', '', 'JAKARTA ', 'INDONESIA', '', 'International-Manager'),
(7, 'INTERNATIONAL LEADER ', 'GILANG KUSTIAWATI ', '', '', 'KUNINGAN ', 'INDONESIA', '', 'International-Leader'),
(8, 'INTERNATIONAL LEADER ', 'SOFIYANI HAFSYAH ', 'SOFIEDSP', '', 'MEDAN', 'INDONESIA', '', 'International-Leader'),
(9, 'INTERNATIONAL LEADER ', 'NURUL HIDAYATI ', '', '', 'LOMBOK ', 'INDONESIA', '', 'International-Leader'),
(10, 'INTERNATIONAL LEADER ', 'MARYAM PUTERY RIMA', 'MEDINA', '', 'MAKASSAR ', 'INDONESIA', '', 'International-Leader'),
(11, 'INTERNATIONAL LEADER ', 'YULIANTI ', '', '', 'PALU ', 'INDONESIA', '66,201,000', 'International-Leader'),
(12, 'INTERNATIONAL LEADER ', 'VARIATI ', 'BUNDADHAVIN', '', 'PEKANBARU ', 'INDONESIA', '54,236,960', 'International-Leader'),
(13, 'INTERNATIONAL LEADER ', 'SILVI NOOR DIATI ', 'RICHBEAUTY', '', 'SIDOARJO ', 'INDONESIA', '49,076,000', 'International-Leader'),
(14, 'INTERNATIONAL LEADER ', 'FAHRIN AZAHRI ', 'BERKAH01', '', 'BANJARMASIN ', 'INDONESIA', '48,767,145', 'International-Leader'),
(15, 'INTERNATIONAL LEADER ', 'RENNY widya sary', '', '', 'PONTIANAK ', 'INDONESIA', '40,608,000', 'International-Leader'),
(16, 'INTERNATIONAL LEADER ', 'POUNDRA ARGA MARCDIANTO ', '', '', 'SURABAYA', 'INDONESIA', '33,266,000', 'International-Leader'),
(17, 'INTERNATIONAL LEADER ', 'SUHERMIN ', 'HERMIN001', '', 'SURABAYA ', 'INDONESIA', '31,847,500', 'International-Leader'),
(18, 'INTERNATIONAL LEADER ', 'LUTHFI KARDINA SARI ', 'DIENADNA', '', 'BANJARMASIN ', 'INDONESIA', '29,786,000', 'International-Leader'),
(19, 'INTERNATIONAL LEADER ', 'DESTY ', 'DESTIRJANSYAH', '', 'BANDUNG ', 'INDONESIA', '28,100,000', 'International-Leader'),
(20, 'INTERNATIONAL LEADER ', 'HJ WAHTI RAJABRIANI ', '', '', 'BANJARMASIN ', 'INDONESIA', '28,055,000', 'International-Leader'),
(21, 'INTERNATIONAL LEADER ', 'IRA SANDRA DINI ', '', '', 'LUBUK LINGGAU ', 'INDONESIA', '25,589,500', 'International-Leader'),
(22, 'INTERNATIONAL LEADER ', 'HJ BARIROH', '', '', 'JOMBANG ', 'INDONESIA', '25,390,500', 'International-Leader'),
(23, 'INTERNATIONAL LEADER ', 'DEVI APRILYA RAMADHANI', '', '', 'BAU BAU ', 'INDONESIA', '25,328,500', 'International-Leader'),
(24, 'INTERNATIONAL LEADER ', 'LIA MAMONTO ', 'LYAMAMONTO', '', 'JAKARTA ', 'INDONESIA', '22,893,670', 'International-Leader'),
(25, 'INTERNATIONAL LEADER ', 'WALANDA SE ', 'WALANDA1', '', 'PONTIANAK ', 'INDONESIA', '22,844,500', 'International-Leader'),
(26, 'INTERNATIONAL LEADER ', 'HJ MULYATI ', 'ATY1', '', 'MANOKWARI ', 'INDONESIA', '22,705,000', 'International-Leader'),
(27, 'INTERNATIONAL LEADER ', 'MARYAM OKTAVIA DEVI ', 'VIVIWILLY1', '', 'PALEMBANG', 'INDONESIA', '20,879,000', 'International-Leader'),
(28, 'INTERNATIONAL LEADER ', 'WINDA ', '', '', 'PONTIANAK ', 'INDONESIA', '20,065,500', 'International-Leader'),
(29, 'INTERNATIONAL LEADER ', 'NI KOMANG TUSTIANI ', '', '', 'LOMBOK', 'INDONESIA', '19,669,500', 'International-Leader'),
(30, 'INTERNATIONAL LEADER ', 'RATNA', '', '', 'wasior', 'INDONESIA', '17,772,000', 'International-Leader'),
(31, 'INTERNATIONAL LEADER ', 'IRMA ', '', '', 'BEKASI ', 'INDONESIA', '16,351,195', 'International-Leader'),
(32, 'INTERNATIONAL LEADER ', 'YANTO DH ', 'PASTISUKSES', '', 'SIDOARJO ', 'INDONESIA', '15,934,500', 'International-Leader'),
(33, 'INTERNATIONAL LEADER ', 'JAUMIL DIANDIR PERKASA ', 'ARRAHMAN', '', 'JAKARTA ', 'INDONESIA', '15,705,000', 'International-Leader'),
(34, 'INTERNATIONAL LEADER ', 'IWAN PASHA ', '', '', 'BANDUNG ', 'INDONESIA', '12,507,500', 'International-Leader'),
(35, 'INTERNATIONAL LEADER ', 'FITRIATI UTAMI NURNANINGSI', 'FUTAMI06', '', 'LOMBOK', 'INDONESIA', '14,100,000', 'International-Leader'),
(36, 'INTERNATIONAL LEADER ', 'PIPIH APRIANTI ', 'PIECHA', '', 'PALU', 'INDONESIA', '11,579,500', 'International-Leader'),
(37, 'INTERNATIONAL LEADER ', 'RINDI MARLIANTI ', 'BILLIONARE1', '', 'JAKARTA ', 'INDONESIA', '10,400,000', 'International-Leader');

-- --------------------------------------------------------

--
-- Table structure for table `info_terbaru`
--

CREATE TABLE `info_terbaru` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `url` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_post_update` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_terbaru`
--

INSERT INTO `info_terbaru` (`id`, `judul`, `image`, `content`, `url`, `author`, `date_created`, `date_post_update`, `id_user`) VALUES
(1, 'topup automaintenance', 'business1.png', '<p>Diberitahukan kepada seluruh member <strong>OURCITRUS</strong> yang ingin melakukan <strong>TOPUP AUTOMAINTENANCE</strong><br />\r\nSilahkan melakukan transfer nominal sesuai kekurangan saldo ke Rekening<br />\r\n<strong>BCA : PT. GEMILANG CITRUS BERJAYA </strong><br />\r\nKemudian konfirmasikan bukti transfer ke<br />\r\n<strong>WA ADMIN (Office Hours)</strong><br />\r\n<strong>0853-9571-6711</strong><br />\r\n<br />\r\n<br />\r\n<strong>Salam<br />\r\nManajemen OurCitrus</strong><br />\r\n&nbsp;</p>\r\n', 'topup-automaintenance', 'puji ourcitrus', 1589335534, 1589475564, 1),
(2, 'Ourcitrus Beach Party', 'flyer1.jpg', '<h3>Bangkok &amp; Bali 2020</h3>\r\n\r\n<p>Holidays &amp; Dream Stage</p>\r\n\r\n<ol>\r\n	<li>Masa Kualifikasi : 10 Januari 2020 s/d 30 Juni 2020</li>\r\n	<li>Jadwal Perjalanan : ( Juli 2020 atau September 2020)\r\n	<ul>\r\n		<li>Jakarta / Surabaya - Bangkok</li>\r\n		<li>Bangkok 3 Hari 2 Malam (Holidays)</li>\r\n		<li>Bangkok - Denpasar</li>\r\n		<li>Denpasar 2 hari 1 Malam ( Dream Stage - New Product Launching / Recognition / Royalty Achievment )</li>\r\n	</ul>\r\n	</li>\r\n	<li>Mengumpulkan Pembelanjaan group selama masa qualifikasi :\r\n	<ul>\r\n		<li>120 poin kiri - 120 poin kanan = 1 ticket + uang saku 1,5 juta</li>\r\n		<li>250 poin kiri - 250 poin kanan = 1 ticket + uang saku 7,5 juta</li>\r\n	</ul>\r\n	</li>\r\n</ol>\r\n\r\n<h2>Salam Gemilang</h2>\r\n\r\n<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/5TI675Ihy6s\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\r\n', 'Ourcitrus-Beach-Party', 'puji ourcitrus', 1589335534, 1589475459, 1),
(3, 'OurCitrus Masker paper', 'masker.jpg', '<h3 class=\"text-primary\">Beraktifitas sesuai himbauan pemerintah</h3>\r\n<p class=\"blockquote-footer\"> Imbauan mengenai pemakaian alat pelindung diri, dalam imbauan kali ini pemerintah menghimbau untuk menggunakan alat pelindung seperti masker untuk menjalankan aktifitas selama pandemi berlangsung. Mari kita simak dulu kelebihan dari produk masker dari perusahaan kami.</p>\r\n\r\n<p>Spesifikasi</p>\r\n\r\n<ul>\r\n	<li>Bahan : Kain / SpunBond</li>\r\n	<li>Anti Air</li>\r\n	<li>2 Lapis ( Bisa Tambah Lapisan Sendiri)</li>\r\n	<li>Ketebalan Kain 80 Gsm</li>\r\n	<li>Dapat Dicuci</li>\r\n	<li>Kuat Dan Tahan Lama</li>\r\n	<br />\r\n	<li>Warna Tersedia : Merah dan Hitam</li>\r\n</ul>\r\n', 'OurCitrus-Masker-paper', 'puji ourcitrus', 1589335534, 1589684254, 1),
(4, 'Selamat Menjalankan Ibadah Puasa', 'ramadhan.jpg', '<p>Segenap Management Dan Staff<br />\r\nMengucapkan<br />\r\nSelamat menunaikan Ibadah Puasa Ramadhan Mubarak - 1441 Hijriah<br />\r\n&nbsp;</p>\r\n\r\n<blockquote><span Class=\"text-success\">Bersihkan Hati</span><br />\r\n<span Class=\"text-info\">Jernihkan Pikiran</span><br />\r\n<span Style=\"color:salmon;\">Dan Sucikan Perbuatan</span></blockquote>\r\n\r\n<marquee Width=\"300\" Direction=\"right\" Class=\"text-primary\"><span Style=\"font-size:16px;\">s</span>alam | <span Style=\"font-size:16px;\">G</span>emilang</marquee>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>OURCITRUS | PT. Gemilang Citrus Berjaya</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Selamat-Menjalankan-Ibadah-Puasa', 'puji ourcitrus', 1589335534, 1589581807, 1),
(7, 'MPA Brazilian Propolis By Ourcitrus', 'MPA3-768x768.jpeg', '<p><span style=\"font-size:14px;color:firebrick;\">D</span>engan kandungan madu trigona, propolis, asam amino sangat baik untuk menjaga kesehatan dan antibiotik alami.</p>\r\n\r\n<p>Propolis dikenal mempunyai sifat anti bakteri, anti virus, anti jamur, dan anti radang dalam herbal ini dapat membantu memberikan perlindungan tubuh terhadap berbagai macam penyakit.</p>\r\n\r\n<p>by the way tentang menjaga stamina, kesehatan tubuh, ini sepertinya menjadi aset berharga bagi kesehatan kita. ditengah fenomena yang rama akhir-akhir ini. sebuah pandemi tersebar dengan skala global yang menghawatirkan, tentu saja kita bisa mencegah penyebaran pandemi ini, secara tidak langsung bila kita mengkonsumsi produk Propolis ini.</p>\r\n', 'MPA-Brazilian-Propolis-By-Ourcitrus', 'puji ourcitrus', 1589476836, 1589477130, 1),
(8, 'Dream Stage Ourcitrus 2020', 'kisspng-nightclub-disco-ball-dj-dance-speaker-5a780a82a5bf43_59462669151781645067897.png', '<p>Dream Stage bisnis OURCITRUS adalah momentum sejarah besar, Anda dan seluruh group bisnis anda harus hadir sebagai saksi sekaligus pelaku sejarah lahirnya bisnis Network besar karya anak bangsa Indonesia yang segera menguasai industri network Asia dan dunia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<blockquote>\r\n<p><tt>salam gemilang</tt></p>\r\n</blockquote>\r\n\r\n<p>slengkapnya dalam dream stage grand launching bisnis ourcitrus</p>\r\n', 'Dream-Stage-Ourcitrus-2020', 'puji ourcitrus', 1589478452, 1590171518, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produk_data`
--

CREATE TABLE `produk_data` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `key_search` varchar(255) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `harga_member` varchar(255) NOT NULL,
  `harga_non_member` varchar(255) NOT NULL,
  `ingredients` longtext NOT NULL,
  `carapenggunaan` longtext NOT NULL,
  `link` varchar(100) NOT NULL,
  `stock_in` int(11) NOT NULL,
  `stock_out` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk_data`
--

INSERT INTO `produk_data` (`id`, `image`, `nama`, `key_search`, `tipe`, `desc`, `harga_member`, `harga_non_member`, `ingredients`, `carapenggunaan`, `link`, `stock_in`, `stock_out`) VALUES
(1, 'slider3.jpg', 'twa voira', 'twa voira', 'nutrisi', '                                                                                                Minuman Serbuk Rasa Tomat Wortel Apel<br/>\r\nPOM NO: MD 867013058071<br/>\r\n1 Box @10 sachet @20 gram<br/>                                                       ', '                                                                                                                HARGA MEMBER IDR- 600,000                                                                                                                      ', '                                                                                                HARGA NON MEMBER IDR- 720,000                                                                                                                        ', '                                                                                                Ekstrak Buah Tomat. Ekstrak Wortel.<br/>\r\nEkstrak Buah Apel. Ekstrak Biji Anggur. Ekstrak Buah<br/>\r\nStrawberry. L Glutathione.<br/>                                                                                                                        ', '                                                                                                                Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum tidur.<br/>                                                                                                                        ', 'twa-voira', 0, 0),
(2, 'img-8.jpg', 'gcs revivar', 'gcs revivar', 'nutrisi', '                        Minuman Serbuk Rasa Anggur Dan Susu<br/>\r\nPOM NO: MD 867013071071<br/>\r\n1 Box @10 sachet @20 gram<br/>                        ', '                            HARGA MEMBER IDR- 600,000                        ', '                        HARGA NON MEMBER IDR- 720,000                        ', '                         L Glutathione. Fish Collagen. Spirulina. Extrak Buah Apel. Ekstrak Buah Anggur. EkstrakBuah Strawberry. Fibersol. <br/>                        ', '                            Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum tidur.<br/>                        ', 'gcs-revivar', 0, 0),
(3, 'work-3.jpg', 'spk banelo', 'spk banelo', 'nutrisi', 'Minuman Serbuk Rasa PISANG MANIS<br/>\r\nDINKES PIRT NO: 5133515700746 23<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'HARGA MEMBER IDR- 600,000', 'HARGA NON MEMBER IDR- 720,000', 'Ekstrak buah pisang, Vit A, Vit B1, B2, B6 . B12, Vit C, Vit D, Kalium,<br/>\r\nKalsium, Fosfor, Besi, Sodium, Zinc, Magneisum, Serat,<br/>\r\nResistant Strach (Pati Resisten), Serat Gandum. Ekstrak<br/>\r\nKopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,<br/>\r\nL Carnitin. L Glutathione. Citosan. Laktobasilus Parasasae.<br/>\r\nEkstrak Buah Lemon. Ekstrak Kunyit. <br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum makan terakhir.<br/>', 'spk-banelo', 0, 0),
(4, 'work-4.jpg', 'acb cardiavas', 'acb cardiavas', 'nutrisi', 'Minuman Serbuk Rasa Apel Merah<br/>\r\nPOM NO: MD 867013189071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'HARGA MEMBER IDR- 600,000', 'HARGA NON MEMBER IDR- 720,000', 'Ekstrak Buah Apel. Co-Enzim Q 10. Beta Glukan.\r\nSerat Jagung. Serat Gandum. Serat Jeruk.\r\nA A D H A E P A . Ekstrak Hati Ikan Hiu.\r\n74 Mineral Tumbuhan. Vitamin C. Omega 3,6,9.\r\nCitosan. Vitamin E. Kayu Manis.', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.\r\nLalu minum. 1 jam sebelum tidur.', 'acb-cardiavas', 0, 0),
(5, 'work-5.jpg', 'med virginia', 'med virginia', 'nutrisi', 'Minuman Serbuk Rasa Cokelat<br/>\r\nPOM NO. MD 867013185071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'HARGA MEMBER IDR- 600,000', 'HARGA NON MEMBER IDR- 720,000', 'Ekstrak semangka. Ekstrak delima putih. Ekstrak cokelat.<br/>\r\nRumput Fatimah. Kayu rapet. Asam jawa.<br/>\r\nL-Arginin. Dan Ekstrak buah lainnya.<br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum tidur.<br/>', 'med-virginia', 0, 0),
(6, 'slider3.jpg', 'rcc coffee', 'rcc coffee', 'nutrisi', '                        Minuman Serbuk Kopi Karamel<br/>\r\nDINKES P-IRT NO. 5133515900746-24<br/>\r\n1 Box @12 sachet @20 gram<br/>                        ', '                            HARGA MEMBER IDR- 380,000                        ', '                        HARGA NON MEMBER IDR- 456,000                        ', '                        Ekstrak Kopi & Karamel. L Arginin. Ekstrak Buah Semangka.\r\nEkstrak Buah Manggis. Ekstrak Serat Jeruk. Ekstrak Buah Kurma.\r\nEkstrak Kayu Manis. Ekstrak Tebu.                        ', '                            Campurkan 1 sachet dengan 200ml air panas, aduk.\r\nLalu minum.                        ', 'rcc-coffee', 0, 0),
(7, 'work-7.jpg', 'mpa propolis', 'mpa propolis', 'nutrisi', 'Nutrisi Tetes Lebah Madu Propolis Anise<br/>\r\nDINKES P-IRT NO. 8093515910746-24<br/>\r\n1 Box @3 BOTOL @10 ML<br/>', 'HARGA MEMBER IDR- 600,000', 'HARGA NON MEMBER IDR- 720,000', 'Madu Trigona, Propolis, Anise ', '\r\nCampurkan 5/10 tetes kedalam 150ml air biasa/hangat,\r\naduk dengan sendok plastik. Lalu minum.', 'mpa-propolis', 0, 0),
(8, 'slider3.jpg', 'fixup series', 'fixup series', 'kosmetik', 'Day Body Serum, Body Wash, Night Body Serum<br/>\r\nDAY BODY SERUM: POM NA 18160104069 - 175 ML<br/>\r\nBODY WASH : POM NA 18160701459 - 200 ML<br/>\r\nNIGHT BODY SERUM: POM NA 18160104068 - 175 ML<br/>                                                ', 'HARGA MEMBER IDR- 600.000                                                ', 'HARGA NON MEMBER IDR- 720,000                                                ', 'Ekstrak Bengkoang, Ekstrak Apel, Ekstrak Lidah Buaya,\r\nGlutathione, Collagen, Vitamin C, UV Filter.                                                ', 'Aplikasikan keseluruh kulit tubuh secara merata.                                                ', 'fixup-series', 0, 0),
(9, 'slider4.jpg', 'NEW CANTIK GLOW LIPMATTE SERIES', 'new cantik glow lipmatte series', 'kosmetik', '                        Color: Plum, Nude, Honey, Barbie, Rose<br/>\r\nPLUM POM NA 1818130263802<br/>\r\nNUDE POM NA 1818130263703<br/>\r\nHONEY POM NA 1818130264104<br/>\r\nBARBIE POM NA 1818130263905<br/>\r\nROSE POM NA 18181302640<br/>                           ', '                            HARGA MEMBER IDR- 600.000\r\nHARGA SATUAN IDR- 120.000                                                ', '                        HARGA NON MEMBER IDR- 720.000\r\nHARGA SATUAN IDR- 144.000                                                ', '                        Isododocane. Stearakonium Bntonite. Beeswax. Silica.\r\nIrvingia Gabonensis kernel Butter.\r\nHydrogen Dimethicone. Food grade color.                                                 ', '                            Aplikasikan kuas lipcream ke bibir secara merata.                                                 ', 'NEW-CANTIK-GLOW-LIPMATTE-SERIES', 0, 0),
(10, 'slider6.jpg', 'BEA ULTIMATE FIRST SIGHT LIPCREAM SERIES', 'bea ultimate first sight lipcream series', 'kosmetik', '                        Color: Isabel Red, Safron Red,Xantre Beige Bianca Natural<br/>\r\nISABEL RED POM NA 18181303648<br/>\r\nSAFRON RED POM NA 18181303647<br/>\r\nXANTRE BEIGE POM NA 18181303646<br/>\r\nBIANCA NATURAL POM NA 18181303645 <br/>                  ', '                            HARGA MEMBER IDR- 600,000\r\nHARGA SATUAN IDR- 150,000                        ', '                        HARGA NON MEMBER IDR- 720,000\r\nHARGA SATUAN IDR- 180,000                        ', '                        Isododocane. Stearakonium Bntonite.\r\nBeeswax. Silica.\r\nIrvingia Gabonensis kernel Butter.\r\nKopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,\r\nHydrogen Dimethicone. Food grade color.                        ', '                             Aplikasikan kuas lipcream ke bibir secara merata.                         ', 'BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 0, 0),
(11, 'slider5.jpg', 'BEA ULTIMATE HAIR CARE SERIES SMOOTH AND SHINE', 'bea ultimate hair care series smooth AND shine', 'kosmetik', 'Hair Shampoo, Hair Conditioner, Hair Serum<br/>\r\nPOM NO: MD 867013189071<br/>\r\nSHAMPOO POM NA 18171002247 @250ML<br/>\r\nCONDITIONER POM NA 18171002282 @250ML<br/>\r\nHAIR SERUM POM NA 18171002255 @30ML<br/>                        ', 'HARGA MEMBER IDR 600,000<br/>\r\nHARGA SHAMPO MEMBER IDR 100,000<br/>\r\nHARGA CONDITIONER MEMBER IDR 150,000<br/>\r\nHARGA HAIR SERUM MEMBER IDR 100,000<br/>                        ', 'HARGA NON-MEMBER IDR 720,000<br/>\r\nHARGA SHAMPOO NON MEMBER IDR 120,000<br/>\r\nHARGA CONDITIONER NON MEMBER IDR 180,000<br/>\r\nHARGA HAIR SERUM NON MEMBER IDR 120,000<br/>                        ', 'Sodium Methyl Cocoyl Taurate, Hydroxyetil Urea,\r\nPolyquaternium-71, Biscatearyl Amodimethicone,\r\nPanthenyl Triacetate, Retinyl Palmitate, Tocopherol, Inositol. Biotin.\r\nCitosan. Vitamin E. Kayu Manis.                        ', '                            Bilas rambut dengan air hangat untuk membuka pori-pori rambut. Tuangkan shampoo di telapak tangan secukupnya. lalu oleskan merata di kulit kepala saja. sambil memijatnya perlahan dengan menggunakan ujung jari.\r\nBilas rambut sampai bersih, hingga tidak ada busa yang tertinggal.\r\nGunakan kondisioner dari bagian tengah hingga ujung rambut. Diamkan selama beberapa menit. untuk memberi waktu kepada kutikula rambut, menyerap kandungan yang ada dalam kondisioner. kemudian bilas dengan air\r\ndingin, untuk menutup pori-pori, sehingga rambut tetap terjaga kelembabannya.\r\nUsap rambut dengan handuk sampai setengah kering. Dan aplikasikan Serum rambut. mulai dari tengah hingga ke ujung rambut. sambil menyisirnya dengan tangan agar rambut ternutrisi. dan menjadi rambut menjadi\r\nlebih lembut. biarkan mengering secara alami.                        ', 'BEA-ULTIMATE-HAIR-CARE-SERIES-SMOOTH-AND-SHINE', 0, 0),
(12, 'slider4.jpg', 'OURCITRUS BEA ULTIMATE BODY TREATMENT', 'ourcitrus bea ultimate body treatment', 'kosmetik', '                        Body Scrub- Body Wash - Body Serum<br/>\r\nPOM NO: MD 867013189071<br/>\r\nBODY SCRUB POM NA 18170701139 @180GR<br/>\r\nBODY WASH POM NA 18170701140 @250ML<br/>\r\nBODY SERUM POM NA 18170103800 @120GR<br/>                        ', '                            HARGA BODY SCRUB MEMBER IDR 150,000<br/>\r\nHARGA BODY WASH MEMBER IDR 100,000<br/>\r\nHARGA BODY SERUM MEMBER IDR 100,000<br/>                        ', '                        HARGA BODY SCRUB NON MEMBER IDR 180,000<br/>\r\nHARGA BODY WASH NON MEMBER IDR 120,000<br/>\r\nHARGA BODY SERUM NON MEMBER IDR 120,000<br/>                        ', '                        Oriza Sativa Starch. Corn Starch. Aloe Barbadensis Leaf Juice. Niacinamid. Collagen.\r\nGlutathione.                         ', '                            Basahi sabun dengan air dan usapkan di tubuh hingga berbusa lalu bilas hingga bersih. Gunakan sabun setiap kali mandi.\r\nBilas kulit dengan air hangat untuk melembutkan kulit dan kemudian usapkan scrub dengan gerakan melingkar. Sangat penting untuk menjaga tekanan yang lembut sehingga tidak akan merusak kulit.\r\nAnda dapat mulai di area mana pun yang paling nyaman dan menyenangkan. Tapi. jangan lupa untuk fokus pada area yang kering. Seperti. siku dan tumit. Lalu bilas kembali dengan air hangat hingga bersih.\r\nSetelah mandi. usap dan ratakan body serum di seluruh kulit tubuh yang masih segar. Kondisi kulit yang baru dibersihkan, membuat formulanya bisa meresap dan bekerja lebih baik.                        ', 'ourcitrus-bea-ultimate-body-treatment', 0, 0),
(13, '5.png', 'LADIES EAU DE TOILETTE NATURAL SWEET ESCAPE', 'sweet escape', 'kosmetik', 'POM NA15170601731 - 80 ML.<br/>', 'HARGA MEMBER IDR 600,000', 'HARGA NON MEMBER IDR 720,000', 'Ekstrak Bunga Freesia, Ekstrak Bunga Hutan Eropa dan Ekstrak Mentimun. ', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan\r\ntangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak\r\n15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.', 'LADIES-EAU-DE-TOILETTE-NATURAL-SWEET-ESCAPE', 0, 0),
(14, 'img-8.jpg', 'GENTLEMEN EAU DE TOILETTE NATURAL AQUAFIRE', 'gentlemen eau de toilette natural aquafire', 'kosmetik', ' POM NO: NA18170601728 - 100 ML', 'HARGA MEMBER IDR 600,000', 'HARGA NON MEMBER IDR 720,000', 'Ekstrak Buah Jeruk Nipis, Ekstrak Buah Jeruk Mandarin,\r\nEkstrak Buah Lemon, Embun Dedaunan dan Embun Laut.                        ', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher,\r\npergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak\r\n15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.                        ', 'gentlemen-eau-de-toilette-natural-aquafire', 0, 0),
(15, 'slider3.jpg', 'GENTLEMEN EAU DE TOILETTE NATURAL DIVINITY', 'gentlemen eau de toilette natural divinity', 'kosmetik', '                                                POM NA18170601730 - 100 ML.<br/>                                                ', '                                                        HARGA MEMBER IDR 600,000                                                ', '                                                HARGA NON MEMBER IDR 720,000                                                ', '                                                Ekstrak Bunga Teratai, Ekstrak Buah Bergamot,\r\nEkstrak Daun Violet dan Ekstrak Buah Pear Putih.                                                ', '                                                        Semprotkan dibagian-bagian panas tubuh, seperti:\r\nleher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak                                                ', 'gentlemen-eau-de-toilette-natural-divinity', 0, 0),
(16, 'slider4.jpg', 'OURCITRUS PROFESSIONAL BIO ESSENCE DAY AND NIGHT', 'ourcitrus professional bio essence day and night', 'kosmetik', '                        DAY SPRAY POM NA 18171205595 @60ML<br/>\r\nNIGHT SPRAY POM NA 18171205596 @110ML<br/>                        ', '                            HARGA MEMBER IDR 480,000<br/>\r\nHARGA NIGHT SPRAY MEMBER IDR 720,000<br/>                        ', '                        HARGA DAY SPRAY NON MEMBER IDR 576,000<br/>\r\nHARGA NIGHT SPRAY NON MEMBER IDR 864,000                        ', '                        Ekstrak Daun Zaitun, Ekstrak Buah Tin, Ekstrak Panax Ginseng, Ekstrak Daun Sirih.                        ', '                            Botol dikocok terlebih dahulu. Semprotkan kebagian kulit yang bermasalah:\r\nUntuk keperluan peremajaan kulit, setelah disemprotkan, kulit dipijat halus sampai kesat.\r\nUntuk menghilangkan jerawat, sebaiknya muka dibersihkan dengan air hangat, agar pori-pori kulit terbuka dan spray bisa meresap.\r\nUntuk membantu mengatasi luka, bagian luka dibersihkan dengan air terlebih dahulu agar\r\nkotoran tidak menempel dibagian luka. Lalu semprotkan spray secara merata.                        ', 'ourcitrus-professional-bio-essence-day-and-night', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk_testing`
--

CREATE TABLE `produk_testing` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `ingredients` longtext NOT NULL,
  `cara_pakai` longtext NOT NULL,
  `nomor_ijin` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk_testing`
--

INSERT INTO `produk_testing` (`id`, `nama`, `image`, `link`, `deskripsi`, `tipe`, `ingredients`, `cara_pakai`, `nomor_ijin`) VALUES
(1, 'NEW OURCITRUS BEA ULTIMATE FIRST SIGHT LIPCREAM SERIES', 'Slide5.PNG', 'new-ourcitrus-bea-ultimate-first-sight-lipcream-series', 'Bibir Sehat, halus dan indah menawan – Dengan warna-warna dewasa nan eklusif.', 'kosmetik', 'Isododocane. Stearakonium Bntonite. Beeswax. Silica. Irvingia Gabonensis kernel Butter. Hydrogen Dimethicone. Food grade color.', 'Aplikasikan kuas lipcream ke bibir secara merata.', 'COLOR ISABEL RED: NA 18181303648<br/>\r\nCOLOR SAFRON RED: NA 18181303647<br/>\r\nCOLOR XANTRE BEIGE: NA 18181303646<br/>\r\nCOLOR BIANCA NATURAL: NA 18181303645'),
(2, 'OURCITRUS PREMIUM NATURAL PERFUMES SWEET ESCAPE NATURAL PERFUME FOR WOMAN', 'Slide1.PNG', 'ourcitrus-premium-natural-perfumes-sweet-escape-natural-perfume-for-woman', 'Siapa bilang memakai parfum hanya akan mendapatkan wangi ditubuh saja?\r\nNO!\r\nParfum kekinian seharusnya bukan hanya sekedar mendapatkan wangi saja, tapi DOUBLE EFFECT! Mendapat wangi sekaligus SEHAT ALAMI!\r\nUntuk itulah, parfum natural menjadi salah satu pilihan bagi Anda, dalam melengkapi koleksi parfum yang Anda miliki sekarang. Anda akan merasa sangat fresh, bergairah, sexy, tak terduga dan selalu bergaya muda. Pastikan dan buktikan Saja!', 'kosmetik', 'Ekstrak Bunga Freesia, Ekstrak Bunga Hutan Eropa, dicampur dengan Ekstrak Mentimun', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki.\r\nWaktu yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan terbuka dimana parfum bisa melekat lama di pori-pori.\r\nSemprot parfum dari jarak 15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata, sehingga wangi parfum lebih tahan lama, terasa ringan dan menyenangkan.', 'NA15170601731 @80ml'),
(3, 'OURCITRUS PREMIUM NATURAL PERFUMES SERENITY NATURAL PERFUME FOR WOMAN', 'Slide2.PNG', 'ourcitrus-premium-natural-perfumes-serenity-natural-perfume-for-woman', 'Hola Sosialita!\r\nComo Estas?\r\n\r\nJangan ketinggalan, untuk melengkapi kemewahan lifestyle-mu dengan wewangian khas alami  – yang bukan hanya meghadirkan wewangian akan tetapi memberikan efek menyehatkan, menenangkan dan memberikan kepercayaan diri tinggi. Yang akan menempatkan Anda – Wanita Sosialita – dikelas tersendiri.', 'kosmetik', 'Ekstrak Bunga Melati, Ekstrak Buah Kiwi, Ekstrak Buah Semangka, Ekstrak Batang Rhuburb dan Rempah-rempah', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki.\r\nWaktu yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan terbuka dimana parfum bisa melekat lama di pori-pori.\r\nSemprot parfum dari jarak 15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata, sehingga wangi parfum lebih tahan lama, terasa ringan dan menyenangkan.', 'NA15170601729 @80ml'),
(4, 'OURCITRUS PREMIUM NATURAL PERFUMES AQUAFIRE NATURAL PERFUME FOR MEN', 'Slide3.PNG', 'ourcitrus-premium-natural-perfumes-aquafire-natural-perfume-for-men', 'JADILAH COWOK SPORTY YANG PERTAMA DILIRIK WANITA – BAHKAN SEBELUM MEREKA MELIHAT ANDA!\r\nYa itulah kehebatan parfum alami yang Anda pakai! Wangi buat Anda, wangi buat banyak wanita! Sehat buat Anda, sehat juga buat mereka! \r\nAnda akan merasa sangat segar, sporty, sexy, berjiwa petualang dan bergaya muda. \r\nAnda Perokok?\r\nNo problemo!\r\nThis Is The right Perfume For You!', 'kosmetik', 'Ekstrak Buah Jeruk Nipis, Ekstrak Buah Jeruk Mandarin, Ekstrak Buah Lemon, Embun Dedaunan dan Embun Laut. ', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki.\r\nWaktu yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan terbuka dimana parfum bisa melekat lama di pori-pori.\r\nSemprot parfum dari jarak 15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata, sehingga wangi parfum lebih tahan lama, terasa ringan dan menyenangkan.', 'NA18170601728 @100ml'),
(5, 'OURCITRUS PREMIUM NATURAL PERFUMES DIVINITY NATURAL PERFUME FOR MEN', 'Slide4.PNG', 'ourcitrus-premium-natural-perfumes-divinity-natural-perfume-for-men', 'KEHARUMAN EKSLUSIF NAN MEWAH PARA PRIA SUKSES.\r\nYa… Rahasia Keharuman para pria sukses telah tersedia untuk Anda. Keharuman mewah dengan kelas tersendiri. Anda yang telah sukses akan semakin sukses dan lebih berkelas. Wewangian yang sekaligus menyehatkan ini, wajib Anda miliki sekarang juga!', 'kosmetik', 'Ekstrak Bunga Teratai, Ekstrak  Buah Bergamot, Ekstrak Daun Violet dan Ekstrak Buah Pear Putih', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki.\r\nWaktu yang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan terbuka dimana parfum bisa melekat lama di pori-pori.\r\nSemprot parfum dari jarak 15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata, sehingga wangi parfum lebih tahan lama, terasa ringan dan menyenangkan.', 'NA18170601730 @100ml'),
(6, 'OURCITRUS BEA ULTIMATE HAIR CARE SERIES', 'Slide7.PNG', 'ourcitrus-bea-ultimate-hair-care-series', 'hijaber!!!.\r\n\r\nBerita terbaru untuk anda semua!.\r\n\r\nApakah rambut anda lepek setelah seharian berhijab?. ketombean?.sering rontok?. \r\nTidak perlu kawatir lagi. Telah Hadir. Seri Perawatan Rambut Lengkap terbaik dari OC.\r\nShampoo, Conditioner dan Serum rambut terbaik.\r\n\r\nShampoo.\r\nMerawat rambut, kulit kepala dan juga untuk mencuci rambut, agar terbebas dari kotoran yang menempel dirambut maupun kulit kepala.\r\n\r\nConditioner.\r\nYaitu sebagai Pengganti Minyak Alami Rambut. Pengatur Kutikula Rambut, agar Lebih Indah dan Rapi. Pengembang dan Pelindung Rambut. Penambah Kilau Rambut. Pencegah Kerusakan Rambut. Pelembab Kulit Kepala. Pencegah Rambut Kusut. Pencegah Kerontokan Rambut. Penjaga Elastisitas Rambut.\r\n\r\nHair Serum.\r\nMelindungi rambut dari sinar Ultra violet. Mencegah rambut rusak akibat pemakaian alat pengering rambut. Memberikan kesan lurus pada rambut. Membantu menutrisi dan meregenerasi akar rambut. Mengatasi rambut yang rontok, menambah kilau rambut dan mengharumkan.\r\n\r\nRambut sehat. Cantik. Berkilau membanggakan.\r\nHair Care Series. Dari OC.', 'kosmetik', '                                                ', '1). Bilas rambut dengan air hangat untuk membuka pori-pori rambut. Tuangkan shampoo di telapak tangan secukupnya. lalu oleskan merata di kulit kepala saja. sambil memijatnya perlahan dengan menggunakan ujung jari. Bilas rambut sampai bersih, hingga tidak ada busa yang tertinggal.\r\n2). Gunakan kondisioner dari bagian tengah hingga ujung rambut. Diamkan selama beberapa menit. untuk memberi waktu kepada kutikula rambut, menyerap kandungan yang ada dalam kondisioner. kemudian bilas dengan air dingin, untuk menutup pori-pori, sehingga rambut tetap terjaga kelembabannya.\r\n3). Usap rambut dengan handuk sampai setengah kering. Dan aplikasikan Serum rambut. mulai dari   \r\ntengah hingga ke ujung rambut. sambil menyisirnya dengan tangan agar rambut ternutrisi. dan menjadi rambut menjadi lebih lembut. biarkan mengering secara alami.', 'SHAMPOO - NA 18171002247 @250ml\r\nCONDITIONER - NA 18171002282 @250ml\r\nHAIR SERUM - NA 18171002255 @  30ml'),
(7, 'OURCITRUS BEA ULTIMATE BODY CARE SERIES', 'Slide6.PNG', 'ourcitrus-bea-ultimate-body-care-series', 'Kulit sehat, mulus, halus, wangi dan cantik!. \r\nSayangi kulit tubuh Anda dan berikan perawatan terbaik dengan Paket Ourcitrus Premium Bodycare Series:\r\n\r\nBODY WASH.\r\nMembersihkan kulit tubuh dari berbagai kuman dengan wangi yang menyegarkan tubuh, PH Balance  dan busanya sedikit, sehingga tidak membuat kulit kering.\r\n\r\nBODY SCRUB.\r\nMenghaluskan kulit, mengangkat sel-sel kulit mati dikulit sehingga kulit menjadi lebih bersih, lembut dan bercahaya.\r\n\r\n \r\n\r\nBODY SERUM.\r\nMemiliki bahan aktif, lebih tinggi dibanding body lotion ataupun cream. Selain mudah diserap kulit, body serum juga tidak menimbulkan rasa lengket ketika digunakan. Dengan kombinasi Collagen, Glutathione dan Aloe vera, untuk: Meregenerasi sel kulit, mencerahkan, melembabkan kulit dan menyamarkan flek-flek hitam, serta anti sinar ultra-violet. Body serum ini, merupakan salah satu evolusi terbaru untuk perawatan kulit tubuh karena mampu menutrisi berkali-kali lipat daripada body lotion.\r\nCoba deh. Sangat luar biasa hasilnya.\r\nKulit mulus. Bukan hanya impian saja.\r\n\r\nBody Care. Dari OC.', 'kosmetik', '                                                ', '1. Basahi sabun dengan air dan usapkan di tubuh hingga berbusa. Lalu bilas hingga bersih. Gunakan sabun setiap kali mandi.\r\n\r\n2. Bilas kulit dengan air hangat untuk melembutkan kulit dan kemudian usapkan scrub dengan gerakan melingkar. Sangat penting untuk menjaga tekanan yang lembut sehingga tidak akan merusak kulit. Anda dapat mulai di area mana pun yang paling nyaman dan menyenangkan.\r\nTapi jangan lupa untuk fokus pada area yang kering, seperti siku dan tumit. Lalu bilas kembali dengan air hangat hingga bersih.\r\n\r\n3.Setelah mandi, usap dan ratakan body serum di seluruh kulit tubuh yang masih segar. Kondisi kulit yang baru dibersihkan, membuat formulanya bisa meresap dan bekerja lebih baik.', 'BODY WASH - NA 18170701140  @250ml\r\nBODY SCRUB - NA 18170701139  @ 180gr\r\nBODY SERUM - NA 18170103800 @120gr                               '),
(8, 'OURCITRUS PREMIUM NUTRIMAX TWA MINUMAN SERBUK TOMAT WORTEL APEL', 'Slide9.PNG', 'ourcitrus-premium-nutrimax-twa-minuman-serbuk-tomat-wortel-apel', '                        1 Paket = 10 sachet @20 gram\r\nMinuman Serbuk Sejuta Manfaat – Dengan Kehebatan Manfaat Buah Tomat, Buah Wotel dan Buah Apel. \r\n<blockquote class=\"blockquote-footer text-success\">\r\n“JADIKANLAH MAKANANMU SEBAGAI OBAT, SEBELUM OBAT MENJADI MAKANANMU” – HIPPOCRATES (460 SM – BAPAK KEDOKTERAN YUNANI).                        \r\n</blockquote>', 'nutrisi', '                        Ekstrak Buah Tomat.\r\nEkstrak Wortel.\r\nEkstrak Buah Apel.\r\nEkstrak Biji Anggur.\r\nEkstrak Buah Strawberry.\r\nL-Glutathione.                        ', '                        Campurkan 1 sachet dengan 200ml air biasa. Aduk hingga merata.\r\nLalu minum 1 jam sebelum tidur.                        ', '                        MD 867013058071                        '),
(9, 'OURCITRUS PREMIUM NUTRIMAX GCS MINUMAN SERBUK RASA ANGGUR', 'Slide8.PNG', 'ourcitrus-premium-nutrimax-gcs-minuman-serbuk-rasa-anggur', '                        1 Paket = 10 sachet @20 gram\r\nMinuman Serbuk Sejuta Manfaat – Dengan L-Glutathione, Collagen dan Spirulina.\r\n<blockquote class=\"blockquote-footer text-success\">\r\n“JADIKANLAH MAKANANMU SEBAGAI OBAT, SEBELUM OBAT MENJADI MAKANANMU” – HIPPOCRATES (460 SM – BAPAK KEDOKTERAN YUNANI).                                                \r\n</blockquote>', 'nutrisi', '                        L-Glutathione.\r\nFish Collagen.\r\nSpirulina.\r\nEkstrak Buah Apel.\r\nEkstrak Buah Anggur.\r\nEkstrak Buah Strawberry.\r\nFibersol.                        ', 'Campurkan 1 sachet dengan 200ml air biasa. Aduk hingga merata.\r\nLalu minum 1 jam sebelum tidur.                        ', 'MD 867013071071                        ');

-- --------------------------------------------------------

--
-- Table structure for table `single_page`
--

CREATE TABLE `single_page` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL,
  `img` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL,
  `link_tujuan` varchar(100) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_page`
--

INSERT INTO `single_page` (`id`, `judul`, `url`, `img`, `link`, `link_tujuan`, `content`) VALUES
(1, 'Company Profile', 'profile-perusahaan', 'narasi.png', 'profilperusahaan', 'profile-perusahaan', '<p>PT Gemilang Citrus Berjaya, adalah perusahaan yang mendistribusikan produk-produk kosmetika, nutrisi serta alat-alat keperluan rumah tangga, dengan cara pemasaran langsung, yang berkantor pusat di: Mutiara Regency Blok A1 No.55, Sidoarjo, Jawa Timur, Indonesia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Perusahaan ini mempunyai merk utama: OurCitrus, dan merupakan salah satu perusahaan kebanggaan asli Bangsa Indonesia, yang mempunyai visi dan misi besar, untuk bisa berkiprah, bukan hanya di Indonesia akan tetapi juga di manca negara.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Kekuatan kami adalah pilihan produk yang bervariatif, kualitas produk yang terjaga - dari pabrik sendiri - dengan harga yang sepadan, mendahulukan legalitas dari BPOM/Dinas Kesehatan sebelum produk diedarkan, bonus harian dan bulanan - tanpa terhenti hari libur -&nbsp; yang sangat masuk akal dan fair, sehingga menjadi pendapatan utama bagi Anda dan keluarga, dimasa kini maupun yang akan datang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Untuk mendapatkan manfaat dan keuntungan di atas, Anda pun akan dibantu oleh coach/Pelatih-Pelatih handal yang sudah membuktikan diri sebelumnya dalam membantu jaringannya meraih semua yang diimpikan sesuai pada saat memulai bisnis ini.</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(2, 'Legality And Business Plan', 'Legality-And-Business-Plan', 'a.png', 'profilperusahaan', 'Legality-And-Business-Plan', ''),
(6, 'International Director', 'International-Director', 'A1.png', 'halloffame', 'International-Director', '<p>Akumulasi Pembelanjaan: 4,000 Kiri - 4,000 Kanan<br />\r\nReward: Tour Eropa/Umroh Senilai Rp40,000,000<br />\r\nBonus: Double Mega Match<br />\r\nLeaders Club</p>\r\n'),
(7, 'International Manager', 'International-Manager', 'A2.png', 'halloffame', 'International-Manager', '<p>Akumulasi Pembelanjaan: 750 Kiri - 750 Kanan<br />\r\nReward: 1 Buah Sepeda Motor Senilai Rp15,000,000<br />\r\nBonus: Double Mega Match<br />\r\nLeaders Club</p>\r\n'),
(8, 'International Leader', 'International-Leader', 'A3.png', 'halloffame', 'International-Leader', '<p>Akumulasi Pembelanjaan: 100 Kiri - 100 Kanan<br />\r\nReward: Rp1,500,000 + 2 Produk Senilai Rp1,200,000<br />\r\nBonus: Double Mega Match<br />\r\nLeaders Club</p>\r\n'),
(9, 'Customer Service', 'Customer-Service', 'Slide5.PNG', 'customerservice', '', '<h3 class=\"text-primary\">List Contact OurCitrus</h2>\r\n<p>Daftar kontak kami yang selalu aktif untuk layanan terbaik bagi anda</p>\r\n<br/>\r\n<small class=\"text-danger\" style=\"color:firebrick; margin-bottom:2em; margin-left:3em;font-style:italic; font-weight:bold;\">Silahkan tap atau klik pada bagian tombol di bawah ini (untuk detail contact kami): </small>\r\n<br/>\r\n<br/>\r\n<ul style=\"list-style-type:none\">\r\n<li>\r\n<button class=\"btn btn-view btn-default\" type=\"button\" data-toggle=\"collapse\" data-target=\"#tel\" aria-expanded=\"false\" aria-controls=\"collapseExample\">\r\n  Office Telephone\r\n</button><br/>\r\n\r\n<div class=\"collapse\" id=\"tel\">\r\n  <div class=\"well\">\r\n    <a href=\"tel:03199715225\">ourcitrus office phone : 031 - 9971 5225</a>\r\n  </div>\r\n</div>\r\n</li><br/>\r\n\r\n<li>\r\n<button class=\"btn btn-view\" type=\"button\" data-toggle=\"collapse\" data-target=\"#mobile\" aria-expanded=\"false\" aria-controls=\"collapseExample\">\r\n  Mobile\r\n</button><br/>\r\n\r\n<div class=\"collapse\" id=\"mobile\">\r\n  <div class=\"well\">\r\n    <a href=\"tel:085277778461\">ourcitrus admin mobile : 0852 7777 8461</a>\r\n  </div>\r\n</div>\r\n</li><br/>\r\n\r\n<li>\r\n<button class=\"btn btn-view\" type=\"button\" data-toggle=\"collapse\" data-target=\"#wa\" aria-expanded=\"false\" aria-controls=\"collapseExample\">\r\n  Whatsapp\r\n</button><br/>\r\n\r\n<div class=\"collapse\" id=\"wa\">\r\n  <div class=\"well\">\r\n    <a href=\"https://wa.me/6285277778461\">ourcitrus admin : 0852 7777 8462</a>\r\n  </div>\r\n</div>\r\n</li><br/>\r\n\r\n<li>\r\n<button class=\"btn btn-view\" type=\"button\" data-toggle=\"collapse\" data-target=\"#emailorder\" aria-expanded=\"false\" aria-controls=\"collapseExample\">\r\n  Emails\r\n</button><br/>\r\n\r\n<li>\r\n<div class=\"collapse\" id=\"emailorder\">\r\n  <div class=\"well\">\r\n<ul style=\"list-style-type:none\">\r\n    <li><a href=\"mailto:ourcitrus2019@gmail.com\">ourcitrus email order : ourcitrus2019@gmail.com</a></li><br/>\r\n\r\n<li><a href=\"mailto:revisidataoc@gmail.com\">ourcitrus revisi data : revisidataoc@gmail.com</a></li>\r\n</ul>\r\n  </div>\r\n</div>\r\n\r\n</li>\r\n</ul>\r\n\r\n\r\n'),
(10, 'Our Office', 'office', '4.png', 'office', '', '<p class=\"blockquote-footer\">Mutiara Regency Blok A1<br />\r\nNo. 55 , Sidoarjo<br />\r\nJawa Timur<br />\r\nIndonesia</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `single_product`
--

CREATE TABLE `single_product` (
  `id` int(11) NOT NULL,
  `link` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `ingredients` longtext NOT NULL,
  `carapenggunaan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `single_product`
--

INSERT INTO `single_product` (`id`, `link`, `nama`, `image`, `tipe`, `deskripsi`, `harga`, `ingredients`, `carapenggunaan`) VALUES
(1, 'kosmetik/fixup-series', 'fixup series', 'work-1.jpg', 'kosmetik', 'Day Body Serum, Body Wash, Night Body Serum<br/>\r\nDAY BODY SERUM: POM NA 18160104069 - 175 ML<br/>\r\nBODY WASH : POM NA 18160701459 - 200 ML<br/>\r\nNIGHT BODY SERUM: POM NA 18160104068 - 175 ML<br/>', 'NON MEMBER IDR 720,000\r\nMEMBER IDR 600.000 ', 'Ekstrak Bengkoang, Ekstrak Apel, Ekstrak Lidah Buaya,\r\nGlutathione, Collagen, Vitamin C, UV Filter.', 'Aplikasikan keseluruh kulit tubuh secara merata.'),
(2, 'kosmetik/NEW-CANTIK-GLOW-LIPMATTE-SERIES', 'NEW CANTIK GLOW LIPMATTE SERIES', 'work-2.jpg', 'kosmetik', 'Color: Plum, Nude, Honey, Barbie, Rose<br/>\r\nPLUM POM NA 1818130263802<br/>\r\nNUDE POM NA 1818130263703<br/>\r\nHONEY POM NA 1818130264104<br/>\r\nBARBIE POM NA 1818130263905<br/>\r\nROSE POM NA 18181302640<br/>', 'HARGA PAKET NON MEMBER IDR 720.000 - MEMBER IDR 600.000.\r\nHARGA SATUAN NON MEMBER @IDR 144.000 - MEMBER @IDR 120.000.', 'Isododocane. Stearakonium Bntonite. Beeswax. Silica.\r\nIrvingia Gabonensis kernel Butter.\r\nHydrogen Dimethicone. Food grade color. ', ' Aplikasikan kuas lipcream ke bibir secara merata. '),
(3, 'kosmetik/BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 'BEA ULTIMATE FIRST SIGHT LIPCREAM SERIES', 'work-3.jpg', 'kosmetik', 'Color: Isabel Red, Safron Red,Xantre Beige Bianca Natural<br/>\r\nISABEL RED POM NA 18181303648<br/>\r\nSAFRON RED POM NA 18181303647<br/>\r\nXANTRE BEIGE POM NA 18181303646<br/>\r\nBIANCA NATURAL POM NA 18181303645 <br/>', 'HARGA PAKET NON MEMBER IDR 720,000 - MEMBER IDR 600,000.\r\nHARGA SATUAN NON MEMBER @IDR 180,000. MEMBER IDR150,000 ', 'Isododocane. Stearakonium Bntonite.\r\nBeeswax. Silica.\r\nIrvingia Gabonensis kernel Butter.\r\nKopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,\r\nHydrogen Dimethicone. Food grade color.', ' Aplikasikan kuas lipcream ke bibir secara merata. '),
(4, 'kosmetik/BEA-ULTIMATE-HAIR-CARE-SERIES-SMOOTH-SHINE', 'BEA ULTIMATE HAIR CARE SERIES SMOOTH & SHINE', 'work-4.jpg', 'kosmetik', 'Hair Shampoo, Hair Conditioner, Hair Serum<br/>\r\nPOM NO: MD 867013189071<br/>\r\nSHAMPOO POM NA 18171002247 @250ML<br/>\r\nCONDITIONER POM NA 18171002282 @250ML<br/>\r\nHAIR SERUM POM NA 18171002255 @30ML<br/>', 'HARGA NON-MEMBER 720,000 - MEMBER 600,000\r\nHARGA SHAMPOO NON MEMBER IDR 120,000 - MEMBER IDR 100,000\r\nHARGA CONDITIONER NON MEMBER IDR 180,000 - MEMBER IDR 150,000\r\nHARGA HAIR SERUM NON MEMBER IDR 120,000 - MEMBER IDR 100,000', 'Sodium Methyl Cocoyl Taurate, Hydroxyetil Urea,\r\nPolyquaternium-71, Biscatearyl Amodimethicone,\r\nPanthenyl Triacetate, Retinyl Palmitate, Tocopherol, Inositol. Biotin.\r\nCitosan. Vitamin E. Kayu Manis.', 'Bilas rambut dengan air hangat untuk membuka pori-pori rambut. Tuangkan shampoo di telapak tangan secukupnya. lalu oleskan merata di kulit kepala saja. sambil memijatnya perlahan dengan menggunakan ujung jari.\r\nBilas rambut sampai bersih, hingga tidak ada busa yang tertinggal.\r\nGunakan kondisioner dari bagian tengah hingga ujung rambut. Diamkan selama beberapa menit. untuk memberi waktu kepada kutikula rambut, menyerap kandungan yang ada dalam kondisioner. kemudian bilas dengan air\r\ndingin, untuk menutup pori-pori, sehingga rambut tetap terjaga kelembabannya.\r\nUsap rambut dengan handuk sampai setengah kering. Dan aplikasikan Serum rambut. mulai dari tengah hingga ke ujung rambut. sambil menyisirnya dengan tangan agar rambut ternutrisi. dan menjadi rambut menjadi\r\nlebih lembut. biarkan mengering secara alami.'),
(5, 'kosmetik/OURCITRUS-BEA-ULTIMATE-BODY-TREATMENT', 'OURCITRUS BEA ULTIMATE BODY TREATMENT', 'work-5.jpg', 'kosmetik', 'Body Scrub- Body Wash - Body Serum<br/>\r\nPOM NO: MD 867013189071<br/>\r\nBODY SCRUB POM NA 18170701139 @180GR<br/>\r\nBODY WASH POM NA 18170701140 @250ML<br/>\r\nBODY SERUM POM NA 18170103800 @120GR<br/>', 'HARGA BODY SCRUB NON MEMBER IDR 180,000 - MEMBER IDR 150,000\r\nHARGA BODY WASH NON MEMBER IDR 120,000 - MEMBER IDR 100,000\r\nHARGA BODY SERUM NON MEMBER IDR 120,000 - MEMBER IDR 100,000', 'Oriza Sativa Starch. Corn Starch. Aloe Barbadensis Leaf Juice. Niacinamid. Collagen.\r\nGlutathione. ', 'Basahi sabun dengan air dan usapkan di tubuh hingga berbusa lalu bilas hingga bersih. Gunakan sabun setiap kali mandi.\r\nBilas kulit dengan air hangat untuk melembutkan kulit dan kemudian usapkan scrub dengan gerakan melingkar. Sangat penting untuk menjaga tekanan yang lembut sehingga tidak akan merusak kulit.\r\nAnda dapat mulai di area mana pun yang paling nyaman dan menyenangkan. Tapi. jangan lupa untuk fokus pada area yang kering. Seperti. siku dan tumit. Lalu bilas kembali dengan air hangat hingga bersih.\r\nSetelah mandi. usap dan ratakan body serum di seluruh kulit tubuh yang masih segar. Kondisi kulit yang baru dibersihkan, membuat formulanya bisa meresap dan bekerja lebih baik.'),
(6, 'kosmetik/LADIES-EAU-DE-TOILETTE-NATURAL-SWEET-ESCAPE', 'LADIES EAU DE TOILETTE NATURAL SWEET ESCAPE', '5.png', 'kosmetik', 'POM NA15170601731 - 80 ML.<br/>', 'HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000', 'Ekstrak Bunga Freesia, Ekstrak Bunga Hutan Eropa dan Ekstrak Mentimun. ', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher, pergelangan\r\ntangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak\r\n15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.'),
(7, 'kosmetik/GENTLEMEN-EAU-DE-TOILETTE-NATURAL-AQUAFIRE', 'GENTLEMEN EAU DE TOILETTE NATURAL AQUAFIRE', 'work-7.jpg', 'kosmetik', 'POM NO: NA18170601728 - 100 ML<br/>', 'HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000', 'Ekstrak Buah Jeruk Nipis, Ekstrak Buah Jeruk Mandarin,\r\nEkstrak Buah Lemon, Embun Dedaunan dan Embun Laut.', 'Semprotkan dibagian-bagian panas tubuh, seperti: leher,\r\npergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak\r\n15 sampai dengan 25 sentimeter agar penyebaran parfum lebih luas dan merata.'),
(8, 'kosmetik/GENTLEMEN-EAU-DE-TOILETTE-NATURAL-DIVINITY', 'GENTLEMEN EAU DE TOILETTE NATURAL DIVINITY', 'work-1.jpg', 'kosmetik', 'POM NA18170601730 - 100 ML.<br/>', 'HARGA NON MEMBER IDR 720,000 - MEMBER IDR 600,000', 'Ekstrak Bunga Teratai, Ekstrak Buah Bergamot,\r\nEkstrak Daun Violet dan Ekstrak Buah Pear Putih.', 'Semprotkan dibagian-bagian panas tubuh, seperti:\r\nleher, pergelangan tangan, pusar, di dalam siku tangan, belakang lutut, betis, dan mata kaki. Waktu\r\nyang tepat menggunakannya adalah sehabis mandi karena pori-pori kulit akan\r\nterbuka dimana parfum bisa melekat lama di pori-pori. Semprot parfum dari jarak'),
(9, 'kosmetik/OURCITRUS-PROFESSIONAL-BIO-ESSENCE-DAY-AND-NIGHT', 'OURCITRUS PROFESSIONAL BIO ESSENCE DAY AND NIGHT', 'work-2.jpg', 'kosmetik', 'DAY SPRAY POM NA 18171205595 @60ML<br/>\r\nNIGHT SPRAY POM NA 18171205596 @110ML<br/>', 'HARGA DAY SPRAY NON MEMBER IDR 576,000 - MEMBER IDR 480,000\r\nHARGA NIGHT SPRAY NON MEMBER IDR 864,000 - MEMBER IDR 720,000', 'Ekstrak Daun Zaitun, Ekstrak Buah Tin, Ekstrak Panax Ginseng, Ekstrak Daun Sirih.', 'Botol dikocok terlebih dahulu. Semprotkan kebagian kulit yang bermasalah:\r\nUntuk keperluan peremajaan kulit, setelah disemprotkan, kulit dipijat halus sampai kesat.\r\nUntuk menghilangkan jerawat, sebaiknya muka dibersihkan dengan air hangat, agar pori-pori kulit terbuka dan spray bisa meresap.\r\nUntuk membantu mengatasi luka, bagian luka dibersihkan dengan air terlebih dahulu agar\r\nkotoran tidak menempel dibagian luka. Lalu semprotkan spray secara merata.'),
(10, 'nutrisi/twa-voira', 'twa voira', 'work-1.jpg', 'nutrisi', 'Minuman Serbuk Rasa Tomat Wortel Apel<br/>\r\nPOM NO: MD 867013058071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'NON-MEMBER 720,000<br/> \r\nMEMBER 600,000<br/>', 'Ekstrak Buah Tomat. Ekstrak Wortel.<br/>\r\nEkstrak Buah Apel. Ekstrak Biji Anggur. Ekstrak Buah<br/>\r\nStrawberry. L Glutathione.<br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\n\r\nLalu minum 1 jam sebelum tidur.<br/>'),
(11, 'nutrisi/gcs-revivar', 'gcs revivar', 'work-2.jpg', 'nutrisi', 'Minuman Serbuk Rasa Anggur Dan Susu<br/>\r\nPOM NO: MD 867013071071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'NON-MEMBER 720,000<br/>\r\nMEMBER 600,000<br/>', ' L Glutathione. Fish Collagen. Spirulina. Extrak Buah Apel. Ekstrak Buah Anggur. EkstrakBuah Strawberry. Fibersol. <br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum tidur.<br/>'),
(12, 'nutrisi/spk-banelo', 'spk banelo', 'work-3.jpg', 'nutrisi', 'Minuman Serbuk Rasa PISANG MANIS<br/>\r\nDINKES PIRT NO: 5133515700746 23<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'NON-MEMBER 720,000<br/>\r\nMEMBER 600,000<br/> ', 'Ekstrak buah pisang, Vit A, Vit B1, B2, B6 . B12, Vit C, Vit D, Kalium,<br/>\r\nKalsium, Fosfor, Besi, Sodium, Zinc, Magneisum, Serat,<br/>\r\nResistant Strach (Pati Resisten), Serat Gandum. Ekstrak<br/>\r\nKopi Hijau. Psilium Husk. Serat Jagung. Rumput laut.,<br/>\r\nL Carnitin. L Glutathione. Citosan. Laktobasilus Parasasae.<br/>\r\nEkstrak Buah Lemon. Ekstrak Kunyit. <br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum makan terakhir.<br/>'),
(13, 'nutrisi/acb-cardiavas', 'acb cardiavas', 'work-4.jpg', 'nutrisi', 'Minuman Serbuk Rasa Apel Merah<br/>\r\nPOM NO: MD 867013189071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'NON-MEMBER 720,000<br/>\r\nMEMBER 600,000 <br/>', 'Ekstrak Buah Apel. Co-Enzim Q 10. Beta Glukan.\r\nSerat Jagung. Serat Gandum. Serat Jeruk.\r\nA A D H A E P A . Ekstrak Hati Ikan Hiu.\r\n74 Mineral Tumbuhan. Vitamin C. Omega 3,6,9.\r\nCitosan. Vitamin E. Kayu Manis.', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.\r\nLalu minum. 1 jam sebelum tidur.'),
(14, 'nutrisi/med-virginia', 'med virginia', 'work-5.jpg', 'nutrisi', 'Minuman Serbuk Rasa Cokelat<br/>\r\nPOM NO. MD 867013185071<br/>\r\n1 Box @10 sachet @20 gram<br/>', 'NON-MEMBER 720,000<br/>\r\nMEMBER 600,000<br/>', 'Ekstrak semangka. Ekstrak delima putih. Ekstrak cokelat.<br/>\r\nRumput Fatimah. Kayu rapet. Asam jawa.<br/>\r\nL-Arginin. Dan Ekstrak buah lainnya.<br/>', 'Campurkan 1 sachet dengan 200ml air biasa, aduk.<br/>\r\nLalu minum 1 jam sebelum tidur.<br/>'),
(15, 'nutrisi/rcc-coffee', 'rcc coffee', 'work-6.jpg', 'nutrisi', 'Minuman Serbuk Kopi Karamel<br/>\r\nDINKES P-IRT NO. 5133515900746-24<br/>\r\n1 Box @12 sachet @20 gram<br/>', 'NON-MEMBER 456,000<br/>\r\nMEMBER 380,000<br/>', 'Ekstrak Kopi & Karamel. L Arginin. Ekstrak Buah Semangka.\r\nEkstrak Buah Manggis. Ekstrak Serat Jeruk. Ekstrak Buah Kurma.\r\nEkstrak Kayu Manis. Ekstrak Tebu.', 'Campurkan 1 sachet dengan 200ml air panas, aduk.\r\nLalu minum.'),
(16, 'nutrisi/mpa-propolis', 'mpa propolis', 'work-7.jpg', 'nutrisi', 'Nutrisi Tetes Lebah Madu Propolis Anise<br/>\r\nDINKES P-IRT NO. 8093515910746-24<br/>\r\n1 Box @3 BOTOL @10 ML<br/>', 'NON-MEMBER 720,000\r\nMEMBER 600,000', 'Madu Trigona, Propolis, Anise ', '\r\nCampurkan 5/10 tetes kedalam 150ml air biasa/hangat,\r\naduk dengan sendok plastik. Lalu minum.');

-- --------------------------------------------------------

--
-- Table structure for table `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `small` varchar(100) NOT NULL,
  `header` varchar(255) NOT NULL,
  `truncate` text NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide_img`
--

INSERT INTO `slide_img` (`id`, `img`, `small`, `header`, `truncate`, `link`) VALUES
(1, 'Slide41.PNG', 'welcome', 'Beauty Inside And Look', '<p>&quot;Kecantikan dan ketampanan seseorang akan selalu terlihat nyata apabila bisa memadukan Anti Aging dan Healthy Aging dalam waktu bersamaan. Tidak ada kecantikan dan ketampanan luar, yang tidak dimulai dari kesehatan didalam tubuh. Begitu juga sebaliknya. Tidak ada kesempurnaan penampilan, tanpa perawatan dari luar. Dan kami menyediakan keduanya untuk Anda.</p>\r\n\r\n<p>Tetap sehat, fokus dan jangan lupa untuk selalu: Tersenyum! &quot;</p>\r\n', ''),
(2, 'match1.png', 'Diamonds Club', 'Double Mega Match', '<p>&quot; Ada beberapa bonus dan reward yang kami sediakan untuk Anda. Akan tetapi ada salah satu bonus yang sulit Anda temukan diperusahaan manapun, yaitu Bonus Double Mega Matching. Bonus harian yang spektakuler ini bukan hanya berpengaruh kepada bonus harian Anda, tapi juga akan sangat berpengaruh kepada Leaders Club dan Diamonds Club, yaitu Klub Khusus Para Leader dan Para Diamond, yang tentunya sangat terbuka lebar bagi siapapun yang ingin menikmatinya.</p>\r\n\r\n<p>Mari berkarir bersama kami. &quot;</p>\r\n', ''),
(3, 'Slide8.PNG', 'Discover', 'Travel World', '<p>&quot; Berbisnis bersama kami, tidak selalu berbicara bonus ataupun produk. Kami sangat senang apabila kita bersama-sama, bisa menyempurnakan indahnya kebersamaan kita, dengan mengunjungi kota-kota terindah didunia.</p>\r\n\r\n<p>Impikan kota mana yang ingin Anda kunjungi, beritahukan ke Dewan Komite, kita rencanakan, dan kita berangkat kesana! &quot;</p>\r\n', ''),
(4, 'Slide2.PNG', 'ourcitrus', 'company profile', '<p>PT. Gemilang Citrus Berjaya dengan brand OURCITRUS, perusahaan profesional dan legal, produk sudah tersertifikasi BPOM.</p>\r\n', 'profilperusahaan'),
(5, 'Slide9.PNG', 'ourcitrus', 'hall of fame', '<p>&quot; Jadilah Seorang Juara dan tercatat sebagai salah satu Leader Berprestasi Kebanggaan Indonesia, melalui perusahaan kami.</p>\r\n\r\n<p>Ketekunan, sikap pantang menyerah dan selalu positif, akan menorehkan nama Anda, dijajaran elit Leader-Leader Internasional.</p>\r\n\r\n<p>Success And Go Diamond! &quot;</p>\r\n', 'halloffame'),
(6, 'Slide7.PNG', 'Hi, what’s up', 'News', '<p>&quot; Selalu nantikan info-info terbaru dari kami dan jangan lewatkan. Keep In Touch dengan jaringan Anda. Selalu berhubungan. Bersilaturahmi. &quot;</p>\r\n', 'post'),
(7, 'Slide6.PNG', 'products', 'Our Products', '<p>&quot; Produk-produk yang kami sediakan adalah produk-produk yang BIASA dibutuhkan oleh masyarakat. Yang TIDAK BIASA akan Anda temukan dari kami adalah: Harga dengan kualitas yang sepadan dari pabrik sendiri, Inovasi yang sulit diikuti oleh yang lain, Jenis produk yang beragam, serta selalu mengutamakan uji legal dari BPOM atau Dinas Kesehatan sebelum dipasarkan - Untuk menjaga keamanan bagi yang mengkonsumsinya. &nbsp;</p>\r\n\r\n<p>Silahkan mencoba dan buktikan! &quot;</p>\r\n', ''),
(8, 'Slide5.PNG', 'ourcitrus', 'customer service', '<p>&quot;Kami akan terus meningkatkan pelayanan dan kami sangat bangga diberikan kepercayaan untuk melayani Anda. Silahkan menghubungi kami kapanpun disaat yang Anda perlukan.&quot;</p>\r\n', 'customerservice'),
(9, 'Slide3.PNG', 'ourcitrus', 'Office', '<p>&quot; Agar mudah untuk selalu berkoordinasi dengan pabrik kami, kami berkantor pusat di Kota Sidoarjo, Jawa Timnur, Indonesia. &quot;</p>\r\n', 'office');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `avatar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `date_created` int(100) DEFAULT NULL,
  `date_update` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `avatar`, `password`, `role_id`, `is_active`, `date_created`, `date_update`) VALUES
(1, 'puji ourcitrus', 'pujiermanto@gmail.com', 'df2450a213661e39fe6eea969420d5f7.jpg', '$2y$10$/LgHAHAYDG2x.NimiwaS5.pXUlwiHN.zsa9cu9ZjCu1aOoIeh0Mmy', 6, 1, 1589154890, 1590171032),
(2, 'Admin Ourcitrus', 'ourcitrus2019@gmail.com', 'd931e500ade407cfe4ad2b3723cee0d3.jpg', '$2y$10$xobcuoiHXB5eodx3n4/2LeTz4xdnkT3fehV5Plv4j3ivCOSzZ6AXW', 2, 1, 1589192635, 1591013563),
(6, 'dadan kusuma', 'dadan21@gmail.com', 'EXGuUmYUEAAynKf.jpeg', '$2y$10$guEfIBYEI3IBVbaVAlJqXedqj8rU9XNk4JKoYmT3/wCVMpK/c8wLy', 2, 1, 1589636054, 1589980350),
(7, 'combet', 'mr.combetohct@gmail.com', 'user.png', '$2y$10$A4Wjqf3hWpJu1f8P1TfPk.g5Hlv58tZTHHS6yPBXQHT39055qHGri', 2, 0, 1590206348, 0),
(8, 'Aris Rustama', 'tama.rustama@gmail.com', 'user.png', '$2y$10$S188pWutAv4lOPBAeOZlIugehT/1u6udCqcO5sjfVLxYeU1GHXVbm', 2, 0, 1590292870, 0),
(9, 'Mia Fitriyanti', 'miafitrianti@gmail.com', 'user.png', '$2y$10$pov68/dbOkzdXBVjVWdksu8NK56XFIIA4p7D03e7YsIG/NuG17TJm', 2, 0, 1591072608, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(7, 1, 3),
(9, 1, 7),
(10, 1, 4),
(11, 3, 2),
(12, 4, 2),
(13, 5, 2),
(14, 4, 4),
(15, 1, 5),
(16, 1, 6),
(17, 6, 2),
(18, 6, 3),
(19, 6, 4),
(20, 6, 5),
(21, 6, 6),
(22, 6, 1),
(23, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Template'),
(5, 'Produk'),
(6, 'Inventory');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) DEFAULT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`, `link`) VALUES
(1, 'Administrator', 'AdminPage'),
(2, 'Member', 'UserPage'),
(3, 'Author', 'UserPage'),
(4, 'Editor', ''),
(5, 'Contributor', ''),
(6, 'WebDeveloper', 'AdminPage');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard Ourcitrus', 'AdminPage', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'UserPage', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'UserPage/EditProfile', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 1, 'Buku Tamu', 'UserPage/BukuTamu', 'fas fa-fw fa-book', 1),
(7, 1, 'Role Users', 'AdminPage/role', 'fas fa-fw fa-user-tie', 1),
(12, 2, 'Info Terbaru', 'Layout/infoterbaru', 'fas fa-fw fa-camera', 1),
(10, 1, 'Users Management', 'UserPage/UsersManagement', 'fas fa-fw fa-user-cog', 1),
(11, 4, 'Slider Layout', 'Layout/sliderLayout', 'fas fa-fw fa-images', 1),
(14, 2, 'Change Password', 'UserPage/changepassword', 'fas fa-fw fa-key', 1),
(15, 5, 'Produk Nutrisi', 'Produk/nutrisi', 'far fa-fw fa-lemon', 1),
(16, 5, 'Produk Kosmetik', 'Produk/kosmetik', 'fas fa-fw fa-gifts', 1),
(17, 6, 'Stock Produk', 'Inventory', 'fas fa-dolly-flatbed', 1),
(18, 4, 'Single Page', 'Layout/singlepage', 'fas fa-fw fa-palette', 1);

-- --------------------------------------------------------

--
-- Table structure for table `view_productpage`
--

CREATE TABLE `view_productpage` (
  `id` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nomorpom` varchar(100) NOT NULL,
  `nonmitra` varchar(100) NOT NULL,
  `mitra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `view_productpage`
--

INSERT INTO `view_productpage` (`id`, `kode`, `image`, `link`, `nama`, `nomorpom`, `nonmitra`, `mitra`) VALUES
(1, 'OCM002', 'slider2.jpg', 'kosmetik/OURCITRUS-PROFESSIONAL-BIO-ESSENCE-DAY-AND-NIGHT', 'Ourcitrus Exe Professional Bio Essence Day', 'NA 18171205595', '576000', '480000'),
(2, 'OCM003', 'slider3.jpg', 'kosmetik/OURCITRUS-PROFESSIONAL-BIO-ESSENCE-DAY-AND-NIGHT', 'Ourcitrus Exe Professional Bio Essence Night', 'NA 18171205596', '864000', '720000'),
(3, 'OCM004', '5.png', 'kosmetik/LADIES-EAU-DE-TOILETTE-NATURAL-SWEET-ESCAPE', 'Ourcitrus Bea Professional Sweet Escape EDT For Women', 'NA 15170601731', '720000', '600000'),
(4, 'OCM005', 'slider4.jpg', '', 'Ourcitrus Bea Professional Serenity EDT For Women', 'NA 15170601729', '720000', '600000'),
(5, 'OCM006', 'slider5.jpg', 'kosmetik/GENTLEMEN-EAU-DE-TOILETTE-NATURAL-AQUAFIRE', 'Ourcitrus Bea Professional Aquafire EDT For Men', 'NA 18170601728', '720000', '600000'),
(6, 'OCM007', 'slider6.jpg', 'kosmetik/GENTLEMEN-EAU-DE-TOILETTE-NATURAL-DIVINITY', 'Ourcitrus Exe Professional Divinity EDT For Men', 'NA 18170601730', '720000', '600000'),
(7, 'OCM009', 'img-5.jpg', 'kosmetik/fixup-series', 'Ourcitrus Bea Ultimate Body Scrub', 'NA 18170701139', '180000', '150000'),
(8, 'OCM010', 'img-8.jpg', 'kosmetik/fixup-series', 'Ourcitrus Bea Ultimate Body Wash', 'NA 18170701140', '120000', '100000'),
(9, 'OCM011', '', 'OURCITRUS BEA ULTIMATE BODY TREATMENT', 'Ourcitrus Bea Ultimate Body Serum', 'NA 18170103800', '120000', '100000'),
(10, 'OCM013', '', 'kosmetik/BEA-ULTIMATE-HAIR-CARE-SERIES-SMOOTH-SHINE', 'Ourcitrus Bea Ultimate Hair Shampoo', 'NA 18171002247', '120000', '100000'),
(11, 'OCM014', '', 'kosmetik/BEA-ULTIMATE-HAIR-CARE-SERIES-SMOOTH-SHINE', 'Ourcitrus Hair Conditioner', 'NA 18171002282', '180000', '150000'),
(12, 'OCM015', '', 'kosmetik/BEA-ULTIMATE-HAIR-CARE-SERIES-SMOOTH-SHINE', 'Ourcitrus Bea Ultimate Hair Serum', 'NA 18171002255', '120000', '100000'),
(13, 'OCM018', '', 'nutrisi/gcs-revivar', 'GCS Minuman Serbuk Anggur Dan Susu - 1 Box@10sachet @20gram', 'MD 867013071071', '720000', '600000'),
(14, 'OCM019', '', 'nutrisi/twa-voira', 'TWA Minuman Serbuk Rasa Tomat Wortel Apel - 1 Box @10sachet @20 gram', 'MD 867013058071', '720000', '600000'),
(15, 'OCM020', '', 'kosmetik/BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 'New Ourcitrus FirstSight Lip Cream Isabel Red', 'NA 18181303648', '180000', '150000'),
(16, 'OCM021', '', 'kosmetik/BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 'New Ourcitrus FirstSight LipCream Safron Red', 'NA 18181303647', '180000', '150000'),
(17, 'OCM022', '', 'kosmetik/BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 'New Ourcitrus FirstSight LipCream Xantre Beige', 'NA 18181303646', '180000', '150000'),
(18, 'OCM023', '', 'kosmetik/BEA-ULTIMATE-FIRST-SIGHT-LIPCREAM-SERIES', 'New Ourcitrus FirstSight Lip Cream Bianca Natural', 'NA 18181303645', '180000', '150000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halloffame`
--
ALTER TABLE `halloffame`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_terbaru`
--
ALTER TABLE `info_terbaru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk_data`
--
ALTER TABLE `produk_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk_testing`
--
ALTER TABLE `produk_testing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_page`
--
ALTER TABLE `single_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `single_product`
--
ALTER TABLE `single_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_img`
--
ALTER TABLE `slide_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `view_productpage`
--
ALTER TABLE `view_productpage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `halloffame`
--
ALTER TABLE `halloffame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `info_terbaru`
--
ALTER TABLE `info_terbaru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk_data`
--
ALTER TABLE `produk_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `produk_testing`
--
ALTER TABLE `produk_testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `single_page`
--
ALTER TABLE `single_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `single_product`
--
ALTER TABLE `single_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slide_img`
--
ALTER TABLE `slide_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `view_productpage`
--
ALTER TABLE `view_productpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
