-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2023 at 03:30 PM
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
-- Database: `organic (1)`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBV` int(11) NOT NULL,
  `TieuDe` varchar(50) NOT NULL,
  `HinhAnh` text NOT NULL,
  `HinhAnhDetail` text NOT NULL,
  `MoTaNgan` varchar(100) NOT NULL,
  `MoTa` text NOT NULL,
  `NgayViet` datetime NOT NULL,
  `MaDM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`MaBV`, `TieuDe`, `HinhAnh`, `HinhAnhDetail`, `MoTaNgan`, `MoTa`, `NgayViet`, `MaDM`) VALUES
(1, 'Tại sao buổi sáng nên ăn trái cây', 'baiviet-3.png', 'baiviet-1.png', 'Với nhiều người bữa sáng thường bao gồm các ...', 'Ăn trái cây giúp thải độc sau 1 giấc ngủ\r\nCơ thể chúng ta trải qua giai đoạn giải độc mạnh nhất trong khoảng từ 7-11 giờ sáng. Trái cây sẽ cung cấp thêm năng lượng cho quá trình này so với các loại thực phẩm chống giải độc chứa nhiều chất béo.\r\n\r\nTrái cây giúp tăng cường trao đổi chất\r\nĂn trái cây là cách tốt nhất để bắt đầu ngày mới vì cơ thể bạn sẽ dễ dàng tiêu hóa những thứ đầu tiên vào buổi sáng. Nó cũng dẫn đến tăng tỷ lệ trao đổi chất trong vài giờ tiếp theo nhờ vào lượng đường trái cây tự nhiên.\r\n\r\nKích thích đường tiêu hóa\r\nTrái cây cho bữa sáng giúp cung cấp các enzym, chất xơ và prebiotics có giá trị để kích hoạt dịch tiêu hóa trong dạ dày của chúng ta và loại bỏ các chất thải cũ từ ngày hôm trước. Chất xơ từ trái cây giúp làm sạch ruột kết một cách triệt để và giúp bạn cảm thấy nhẹ nhàng và sảng khoái trong suốt thời gian còn lại của ngày.\r\nTiêu thụ trái cây buổi sáng giúp cơ thể tỉnh táo\r\nCơ thể bạn cần đường trái cây tự nhiên ngay khi thức dậy. Hãy thử thay thế ly cà phê espresso của bạn bằng một tách trà thơm ngon tự nhiên bằng cách pha một ly sinh tố giúp não bộ của bạn nhanh nhẹn và tràn đầy năng lượng.\r\n\r\nGiảm cân\r\nTrái cây cung cấp cho bạn nguồn dinh dưỡng tuyệt vời và giúp loại bỏ độc tố dư thừa ra khỏi đường ruột của chúng ta. Ăn trái cây trong ngày bắt đầu từ buổi sáng sẽ giúp thải độc và làm sạch cơ thể, dẫn đến giảm cân. Một quan niệm sai lầm phổ biến là ăn một bữa sáng giàu protein động vật sẽ khiến bạn không ăn quá nhiều trong ngày. Tuy nhiên, các nghiên cứu đã phát hiện ra rằng tiêu thụ nhiều hơn vào buổi sáng sẽ có xu hướng ăn nhiều hơn vào cuối ngày, dẫn đến tăng cân.\r\nTham khảo thêm: những loại trà giảm cân hiệu quả\r\n\r\nTăng cường hệ thống miễn dịch\r\nCó một ly sinh tố lành mạnh thay vì thịt xông khói và xúc xích sẽ tốt hơn nhiều cho hệ thống miễn dịch và sức khỏe tổng thể của bạn về lâu dài. Trái cây có nhiều vitamin và chất chống oxy hóa tự nhiên, giúp tăng cường hệ thống miễn dịch của chúng ta và tránh các bệnh truyền nhiễm.\r\n\r\nTạo thành môi trường trung hoà cho các cơ quan\r\nMọi người lầm tưởng rằng trái cây quá chua, nhưng điều đó là sai. Trên thực tế, chanh là một trong những loại trái cây có tính kiềm cao nhất trên Trái đất. Mặc dù bản chất có thể có tính axit, nhưng khi chúng đến dạ dày của chúng ta, các khoáng chất sẽ phân ly, khiến nó có tính kiềm. Về cơ bản, tất cả các loại trái cây đều có tính kiềm, vì vậy bạn nên ăn chúng vào mỗi buổi sáng.\r\n\r\ntrái cây giúp thải độc\r\n\r\nTrái cây đem lại cảm giác no bụng và thoải mái\r\nNếu bạn không tin những lợi ích trên, bạn cũng có thể nghi ngờ rằng trái cây sẽ khiến bạn no. Hãy yên tâm, vì trái cây có đầy đủ chất xơ, vitamin, khoáng chất, dinh dưỡng thực vật – về cơ bản, những chất này có tác dụng cho não của bạn biết rằng nó đã thỏa mãn và tắt mọi tín hiệu đói đến dạ dày của bạn. Bạn cần phải ăn đủ trái cây để cảm thấy no, vì vậy hãy sẵn sàng tập chuyển hoàn toàn sang trái cây và tăng số lượng khi bạn đã quen với nó.\r\nMột số loại trái cây có nhiều tác dụng kể trên là trái bơ, mãng cầu.\r\n\r\nĂn trái cây tốt cho hệ tim mạch\r\nCác chất dinh dưỡng được đề cập ở trên – tất cả các vitamin, khoáng chất và chất chống oxy hóa rất tốt trong việc giảm mức cholesterol và huyết áp. Những chất này rất quan trọng trong việc ngăn ngừa các bệnh tim mạch và làm cho trái tim của bạn khỏe mạnh hơn.\r\n\r\nĂn trái cây tốt cho dạ dày, giảm chướng bụng\r\nCác chất xơ từ trái cây sẽ đẩy chất thải cũ trong hệ tiêu hóa của bạn ra ngoài và loại bỏ chứng đầy hơi ở bụng dưới. Các loại trái cây chứa nhiều nước như dưa hấu hoạt động như một loại thuốc lợi tiểu tự nhiên để loại bỏ lượng natri dư thừa. Khi bạn lấy hết muối ra, bạn sẽ không có lượng nước dư thừa đó.\r\n\r\nĐiều quan trọng là duy trì một chế độ ăn uống lành mạnh và cân bằng, đồng thời có nghĩa là chuyển sang trái cây, hãy nhớ bổ sung nhiều rau và thịt nạc để có được lượng chất dinh dưỡng đầy đủ. Ăn uống vui vẻ!', '2023-11-10 16:23:30', 12),
(2, '8 loại cá tốt cho sức khoẻ nên mua khi đi chợ', 'baiviet-2.png', 'baiviet-2.png', 'Dưới đây là những loại cá chứa nhiều chất dinh dưỡng, vitamin, protein.', 'Cá là một trong những thực phẩm quen thuộc với người Việt. Đây cũng là thực phẩm tốt cho sức khoẻ vì nó chứa nhiều chất dinh dưỡng quan trọng như protein và chất béo lành mạnh. Trong các loại cá thì cá biển chứa nhiều dinh dưỡng có lợi, đặc biệt là omega-3. Dưới đây là những loại cá tốt cho sức khoẻ bạn nên bổ sung thường xuyên.\r\n\r\nVì sao bạn nên ăn cá thường xuyên?\r\n\r\nCác chuyên gia dinh dưỡng khuyên chúng ta nên ăn cá ít nhất 2 lần một tuần, nhất là các loại cá giàu axit béo omega-3. Lý do cá là thực phẩm giá trị dinh dưỡng cao. Đó là nguồn protein quý, đủ các các axit amin cần thiết, chứa nhiều vitamin A, D, và chất béo lành mạnh. Thịt của cá thơm ngon, dễ nấu chín, dễ tiêu hóa và dễ hấp thu.\r\n\r\nBáo Sức khoẻ & Đời sống dẫn lời  BS. Trần Thị Bích Nga, chuyên gia dinh dưỡng cho biết, omega-3 là chất dinh dưỡng đặc biệt quan trọng đối với cơ thể và bộ não. Bộ não sử dụng omega-3 để xây dựng tế bào não và tế bào thần kinh, làm giảm các triệu chứng lo lắng, trầm cảm và giảm nguy cơ mắc các vấn đề về trí nhớ do tuổi tác.\r\n\r\nCá cũng là thực phẩm rất tốt đối với hệ tim mạch. Omega-3 trong cá giúp giảm nồng độ triglyceride trong máu và giảm tắc nghẽn mạch máu.\r\n\r\nNghiên cứu cho thấy, những người ăn cá thường xuyên có ít nguy cơ bị đau tim, đột quỵ và tử vong do bệnh tim. Cá cũng là một trong những nguồn cung cấp vitamin D, chất dinh dưỡng quan trọng rất dễ bị thiếu hụt.\r\n\r\nNhững loại cá tốt cho sức khoẻ bạn nên ăn thường xuyên\r\n\r\nDưới đây là những loại cá tốt cho sức khoẻ được các chuyên gia khuyên nên ăn thường xuyên:\r\n\r\nCá hồi\r\n\r\nBáo VnExpress dẫn nguồn trang Healthline cho biết, cá hồi dồi dào Omega 3 nhất. Trong 100g cá hồi có 2,3g Omega 3, tác dụng giảm lượng cholesterol trong cơ thể, duy trì tính linh hoạt của động mạch, tĩnh mạch và tăng cường cơ tim. Omega 3 cũng được cho là có tác dụng giảm huyết áp và ngăn ngừa cứng thành động mạch.\r\n\r\nCác protein trong cá hồi giúp cơ thể dễ tiêu hóa và hấp thụ dinh dưỡng. Cá hồi rất giàu vitamin và khoáng chất thiết yếu như sắt, canxi, phốt pho, selen, vitamin A, D, B. Đây là những dưỡng chất cần thiết cho sự chuyển hóa dinh dưỡng trong cơ thể người.\r\n\r\nCá cơm\r\nCá cơm là loài cá nhỏ, thân mảnh, sống gần các vùng ven biển. Mặc dù có kích thước nhỏ nhưng cá cơm rất giàu dinh dưỡng. Chúng chứa nhiều protein, khoáng chất và vitamin như A và D và là nguồn axit béo omega-3 chuỗi dài rất có lợi cho cơ thể.\r\n\r\nCá ngừ\r\n\r\nCá ngừ là loại cá chỉ di chuyển sâu dưới biển nên thịt mềm, thơm ngon, không bị ô nhiễm môi trường, tốt cho sức khỏe. Thịt cá ngừ có thể ức chế sự gia tăng cholesterol và ngăn ngừa xơ cứng động mạch. Đồng thời, nó tác dụng đặc biệt trong việc ngăn ngừa và điều trị các bệnh về tim mạch và mạch máu não.\r\n\r\nNgoài ra, cá ngừ giàu sắt, vitamin B12, omega-3 giúp cải thiện tình trạng thiếu máu, ngăn ngừa các vấn đề tim mạch ở người cao tuổi.\r\n\r\nCá thu\r\n\r\nBáo Lao động dẫn nguồn trang Aboluowang cho biết, cá thu là loại cá sinh trưởng nhanh và cho năng suất cao. Trong 100 gram thịt cá chứa 166 kcal, 21,4 gram protein và 7,4 gram chất béo, 486 mg kali.\r\n\r\nNgười cao tuổi thường xuyên ăn cá thu sẽ giúp ngăn ngừa các bệnh liên quan đến tim mạch, suy giảm trí nhớ, tiểu đường type 2.\r\n\r\nCá mòi\r\n\r\nCá mòi rất giàu omega-3, EPA và DHA có lợi cho sức khỏe. Những axit béo thiết yếu này giúp máu trong cơ thể lưu thông thuận lợi, duy trì một trái tim khỏe mạnh và ngăn ngừa khả năng mắc bệnh tim mạch. Người cao tuổi ăn cá mòi rất tốt cho tim mạch.\r\n\r\nBên cạnh đó, cá mòi còn chứa lượng lớn vitamin D rất tốt cho sức khỏe xương khớp của người lớn tuổi.\r\n\r\nCá tuyết\r\n\r\nCá tuyết là nguồn axit béo omega-3 và omega-6 tốt. Nó giàu vitamin B12 và B6 cũng như vitamin E, A và C. Đồng thời cung cấp phốt pho, kali, selen và các khoáng chất vi lượng khác cho cơ thể. Loài cá này cũng rất nạc và ít calo, khiến nó trở thành một trong những loại cá tốt nhất để giảm cân.\r\n\r\nCá trích\r\n\r\nCá trích thon dài, ít vảy, nhiều thịt, ít có vị tanh. Theo các chuyên gia, đây là loài cá rất giàu chất dinh dưỡng, còn được gọi là \"cá béo\" bởi dầu trong cá trích chứa nhiều axit béo omega-3 có lợi cho trí óc. Loại cá này thường được hun khói, đóng túi để bảo quản được lâu mà không mất đi giá trị dinh dưỡng.\r\n\r\nCá da trơn\r\n\r\nCá da trơn có thể sống ở cả nước ngọt và nước mặn. Đây là nguồn cung cấp axit béo omega 3 tốt cho não, tim, hệ miễn dịch và mắt. Cá da trơn cung cấp nhiều vitamin B12, giúp cơ thể tạo ra DNA và giữ cho các tế bào máu hoạt động bình thường.\r\n\r\nTrên đây là những loại cá rất tốt cho sức khoẻ. Hãy thường xuyên bổ sung cá vào chế độ ăn uống của mình nhé.\r\n\r\n', '2023-11-10 16:37:33', 13),
(3, 'Top 10 siêu trái cây tốt nhất cho sức khỏe của bạn', 'baiviet-1.png', 'baiviet-1.png', 'Nhiều người rất ít ăn trái cây và rau, dẫn đến thiếu vitamin, khoáng chất...', 'Nếu \"một quả táo mỗi ngày giúp bạn không phải đi bác sĩ\", thì đây là những loại trái cây tốt nhất giúp bạn tránh xa bệnh tật.\r\n\r\nSau đây là 10 loại trái cây tốt nhất:\r\n\r\n1. Lựu\r\nNghiên cứu cho thấy các chất chống oxy hóa mạnh mẽ trong lựu và nước ép có thể giúp đảo ngược tác hại của quá trình oxy hóa đối với hệ thống mạch máu, đóng vai trò chính trong khả năng đạt được và duy trì sự cương cứng.\r\n\r\nCó lẽ đây là lý do tại sao một số nhà thần học tin rằng quả lựu - chứ không phải quả táo - là trái cấm trong Vườn Địa đàng, theo tạp chí Men’s Journal.\r\n\r\n2. Táo\r\nMột quả táo cỡ trung bình chứa 4g chất xơ hòa tan, đạt 17% nhu cầu hằng ngày. Tiến sĩ Elson Haas, tác giả cuốn “Dinh dưỡng để giữ sức khỏe” (Mỹ), cho biết táo rất quan trọng đối với sức khỏe đường ruột và kiểm soát lượng đường trong máu. Nó cũng là nguồn cung cấp vitamin C tăng cường miễn dịch.\r\n\r\nTáo cũng chứa quercetin, có đặc tính kháng histamine và chống dị ứng.\r\n\r\n3. Quả việt quất\r\n\r\nQuả việt quất có hàm lượng calo thấp, trong khi vẫn giàu chất xơ, vitamin C và vitamin K. Đặc biệt, hàm lượng chất chống oxy hóa cao hỗ trợ sức khỏe tim mạch và chức năng não, theo trang web Olive.\r\n\r\n4. Cherry\r\n\r\nTiến sĩ Jonny Bowden, tác giả cuốn sách “150 loại thực phẩm lành mạnh nhất trên trái đất”, cho biết tình trạng viêm nhiễm trong cơ thể là căn nguyên của hầu hết bệnh tật.\r\n\r\nÔng Bowden nói, viêm mạn tính có thể tàn phá hệ thống mạch máu, nhưng rất nhiều người cũng bị viêm cấp tính do chấn thương thể thao. Các nghiên cứu cho thấy cherry có thể giúp giảm đau nhức, nhờ cherry chứa nồng độ anthocyanins 1 và 2 cao nhất, giúp ngăn chặn các enzym dẫn đến chứng viêm.\r\n\r\n5. Quả mâm xôi\r\n\r\nQuả mâm xôi có sức mạnh dinh dưỡng đặc biệt và hàm lượng vitamin K rất cao - chiếm 36% nhu cầu hằng ngày.\r\n\r\nNghiên cứu đã chứng minh quả mâm xôi giúp giảm nguy cơ ung thư tuyến tiền liệt. Nó cũng chứa nhiều mangan khoáng chất, giúp hỗ trợ sản xuất testosterone tối ưu cho nam giới.\r\n\r\nQuả mâm xôi cũng rất giàu chất chống oxy hóa lutein - ngăn ngừa thoái hóa điểm vàng, giúp tăng cường sức khỏe của mắt.\r\n\r\n6. Bưởi\r\nNghiên cứu “Chế độ ăn bưởi” nổi tiếng của Viện Nghiên cứu Scripps (Mỹ) cho thấy ăn nửa quả bưởi trước mỗi bữa ăn giúp giảm trung bình 1,5 kg trong 12 tuần.\r\n\r\nTiến sĩ Bowden cho biết, nhờ bưởi chứa chất ức chế sự thèm ăn tuyệt vời. Nó cũng chứa chất xơ hòa tan pectin có thể làm chậm sự tiến triển của xơ vữa động mạch.\r\n\r\nTuy nhiên, tránh ăn bưởi khi uống thuốc, vì nó tương tác với các enzym gan khiến thuốc lưu lại trong hệ thống lâu hơn, theo trang web Olive.\r\n\r\n7. Chanh\r\n\r\nTiến sĩ Haas luôn thực hiện 10 ngày thanh lọc cơ thể bằng nước chanh mỗi năm. Ông cho biết, axit citric trong chanh giúp phân hủy chất béo và kích thích dịch tiêu hóa. Vắt nửa quả chanh vào ly nước mỗi sáng giúp hỗ trợ chức năng gan và túi mật.\r\n\r\n8. Đu đủ\r\n\r\nEnzyme papain có trong đu đủ, đã được chứng minh là có tác dụng làm giải tỏa đầy hơi do khó tiêu. Một trong số các enzym khác như chymopapain, có tác dụng giảm viêm. Một chén đu đủ chín chứa 144% nhu cầu vitamin C hằng ngày (88 mg).\r\n\r\n9. Quả bơ\r\nBơ là loại trái cây đặc biệt bổ dưỡng, chứa rất nhiều chất béo không bão hòa đơn tốt cho tim mạch. Chỉ nửa quả bơ cung cấp 10% lượng kali hằng ngày và 30% lượng B6 hằng ngày, đồng thời cung cấp vitamin C, E và B5 - rất tốt cho người có mức căng thẳng cao, theo trang web Olive.\r\n\r\n10. Chuối\r\n\r\nChuối có thể mang lại lợi ích cho sức khỏe tim mạch và hệ tiêu hóa, nhờ vào thành phần chất xơ và chất chống oxy hóa. Do hàm lượng carb dễ tiêu hóa, chuối cũng là một món ăn nhẹ tuyệt vời để cung cấp năng lượng trước và sau khi tập luyện.', '2023-11-10 16:39:13', 12);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaTK` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `NgayBL` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDH` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `GiaSP` double(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`MaDH`, `MaSP`, `GiaSP`, `SoLuong`) VALUES
(40, 25, 15000, 7),
(40, 29, 12000, 7),
(41, 29, 12000, 1),
(42, 29, 12000, 1),
(43, 22, 20000, 15),
(44, 30, 18000, 12),
(45, 27, 25000, 1),
(46, 26, 8000, 1),
(46, 29, 12000, 1),
(46, 30, 18000, 2),
(47, 23, 25000, 1),
(48, 28, 5000, 1),
(49, 29, 12000, 1),
(50, 30, 18000, 1),
(51, 28, 5000, 2),
(51, 29, 12000, 1),
(51, 30, 18000, 2),
(52, 30, 18000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL,
  `SoThuTu` int(11) DEFAULT NULL COMMENT 'số thứ tự mà danh mục sẽ xuất hiện , tùy mình sắp xếp',
  `UuTien` tinyint(1) DEFAULT NULL COMMENT '0: là cho nó ẩn đi, 1 là cho nó xuất hiện tại trang chủ',
  `HinhAnh` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `SoThuTu`, `UuTien`, `HinhAnh`) VALUES
(11, 'Rau củ quả', NULL, NULL, 'cat-3.jpg'),
(12, 'Trái cây', NULL, NULL, 'cat-1.jpg'),
(13, 'Loại cá', NULL, NULL, 'cat-6.png'),
(14, 'Loại thịt ', 0, 0, 'cat-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SoDienThoai` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Quyen` tinyint(1) NOT NULL DEFAULT 0,
  `GhiChu` text NOT NULL,
  `TongTien` int(11) NOT NULL DEFAULT 0,
  `NgayDat` datetime NOT NULL DEFAULT current_timestamp(),
  `MaTK` int(11) NOT NULL,
  `PhuongThucTT` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1.Trả tiền mặt khi nhận hàng 2.Chuyển khoản ngân hàng 3.Thanh toan vi momo',
  `TrangThai` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đã giao	',
  `MaDHRandom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `HoTen`, `Email`, `SoDienThoai`, `DiaChi`, `Quyen`, `GhiChu`, `TongTien`, `NgayDat`, `MaTK`, `PhuongThucTT`, `TrangThai`, `MaDHRandom`) VALUES
(40, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'kha order', 189000, '2023-11-11 23:02:16', 1, 1, 0, 'Organic45472'),
(41, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'hihi', 12000, '2023-11-11 23:02:50', 1, 1, 0, 'Organic693164'),
(42, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'k', 12000, '2023-11-11 23:09:10', 1, 1, 0, 'Organic260389'),
(43, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'kha', 300000, '2023-11-11 23:10:41', 1, 1, 0, 'Organic865808'),
(44, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'kha nho', 216000, '2023-11-11 23:11:30', 1, 1, 0, 'Organic159649'),
(45, 'Huynh Kha1', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, '30', 25000, '2023-11-11 23:52:14', 1, 1, 0, 'Organic816580'),
(46, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, '', 56000, '2023-11-12 00:10:56', 1, 1, 0, 'Organic791289'),
(47, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'cảm ơn bạn ', 25000, '2023-11-12 19:59:27', 1, 1, 0, 'Organic9005'),
(48, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'cảm ơn bạn ', 5000, '2023-11-12 20:00:57', 1, 3, 0, 'Organic766694'),
(49, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'cảm ơn bạn ', 12000, '2023-11-12 20:02:42', 1, 1, 0, 'Organic121684'),
(50, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, 'hihi', 18000, '2023-11-17 00:07:52', 1, 1, 0, 'Organic773384'),
(51, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, '', 58000, '2023-11-17 17:32:21', 1, 3, 0, 'Organic209777'),
(52, 'Huynh Kha', 'khakha5087@gmail.com', '0353123771', 'Binh Dinh', 0, '', 18000, '2023-11-17 17:35:22', 1, 2, 0, 'Organic401839');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `GiaSP` double(10,0) NOT NULL DEFAULT 0 COMMENT 'Tiền Việt không có chữ số thập phân, mặc định là 0(nếu =0 thì hết hàng ví dụ )',
  `HinhAnh` text NOT NULL,
  `TieuDe` text DEFAULT NULL,
  `MoTa` text DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL COMMENT '% giảm giá của 1 sản phẩm',
  `MaDM` int(11) DEFAULT NULL,
  `LuotXem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GiaSP`, `HinhAnh`, `TieuDe`, `MoTa`, `Discount`, `MaDM`, `LuotXem`) VALUES
(20, 'Ớt đỏ ', 5000, 'ot-do.png', 'Ớt đỏ, tên khoa học Capsicum anuum, là loại gia vị cay quen thuộc, rất nhiều món ăn được cho thêm ớt trong quá trình chế biến. Gần đây rộ lên những thông tin về khả năng chữa bệnh của ớt, đặc biệt khả năng cắt cơn đau thắt ngực (đau tim), trị viêm loét dạ dày và ung thư.', 'Ớt đỏ, một kho tàng đầy màu sắc và hương vị, là một nguyên liệu quan trọng trong nấu ăn trên khắp thế giới. Vị cay nồng đặc trưng của ớt đỏ là nguồn cảm hứng không ngừng cho đầu bếp sáng tạo. Từ những món ăn truyền thống cho đến những món ăn hiện đại, ớt đỏ không chỉ là một phần quan trọng của các món ăn mà còn là biểu tượng của sự đa dạng và độ phong phú trong ẩm thực. Ngoài ra, đằng sau vẻ ngoại hình hấp dẫn, trái ớt đỏ còn mang đến nhiều lợi ích dinh dưỡng, bổ sung vitamin và khoáng chất. Cho dù sử dụng tươi, ướp chua, hay làm sốt, ớt đỏ không ngừng làm cho bữa ăn trở nên phong phú và đặc sắc.\nỚt đỏ là loại gia vị cay quen thuộc của những món ăn nhưng ít ai biết ớt là một gia vị, thuộc nhóm thực phẩm có những chất tác dụng dược lý nên là một thực phẩm chức năng, còn capsaicin là một dược phẩm (thuốc) đúng nghĩa.\nNgoài tinh chất ớt capsaicin, thì thành phần dinh dưỡng trong ớt đỏ còn có đến 26 loại chất sinh học khác. Ớt có nhiều các chất khoáng, vi lượng như kẽm, selen, canxi, magiê, nhiều vitamin A, vitamin C và các vitamin nhóm B khác, nhiều hoạt chất sinh học quý như các chất chống oxy hóa (antioxidant), chất chống kết dính tiểu cầu, chất “giống” nitroglycerin có tác dụng giãn động mạch vành... Vì vậy ớt đỏ  có khả năng điệu trị phong phú.\n', NULL, 11, 3),
(21, 'Trái bơ', 20000, 'traicay-bo.png', 'Bơ là một loại cây cận nhiệt đới có nguồn gốc từ México và Trung Mỹ. Bơ là một loại trái cây giàu chất dinh dưỡng và có nhiều lợi ích cho sức khỏe. Nên sử dụng trái bơ đều đặn để tăng cường sức khỏe và giảm nguy cơ mắc các bệnh liên quan đến tim mạch, tiêu hóa, mắt và sức khỏe tinh thần.', 'Bơ hình như cái bầu nước, dài 7–20 cm, nặng 100g-1 kg. Vỏ mỏng, hơi cứng, màu xanh lục đậm, có khi gần như màu đen. Khi chín, bên trong thịt mềm, màu vàng nhạt, giống như chất bơ, có vị ngọt nhạt. Hột trái bơ hình tựa quả trứng, dài 5 – 6 cm, nằm trong trung tâm, màu nâu đậm, và rất cứng.\nThịt trái bơ thường được dùng làm nguyên liệu cho các món sinh tố giải khát, làm salad, sushi hoặc có thể dùng để ăn với bánh mì bằng cách quết lên bánh và rắc thêm một chút đường. Ngoài ra, bơ cũng được dùng trong việc chăm sóc da, tuy nhiên việc ăn nhiều bơ cũng gây nên bệnh về gan.\nBơ là \"nữ hoàng\" của các siêu thực phẩm. Theo Cơ sở dữ liệu dinh dưỡng quốc gia của Bộ Nông nghiệp Mỹ, chỉ 1 quả bơ chứa 320 calo, 17 gram carbohydrate, gần 15 gram chất xơ và vitamin C, E, K và B6, chỉ 30 gram chất béo và ít hơn 5 gram đường. Bơ cũng là nguồn tuyệt vời của magie, kali, beta-carotene và acid béo omega-3, là tác nhân tuyệt vời trong việc ngăn ngừa và kiểm soát bệnh tim cũng như duy trì tóc, da và móng khỏe mạnh. Tuy bơ có vị béo, nhưng đừng lo lắng. Chất béo không bão hòa đơn là chất béo tốt, không gây béo, mà còn có thể giúp kiềm chế cơn đói. Nghiên cứu của Trung tâm Y sinh học của Anh chỉ ra rằng các bữa ăn với bơ có xu hướng làm tăng cảm giác no lâu hơn so với những bữa ăn không có bơ, từ đó cắt giảm cơn thèm ăn.\n', NULL, 12, 1),
(22, 'Trái cam ', 20000, 'traicay-cam.png', 'Cam là trái lai từ quả chanh và quả bưởi. Bộ gen lục lạp, và do đó là dòng ngoại, là bộ gen của bưởi. Cam có nguồn gốc ở một khu vực bao gồm Nam Trung Quốc, Đông Bắc Ấn Độ và Myanma. Cam là một trong những loại trái cây được sử dụng nhiều nhất trên thế giới. Cam mang đến cho sức khỏe con người công dụng tuyệt vời.', 'Cam là loại quả giàu chất chống oxy hóa và chất phytochemical. Theo các nhà khoa học Anh: “Bình quân trong một trái cam có chứa khoảng 170 mg phytochemicals bao gồm các chất dưỡng da và chống lão hóa”. Chuyên gia dinh dưỡng Monique dos Santos cho biết cam được yêu thích và có lợi cho người khỏe mạnh cũng như các bệnh nhân. Chính vì vậy các công dụng của quả cam có thể kể đến như: giúp giải nhiệt, thỏa mãn cơn khát cho người có cường độ vân động cao, tăng cường hệ tiêu hóa và hệ miễn dịch của cơ thể.\nGiá trị dinh dưỡng trong quả cam bao gồm: Mỗi 100 gr quả cam có chứa 87,6 g nước, 1.104 microgram Carotene – một loại vitamin chống oxy hóa, 30 mg vitamin C, 10,9 g chất tinh bột, 93 mg kali, 26 mg canxi, 9 mg magnesium, 0,3 g chất xơ, 4,5 mg natri, 7 mg Chromium, 20 mg phốt pho, 0, 32 mg sắt và giá trị năng lượng là 48 kcal.\nKhông chứa chất béo hay cholesterol, cam nổi tiếng vì chứa nhiều vitamin C và được chứng minh là loại quả có tác dụng chống viêm, chống khối u, ức chế đông máu và chống oxy hóa mạnh. Trên thực tế, hàm lượng vitamin C chỉ chiếm 15 – 20% tổng số các chất kháng oxy hóa trong trái cây này, trong khi những hợp chất khác có khả năng chống oxy hóa cao gấp 6 lần vitamin C: hesperidin từ flavanoid có nhiều trong lớp vỏ xơ trắng, màng bao múi cam và một ít trong tép, hạt cam, có khả năng giảm cholesterol xấu (LDL) và tăng cholesterol tốt (HDL).\n', NULL, 12, 18),
(23, 'Trái đào', 25000, 'traicay-dao.png', 'Quả Xuân đào Chile có hình dáng giống hình trái tim, vỏ mỏng, căng mịn và không có lông như các loại đào khác. Xuân đào có màu đỏ thẫm xen lẫn sắc hồng rất bắt mắt. Quả Xuân Đào Chile được trồng nhiều ở các vùng phía nam, phía tây của Chile nơi có khí hậu ôn đới, ấm áp tạo điều kiện tốt nhất cho xuân đào phát triển và cho quả đạt chất lượng tuyệt vời.', 'Ở Việt Nam chúng ta thường quen với một loại đào duy nhất và ít ai biết được rằng trái đào còn có một họ hàng khác, tạm gọi là Xuân Đào. Xuân Đào còn gọi với cái tên khác là Du Đào, được trồng nhiều ở các bang phía nam, phía tây của Australia có khí hậu ôn đới. Nơi ấm áp tạo điều kiện tốt nhất cho sự phát triển và cho quả đạt chất lượng tuyệt vời. Đào vào vụ từ tháng mười một đến tháng tư năm sau.\nXuân Đào là giống đào có lớp vỏ trơn láng, không lông tơ. Đào Lông và Xuân Đào được xem là những loại quả khác nhau và người ta thường nhầm rằng Xuân Đào là giống lai tạo giữa Đào Lông và Mận nhưng thực tế thì thuộc về cùng một loài với Đào Lông. Đặc điểm phân biệt bề ngoài giữa chúng nằm ở lớp vỏ. Vỏ Xuân Đào trơn láng và hầu như không có lông. Nhiều nơi trên thế giới, người ta còn gọi là quả đào vỏ mận. Kết quả đột biến gen của đào đem đến cho 2 loại Xuân Đào: thịt đào màu trắng và thịt đào màu vàng.\nMang hình dáng giống hình trái tim, vỏ mỏng căng mịn, không có lông như các loại đào khác. Xuân Đào có màu đỏ thẫm xen lẫn sắc hồng rất bắt mắt. Phần thịt giòn và rất mọng nước vị ngọt thơm đặc trưng. Thừa hưởng mùi thơm đặc trưng của họ nhà đào, Xuân Đào đặc biệt mọng nước khi chín. Lớp vỏ của đào chín đem lại cảm giác giòn và chắc khi cắn. Phần thịt rất mọng nước cộng với lớp vỏ chín tạo lên độ giòn rất đã miệng.\nXuân Đào chứa protein, lipit, gluxit, vitamin B1, B2, vitamin C, cùng một số loại axit hữu cơ, đường gluco. Thịt quả Đào chứa nhiều sắt thúc đẩy việc tạo máu, ngăn ngừa thiếu máu. Có tác dụng nhuận tràng, hoạt huyết, hạ huyết áp. Chữa chứng khó thở, ho ra đờm, tiêu ứ. Chủ yếu dùng điều trị chứng táo bón, ho, khô miệng, khô lưỡi…\n', 5, 12, 2),
(24, 'Dưa hấu', 10000, 'traicay-duahau.png', 'Dưa hấu (tên khoa học là Citrullus lanatus) là một loài thực vật thuộc họ Cucurbitaceae, một loài thực vật có hoa giống như cây nho có hoa nguồn gốc từ khu vực Tây Phi. Dưa dấu là một loại quả đặc biệt của quả mọng với một vỏ cứng và không có sự phân chia trong quả, thực vật học gọi là pepo.', 'Dưa hấu ruột đỏ loại 1 có vỏ màu xanh đậm và sọc dưa, trái thuôn dài, ruột đỏ, hạt đen, ăn rất ngon, độ đường cao, hương vị thơm ngon, hấp dẫn.\nĐược trồng và chăm sóc theo tiêu chuẩn cao trong một môi trường an toàn và tự nhiên. Thu hoạch và chế biến được tiến hành đúng chuẩn để đảm bảo nguyên liệu tươi ngon. Có vị ngọt tự nhiên, thịt dưa hấu mịn màng, mọng nước và giữ được độ tươi lâu sau khi thu hoạch.\nKhông chỉ là một loại trái cây ngon và bổ dưỡng mà còn mang lại nhiều lợi ích cho sức khỏe. Cung cấp chất chống oxy hóa và chất chống vi khuẩn tự nhiên, giúp tăng cường sức đề kháng và cải thiện sức khỏe toàn diện. Trong dưa hấu có rất ít calo và chứa nhiều nước, thích hợp cho những người muốn giảm cân. Những khoáng chất như kali, magiê giúp insulin trong cơ thể hoạt động đúng chức năng, từ đó làm giảm lượng đường trong máu. Chất arginine có trong dưa hấu cũng được chứng minh giúp cải thiện độ \'nhạy cảm\' của insulin ở bệnh nhân tiểu đường type 2.\n', NULL, 12, 9),
(25, 'Dưa lưới', 15000, 'traicay-dualuoi.png', 'Dưa lưới là loại quả thường có hình bầu dục, da quả màu xanh, khi chín thường ngả xanh vàng và có các đường gân trắng đan xen như lưới nên có tên gọi là dưa vân lưới (gọi ngắn là dưa lưới). Dưa lưới có nguồn gốc từ châu Phi và Ấn Độ. Người Ai Cập là người đầu tiên trồng giống cây này, ban đầu dưa lưới nhỏ và ít ngọt, sau thời gian nó không ngừng phát triển cho đến nay trở thành loại trái to và ngọt.', 'Quả dưa lưới có trọng lượng trung bình từ 1.5 kg đến 3.5 kg. Người Ai Cập là người đầu tiên trồng giống cây này, ban đầu dưa lưới nhỏ và ít ngọt, sau thời gian nó không ngừng phát triển cho đến nay trở thành loại trái to và ngọt. Dưa lưới sinh trưởng khỏe, khả năng phân nhánh nhiều và thích nghi tốt với điều kiện nhiệt đới như ở Việt Nam. Thời gian từ khi gieo hạt đến khi thu hoạch tùy theo giống dưa từ 55 -80 ngày.\nDưa lưới hiện nay đang được trồng phổ biến rộng rãi tại nhiều nước trên thế giới như Nhật Bản, Hàn Quốc, Úc, Mỹ, Ý, Thái Lan…Ở Việt Nam dưa lưới mới được trồng một số năm gần đây tại các khu có áp dụng công nghệ cao như TP HCM, Bình Dương, Bình Thuận tuy nhiên chất lượng đặc biệt là độ ngọt vẫn chưa đáp ứng được nhu cầu người dùng. Các giống dưa lưới hiện đang trồng tại Việt Nam là: Taki Nhật Bản, Taka Nhật Bản, Dưa Hoàng Kim, Dưa lưới AB,  Giống Thái….\nDưa lưới chứa nguồn chất dinh dưỡng cao. \n+ Chứa chất có khả năng chống oxy hoá như: beta-carotene, lutein, zeaxanthin, vitamin C và cryptoxanthin \n+ Chứa chất tốt cho tim mạch: chất xơ, kali, vitamin C và chất điện phân \n+ Chứa các chất tốt cho sự phát triển của thai nhi: folate và vitamin nhóm B \n+ Chứa chất giúp cho đôi mắt sáng: chất lutein và zeaxanthin \n+ Chứa 88% nước tốt cho hệ tiêu hoá và chống mất nước. \n+ Chứa chất phytochemical chống viêm tốt\n', 3, 12, 8),
(26, 'Trái đu đủ', 8000, 'traicay-dudu.png', 'Đu đủ là giống trái cây nhiệt đới ngon, Quả đu đủ không những là loại quả có hương vị thơm ngon mà còn là phương thuốc quý. Đu đủ tại Bách hoá XANH tươi ngon, ngọt, không chỉ thích hợp cho việc ăn trực tiếp bổ sung dinh dưỡng mà còn có thể chế biến thành nhiều món ăn.', 'Trong đu đủ chứa lượng beta-carotene rất cao. Nó giúp chống lại oxy hóa mạnh giúp chống lại một căn bệnh ung thư. Tuy nhiên, cần cung cấp một lượng vừa phải ăn quá nhiều sẽ không tốt, gây ra bệnh vàng da. Lượng vitamin A, C cao sẽ giúp cơ thể cung cấp những chất dinh dưỡng cần thiết. Vitamin B1, B2, các acid gây men và khoáng chất như kali, canxi, magie giúp bồi bổ máu, phục hồi gan. Đu đủ giàu enzyme tự nhiên, dễ dàng thấm sâu làm sáng da, mau lành da khi bị thương. Công dụng tẩy tế bào da chết, hồi phục sự tươi trẻ cho da. Nhiều người lợi dụng các công dụng đó của đu đủ để chế biến thành những loại hỗn hợp chăm sóc da hiệu quả. Đu đủ do Sói Biển cung cấp được trồng theo theo tiêu chuẩn VietGAP cam kết tuân thủ những nguyên tắc, trình tự, thủ  tục hướng dẫn sản xuất, thu hoạch, xử lý sau thu hoạch nhằm đảm bảo an toàn, nâng cao chất lượng sản phẩm, đảm bảo phúc lợi xã hội, sức khỏe người sản xuất và người tiêu dùng. Thông tin chi tiết Thông tin sản phẩm Thương hiệu OEM Xuất xứ Việt Nam Bảo quản Tủ lạnh Thông tin kích thước Sản phẩm liên quan', 0, 12, 2),
(27, 'Trái kiwi', 25000, 'traicay-kiwi.png', 'Kiwi vàng Zespri là loại trái cây cao cấp nhập khẩu New Zealand với phần vỏ nâu vàng, thịt quả vàng tươi đẹp mắt, ăn vào có vị ngọt mát đặc trưng. Kiwi vàng chứa hàm lượng vitamin C cao, giúp tăng cường đề kháng và hỗ trợ làm đẹp hiệu quả.', 'Kiwi là loại trái cây được xếp trong top đầu các loại trái cây có hàm lượng dinh dưỡng cao. Loại trái này có thể cung cấp cho cơ thể rất nhiều loại vitamin, khoáng chất… có trong hơn 27 loại trái cây phổ biến nhất. Kiwi vàng có vỏ màu nâu vàng, trơn nhẵn, không có lông xù xì như kiwi xanh. Thịt quả màu vàng trong rất đẹp mắt, với nhiều hạt đen tạo thành 1 vòng tròn xung quanh trục dọc của quả. Kiwi vàng có vị ngọt mát rất đặc trưng. Ngoài những chất khoáng tương tự như Kiwi xanh, nó còn cung cấp thêm cho cơ thể chất sắt là 4% và 15% vitamin E, 13% axit folate. Kiwi vàng cũng chứa kali, acid folic và chất xơ, giúp bồi dưỡng sức khỏe cho trẻ em và phụ nữ sau khi sinh. Đặc biệt, hàm lượng vitamin C của kiwi vàng đạt 270% giúp cải thiện chức năng của hệ miễn dịch, phòng ngừa những tác động của chứng viêm gan và sự tấn công của virus và vi khuẩn, nâng cao sự miễn dịch. Kiwi vàng sẽ ngăn chặn việc tạo thành chất gelatin (chất keo) hoặc đông cục khi tiêu thụ các loại thực phẩm được chế biến từ sữa nhờ vào thành phần actindin. Kiwi còn tăng hiệu quả giảm cân nhờ chứa ít chất béo, ít calorie và không chứa cholesterol, giúp giảm thiểu nguy cơ bệnh lý ung thư và tim mạch, có lợi cho tiêu hóa, các bệnh hô hấp (nhất là ở trẻ em), kiểm soát huyết áp...  Kiwi vàng rất giàu dinh dưỡng và vitaminE. Do đó, chỉ cần hai quả kiwi là bạn đã có thể cung cấp được 1/3 năng lượng cần cho một ngày. Trong kiwi còn có chất giúp tẩy trắng răng, trị tàn nhang và ức chế quá trình oxy hóa làn da, đào thải các sắc tố đen giúp da sáng trắng, hồng hào và mịn màng. Các bà bầu ăn kiwi khi đang mang thai cũng giúp làn da đẹp hơn. Đặc biệt, Kiwi vàng còn có tác dụng hỗ trợ cho người giảm cân mà không gây ảnh hưởng xấu tới sức khỏe, bảo vệ ADN không bị đột biến, cung cấp hàm lượng chất chống ôxy hóa cho cơ thể', 8, 12, 39),
(28, 'Trái lê', 5000, 'traicay-le.png', 'K Lê là loại trái cây có thịt bên trong màu trắng, giòn, mọng nước và vị ngọt thanh. Vỏ lê mỏng, thịt ngọt nhẹ, nhiều nước và ít calo, giàu dưỡng chất nên đem lại nhiều lợi ích cho sức khoẻ và làm đẹp. Với vị ngọt tự nhiên, Lê có thể làm nguyên liệu cho món bánh, salad hay các loại nước uống giải khát. Và đặc biệt ăn ngon, ngọt hơn khi ướp lạnh.', 'Bổ sung chất xơ: bạn có thể được bổ sung chất xơ với hàm lượng từ 25-30g nếu dùng hằng ngày và kiểm soát lượng đường trong máu. Phòng ngừa viêm nhiễm: các chất trong lê có tác dụng chống viêm, giảm đau và viêm khớp. Tăng cường hệ miễn dịch: lê có hàm lượng vitamin như B2, B3, B6, C và các khoáng chất như canxi, folate, magie, đồng và mangan; góp phần tăng cường hệ thống miễn dịch của cơ thể. Vitamin C duy trì quá trình trao đổi chất, ngăn đột biến tế bào từ đó bảo vệ ADN cơ thể.\nMột quả lê hoàng kim trung bình nặng khoảng 166g sẽ chứa hàm lượng các chất như sau: Cung cấp carbohydrate dồi dào, giàu chất xơ cùng lượng vitamin C và các khoáng chất quan trọng cho cơ thể như đồng và kali. Ngoài ra lê hoàng kim cũng rất ít calo, hầu như không có chất béo. Trong 100g lê hoàng kim có 60-70 kcal. Tác dụng của lê hoàng kim đối với sức khỏe giống như nhiều loại trái cây và rau quả, lê hoàng kim mang lại lợi ích cho sức khỏe nhờ chất xơ và chất chống oxy hóa. Những hợp chất này có trong lê hoàng kim giúp hỗ trợ hệ thống miễn dịch, giảm viêm và giảm nguy cơ đột quỵ cũng như các bệnh mãn tính bao gồm tiểu đường, huyết áp cao và bệnh tim.\n', NULL, 12, 3),
(29, 'Trái mảng cầu', 12000, 'traicay-na.png', 'Chi Na (danh pháp khoa học: Annona) là một chi điển hình của họ Na (Annonaceae). Chi này có khoảng 100-170 loài chủ yếu là các cây hoặc cây bụi tân nhiệt đới có lá đơn, mọc so le và quả ăn được. Trong họ Na, chỉ có chi Guatteria có nhiều loài hơn chi Na. Một số loài na chỉ có ở châu Phi mà không có ở châu Á. Phương ngữ Nam Bộ gọi na là mãng cầu hay mẳng cầu.', 'Mãng cầu là loại cây được trồng phổ biến nhất và được khách hàng biết đến nhiều nhất là Tây Ninh và Vũng Tàu, hiện nay với khí hậu và thỗ nhưỡng phù hợp ãng cầu đã được trồng rộng rãi ở khắp các tỉnh miền tây và đông nam bộ.\nQuả Mãng cầu Na hay còn được gọi là quả Na có 2 loại: Na dai và Na bỡ đối với thị trường miền Nam cũng như Sài Gòn thì Na dai được bán phổ biến và có mặt hầu như ở khắp các quầy hàng kinh doanh trái cây Việt nam.\nĐặc điểm Mãng cầu Na tại Thế giới trái cây: nở gai, trái tròn đều, thịt dai ngọt đậm đà, cành lá xum xuê thích hợp cho việc thắp hương mỗi ngày cũng như gói vào giỏ quà.\nMãng cầu Na là loại trái cây cung cấp khoảng 1/5 lượng Vitamin C hằng ngày theo các nghiên cứu đã được chứng minh, ngoài ra nó còn là carbohydrate, kali, chất xơ, một số vitamin và khoáng chất thiết yếu nhưng lại không có cholesterol và chất béo bão hòa và ít natri.\nĐây là loại trái cây ngon, tốt cho da, tóc, thị lực, não và huyết sắc tố. Trong mãng cầu ta có các phân tử hoạt tính sinh học có đặc tính chống béo phì, chống tiểu đường và chống ', NULL, 12, 4),
(30, 'Nho', 18000, 'traicay-nhotim.png', 'Nho đỏ có phần thịt dày mọng nước, vị ngọt xen lẫn chua nhẹ hài hoà, là loại trái cây được nhiều người yêu thích vào những ngày hè. Loại nho đỏ Ninh Thuận  mang lại nhiều lợi ích đối với sức khoẻ, nho ngọt khi có vỏ màu đỏ tím, đậm, chín đều, chắc, mọng.', 'Nho đỏ có hạt: trái to tròn, giòn ngọt và rất nhiều nước và chùm rất to đây cũng là một ưu điểm vượt trội của dòng Peru so với các sản phẩm cùng chủng loại. Vỏ nho mỏng được bao phủ bởi lớp phấn tự nhiên nhờ lớp phấn này mà quả nho có thể đạt độ cứng trái lâu hơn nếu đã mất phấn. \nTại Thế giới trái cây chúng tôi luôn có những mẫu hộp quà giỏ quà dành riêng cho Nho đỏ có hạt để quý khách hàng có thể làm quà hoặc kết giỏ trái cây đi tặng vào các dịp đặc biệt: cỡ hộp vừa (khối lượng 2.5kg) và cỡ hộp lớn (khối lượng 4.5-5kg) cũng như hộp tim bằng gỗ. \nNho đỏ có hạt nói riêng và các loại nho nói chung với vô vàng công dụng dành cho người dùng nhưng một trong số đó có thể kể đến như: chống lão hoá, tốt cho tim mạch, giúp tăng cường thị lực mắt nhất là người già và trẻ nhỏ.\nCách bảo quản và dùng Nho đỏ có hạt Peru ngon nhất: sau khi mua về khách hàng không nên rửa Nho ngay trong trường hợp cần dùng liền có thể rửa sơ còn nếu muốn bảo quản Nho tươi cứng lâu thì cho vào tủ lạnh vì lớp phấn sẽ bảo vệ Nho giữ được độ tươi ở mức tối đa đến khi khách dùng sẽ ngon hơn. - Mua đỏ có hạt ở đâu: Nếu như bạn chưa biết hay còn phân vân về việc chọn một cửa hàng trái cây nhập khẩu để tìm mua Nho đỏ có hạt hay các loại trái cây cao cấp khác của Việt nam thì đến ngay Thế giới trái cây tại trung tâm Quận 1 để chọn cho mình sản phẩm tốt nhất về giá cũng như an tâm về chất lượng xuất xứ nguồn gốc.\n', 5, 12, 22);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int(11) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL COMMENT 'Biệt danh',
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: là nam, 1: là nữ',
  `SoDienThoai` varchar(50) NOT NULL,
  `Quyen` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: là user, 1: là admin',
  `NgayTao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `HoTen`, `UserName`, `Email`, `MatKhau`, `DiaChi`, `GioiTinh`, `SoDienThoai`, `Quyen`, `NgayTao`) VALUES
(1, 'Huynh Kha', 'Kha', 'khakha5087@gmail.com', 'kkk', 'Binh Dinh', 0, '0353123771', 1, '2023-11-09 23:34:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBV`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaDH`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
