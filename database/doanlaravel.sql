-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2024 at 03:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2024_02_08_103406_user', 1),
(30, '2014_10_12_000000_create_users_table', 2),
(31, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(32, '2019_08_19_000000_create_failed_jobs_table', 2),
(33, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` int(11) NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img`, `remember_token`, `created_at`, `updated_at`, `description`) VALUES
(7, 'Ghế sofa nhập khẩu H97054-G', '2500', 'hinh1.jpg', NULL, '2024-02-22 16:18:46', '2024-02-22 16:18:46', 'Nội Thất Xinh gợi ý đến khách hàng mẫu sofa nhập khẩu Malaysia H97054-G đến từ thương hiệu Future Sofa (Malaysia). Sản phẩm sofa cao cấp mang đến trải nghiệm sử dụng sang trọng, cao cấp dành cho phòng khách hiện đại.  Thông tin chi tiết về mẫu sofa nhập khẩu H97054-G Sofa nhập khẩu chính hãng Malaysia Thiết kế không lỗi mốt, chất liệu da bò thật 100% bền gấp nhiều lần sofa da thông thường. Đóng gói: Nhập khẩu nguyên bộ theo tiêu chuẩn của nhà sản xuất. Hệ khung: Gỗ Meranti, gỗ rừng tự nhiên Malaysia. Da bọc: Da bò cao cấp của hãng Mastrotto ITALY. Độ dày da bò: 1.3~1.5mm (dày nhất và cao cấp nhất hiện nay). Mút: Mút mềm cao cấp Malaysia. Vị trí bọc: Bọc da thật toàn bộ (Full 100% leather). Kích thước: 2760*1790*1080mm Màu sắc: Tùy chọn theo bảng màu cập nhật dưới đây từ Nội Thất Xinh. Hiện đang có sẵn bộ sofa đẹp gam màu nâu.'),
(8, 'Sofa nhập khẩu Malaysia H9270-', '3200', 'hinh2.jpg', NULL, '2024-02-22 16:29:09', '2024-02-22 16:29:09', 'Những bộ ghế sofa da thật là dòng sản phẩm được giới thượng lưu ưa chuộng hiện nay. Sản phẩm thường được bày trí trong không gian căn hộ chung cư cao cấp hoặc dinh thự, biệt thự. Mẫu sofa nhập khẩu Malaysia H9270-G dưới đây của Nội Thất Xinh là gợi ý không tồi dành cho quý vị. Thông tin về sofa nhập khẩu Malaysia H9270-G Kích thước ghế: 2800*1600*1010 mm Chất liệu: bọc da bò thật, có độ dày 1,4mm Nhà sản xuất: Omega Khung xương là gỗ tự nhiên được bảo hành lên tới 5 năm Chất liệu da bảo hành 1 năm Ghế sofa Malaysia được sản xuất theo tiêu chuẩn Châu Âu, có chất lượng cao Đệm mút êm ái, chống lún xẹp hiệu quả Thiết kế với 5 gam màu khác nhau cho khách hàng lựa chọn Kiểu góc quay trái, phải linh hoạt cho từng không gian Chất liệu da bò thật mang tới những phút giây trải nghiệm khó quên cho người dùng Chất liệu da càng sử dụng lâu càng trở nên bóng đẹp Da bò có độ thông thoáng cao nên không cảm thấy bí khi sử dụng Kiểu dáng hiện đại, sang trọng phù hợp với nhiều không gian Có đầy đủ giấy tờ chứng minh nguồn gốc xuất xứ sản phẩm  Sofa nhập khẩu Malaysia H9270-G     Bộ sofa nhập khẩu Malaysia H9270-G có kiểu dáng thiết kế đơn giản nhưng mang tới vẻ đẹp tinh tế cho không gian. Bởi bộ ghế sofa da nhập khẩu này có những chi tiết thiết kế hài hòa với nhau như: tựa lưng, tay vịn, chân ghế...Sản phẩm được chú trọng tới từng chi tiết nhỏ, đường chỉ may được thực hiện thủ công bằng những người thợ lành nghề nên mang tới chất lượng cao cho sản phẩm. Lựa chọn bộ ghế sofa nhập khẩu Malaysia H9270-G của Nội Thất Xinh chắc chắn quý vị sẽ được sở hữu không gian phòng khách như ý. Hãy liên hệ ngay với Nội Thất Xinh để sở hữu ngay bộ ghế sofa đẹp này cho phòng khách của mình.'),
(9, 'Sofa da thật nhập khẩu Malays', '3400', 'hinh3.jpg', NULL, '2024-02-22 16:30:03', '2024-02-22 16:30:03', 'Bộ sofa da thật nhập khẩu Malaysia H8819 nhập khẩu nguyên chiếc. Ghế sofa da thật được bọc chất liệu da bò nguyên con 100% mang tới sản phẩm chất lượng cao cùng với những phút giây thư giãn tuyệt vời nhất. Thông tin về sản phẩm Chất liệu: Bọc da bò thật 100%, mềm mại, có tuổi thọ cao Khung xương sản xuất từ gỗ tự nhiên không mối mọt Đệm mút êm ái, chống lún tốt Xuất xứ: nhập khẩu từ Malaysia Màu sắc sang trọng cho quý vị lựa chọn Tay vịn thiết kế kiểu tay Be, nằm thư giãn thoải mái không lo mỏi cổ Chân bom inox có khả năng chịu lực tốt Bảo hành lâu dài Sản phẩm có giấy tờ chứng minh nguồn gốc xuất xứ Các kích thước khác của sản phẩm 2650 x 1530 x 1000mm Giá 51,920,000 2950 x 1530 x 1000mm Giá 54,650,000 3150 x 1530 x 1000mm Giá 59,400,000 Đôn to giá 15.500.000đ Đôn nhỏ giá 15.000.000đ'),
(10, 'Sofa da nhập khẩu Malaysia H91', '1900', 'hinh4.jpg', NULL, '2024-02-22 16:30:51', '2024-02-22 16:30:51', 'Bộ sofa da nhập khẩu Malaysia H9176-VB thiết kế với kích thước nhỏ gọn. Bởi vậy quý vị chưa tìm kiếm được bộ bàn ghế sofa phòng khách nhỏ thì đừng bỏ qua mẫu ghế sofa đẹp này của chúng tôi. Thông tin về sofa da nhập khẩu Malaysia H9176-VB Kích thước(Dài,Sâu,Cao): 2950*950*876 mm Chất liệu: Bọc da bò thật 100%, mềm mại, có tuổi thọ cao Khung xương sản xuất từ gỗ tự nhiên không mối mọt Đệm mút êm ái, chống lún tốt Xuất xứ: nhập khẩu từ Malaysia Màu sắc hiện đại, dễ dàng bày trí trong nhiều không gian Tay vịn thiết kế kiểu tay Be, nằm thư giãn thoải mái không lo mỏi cổ Tựa lưng thiết kế độn phồng êm ái Bảo hành lâu dài Sản phẩm có giấy tờ chứng minh nguồn gốc xuất xứ Ghế văng chưa kèm đôn Các kích thước khác của sofa da thật H9176 Kích thước 1219*876*950 mm Giá 21,120,000 Kích thước 1770*876*950 mm Giá 29,040,000 Kích thước 2180*876*950 mm Giá 36,960,000 Kích thước 2950*876*950 mm Giá 49,280,000 Ghế đôn to 1180*610 mm Giá 15,500,000'),
(11, 'Ghế sofa văng đẹp NTX2308', '2400', 'hinh5.jpg', NULL, '2024-02-22 16:31:21', '2024-02-22 16:31:21', 'Rất nhiều các loại ghế sofa văng đang có mặt tại siêu thị Nội Thất Xinh. Ghế sofa văng NTX2308 là một trong những sản phẩm mới nhất tại công ty chúng tôi. Sofa hiện đại và phù hợp với nhiều không gian khác nhau. Thông tin chi tiết ghế sofa văng đẹp NTX2308 Kích thước sofa văng: 3250*970mm Khung xương: khung gỗ tự nhiên bền chắc Màu sắc: Màu ghi xám hiện đại, tinh tế Đệm mút: mút nhập khẩu thiết kế 3 lớp (cứng +mềm) mang đến sự nâng đỡ hoàn hảo Kiểu dáng ghế sofa văng phù hợp với nhiều không gian Bọc da hạng sang cao cấp, bền đẹp Đường may thẳng tắp, không lỗi Tựa lưng gật gù cực kì thoải mái Chân ghế bằng inox cực chắc chắn  Ghế sofa văng NTX2308  Không gian cực sang và hiện đại với sofa văng cao cấp  Sofa văng đẹp ở mọi góc nhìn  Các đường chỉ may cực kì chắc chắn  Lưng tựa linh hoạt điều chỉnh theo nhu cầu Mua ghế sofa văng tại Nội Thất Xinh nhận về nhiều ưu đãi. Ngoài sản phẩm NTX2308 tại showroom chúng tôi còn rất nhiều các sản phẩm khác nhau. Quý khách liên hệ 0243.905.9999 để được tư vấn cụ thể.'),
(12, 'Sofa da thật 100% Malaysia H9', '3000', 'hinh6.jpg', NULL, '2024-02-22 16:32:03', '2024-02-22 16:32:03', 'Ghế sofa da Malaysia H9270-GN mang tới không gian sang trọng khi được bọc chất liệu da bò thật kết hợp với gam màu nâu đất. Hãy tham khảo ngay những thông tin về mẫu ghế sofa da đẹp dưới đây của chúng tôi. Thông tin về sản phẩm Kích thước ghế: 2800*1600*1010 mm Chất liệu: bọc da bò thật giúp mang tới cảm nhận êm ái khi sử dụng Nhà sản xuất: Omega v Khung xương là gỗ tự nhiên được bảo hành lên tới 5 năm Chất liệu da bảo hành 1 năm Ghế được sản xuất theo tiêu chuẩn Châu Âu nên khách hàng yên tâm về chất lượng Đệm mút êm ái, chống lún xẹp hiệu quả Kiểu góc quay trái, phải linh hoạt cho từng không gian Chất liệu da bò thật mang tới những phút giây trải nghiệm khó quên cho người dùng Chất liệu da càng sử dụng lâu càng trở nên bóng đẹp Da bò có độ thông thoáng cao nên không cảm thấy bí khi sử dụng Kiểu dáng hiện đại, sang trọng phù hợp với nhiều không gian Có đầy đủ giấy tờ chứng minh nguồn gốc xuất xứ sản phẩm  Ghế sofa da Malaysia H9270-GN sang trọng  Ghế sofa góc có kích thước nhỏ gọn  Ghế có kiểu dáng thiết kế mang đậm chất Âu  Đường chỉ may chắc chắn  Phụ kiện gật gù thay đổi được độ cao  Da bò thật cao cấp  Ghế sofa da Malaysia H9270-GN sang trọng Sở hữu bộ sofa da Malaysia H9270-GN cho phòng khách của quý vị là sự lựa chọn không tồi. Hãy liên hệ ngay với Nội Thất Xinh để trở thành chủ nhân của bộ ghế sofa Malaysia chất lượng cao này. Hotline đặt hàng 0243 905 9999 - 0975 90 3333.'),
(13, 'Sofa nhập khẩu Malaysia H2210', '3600', 'hinh7.jpg', NULL, '2024-02-22 16:32:37', '2024-02-22 16:32:37', 'Nội Thất Xinh giới thiệu mẫu sofa nhập khẩu Malaysia H2210 dành cho nhà nhỏ. Đây là mẫu sofa góc dành cho nhà nhỏ mà bạn không nên bỏ qua. Sản phẩm được thiết kế với kiểu dáng tối giản, thích hợp sử dụng trong phòng khách hiện đại. Dưới đây là những thông tin cụ thể về sản phẩm này. Thông tin về sofa nhập khẩu Malaysia H2210 Kích thước sofa nhập khẩu Malaysia: 2450*1600*1000 mm Chất liệu: Da bò thật cao cấp Xuất xứ:Nhập khẩu Malaysia Thiết kế kiểu dáng tối giản nhưng vẫn mang tới không gian sang trọng Chất liệu da bò mềm mại, có tuổi thọ sử dụng lâu dài Khung xương gỗ tự nhiên có chất lượng cao, không mối mọt Đệm mút êm ái và có khả năng đàn hồi cao Màu sắc đẹp và phù hợp với nhiều không gian Kích thước nhỏ gọn, phù hợp với phòng khách nhỏ Bảo hành lâu dài  Ghế sofa nhập khẩu Malaysia nguyên chiếc  Kích thước ghế nhỏ gọn  Ghế sofa bọc da bò thật Sofa nhập khẩu Malaysia H2210 hiện đang có sẵn tại showroom của chúng tôi. Bạn quan tâm tới sản phẩm này hãy tới ngay siêu thị nội thất của chúng tôi để trải nghiệm trực tiếp trước khi mua. Hoặc liên hệ với chúng tôi theo số Hotline 0243 905 9999 để được giải đáp cụ thể nhất.'),
(14, 'Bàn ghế sofa phòng khách NTX1', '2000', 'hinh8.jpg', NULL, '2024-02-22 16:33:21', '2024-02-22 16:33:21', 'Quý vị đang tìm kiếm bộ sofa nỉ hiện đại cho phòng khách nhà mình? Hãy tham khảo ngay bộ bàn ghế sofa phòng khách NTX1924 dưới đây mà chúng tôi gợi ý. Đây là mẫu sofa bọc nỉ cao cấp nên có tuổi thọ sử dụng lâu dài. Thông tin về bàn ghế sofa phòng khách NTX1924 Kích thước: 2700x1700x900mm Chất liệu vải nỉ cao cấp có độ bền cực cao Khung ghế được làm từ gỗ tự nhiên chống mối mọt, cong vênh Đệm mút 3 lớp cực êm ái Lò xo nhập khẩu có độ đàn hồi tốt nhất Thiết kế dáng góc hiện đại phù hợp cho nhiều không gian Dễ dàng kết hợp cùng các đồ nội thất khác Có thể đặt hàng thay đổi kích thước, màu sắc Bảo hành dài hạn, bảo trì trọn đời Sản xuất tại xưởng của Nội Thất Xinh nên có giá bán hợp lý  Bàn ghế sofa phòng khách NTX1924\\  Ghế sofa góc có kích thước nhỏ gọn  Bàn ghế sofa phòng khách bọc nỉ cao cấp  Tay vịn thiết kế êm ái  Quý vị liên hệ ngay với chúng tôi để trở thành chủ nhân của mẫu bàn ghế sofa phòng khách đẹp này. Sản phẩm có chất lượng cao và có giá bán hợp lý. Hãy gọi ngay cho chúng tôi theo số Hotline để được giải đáp cụ thể.'),
(15, 'Ghế sofa da cao cấp NTX227 Gh', '2600', 'hinh9.jpg', NULL, '2024-02-22 16:33:54', '2024-02-22 16:33:54', 'Mở đầu cho xu hướng sử dụng chất liệu bọc mới dành cho ghế sofa da công nghiệp hạng sang là mẫu ghế sofa da cao cấp NTX227 của chúng tôi với rất nhiều ưu điểm vượt trội. Đáng chú ý nhất là sản phẩm được bọc chất liệu da có khả năng chống thấm, chống mực bút bi hiệu quả. Điều này giúp giải \"bài toán khó\" của nhiều gia đình khi có trẻ nhỏ. Ghế sofa da cao cấp NTX227 bọc da chống mực bút bi hiệu quả Xuất phát từ những thắc mắc, băn khoăn của khách hàng khi gửi đến Nội Thất Xinh rằng: Làm sao để tẩy mực bút bi trên sofa da? Nhiều gia đình phải bọc lại ghế sofa chỉ vì có quá nhiều vết mực trên bề mặt ghế, gây ảnh hưởng tới giá trị thẩm mỹ của không gian. Chính vì thế, chúng tôi đã tìm nỗ lực tìm ra giải pháp hiệu quả dành cho vấn đề này.  Việc tìm và ứng dụng chất liệu da công nghiệp chất lượng cao có khả năng chống mực bút bi hiệu quả, lau chùi dễ dàng sẽ mang tới yên tâm dành cho bạn. Bên cạnh đó, sử dụng chất liệu này còn giúp bạn tiết kiệm nhiều chi phí khi không phải làm sạch chất liệu da và bọc lại ghế sofa. Ngoài ra, chất liệu da hạng sang còn có nhiều ưu điểm nổi bật khác như: có độ bền vượt trội, khả năng chống bám bẩn cao, chống mốc, chịu thời tiết, chống mài mòn và chống thấm nước tốt. Do đó, đây thực sự là một trải nghiệm đáng để bạn lựa chọn. Chất liệu da hạng sang vượt qua nhiều tiêu chuẩn khi thử nghiệm như: + Chống cháy bề mặt đạt tiêu chuẩn Mỹ California 118 + Không thúc đẩy phát triển hình thành vi khuẩn + Vượt qua thử nghiệm về đặc tính tế bào + Vượt tra kiểm tra về dị ứng da + Có độ bền màu tốt + Không ố màu khi gặp rỉ sắt + Chống son môi, bút bi, bút dạ + Chống bám dính dầu ăn, socola, máu, nước tiểu, mù tạt, rượu vang đỏ... Chất liệu da an toàn và không gây kích ứng với làn da nhạy cảm. Do đó hoàn toàn sử dụng trong gia đình có trẻ nhỏ. Đặc biệt, giá bán hợp lý phù hợp với ngân sách của rất nhiều người. Thông tin về ghế sofa da cao cấp NTX227 Kích thước: 2800*1700*1000 mm Sở hữu khung xương gỗ tự nhiên, không mối mọt, cong vênh Màu sắc sang trọng, thích hợp bày trí với nhiều món đồ nội thất và đồ decor khác trong phòng Sử dụng đệm mút chống lún tốt, mang tới cảm giác êm ái Lò xo nhập khẩu Malaysia với chất lượng cao Thiết kế mẫu mã đơn giản nhưng sang trọng Tạo điểm nhấn với kỹ thuật may nổi trên bề mặt Bảo hành lâu dài, tối đa lên tới 5 năm Sản phẩm có sẵn tại showroom cho bạn tham khảo   Kiểu dáng thiết kế đẹp, sang trọng  Sản xuất tại xưởng với giá bán ưu đãi nhất  Thiết kế hoàn hảo, không một chi tiết thừa Hãy tới ngay showroom của chúng tôi để trải nghiệm trực tiếp mẫu ghế sofa da cao cấp NTX227 này. Hoặc gọi cho chúng tôi để được tư vấn cụ thể và chi tiết nhất về sản phẩm.'),
(16, 'Sofa da phòng khách NTX705', '2800', 'hinh10.jpg', NULL, '2024-02-22 16:34:29', '2024-02-22 16:34:29', 'Nội Thất Xinh gợi ý mẫu ghế sofa da màu đen sang trọng cho phòng khách, văn phòng làm việc. Đó là mẫu sofa da phòng khách NTX705. Sản phẩm này được bọc chất liệu da công nghiệp cao cấp, có khả năng kháng khuẩn tốt. Vì vậy có thể hạn chế tình trạng nấm mốc khi gặp thời tiết ấm ướt. Mẫu ghế sofa da đẹp này được sản xuất tại xưởng với nhưng nguyên vật liệu đầu vào được tuyển chọn kỹ lưỡng. Vì vậy ghế sofa có chất lượng cao và có giá bán cạnh tranh do được phân phối trực tiếp tới tay khách hàng. Dưới đây là thông tin về sản phẩm này. Thông tin về sofa da phòng khách NTX705 Kích thước: 2800*1800*1000 mm Kích thước sofa phòng khách thiết kế phổ thông, thích hợp sử dụng cho nhiều không gian Chất liệu da hạng sang có chất lượng cao, mang tới cảm giác mềm mại khi sử dụng Có khả năng kháng khuẩn tốt, giúp bảo vệ bề mặt da khỏi vi khuẩn nấm mốc hiệu quả Màu sắc sang trọng, dễ dàng kết hợp với nhiều món đồ decor khác nhau Khung xương gỗ tự nhiên, chống mối mọt và không cong vênh Đệm mút thiết kế chống lún, mang tới cảm giác dễ chịu khi sử dụng Đường chỉ may chắc chắn, được thự hiện bởi những người thợ lành nghề Tạo điểm nhấn với nhiều điểm rút lõm ấn tượng Chân ghế thuộc lại chân Bom chắc chắn và có chiều cao thấp Sản phẩm được bảo hành lâu dài  Ghế sofa da phòng khách NTX705  Chất liệu da cao cấp mềm mại  Tạo điểm nhấn với kỹ thuật may đỉnh cao của những người thợ lành nghề Hãy tới ngay showroom nội thất của Nội Thất Xinh để tham khảo mẫu sofa da phòng khách NTX705 mới nhất này của chúng tôi. Sản phẩm đang có sẵn tại showroom dành cho bạn tham khảo, trải nghiệm và cảm nhận trước khi mua. Mọi thông tin cần tư vấn xin liên hệ với chúng tôi theo số Hotline để được giải đáp cụ thể.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `is_admin`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'toan', '$2y$12$dhlCmE46QihlSrjJAwdswOERj2RYQvV.HZFUPmwsVn.L.6jCLUS52', 'toan@gmail.com', NULL, NULL, NULL, '2024-02-21 00:40:39', '2024-02-21 00:40:39'),
(3, 'admin', '$2y$12$DOPHEGmXrEdv5oRt8iTN5OioTQlIBxqDsW/L72LTlFih4Af4fIX8i', 'admin@localhost', 1, NULL, NULL, '2024-02-21 17:51:58', '2024-02-21 17:51:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
