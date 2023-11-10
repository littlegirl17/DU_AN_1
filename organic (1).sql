-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th10 10, 2023 lúc 06:30 PM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `organic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `MaBV` int NOT NULL,
  `TieuDe` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `HinhAnh` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `HinhAnhDetail` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `MoTaNgan` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MoTa` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgayViet` datetime NOT NULL,
  `MaDM` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`MaBV`, `TieuDe`, `HinhAnh`, `HinhAnhDetail`, `MoTaNgan`, `MoTa`, `NgayViet`, `MaDM`) VALUES
(1, 'Tại sao buổi sáng nên ăn trái cây', 'baiviet-3.png', 'baiviet-1.png', 'Với nhiều người bữa sáng thường bao gồm các ...', 'Ăn trái cây giúp thải độc sau 1 giấc ngủ\r\nCơ thể chúng ta trải qua giai đoạn giải độc mạnh nhất trong khoảng từ 7-11 giờ sáng. Trái cây sẽ cung cấp thêm năng lượng cho quá trình này so với các loại thực phẩm chống giải độc chứa nhiều chất béo.\r\n\r\nTrái cây giúp tăng cường trao đổi chất\r\nĂn trái cây là cách tốt nhất để bắt đầu ngày mới vì cơ thể bạn sẽ dễ dàng tiêu hóa những thứ đầu tiên vào buổi sáng. Nó cũng dẫn đến tăng tỷ lệ trao đổi chất trong vài giờ tiếp theo nhờ vào lượng đường trái cây tự nhiên.\r\n\r\nKích thích đường tiêu hóa\r\nTrái cây cho bữa sáng giúp cung cấp các enzym, chất xơ và prebiotics có giá trị để kích hoạt dịch tiêu hóa trong dạ dày của chúng ta và loại bỏ các chất thải cũ từ ngày hôm trước. Chất xơ từ trái cây giúp làm sạch ruột kết một cách triệt để và giúp bạn cảm thấy nhẹ nhàng và sảng khoái trong suốt thời gian còn lại của ngày.\r\nTiêu thụ trái cây buổi sáng giúp cơ thể tỉnh táo\r\nCơ thể bạn cần đường trái cây tự nhiên ngay khi thức dậy. Hãy thử thay thế ly cà phê espresso của bạn bằng một tách trà thơm ngon tự nhiên bằng cách pha một ly sinh tố giúp não bộ của bạn nhanh nhẹn và tràn đầy năng lượng.\r\n\r\nGiảm cân\r\nTrái cây cung cấp cho bạn nguồn dinh dưỡng tuyệt vời và giúp loại bỏ độc tố dư thừa ra khỏi đường ruột của chúng ta. Ăn trái cây trong ngày bắt đầu từ buổi sáng sẽ giúp thải độc và làm sạch cơ thể, dẫn đến giảm cân. Một quan niệm sai lầm phổ biến là ăn một bữa sáng giàu protein động vật sẽ khiến bạn không ăn quá nhiều trong ngày. Tuy nhiên, các nghiên cứu đã phát hiện ra rằng tiêu thụ nhiều hơn vào buổi sáng sẽ có xu hướng ăn nhiều hơn vào cuối ngày, dẫn đến tăng cân.\r\nTham khảo thêm: những loại trà giảm cân hiệu quả\r\n\r\nTăng cường hệ thống miễn dịch\r\nCó một ly sinh tố lành mạnh thay vì thịt xông khói và xúc xích sẽ tốt hơn nhiều cho hệ thống miễn dịch và sức khỏe tổng thể của bạn về lâu dài. Trái cây có nhiều vitamin và chất chống oxy hóa tự nhiên, giúp tăng cường hệ thống miễn dịch của chúng ta và tránh các bệnh truyền nhiễm.\r\n\r\nTạo thành môi trường trung hoà cho các cơ quan\r\nMọi người lầm tưởng rằng trái cây quá chua, nhưng điều đó là sai. Trên thực tế, chanh là một trong những loại trái cây có tính kiềm cao nhất trên Trái đất. Mặc dù bản chất có thể có tính axit, nhưng khi chúng đến dạ dày của chúng ta, các khoáng chất sẽ phân ly, khiến nó có tính kiềm. Về cơ bản, tất cả các loại trái cây đều có tính kiềm, vì vậy bạn nên ăn chúng vào mỗi buổi sáng.\r\n\r\ntrái cây giúp thải độc\r\n\r\nTrái cây đem lại cảm giác no bụng và thoải mái\r\nNếu bạn không tin những lợi ích trên, bạn cũng có thể nghi ngờ rằng trái cây sẽ khiến bạn no. Hãy yên tâm, vì trái cây có đầy đủ chất xơ, vitamin, khoáng chất, dinh dưỡng thực vật – về cơ bản, những chất này có tác dụng cho não của bạn biết rằng nó đã thỏa mãn và tắt mọi tín hiệu đói đến dạ dày của bạn. Bạn cần phải ăn đủ trái cây để cảm thấy no, vì vậy hãy sẵn sàng tập chuyển hoàn toàn sang trái cây và tăng số lượng khi bạn đã quen với nó.\r\nMột số loại trái cây có nhiều tác dụng kể trên là trái bơ, mãng cầu.\r\n\r\nĂn trái cây tốt cho hệ tim mạch\r\nCác chất dinh dưỡng được đề cập ở trên – tất cả các vitamin, khoáng chất và chất chống oxy hóa rất tốt trong việc giảm mức cholesterol và huyết áp. Những chất này rất quan trọng trong việc ngăn ngừa các bệnh tim mạch và làm cho trái tim của bạn khỏe mạnh hơn.\r\n\r\nĂn trái cây tốt cho dạ dày, giảm chướng bụng\r\nCác chất xơ từ trái cây sẽ đẩy chất thải cũ trong hệ tiêu hóa của bạn ra ngoài và loại bỏ chứng đầy hơi ở bụng dưới. Các loại trái cây chứa nhiều nước như dưa hấu hoạt động như một loại thuốc lợi tiểu tự nhiên để loại bỏ lượng natri dư thừa. Khi bạn lấy hết muối ra, bạn sẽ không có lượng nước dư thừa đó.\r\n\r\nĐiều quan trọng là duy trì một chế độ ăn uống lành mạnh và cân bằng, đồng thời có nghĩa là chuyển sang trái cây, hãy nhớ bổ sung nhiều rau và thịt nạc để có được lượng chất dinh dưỡng đầy đủ. Ăn uống vui vẻ!', '2023-11-10 16:23:30', 12),
(2, '8 loại cá tốt cho sức khoẻ nên mua khi đi chợ', 'baiviet-2.png', 'baiviet-2.png', 'Dưới đây là những loại cá chứa nhiều chất dinh dưỡng, vitamin, protein.', 'Cá là một trong những thực phẩm quen thuộc với người Việt. Đây cũng là thực phẩm tốt cho sức khoẻ vì nó chứa nhiều chất dinh dưỡng quan trọng như protein và chất béo lành mạnh. Trong các loại cá thì cá biển chứa nhiều dinh dưỡng có lợi, đặc biệt là omega-3. Dưới đây là những loại cá tốt cho sức khoẻ bạn nên bổ sung thường xuyên.\r\n\r\nVì sao bạn nên ăn cá thường xuyên?\r\n\r\nCác chuyên gia dinh dưỡng khuyên chúng ta nên ăn cá ít nhất 2 lần một tuần, nhất là các loại cá giàu axit béo omega-3. Lý do cá là thực phẩm giá trị dinh dưỡng cao. Đó là nguồn protein quý, đủ các các axit amin cần thiết, chứa nhiều vitamin A, D, và chất béo lành mạnh. Thịt của cá thơm ngon, dễ nấu chín, dễ tiêu hóa và dễ hấp thu.\r\n\r\nBáo Sức khoẻ & Đời sống dẫn lời  BS. Trần Thị Bích Nga, chuyên gia dinh dưỡng cho biết, omega-3 là chất dinh dưỡng đặc biệt quan trọng đối với cơ thể và bộ não. Bộ não sử dụng omega-3 để xây dựng tế bào não và tế bào thần kinh, làm giảm các triệu chứng lo lắng, trầm cảm và giảm nguy cơ mắc các vấn đề về trí nhớ do tuổi tác.\r\n\r\nCá cũng là thực phẩm rất tốt đối với hệ tim mạch. Omega-3 trong cá giúp giảm nồng độ triglyceride trong máu và giảm tắc nghẽn mạch máu.\r\n\r\nNghiên cứu cho thấy, những người ăn cá thường xuyên có ít nguy cơ bị đau tim, đột quỵ và tử vong do bệnh tim. Cá cũng là một trong những nguồn cung cấp vitamin D, chất dinh dưỡng quan trọng rất dễ bị thiếu hụt.\r\n\r\nNhững loại cá tốt cho sức khoẻ bạn nên ăn thường xuyên\r\n\r\nDưới đây là những loại cá tốt cho sức khoẻ được các chuyên gia khuyên nên ăn thường xuyên:\r\n\r\nCá hồi\r\n\r\nBáo VnExpress dẫn nguồn trang Healthline cho biết, cá hồi dồi dào Omega 3 nhất. Trong 100g cá hồi có 2,3g Omega 3, tác dụng giảm lượng cholesterol trong cơ thể, duy trì tính linh hoạt của động mạch, tĩnh mạch và tăng cường cơ tim. Omega 3 cũng được cho là có tác dụng giảm huyết áp và ngăn ngừa cứng thành động mạch.\r\n\r\nCác protein trong cá hồi giúp cơ thể dễ tiêu hóa và hấp thụ dinh dưỡng. Cá hồi rất giàu vitamin và khoáng chất thiết yếu như sắt, canxi, phốt pho, selen, vitamin A, D, B. Đây là những dưỡng chất cần thiết cho sự chuyển hóa dinh dưỡng trong cơ thể người.\r\n\r\nCá cơm\r\nCá cơm là loài cá nhỏ, thân mảnh, sống gần các vùng ven biển. Mặc dù có kích thước nhỏ nhưng cá cơm rất giàu dinh dưỡng. Chúng chứa nhiều protein, khoáng chất và vitamin như A và D và là nguồn axit béo omega-3 chuỗi dài rất có lợi cho cơ thể.\r\n\r\nCá ngừ\r\n\r\nCá ngừ là loại cá chỉ di chuyển sâu dưới biển nên thịt mềm, thơm ngon, không bị ô nhiễm môi trường, tốt cho sức khỏe. Thịt cá ngừ có thể ức chế sự gia tăng cholesterol và ngăn ngừa xơ cứng động mạch. Đồng thời, nó tác dụng đặc biệt trong việc ngăn ngừa và điều trị các bệnh về tim mạch và mạch máu não.\r\n\r\nNgoài ra, cá ngừ giàu sắt, vitamin B12, omega-3 giúp cải thiện tình trạng thiếu máu, ngăn ngừa các vấn đề tim mạch ở người cao tuổi.\r\n\r\nCá thu\r\n\r\nBáo Lao động dẫn nguồn trang Aboluowang cho biết, cá thu là loại cá sinh trưởng nhanh và cho năng suất cao. Trong 100 gram thịt cá chứa 166 kcal, 21,4 gram protein và 7,4 gram chất béo, 486 mg kali.\r\n\r\nNgười cao tuổi thường xuyên ăn cá thu sẽ giúp ngăn ngừa các bệnh liên quan đến tim mạch, suy giảm trí nhớ, tiểu đường type 2.\r\n\r\nCá mòi\r\n\r\nCá mòi rất giàu omega-3, EPA và DHA có lợi cho sức khỏe. Những axit béo thiết yếu này giúp máu trong cơ thể lưu thông thuận lợi, duy trì một trái tim khỏe mạnh và ngăn ngừa khả năng mắc bệnh tim mạch. Người cao tuổi ăn cá mòi rất tốt cho tim mạch.\r\n\r\nBên cạnh đó, cá mòi còn chứa lượng lớn vitamin D rất tốt cho sức khỏe xương khớp của người lớn tuổi.\r\n\r\nCá tuyết\r\n\r\nCá tuyết là nguồn axit béo omega-3 và omega-6 tốt. Nó giàu vitamin B12 và B6 cũng như vitamin E, A và C. Đồng thời cung cấp phốt pho, kali, selen và các khoáng chất vi lượng khác cho cơ thể. Loài cá này cũng rất nạc và ít calo, khiến nó trở thành một trong những loại cá tốt nhất để giảm cân.\r\n\r\nCá trích\r\n\r\nCá trích thon dài, ít vảy, nhiều thịt, ít có vị tanh. Theo các chuyên gia, đây là loài cá rất giàu chất dinh dưỡng, còn được gọi là \"cá béo\" bởi dầu trong cá trích chứa nhiều axit béo omega-3 có lợi cho trí óc. Loại cá này thường được hun khói, đóng túi để bảo quản được lâu mà không mất đi giá trị dinh dưỡng.\r\n\r\nCá da trơn\r\n\r\nCá da trơn có thể sống ở cả nước ngọt và nước mặn. Đây là nguồn cung cấp axit béo omega 3 tốt cho não, tim, hệ miễn dịch và mắt. Cá da trơn cung cấp nhiều vitamin B12, giúp cơ thể tạo ra DNA và giữ cho các tế bào máu hoạt động bình thường.\r\n\r\nTrên đây là những loại cá rất tốt cho sức khoẻ. Hãy thường xuyên bổ sung cá vào chế độ ăn uống của mình nhé.\r\n\r\n', '2023-11-10 16:37:33', 13),
(3, 'Top 10 siêu trái cây tốt nhất cho sức khỏe của bạn', 'baiviet-1.png', 'baiviet-1.png', 'Nhiều người rất ít ăn trái cây và rau, dẫn đến thiếu vitamin, khoáng chất...', 'Nếu \"một quả táo mỗi ngày giúp bạn không phải đi bác sĩ\", thì đây là những loại trái cây tốt nhất giúp bạn tránh xa bệnh tật.\r\n\r\nSau đây là 10 loại trái cây tốt nhất:\r\n\r\n1. Lựu\r\nNghiên cứu cho thấy các chất chống oxy hóa mạnh mẽ trong lựu và nước ép có thể giúp đảo ngược tác hại của quá trình oxy hóa đối với hệ thống mạch máu, đóng vai trò chính trong khả năng đạt được và duy trì sự cương cứng.\r\n\r\nCó lẽ đây là lý do tại sao một số nhà thần học tin rằng quả lựu - chứ không phải quả táo - là trái cấm trong Vườn Địa đàng, theo tạp chí Men’s Journal.\r\n\r\n2. Táo\r\nMột quả táo cỡ trung bình chứa 4g chất xơ hòa tan, đạt 17% nhu cầu hằng ngày. Tiến sĩ Elson Haas, tác giả cuốn “Dinh dưỡng để giữ sức khỏe” (Mỹ), cho biết táo rất quan trọng đối với sức khỏe đường ruột và kiểm soát lượng đường trong máu. Nó cũng là nguồn cung cấp vitamin C tăng cường miễn dịch.\r\n\r\nTáo cũng chứa quercetin, có đặc tính kháng histamine và chống dị ứng.\r\n\r\n3. Quả việt quất\r\n\r\nQuả việt quất có hàm lượng calo thấp, trong khi vẫn giàu chất xơ, vitamin C và vitamin K. Đặc biệt, hàm lượng chất chống oxy hóa cao hỗ trợ sức khỏe tim mạch và chức năng não, theo trang web Olive.\r\n\r\n4. Cherry\r\n\r\nTiến sĩ Jonny Bowden, tác giả cuốn sách “150 loại thực phẩm lành mạnh nhất trên trái đất”, cho biết tình trạng viêm nhiễm trong cơ thể là căn nguyên của hầu hết bệnh tật.\r\n\r\nÔng Bowden nói, viêm mạn tính có thể tàn phá hệ thống mạch máu, nhưng rất nhiều người cũng bị viêm cấp tính do chấn thương thể thao. Các nghiên cứu cho thấy cherry có thể giúp giảm đau nhức, nhờ cherry chứa nồng độ anthocyanins 1 và 2 cao nhất, giúp ngăn chặn các enzym dẫn đến chứng viêm.\r\n\r\n5. Quả mâm xôi\r\n\r\nQuả mâm xôi có sức mạnh dinh dưỡng đặc biệt và hàm lượng vitamin K rất cao - chiếm 36% nhu cầu hằng ngày.\r\n\r\nNghiên cứu đã chứng minh quả mâm xôi giúp giảm nguy cơ ung thư tuyến tiền liệt. Nó cũng chứa nhiều mangan khoáng chất, giúp hỗ trợ sản xuất testosterone tối ưu cho nam giới.\r\n\r\nQuả mâm xôi cũng rất giàu chất chống oxy hóa lutein - ngăn ngừa thoái hóa điểm vàng, giúp tăng cường sức khỏe của mắt.\r\n\r\n6. Bưởi\r\nNghiên cứu “Chế độ ăn bưởi” nổi tiếng của Viện Nghiên cứu Scripps (Mỹ) cho thấy ăn nửa quả bưởi trước mỗi bữa ăn giúp giảm trung bình 1,5 kg trong 12 tuần.\r\n\r\nTiến sĩ Bowden cho biết, nhờ bưởi chứa chất ức chế sự thèm ăn tuyệt vời. Nó cũng chứa chất xơ hòa tan pectin có thể làm chậm sự tiến triển của xơ vữa động mạch.\r\n\r\nTuy nhiên, tránh ăn bưởi khi uống thuốc, vì nó tương tác với các enzym gan khiến thuốc lưu lại trong hệ thống lâu hơn, theo trang web Olive.\r\n\r\n7. Chanh\r\n\r\nTiến sĩ Haas luôn thực hiện 10 ngày thanh lọc cơ thể bằng nước chanh mỗi năm. Ông cho biết, axit citric trong chanh giúp phân hủy chất béo và kích thích dịch tiêu hóa. Vắt nửa quả chanh vào ly nước mỗi sáng giúp hỗ trợ chức năng gan và túi mật.\r\n\r\n8. Đu đủ\r\n\r\nEnzyme papain có trong đu đủ, đã được chứng minh là có tác dụng làm giải tỏa đầy hơi do khó tiêu. Một trong số các enzym khác như chymopapain, có tác dụng giảm viêm. Một chén đu đủ chín chứa 144% nhu cầu vitamin C hằng ngày (88 mg).\r\n\r\n9. Quả bơ\r\nBơ là loại trái cây đặc biệt bổ dưỡng, chứa rất nhiều chất béo không bão hòa đơn tốt cho tim mạch. Chỉ nửa quả bơ cung cấp 10% lượng kali hằng ngày và 30% lượng B6 hằng ngày, đồng thời cung cấp vitamin C, E và B5 - rất tốt cho người có mức căng thẳng cao, theo trang web Olive.\r\n\r\n10. Chuối\r\n\r\nChuối có thể mang lại lợi ích cho sức khỏe tim mạch và hệ tiêu hóa, nhờ vào thành phần chất xơ và chất chống oxy hóa. Do hàm lượng carb dễ tiêu hóa, chuối cũng là một món ăn nhẹ tuyệt vời để cung cấp năng lượng trước và sau khi tập luyện.', '2023-11-10 16:39:13', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int NOT NULL,
  `MaSP` int NOT NULL,
  `MaTK` int NOT NULL,
  `NoiDung` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `NgayBL` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `MaDH` int NOT NULL,
  `MaSP` int NOT NULL,
  `GiaSP` double(10,0) NOT NULL,
  `SoLuong` int NOT NULL,
  `TongTien` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int NOT NULL,
  `TenDM` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoThuTu` int DEFAULT NULL COMMENT 'số thứ tự mà danh mục sẽ xuất hiện , tùy mình sắp xếp',
  `UuTien` tinyint(1) DEFAULT NULL COMMENT '0: là cho nó ẩn đi, 1 là cho nó xuất hiện tại trang chủ',
  `HinhAnh` text COLLATE utf8mb3_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`, `SoThuTu`, `UuTien`, `HinhAnh`) VALUES
(11, 'Rau củ quả', NULL, NULL, 'cat-3.jpg'),
(12, 'Trái cây', NULL, NULL, 'cat-1.jpg'),
(13, 'Loại cá', NULL, NULL, 'cat-6.png'),
(14, 'Loại thịt', NULL, NULL, 'cat-5.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` int NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoDienThoai` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `Quyen` tinyint(1) NOT NULL DEFAULT '0',
  `GhiChu` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `TrangThai` int NOT NULL COMMENT '0.Đơn hàng mới 1.Đang xử lý 2.Đang giao hàng 3.Đã giao	',
  `TongTien` int NOT NULL DEFAULT '0',
  `NgayDat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `MaTK` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaGH` int NOT NULL,
  `MaTK` int NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `GiaSP` double(10,0) NOT NULL,
  `HinhAnh` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `SoLuong` int NOT NULL,
  `MaSP` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int NOT NULL,
  `TenSP` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `GiaSP` double(10,0) NOT NULL DEFAULT '0' COMMENT 'Tiền Việt không có chữ số thập phân, mặc định là 0(nếu =0 thì hết hàng ví dụ )',
  `HinhAnh` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `TieuDe` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `MoTa` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `Discount` int DEFAULT NULL COMMENT '% giảm giá của 1 sản phẩm',
  `New` tinyint(1) DEFAULT '0' COMMENT '0: Bình thường , 1: là sản phẩm mới(Sản Phẩm mới trên 1 session)',
  `MaDM` int DEFAULT NULL,
  `LuotXem` int NOT NULL,
  `LuotMua` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GiaSP`, `HinhAnh`, `TieuDe`, `MoTa`, `Discount`, `New`, `MaDM`, `LuotXem`, `LuotMua`) VALUES
(20, 'Ớt đỏ ', 5000, 'ot-do.png', NULL, NULL, NULL, NULL, 11, 3, 1),
(21, 'Trái bơ', 20000, 'traicay-bo.png', NULL, NULL, NULL, NULL, 12, 1, 1),
(22, 'Trái cam ', 20000, 'traicay-cam.png', NULL, NULL, NULL, 0, 12, 1, 0),
(23, 'Trái đào', 25000, 'traicay-dao.png', NULL, NULL, 5, 0, 12, 1, 1),
(24, 'Dưa hấu', 10000, 'traicay-duahau.png', NULL, NULL, NULL, 0, 12, 6, 1),
(25, 'Dưa lưới', 15000, 'traicay-dualuoi.png', NULL, NULL, 3, 0, 12, 7, 1),
(26, 'Trái đu đủ', 8000, 'traicay-dudu.png', NULL, NULL, NULL, 0, 12, 1, 1),
(27, 'Trái kiwi', 25000, 'traicay-kiwi.png', NULL, NULL, 8, 0, 12, 23, 1),
(28, 'Trái lê', 5000, 'traicay-le.png', NULL, NULL, NULL, 0, 12, 3, NULL),
(29, 'Trái mảng cầu', 12000, 'traicay-na.png', NULL, NULL, NULL, 0, 12, 1, NULL),
(30, 'Nho', 18000, 'traicay-nhotim.png', NULL, NULL, 5, 0, 12, 20, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTK` int NOT NULL,
  `HoTen` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `UserName` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL COMMENT 'Biệt danh',
  `Email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `MatKhau` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: là nam, 1: là nữ',
  `SoDienThoai` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `Quyen` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0: là user, 1: là admin',
  `NgayTao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTK`, `HoTen`, `UserName`, `Email`, `MatKhau`, `DiaChi`, `GioiTinh`, `SoDienThoai`, `Quyen`, `NgayTao`) VALUES
(1, 'Huynh Kha', 'Kha', 'khakha5087@gmail.com', 'kkk', 'Binh Dinh', 0, '0353123771', 1, '2023-11-09 23:34:11');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`MaBV`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`MaDH`,`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `MaTK` (`MaTK`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaGH`),
  ADD KEY `MaTK` (`MaTK`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `MaBV` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `MaDH` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaGH` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTK` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`MaDH`) REFERENCES `donhang` (`MaDH`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MaTK`) REFERENCES `taikhoan` (`MaTK`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
