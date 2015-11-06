-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2015 at 08:32 AM
-- Server version: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `name`, `create_time`, `update_time`) VALUES
(4, 'Sữa nguyên chất', '2015-05-17 16:14:28', '2015-07-12 00:25:16'),
(7, 'Sữa tươi', '2015-05-22 20:37:51', '2015-07-12 00:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id` int(11) NOT NULL,
  `parent_key` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(400) NOT NULL,
  `grade` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '2',
  `ordinal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_key`, `create_time`, `update_time`, `name`, `slug`, `grade`, `active`, `ordinal`) VALUES
(77, 0, '2015-10-29 01:33:42', '2015-11-05 00:20:32', 'KEO CÁN MÀNG OOP', 'keo-can-mang-oop', NULL, 0, 1),
(78, 0, '2015-10-29 01:33:50', '2015-11-05 00:20:17', 'KEO PHÁ MÀNG', 'keo-pha-mang', NULL, 0, 4),
(79, 0, '2015-10-29 01:34:00', '2015-11-05 00:20:09', 'KEO CÔNG NGHIỆP', 'keo-cong-nghiep', NULL, 0, 2),
(80, 0, '2015-10-29 23:23:20', '2015-11-05 00:19:24', 'KEO NGÀNH GIẤY VÀ BAO BÌ', 'keo-nganh-giay-va-bao-bi', NULL, 0, 0),
(81, 0, '2015-10-29 23:58:30', '2015-11-05 00:19:04', 'KEO NGÀNH GỖ', 'keo-nganh-go', NULL, 0, 0),
(82, 0, '2015-10-29 23:58:55', '2015-11-05 00:18:48', 'KEO NGÀNH PU DUNG MÔI', 'keo-nganh-pu-dung-moi', NULL, 0, 0),
(87, 0, '2015-11-02 20:30:13', '2015-11-05 00:18:29', 'KEO GIÁN GỖ', 'keo-gian-go', NULL, 0, 3),
(88, 0, '2015-11-02 20:30:52', '2015-11-05 00:16:53', 'KEO GIÁN GIẤY', 'keo-gian-giay', NULL, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `group_news`
--

CREATE TABLE IF NOT EXISTS `group_news` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `group_news`
--

INSERT INTO `group_news` (`id`, `name`, `create_time`, `update_time`, `images`) VALUES
(47, 'Tin nội bộ', '2015-05-04 21:54:00', '2015-10-29 23:25:51', NULL),
(49, 'Tin trong nước', '2015-05-22 20:34:30', '2015-10-29 23:25:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
`id` int(11) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `alt` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `album_id`, `name`, `alt`, `link`, `images`, `create_time`, `update_time`, `status`) VALUES
(4, 4, 'Trần cong đạo123', '123àcc', NULL, 'news_thumb/e5531fa4249527eda85837f53d83a46c.jpg', '2015-05-17 16:42:03', '2015-07-12 00:25:31', '1');

-- --------------------------------------------------------

--
-- Table structure for table `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `introduction`
--

INSERT INTO `introduction` (`id`, `name`, `content`, `status`, `create_time`, `update_time`) VALUES
(1, 'Kẹo của tôi', '<h2 style="text-align: center;"><b>THƯ NGỎ</b></h2><h4><i>Kính gửi: Quý khách hàng! </i></h4><div><p><br/></p></div><p>          Lời đầu tiên, Công Ty Cổ Phần Kỹ thuật điện tử công nghiệp Hồng Hà, xin gửi tới Quý khách hàng lời chúc sức khỏe và lời chào trân trọng nhất. Chúc quý khách hàng sự phát triển và thành công!</p><p>     Công ty chúng tôi cũng xin gửi lời cảm ơn chân thành nhất tới những khách hàng đã, đang và sẽ cho phép chúng tôi được trở thành người bạn đồng hành cũng như đã dành sự tín nhiệm và ủng hộ tới sản phẩm, dịch vụ mà công ty chúng tôi đang cung cấp.</p><p>     Với phương châm: tốt hơn, nhanh hơn và dịch vụ toàn diện hơn đối với các sản phẩm như: Cổng xếp, Barrie tự động, Nhà bảo vệ, G giảm tốc và Cổng trượt ngang…đã làm hài lòng không ít những khách hàng khó tính nhất. Cùng với đội ngũ nhân viên, kỹ thuật viên chuyên nghiệp, sản phẩm mẫu mã đa dạng, phong phú, chất lượng hàng đầu, và đặc biệt hơn đã được đăng ký Bản quyền Quốc tế cho tất cả các loại sản phẩm. Chúng tôi sẽ làm hài lòng tất cả Quý khách hàng.</p><p>Bất cứ khi nào và bất cứ nơi đâu, chỉ cần gọi cho chúng tôi!</p><p>     Sự hài lòng của Quý khách hàng là mong muốn lớn nhất của chúng tôi.</p><p>     Công ty CP KT điện tử công nghiệp Hồng Hà hân hạnh được phục vụ Quý khách.</p><p>     Một lần nữa, kính chúc Quý khách hàng lời chúc sức khỏe, thành công và hạnh phúc.</p><p>     Trân trọng!</p><p style="text-align: right;">                                                                                                      Thay mặt Công ty</p><p style="text-align: right;">                                                                                                           Giám đốc.</p><p style="text-align: right;">                                                                                      Trần Tiến Dũng</p>', 1, '2015-05-17 23:15:29', '2015-10-30 00:02:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(300) NOT NULL,
  `group_news_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `count_views` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `slug`, `group_news_id`, `user_id`, `images`, `description`, `content`, `create_time`, `update_time`, `status`, `count_views`) VALUES
(2, 'Nghiêm cấm quảng cáo thay thế sữa mẹ !', '', 47, 1, 'news_thumb/4352c5fb2d0b184d4dd6c61c322a0e2d.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Đang cập nhật !</p>', '2015-05-10 22:51:01', '2015-07-12 00:24:20', 1, 0),
(3, 'Những loại thực phẩm cấm kỵ ăn vào bữa sáng', '', 47, 1, 'news_thumb/b816c9013852a6b37ab892ad10330ba0.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng. </p>', '2015-05-10 22:49:56', '2015-07-12 00:23:15', 1, 0),
(6, 'Những loại thực phẩm không nên kết hợp cùng nhau', '', 49, 1, 'news_thumb/2b9c513d19984b51eb58ba8ceaa92ab0.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng. </p>', '2015-05-22 20:35:02', '2015-07-12 00:23:07', 1, 0),
(7, 'Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại gia didnhf', 'cach-lam-sinh-to-chuoi-sua-thom-ngon-bo-duong-tai-gia-didnhf', 49, 1, 'news_thumb/711fea99130b6230fece3058ac772c2f.jpg', 'Sinh tố chuối sữa là loại đồ uống có vị ngọt của chuối, vị béo của sữa được rất nhiều người ưa thích. với cách làm đơn giản các bạn có thể làm tại nhà để cải thiện đồ uống và đảm bảo sức khỏe của người thân trong gia đình.', '<p>Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà</p><p>Thứ sáu, 12/06/2015 | 23:31 GMT+7 Trang chủ  »  Đời sống  »  Món ngon mỗi ngày</p><p>Sự Kiện : Món ngon mỗi ngày</p><p>Sinh tố chuối sữa là loại đồ uống có vị ngọt của chuối, vị béo của sữa được rất nhiều người ưa thích. với cách làm đơn giản các bạn có thể làm tại nhà để cải thiện đồ uống và đảm bảo sức khỏe của người thân trong gia đình.</p><p><br/></p><p>Hình ảnh Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà số 1</p><p>Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà</p><p><br/></p><p>Chuối chứa nhiều tyrosin, một tiền chất để sản xuất chất dẫn truyền thần kinh dopamin, serotonin có vai trò tích cực đối với sự nhanh nhạy, khả năng học hỏi và điều hoà hoạt động của tim mạch (nhất là đối với trẻ nhỏ).</p><p>Trong chuối có đủ 8 loại axít amin thiết yếu mà cơ thể con người không tự tạo ra được, có đến 11 loại khoáng chất và 6 vitamin.</p><p>Có thể nói chuối không chỉ tốt đối với trẻ nhỏ, mà người lớn nếu ăn một, hai trái mỗi ngày sẽ được cung cấp thêm năng lượng, vitamin, khoáng chất cho cơ thể.Vì vậy chuối còn được chế biến thành nhiều món ăn để cải thiện bữa ăn cho mọi người. </p><p>Không chỉ có bánh chế biến từ chuối mà chuối còn có thể làm kem để giải khát tại nhà. Bởi mỗi khi đi ra ngoài trời nắng về mà cổ họng khát khô được miếng kem chuối mát lạnh, thơm ngon tan trong miệng  thì đó là điều thật tuyệt vời.</p><p>Hoặc sau mỗi đám giỗ, tiệc tùng ở nhà mà còn dư lại chuối có thể lấy ra để chế biến thành kem chiêu đãi cả nhà trong mùa hè này. </p><p><br/></p><p>Dưới đây là cách làm sinh tố chuối sữa nhanh nhất.</p><p><br/></p><p>Nguyên liệu làm sinh tỗ chuối sữa</p><p><br/></p><p>1 hộp sữa chua</p><p><br/></p><p>Cách làm sinh tố dưa hấu ngon nhất giải nhiệt mùa hè</p><p>Cách làm sinh tố dưa hấu ngon nhất giải nhiệt mùa hè</p><p>Cách làm sinh tố cà chua ngon và nhanh nhất tại nhà</p><p>Cách làm sinh tố cà chua ngon và nhanh nhất tại nhà</p><p>Cách làm sinh tố dừa thơm ngon giải nhiệt mùa hè</p><p>Cách làm sinh tố dừa thơm ngon giải nhiệt mùa hè</p><p>Cách làm sinh tố cà rốt thơm ngon bổ dưỡng cho sức khỏe</p><p>Cách làm sinh tố cà rốt thơm ngon bổ dưỡng cho sức khỏe</p><p>2 quả chuối chín</p><p>1 muỗng canh sữa đặc</p><p>10ml mật ong</p><p>100g lạc rang</p><p>1 thìa canh bơ lạc (nếu có thì kem sẽ thơm hơn)</p><p><br/></p><p>Cách làm kem sinh tố chuối sữa</p><p><br/></p><p>Muốn có kem chuối ngon thì phải chọn những quả chuối chín, không bị thâm không bị hỏng, chon chuối chín rất ngọt, nếu chọn chuối chín tới cũng được nhưng không có vị ngọt mà có vị hơi chát. Dùng làm kem thì chuối gì cũng được như chuối tây, chuối lùn, chuối ngự,... hay bất kỳ loại nào tùy theo sở thích.</p><p>Còn sữa chua thì chọn loại sữa chua có đường hoặc không đường nhưng nên là sữa chua trắng và mềm mịn vì sữa chua hoa quả làm mất hương vị thươm của chuối, còn sữa chua đã thì quá cứng khó xay nhuyễn mà lại ảnh hưởng đến lưỡi dao xay trong máy sinh tố.</p><p>Nếu không thích sữa chua thì có thể thay bằng sữa tươi để xay nhưng nên dùng sữa chua vì sữa chua ngậy hơn và rất tốt cho da và hệ tiêu hóa.</p><p>Bơ lạc thì cho vào xay nhưng nếu không thích thì có thể không cần cho vào.</p><p>Còn lạc rang chia ra làm 2 phần. Cả 2 phần đều được xát bỏ vỏ, tách đôi hạt lạc nhưng 1 phần cho vào xay dùng các loại nguyên liệu khác, 1 phần đem xay nhỏ.</p><p>Lột vỏ chuối,  lấy ruột thái thành những khúc nhỏ cắt hình hạt lựu rồi cho vào ngăn đá.</p><p>Sau khi chuối thành đá thì cho chuối, sữa chua, sữa đặc, mật ong, bơ vào máy xay sinh tố xay nhuyễn, cho thêm đá bào vào xay cùng khoảng 1 phút rồi rót ra ly và mời cả nhà cùng thưởng thức. Nếu muốn món kem thêm hấp dẫn có thể rắc thêm chút đậu phộng rang đã đập nát lên trên mặt kem.</p><p><br/></p><p>Chúc các bạn thành công!</p>', '2015-07-12 00:20:38', '2015-10-27 23:30:21', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT '2',
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `images`, `link`, `alt`, `create_time`, `status`, `update_time`) VALUES
(1, 'Đối tác 11', 'news_thumb/39babc81c5b53aa4d4d7e82a2ee328c9.jpg', 'http://www.tradekey.com', 'đôi tác', '2015-05-17 13:42:54', 1, '2015-05-18 11:05:50'),
(2, '12123213', 'news_thumb/3450ae99061b5fa18e25dc07bbb1fe70.jpg', 'http://www.mbbank.com.vn/Pages/default.aspx', '12', '2015-05-17 14:31:27', 2, '2015-05-18 11:06:20'),
(3, 'mysoredeep', 'news_thumb/4352a85dee00b37d15845bea9621c680.jpg', 'http://www.mysoredeep.com/', 'mysoredeep', '2015-05-18 11:07:02', 1, '2015-05-21 15:58:39');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('daotc94@gmail.com', '986436d7df5e69bd7ca6de5bd935110c44ff3790226b297b030698e94d34a99c', '2015-05-17 15:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(400) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT NULL COMMENT '2 là hết hàng,1 là còn hàng',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `price` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `category_id`, `alt`, `keywords`, `images`, `description`, `content`, `status`, `create_time`, `update_time`, `price`) VALUES
(13, 'Keo ngành gỗ', '', 59, 'ádfasf', '111', 'news_thumb/f5738dddc7daa38f97040287128141dc.jpg', '<p>Liên hệ để được hổ trợ</p>', NULL, 1, '2015-05-21 12:45:49', '2015-07-13 22:27:54', 1),
(14, 'Keo dán thùng carton', '', 60, 'alt', NULL, 'news_thumb/bf1cf89c8e0644cd4757143ae4146674.jpg', '<p>Liên hệ để được hổ trợ</p>', NULL, 1, '2015-05-21 15:52:33', '2015-07-13 22:28:43', 6),
(15, 'Keo ngành PU', '', 58, 'inceses', 'inceses', 'news_thumb/c8dacf652c835435feb60b07c656a7b9.jpg', 'Liên hệ kỷ thuật để được hổ trợ', NULL, 1, '2015-05-21 15:54:53', '2015-07-13 22:29:26', 12),
(16, 'Keo ngành PU', '', 58, 'inceses', 'inceses', 'news_thumb/888ffcffa9b5507c419946e11c24bc77.jpg', 'Liên hệ kỷ thuật để được hổ trợ', NULL, 1, '2015-05-21 15:55:33', '2015-07-13 22:30:04', 12),
(17, 'Keo cán màng', '', 62, 'inceses', 'inceses', 'news_thumb/d4267ccbdc4bcbb52da21508783c9bc2.jpg', 'Liên hệ để được hổ trợ', NULL, 1, '2015-05-21 15:55:49', '2015-07-13 22:27:08', 1),
(18, 'Keo phá màng', '', 63, 'inceses', 'inceses', 'news_thumb/00e0d8eb398f029bb0f020ac7be329ab.jpg', '<p>Liên hệ để được hổ trợ</p>', NULL, 1, '2015-05-21 15:56:16', '2015-07-13 22:26:31', 1),
(21, 'XT - 317 keo bồi giấy, bồi ống giấy, dán giấy', '', 60, NULL, 'Keo bồi giấy, keo bồi ống giấy, keo dán thùng giấy các loại', 'news_thumb/d94111b7cfa945d501b2d8e58eb92579.jpg', '- Nước: 35.00 – 40.05\n- Nhự PVAc: 35.00 - + 37,01\n- pH: 4.5 – 6.5\n- Độ nhớt (25độ C): 40.000- 50.000Cps\n- Hàm lượng rắn (%): 29.00 -+39.00\n- Trọng lượng riêng:1,035 – 1,069\n- Điểm sôi: sôi ở 100 độ C', NULL, 1, '2015-07-12 15:06:10', '2015-07-12 15:51:13', 1000),
(22, 'XT - 325 keo bồi giấy, bồi ống giấy, dán giấy', '', 60, NULL, 'keo sữa dán giấy', 'news_thumb/85540539e9bb333a996143af569036f2.jpg', '- Nước: 35.00 – 40.05\n- Nhự PVAc: 35.00 - + 37,01\n- pH: 4.5 – 6.5\n- Độ nhớt (25độ C): 35.000- 40.000Cps\n- Hàm lượng rắn (%): 29.00 -+30.00\n- Trọng lượng riêng:1,035 – 1,069\n- Điểm sôi: sôi ở 100 độ C', NULL, 1, '2015-07-12 15:07:42', '2015-07-12 15:51:38', 1000),
(23, 'XT - 325H keo bồi giấy, bồi ống giấy, dán giấy', '', 60, NULL, 'keo dán thùng carton', 'news_thumb/c41846be4f4ca272652446a2e77592c8.jpg', '- Nước: 35.00 – 40.05&#10;- Nhự PVAc: 35.00 - + 37,01&#10;- pH: 4.5 – 6.5&#10;- Độ nhớt (25độ C): 40.000- 50.000Cps&#10;- Hàm lượng rắn (%): 32.00 -+33.00&#10;- Trọng lượng riêng:1,035 – 1,069&#10;- Điểm sôi: sôi ở 100 độ C<p><br/></p><p>Dùng để bồi giấy,', NULL, 1, '2015-07-12 15:09:30', '2015-07-12 15:52:24', 1000),
(24, 'XT - 351AD keo bồi giấy, bồi ống giấy, dán giấy', '', 60, NULL, 'keo dán thùng', 'news_thumb/063342b350b4c09f5d16ae62c68b08d3.jpg', '- W.A: 45% - 55%&#10;- Nhự PVAc: 55%&#10;- pH: 4.1 – 6.1&#10;- Độ nhớt (25độ C): 20.000- 30.000Cps&#10;- Hàm lượng rắn (%): 57.01 -+58.08(-+1)&#10;- Trọng lượng riêng:1,035 – 1,069&#10;- Điểm sôi: sôi ở 100 độ C<p><br/></p><p>Dùng để bồi giấy, bồi ống giấ', NULL, 1, '2015-07-12 15:10:58', '2015-07-12 15:53:00', 1000),
(25, 'XT - 142N-1 keo cán màng', '', 62, NULL, 'Keo cán màng OPP', 'news_thumb/8dfcda7cd3b11046ee7557d2080b7dd6.jpg', '- W.A: 45% - 55%&#10;- Nhự PVAc: 55%&#10;- pH: 4.1 – 6.1&#10;- Độ nhớt (25độ C): 17.000- 23.000Cps&#10;- Hàm lượng rắn (%): 44 -+46&#10;- Trọng lượng riêng:1,035 – 1,069&#10;- Điểm sôi: sôi ở 100 độ C<p>Dùng để cán màng OPP</p>', NULL, 1, '2015-07-12 15:18:43', '2015-07-12 15:53:43', 1000),
(26, 'XT - 627N - 1 Keo phá màng', '', 63, NULL, 'keo phá màng', 'news_thumb/43bf7cacc8e1dbf3a5088db7640503d0.jpg', '- W.A: 45% - 55%&#10;- Nhự PVAc: 55%&#10;- pH: 4.1 – 6.1&#10;- Độ nhớt (25độ C): 5.000- 8.000Cps&#10;- Hàm lượng rắn (%): 55 – 56 (+-1)&#10;- Trọng lượng riêng:1,035 – 1,069&#10;- Điểm sôi: sôi ở 100 độ C<p>- Dùng để phá màng dán những sản phẩm keo sữa th', NULL, 1, '2015-07-12 15:22:38', '2015-07-12 15:54:11', 1000),
(27, 'XT - 541 ( Hai thành phần - ghép ngang các loại gỗ cứng)', '', 59, NULL, 'keo dán gỗ', 'news_thumb/b7d29d76c3692ad5ecb33d3cee712e86.jpg', 'Ghép ngang các loại gỗ cứng( căm xe, ván hương, ..\nPha xúc tác theo tỷ lệ 10 keo/1 xúc tác ( hổn hợp sử dụng trong vòng 60phút đổ lại', NULL, 1, '2015-07-12 15:37:33', NULL, 1000),
(28, 'XT - 543 Hai thành phần - Ghép ngang các loại gỗ mềm, cứng trung bình, gỗ không dầu', '', 59, NULL, NULL, 'news_thumb/323a37c14218de1a0089b68f63833a05.jpg', 'Ghép ngang các loại gỗ mền, gỗ không dầu ( thông, văn sam, linh sam...0 \nPha chất xúc tác theo tỉ lệ 10 keo/1 xúc tác ( hổn hợp sử dụng trong vòng 60 phút đỗ lại)', NULL, 1, '2015-07-12 15:44:28', NULL, 1000),
(29, 'XT- 333 Một thành phần ghép dọc, gỗ mềm', '', 59, NULL, 'keo ghép dọc', 'news_thumb/47a93a019a4a323f74b54a65a2cfcb86.jpg', 'Không pha nước, ghép dọc, ghép nối đầu', NULL, 1, '2015-07-12 15:47:25', NULL, 1000),
(30, 'XT - 369 Ghép mộng - chốt', 'xt---369-ghep-mong---chot', 88, NULL, 'keo ghép chốt, mộng', 'news_thumb/e3ca413d8d47ef7bf4bafdff6fbd6bb5.jpg', 'Không pha nước, ghép mộng và chốt', NULL, 1, '2015-07-12 15:49:01', '2015-11-05 00:35:12', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
`id` int(11) NOT NULL,
  `key` varchar(200) NOT NULL,
  `value` text NOT NULL,
  `desc` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `desc`) VALUES
(1, 'site_name', 'Website bán cổng mí vl', ''),
(2, 'tag_description', 'bal bla bla bla bal', ''),
(3, 'tag_keyword', 'phim18, lienso.my', ''),
(4, 'tag_header', '<meta name="title" >', ''),
(5, 'phone_contact', '04 3755 8929', ''),
(6, 'video_promotion', 'FVBKvwAeRZk', 'Video giới thiệu'),
(7, 'banner', 'news_thumb/d4b16ffb2851a109a224eba7742e8716.png', ''),
(8, 'logo', 'news_thumb/637ae166b3026af790df0ae54b52b480.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `alt` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `images` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `name`, `alt`, `link`, `images`, `create_time`, `update_time`, `status`) VALUES
(7, 'ảnh slide', '123123', NULL, 'news_thumb/6316c41ac362148db5b5e9de3f9d3ac7.jpg', '2015-05-20 14:23:27', '2015-10-29 00:29:37', '1'),
(10, 'aa', 'aly', NULL, 'news_thumb/e028c23add3094d60a0a934b09f5f9b6.jpg', '2015-07-11 23:29:00', '2015-10-29 00:28:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE IF NOT EXISTS `support` (
`id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `yahoo` varchar(200) DEFAULT NULL,
  `skype` varchar(200) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `name`, `phone`, `yahoo`, `skype`, `create_time`, `status`, `update_time`) VALUES
(2, 'Mr Đạo', 962987026, 'daotc', 'daotc_vietec', '2015-05-20 15:53:02', 1, '2015-05-21 22:50:26'),
(3, 'Mr Đức hùng - Manager', 0, 'duchungf9123', 'duchungf9', '2015-05-20 16:02:26', 1, '2015-05-20 17:03:32'),
(4, '123', 123123, '123', '123123', '2015-05-31 22:00:29', 2, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'daotran', 'daotc94@gmail.com', '$2y$10$ymf6OmxdsiqM38DoZoPG3.yHH3EbLk.VXShRRnonY9WXqhMNE7uLm', '4Az5myG0xVX7lpGowMSmvnVExcVaDSnTCvanEAZ290YcakKoL3qFNIfP3Yha', '2015-04-12 05:23:36', '2015-07-29 19:00:18'),
(2, 'tesst', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, '2015-04-20 17:39:04', '2015-04-20 17:39:04'),
(3, 'namphuong', 'namphuong@gmail.com', '$2y$10$AVtawJ.4FkVz0p9z1cAlNu8ZoOw2wDvt/jZA1on0FxO3yf5DsfMBm', 'UMZrReH1YGjzULVPrWwNCt5XgI6MXGxjOSabPfaeysWOOXj8Cw4rHX46rXWb', '2015-05-17 15:41:09', '2015-05-21 14:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_news`
--
ALTER TABLE `group_news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `introduction`
--
ALTER TABLE `introduction`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `group_news`
--
ALTER TABLE `group_news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `introduction`
--
ALTER TABLE `introduction`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
