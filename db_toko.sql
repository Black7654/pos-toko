-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 03:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pemilik` varchar(100) DEFAULT NULL,
  `jk` enum('laki-laki','perempuan') DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `email`, `pemilik`, `jk`, `alamat`, `no_tlp`, `password`) VALUES
(1, 'admin@gmail.com', 'Deny Kurniawan', 'laki-laki', 'Jl.setono gg 6\r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        \r\n                                                        ', '987897', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_beli` varchar(10) NOT NULL,
  `harga_jual` varchar(10) NOT NULL,
  `harga_member` varchar(10) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `idSatuan` bigint(100) NOT NULL,
  `expired` date NOT NULL,
  `stok_toko` int(5) NOT NULL,
  `stok_gudang` int(5) NOT NULL,
  `batas_stok` int(5) NOT NULL,
  `gambar` tinytext NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_det_transaksi`
--

CREATE TABLE `tb_det_transaksi` (
  `idToko` varchar(100) NOT NULL,
  `idTransaksi` varchar(50) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL,
  `valid` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kabupaten`
--

CREATE TABLE `tb_kabupaten` (
  `id_kab` char(4) NOT NULL,
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kabupaten`
--

INSERT INTO `tb_kabupaten` (`id_kab`, `id_prov`, `nama`, `id_jenis`) VALUES
('1101', '11', 'KAB. ACEH SELATAN', 1),
('1102', '11', 'KAB. ACEH TENGGARA', 1),
('1103', '11', 'KAB. ACEH TIMUR', 1),
('1104', '11', 'KAB. ACEH TENGAH', 1),
('1105', '11', 'KAB. ACEH BARAT', 1),
('1106', '11', 'KAB. ACEH BESAR', 1),
('1107', '11', 'KAB. PIDIE', 1),
('1108', '11', 'KAB. ACEH UTARA', 1),
('1109', '11', 'KAB. SIMEULUE', 1),
('1110', '11', 'KAB. ACEH SINGKIL', 1),
('1111', '11', 'KAB. BIREUEN', 1),
('1112', '11', 'KAB. ACEH BARAT DAYA', 1),
('1113', '11', 'KAB. GAYO LUES', 1),
('1114', '11', 'KAB. ACEH JAYA', 1),
('1115', '11', 'KAB. NAGAN RAYA', 1),
('1116', '11', 'KAB. ACEH TAMIANG', 1),
('1117', '11', 'KAB. BENER MERIAH', 1),
('1118', '11', 'KAB. PIDIE JAYA', 1),
('1171', '11', 'KOTA BANDA ACEH', 2),
('1172', '11', 'KOTA SABANG', 2),
('1173', '11', 'KOTA LHOKSEUMAWE', 2),
('1174', '11', 'KOTA LANGSA', 2),
('1175', '11', 'KOTA SUBULUSSALAM', 2),
('1201', '12', 'KAB. TAPANULI TENGAH', 1),
('1202', '12', 'KAB. TAPANULI UTARA', 1),
('1203', '12', 'KAB. TAPANULI SELATAN', 1),
('1204', '12', 'KAB. NIAS', 1),
('1205', '12', 'KAB. LANGKAT', 1),
('1206', '12', 'KAB. KARO', 1),
('1207', '12', 'KAB. DELI SERDANG', 1),
('1208', '12', 'KAB. SIMALUNGUN', 1),
('1209', '12', 'KAB. ASAHAN', 1),
('1210', '12', 'KAB. LABUHANBATU', 1),
('1211', '12', 'KAB. DAIRI', 1),
('1212', '12', 'KAB. TOBA SAMOSIR', 1),
('1213', '12', 'KAB. MANDAILING NATAL', 1),
('1214', '12', 'KAB. NIAS SELATAN', 1),
('1215', '12', 'KAB. PAKPAK BHARAT', 1),
('1216', '12', 'KAB. HUMBANG HASUNDUTAN', 1),
('1217', '12', 'KAB. SAMOSIR', 1),
('1218', '12', 'KAB. SERDANG BEDAGAI', 1),
('1219', '12', 'KAB. BATU BARA', 1),
('1220', '12', 'KAB. PADANG LAWAS UTARA', 1),
('1221', '12', 'KAB. PADANG LAWAS', 1),
('1222', '12', 'KAB. LABUHANBATU SELATAN', 1),
('1223', '12', 'KAB. LABUHANBATU UTARA', 1),
('1224', '12', 'KAB. NIAS UTARA', 1),
('1225', '12', 'KAB. NIAS BARAT', 1),
('1271', '12', 'KOTA MEDAN', 2),
('1272', '12', 'KOTA PEMATANG SIANTAR', 2),
('1273', '12', 'KOTA SIBOLGA', 2),
('1274', '12', 'KOTA TANJUNG BALAI', 2),
('1275', '12', 'KOTA BINJAI', 2),
('1276', '12', 'KOTA TEBING TINGGI', 2),
('1277', '12', 'KOTA PADANGSIDIMPUAN', 2),
('1278', '12', 'KOTA GUNUNGSITOLI', 2),
('1301', '13', 'KAB. PESISIR SELATAN', 1),
('1302', '13', 'KAB. SOLOK', 1),
('1303', '13', 'KAB. SIJUNJUNG', 1),
('1304', '13', 'KAB. TANAH DATAR', 1),
('1305', '13', 'KAB. PADANG PARIAMAN', 1),
('1306', '13', 'KAB. AGAM', 1),
('1307', '13', 'KAB. LIMA PULUH KOTA', 1),
('1308', '13', 'KAB. PASAMAN', 1),
('1309', '13', 'KAB. KEPULAUAN MENTAWAI', 1),
('1310', '13', 'KAB. DHARMASRAYA', 1),
('1311', '13', 'KAB. SOLOK SELATAN', 1),
('1312', '13', 'KAB. PASAMAN BARAT', 1),
('1371', '13', 'KOTA PADANG', 2),
('1372', '13', 'KOTA SOLOK', 2),
('1373', '13', 'KOTA SAWAHLUNTO', 2),
('1374', '13', 'KOTA PADANG PANJANG', 2),
('1375', '13', 'KOTA BUKITTINGGI', 2),
('1376', '13', 'KOTA PAYAKUMBUH', 2),
('1377', '13', 'KOTA PARIAMAN', 2),
('1401', '14', 'KAB. KAMPAR', 1),
('1402', '14', 'KAB. INDRAGIRI HULU', 1),
('1403', '14', 'KAB. BENGKALIS', 1),
('1404', '14', 'KAB. INDRAGIRI HILIR', 1),
('1405', '14', 'KAB. PELALAWAN', 1),
('1406', '14', 'KAB. ROKAN HULU', 1),
('1407', '14', 'KAB. ROKAN HILIR', 1),
('1408', '14', 'KAB. SIAK', 1),
('1409', '14', 'KAB. KUANTAN SINGINGI', 1),
('1410', '14', 'KAB. KEPULAUAN MERANTI', 1),
('1471', '14', 'KOTA PEKANBARU', 2),
('1472', '14', 'KOTA DUMAI', 2),
('1501', '15', 'KAB. KERINCI', 1),
('1502', '15', 'KAB. MERANGIN', 1),
('1503', '15', 'KAB. SAROLANGUN', 1),
('1504', '15', 'KAB. BATANGHARI', 1),
('1505', '15', 'KAB. MUARO JAMBI', 1),
('1506', '15', 'KAB. TANJUNG JABUNG BARAT', 1),
('1507', '15', 'KAB. TANJUNG JABUNG TIMUR', 1),
('1508', '15', 'KAB. BUNGO', 1),
('1509', '15', 'KAB. TEBO', 1),
('1571', '15', 'KOTA JAMBI', 2),
('1572', '15', 'KOTA SUNGAI PENUH', 2),
('1601', '16', 'KAB. OGAN KOMERING ULU', 1),
('1602', '16', 'KAB. OGAN KOMERING ILIR', 1),
('1603', '16', 'KAB. MUARA ENIM', 1),
('1604', '16', 'KAB. LAHAT', 1),
('1605', '16', 'KAB. MUSI RAWAS', 1),
('1606', '16', 'KAB. MUSI BANYUASIN', 1),
('1607', '16', 'KAB. BANYUASIN', 1),
('1608', '16', 'KAB. OGAN KOMERING ULU TIMUR', 1),
('1609', '16', 'KAB. OGAN KOMERING ULU SELATAN', 1),
('1610', '16', 'KAB. OGAN ILIR', 1),
('1611', '16', 'KAB. EMPAT LAWANG', 1),
('1612', '16', 'KAB. PENUKAL ABAB LEMATANG ILIR', 1),
('1613', '16', 'KAB. MUSI RAWAS UTARA', 1),
('1671', '16', 'KOTA PALEMBANG', 2),
('1672', '16', 'KOTA PAGAR ALAM', 2),
('1673', '16', 'KOTA LUBUK LINGGAU', 2),
('1674', '16', 'KOTA PRABUMULIH', 2),
('1701', '17', 'KAB. BENGKULU SELATAN', 1),
('1702', '17', 'KAB. REJANG LEBONG', 1),
('1703', '17', 'KAB. BENGKULU UTARA', 1),
('1704', '17', 'KAB. KAUR', 1),
('1705', '17', 'KAB. SELUMA', 1),
('1706', '17', 'KAB. MUKO MUKO', 1),
('1707', '17', 'KAB. LEBONG', 1),
('1708', '17', 'KAB. KEPAHIANG', 1),
('1709', '17', 'KAB. BENGKULU TENGAH', 1),
('1771', '17', 'KOTA BENGKULU', 2),
('1801', '18', 'KAB. LAMPUNG SELATAN', 1),
('1802', '18', 'KAB. LAMPUNG TENGAH', 1),
('1803', '18', 'KAB. LAMPUNG UTARA', 1),
('1804', '18', 'KAB. LAMPUNG BARAT', 1),
('1805', '18', 'KAB. TULANG BAWANG', 1),
('1806', '18', 'KAB. TANGGAMUS', 1),
('1807', '18', 'KAB. LAMPUNG TIMUR', 1),
('1808', '18', 'KAB. WAY KANAN', 1),
('1809', '18', 'KAB. PESAWARAN', 1),
('1810', '18', 'KAB. PRINGSEWU', 1),
('1811', '18', 'KAB. MESUJI', 1),
('1812', '18', 'KAB. TULANG BAWANG BARAT', 1),
('1813', '18', 'KAB. PESISIR BARAT', 1),
('1871', '18', 'KOTA BANDAR LAMPUNG', 2),
('1872', '18', 'KOTA METRO', 2),
('1901', '19', 'KAB. BANGKA', 1),
('1902', '19', 'KAB. BELITUNG', 1),
('1903', '19', 'KAB. BANGKA SELATAN', 1),
('1904', '19', 'KAB. BANGKA TENGAH', 1),
('1905', '19', 'KAB. BANGKA BARAT', 1),
('1906', '19', 'KAB. BELITUNG TIMUR', 1),
('1971', '19', 'KOTA PANGKAL PINANG', 2),
('2101', '21', 'KAB. BINTAN', 1),
('2102', '21', 'KAB. KARIMUN', 1),
('2103', '21', 'KAB. NATUNA', 1),
('2104', '21', 'KAB. LINGGA', 1),
('2105', '21', 'KAB. KEPULAUAN ANAMBAS', 1),
('2171', '21', 'KOTA BATAM', 2),
('2172', '21', 'KOTA TANJUNG PINANG', 2),
('3101', '31', 'KAB. ADM. KEP. SERIBU', 1),
('3171', '31', 'KOTA ADM. JAKARTA PUSAT', 2),
('3172', '31', 'KOTA ADM. JAKARTA UTARA', 2),
('3173', '31', 'KOTA ADM. JAKARTA BARAT', 2),
('3174', '31', 'KOTA ADM. JAKARTA SELATAN', 2),
('3175', '31', 'KOTA ADM. JAKARTA TIMUR', 2),
('3201', '32', 'KAB. BOGOR', 1),
('3202', '32', 'KAB. SUKABUMI', 1),
('3203', '32', 'KAB. CIANJUR', 1),
('3204', '32', 'KAB. BANDUNG', 1),
('3205', '32', 'KAB. GARUT', 1),
('3206', '32', 'KAB. TASIKMALAYA', 1),
('3207', '32', 'KAB. CIAMIS', 1),
('3208', '32', 'KAB. KUNINGAN', 1),
('3209', '32', 'KAB. CIREBON', 1),
('3210', '32', 'KAB. MAJALENGKA', 1),
('3211', '32', 'KAB. SUMEDANG', 1),
('3212', '32', 'KAB. INDRAMAYU', 1),
('3213', '32', 'KAB. SUBANG', 1),
('3214', '32', 'KAB. PURWAKARTA', 1),
('3215', '32', 'KAB. KARAWANG', 1),
('3216', '32', 'KAB. BEKASI', 1),
('3217', '32', 'KAB. BANDUNG BARAT', 1),
('3218', '32', 'KAB. PANGANDARAN', 1),
('3271', '32', 'KOTA BOGOR', 2),
('3272', '32', 'KOTA SUKABUMI', 2),
('3273', '32', 'KOTA BANDUNG', 2),
('3274', '32', 'KOTA CIREBON', 2),
('3275', '32', 'KOTA BEKASI', 2),
('3276', '32', 'KOTA DEPOK', 2),
('3277', '32', 'KOTA CIMAHI', 2),
('3278', '32', 'KOTA TASIKMALAYA', 2),
('3279', '32', 'KOTA BANJAR', 2),
('3301', '33', 'KAB. CILACAP', 1),
('3302', '33', 'KAB. BANYUMAS', 1),
('3303', '33', 'KAB. PURBALINGGA', 1),
('3304', '33', 'KAB. BANJARNEGARA', 1),
('3305', '33', 'KAB. KEBUMEN', 1),
('3306', '33', 'KAB. PURWOREJO', 1),
('3307', '33', 'KAB. WONOSOBO', 1),
('3308', '33', 'KAB. MAGELANG', 1),
('3309', '33', 'KAB. BOYOLALI', 1),
('3310', '33', 'KAB. KLATEN', 1),
('3311', '33', 'KAB. SUKOHARJO', 1),
('3312', '33', 'KAB. WONOGIRI', 1),
('3313', '33', 'KAB. KARANGANYAR', 1),
('3314', '33', 'KAB. SRAGEN', 1),
('3315', '33', 'KAB. GROBOGAN', 1),
('3316', '33', 'KAB. BLORA', 1),
('3317', '33', 'KAB. REMBANG', 1),
('3318', '33', 'KAB. PATI', 1),
('3319', '33', 'KAB. KUDUS', 1),
('3320', '33', 'KAB. JEPARA', 1),
('3321', '33', 'KAB. DEMAK', 1),
('3322', '33', 'KAB. SEMARANG', 1),
('3323', '33', 'KAB. TEMANGGUNG', 1),
('3324', '33', 'KAB. KENDAL', 1),
('3325', '33', 'KAB. BATANG', 1),
('3326', '33', 'KAB. PEKALONGAN', 1),
('3327', '33', 'KAB. PEMALANG', 1),
('3328', '33', 'KAB. TEGAL', 1),
('3329', '33', 'KAB. BREBES', 1),
('3371', '33', 'KOTA MAGELANG', 2),
('3372', '33', 'KOTA SURAKARTA', 2),
('3373', '33', 'KOTA SALATIGA', 2),
('3374', '33', 'KOTA SEMARANG', 2),
('3375', '33', 'KOTA PEKALONGAN', 2),
('3376', '33', 'KOTA TEGAL', 2),
('3401', '34', 'KAB. KULON PROGO', 1),
('3402', '34', 'KAB. BANTUL', 1),
('3403', '34', 'KAB. GUNUNG KIDUL', 1),
('3404', '34', 'KAB. SLEMAN', 1),
('3471', '34', 'KOTA YOGYAKARTA', 2),
('3501', '35', 'KAB. PACITAN', 1),
('3502', '35', 'KAB. PONOROGO', 1),
('3503', '35', 'KAB. TRENGGALEK', 1),
('3504', '35', 'KAB. TULUNGAGUNG', 1),
('3505', '35', 'KAB. BLITAR', 1),
('3506', '35', 'KAB. KEDIRI', 1),
('3507', '35', 'KAB. MALANG', 1),
('3508', '35', 'KAB. LUMAJANG', 1),
('3509', '35', 'KAB. JEMBER', 1),
('3510', '35', 'KAB. BANYUWANGI', 1),
('3511', '35', 'KAB. BONDOWOSO', 1),
('3512', '35', 'KAB. SITUBONDO', 1),
('3513', '35', 'KAB. PROBOLINGGO', 1),
('3514', '35', 'KAB. PASURUAN', 1),
('3515', '35', 'KAB. SIDOARJO', 1),
('3516', '35', 'KAB. MOJOKERTO', 1),
('3517', '35', 'KAB. JOMBANG', 1),
('3518', '35', 'KAB. NGANJUK', 1),
('3519', '35', 'KAB. MADIUN', 1),
('3520', '35', 'KAB. MAGETAN', 1),
('3521', '35', 'KAB. NGAWI', 1),
('3522', '35', 'KAB. BOJONEGORO', 1),
('3523', '35', 'KAB. TUBAN', 1),
('3524', '35', 'KAB. LAMONGAN', 1),
('3525', '35', 'KAB. GRESIK', 1),
('3526', '35', 'KAB. BANGKALAN', 1),
('3527', '35', 'KAB. SAMPANG', 1),
('3528', '35', 'KAB. PAMEKASAN', 1),
('3529', '35', 'KAB. SUMENEP', 1),
('3571', '35', 'KOTA KEDIRI', 2),
('3572', '35', 'KOTA BLITAR', 2),
('3573', '35', 'KOTA MALANG', 2),
('3574', '35', 'KOTA PROBOLINGGO', 2),
('3575', '35', 'KOTA PASURUAN', 2),
('3576', '35', 'KOTA MOJOKERTO', 2),
('3577', '35', 'KOTA MADIUN', 2),
('3578', '35', 'KOTA SURABAYA', 2),
('3579', '35', 'KOTA BATU', 2),
('3601', '36', 'KAB. PANDEGLANG', 1),
('3602', '36', 'KAB. LEBAK', 1),
('3603', '36', 'KAB. TANGERANG', 1),
('3604', '36', 'KAB. SERANG', 1),
('3671', '36', 'KOTA TANGERANG', 2),
('3672', '36', 'KOTA CILEGON', 2),
('3673', '36', 'KOTA SERANG', 2),
('3674', '36', 'KOTA TANGERANG SELATAN', 2),
('5101', '51', 'KAB. JEMBRANA', 1),
('5102', '51', 'KAB. TABANAN', 1),
('5103', '51', 'KAB. BADUNG', 1),
('5104', '51', 'KAB. GIANYAR', 1),
('5105', '51', 'KAB. KLUNGKUNG', 1),
('5106', '51', 'KAB. BANGLI', 1),
('5107', '51', 'KAB. KARANGASEM', 1),
('5108', '51', 'KAB. BULELENG', 1),
('5171', '51', 'KOTA DENPASAR', 2),
('5201', '52', 'KAB. LOMBOK BARAT', 1),
('5202', '52', 'KAB. LOMBOK TENGAH', 1),
('5203', '52', 'KAB. LOMBOK TIMUR', 1),
('5204', '52', 'KAB. SUMBAWA', 1),
('5205', '52', 'KAB. DOMPU', 1),
('5206', '52', 'KAB. BIMA', 1),
('5207', '52', 'KAB. SUMBAWA BARAT', 1),
('5208', '52', 'KAB. LOMBOK UTARA', 1),
('5271', '52', 'KOTA MATARAM', 2),
('5272', '52', 'KOTA BIMA', 2),
('5301', '53', 'KAB. KUPANG', 1),
('5302', '53', 'KAB TIMOR TENGAH SELATAN', 1),
('5303', '53', 'KAB. TIMOR TENGAH UTARA', 1),
('5304', '53', 'KAB. BELU', 1),
('5305', '53', 'KAB. ALOR', 1),
('5306', '53', 'KAB. FLORES TIMUR', 1),
('5307', '53', 'KAB. SIKKA', 1),
('5308', '53', 'KAB. ENDE', 1),
('5309', '53', 'KAB. NGADA', 1),
('5310', '53', 'KAB. MANGGARAI', 1),
('5311', '53', 'KAB. SUMBA TIMUR', 1),
('5312', '53', 'KAB. SUMBA BARAT', 1),
('5313', '53', 'KAB. LEMBATA', 1),
('5314', '53', 'KAB. ROTE NDAO', 1),
('5315', '53', 'KAB. MANGGARAI BARAT', 1),
('5316', '53', 'KAB. NAGEKEO', 1),
('5317', '53', 'KAB. SUMBA TENGAH', 1),
('5318', '53', 'KAB. SUMBA BARAT DAYA', 1),
('5319', '53', 'KAB. MANGGARAI TIMUR', 1),
('5320', '53', 'KAB. SABU RAIJUA', 1),
('5321', '53', 'KAB. MALAKA', 1),
('5371', '53', 'KOTA KUPANG', 2),
('6101', '61', 'KAB. SAMBAS', 1),
('6102', '61', 'KAB. MEMPAWAH', 1),
('6103', '61', 'KAB. SANGGAU', 1),
('6104', '61', 'KAB. KETAPANG', 1),
('6105', '61', 'KAB. SINTANG', 1),
('6106', '61', 'KAB. KAPUAS HULU', 1),
('6107', '61', 'KAB. BENGKAYANG', 1),
('6108', '61', 'KAB. LANDAK', 1),
('6109', '61', 'KAB. SEKADAU', 1),
('6110', '61', 'KAB. MELAWI', 1),
('6111', '61', 'KAB. KAYONG UTARA', 1),
('6112', '61', 'KAB. KUBU RAYA', 1),
('6171', '61', 'KOTA PONTIANAK', 2),
('6172', '61', 'KOTA SINGKAWANG', 2),
('6201', '62', 'KAB. KOTAWARINGIN BARAT', 1),
('6202', '62', 'KAB. KOTAWARINGIN TIMUR', 1),
('6203', '62', 'KAB. KAPUAS', 1),
('6204', '62', 'KAB. BARITO SELATAN', 1),
('6205', '62', 'KAB. BARITO UTARA', 1),
('6206', '62', 'KAB. KATINGAN', 1),
('6207', '62', 'KAB. SERUYAN', 1),
('6208', '62', 'KAB. SUKAMARA', 1),
('6209', '62', 'KAB. LAMANDAU', 1),
('6210', '62', 'KAB. GUNUNG MAS', 1),
('6211', '62', 'KAB. PULANG PISAU', 1),
('6212', '62', 'KAB. MURUNG RAYA', 1),
('6213', '62', 'KAB. BARITO TIMUR', 1),
('6271', '62', 'KOTA PALANGKARAYA', 2),
('6301', '63', 'KAB. TANAH LAUT', 1),
('6302', '63', 'KAB. KOTABARU', 1),
('6303', '63', 'KAB. BANJAR', 1),
('6304', '63', 'KAB. BARITO KUALA', 1),
('6305', '63', 'KAB. TAPIN', 1),
('6306', '63', 'KAB. HULU SUNGAI SELATAN', 1),
('6307', '63', 'KAB. HULU SUNGAI TENGAH', 1),
('6308', '63', 'KAB. HULU SUNGAI UTARA', 1),
('6309', '63', 'KAB. TABALONG', 1),
('6310', '63', 'KAB. TANAH BUMBU', 1),
('6311', '63', 'KAB. BALANGAN', 1),
('6371', '63', 'KOTA BANJARMASIN', 2),
('6372', '63', 'KOTA BANJARBARU', 2),
('6401', '64', 'KAB. PASER', 1),
('6402', '64', 'KAB. KUTAI KARTANEGARA', 1),
('6403', '64', 'KAB. BERAU', 1),
('6407', '64', 'KAB. KUTAI BARAT', 1),
('6408', '64', 'KAB. KUTAI TIMUR', 1),
('6409', '64', 'KAB. PENAJAM PASER UTARA', 1),
('6411', '64', 'KAB. MAHAKAM ULU', 1),
('6471', '64', 'KOTA BALIKPAPAN', 2),
('6472', '64', 'KOTA SAMARINDA', 2),
('6474', '64', 'KOTA BONTANG', 2),
('6501', '65', 'KAB. BULUNGAN', 1),
('6502', '65', 'KAB. MALINAU', 1),
('6503', '65', 'KAB. NUNUKAN', 1),
('6504', '65', 'KAB. TANA TIDUNG', 1),
('6571', '65', 'KOTA TARAKAN', 2),
('7101', '71', 'KAB. BOLAANG MONGONDOW', 1),
('7102', '71', 'KAB. MINAHASA', 1),
('7103', '71', 'KAB. KEPULAUAN SANGIHE', 1),
('7104', '71', 'KAB. KEPULAUAN TALAUD', 1),
('7105', '71', 'KAB. MINAHASA SELATAN', 1),
('7106', '71', 'KAB. MINAHASA UTARA', 1),
('7107', '71', 'KAB. MINAHASA TENGGARA', 1),
('7108', '71', 'KAB. BOLAANG MONGONDOW UTARA', 1),
('7109', '71', 'KAB. KEP. SIAU TAGULANDANG BIARO', 1),
('7110', '71', 'KAB. BOLAANG MONGONDOW TIMUR', 1),
('7111', '71', 'KAB. BOLAANG MONGONDOW SELATAN', 1),
('7171', '71', 'KOTA MANADO', 2),
('7172', '71', 'KOTA BITUNG', 2),
('7173', '71', 'KOTA TOMOHON', 2),
('7174', '71', 'KOTA KOTAMOBAGU', 2),
('7201', '72', 'KAB. BANGGAI', 1),
('7202', '72', 'KAB. POSO', 1),
('7203', '72', 'KAB. DONGGALA', 1),
('7204', '72', 'KAB. TOLI TOLI', 1),
('7205', '72', 'KAB. BUOL', 1),
('7206', '72', 'KAB. MOROWALI', 1),
('7207', '72', 'KAB. BANGGAI KEPULAUAN', 1),
('7208', '72', 'KAB. PARIGI MOUTONG', 1),
('7209', '72', 'KAB. TOJO UNA UNA', 1),
('7210', '72', 'KAB. SIGI', 1),
('7211', '72', 'KAB. BANGGAI LAUT', 1),
('7212', '72', 'KAB. MOROWALI UTARA', 1),
('7271', '72', 'KOTA PALU', 2),
('7301', '73', 'KAB. KEPULAUAN SELAYAR', 1),
('7302', '73', 'KAB. BULUKUMBA', 1),
('7303', '73', 'KAB. BANTAENG', 1),
('7304', '73', 'KAB. JENEPONTO', 1),
('7305', '73', 'KAB. TAKALAR', 1),
('7306', '73', 'KAB. GOWA', 1),
('7307', '73', 'KAB. SINJAI', 1),
('7308', '73', 'KAB. BONE', 1),
('7309', '73', 'KAB. MAROS', 1),
('7310', '73', 'KAB. PANGKAJENE KEPULAUAN', 1),
('7311', '73', 'KAB. BARRU', 1),
('7312', '73', 'KAB. SOPPENG', 1),
('7313', '73', 'KAB. WAJO', 1),
('7314', '73', 'KAB. SIDENRENG RAPPANG', 1),
('7315', '73', 'KAB. PINRANG', 1),
('7316', '73', 'KAB. ENREKANG', 1),
('7317', '73', 'KAB. LUWU', 1),
('7318', '73', 'KAB. TANA TORAJA', 1),
('7322', '73', 'KAB. LUWU UTARA', 1),
('7324', '73', 'KAB. LUWU TIMUR', 1),
('7326', '73', 'KAB. TORAJA UTARA', 1),
('7371', '73', 'KOTA MAKASSAR', 2),
('7372', '73', 'KOTA PARE PARE', 2),
('7373', '73', 'KOTA PALOPO', 2),
('7401', '74', 'KAB. KOLAKA', 1),
('7402', '74', 'KAB. KONAWE', 1),
('7403', '74', 'KAB. MUNA', 1),
('7404', '74', 'KAB. BUTON', 1),
('7405', '74', 'KAB. KONAWE SELATAN', 1),
('7406', '74', 'KAB. BOMBANA', 1),
('7407', '74', 'KAB. WAKATOBI', 1),
('7408', '74', 'KAB. KOLAKA UTARA', 1),
('7409', '74', 'KAB. KONAWE UTARA', 1),
('7410', '74', 'KAB. BUTON UTARA', 1),
('7411', '74', 'KAB. KOLAKA TIMUR', 1),
('7412', '74', 'KAB. KONAWE KEPULAUAN', 1),
('7413', '74', 'KAB. MUNA BARAT', 1),
('7414', '74', 'KAB. BUTON TENGAH', 1),
('7415', '74', 'KAB. BUTON SELATAN', 1),
('7471', '74', 'KOTA KENDARI', 2),
('7472', '74', 'KOTA BAU BAU', 2),
('7501', '75', 'KAB. GORONTALO', 1),
('7502', '75', 'KAB. BOALEMO', 1),
('7503', '75', 'KAB. BONE BOLANGO', 1),
('7504', '75', 'KAB. PAHUWATO', 1),
('7505', '75', 'KAB. GORONTALO UTARA', 1),
('7571', '75', 'KOTA GORONTALO', 2),
('7601', '76', 'KAB. MAMUJU UTARA', 1),
('7602', '76', 'KAB. MAMUJU', 1),
('7603', '76', 'KAB. MAMASA', 1),
('7604', '76', 'KAB. POLEWALI MANDAR', 1),
('7605', '76', 'KAB. MAJENE', 1),
('7606', '76', 'KAB. MAMUJU TENGAH', 1),
('8101', '81', 'KAB. MALUKU TENGAH', 1),
('8102', '81', 'KAB. MALUKU TENGGARA', 1),
('8103', '81', 'KAB MALUKU TENGGARA BARAT', 1),
('8104', '81', 'KAB. BURU', 1),
('8105', '81', 'KAB. SERAM BAGIAN TIMUR', 1),
('8106', '81', 'KAB. SERAM BAGIAN BARAT', 1),
('8107', '81', 'KAB. KEPULAUAN ARU', 1),
('8108', '81', 'KAB. MALUKU BARAT DAYA', 1),
('8109', '81', 'KAB. BURU SELATAN', 1),
('8171', '81', 'KOTA AMBON', 2),
('8172', '81', 'KOTA TUAL', 2),
('8201', '82', 'KAB. HALMAHERA BARAT', 1),
('8202', '82', 'KAB. HALMAHERA TENGAH', 1),
('8203', '82', 'KAB. HALMAHERA UTARA', 1),
('8204', '82', 'KAB. HALMAHERA SELATAN', 1),
('8205', '82', 'KAB. KEPULAUAN SULA', 1),
('8206', '82', 'KAB. HALMAHERA TIMUR', 1),
('8207', '82', 'KAB. PULAU MOROTAI', 1),
('8208', '82', 'KAB. PULAU TALIABU', 1),
('8271', '82', 'KOTA TERNATE', 2),
('8272', '82', 'KOTA TIDORE KEPULAUAN', 2),
('9101', '91', 'KAB. MERAUKE', 1),
('9102', '91', 'KAB. JAYAWIJAYA', 1),
('9103', '91', 'KAB. JAYAPURA', 1),
('9104', '91', 'KAB. NABIRE', 1),
('9105', '91', 'KAB. KEPULAUAN YAPEN', 1),
('9106', '91', 'KAB. BIAK NUMFOR', 1),
('9107', '91', 'KAB. PUNCAK JAYA', 1),
('9108', '91', 'KAB. PANIAI', 1),
('9109', '91', 'KAB. MIMIKA', 1),
('9110', '91', 'KAB. SARMI', 1),
('9111', '91', 'KAB. KEEROM', 1),
('9112', '91', 'KAB PEGUNUNGAN BINTANG', 1),
('9113', '91', 'KAB. YAHUKIMO', 1),
('9114', '91', 'KAB. TOLIKARA', 1),
('9115', '91', 'KAB. WAROPEN', 1),
('9116', '91', 'KAB. BOVEN DIGOEL', 1),
('9117', '91', 'KAB. MAPPI', 1),
('9118', '91', 'KAB. ASMAT', 1),
('9119', '91', 'KAB. SUPIORI', 1),
('9120', '91', 'KAB. MAMBERAMO RAYA', 1),
('9121', '91', 'KAB. MAMBERAMO TENGAH', 1),
('9122', '91', 'KAB. YALIMO', 1),
('9123', '91', 'KAB. LANNY JAYA', 1),
('9124', '91', 'KAB. NDUGA', 1),
('9125', '91', 'KAB. PUNCAK', 1),
('9126', '91', 'KAB. DOGIYAI', 1),
('9127', '91', 'KAB. INTAN JAYA', 1),
('9128', '91', 'KAB. DEIYAI', 1),
('9171', '91', 'KOTA JAYAPURA', 2),
('9201', '92', 'KAB. SORONG', 1),
('9202', '92', 'KAB. MANOKWARI', 1),
('9203', '92', 'KAB. FAK FAK', 1),
('9204', '92', 'KAB. SORONG SELATAN', 1),
('9205', '92', 'KAB. RAJA AMPAT', 1),
('9206', '92', 'KAB. TELUK BINTUNI', 1),
('9207', '92', 'KAB. TELUK WONDAMA', 1),
('9208', '92', 'KAB. KAIMANA', 1),
('9209', '92', 'KAB. TAMBRAUW', 1),
('9210', '92', 'KAB. MAYBRAT', 1),
('9211', '92', 'KAB. MANOKWARI SELATAN', 1),
('9212', '92', 'KAB. PEGUNUNGAN ARFAK', 1),
('9271', '92', 'KOTA SORONG', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id` varchar(11) NOT NULL,
  `idToko` varchar(35) NOT NULL,
  `idKat` varchar(35) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id`, `idToko`, `idKat`, `nama`, `is_aktif`) VALUES
('ID594677331', 'TOKO604692057824', 'KAT581368142930', 'Galuh', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_modal_awal`
--

CREATE TABLE `tb_log_modal_awal` (
  `idLog` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idUser` varchar(100) NOT NULL,
  `Modal` int(10) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_log_shift`
--

CREATE TABLE `tb_log_shift` (
  `idLog` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idUser` varchar(100) NOT NULL,
  `waktu` datetime NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_modal_awal`
--

CREATE TABLE `tb_modal_awal` (
  `idModal` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `Modal` int(10) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_opname`
--

CREATE TABLE `tb_opname` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `tgl` date NOT NULL,
  `stok_toko` int(5) NOT NULL,
  `stok_gudang` int(5) NOT NULL,
  `stok` int(5) NOT NULL,
  `selisih` int(5) NOT NULL,
  `is_akttif` enum('yes','no') NOT NULL,
  `idUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_prov` char(2) NOT NULL,
  `nama` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_prov`, `nama`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rak`
--

CREATE TABLE `tb_rak` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idRak` varchar(50) NOT NULL,
  `nama_rak` varchar(50) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `idSatuan` bigint(100) NOT NULL,
  `nama_satuan` varchar(50) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `idSup` varchar(50) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_toko` varchar(50) DEFAULT NULL,
  `pemilik` varchar(50) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `tmp_lahir` varchar(40) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `telp` varchar(17) DEFAULT NULL,
  `alamat` tinytext DEFAULT NULL,
  `no_ktp` varchar(20) DEFAULT NULL,
  `kota_kab` char(5) DEFAULT NULL,
  `provinsi` char(2) DEFAULT NULL,
  `foto_profil` tinytext DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `is_aktif` enum('yes','no') DEFAULT NULL,
  `is_login` enum('yes','no') DEFAULT NULL,
  `last_login` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_toko`
--

INSERT INTO `tb_toko` (`id`, `idToko`, `email`, `password`, `nama_toko`, `pemilik`, `gender`, `tmp_lahir`, `tgl_lahir`, `telp`, `alamat`, `no_ktp`, `kota_kab`, `provinsi`, `foto_profil`, `reg_date`, `exp_date`, `is_aktif`, `is_login`, `last_login`) VALUES
(1, NULL, 'c@gmail.com', 'coba', 'coba', 'coba', 'L', 'kediri', '2222-02-22', '687678', 'kediri', '78676', 'ke', 'ja', NULL, '2222-02-22', '2222-02-22', 'no', 'yes', NULL),
(3, 'TKO617100438358', 'd@gmail.com', '202cb962ac59075b964b07152d234b70', 'deny', 'deny', 'L', 'kediri', '2222-02-22', '324223', 'kediri', '342432', '1101', '11', NULL, '2222-02-22', '2222-02-22', 'yes', NULL, NULL),
(4, 'TKO124238397660', 'c@gmail.com', 'h', 'j', 'j', 'L', 'd', '2222-02-22', '453354', 'f', '54354', '1101', '11', '21112020070826_TKO124238397660.jpg', '2222-12-22', '2222-02-22', NULL, NULL, NULL),
(5, 'TKO213089390464', 'goblind03@gmail.com', '202cb962ac59075b964b07152d234b70', 'UD.JAYA', 'deny kurniawan', 'L', 'Kediri', '2000-12-15', '085732078030', 'Jalan.Setono Gg VI', '098787987', '3571', '35', '30112020124729_TKO213089390464.jpg', '2020-11-30', '2020-12-02', 'yes', 'yes', '2020-12-01'),
(6, 'TKO692047012963', 'goblind04@gmail.com', '202cb962ac59075b964b07152d234b70', 'UD BUDI', 'Kurniawan', 'L', 'KEDIRI', '2000-12-15', '98789797', 'SETONO', '787986', '1101', '11', '30112020150324_TKO692047012963.jpg', '2020-11-30', '2020-12-07', 'yes', 'yes', '2020-11-30'),
(7, '', 'galuhbernads@gmail.com', 'f7902bf75aa4f24d50490af095cd9b5e', 'Warkop Mewah', 'Galuh', 'L', 'Kediri', '2020-12-25', '081614648407', 'Kediri', '31412345678', 'ke', 'Ja', 'index.jpg', '2020-12-31', '2021-01-30', 'yes', NULL, NULL),
(8, 'TKO618927105342', 'galuhbernads@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Warkop Mewah', 'Galuh', 'L', 'Kediri', '1999-12-25', '085736076368', 'Jl Perintis Kemerdekaan', '31412345678', '1116', '11', '01122020155126_TKO618927105342.jpeg', '2020-12-01', '2020-12-08', 'yes', NULL, NULL),
(9, 'TKO841785514390', 'daneskun@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', 'Wawa cafe', 'Danes', 'P', 'Kediri', '2004-12-28', '13123213123213', 'a', '232423434324', '1101', '62', '05122020031934_TKO841785514390.jpg', '2020-12-05', '2020-12-12', 'yes', 'yes', '2020-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `idToko` varchar(100) NOT NULL,
  `idTransaksi` varchar(50) NOT NULL,
  `idUser` varchar(30) NOT NULL,
  `tgl` date NOT NULL,
  `jam` time NOT NULL,
  `diskon` varchar(10) NOT NULL,
  `valid` enum('yes','no') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(100) NOT NULL,
  `idToko` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `telp` varchar(17) NOT NULL,
  `alamat` tinytext NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `kota_kab` char(5) NOT NULL,
  `provinsi` char(2) NOT NULL,
  `foto_profil` tinytext NOT NULL,
  `is_aktif` enum('yes','no') NOT NULL,
  `is_login` enum('yes','no') NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kabupaten`
--
ALTER TABLE `tb_kabupaten`
  ADD PRIMARY KEY (`id_kab`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_log_modal_awal`
--
ALTER TABLE `tb_log_modal_awal`
  ADD PRIMARY KEY (`idLog`);

--
-- Indexes for table `tb_log_shift`
--
ALTER TABLE `tb_log_shift`
  ADD PRIMARY KEY (`idLog`);

--
-- Indexes for table `tb_modal_awal`
--
ALTER TABLE `tb_modal_awal`
  ADD PRIMARY KEY (`idModal`);

--
-- Indexes for table `tb_opname`
--
ALTER TABLE `tb_opname`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_prov`);

--
-- Indexes for table `tb_rak`
--
ALTER TABLE `tb_rak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`idSatuan`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_modal_awal`
--
ALTER TABLE `tb_log_modal_awal`
  MODIFY `idLog` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_log_shift`
--
ALTER TABLE `tb_log_shift`
  MODIFY `idLog` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_modal_awal`
--
ALTER TABLE `tb_modal_awal`
  MODIFY `idModal` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_opname`
--
ALTER TABLE `tb_opname`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rak`
--
ALTER TABLE `tb_rak`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `idSatuan` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
