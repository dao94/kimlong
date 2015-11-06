-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 25, 2015 at 02:03 PM
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
  `grade` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_key`, `create_time`, `update_time`, `name`, `grade`, `active`) VALUES
(57, 0, '2015-05-21 12:44:33', '2015-07-12 00:09:29', 'Kẹo sữa dán gỗ', NULL, 1),
(58, 0, '2015-05-21 21:45:42', '2015-07-12 00:09:11', 'kẹo sữa dán giấy', NULL, 1),
(59, 0, '2015-07-12 00:43:51', NULL, 'Kẹo công nghiệp', NULL, 1),
(60, 0, '2015-07-12 00:43:58', '2015-10-22 00:42:05', 'Kỹ thuật gián keo', NULL, 1),
(64, 62, '2015-10-21 01:08:58', NULL, '123123', NULL, 1),
(66, 65, '2015-10-21 01:15:14', NULL, '123123123', NULL, 1),
(70, 60, '2015-10-21 01:35:53', NULL, '213123', NULL, 1),
(71, 0, '2015-10-22 00:41:33', NULL, 'asdasd', NULL, 1),
(72, 71, '2015-10-22 00:41:42', '2015-10-22 01:04:04', 'dfdfasdasdasdasd', NULL, 1),
(73, 72, '2015-10-22 00:41:50', NULL, 'dfdfa', NULL, 1);

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
(47, 'sữa nguyên chất', '2015-05-04 21:54:00', '2015-07-12 00:21:01', NULL),
(49, 'Sữa tươi', '2015-05-22 20:34:30', '2015-07-12 00:20:54', NULL);

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
(1, 'Kẹo của tôi', '<p>Dear Sirs/ Madam</p><p><br/></p><p>  We would like to introduce ourself Tuan Minh Investment Company Limited ( Brief: Tuan Minh Investco) from Vietnam was set up at 2005 and one of leader manufacturer and exporters in the field of agri-products, foods spices and raw incense stick (agarbatti), bamboo stick making agarbatti. Our company has established trading links with partners all over the world and is famous for its variedly of forms style, high quality products and services. Our annual turnover is estimated around 20 millions united dollar and bring the foreign currency for our nation.  Currently, We had build many processing units and factories as well as stockage system  with hundreds of workers in many cities like Yen Bai, Lang Son, Hung Yen, Hai Duong, Hai Phong…</p><p> Tuan Minh Investco is known as the first class exporter in the field of agri-products, spices  and incense stick , bamboo stick .THINK VIETNAM, THINK SPICES &amp; INCENSE STICK, THINK TUAN MINH, with main items as follows:</p><p> </p><p>1. SPICES AND FOODS</p><p> </p><p>CASSIA /CINNAMON</p><p>    -      Cassia Split ( Paper dosa)</p><p>    -      Cassia broken</p><p>     -      Cassia whole pressed</p><p>     -      Cassia  tube ( Cassia cigarette)</p><p>    -      Cinnamon cut square</p><p>    -      Cinnamon cut round</p><p>    -      Cinnamon powder</p><p> </p><p>STAR ANISEED:</p><p>    -      Star aniseed whole autumn crop</p><p>    -      Star aniseed whole spring</p><p>    -      Star aniseed broken</p><p> </p><p>PEPPER BEAN</p><p>    -      Black pepper bean 500g/l</p><p>    -      Black pepper bean 550g/l</p><p>    -      White pepper bean 630g/l</p><p> </p><p>DESSICATED COCONUT</p><p>    -      Dessicated coconut fine grade</p><p>    -      Dessicated coconut medium grade</p><p> </p><p>2.INCENSE STICK AND BAMBOO STICK</p><p> </p><p>INCENSE STICK MADE MACHINE</p><p>    -      Incense stick 8” charcoal and natural</p><p>    -      Incense stick 9” charcoal and natural</p><p>    -      Incense stick 10” charcoal and natural</p><p> </p><p>BAMBOO STICK</p><p>    -      Round bamboo sticks 8”,9”,10” with 1.3mm or 1.2mm diameter</p><p>    -      Square bamboo sticks  8”. 9”, 10”</p><p>    -      Bamboo skewer</p><p> </p><p>INCENSE MACHINE</p><p>      Remarkable successes of Tuan Minh Investco  are building relationship and co-operation in long term with many customers and trading  companies , manufacturers all over the world especially India- our tradinationl market with big cities such as New dehli, Mumbai, Chennai, Bangalore, Tuticorin, Kolkara, Ahmedabad... Tuan Minh''s products also have been exported directly to European and Asian markets such as: Germany, USA, France, Russia ,Korea, Singapore, Japan , Middle East…</p><p>    Aware of the importance of the long term business relation and solid co-operation, We always set up the target: BEST QUALITY, COMPETITIVE PRICE AND GOOD SERVICES WILL LIFT YOU A NEW SKY. With sologan: WHERE CONVERGE PREEMINENT GENIUS, We always do best efford to bring all our customer the absolute trust.</p><p>                      </p><p>    Please update us your highly interest in our products. We are looking forwards to be your trusty partner and positive supports from all buyers.</p><p>Please feel free to contact with us. </p><p> </p><p>  BEST REGARDS</p><p>  FOR TUAN MINH INVESTCO</p><p>  MRS. LE  MAI</p><p>  GENERAL MANAGER</p>', 1, '2015-05-17 23:15:29', '2015-07-12 00:18:40');

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

INSERT INTO `news` (`id`, `name`, `group_news_id`, `user_id`, `images`, `description`, `content`, `create_time`, `update_time`, `status`, `count_views`) VALUES
(2, 'Nghiêm cấm quảng cáo thay thế sữa mẹ !', 47, 1, 'news_thumb/4352c5fb2d0b184d4dd6c61c322a0e2d.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Đang cập nhật !</p>', '2015-05-10 22:51:01', '2015-07-12 00:24:20', 1, 0),
(3, 'Những loại thực phẩm cấm kỵ ăn vào bữa sáng', 47, 1, 'news_thumb/b816c9013852a6b37ab892ad10330ba0.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng. </p>', '2015-05-10 22:49:56', '2015-07-12 00:23:15', 1, 0),
(6, 'Những loại thực phẩm không nên kết hợp cùng nhau', 49, 1, 'news_thumb/2b9c513d19984b51eb58ba8ceaa92ab0.jpg', 'Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng.', '<p>Các chuyên gia dinh dưỡng khẳng định rằng, bữa sáng là bữa ăn quan trọng nhất trong ngày. Tuy nhiên có những thực phẩm tuyệt đối không được ăn vào buổi sáng. </p>', '2015-05-22 20:35:02', '2015-07-12 00:23:07', 1, 0),
(7, 'Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà', 49, 1, 'news_thumb/711fea99130b6230fece3058ac772c2f.jpg', 'Sinh tố chuối sữa là loại đồ uống có vị ngọt của chuối, vị béo của sữa được rất nhiều người ưa thích. với cách làm đơn giản các bạn có thể làm tại nhà để cải thiện đồ uống và đảm bảo sức khỏe của người thân trong gia đình.', '<p>Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà</p><p>Thứ sáu, 12/06/2015 | 23:31 GMT+7 Trang chủ  »  Đời sống  »  Món ngon mỗi ngày</p><p>Sự Kiện : Món ngon mỗi ngày</p><p>Sinh tố chuối sữa là loại đồ uống có vị ngọt của chuối, vị béo của sữa được rất nhiều người ưa thích. với cách làm đơn giản các bạn có thể làm tại nhà để cải thiện đồ uống và đảm bảo sức khỏe của người thân trong gia đình.</p><p><br/></p><p>Hình ảnh Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà số 1</p><p>Cách làm sinh tố chuối sữa thơm ngon bổ dưỡng tại nhà</p><p><br/></p><p>Chuối chứa nhiều tyrosin, một tiền chất để sản xuất chất dẫn truyền thần kinh dopamin, serotonin có vai trò tích cực đối với sự nhanh nhạy, khả năng học hỏi và điều hoà hoạt động của tim mạch (nhất là đối với trẻ nhỏ).</p><p>Trong chuối có đủ 8 loại axít amin thiết yếu mà cơ thể con người không tự tạo ra được, có đến 11 loại khoáng chất và 6 vitamin.</p><p>Có thể nói chuối không chỉ tốt đối với trẻ nhỏ, mà người lớn nếu ăn một, hai trái mỗi ngày sẽ được cung cấp thêm năng lượng, vitamin, khoáng chất cho cơ thể.Vì vậy chuối còn được chế biến thành nhiều món ăn để cải thiện bữa ăn cho mọi người. </p><p>Không chỉ có bánh chế biến từ chuối mà chuối còn có thể làm kem để giải khát tại nhà. Bởi mỗi khi đi ra ngoài trời nắng về mà cổ họng khát khô được miếng kem chuối mát lạnh, thơm ngon tan trong miệng  thì đó là điều thật tuyệt vời.</p><p>Hoặc sau mỗi đám giỗ, tiệc tùng ở nhà mà còn dư lại chuối có thể lấy ra để chế biến thành kem chiêu đãi cả nhà trong mùa hè này. </p><p><br/></p><p>Dưới đây là cách làm sinh tố chuối sữa nhanh nhất.</p><p><br/></p><p>Nguyên liệu làm sinh tỗ chuối sữa</p><p><br/></p><p>1 hộp sữa chua</p><p><br/></p><p>Cách làm sinh tố dưa hấu ngon nhất giải nhiệt mùa hè</p><p>Cách làm sinh tố dưa hấu ngon nhất giải nhiệt mùa hè</p><p>Cách làm sinh tố cà chua ngon và nhanh nhất tại nhà</p><p>Cách làm sinh tố cà chua ngon và nhanh nhất tại nhà</p><p>Cách làm sinh tố dừa thơm ngon giải nhiệt mùa hè</p><p>Cách làm sinh tố dừa thơm ngon giải nhiệt mùa hè</p><p>Cách làm sinh tố cà rốt thơm ngon bổ dưỡng cho sức khỏe</p><p>Cách làm sinh tố cà rốt thơm ngon bổ dưỡng cho sức khỏe</p><p>2 quả chuối chín</p><p>1 muỗng canh sữa đặc</p><p>10ml mật ong</p><p>100g lạc rang</p><p>1 thìa canh bơ lạc (nếu có thì kem sẽ thơm hơn)</p><p><br/></p><p>Cách làm kem sinh tố chuối sữa</p><p><br/></p><p>Muốn có kem chuối ngon thì phải chọn những quả chuối chín, không bị thâm không bị hỏng, chon chuối chín rất ngọt, nếu chọn chuối chín tới cũng được nhưng không có vị ngọt mà có vị hơi chát. Dùng làm kem thì chuối gì cũng được như chuối tây, chuối lùn, chuối ngự,... hay bất kỳ loại nào tùy theo sở thích.</p><p>Còn sữa chua thì chọn loại sữa chua có đường hoặc không đường nhưng nên là sữa chua trắng và mềm mịn vì sữa chua hoa quả làm mất hương vị thươm của chuối, còn sữa chua đã thì quá cứng khó xay nhuyễn mà lại ảnh hưởng đến lưỡi dao xay trong máy sinh tố.</p><p>Nếu không thích sữa chua thì có thể thay bằng sữa tươi để xay nhưng nên dùng sữa chua vì sữa chua ngậy hơn và rất tốt cho da và hệ tiêu hóa.</p><p>Bơ lạc thì cho vào xay nhưng nếu không thích thì có thể không cần cho vào.</p><p>Còn lạc rang chia ra làm 2 phần. Cả 2 phần đều được xát bỏ vỏ, tách đôi hạt lạc nhưng 1 phần cho vào xay dùng các loại nguyên liệu khác, 1 phần đem xay nhỏ.</p><p>Lột vỏ chuối,  lấy ruột thái thành những khúc nhỏ cắt hình hạt lựu rồi cho vào ngăn đá.</p><p>Sau khi chuối thành đá thì cho chuối, sữa chua, sữa đặc, mật ong, bơ vào máy xay sinh tố xay nhuyễn, cho thêm đá bào vào xay cùng khoảng 1 phút rồi rót ra ly và mời cả nhà cùng thưởng thức. Nếu muốn món kem thêm hấp dẫn có thể rắc thêm chút đậu phộng rang đã đập nát lên trên mặt kem.</p><p><br/></p><p>Chúc các bạn thành công!</p>', '2015-07-12 00:20:38', NULL, 1, 0);

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
  `category_id` int(11) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `content` text,
  `status` int(11) DEFAULT '2' COMMENT '2 là hết hàng,1 là còn hàng',
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `price` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `alt`, `keywords`, `images`, `description`, `content`, `status`, `create_time`, `update_time`, `price`) VALUES
(13, 'incense', 57, 'ádfasf', '111', 'news_thumb/f5738dddc7daa38f97040287128141dc.jpg', 'contact for more details', NULL, 1, '2015-05-21 12:45:49', '2015-07-12 00:08:28', 1111),
(14, 'inceses', 57, 'alt', NULL, 'news_thumb/bf1cf89c8e0644cd4757143ae4146674.jpg', 'alt', NULL, 1, '2015-05-21 15:52:33', '2015-07-12 00:08:03', 6),
(15, 'inceses1', 58, 'inceses', 'inceses', 'news_thumb/c8dacf652c835435feb60b07c656a7b9.jpg', 'inceses', NULL, 1, '2015-05-21 15:54:53', '2015-07-12 00:07:56', 12),
(16, 'inceses2', 58, 'inceses', 'inceses', 'news_thumb/888ffcffa9b5507c419946e11c24bc77.jpg', 'inceses', NULL, 1, '2015-05-21 15:55:33', '2015-07-12 00:07:48', 12),
(17, 'inceses3', 57, 'inceses', 'inceses', 'news_thumb/d4267ccbdc4bcbb52da21508783c9bc2.jpg', 'inceses', NULL, 1, '2015-05-21 15:55:49', '2015-07-12 00:07:39', 1),
(18, 'inceses4', 57, 'alt', 'keyword', 'news_thumb/00e0d8eb398f029bb0f020ac7be329ab.jpg', '<p>mô tả</p>', NULL, 2, '2015-05-21 15:56:16', '2015-10-21 22:00:38', 1);

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
(7, 'ảnh slide', '123123', NULL, 'news_thumb/bbc615ee3b8fff2c7810ecd34f1fab0c.jpg', '2015-05-20 14:23:27', '2015-05-20 14:42:45', '2'),
(10, 'aa', 'aly', NULL, 'news_thumb/31b997e4a85d9452cc7a558fc715b66b.jpg', '2015-07-11 23:29:00', '2015-07-11 23:35:05', '1');

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
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
