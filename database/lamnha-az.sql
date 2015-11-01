-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2015 at 08:42 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lamnha-az`
--

-- --------------------------------------------------------

--
-- Table structure for table `contractors`
--

CREATE TABLE IF NOT EXISTS `contractors` (
  `id` bigint(20) NOT NULL,
  `contractor_category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `detail_work` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contractor_categories`
--

CREATE TABLE IF NOT EXISTS `contractor_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contractor_categories`
--

INSERT INTO `contractor_categories` (`id`, `name`, `description`, `parent_id`, `lft`, `rght`) VALUES
(1, 'root', 'Mô tả', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` bigint(20) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Super Admin', '2015-10-10 06:04:07', '2015-10-10 06:04:07'),
(2, 'Administrators', '2015-10-10 06:05:08', '2015-10-10 06:05:08'),
(3, 'Product Provider', '2015-10-10 06:05:34', '2015-10-10 06:05:34'),
(4, 'Service Provider', '2015-10-10 06:05:48', '2015-10-10 06:05:48'),
(5, 'Contractor', '2015-10-10 06:09:01', '2015-10-10 06:09:01'),
(6, 'Customer', '2015-10-10 06:09:28', '2015-10-10 06:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` bigint(20) NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 NOT NULL,
  `abstract` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `detail` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `view` int(11) DEFAULT '0',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `news_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE IF NOT EXISTS `news_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `description`, `parent_id`, `lft`, `rght`) VALUES
(1, 'root', 'Mô tả', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `news_images`
--

CREATE TABLE IF NOT EXISTS `news_images` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  `news_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` bigint(20) NOT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `item_id` bigint(20) NOT NULL,
  `users_id` bigint(20) NOT NULL,
  `is_seen` tinyint(1) NOT NULL,
  `time_stamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `specification` varchar(100) CHARACTER SET utf8 NOT NULL,
  `unit` varchar(100) CHARACTER SET utf8 NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `opened` tinyint(1) NOT NULL DEFAULT '0',
  `product_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `specification`, `unit`, `published`, `opened`, `product_category_id`) VALUES
(1, 'Gạch bê tông khí chưng áp không nung HAAC', '<p>Quy đổi: 1m3 &nbsp;= 83,3 vi&ecirc;n<br />\r\nCường độ n&eacute;n(Mpa, kh&ocirc;ng nhỏ hơn)<br />\r\n- Gi&aacute; trị trung b&igrave;nh: 3,5<br />\r\n- Gi&aacute; trị đơn lẻ: 3,0<br />\r\nKhối lượng thể t&iacute;ch kh&ocirc; (kg/m3)<br />\r\n- Danh nghĩa: 500<br />\r\n- Trung b&igrave;nh: 450 -550</p>\r\n', '400 x 300 x 200', 'viên', 1, 1, 7),
(2, 'Sỏi đỡ', '<p>\r\n\r\n</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Xuất xứ : sản phẩm Việt Nam</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Kích thước : 2-5 mm, 5-10 mm, 10-20 mm, 20-25 mm</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Công dụng : làm lớp lót đáy bể lọc</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Hạn dùng : tối thiểu 5 năm nên thay mới, định kỳ rửa ngược rửa xuôi</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Đơn vị tính : kg</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Tỷ trọng : 1,4 kg/lít</p><p>· &nbsp; &nbsp; &nbsp; &nbsp; Đóng bao : 40 kg (chuẩn)</p>\r\n\r\n<br><p></p>', '08', 'Bao', 1, 1, 8),
(3, 'Gạch siêu nhẹ AAC', '<p>Gạch Bê tông khí chưng áp AAC Kích thước dài 600mm cao 200mm rộng 200mm:<br>\r\n 1. Trọng lượng nhẹ, tiết kiệm chi phí, nâng cao năng suất xây dựng<br>\r\n 2. Tính năng bảo ôn cách nhiệt cao<br>\r\n 3. Tính năng cách âm tốt<br>\r\n 4. Tính chịu nhiệt<br>\r\n 5. Khả năng chịu chấn động tốt<br>\r\n 6. Gia công dễ dàng<br>\r\n <small></small>7. Linh hoạt trong sản xuất và thân thiện với môi trường</p>', '600 x 200 x 200', 'viên', 1, 1, 7),
(4, 'Đá bóc mặt lồi', '<p>\r\n\r\nĐang cập nhật\r\n\r\n<br></p>', '08', 'Bao', 1, 1, 8),
(5, 'Cung cấp nhựa POM dạng tấm và thanh tròn cho gia công cơ khí', '<p>\r\n\r\n</p><p>POM, loại copolymer, là polymer tinh thể và có thể sử dụng ở nhiệt độ lên tới +100oC. Là loại đồng trùng hợp có tính năng cơ khí khá tốt, ổn định với độ ẩm và dễ dàng gia công và ổn định nhiệt tốt hơn và sức đề kháng mạnh mẽ với kiềm hơn acetal homopolymer.<br><br><strong><em>Đặc tính<br></em></strong></p><ul><li>Độ bền cơ học và độ cứng cao</li><li>Sức chịu mỏi và rão cao</li><li>Tính trơn trượt tốt và chịu mài món tốt</li><li>Ổn định về kích thước rất tốt</li><li>Đặc tính cách điện và điện môi tốt</li><li>Khả năng gia công rất tốt</li><li>Không đề kháng với axit có độ đậm đặc cao</li><li>Khó để sơn và gắn keo</li></ul><div><strong><em>Ứng dụng<br></em></strong><ul><li>Bạc tải trọng nặng, bánh răng, các bộ phận cho máy bơm.</li><li>Các bộ phận đòi hỏi chính xác, ổn định về kích thước.</li><li>Vít tải, chi tiết cho các ứng dụng của ngành dệt.</li><li>Cấu kiện trong nhà máy hóa chất. &nbsp;</li><li>Các bộ phận cách điện / dẫn điện.</li></ul><div><strong><em>Dải kích thước thông dụng của POM C:</em></strong><br><p></p><ul><li>Thanh tròn Dia. 6-300 x L 1000 / 2000 mm, màu trắng / đen, loại thường, chống tĩnh điện (ESD), dẫn điện (ELS).</li><li>Tấm dày 5-100mm, W600xL1200mm / W1000xL2000mm, màu trắng / đen, loại thường, chống tĩnh điện (ESD), dẫn điện (ELS).</li></ul><div><br>Liên hệ để có thông tin chi tiết về sản phẩm.</div></div></div>\r\n\r\n<br><p></p>', 'POM C', 'Tấm', 1, 1, 12),
(6, 'THÉP 16 GÂN', '<p>\r\n\r\nĐang cập nhật\r\n\r\n<br></p>', '16 gân', 'Cây', 1, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`, `parent_id`, `lft`, `rght`) VALUES
(1, 'root', 'mô tả', NULL, 1, 100),
(2, 'Vật liệu kết cấu xây dựng', 'Mô tả', 1, 2, 21),
(3, 'Vật liệu hoàn thiện', 'Mô tả', 1, 22, 49),
(4, 'Hệ thống ống – phụ kiện', 'Mô tả', 1, 50, 67),
(5, 'Các loại vật liệu đặc biệt', 'Mô tả', 1, 68, 81),
(6, 'Cung cấp công trường', 'Mô tả', 1, 82, 99),
(7, 'Gạch', 'Mô tả', 2, 3, 4),
(8, 'Đá & Sỏi', 'Mô tả', 2, 5, 6),
(9, 'Kính xây dựng', 'Mô tả', 2, 7, 8),
(10, 'Sắt & Thép xây dựng', 'Mô tả', 2, 9, 10),
(11, 'Kết cấu thép', 'Mô tả', 2, 11, 12),
(12, 'Vật liệu nhựa xây dựng', 'Mô tả', 2, 13, 14),
(13, 'Vật liệu mái', 'Mô tả', 2, 15, 16),
(14, 'Gỗ', 'Mô tả', 2, 17, 18),
(15, 'Vật liệu, kết cấu khác', 'Mô tả', 2, 19, 20),
(16, 'Sàn nhà', 'Mô tả', 3, 23, 24),
(17, 'Trần nhà', 'Mô tả', 3, 25, 26),
(18, 'Cầu thang - Lan can & Tay vịn', 'Mô tả', 3, 27, 28),
(19, 'Vật liệu ốp lát', 'Mô tả', 3, 29, 30),
(20, 'Sơn', 'Mô tả', 3, 31, 32),
(21, 'Vật liệu tường', 'Mô tả', 3, 33, 34),
(22, 'Vật liệu phủ', 'Mô tả', 3, 35, 36),
(23, 'Vách ngăn', 'Mô tả', 3, 37, 38),
(24, 'Keo dán', 'Mô tả', 3, 39, 40),
(25, 'Mành & rèm', 'Mô tả', 3, 41, 42),
(26, 'Nẹp-phào', 'Mô tả', 3, 43, 44),
(27, 'Đá ốp – trang trí', 'Mô tả', 3, 45, 46),
(28, 'Vật liệu hoàn thiện khác', 'Mô tả', 3, 47, 48),
(29, 'Ống nhôm', 'Mô tả', 4, 51, 52),
(30, 'Ống composite', 'Mô tả', 4, 53, 54),
(31, 'Ống đồng', 'Mô tả', 4, 55, 56),
(32, 'Ống sắt –gang', 'Mô tả', 4, 57, 58),
(33, 'Ống nhựa', 'Mô tả', 4, 59, 60),
(34, 'Ống thép', 'Mô tả', 4, 61, 62),
(35, 'Phụ kiện', 'Mô tả', 4, 63, 64),
(36, 'Hệ thống ống - phụ kiện khác', 'Mô tả', 4, 65, 66),
(37, 'Vật liệu cách nhiệt', 'Mô tả', 5, 69, 70),
(38, 'Vật liệu chống cháy', 'Mô tả', 5, 71, 72),
(39, 'Vật liệu cách âm', 'Mô tả', 5, 73, 74),
(40, 'Vật liệu chống thấm', 'Mô tả', 5, 75, 76),
(41, 'Vật liệu đa chức năng', 'Mô tả', 5, 77, 78),
(42, 'Các loại vật liệu đặc biệt khác', 'Mô tả', 5, 79, 80),
(43, 'Cọc', 'Mô tả', 6, 83, 84),
(44, 'Xi măng', 'Mô tả', 6, 85, 86),
(45, 'Bê tông', 'Mô tả', 6, 87, 88),
(46, 'Sản phẩm nền đất', 'Mô tả', 6, 89, 90),
(47, 'Ván khuôn', 'Mô tả', 6, 91, 92),
(48, 'Vôi & vữa', 'Mô tả', 6, 93, 94),
(49, 'Cát', 'Mô tả', 6, 95, 96),
(50, 'Vật liệu công trường khác', 'Mô tả', 6, 97, 98);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE IF NOT EXISTS `product_images` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  `product_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_prices`
--

CREATE TABLE IF NOT EXISTS `product_prices` (
  `id` bigint(20) NOT NULL,
  `price` int(11) NOT NULL,
  `started` datetime NOT NULL,
  `finished` datetime DEFAULT NULL,
  `users_has_products_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_videos`
--

CREATE TABLE IF NOT EXISTS `product_videos` (
  `id` bigint(20) NOT NULL,
  `code` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  `product_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `avatar_url` varchar(225) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `personal_number` int(11) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `place_of_birth` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `sex` varchar(20) CHARACTER SET utf8 NOT NULL,
  `address` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `avatar_url`, `full_name`, `email`, `phone_number`, `personal_number`, `date_of_birth`, `place_of_birth`, `sex`, `address`, `published`) VALUES
(1, 1, '', 'Nguyễn Thế Viễn', 'thevien@outlook.com', 963935709, 201687262, '1995-03-02', 'Đà Nẵng', 'Nam', 'K100/44 Phan Văn Định', 1),
(2, 2, '', 'Nguyễn Văn A', 'vana@gmail.com', 954567865, 214564323, '1995-11-17', 'Đà Nẵng', 'Nam', '128 Nguyễn Văn Linh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `budget` int(11) NOT NULL,
  `started` datetime DEFAULT NULL,
  `expected` datetime DEFAULT NULL,
  `finished` datetime DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `project_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_has_contractors`
--

CREATE TABLE IF NOT EXISTS `projects_has_contractors` (
  `id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `contractors_id` bigint(20) NOT NULL,
  `started` datetime NOT NULL,
  `finished` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_has_products`
--

CREATE TABLE IF NOT EXISTS `projects_has_products` (
  `id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_has_services`
--

CREATE TABLE IF NOT EXISTS `projects_has_services` (
  `id` bigint(20) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `started` datetime NOT NULL,
  `finished` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_categories`
--

CREATE TABLE IF NOT EXISTS `project_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `name`, `description`, `parent_id`, `lft`, `rght`) VALUES
(1, 'root', 'Mô tả', NULL, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `project_images`
--

CREATE TABLE IF NOT EXISTS `project_images` (
  `id` bigint(20) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci,
  `project_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint(20) NOT NULL,
  `service_category_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_categories`
--

CREATE TABLE IF NOT EXISTS `service_categories` (
  `id` bigint(20) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service_categories`
--

INSERT INTO `service_categories` (`id`, `name`, `description`, `parent_id`, `lft`, `rght`) VALUES
(1, 'root', 'Mô tả', NULL, 1, 6),
(2, 'Dịch vụ thiết kế', 'Mô tả', 1, 2, 3),
(3, 'Dịch vụ thi công', 'Mô tả', 1, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `service_prices`
--

CREATE TABLE IF NOT EXISTS `service_prices` (
  `id` bigint(20) NOT NULL,
  `price` int(11) NOT NULL,
  `started` datetime NOT NULL,
  `finished` datetime DEFAULT NULL,
  `service_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` bigint(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `created`, `modified`) VALUES
(1, 'viennt', '$2a$10$8.o5a8k.zbkQ0RA04qGgaOLOuvcJb39Xyf0WxJJeKo2d3TVeq05em', 1, '2015-10-10 06:18:54', '2015-10-10 06:18:54'),
(2, 'admin', '$2a$10$8.o5a8k.zbkQ0RA04qGgaOLOuvcJb39Xyf0WxJJeKo2d3TVeq05em', 2, '2015-10-10 06:46:51', '2015-10-10 06:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `users_has_products`
--

CREATE TABLE IF NOT EXISTS `users_has_products` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `commision` int(11) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contractors`
--
ALTER TABLE `contractors`
  ADD PRIMARY KEY (`id`,`contractor_category_id`,`user_id`),
  ADD KEY `fk_table1_users1_idx` (`user_id`),
  ADD KEY `fk_table1_contractor_categories1` (`contractor_category_id`);

--
-- Indexes for table `contractor_categories`
--
ALTER TABLE `contractor_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`,`user_id`,`news_category_id`),
  ADD KEY `fk_news_users1_idx` (`user_id`),
  ADD KEY `fk_news_news_categories1_idx` (`news_category_id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_images`
--
ALTER TABLE `news_images`
  ADD PRIMARY KEY (`id`,`news_id`),
  ADD KEY `fk_project_images_copy1_news1_idx` (`news_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_notifications_users1_idx` (`users_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`,`product_category_id`),
  ADD KEY `fk_products_product_categories1_idx` (`product_category_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD KEY `fk_project_images_copy2_products1_idx` (`product_id`);

--
-- Indexes for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`,`users_has_products_id`),
  ADD KEY `fk_product_prices_users_has_products1_idx` (`users_has_products_id`);

--
-- Indexes for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD KEY `fk_project_images_copy2_products1_idx` (`product_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `personal_number_UNIQUE` (`personal_number`),
  ADD KEY `fk_profiles_users1_idx` (`user_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`,`user_id`,`project_category_id`),
  ADD KEY `fk_projects_users1_idx` (`user_id`),
  ADD KEY `fk_projects_project_categories1_idx` (`project_category_id`);

--
-- Indexes for table `projects_has_contractors`
--
ALTER TABLE `projects_has_contractors`
  ADD PRIMARY KEY (`id`,`project_id`,`contractors_id`),
  ADD KEY `fk_projects_has_services_projects1_idx` (`project_id`),
  ADD KEY `fk_projects_has_contractors_contractors1_idx` (`contractors_id`);

--
-- Indexes for table `projects_has_products`
--
ALTER TABLE `projects_has_products`
  ADD PRIMARY KEY (`id`,`project_id`,`product_id`),
  ADD KEY `fk_projects_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_projects_has_products_projects1_idx` (`project_id`);

--
-- Indexes for table `projects_has_services`
--
ALTER TABLE `projects_has_services`
  ADD PRIMARY KEY (`id`,`project_id`,`service_id`),
  ADD KEY `fk_projects_has_services_services1_idx` (`service_id`),
  ADD KEY `fk_projects_has_services_projects1_idx` (`project_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_images`
--
ALTER TABLE `project_images`
  ADD PRIMARY KEY (`id`,`project_id`),
  ADD KEY `fk_project_images_projects1_idx` (`project_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`,`user_id`,`service_category_id`),
  ADD KEY `fk_services_users1_idx` (`user_id`),
  ADD KEY `fk_services_service_categories1_idx` (`service_category_id`);

--
-- Indexes for table `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_prices`
--
ALTER TABLE `service_prices`
  ADD PRIMARY KEY (`id`,`service_id`),
  ADD KEY `fk_table1_services1` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`group_id`),
  ADD KEY `fk_users_groups1_idx` (`group_id`);

--
-- Indexes for table `users_has_products`
--
ALTER TABLE `users_has_products`
  ADD PRIMARY KEY (`id`,`user_id`,`product_id`),
  ADD KEY `fk_users_has_products_products1_idx` (`product_id`),
  ADD KEY `fk_users_has_products_users1_idx` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contractors`
--
ALTER TABLE `contractors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contractor_categories`
--
ALTER TABLE `contractor_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news_images`
--
ALTER TABLE `news_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_videos`
--
ALTER TABLE `product_videos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects_has_contractors`
--
ALTER TABLE `projects_has_contractors`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects_has_products`
--
ALTER TABLE `projects_has_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `projects_has_services`
--
ALTER TABLE `projects_has_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `project_images`
--
ALTER TABLE `project_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `service_prices`
--
ALTER TABLE `service_prices`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_has_products`
--
ALTER TABLE `users_has_products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contractors`
--
ALTER TABLE `contractors`
  ADD CONSTRAINT `fk_table1_contractor_categories1` FOREIGN KEY (`contractor_category_id`) REFERENCES `contractor_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_table1_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_news_categories1` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_news_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `news_images`
--
ALTER TABLE `news_images`
  ADD CONSTRAINT `fk_project_images_copy1_news1` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notifications_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_product_categories1` FOREIGN KEY (`product_category_id`) REFERENCES `product_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_project_images_copy2_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `fk_product_prices_users_has_products1` FOREIGN KEY (`users_has_products_id`) REFERENCES `users_has_products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD CONSTRAINT `fk_project_images_copy2_products10` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `fk_profiles_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `fk_projects_project_categories1` FOREIGN KEY (`project_category_id`) REFERENCES `project_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projects_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects_has_contractors`
--
ALTER TABLE `projects_has_contractors`
  ADD CONSTRAINT `fk_projects_has_contractors_contractors1` FOREIGN KEY (`contractors_id`) REFERENCES `contractors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projects_has_services_projects10` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects_has_products`
--
ALTER TABLE `projects_has_products`
  ADD CONSTRAINT `fk_projects_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projects_has_products_projects1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `projects_has_services`
--
ALTER TABLE `projects_has_services`
  ADD CONSTRAINT `fk_projects_has_services_projects1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_projects_has_services_services1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `project_images`
--
ALTER TABLE `project_images`
  ADD CONSTRAINT `fk_project_images_projects1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `fk_services_service_categories1` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_services_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_prices`
--
ALTER TABLE `service_prices`
  ADD CONSTRAINT `fk_table1_services1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `users_has_products`
--
ALTER TABLE `users_has_products`
  ADD CONSTRAINT `fk_users_has_products_products1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_products_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
