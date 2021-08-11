/*
 Navicat Premium Data Transfer

 Source Server         : local mysql
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : 127.0.0.1:3306
 Source Schema         : tamu_revisi

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 11/08/2021 21:20:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_departemen
-- ----------------------------
DROP TABLE IF EXISTS `tb_departemen`;
CREATE TABLE `tb_departemen`  (
  `id_departemen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_departemen` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_departemen`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_departemen
-- ----------------------------
INSERT INTO `tb_departemen` VALUES (1, 'tes deprtemen');
INSERT INTO `tb_departemen` VALUES (2, 'tes deprtemen 2');

-- ----------------------------
-- Table structure for tb_ijin
-- ----------------------------
DROP TABLE IF EXISTS `tb_ijin`;
CREATE TABLE `tb_ijin`  (
  `id_ijin` int(11) NOT NULL AUTO_INCREMENT,
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `penanggungjawab` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_jenis_pekerjaan` int(11) NOT NULL,
  `jenis_pekerjaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `jml_tenaga` int(11) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `potensi_bahaya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `apd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `daftar_alat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_ijin`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_ijin
-- ----------------------------
INSERT INTO `tb_ijin` VALUES (4, 2, 'PT. MAJU MUNDUR', 'bejo', 2, 'macul', 10, '2021-07-22', 'Mudah Terbakar, Ketinggian', 'Safety Helmet, Respirator', 'Welding Set, Stager');
INSERT INTO `tb_ijin` VALUES (5, 2, 'PT. MAJU MUNDUR', 'bejo', 2, 'macul', 10, '2021-07-22', 'Mudah Terbakar, Ketinggian', 'Respirator, Safety Body Harness', 'Welding Set, Stager');

-- ----------------------------
-- Table structure for tb_jenis_pekerjaan
-- ----------------------------
DROP TABLE IF EXISTS `tb_jenis_pekerjaan`;
CREATE TABLE `tb_jenis_pekerjaan`  (
  `id_jenis_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis_pekerjaan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_jenis_pekerjaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_pegawai2
-- ----------------------------
DROP TABLE IF EXISTS `tb_pegawai2`;
CREATE TABLE `tb_pegawai2`  (
  `id_pegawai` int(9) NOT NULL AUTO_INCREMENT,
  `nip` varchar(70) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_peg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_u_kerja` int(9) NULL DEFAULT NULL,
  `telpon` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `qr_code` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_pegawai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 548 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_pegawai2
-- ----------------------------
INSERT INTO `tb_pegawai2` VALUES (542, '3221222', 'Dading Hermawan', 100, '6211111', '3221222.png');
INSERT INTO `tb_pegawai2` VALUES (543, '5454545', 'Nurhayati Manurung', 100, '6211111223', '5454545.png');
INSERT INTO `tb_pegawai2` VALUES (544, '344444543', 'PRASETYA N', 101, '62233', '344444543.png');
INSERT INTO `tb_pegawai2` VALUES (546, '33343443311', 'bejo santosa2', 101, '6211111', '33343443311.png');

-- ----------------------------
-- Table structure for tb_perlu
-- ----------------------------
DROP TABLE IF EXISTS `tb_perlu`;
CREATE TABLE `tb_perlu`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_perlu
-- ----------------------------
INSERT INTO `tb_perlu` VALUES (2, 'Rapat\r\n\r\n');
INSERT INTO `tb_perlu` VALUES (9, 'Penawaran');
INSERT INTO `tb_perlu` VALUES (3, 'Konsultasi');
INSERT INTO `tb_perlu` VALUES (10, 'Mengurus Perizinan');
INSERT INTO `tb_perlu` VALUES (11, 'Mengantar Barang/Paket');
INSERT INTO `tb_perlu` VALUES (12, 'Keperluan Kerja Beresiko');

-- ----------------------------
-- Table structure for tb_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `tb_perusahaan`;
CREATE TABLE `tb_perusahaan`  (
  `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_perusahaan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for tb_profile
-- ----------------------------
DROP TABLE IF EXISTS `tb_profile`;
CREATE TABLE `tb_profile`  (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_profile`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_profile
-- ----------------------------
INSERT INTO `tb_profile` VALUES (1, 'PT. MAJU MUNDUR', 'admin.png');

-- ----------------------------
-- Table structure for tb_tamu
-- ----------------------------
DROP TABLE IF EXISTS `tb_tamu`;
CREATE TABLE `tb_tamu`  (
  `id_tamu` int(9) NOT NULL AUTO_INCREMENT,
  `nik` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `telp` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `keperluan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time(0) NOT NULL,
  `jam_keluar` time(0) NOT NULL,
  `ketemu` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `instansi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_departemen` int(11) NOT NULL,
  PRIMARY KEY (`id_tamu`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_tamu
-- ----------------------------
INSERT INTO `tb_tamu` VALUES (23, '2323232', 'FSSF', 'SFS', '4545', '12', '2021-06-22', '20:36:33', '05:27:32', '5454545', 'SSF12', 1);
INSERT INTO `tb_tamu` VALUES (24, '43434', 'bupati', 'aad', '08578140396', '2', '2021-06-23', '10:12:46', '00:00:00', '3221222', 'daa', 1);
INSERT INTO `tb_tamu` VALUES (25, '32121423', 'Sekpri Bupati', 'sfsf', '08578140396', '2', '2021-06-23', '10:13:05', '00:00:00', '3221222', 'sfs', 1);

-- ----------------------------
-- Table structure for tb_user
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user`  (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unit_kerja` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES (5, 'Sekretaris', 'user_sekretaris', '123456', 'sekretaris', 'avatar5.png', 0);
INSERT INTO `tb_user` VALUES (7, 'Security', 'user_security', '123456', 'security', 'logo.png', 0);
INSERT INTO `tb_user` VALUES (8, 'K3 & HSE Dept', 'user_k3', '123456', 'K3 & HSE Dept', 'logo.png', 0);

SET FOREIGN_KEY_CHECKS = 1;
