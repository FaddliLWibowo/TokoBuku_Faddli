-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 24, 2013 at 08:30 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_belibuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `permalink`, `description`) VALUES
(6, 'Komputer dan Internet', 'komputer-dan-internet', ''),
(8, 'Buku Islam', 'buku-islam', ''),
(9, 'Buku Anak', 'buku-anak', ''),
(10, 'Buku Sekolah', 'buku-sekolah', ''),
(11, 'Bisnis dan Keuangan', 'bisnis-dan-keuangan', ''),
(12, 'Bahasa dan kamus', 'bahasa-dan-kamus', ''),
(13, 'Hobi dan Keterampilan', 'hobi-dan-keterampilan', ''),
(14, 'Hukum dan Pemerintahan', 'hukum-dan-pemerintahan', ''),
(15, 'Kedokteran dan Kesehatan', 'kedokteran-dan-kesehatan', ''),
(16, 'Novel dan Sastra', 'novel-dan-sastra', ''),
(17, 'Pertanian dan Lingkungan', 'pertanian-dan-lingkungan', ''),
(18, 'Pendidikan dan Keguruan', 'pendidikan-dan-keguruan', ''),
(19, 'Psikologi', 'psikologi', ''),
(20, 'sejarah dan Budaya', 'sejarah-dan-budaya', ''),
(21, 'Sosial dan Politik', 'sosial-dan-politik', ''),
(22, 'Teknik', 'teknik', ''),
(23, 'Tata Boga', 'tata-boga', ''),
(24, 'Buku Umum', 'buku-umum', '');

-- --------------------------------------------------------

--
-- Table structure for table `confirmations`
--

CREATE TABLE IF NOT EXISTS `confirmations` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sender_bank` varchar(255) DEFAULT NULL,
  `bank_account_name` varchar(255) NOT NULL,
  `receiver_bank` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `key` int(11) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `key`, `mime`, `description`, `path`, `created`, `modified`) VALUES
(31, 'slide', 33, 'image/jpeg', 'Sosok CT mengingatkan konsep filosofis "dari tiada menjadi ada"', 'public/slides/ctanaksingkong.jpg', '2013-05-25 13:03:19', '0000-00-00 00:00:00'),
(32, 'slide', 34, 'image/jpeg', 'Buku ketiga dari trilogi Negeri Lima Menara', 'public/slides/576104_10151584029994923_696854603_n.jpg', '2013-05-25 13:03:34', '0000-00-00 00:00:00'),
(33, 'product', 6, 'image/jpeg', 'Kaya Cara Nabi', 'public/products/images_(1).jpg', '2013-06-24 07:40:50', '0000-00-00 00:00:00'),
(35, 'product', 7, 'image/jpeg', 'Penjelajah gagal', 'public/products/Penjelajah_Gagalm.jpg', '2013-06-24 07:44:52', '0000-00-00 00:00:00'),
(36, 'product', 8, 'image/jpeg', 'Rumus Cepat Matematika SD', 'public/products/Rumus_Cepat_Matematika_untuk_SDm.jpg', '2013-06-24 07:47:25', '0000-00-00 00:00:00'),
(39, 'product', 9, 'image/jpeg', 'Manajemen Ekspor dan Perdagangan', 'public/products/ibo-4-export-import-procedures-and-documentation-500x500.jpg', '2013-06-24 07:50:41', '0000-00-00 00:00:00'),
(41, 'product', 10, 'image/jpeg', 'Kamus Bahasa Indonesia Lengkap', 'public/products/Kamus_Bahasa_Indonesia_Lengkap_Praktism.jpg', '2013-06-24 07:52:38', '0000-00-00 00:00:00'),
(43, 'product', 11, 'image/jpeg', 'Total Bung Karno', 'public/products/Total_Bung_Karnom.jpg', '2013-06-24 07:54:35', '0000-00-00 00:00:00'),
(45, 'product', 12, 'image/jpeg', 'Nganimasi Bersama Mas Be', 'public/products/Nganimasi_bersama_Mas_Bem.jpg', '2013-06-24 07:57:49', '0000-00-00 00:00:00'),
(47, 'product', 13, 'image/jpeg', 'Hukum dan Undang-Undang Perkebunan', 'public/products/hukum_dan_uuuuum.jpg', '2013-06-24 07:59:28', '0000-00-00 00:00:00'),
(49, 'product', 14, 'image/jpeg', 'Awet Muda Ala Jepang', 'public/products/Awet_Muda_ala_Jepangm.jpg', '2013-06-24 08:01:34', '0000-00-00 00:00:00'),
(51, 'product', 15, 'image/jpeg', 'Cara Mudah Beajar  Pemograman Web Dengan PHP', 'public/products/Cara_Mudah_Belajar_Pemrograman_Web_dengan_PHPm.jpg', '2013-06-24 08:03:31', '0000-00-00 00:00:00'),
(53, 'product', 16, 'image/jpeg', 'Si Anak singkong', 'public/products/Anak_singkongm.jpg', '2013-06-24 08:05:59', '0000-00-00 00:00:00'),
(54, 'product', 0, 'image/jpeg', 'Rantau 1 Muara', 'public/products/Rantau_1_Muaram.jpg', '2013-06-24 08:07:41', '0000-00-00 00:00:00'),
(55, 'product', 17, 'image/jpeg', 'Rantau 1 Muara', 'public/products/Rantau_1_Muaram.jpg', '2013-06-24 08:07:53', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `order_date` date NOT NULL,
  `payment_deadline` date DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `total`, `order_date`, `payment_deadline`, `payment_method`, `user_id`, `status`, `created`, `modified`) VALUES
(1, '7X34AAC7', 4000, '2013-06-24', '2013-07-01', '1', 1, 0, '2013-06-24 00:00:00', NULL),
(2, '1R50SNMB', 4000, '2013-06-24', '2013-07-01', '1', 1, 0, '2013-06-24 00:00:00', NULL),
(3, 'N9Y870MR', 52, '2013-06-24', '2013-07-01', '1', 3, 0, '2013-06-24 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_percent` double DEFAULT NULL,
  `net_price` double NOT NULL,
  `order_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `code`, `name`, `qty`, `price`, `discount_percent`, `net_price`, `order_id`) VALUES
(1, 'ABCR34', 'Product Baru', 1, 4000, 20, 4000, 1),
(2, 'ABCR34', 'Product Baru', 1, 4000, 20, 4000, 2),
(3, '0001', 'Si Anak singkong', 1, 52, 0, 39, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `permalink` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `permalink`, `title`, `body`, `status`, `created`, `modified`) VALUES
(6, 'about', 'About', '<p>website www.belibuku.com adalah sarana online untuk mempermudah anda membeli buku. Kelebihan situs kami adalah kami akan memberikan solusi mencari buku anda, kami ada untuk kebutuhan wawasan anda.&nbsp;</p>', 1, '2012-05-15 19:53:52', '2013-06-24 07:10:43'),
(7, 'how-to-shop', 'How to Shop', '<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>Belanja Melalui Shopping Cart</strong></p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><br /><strong>A.&nbsp;&nbsp;&nbsp; Pencarian Produk, Berbelanja, Mengedit &amp; Membatalkan Pesanan</strong><br /><br />1. Pencarian Produk :&nbsp;</p>\r\n<ul style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">\r\n<li>Melalui Search enginge: Ketik Judul/Pengarang/Kata Kunci dan pilih produk kategori --&gt;&nbsp;GO&nbsp;&nbsp;</li>\r\n<li>Melalui kategori produk, tinggal dipilih kategori produk yang dicari&nbsp;</li>\r\n</ul>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">2. Cara Belanja :</p>\r\n<ul style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">\r\n<li>Klik pada kolom &lsquo;Add to Cart&rsquo;, maka produk masuk ke Tas Belanja</li>\r\n<li>Kilik ''Delete'' untuk menghapus data pesanan</li>\r\n<li>Klik &lsquo;Update Cart&rsquo; untuk mengupdate data pesanan</li>\r\n<li>Klik &lsquo;Continue Shopping&rsquo; untuk melanjutkan belanja</li>\r\n<li>Klik &lsquo;Checkout&rsquo; jika telah selesai memilih produk yang ingn dibeli</li>\r\n<li>Klik ''Back'' untuk kembali ke Shopping cart</li>\r\n<li>Klik ''Proceed'' untuk selesai velanja</li>\r\n<li>Klik ''Confirm'' untuk konfirmasi pembayaran</li>\r\n</ul>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">3. Katalog Buku :</p>\r\n<ul style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">\r\n<li>Klik salah satu Kategori; klik salah satu Sub Kategori</li>\r\n<li>Klik &lsquo;Nama Pengarang/Author&rsquo;, maka tampil produk dari pengarang/author yang sama</li>\r\n<li>Klik &lsquo;Judul Produk&rsquo; untuk menampilkan detail informasi produk</li>\r\n<li>Klik &lsquo;Nama Penerbit/Publisher&rsquo;, maka tampil produk dari penerbit yang sama</li>\r\n</ul>\r\n<div>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>B. &nbsp;&nbsp; Tas Belanja</strong><br /><br />Selanjutnya akan muncul Daftar Pembelian Anda di tas belanja, disini akan tertera produk yang akan Anda beli (Items Name), harga (Price), jumlah (Qty), diskon (jika ada), biaya pengiriman, dan total pembelian.&nbsp;</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><br /><strong>C.&nbsp;&nbsp;&nbsp; Register</strong><br /><br />Untuk berbelanja pelanggan dapat mendaftar / registrasi terlebih dulu dengan membuat akun pribadi.<br />Dengan akun tersebut, pelanggan dapat berbelanja di gramediaonline.com, mengedit profil, melihat history pembelian dan melacak pesanannya.<br />Langkah untuk membuat akun adalah sebagai berikut:<br />&nbsp; &nbsp; &nbsp; &nbsp;- Klik&nbsp;&lsquo;Register&rsquo;, lengkapi data Personal Information, Billing Address, Other Information &agrave; Continue</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>D.&nbsp;&nbsp;&nbsp; Address</strong><br /><br />Anda diminta untuk memeriksa Alamat Pemesan dan Alamat Pengiriman &agrave;&nbsp;Continue<br />Bila kota Anda tidak ada dalam daftar kota pengiriman kami, maka pilihlah kota terdekat sebagai alternatif atau Anda dapat menghubungi customer service kami.<br />Bila Anda menemukan kesulitan untuk berbelanja atau ragu akan produk atau nilainya, silahkan menghubungi Customer Service kami melalui telepon 021. 850 9733, fax. 021. 859 11743, atau email: <span style="text-decoration: underline;">bfaddly</span><a href="mailto:support@gramediaonline.com">@gmail.com</a>.</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>E.&nbsp;&nbsp;&nbsp; Receipt</strong></p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">Berisi daftar produk yang Anda beli dengan total nominal pemesanan yang sudah termasuk ongkos pengiriman pesanan.<br />Nomor pemesanan ada di bagian atas daftar pesanan Anda. Mohon diingat dan diperhatikan nomor pemesanan Anda.&nbsp;&nbsp;&nbsp;</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>F.&nbsp;&nbsp;&nbsp; Pembatalan Order</strong></p>\r\n<ul style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">\r\n<li>Jika kami belum menerima informasi pembayaran&nbsp;dalam waktu 2X24 jam</li>\r\n<li>Kami akan membatalkan pemesanan&nbsp;secara otomatis setelah jangka waktu tsb</li>\r\n</ul>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;"><strong>G.&nbsp;&nbsp;&nbsp;&nbsp;Jam Operasional</strong></p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">Pukul 08.00 - 17.00 (Senin s/d Jumat), Sabtu &amp; Minggu (Libur)</p>\r\n</div>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</p>\r\n<ul style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">\r\n</ul>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px; text-align: justify;">&nbsp;</p>\r\n<p style="font-family: Verdana, Geneva, Arial, Helvetica, sans-serif; font-size: 11px;">&nbsp;</p>', 1, '2012-05-15 19:54:41', '2013-06-24 07:05:46'),
(8, 'contact-us', 'Contact Us', '<h3 style="margin: 10px 0px 5px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background-color: transparent; font-family: Arial, Helvetica, sans-serif; color: #004e89; line-height: 18px;">Alamat Kantor Beli Buku:</h3>\r\n<h3 style="margin: 10px 0px 5px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background-color: transparent; font-family: Arial, Helvetica, sans-serif; color: #004e89; line-height: 18px;">\r\n<p style="margin: 0px 0px 10px; padding: 0px; border: 0px; outline: 0px; font-size: 11px; vertical-align: baseline; background-color: transparent; line-height: 1.5em; color: #666666;">Jl. Ahmad Dahlan No. 78<br />Riau 21211 Indonesia<br />Telp: 0761-237858, +6281267202451<br />Fax: +62-21-52997735</p>\r\n<div><br /></div>\r\n</h3>', 1, '2012-05-16 22:52:06', '2013-06-24 06:38:38'),
(10, 'contact', 'Contact', '<h2><span style="font-weight: normal;">Alamat Kantor Beli Buku:<br />Jl. Ahmad Dahlan No. 78<br />Riau 21211 Indonesia<br />Telp: 0761-237858, +6281267202451<br />Fax: +62-21-52997735</span></h2>\r\n<h3 style="margin: 10px 0px 5px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background-color: transparent; font-family: Arial, Helvetica, sans-serif; color: #004e89; line-height: 18px;">\r\n<div><br /></div>\r\n</h3>', 1, '2013-06-24 06:41:11', '2013-06-24 06:51:44');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount_percent` double NOT NULL,
  `net_price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `permalink`, `price`, `discount_percent`, `net_price`, `description`, `stock`, `status`, `category_id`) VALUES
(6, '0001', 'Kaya Cara Nabi', 'kaya-cara-nabi', 39, 0, 39, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">Mengapa orang Islam harus kaya? Karena Nabi Saw. berpesan, &ldquo;Kefakiran lebih dekat dengan Kekufuran.&rdquo; Karena fakir, seseorang rela mencuri. Karena fakir, seorang ', 5, 1, 8),
(7, '0002', 'Penjelajah gagal', 'penjelajah-gagal', 37, 0, 37, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">Sebagai penjelajah sejati, gue merasa perlu mengabadikan kegagahan gue di setiap momen. Jadilah buku ini, kumpulan kisah nyata gue selama &ldquo;terdampar&rdquo; dengan gaga', 5, 1, 9),
(8, '0003', 'Rumus Cepat Matematika SD', 'rumus-cepat-matematika-sd', 35, 0, 35, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">Buku ini menghadirkan beberapa penyelesaian matematika dasar dengan cara cepat dan mudah, bahkan mungkin tidak terpikirkan sebelumnya, sehingga kita pun akan berdecak, &amp;', 5, 1, 10),
(9, '0004', 'Manajemen Ekspor dan Perdagangan', 'manajemen-ekspor-dan-perdagangan', 45, 0, 45, '', 5, 1, 11),
(10, '0005', 'Kamus Bahasa Indonesia Lengkap', 'kamus-bahasa-indonesia-lengkap', 45, 0, 45, '', 5, 1, 12),
(11, '0006', 'Total Bung Karno', 'total-bung-karno', 65, 0, 65, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">&ldquo;Sajian buku ini saya katakan &lsquo;enteng berisi&rsquo;. Narasi yang runtut dengan gaya bahasa yang ringan, membuat saya percaya buku ini tidak saja memuaskan kerind', 5, 1, 24),
(12, '0007', 'Nganimasi Bersama Mas Be', 'nganimasi-bersama-mas-be', 60, 0, 60, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">Membuat animasi diperlukan ketekunan tingkat tinggi (malahan agak autis), pantang menyerah, disiplin dalam berlatih, perhatian terhadap setiap detail dan siap menerima kriti', 5, 1, 13),
(13, '0007', 'Hukum dan Undang-Undang Perkebunan', 'hukum-dan-undang-undang-perkebunan', 40, 0, 40, '', 5, 1, 14),
(14, '0008', 'Awet Muda Ala Jepang', 'awet-muda-ala-jepang', 37, 0, 37, '<p><span style="font-family: Verdana, Arial; font-size: 12px; line-height: 20px;">Kesehatan adalah harta yang tak ternilai harganya, tetapi sering kali hal tersebut baru disadari saat kita telah jatuh sakit dan harus mengeluarkan banyak biaya. Bangsa Jepa', 5, 1, 15),
(15, '0009', 'Cara Mudah Beajar  Pemograman Web Dengan PHP', 'cara-mudah-beajar-pemograman-web-dengan-php', 28, 0, 28, '', 5, 1, 6),
(16, '0001', 'Si Anak singkong', 'si-anak-singkong', 52, 0, 52, '', 5, 1, 16),
(17, '00011', 'Rantau 1 Muara', 'rantau-1-muara', 64, 0, 64, '', 5, 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `description`) VALUES
(1, 'paginationLimit', '20', 'Global pagination limit'),
(2, 'imageAllowed', 'gif|jpg|png|jpeg', ''),
(3, 'maxImageSize', '200000', ''),
(4, 'Order.DueDate', '7', 'Days payment due'),
(5, 'Bank.Name', 'BCA,Mandiri,BNI', 'Bank name that receive transfer from customer'),
(6, 'Email.Admin', 'admin@tokokita.com', 'Email Admin');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_en` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `title_en`, `description_en`, `position`, `status`) VALUES
(33, 'Chairul Tanjung Si Anak Singkong', 'Sosok CT mengingatkan konsep filosofis "dari tiada menjadi ada"', '', '', 33, 1),
(34, 'Rantau 1 Muara', 'Buku ketiga dari trilogi Negeri Lima Menara', '', '', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `reset_token`, `full_name`, `address`, `phone`, `zip`, `level`, `status`, `last_login`, `created`, `modified`) VALUES
(1, 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', NULL, 'Faddli Lindra Wibowo', 'Jln Viyata Yudha No.8', '54674573', 234234, 1, 1, '2013-06-24 08:29:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', NULL, 'Faddli Lindra Wibowo', 'Jln Viyata Yudha No.8', '081267202451', 21211, 0, 1, '2013-06-24 08:14:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
