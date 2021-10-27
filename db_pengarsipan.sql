/*
 Navicat Premium Data Transfer

 Source Server         : MySql
 Source Server Type    : MariaDB
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : db_pengarsipan

 Target Server Type    : MariaDB
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 27/10/2021 16:09:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'SP2D');
INSERT INTO `kategori` VALUES (2, 'SPM');
INSERT INTO `kategori` VALUES (3, 'SPP');
INSERT INTO `kategori` VALUES (4, 'SPBy');
INSERT INTO `kategori` VALUES (5, 'FAKTUR');
INSERT INTO `kategori` VALUES (6, 'SPTJM');
INSERT INTO `kategori` VALUES (9, 'FAKTUR PAJAK');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `group` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `namespace` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2021-10-04-042158', 'App\\Database\\Migrations\\Createuser', 'default', 'App', 1633321929, 1);
INSERT INTO `migrations` VALUES (2, '2021-10-04-060639', 'App\\Database\\Migrations\\Createuser', 'default', 'App', 1633327636, 2);

-- ----------------------------
-- Table structure for surat_keluar
-- ----------------------------
DROP TABLE IF EXISTS `surat_keluar`;
CREATE TABLE `surat_keluar`  (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_surat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12353 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of surat_keluar
-- ----------------------------
INSERT INTO `surat_keluar` VALUES (1, 0, '2021/IV/001', '2021-09-24', 'Surat Barang Masuk', 'Logistik Barang Makanan', '', '');
INSERT INTO `surat_keluar` VALUES (12346, 0, '2021/VI/005', '2021-10-07', 'Surat Edaran Covid', 'Logistik', '', '');
INSERT INTO `surat_keluar` VALUES (12347, 0, '2021/V/002', '2021-10-13', 'Surat Rancangan Anggaran Biaya', 'Kadiv Produksi', '', 'RENCANA ANGGARAN BIAYA.docx');
INSERT INTO `surat_keluar` VALUES (12348, 0, '12453', '2021-10-19', 'Surat Barang Masuk', 'Logistik Barang', 'ada', 'tutorial ai.pdf');
INSERT INTO `surat_keluar` VALUES (12349, 5, '2001/001/VI', '2021-10-20', 'Surat Penagihan Iuran', 'PT. ANGIN BELIUNG', 'ada', 'Surat Balasan Pengunduran Diri.pdf');
INSERT INTO `surat_keluar` VALUES (12350, 4, '2001/001/VI', '2021-10-20', 'Surat Barang Masuk', 'Logistik Barang', 'tidak ada', 'tutorial-dasar-adobe-llustrator.pdf');
INSERT INTO `surat_keluar` VALUES (12351, 2, '004/2021/VI', '2021-10-20', 'Surat Barang Keluar', 'Logistik Barang', 'ada', 'UAT.pdf');
INSERT INTO `surat_keluar` VALUES (12352, 3, '2001/001/VII', '2021-10-20', 'Surat Penagihan Pajak', 'Pembayaran', 'tidak ada', 'PROPOSAL FIX.docx');

-- ----------------------------
-- Table structure for surat_masuk
-- ----------------------------
DROP TABLE IF EXISTS `surat_masuk`;
CREATE TABLE `surat_masuk`  (
  `id_surat` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `no_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_surat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `perihal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pengirim` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_surat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of surat_masuk
-- ----------------------------
INSERT INTO `surat_masuk` VALUES (1, 2, '2001/001/VI', '2021-10-19', 'Surat Barang Keluar', 'PT. ANGIN RIBUT', 'Menunggu Konfirmasi', 'tidak ada', 'UAT.pdf');
INSERT INTO `surat_masuk` VALUES (2, 6, '2021/001/VI', '2021-10-19', 'Surat Order Barang', 'PT. ANGIN BELIUNG', 'Belum Dibaca', 'tidak ada', 'DTY.docx');
INSERT INTO `surat_masuk` VALUES (3, 1, '2001/001/VI', '2021-10-19', 'Surat Barang Masuk', 'PT. ANGIN RIBUT', 'Belum Dibaca', 'ada', 'SELAYANG PANDANG MIQAT.docx');
INSERT INTO `surat_masuk` VALUES (4, 1, '2001/001/VI', '2021-10-19', 'Surat Barang Masuk', 'PT. ANGIN RIBUT', 'Belum Dibaca', 'ada', 'SELAYANG PANDANG MIQAT.docx');
INSERT INTO `surat_masuk` VALUES (5, 6, '2021/001/VI', '2021-10-19', 'Surat Undangan Maulid Nabi', 'Miqat Center', 'Belum Dibaca', 'ada', 'SURAT UNDANGAN.pdf');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `role` enum('admin','user') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'adamnr@gmail.com', 'adam', 'adamganteng', 'admin');
INSERT INTO `user` VALUES (3, 'shelvia@gmail.com', 'selpia', 'akucantik', 'user');
INSERT INTO `user` VALUES (4, 'ameli@gmail.com', 'ameli', 'ameliafitri', 'admin');
INSERT INTO `user` VALUES (5, 'miarosalina@gmail.com', 'miarosalina', 'miarosalina', 'admin');
INSERT INTO `user` VALUES (6, 'ivelynenf@gmail.com', 'ivelyne', 'pelinsabyan', 'user');

SET FOREIGN_KEY_CHECKS = 1;
