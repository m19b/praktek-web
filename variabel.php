<?php
    $namadb = "dbweb";
    $cek = "dev";

    $isitb = "/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306_1
 Source Server Type    : MySQL
 Source Server Version : 100432 (10.4.32-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : dbweb

 Target Server Type    : MySQL
 Target Server Version : 100432 (10.4.32-MariaDB)
 File Encoding         : 65001

 Date: 11/12/2024 11:42:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for berita
-- ----------------------------
DROP TABLE IF EXISTS `berita`;
CREATE TABLE `berita`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `isi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_publikasi` date NULL DEFAULT NULL,
  `user_id` int NULL DEFAULT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `publis` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Y',
  `sumber` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id` ASC) USING BTREE,
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of berita
-- ----------------------------
INSERT INTO `berita` VALUES (1, 'Webinar Nasional Teknologi Informasi 2024', 'UTM Mataram menggelar webinar nasional bertema \"Transformasi Digital dalam Pendidikan Tinggi\"', 'Akademik', '2024-06-15', 1, 'webinar_banner.jpg', 'Y', 'UTM Media', 'webinar,teknologi,pendidikan');
INSERT INTO `berita` VALUES (2, 'Prestasi Mahasiswa UTM dalam Kompetisi Inovasi Nasional', 'Tim mahasiswa UTM berhasil meraih juara 1 dalam kompetisi inovasi teknologi tingkat nasional', 'Prestasi', '2024-05-20', 2, 'prestasi_mahasiswa.jpg', 'Y', 'Kampus Update', 'mahasiswa,prestasi,inovasi');
INSERT INTO `berita` VALUES (3, 'Pembukaan Penerimaan Mahasiswa Baru 2024/2025', 'UTM Mataram membuka pendaftaran mahasiswa baru untuk berbagai program studi', 'Penerimaan', '2024-03-10', 3, 'pmb_2024.jpg', 'Y', 'UTM Publikasi', 'pmb,pendaftaran,mahasiswa');

-- ----------------------------
-- Table structure for biayakuliah
-- ----------------------------
DROP TABLE IF EXISTS `biayakuliah`;
CREATE TABLE `biayakuliah`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `prodi_id` int NOT NULL,
  `nominal` decimal(10, 0) NULL DEFAULT 0,
  `satuan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'Bulan',
  `ikon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `posisi` char(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `urut` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `prodi_id`(`prodi_id` ASC) USING BTREE,
  CONSTRAINT `biayakuliah_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of biayakuliah
-- ----------------------------
INSERT INTO `biayakuliah` VALUES (1, 6, 5500000, 'Semester', 'laptop', 'kiri', 1);
INSERT INTO `biayakuliah` VALUES (2, 4, 4800000, 'Semester', 'chart', 'kanan', 2);
INSERT INTO `biayakuliah` VALUES (3, 8, 4500000, 'Semester', 'leaf', 'kiri', 3);

-- ----------------------------
-- Table structure for biayakuliah_item
-- ----------------------------
DROP TABLE IF EXISTS `biayakuliah_item`;
CREATE TABLE `biayakuliah_item`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ikon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `coret` enum('na','') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT '',
  `uraian` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `biayakuliah_id` int NULL DEFAULT NULL,
  `urut` int NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `biayakuliah_id`(`biayakuliah_id` ASC) USING BTREE,
  CONSTRAINT `biayakuliah_item_ibfk_1` FOREIGN KEY (`biayakuliah_id`) REFERENCES `biayakuliah` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of biayakuliah_item
-- ----------------------------
INSERT INTO `biayakuliah_item` VALUES (1, 'book', '', 'Biaya Pendidikan', 1, 1);
INSERT INTO `biayakuliah_item` VALUES (2, 'laptop', '', 'Biaya Praktikum', 1, 2);
INSERT INTO `biayakuliah_item` VALUES (3, 'card', 'na', 'Potongan Beasiswa', 1, 3);
INSERT INTO `biayakuliah_item` VALUES (4, 'money', '', 'Biaya Administrasi', 2, 1);
INSERT INTO `biayakuliah_item` VALUES (5, 'users', '', 'Biaya Kemahasiswaan', 2, 2);
INSERT INTO `biayakuliah_item` VALUES (6, 'leaf', '', 'Biaya Pembangunan', 3, 1);

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nidn` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `prodi_id` int NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `no_telp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `facebook` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instagram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `prodi_id`(`prodi_id` ASC) USING BTREE,
  CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`prodi_id`) REFERENCES `prodi` (`id_prodi`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES (1, 'Dr. Ir. Muhammad Zainuddin, S.T., M.T.', '0812345678', 'Dekan', 1, 'zainuddin.jpg', 'zainuddin@utm.ac.id', '081234567890', 'Jl. Lomba Pkl. Barat No. 45, Mataram', 'mzainuddin', '@zainuddin_utm', '@zainuddin_research');
INSERT INTO `dosen` VALUES (2, 'Prof. Dr. Ir. Lalu Muhammad Azhar, M.Sc.', '0845678901', 'Ketua Prodi Teknik Sipil', 1, 'lalu_azhar.jpg', 'lalu.azhar@utm.ac.id', '084567890123', 'Jl. Merdeka No. 23, Mataram', 'laluazhar', '@lalu_professor', '@lalu_research');
INSERT INTO `dosen` VALUES (3, 'Dr. Rina Susanti, S.T., M.T.', '0856789012', 'Dosen Teknik Mesin', 2, 'rina_susanti.jpg', 'rina.susanti@utm.ac.id', '085678901234', 'Jl. Pendidikan No. 56, Mataram', 'rinasusanti', '@rina_teknik', '@rina_engineer');
INSERT INTO `dosen` VALUES (4, 'Prof. Dr. H. Abdul Karim, S.E., M.M.', '0834567890', 'Dekan', 4, 'abdul_karim.jpg', 'abdul.karim@utm.ac.id', '083456789012', 'Jl. Wirausaha No. 34, Mataram', 'abdulkarim', '@karim_ekonomi', '@karim_bisnis');
INSERT INTO `dosen` VALUES (5, 'Dr. Ani Widiastuti, S.E., M.Si.', '0845678901', 'Ketua Prodi Manajemen', 4, 'ani_widiastuti.jpg', 'ani.widiastuti@utm.ac.id', '084567890123', 'Jl. Ekonomi No. 67, Mataram', 'aniwidiastuti', '@ani_ekonomi', '@ani_research');
INSERT INTO `dosen` VALUES (6, 'Dr. Siti Rahma, S.Pd., M.Si.', '0823456789', 'Dosen Akuntansi', 5, 'siti_rahma.jpg', 'siti.rahma@utm.ac.id', '082345678901', 'Jl. Sejahtera No. 12, Mataram', 'sitirahma', '@rahma_edu', '@rahma_akademik');
INSERT INTO `dosen` VALUES (7, 'Dr. Ahmad Fauzi, S.Kom., M.T.', '0834567890', 'Dekan', 6, 'ahmad_fauzi.jpg', 'ahmad.fauzi@utm.ac.id', '083456789012', 'Jl. Pendidikan No. 78, Mataram', 'ahmadzaufi', '@ahmad_tech', '@ahmad_innovation');
INSERT INTO `dosen` VALUES (8, 'Dr. Indra Kurniawan, S.T., M.Kom.', '0856789123', 'Ketua Prodi Teknik Informatika', 6, 'indra_kurniawan.jpg', 'indra.kurniawan@utm.ac.id', '085678912345', 'Jl. Teknologi No. 90, Mataram', 'indrakurniawan', '@indra_komputer', '@indra_it');
INSERT INTO `dosen` VALUES (9, 'Prof. Dr. Lili Suryani, S.Kom., M.T.', '0867891234', 'Dosen Sistem Informasi', 7, 'lili_suryani.jpg', 'lili.suryani@utm.ac.id', '086789123456', 'Jl. Inovasi No. 45, Mataram', 'lilisuryani', '@lili_digital', '@lili_research');
INSERT INTO `dosen` VALUES (10, 'Prof. Dr. H. Muhammad Saleh, S.P., M.T.', '0889123456', 'Dekan', 8, 'muhammad_saleh.jpg', 'muhammad.saleh@utm.ac.id', '088912345678', 'Jl. Perkebunan No. 11, Mataram', 'muhammadsaleh', '@saleh_agro', '@saleh_research');
INSERT INTO `dosen` VALUES (11, 'Dr. Ir. Baiq Nurul Hidayah, M.Si.', '0878912345', 'Ketua Prodi Agroteknologi', 8, 'baiq_nurul.jpg', 'baiq.nurul@utm.ac.id', '087891234567', 'Jl. Pertanian No. 22, Mataram', 'baiqnurul', '@baiq_pertanian', '@baiq_agri');
INSERT INTO `dosen` VALUES (12, 'Dr. Siti Khadijah, S.P., M.Si.', '0890123456', 'Dosen Agribisnis', 9, 'siti_khadijah.jpg', 'siti.khadijah@utm.ac.id', '089012345678', 'Jl. Tani No. 33, Mataram', 'sitikhadijah', '@siti_pertanian', '@siti_agri');

-- ----------------------------
-- Table structure for fakultas
-- ----------------------------
DROP TABLE IF EXISTS `fakultas`;
CREATE TABLE `fakultas`  (
  `id_fakultas` int NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `singkatan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dekan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_fakultas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of fakultas
-- ----------------------------
INSERT INTO `fakultas` VALUES (1, 'Fakultas Teknik', 'FT', 'Dr. Ir. Muhammad Zainuddin, S.T., M.T.');
INSERT INTO `fakultas` VALUES (2, 'Fakultas Ekonomi', 'FE', 'Prof. Dr. H. Abdul Karim, S.E., M.M.');
INSERT INTO `fakultas` VALUES (3, 'Fakultas Teknologi Informasi', 'FTI', 'Dr. Ahmad Fauzi, S.Kom., M.T.');
INSERT INTO `fakultas` VALUES (4, 'Fakultas Pertanian', 'FP', 'Prof. Dr. H. Muhammad Saleh, S.P., M.T.');

-- ----------------------------
-- Table structure for galeri
-- ----------------------------
DROP TABLE IF EXISTS `galeri`;
CREATE TABLE `galeri`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `kategori` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama_foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ket` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `saktif` enum('Y','T') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT 'T',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of galeri
-- ----------------------------
INSERT INTO `galeri` VALUES (1, 'Kegiatan', 'seminar_teknologi.jpg', 'Seminar Teknologi', 'Dokumentasi kegiatan seminar teknologi UTM Mataram', 'Y');
INSERT INTO `galeri` VALUES (2, 'Prestasi', 'lomba_inovasi.jpg', 'Lomba Inovasi', 'Tim mahasiswa UTM meraih prestasi dalam kompetisi inovasi', 'Y');
INSERT INTO `galeri` VALUES (3, 'Kampus', 'laboratorium.jpg', 'Laboratorium Komputer', 'Fasilitas laboratorium berstandar nasional', 'Y');

-- ----------------------------
-- Table structure for layanan
-- ----------------------------
DROP TABLE IF EXISTS `layanan`;
CREATE TABLE `layanan`  (
  `idLayanan` int NOT NULL AUTO_INCREMENT,
  `judulLayanan` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskipsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `icon` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`idLayanan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of layanan
-- ----------------------------
INSERT INTO `layanan` VALUES (1, 'Akademik', 'Layanan informasi akademik, jadwal kuliah, dan administrasi perkuliahan', 'bi-person-fill');
INSERT INTO `layanan` VALUES (2, 'Kemahasiswaan', 'Bimbingan dan layanan untuk kegiatan mahasiswa, beasiswa, dan pengembangan softskill', 'bi-person-fill');
INSERT INTO `layanan` VALUES (3, 'Perpustakaan Digital', 'Akses e-book, jurnal, dan sumber referensi akademik online', 'bi-building-fill');
INSERT INTO `layanan` VALUES (4, 'Konsultasi Karier', 'Bimbingan dan informasi lowongan kerja bagi mahasiswa dan alumni', 'bi-pc-display');
INSERT INTO `layanan` VALUES (5, 'Dosen yang ', 'Memiliki dosen yang profesional', 'bi-person-fill');
INSERT INTO `layanan` VALUES (6, 'Ruang Kuliah Representatif', 'memiliki ruang kuliah yang Ruang Kuliah Representatif\r\nRuang Kuliah Representatif Ruang Kuliah Representatif', 'bi-building-fill');
INSERT INTO `layanan` VALUES (7, 'Lap. Komputer Lengkap', 'Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer\r\nLengkap Lap. Komputer Lengkap Lap. Komputer Lengkap Lap. Komputer Lengkap', 'bi-pc-display');
INSERT INTO `layanan` VALUES (8, 'Sistem Informasi Akademik', 'memiliki Sistem Informasi Akademik Sistem Informasi\r\nAkademik Sistem Informasi Akademik Sistem Informasi Akademik Sistem Informasi Akademik', 'bi-database-fill');

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi`  (
  `id_prodi` int NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `singkatan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_fakultas` int NULL DEFAULT NULL,
  PRIMARY KEY (`id_prodi`) USING BTREE,
  INDEX `id_fakultas`(`id_fakultas` ASC) USING BTREE,
  CONSTRAINT `prodi_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prodi
-- ----------------------------
INSERT INTO `prodi` VALUES (1, 'Teknik Sipil', 'TS', 1);
INSERT INTO `prodi` VALUES (2, 'Teknik Mesin', 'TM', 1);
INSERT INTO `prodi` VALUES (3, 'Teknik Elektro', 'TE', 1);
INSERT INTO `prodi` VALUES (4, 'Manajemen', 'MAN', 2);
INSERT INTO `prodi` VALUES (5, 'Akuntansi', 'AKT', 2);
INSERT INTO `prodi` VALUES (6, 'Teknik Informatika', 'TI', 3);
INSERT INTO `prodi` VALUES (7, 'Sistem Informasi', 'SI', 3);
INSERT INTO `prodi` VALUES (8, 'Agroteknologi', 'AGT', 4);
INSERT INTO `prodi` VALUES (9, 'Agribisnis', 'AGB', 4);

-- ----------------------------
-- Table structure for profil_utm
-- ----------------------------
DROP TABLE IF EXISTS `profil_utm`;
CREATE TABLE `profil_utm`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `uraian` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `urut` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of profil_utm
-- ----------------------------
INSERT INTO `profil_utm` VALUES (1, 'Sejarah', 'Sejarah Universitas Teknologi Mataram', 'UTM didirikan pada tahun 2005 dengan visi menjadi perguruan tinggi unggul di Indonesia Timur', 1);
INSERT INTO `profil_utm` VALUES (2, 'Visi Misi', 'Visi dan Misi UTM', 'Menjadi perguruan tinggi yang menghasilkan lulusan berkarakter, kompeten, dan berdaya saing global', 2);
INSERT INTO `profil_utm` VALUES (3, 'Struktur Organisasi', 'Struktur Kepemimpinan UTM', 'Terdiri dari Rektor, Wakil Rektor, Dekan, dan Ketua Program Studi', 3);
INSERT INTO `profil_utm` VALUES (4, 'Prestasi', 'Prestasi UTM', 'Berbagai prestasi akademik dan non-akademik yang telah diraih', 4);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int NULL DEFAULT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `telepon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenkel` enum('L','P') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `facebook` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `instagram` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE,
  INDEX `users_id`(`users_id` ASC) USING BTREE,
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin');
INSERT INTO `users` VALUES (2, 'ikbal@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'Muhammad Ikbal');
INSERT INTO `users` VALUES (3, 'laela@gmail.com', '202cb962ac59075b964b07152d234b70', 'Laela');
INSERT INTO `users` VALUES (4, 'nia@gmail.com', '202cb962ac59075b964b07152d234b70', 'Nia');

SET FOREIGN_KEY_CHECKS = 1;

    "

?>