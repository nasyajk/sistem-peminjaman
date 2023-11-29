-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 03:46 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peminjaman`
--

-- --------------------------------------------------------

--
-- Table structure for table `list_record`
--

CREATE TABLE `list_record` (
  `ITEM` varchar(255) NOT NULL,
  `DETAIL` varchar(255) NOT NULL,
  `T_PINJAM` varchar(255) NOT NULL,
  `J_PINJAM` varchar(255) NOT NULL,
  `PIC_PINJAM` varchar(255) NOT NULL,
  `R_PINJAM` varchar(255) NOT NULL,
  `T_KEMBALI` varchar(255) NOT NULL,
  `J_KEMBALI` varchar(255) NOT NULL,
  `PIC_KEMBALI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_record`
--

INSERT INTO `list_record` (`ITEM`, `DETAIL`, `T_PINJAM`, `J_PINJAM`, `PIC_PINJAM`, `R_PINJAM`, `T_KEMBALI`, `J_KEMBALI`, `PIC_KEMBALI`) VALUES
('LAPTOP', 'SUAI-410 VOSTRO 14 5410', '2023-07-14', '10:08', 'LIA', 'MEETING', '2023-07-20', '15:40', 'SINTA'),
('LAPTOP', 'SUAI-203 NEC PC-VK18TGJDDLEG', '2023-07-15', '10:11', 'NANDA', 'QCC', '2023-07-17', '08:53', 'SINTA'),
('LAPTOP', 'SUAI-163 DELL LATITUDE E7440', '2023-07-17', '08:59', 'RIZKI', 'MEETING', '2023-07-20', '14:48', 'MAHIR'),
('LAPTOP', 'SUAI-411 VOSTRO 14 5410', '2023-07-16', '11:09', 'LIA', 'QCC', '2023-07-20', '15:05', '1234'),
('LAPTOP', 'SUAI-308 HP Probook 430 G5', '2023-07-17', '15:31', 'NANDA', 'MEETING', '2023-07-20', '14:55', 'SINTA'),
('CAMERA', 'CAMERA-001', '2023-07-18', '16:00', 'LIA', 'QCC', '', '', 'MAHIR'),
('', '', '2023-07-20', '17:15', 'LIA', 'MEETING', '', '', ''),
('CAMERA', 'CAMERA-001', '2023-07-18', '18:51', 'LIA', 'MEETING', '', '', 'MAHIR'),
('LAPTOP', 'SUAI-007 DELL VOSTRO 3450', '2023-08-14', '11:38', 'NANDA', 'MEETING', '2023-08-14', '11:38', 'MAHIR'),
('CAMERA', 'CAMERA-001', '2023-08-21', '14:41', 'LIA', 'MEETING', '', '', 'MAHIR'),
('LAPTOP', 'SUAI-273 DELL LATITUDE 5490', '2023-09-08', '22:49', 'NANDA', 'MEETING', '2023-09-08', '10:53', 'MAHIR'),
('CAMERA', 'CAMERA-003', '2023-10-04', '12:01', 'lia', 'meeting', '', '', ''),
('LAPTOP', 'SUAI-289 XPS 13 9370', '2023-10-24', '12:21', 'nasya', 'meeting', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `masterlist`
--

CREATE TABLE `masterlist` (
  `ITEM` varchar(255) NOT NULL,
  `DETAIL` varchar(255) NOT NULL,
  `REMARK` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masterlist`
--

INSERT INTO `masterlist` (`ITEM`, `DETAIL`, `REMARK`) VALUES
('ITEM', 'DETAIL', ''),
('LAPTOP', 'SUAI-007 DELL VOSTRO 3450', ''),
('LAPTOP', 'SUAI-163 DELL LATITUDE E7440', ''),
('LAPTOP', 'SUAI-202 MACBOOK AIR ', ''),
('LAPTOP', 'SUAI-203 NEC PC-VK18TGJDDLEG', ''),
('LAPTOP', 'SUAI-236 HP ProBook 430 G4 7265NGW', ''),
('LAPTOP', 'SUAI-273 DELL LATITUDE 5490', ''),
('LAPTOP', 'SUAI-099 DELL VOSTRO 5470', ''),
('LAPTOP', 'SUAI-367 VOSTRO 3400', ''),
('LAPTOP', 'SUAI-105 DELL VOSTRO 5470', ''),
('LAPTOP', 'SUAI-201 NEC VERSAPRO VC-H', ''),
('LAPTOP', 'SUAI-434 INSPIRON 14 5410', ''),
('LAPTOP', 'SUAI-410 VOSTRO 14 5410', ''),
('LAPTOP', 'SUAI-411 VOSTRO 14 5410', ''),
('LAPTOP', 'SUAI-440 INSPIRON 14 5410', ''),
('LAPTOP', 'SUAI-308 HP Probook 430 G5', ''),
('LAPTOP', 'SUAI-289 XPS 13 9370', ''),
('CAMERA', 'SUAI-CAM-001', ''),
('CAMERA', 'SUAI-CAM-002', ''),
('CAMERA', 'SUAI-CAM-003', ''),
('CAMERA', 'SUAI-CAM-004', ''),
('CAMERA', 'SUAI-CAM-005', ''),
('CAMERA', 'SUAI-CAM-006', ''),
('JABRA', 'SUAI-JBR-001', ''),
('JABRA', 'SUAI-JBR-002', ''),
('JABRA', 'SUAI-JBR-003', ''),
('JABRA', 'SUAI-JBR-004', ''),
('JABRA', 'SUAI-JBR-005', ''),
('JABRA', 'SUAI-JBR-006', ''),
('JABRA', 'SUAI-JBR-007', '');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`) VALUES
('11', 'LAPTOP'),
('12', 'CAMERA'),
('13', 'JABRA');

-- --------------------------------------------------------

--
-- Table structure for table `regencies`
--

CREATE TABLE `regencies` (
  `id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `STATUS` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`, `STATUS`) VALUES
('1101', '11', 'SUAI-007 DELL VOSTRO 3450', ''),
('1102', '11', 'SUAI-163 DELL LATITUDE E7440', ''),
('1103', '11', 'SUAI-202 MACBOOK AIR ', ''),
('1104', '11', 'SUAI-203 NEC PC-VK18TGJDDLEG', ''),
('1105', '11', 'SUAI-236 HP ProBook 430 G4 7265NGW', ''),
('1106', '11', 'SUAI-273 DELL LATITUDE 5490', ''),
('1107', '11', 'SUAI-099 DELL VOSTRO 5470', ''),
('1108', '11', 'SUAI-367 VOSTRO 3400', ''),
('1109', '11', 'SUAI-105 DELL VOSTRO 5470', ''),
('1110', '11', 'SUAI-201 NEC VERSAPRO VC-H', ''),
('1111', '11', 'SUAI-434 INSPIRON 14 5410', ''),
('1112', '11', 'SUAI-410 VOSTRO 14 5410', ''),
('1113', '11', 'SUAI-411 VOSTRO 14 5410', ''),
('1114', '11', 'SUAI-440 INSPIRON 14 5410', ''),
('1115', '11', 'SUAI-308 HP Probook 430 G5', ''),
('1116', '11', 'SUAI-289 XPS 13 9370', ''),
('1201', '12', 'CAMERA-001', ''),
('1202', '12', 'CAMERA-002', ''),
('1203', '12', 'CAMERA-003', 'PINJAM'),
('1204', '12', 'CAMERA-004', ''),
('1205', '12', 'CAMERA-005', ''),
('1206', '12', 'CAMERA-006', ''),
('1301', '13', 'JABRA-001', ''),
('1302', '13', 'JABRA-002', ''),
('1303', '13', 'JABRA-003', ''),
('1304', '13', 'JABRA-004', ''),
('1305', '13', 'JABRA-005', ''),
('1306', '13', 'JABRA-006', ''),
('1307', '13', 'JABRA-007', ''),
('1308', '13', 'JABRA-008', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bringout`
--

CREATE TABLE `tbl_bringout` (
  `tgl_apk` date NOT NULL,
  `perusahaan` varchar(250) NOT NULL,
  `dep` varchar(250) NOT NULL,
  `nama_pmbw` varchar(250) NOT NULL,
  `lokasi` varchar(250) NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `tgl_klr` date NOT NULL,
  `tgl_kmbl` date NOT NULL,
  `chck` varchar(250) NOT NULL,
  `ttd_ap` varchar(250) NOT NULL,
  `tgl_ap` date NOT NULL,
  `nama_brg` varchar(250) NOT NULL,
  `maker_m` varchar(250) NOT NULL,
  `mode_m` varchar(250) NOT NULL,
  `serial_m` varchar(250) NOT NULL,
  `check_item` varchar(250) NOT NULL,
  `ttd_p` varchar(250) NOT NULL,
  `tgl_p` date NOT NULL,
  `ttd_b` varchar(250) NOT NULL,
  `tgl_b` date NOT NULL,
  `p_virus` varchar(250) NOT NULL,
  `tgl_pv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bringout`
--

INSERT INTO `tbl_bringout` (`tgl_apk`, `perusahaan`, `dep`, `nama_pmbw`, `lokasi`, `keperluan`, `tgl_klr`, `tgl_kmbl`, `chck`, `ttd_ap`, `tgl_ap`, `nama_brg`, `maker_m`, `mode_m`, `serial_m`, `check_item`, `ttd_p`, `tgl_p`, `ttd_b`, `tgl_b`, `p_virus`, `tgl_pv`) VALUES
('2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-27', '2023-12-27', 'Check', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'Tidak diimport data atau tidak diconnect media yang punya orang lain ditempat yang dibawa.', 'tes', '2023-11-27', 'tes', '2023-11-20', 'tes', '2023-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_email`
--

CREATE TABLE `tbl_email` (
  `status_request` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `req_date` date NOT NULL,
  `req_by` varchar(250) NOT NULL,
  `nama_pengguna` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `create_date` date NOT NULL,
  `end_date` date NOT NULL,
  `notes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_email`
--

INSERT INTO `tbl_email` (`status_request`, `nama_lengkap`, `department`, `req_date`, `req_by`, `nama_pengguna`, `pass`, `email_address`, `create_date`, `end_date`, `notes`) VALUES
('ENG', 'Nasya', 'dvfdhg', '2023-11-08', 'ghgfj', 'gjjykjuyk', 'hgjdfgd', 'rytruyyiukluj', '2023-11-08', '2023-12-08', 'OK'),
('ENG', 'Nasya', '', '2023-11-24', 'tes', 'tes', 'tes', 'tes', '2023-11-24', '2023-12-24', 'OK'),
('PPC MPC', 'Nasya', '', '2023-11-22', 'tes', 'tes', 'tes', 'tes', '2023-11-22', '2023-12-22', 'OK'),
('HRGA', 'Nasya', 'tes', '2023-11-16', 'tes', 'tes', 'tes', 'tes', '2023-11-16', '2023-12-16', 'OK'),
('PPC MPC', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', '2023-11-27', '2023-12-27', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_equipment`
--

CREATE TABLE `tbl_equipment` (
  `pic_req` varchar(250) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `nama_barang2` varchar(250) NOT NULL,
  `nama_barang3` varchar(250) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `area_pengguna` varchar(250) NOT NULL,
  `ttd_m` varchar(250) NOT NULL,
  `ttd_spv` varchar(250) NOT NULL,
  `ttd_pic` varchar(250) NOT NULL,
  `ttd_is` varchar(250) NOT NULL,
  `ttd_im` varchar(250) NOT NULL,
  `ap_de` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_equipment`
--

INSERT INTO `tbl_equipment` (`pic_req`, `nama_barang`, `nama_barang2`, `nama_barang3`, `tgl_peminjaman`, `tgl_pengembalian`, `keperluan`, `area_pengguna`, `ttd_m`, `ttd_spv`, `ttd_pic`, `ttd_is`, `ttd_im`, `ap_de`, `reason`) VALUES
('gfghj', 'gfjdk', 'hgfjhfhj', 'gfjfjfhgj', '2023-11-08', '2023-11-10', 'kjjhgkgd', 'dfdfhgfjh', '', '', '', '', '', 'Denied', 'dgdfjhgfjkh'),
('tes', 'tes', 'tes', 'tes', '2023-11-27', '2023-11-30', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'Approved', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardware`
--

CREATE TABLE `tbl_hardware` (
  `req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `ttd_m` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nama_pic` varchar(250) NOT NULL,
  `ttd_p` varchar(250) NOT NULL,
  `no_pic` varchar(250) NOT NULL,
  `email_pic` varchar(250) NOT NULL,
  `hardware_i` varchar(250) NOT NULL,
  `value_hardware` varchar(250) NOT NULL,
  `desc_hardware` varchar(250) NOT NULL,
  `schedule_hardware` varchar(250) NOT NULL,
  `desc_software` varchar(250) NOT NULL,
  `desc_s` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL,
  `nama_it` varchar(250) NOT NULL,
  `recv_date` date NOT NULL,
  `register_no` varchar(250) NOT NULL,
  `analyzing` varchar(250) NOT NULL,
  `av_eq` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `is_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_hardware`
--

INSERT INTO `tbl_hardware` (`req`, `nama_lengkap`, `department`, `ttd_m`, `tgl`, `no_hp`, `email`, `nama_pic`, `ttd_p`, `no_pic`, `email_pic`, `hardware_i`, `value_hardware`, `desc_hardware`, `schedule_hardware`, `desc_software`, `desc_s`, `ttd_it`, `nama_it`, `recv_date`, `register_no`, `analyzing`, `av_eq`, `reason`, `ttd`, `is_date`) VALUES
('HRGA', 'tes', 'tes', 'tes', '2023-11-20', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'Replacement (Pergantian)', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-20', 'tes', 'APPROVED', 'diluar budget IT', 'tes', 'tes', '2023-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laptop`
--

CREATE TABLE `tbl_laptop` (
  `status_req` enum('HRGA','PPC MPC','ENG','FINACC','PROD','QA') NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `tgl_pengisian` date NOT NULL,
  `ttd_pic` varchar(250) NOT NULL,
  `notes` enum('OK','OK','OK','OK') NOT NULL,
  `sspv` varchar(250) NOT NULL,
  `mgr` varchar(250) NOT NULL,
  `dfm` varchar(250) NOT NULL,
  `nama_pc` varchar(250) NOT NULL,
  `nama_laptop` varchar(250) NOT NULL,
  `spv_it` varchar(250) NOT NULL,
  `it_mgr` varchar(250) NOT NULL,
  `ad` enum('APPROVED','DENIED') NOT NULL,
  `is_date` date NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_laptop`
--

INSERT INTO `tbl_laptop` (`status_req`, `nama_lengkap`, `department`, `tgl_pengisian`, `ttd_pic`, `notes`, `sspv`, `mgr`, `dfm`, `nama_pc`, `nama_laptop`, `spv_it`, `it_mgr`, `ad`, `is_date`, `reason`) VALUES
('ENG', 'Nasya', 'tes', '2023-11-17', 'tes', 'OK', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'APPROVED', '2023-11-17', 'tes'),
('FINACC', 'Nasya', 'tes', '2023-11-27', 'tes', 'OK', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'APPROVED', '2023-11-27', 'tes'),
('QA', 'tes', 'tes', '2023-11-27', 'tes', 'OK', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'APPROVED', '2023-11-27', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_meeting`
--

CREATE TABLE `tbl_meeting` (
  `status_req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `ttd_u` varchar(250) NOT NULL,
  `tgl_meeting` date NOT NULL,
  `r_meeting` varchar(250) NOT NULL,
  `p_meeting` varchar(250) NOT NULL,
  `equipment` varchar(250) NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `l_meeting` varchar(250) NOT NULL,
  `k_link` varchar(250) NOT NULL,
  `apk` varchar(250) NOT NULL,
  `item_c` varchar(250) NOT NULL,
  `nama_laptop` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `is_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`status_req`, `nama_lengkap`, `department`, `tgl`, `ttd_u`, `tgl_meeting`, `r_meeting`, `p_meeting`, `equipment`, `mulai`, `selesai`, `l_meeting`, `k_link`, `apk`, `item_c`, `nama_laptop`, `notes`, `ttd`, `is_date`) VALUES
('ENG', 'Nasya', 'dvfdhg', '2023-11-08', 'jujngf', '2023-11-08', 'frgb vth', 'hghnjm hm knbi', 'Laptop', '14:26:00', '15:27:00', 'YA', 'SUDAH', 'Lync Meeting', 'Mouse', 'dfokyhg', 'OK', '', '2023-11-08'),
('ENG', 'Nasya', 'tes', '2023-11-27', 'tes', '2023-11-27', 'tes', 'tes', 'Laptop', '09:15:00', '10:16:00', 'YA', 'SUDAH', 'Lync Meeting', 'Mouse', 'tes', 'OK', 'tes', '2023-11-27'),
('HRGA', 'Nasya', 'tes', '2023-11-25', 'tes', '2023-11-25', 'tes', 'tes', 'Jabra Speaker', '09:17:00', '10:19:00', 'TIDAK', 'BELUM', 'Lainnya', 'Jabra Speaker', 'tes', 'OK', 'tes', '2023-11-25'),
('HRGA', 'tes', 'tes', '2023-11-22', 'tes', '2023-11-22', 'tes', 'tes', 'Jabra Speaker', '12:53:00', '13:54:00', 'YA', 'SUDAH', 'MS TEAMS', 'Jabra Speaker', 'tes', 'OK', 'tes', '2023-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mregister`
--

CREATE TABLE `tbl_mregister` (
  `status_request` varchar(250) NOT NULL,
  `nama_m` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `ttd_m` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `no_m` varchar(250) NOT NULL,
  `email_m` varchar(250) NOT NULL,
  `nama_pic` varchar(250) NOT NULL,
  `ttd_pic` varchar(250) NOT NULL,
  `no_pic` varchar(250) NOT NULL,
  `email_pic` varchar(250) NOT NULL,
  `desc_detail` varchar(250) NOT NULL,
  `desc_ad` varchar(250) NOT NULL,
  `desc_sc` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `nama_it` varchar(250) NOT NULL,
  `r_date` date NOT NULL,
  `reg_no` varchar(250) NOT NULL,
  `analyzing` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mregister`
--

INSERT INTO `tbl_mregister` (`status_request`, `nama_m`, `department`, `ttd_m`, `tgl`, `no_m`, `email_m`, `nama_pic`, `ttd_pic`, `no_pic`, `email_pic`, `desc_detail`, `desc_ad`, `desc_sc`, `ttd`, `nama_it`, `r_date`, `reg_no`, `analyzing`, `reason`, `ttd_it`) VALUES
('ENG', 'fgvhyjn', 'dvfdhg', 'jyjuyku', '2023-11-08', 'ytjhygjg', 'jhyujyt', 'gfhyujhy', 'hkikliuli', 'jnkk,m', 'ffgbgn ', 'ghbtfnbg', 'hn vbjmbjgmki', 'vfc vgbhjbjugikkghjioykmhj', '', 'hjhm,jh, ', '2023-11-08', 'kjhmkoikhghjyth', 'APPROVED', 'dgdfjhgfjkh', ''),
('PROD', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'DENIED', 'tes', 'tes'),
('ENG', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'APPROVED', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nonyazaki`
--

CREATE TABLE `tbl_nonyazaki` (
  `tanggal` date NOT NULL,
  `network` varchar(250) NOT NULL,
  `check_a` varchar(250) NOT NULL,
  `nama_software` varchar(250) NOT NULL,
  `check_v` varchar(250) NOT NULL,
  `ver` varchar(250) NOT NULL,
  `purpose_connection` varchar(250) NOT NULL,
  `lainnya` varchar(250) NOT NULL,
  `mulai` date NOT NULL,
  `until` date NOT NULL,
  `connec_p` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `device_id` varchar(250) NOT NULL,
  `op` varchar(250) NOT NULL,
  `_sd` varchar(250) NOT NULL,
  `ac_p` varchar(250) NOT NULL,
  `mac_a` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL,
  `ttd_spv` varchar(250) NOT NULL,
  `ttd_p` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nonyazaki`
--

INSERT INTO `tbl_nonyazaki` (`tanggal`, `network`, `check_a`, `nama_software`, `check_v`, `ver`, `purpose_connection`, `lainnya`, `mulai`, `until`, `connec_p`, `user`, `device_id`, `op`, `_sd`, `ac_p`, `mac_a`, `ttd_it`, `ttd_spv`, `ttd_p`) VALUES
('2023-11-08', 'WIFI', 'YES', 'Office', 'YES', '2013', 'File Server / FTP Server', '', '2023-11-08', '2023-12-08', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', 'adsfd', 'fdsgfdh', '', '', ''),
('2023-11-21', 'LAN', 'YES', 'Office', 'YES', '2013', '', '-', '2023-11-21', '2023-12-21', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', 'adsfd', 'fdsgfdh', 'tes', 'tes', 'tes'),
('2023-11-16', 'WIFI', 'NO', 'Office', 'YES', '2013', 'E-mail', '-', '2023-11-16', '2023-11-22', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', 'adsfd', 'fdsgfdh', 'tes', 'tes', 'tes'),
('2023-11-24', 'LAN', 'YES', 'Office', 'YES', '2013', 'Web Application', '-', '2023-11-24', '2023-12-24', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', 'adsfd', 'fdsgfdh', 'tes', 'tes', 'tes'),
('2023-11-27', 'LAN', 'YES', 'Office', 'YES', '2013', 'File Server / FTP Server', '-', '2023-11-27', '2023-12-27', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', 'tes', 'tes', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permintaan`
--

CREATE TABLE `tbl_permintaan` (
  `status_req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `tgl_pem` date NOT NULL,
  `ttd_spv` varchar(250) NOT NULL,
  `usn` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usn_s` varchar(250) NOT NULL,
  `pw_s` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `spv_it` varchar(250) NOT NULL,
  `tgl_ap` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_permintaan`
--

INSERT INTO `tbl_permintaan` (`status_req`, `nama_lengkap`, `department`, `tgl_pem`, `ttd_spv`, `usn`, `pass`, `email`, `usn_s`, `pw_s`, `notes`, `spv_it`, `tgl_ap`) VALUES
('ENG', 'Nasya', 'tes', '2023-11-18', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'Jika Username & Password sudah tidak digunakan, informasikan kepada IT', 'tes', '2023-11-18'),
('HRGA', 'tes', 'tes', '2023-11-28', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'OK', 'tes', '2023-11-28'),
('HRGA', 'tes', 'tes', '2023-11-24', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'Jika Username & Password sudah tidak digunakan, informasikan kepada IT', 'tes', '2023-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_relayout`
--

CREATE TABLE `tbl_relayout` (
  `status_req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `tgl_pengisian` date NOT NULL,
  `ttd_u` varchar(250) NOT NULL,
  `nama_lgkp` varchar(250) NOT NULL,
  `ttd_m` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `area` varchar(250) NOT NULL,
  `jmlh_pc` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `is_date` date NOT NULL,
  `tgl_relayout` date NOT NULL,
  `jam_relayout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_relayout`
--

INSERT INTO `tbl_relayout` (`status_req`, `nama_lengkap`, `department`, `tgl_pengisian`, `ttd_u`, `nama_lgkp`, `ttd_m`, `tgl`, `area`, `jmlh_pc`, `notes`, `ttd`, `is_date`, `tgl_relayout`, `jam_relayout`) VALUES
('ENG', 'Nasya', 'tes', '2023-11-17', 'tes', 'tes', 'tes', '2023-11-17', 'tes', 'tes', 'OK', '', '2023-11-17', '2023-11-17', '13:17:00'),
('PPC MPC', 'Nasya', 'tes', '2023-11-24', 'tes', 'tes', 'tes', '2023-11-24', 'tes', 'tes', 'OK', 'tes', '2023-11-24', '2023-11-24', '14:11:00'),
('QA', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'OK', 'tes', '2023-11-27', '2023-11-27', '13:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `pc_nama` varchar(250) NOT NULL,
  `r_tgl` date NOT NULL,
  `r_wkt` time NOT NULL,
  `ext` varchar(250) NOT NULL,
  `pdw` varchar(250) NOT NULL,
  `desc_p` varchar(250) NOT NULL,
  `ac` varchar(250) NOT NULL,
  `desc_n` varchar(250) NOT NULL,
  `desc_r` varchar(250) NOT NULL,
  `desc_s` varchar(250) NOT NULL,
  `stat` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `pic` varchar(250) NOT NULL,
  `ttd_h` varchar(250) NOT NULL,
  `ttd_t` varchar(250) NOT NULL,
  `ttd_r` varchar(250) NOT NULL,
  `ttd_u` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`req`, `nama_lengkap`, `department`, `pc_nama`, `r_tgl`, `r_wkt`, `ext`, `pdw`, `desc_p`, `ac`, `desc_n`, `desc_r`, `desc_s`, `stat`, `tgl`, `pic`, `ttd_h`, `ttd_t`, `ttd_r`, `ttd_u`, `ttd_it`) VALUES
('FINACC', 'Nasya', 'tes', 'tes', '2023-11-27', '10:54:00', 'tes', 'PROBLEM DESCRIPTION', 'tes', 'ANALYZING AND SOLUTION', 'tes', 'tes', 'tes', 'On progress by IT member', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
('FINACC', 'tes', 'tes', 'tes', '2023-11-27', '13:01:00', 'tes', 'WORK REQUEST', 'tes', 'ACTION', 'tes', 'tes', 'tes', 'On progress by IT member', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_server`
--

CREATE TABLE `tbl_server` (
  `status_req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `ttd_sspv` varchar(250) NOT NULL,
  `tgl_pengisian` date NOT NULL,
  `ttd_pic` varchar(250) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `nama_komputer` varchar(250) NOT NULL,
  `user_komputer` varchar(250) NOT NULL,
  `ip` varchar(250) NOT NULL,
  `notes` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `is_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_server`
--

INSERT INTO `tbl_server` (`status_req`, `nama_lengkap`, `department`, `ttd_sspv`, `tgl_pengisian`, `ttd_pic`, `tujuan`, `area`, `nama_komputer`, `user_komputer`, `ip`, `notes`, `ttd`, `is_date`) VALUES
('ENG', 'Nasya', 'dvfdhg', 'sjfjdsngkf', '2023-11-08', 'hkikliuli', 'dsfertyty', 'fhgfhujy', 'hgjhgjhg', 'fhyjhjkhkm', 'dfgfghgjhgj', 'OK', '', ''),
('ENG', 'Nasya', 'tes', 'tes', '2023-11-24', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'OK', 'tes', 'tes'),
('PPC MPC', 'Nasya', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'OK', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_software`
--

CREATE TABLE `tbl_software` (
  `req` varchar(250) NOT NULL,
  `nama_lengkap` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `ttd_m` varchar(250) NOT NULL,
  `tgl` date NOT NULL,
  `no_hp` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `nama_pic` varchar(250) NOT NULL,
  `ttd_p` varchar(250) NOT NULL,
  `no_pic` varchar(250) NOT NULL,
  `email_pic` varchar(250) NOT NULL,
  `value_software` varchar(250) NOT NULL,
  `info_software` varchar(250) NOT NULL,
  `schedule_software` varchar(250) NOT NULL,
  `req_software` varchar(250) NOT NULL,
  `sup_doc` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL,
  `nama_it` varchar(250) NOT NULL,
  `recv_date` varchar(250) NOT NULL,
  `register_no` varchar(250) NOT NULL,
  `analyzing` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `ttd` varchar(250) NOT NULL,
  `is_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_software`
--

INSERT INTO `tbl_software` (`req`, `nama_lengkap`, `department`, `ttd_m`, `tgl`, `no_hp`, `email`, `nama_pic`, `ttd_p`, `no_pic`, `email_pic`, `value_software`, `info_software`, `schedule_software`, `req_software`, `sup_doc`, `ttd_it`, `nama_it`, `recv_date`, `register_no`, `analyzing`, `reason`, `ttd`, `is_date`) VALUES
('ENG', 'Nasya', 'dvfdhg', 'jyjuyku', '2023-11-08', 'jyui68', 'thyhjnh', 'gfhyujhy', 'fgbn', 'jnkk,m', 'ffgbgn ', 'gbhjmj', 'ertyhyj', 'cvbn jm', 'fhtyjkm', 'fgjnhm', '', 'hjhm,jh, ', '2023-11-08', 'jhm t', 'APPROVED', 'dgdfjhgfjkh', 'jujngf', '2023-11-08'),
('ENG', 'Nasya', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'APPROVED', 'tes', 'tes', '2023-11-27'),
('PPC MPC', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes', '2023-11-27', 'tes', 'APPROVED', 'tes', 'tes', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tte`
--

CREATE TABLE `tbl_tte` (
  `diserahkan` varchar(250) NOT NULL,
  `brp` varchar(250) NOT NULL,
  `dtail` varchar(250) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `pic_barang` varchar(250) NOT NULL,
  `checklist` varchar(250) NOT NULL,
  `pic_reg` varchar(250) NOT NULL,
  `spv` varchar(250) NOT NULL,
  `noted` varchar(250) NOT NULL,
  `spv_p` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_tte`
--

INSERT INTO `tbl_tte` (`diserahkan`, `brp`, `dtail`, `nama_barang`, `quantity`, `department`, `pic_barang`, `checklist`, `pic_reg`, `spv`, `noted`, `spv_p`) VALUES
('tes', 'tes', 'tes', 'tes', 'tes', 'ENG', 'tes', 'Replacement', 'tes', 'tes', 'IT tidak bertanggung jawab jika terjadi kerusakan barang karena kesalahan user (pengguna barang)', 'tes'),
('tes', 'tes', 'tes', 'tes', 'tes', 'ENG', 'tes', 'Replacement', 'tes', 'tes', 'IT tidak bertanggung jawab jika terjadi kerusakan barang karena kesalahan user (pengguna barang)', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ttm`
--

CREATE TABLE `tbl_ttm` (
  `diserahkan` varchar(250) NOT NULL,
  `brp` varchar(250) NOT NULL,
  `dtail` varchar(250) NOT NULL,
  `nama_brg` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `department` varchar(250) NOT NULL,
  `nama_apk` varchar(250) NOT NULL,
  `pc_name` varchar(250) NOT NULL,
  `usn` varchar(250) NOT NULL,
  `ip_u` varchar(250) NOT NULL,
  `ip_w` varchar(250) NOT NULL,
  `checklist` varchar(250) NOT NULL,
  `pic_ins` varchar(250) NOT NULL,
  `spv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ttm`
--

INSERT INTO `tbl_ttm` (`diserahkan`, `brp`, `dtail`, `nama_brg`, `quantity`, `department`, `nama_apk`, `pc_name`, `usn`, `ip_u`, `ip_w`, `checklist`, `pic_ins`, `spv`) VALUES
('tes', 'tes', 'tes', 'tes', 'tes', 'ENG', 'tes', 'tes', 'tes', 'tes', 'tes', 'Additional', 'tes', 'tes'),
('tes', 'tes', 'tes', 'tes', 'tes', 'HRGA', 'tes', 'tes', 'tes', 'tes', 'tes', 'Replacement', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_yazaki`
--

CREATE TABLE `tbl_yazaki` (
  `tanggal` date NOT NULL,
  `network` enum('LAN','WIFI') NOT NULL,
  `check_a` enum('YES','NO') NOT NULL,
  `nama_software` varchar(250) NOT NULL,
  `check_v` enum('yes','no') NOT NULL,
  `ver` varchar(250) NOT NULL,
  `purpose_connection` enum('Internet','Email','Web Application','File Server / FTP Server') NOT NULL,
  `lainnya` varchar(250) NOT NULL,
  `mulai` date NOT NULL,
  `until` date NOT NULL,
  `connec_p` varchar(250) NOT NULL,
  `user` varchar(250) NOT NULL,
  `device_id` varchar(250) NOT NULL,
  `op` varchar(250) NOT NULL,
  `_sd` enum('Static IP Address','Dynamic IP Address') NOT NULL,
  `ip` varchar(250) NOT NULL,
  `subnet` varchar(250) NOT NULL,
  `gw` varchar(250) NOT NULL,
  `dns_p` varchar(250) NOT NULL,
  `dns_s` varchar(250) NOT NULL,
  `mac` varchar(250) NOT NULL,
  `ttd_it` varchar(250) NOT NULL,
  `ttd_spv` varchar(250) NOT NULL,
  `ttd_p` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_yazaki`
--

INSERT INTO `tbl_yazaki` (`tanggal`, `network`, `check_a`, `nama_software`, `check_v`, `ver`, `purpose_connection`, `lainnya`, `mulai`, `until`, `connec_p`, `user`, `device_id`, `op`, `_sd`, `ip`, `subnet`, `gw`, `dns_p`, `dns_s`, `mac`, `ttd_it`, `ttd_spv`, `ttd_p`) VALUES
('2023-11-27', 'LAN', 'YES', 'Office', 'no', '2013', 'Internet', '-', '2023-11-27', '2023-12-27', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Dynamic IP Address', '10.62.186.200', '255.255.255.0', '10.62.186.254', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes'),
('2023-11-29', 'LAN', 'YES', 'Office', 'yes', '2013', 'Internet', '-', '2023-11-29', '2023-11-29', 'Office', 'Nasya', 'SUAI005', 'Windows10', 'Static IP Address', '10.62.186.200', '255.255.255.0', '10.62.186.254', 'tes', 'tes', 'tes', 'tes', 'tes', 'tes');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `ITEM` varchar(255) NOT NULL,
  `DETAIL` varchar(255) NOT NULL,
  `T_PINJAM` varchar(255) NOT NULL,
  `J_PINJAM` varchar(255) NOT NULL,
  `PIC_PINJAM` varchar(255) NOT NULL,
  `R_PINJAM` varchar(255) NOT NULL,
  `T_KEMBALI` varchar(255) NOT NULL,
  `J_KEMBALI` varchar(255) NOT NULL,
  `PIC_KEMBALI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`ITEM`, `DETAIL`, `T_PINJAM`, `J_PINJAM`, `PIC_PINJAM`, `R_PINJAM`, `T_KEMBALI`, `J_KEMBALI`, `PIC_KEMBALI`) VALUES
('CAMERA', 'CAMERA-003', '2023-10-04', '12:01', 'lia', 'meeting', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_index` (`province_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
