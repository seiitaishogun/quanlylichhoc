/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100428
 Source Host           : localhost:3306
 Source Schema         : quanlylichhoc

 Target Server Type    : MySQL
 Target Server Version : 100428
 File Encoding         : 65001

 Date: 24/08/2023 21:05:26
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for hocphi
-- ----------------------------
DROP TABLE IF EXISTS `hocphi`;
CREATE TABLE `hocphi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `date` date NULL DEFAULT NULL,
  `bank_note` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `amount` float NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hocphi
-- ----------------------------
INSERT INTO `hocphi` VALUES (1, '2023-01-01', '20730019', 100000);
INSERT INTO `hocphi` VALUES (2, '2023-02-02', '20730019', 200000);
INSERT INTO `hocphi` VALUES (3, '2023-03-03', '20730020', 3000000);

-- ----------------------------
-- Table structure for lichhoc
-- ----------------------------
DROP TABLE IF EXISTS `lichhoc`;
CREATE TABLE `lichhoc`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `credit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `lecturer` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `day` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `day_count` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '0',
  `hour` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 37 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of lichhoc
-- ----------------------------
INSERT INTO `lichhoc` VALUES (1, 'IT001', 'Nhập môn Lập trình', '4', 'ThS. Phạm Thế Sơn', 'CN1.K2023.1 + LT.K2023.1', '18h - Thứ 6', '10', '18h');
INSERT INTO `lichhoc` VALUES (2, 'MA006', 'Giải tích', '4', 'ThS. Lê Hoàng Tuấn', 'CN1.K2023.1', '18h - Chủ nhật', '10', '18h');
INSERT INTO `lichhoc` VALUES (3, 'MA003', 'Đại số tuyến tính', '3', 'ThS. Lê Hoàng Tuấn', 'CN1.K2023.1', '8h - Chủ nhật', '5', '8h');
INSERT INTO `lichhoc` VALUES (4, 'IT009', 'Giới thiệu ngành Công nghệ Thông tin', '1', ' ', 'CN1.K2023.1', '18h - Thứ 4', '4', '18h');
INSERT INTO `lichhoc` VALUES (5, 'SS006', 'Pháp luật đại cương', '2', 'ThS. Huỳnh Thị Nam Hải', 'CN1.K2023.1', '18h - Thứ 7', '5', '18h');
INSERT INTO `lichhoc` VALUES (6, 'ENG01', 'Anh văn 1', '4', 'ThS. Phạm Thị Kiều Tiên', 'CN1.K2023.1', '14h - Chủ nhật', '6', '14h');
INSERT INTO `lichhoc` VALUES (7, 'IT001', 'Nhập môn Lập trình', '4', 'ThS. Nguyễn Văn Toàn', 'CN2.K2023.1', '14h - Chủ nhật', '10', '14h');
INSERT INTO `lichhoc` VALUES (8, 'IT009', 'Giới thiệu ngành Công nghệ Thông tin', '1', 'ThS.Nguyễn Thị Thùy Trâm', 'CN2.K2023.1', '18h - Chủ nhật', '4', '18h');
INSERT INTO `lichhoc` VALUES (9, 'IT004', 'Cơ sở dữ liệu', '4', 'ThS. Huỳnh Đức Huy', 'CN2.K2023.1', '18h - Thứ 6', '10', '18h');
INSERT INTO `lichhoc` VALUES (10, 'IT005', 'Nhập môn mạng máy tính', '4', 'ThS. Lê Đức Thịnh', 'CN2.K2023.1 + LT.K2023.1 + CN1.K2022.2', '18h - Thứ 3', '10', '18h');
INSERT INTO `lichhoc` VALUES (11, 'IE101', 'Cơ sở hạ tầng Công nghệ thông tin', '3', 'ThS. Nguyễn Thị Anh Thư', 'CN2.K2023.1', '18h - Thứ 7', '6', '18h');
INSERT INTO `lichhoc` VALUES (12, 'IT004', 'Cơ sở dữ liệu', '4', 'ThS. Nguyễn Hồ Duy Trí', 'LT.K2023.1 + CN1.K2022.2', '18h - Chủ nhật', '10', '18h');
INSERT INTO `lichhoc` VALUES (13, 'IE103', 'Quản lý thông tin', '4', 'ThS. Tạ Thu Thủy', 'LT.K2023.1 + CN1.K2022.1 + CN2.K2022.2', '18h - Thứ 2', '10', '18h');
INSERT INTO `lichhoc` VALUES (14, 'MA005', 'Xác suất thống kê', '3', 'ThS. Lê Hoàng Tuấn', 'CN1.K2022.1 + CN1.K2022.2', '14h - Chủ nhật', '6', '14h');
INSERT INTO `lichhoc` VALUES (15, 'ENG03', 'Anh văn 3', '4', 'ThS. Phạm Thị Kiều Tiên', 'CN1.K2022.1 + CN1.K2022.2', '18h - Thứ 5', '6', '18h');
INSERT INTO `lichhoc` VALUES (16, 'SS003', 'Tư tưởng Hồ Chí Minh', '2', 'ThS. Trương Phi Long', 'CN1.K2022.1 + CN1.K2022.3', '18h - Thứ 4', '4', '18h');
INSERT INTO `lichhoc` VALUES (17, 'IE105', 'Nhập môn bảo đảm và an ninh thông tin', '4', 'ThS. Tô Nguyễn Nhật Quang', 'CN2.K2022.1 + HC.K2022.2 + CN1.K2021.1', '8h - Chủ nhật', '10', '8h');
INSERT INTO `lichhoc` VALUES (18, 'IS336', 'Hoạch định nguồn lực doanh nghiệp', '4', 'ThS. Tạ Việt Phương', 'CN2.K2022.1 + HC.K2022.2 + CN1.K2021.1 + CN1.K2021.2 + CN1.K2021.3', '18h - Thứ 6', '8', '18h');
INSERT INTO `lichhoc` VALUES (19, 'IE303', 'Công nghệ Java', '4', 'ThS. Sử Nhật Hạ', 'CN2.K2022.1 + CN2.K2022.2 + CN1.K2021.1', '18h - Thứ 3', '10', '18h');
INSERT INTO `lichhoc` VALUES (20, 'IE221', 'Kỹ thuật lập trình Python', '4', 'ThS. Phạm Thế Sơn', 'CN2.K2022.1 + HC.K2022.2 + CN1.K2021.1 + CN1.K2021.2 + CN1.K2021.3', '14h - Chủ nhật', '10', '14h');
INSERT INTO `lichhoc` VALUES (21, 'IE403', 'Khai thác dữ liệu truyền thông xã hội', '3', 'ThS. Mai Xuân Hùng', 'HC.K2022.1 + CN2.K2021.2 + CN2.K2021.3', '18h - Thứ 5', '8', '18h');
INSERT INTO `lichhoc` VALUES (22, 'IE405', 'Công nghệ phân tích dữ liệu lớn', '4', 'TS. Đỗ Trọng Hợp', 'HC.K2022.1 + HC.K2022.2 + CN2.K2021.2 + CN2.K2021.3', '18h - Thứ 3', '10', '18h');
INSERT INTO `lichhoc` VALUES (23, 'IE221', 'Kỹ thuật lập trình Python', '4', ' ', 'HC.K2022.1 + CN2.K2021.2 + CN2.K2021.3', '8h - Chủ nhật', '10', '8h');
INSERT INTO `lichhoc` VALUES (24, 'IT012', 'Tổ chức và cấu trúc máy tính II', '4', 'ThS. Hà Lê Hoài Trung', 'CN1.K2022.2 + CN2.K2022.3', '18h - Thứ 4', '10', '18h');
INSERT INTO `lichhoc` VALUES (25, 'IE104', 'Internet và công nghệ Web', '4', 'ThS. Mai Xuân Hùng', 'CN2.K2022.2 + HC.K2022.3', '18h - Chủ nhật', '10', '18h');
INSERT INTO `lichhoc` VALUES (26, 'IE106', 'Thiết kế giao diện người dùng', '4', 'ThS. Tạ Thu Thủy', 'CN2.K2022.2 + CN2.K2022.3', '8h - Chủ nhật', '10', '8h');
INSERT INTO `lichhoc` VALUES (27, 'IS334', 'Thương mại điện tử', '3', 'ThS. Nguyễn Quốc Việt', 'CN2.K2022.2 + CN1.K2021.1', '18h - Thứ 4', '6', '18h');
INSERT INTO `lichhoc` VALUES (28, 'IE202', 'Quản trị doanh nghiệp', '3', 'ThS. Hồ Thị Thanh Thảo', 'HC.K2022.2', '18h - Thứ 7', '6', '18h');
INSERT INTO `lichhoc` VALUES (29, 'IT002', 'Lập trình hướng đối tượng', '4', 'ThS. Sử Nhật Hạ', 'CN1.K2022.3 + CN2.K2022.3 + HC.K2022.3', '18h - Thứ 6', '10', '18h');
INSERT INTO `lichhoc` VALUES (30, 'IT003', 'Cấu trúc dữ liệu và giải thuật', '4', 'ThS. Mai Xuân Hùng', 'CN1.K2022.3 + CN2.K2022.3 + HC.K2022.3', '14h - Chủ nhật', '10', '14h');
INSERT INTO `lichhoc` VALUES (31, 'SS004', 'Kỹ năng nghề nghiệp', '2', 'ThS. Nguyễn Văn Toàn', 'CN1.K2022.3', '18h - Thứ 5', '4', '18h');
INSERT INTO `lichhoc` VALUES (32, 'MA004', 'Cấu trúc rời rạc', '4', 'ThS. Lê Hoàng Tuấn', 'CN1.K2022.3 + CN2.K2022.3 + HC.K2022.3', '18h - Thứ 7', '6', '18h');
INSERT INTO `lichhoc` VALUES (33, 'ENG02', 'Anh văn 2', '4', 'ThS. Nguyễn Thị Huỳnh Như', 'CN1.K2022.3', '18h - Chủ nhật', '6', '18h');
INSERT INTO `lichhoc` VALUES (34, 'SS008', 'Kinh tế chính trị Mác – Lênin', '2', 'ThS. Trần Thị Hoài Thương', 'CN1.K2021.2 + CN1.K2021.3', '18h - Thứ 7', '4', '18h');
INSERT INTO `lichhoc` VALUES (35, 'SS009', 'Chủ nghĩa xã hội khoa học', '2', 'ThS. Trương Phi Long', 'CN1.K2021.2 + CN1.K2021.3', '18h - Thứ 3', '4', '18h');
INSERT INTO `lichhoc` VALUES (36, 'IE207', 'Đồ án', '2', ' ', 'CN1.K2020', '18h - Thứ 5', NULL, '18h');

-- ----------------------------
-- Table structure for sinhvien
-- ----------------------------
DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE `sinhvien`  (
  `id` int NOT NULL,
  `class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `student_code` int NULL DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of sinhvien
-- ----------------------------
INSERT INTO `sinhvien` VALUES (1, 'CN1.K2020', 20730004, 'Võ Lê Phú  ', 'Xuân');
INSERT INTO `sinhvien` VALUES (2, 'CN1.K2020', 20730005, 'Phan Hoài ', 'Nam');
INSERT INTO `sinhvien` VALUES (3, 'CN1.K2020', 20730007, 'Phạm Thùy ', 'Nhi');
INSERT INTO `sinhvien` VALUES (4, 'CN1.K2020', 20730009, 'Võ Thị Thúy ', 'Kiều');
INSERT INTO `sinhvien` VALUES (5, 'CN1.K2020', 20730010, 'Dương Thế ', 'Anh');
INSERT INTO `sinhvien` VALUES (6, 'CN1.K2020', 20730011, 'Huỳnh Công ', 'Tố');
INSERT INTO `sinhvien` VALUES (7, 'CN1.K2020', 20730012, 'Đỗ Bình ', 'Minh');
INSERT INTO `sinhvien` VALUES (8, 'CN1.K2020', 20730013, 'Vương Quốc ', 'Đại');
INSERT INTO `sinhvien` VALUES (9, 'CN1.K2020', 20730014, 'Nguyễn Hoàng Gia ', 'Huy');
INSERT INTO `sinhvien` VALUES (10, 'CN1.K2020', 20730015, 'Nguyễn Đức ', 'Việt');
INSERT INTO `sinhvien` VALUES (11, 'CN1.K2020', 20730016, 'Lê Tấn ', 'Luân');
INSERT INTO `sinhvien` VALUES (12, 'CN1.K2020', 20730017, 'Lê Minh ', 'Nhật');
INSERT INTO `sinhvien` VALUES (13, 'CN1.K2020', 20730018, 'Nguyễn Thành ', 'Đông');
INSERT INTO `sinhvien` VALUES (14, 'CN1.K2020', 20730019, 'Đoàn Minh ', 'Quân');
INSERT INTO `sinhvien` VALUES (15, 'CN1.K2020', 20730020, 'Nguyễn Cao ', 'Thắng');
INSERT INTO `sinhvien` VALUES (16, 'CN1.K2020', 20730021, 'Bùi Văn ', 'Đạt');
INSERT INTO `sinhvien` VALUES (17, 'CN1.K2020', 18520941, 'Trịnh Minh', 'Khoa');
INSERT INTO `sinhvien` VALUES (18, 'CN1.K2020', 20730022, 'Mật Ngọc Trang', 'Thanh');
INSERT INTO `sinhvien` VALUES (19, 'CN1.K2021.1', 21730001, 'Đinh Văn ', 'Ánh');
INSERT INTO `sinhvien` VALUES (20, 'CN1.K2021.1', 21730002, 'Đinh Văn ', 'Anh');
INSERT INTO `sinhvien` VALUES (21, 'CN1.K2021.1', 21730003, 'Nhâm Vĩ ', 'Đạt');
INSERT INTO `sinhvien` VALUES (22, 'CN1.K2021.1', 21730004, 'Đỗ Minh ', 'Hoàng');
INSERT INTO `sinhvien` VALUES (23, 'CN1.K2021.1', 21730005, 'Trần Hữu ', 'Mạnh');
INSERT INTO `sinhvien` VALUES (24, 'CN1.K2021.1', 21730007, 'Hồ Thanh ', 'Sơn');
INSERT INTO `sinhvien` VALUES (25, 'CN1.K2021.1', 21730010, 'Hoàng Công ', 'Tiến');
INSERT INTO `sinhvien` VALUES (26, 'CN1.K2021.1', 21730011, 'Nguyễn Hữu ', 'Vương');
INSERT INTO `sinhvien` VALUES (27, 'CN1.K2021.1', 21730070, 'Cù Xuân ', 'Tùng');
INSERT INTO `sinhvien` VALUES (28, 'CN2.K2021.1', 21210001, 'Phạm Minh ', 'Cường');
INSERT INTO `sinhvien` VALUES (29, 'CN2.K2021.1', 21210003, 'Đoàn Thanh ', 'Huy');
INSERT INTO `sinhvien` VALUES (30, 'CN2.K2021.1', 21210004, 'Trần Anh', 'Kiệt');
INSERT INTO `sinhvien` VALUES (31, 'CN2.K2021.1', 21210006, 'Nguyễn Hồng', 'Loan');
INSERT INTO `sinhvien` VALUES (32, 'CN2.K2021.1', 21210007, 'Phạm Huy', 'Minh');
INSERT INTO `sinhvien` VALUES (33, 'CN2.K2021.1', 21210008, 'Quách Thị Quỳnh', 'Nhi');
INSERT INTO `sinhvien` VALUES (34, 'CN2.K2021.1', 21210009, 'Lý Quốc', 'Phong');
INSERT INTO `sinhvien` VALUES (35, 'CN2.K2021.1', 21210010, 'Huỳnh Công', 'Phúc');
INSERT INTO `sinhvien` VALUES (36, 'CN2.K2021.1', 21210011, 'La Tiểu', 'Phượng');
INSERT INTO `sinhvien` VALUES (37, 'CN2.K2021.1', 21210012, 'Nguyễn Văn', 'Suốt');
INSERT INTO `sinhvien` VALUES (38, 'CN2.K2021.1', 21210014, 'Nguyễn Tấn', 'Thành');
INSERT INTO `sinhvien` VALUES (39, 'CN2.K2021.1', 21210015, 'Lê Thanh', 'Thông');
INSERT INTO `sinhvien` VALUES (40, 'HC.K2021.1', 21410001, 'Vũ Nguyễn Hoàng', 'Anh');
INSERT INTO `sinhvien` VALUES (41, 'HC.K2021.1', 21410002, 'Lưu Mạnh ', 'Cường');
INSERT INTO `sinhvien` VALUES (42, 'HC.K2021.1', 21410003, 'Âu Tuấn ', 'Đạt');
INSERT INTO `sinhvien` VALUES (43, 'HC.K2021.1', 21410004, 'Lê Thành ', 'Đạt');
INSERT INTO `sinhvien` VALUES (44, 'HC.K2021.1', 21410005, 'Nguyễn Văn ', 'Đức');
INSERT INTO `sinhvien` VALUES (45, 'HC.K2021.1', 21410006, 'Nguyễn Văn ', 'Đựng');
INSERT INTO `sinhvien` VALUES (46, 'HC.K2021.1', 21410007, 'Phan Thị ', 'Hà');
INSERT INTO `sinhvien` VALUES (47, 'HC.K2021.1', 21410008, 'Trần Văn Đình ', 'Hiển');
INSERT INTO `sinhvien` VALUES (48, 'HC.K2021.1', 21410009, 'Nguyễn Vũ ', 'Hòa');
INSERT INTO `sinhvien` VALUES (49, 'HC.K2021.1', 21410010, 'Nguyễn Thị ', 'Liên');
INSERT INTO `sinhvien` VALUES (50, 'HC.K2021.1', 21410011, 'Nguyễn Trọng ', 'Nghĩa');
INSERT INTO `sinhvien` VALUES (51, 'HC.K2021.1', 21410012, 'Nguyễn Duy ', 'Quang');
INSERT INTO `sinhvien` VALUES (52, 'HC.K2021.1', 21410013, 'Lê Hữu ', 'Tạo');
INSERT INTO `sinhvien` VALUES (53, 'HC.K2021.1', 21410015, 'Lê Trung ', 'Thành');
INSERT INTO `sinhvien` VALUES (54, 'HC.K2021.1', 21410016, 'Hồ Minh ', 'Thọ');
INSERT INTO `sinhvien` VALUES (55, 'HC.K2021.1', 21410017, 'Phan ', 'Tiến');
INSERT INTO `sinhvien` VALUES (56, 'HC.K2021.1', 21410018, 'Phạm Trung ', 'Tín');
INSERT INTO `sinhvien` VALUES (57, 'HC.K2021.1', 21410019, 'Nguyễn Tô Thế ', 'Toàn');
INSERT INTO `sinhvien` VALUES (58, 'HC.K2021.1', 21410020, 'Đinh Thị Thùy ', 'Vân');
INSERT INTO `sinhvien` VALUES (59, 'HC.K2021.1', 21410021, 'Dương Hoàng ', 'Vũ');

SET FOREIGN_KEY_CHECKS = 1;
