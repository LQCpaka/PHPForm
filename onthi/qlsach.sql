-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 11, 2021 at 06:06 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

DROP TABLE IF EXISTS `chude`;
CREATE TABLE IF NOT EXISTS `chude` (
  `MaCD` int(11) NOT NULL AUTO_INCREMENT,
  `Tenchude` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`MaCD`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`MaCD`, `Tenchude`) VALUES
(5, 'Công nghệ thông tin'),
(6, 'Kinh tế'),
(12, 'Khoa học cơ bản'),
(20, 'Mỹ thuật'),
(21, 'Nghệ thuật'),
(22, 'Âm nhạc'),
(27, 'Nghệ thuật sống'),
(29, 'Giới tính & sinh lý'),
(33, 'Du lịch');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `MaKH` int(11) NOT NULL AUTO_INCREMENT,
  `HoTenKH` varchar(30) DEFAULT NULL,
  `DiachiKH` varchar(150) DEFAULT NULL,
  `DienthoaiKH` varchar(15) DEFAULT NULL,
  `TenDN` varchar(15) DEFAULT NULL,
  `Matkhau` varchar(15) DEFAULT NULL,
  `Ngaysinh` datetime(3) DEFAULT NULL,
  `Gioitinh` tinyint(4) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`MaKH`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

DROP TABLE IF EXISTS `nhaxuatban`;
CREATE TABLE IF NOT EXISTS `nhaxuatban` (
  `MaNXB` int(11) NOT NULL AUTO_INCREMENT,
  `TenNXB` varchar(100) DEFAULT NULL,
  `Diachi` varchar(150) DEFAULT NULL,
  `Dienthoai` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`MaNXB`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNXB`, `TenNXB`, `Diachi`, `Dienthoai`) VALUES
(1, 'Nhà xuất bản Trẻ', '161 Lý Chính Thắng - Q3, Tp.HCM', '08.9316211'),
(2, 'Nhà xuất bản Giáo Dục', '15 Nguyễn Huệ - Q1, Tp.HCM', '08.1232345'),
(3, 'Nhà xuất bản Kim đồng', '55 Quang Trung, Hà Nội', '04.944730'),
(4, 'Nhà xuất bản Đại học quốc gia', '03 Công trường Quốc tế - Q3, Tp.HCM', '087242181'),
(5, 'Nhà xuất bản Văn hóa nghệ thuật', '', ''),
(6, 'Nhà xuất bản Thể dục Thể thao', '48 Nguyễn Đình Chiểu - Q1, Tp.HCM (Chi nhánh)', '08.8298378'),
(7, 'Nhà xuất bản Phụ nữ', '16 Alexandre De Rhodes - Q1, Tp.HCM (Chi nhánh)', '08.8294459'),
(8, 'Nhà xuất bản Phương đông', '', ''),
(9, 'Nhà xuất bản Tổng hợp Tp.HCM', '62 Nguyễn Thị Minh Khai - Q1, Tp.HCM', '08.8225340'),
(11, 'Nhà xuất bản Thông tấn xã Việt Nam (ITAXA)', '126 Nguyễn Thị Minh - Q3, Tp.HCM', '0908256400');

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `MaSach` int(11) NOT NULL AUTO_INCREMENT,
  `TenSach` varchar(100) DEFAULT NULL,
  `MaCD` int(11) DEFAULT NULL,
  `MaNXB` int(11) DEFAULT NULL,
  `Dongia` decimal(10,2) DEFAULT NULL,
  `Mota` longtext,
  `AnhBia` varchar(100) DEFAULT NULL,
  `Ngaycapnhat` datetime(3) DEFAULT NULL,
  `Soluotxem` int(11) DEFAULT NULL,
  PRIMARY KEY (`MaSach`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `TenSach`, `MaCD`, `MaNXB`, `Dongia`, `Mota`, `AnhBia`, `Ngaycapnhat`, `Soluotxem`) VALUES
(29, 'Lý Thuyết Tài Chính', 6, 5, '23000.00', 'Cuốn sách này không đi vào chi tiết những chủ đề quản lý cổ điển đã được nhắc đến trong nhiều cuốn sách khác như tổ chức cuộc họp, cung cấp số liệu, quản lý thời gian. Mục đích của cuốn sách này là mang lại cho bạn \"\"nhiều hơn\"\", một giá trị gia tăng so với những gì bạn đã biết và đã áp dụng, và giúp bạn tối ưu hóa việc quản lý chuyên môn và quản lý nhân sự.', 'KT0006.jpg', NULL, 0),
(32, 'Adobe Photoshop 6.0', 5, 4, '21000.00', 'Cuốn sách Adobe Photoshop 6.0 và ImageReady 3.0 này sẽ giúp bạn tìm hiểu những tính năng tuyệt vời của phiên bản 6.0, nó cũng là con đường ngắn nhất cho những người mới sử dụng Photoshop lần đầu. Với bạn đọc đã sử dụng cuốn sách \"\"Adobe Photoshop 5.5 và ImageReady 2.0\"\" do MK.PUB biên soạn trước đây, cuốn sách này là một cách cập nhật nhanh chóng nhất.', 'TH005.jpg', NULL, 0),
(33, 'Lập Trình Mạng Windows', 5, 3, '16800.00', 'Chào mừng đến với \"\"Lập Trình Mạng Trên Windows (Ấn bản dành cho sinh viên)\"\". Quyển sách này sẽ hướng dẫn bạn sử dụng một cách hiệu quả bao gồm một số lượng lớn và đa dạng các hàm mạng sẵn có trong Windows 95, Windows 98, Windows NT 4, Windows CE, và Windows 2000/XP/. NET. Sách được chủ định viết dành cho những lập trình viên từ trung cấp đến cao cấp, tuy nhiên những lập trình viên mới bắt đầu tìm hiểu lập trình mạng cũng sẽ nhận thấy đây là một quyển sách không thể thiếu cho các bước xây dựng ứng dụng mạng sau này.', 'TH001.jpg', NULL, 0),
(9, 'Cấu Trúc Máy Vi Tính', 5, 1, '30000.00', 'Máy vi tính ngày càng giữ một vai trò quan trọng trong các lĩnh vực khoa học kỹ thuật và cuộc sống hàng ngày. Sự phát triển nhanh chóng của cả công nghệ phần cứng và phần mềm đã tạo nên các thế hệ máy mới cho phép thu nhập và xử lý dữ liệu ngày càng mạnh hơn. Tuy nhiên những cải tiến này vẫn dựa trên một số cơ sở ban đầu, chừng nào mà những nguyên tắc căn bản của máy tính vẫn chưa thay đổi. Vì vậy, việc mô tả một cách toàn diện tỉ mỉ cấu trúc của máy vi tính là điều khó khăn, nhất là phải đưa ra các thông tin vừa cơ bản, vừa cập nhật.', 'Cautrucmaytinh.jpg', NULL, 0),
(10, 'Nhà Khoa Học Trái Đất', 12, 7, '25000.00', 'Cho tới nay, con người đã hiểu biết được khá nhiều về lục địa, về đại dương, về các vì sao trên bầu trời. Hơn thế nữa, con người đã bay lên và đổ bộ xuống Mặt Trăng để khám phá những bí mật ở đó...', 'caosuvietnam.jpg', NULL, 0),
(12, 'Marketing Du Lịch', 33, 5, '27000.00', 'Cuốn Marketing Du Lịch (Sách Hướng Dẫn Du Lịch Việt Nam) này được biên soạn nhằm đáp ứng nhu cầu nghiên cứu, làm tài liệu tham khảo để vận dụng Marketing vào các Công ty Du lịch, Khách sạn Nhà hàng, Doanh nghiệp Lữ hành, Đại lý dụ lịch, Tour du lịch… Nội dung cuốn sách bao gồm :', 'Marketingdulich.jpg', NULL, 0),
(30, 'Quản Lý Trong Sản Xuất', 6, 4, '25000.00', 'Cuốn sách này gồm những nội dung chính sau:', 'KT0001.jpg', NULL, 0),
(31, 'Microsoft Word 2000', 5, 3, '16800.00', 'Cuốn sách này gồm những nội dung chính sau:', 'TH004.jpg', NULL, 0),
(35, 'Căn Bản Về Photoshop', 5, 7, '25000.00', 'Căn Bản Về Photoshop CS Tinh Chỉnh Và Xử Lý Màu gồm 12 chương:', 'TH002.jpg', NULL, 0),
(13, 'Nghiệp Vụ Khách Sạn', 33, 3, '24000.00', 'Kinh doanh khách sạn là kinh doanh dịch vụ đóng một vai trò quan trọng trong nền kinh tế quốc dân, đặc biệt là đối với những nước đang phát triển ngành du lịch.', 'Nghiepvuletan.jpg', NULL, 0),
(7, 'Cao Su Việt Nam', 6, 4, '18000.00', 'Cuốn sách Cao Su Việt Nam Thực Trạng Và Giải Pháp Phát Triển giới thiệu nội dung:', 'caosuvietnam.jpg', NULL, 0),
(8, 'Kiến Trúc Máy Tính', 5, 1, '30000.00', 'Giáo trình Kiến Trúc máy tính này trình bày các vấn đề chung nhất, các thành phần cơ bản nhất cấu thành nên Máy tính điện tử hiện đại.', 'Kientrucmaytinh.jpg', NULL, 0),
(16, 'Tìm Động Hoa Vàng', 22, 1, '26000.00', 'Nội dung tập Nhạc của Tác giả Phạm Duy \"\"Đưa Em Tìm Động Hoa Vàng\"\" giới thiệu các ca khúc:', 'Phamduy.jpg', NULL, 0),
(15, 'Văn Hóa Trung Quốc', 33, 2, '40000.00', 'Nền văn hóa phương Đông chứa đựng những thành phần quan trọng mà nền văn hóa Tây phương còn thiếu. Đúng là vì có sự tồn tại của người khác, mới có thể nhìn rõ được diện mạo của mình, mới có thể biết được mình là ai. Nếu không nhìn thấy nền văn hóa của những khu vực khác, có lẽ sẽ khiến mình sa vào những cảnh ngộ nguy hiểm. ', 'Vanhoatrungquoc.jpg', NULL, 0),
(17, 'Hát Nữa Đi Em', 22, 3, '42000.00', 'Tập sách hát \"\"Hát Nữa Đi Em\"\" tuyển chọn 100 ca khúc trữ tình được yêu thích nhất như: Thuyền Hoa; Trở về cát bụi; Ăn năn; Bến tương tư; Cho vừa lòng em; Hai mươi năm tình đẹp mùa chôm chôm; ...', 'Hatnuadiem.jpg', NULL, 0),
(18, 'Huyền Thoại Mẹ', 22, 4, '24500.00', 'Tuyển Tập Các Ca Khúc Về Mẹ \"\"Huyền Thoại Mẹ\"\" sẽ giới thiệu đến các bạn những bài hát đầy cảm xúc thương yêu và hùng tráng về người mẹ huyền thoại, người mẹ của đời thường. Sách gồm 50 bài hát của nhiều tác giả đã từng quen thuộc với chúng ta như : Vĩnh An, Xuân Hồng, Phó Đức Phương, Hoàng Việt, Thuận Yến... ', 'Huyenthoaime.jpg', NULL, 0),
(19, 'Như Đã Dấu Yêu', 22, 5, '40000.00', 'Cuốn sách này giới thiệu cùng các bạn 80 ca khúc được yêu thích như: Áo lụa Hà đông; Biệt khúc; Đêm thấy ta là thác đổ; Đóa hoa vô thường; Đừng xa em đêm nay; Đường xa ướt mưa; Em hãy ngủ đi v.v...', 'Nhudadauyeu.jpg', NULL, 0),
(14, 'Alô Việt Nam', 33, 5, '26500.00', 'Áp lực công việc và bao lo toan trong cuộc sống nhiều lúc làm bạn mệt mỏi và cảm thấy chán nản. Những ngày cuối tuần hay nghỉ phép được nghỉ ngơi cùng gia đình, bạn bè..., bạn cũng muốn đi đâu đó để giảm stress, chuẩn bị cho một tuần làm việc và học tập tiếp theo. Thế nhưng chơi gì, ở đâu luôn là câu hỏi làm bạn băn khoăn. Để giải quyết những khó khăn này. Cuốn sách \"\"Alô Việt Nam - Cẩm Nang Dịch Vu ﭠGiải Trí Thành Phố Hồ Chí Minh (Tập 1)\"\" cung cấp cho bạn những thông tin cần thiết như: địa chỉ, số điện thoại, các dịch vụ... của tất cả các điểm vui chơi giải trí trên địa bàn thành phố, giúp bạn dễ dàng lựa chọn được những dịch vụ tốt nhất, phù hợp nhất cho bạn và gia đình. Ngoài ra, còn cung cấp những thông tin chi tiết về các chương trình cần ở một chỗ mà vẫn có thể biết tất cả những hoạt động giải trí thành phố và tự chọn cho mình địc điểm phù hợp nhất để tận hưởng những giây phút nghỉ ngơi hiếm hoi với gia đình và bạn bè.', 'aloVietnam.jpg', NULL, 0),
(20, 'Ca Khúc Việt Nam', 22, 11, '50000.00', 'Tuyển Tập 101 Ca Khúc Việt Nam Quê Hương Tôi - Giai Điệu Tổ Quốc là một tuyển tập được thực hiện nghiêm túc, chọn lọc hầu hết các ca khúc viết về quê hương, đất nước được nhiều thành phần, nhiều thế hệ yêu thích. ', '101Cakhuc.jpg', NULL, 0),
(23, 'Thành Thạo Oracle 9i ', 5, 4, '21000.00', 'Mục đích của bộ sách này giúp bạn trở nên thành thạo cơ sở dữ liệu (CSDL) Oracle9i, đề cập đến tất cả những kiến thức cần thiết từ mô hình dữ liệu, quản trị CSDL, sao lưu phục hồi, mạng và xử lý sự cố cũng như hiệu chỉnh hiệu suất thực thi..., với sự kết hợp lý thuyết và thực hành về điều mà Nhà quản trị CSDL Oracle9i cần biết để sử dụng CSDL Oracle9i một cách hiệu quả từ chính bộ sách này.', 'TH006.jpg', NULL, 0),
(22, 'Lập Trình Visual Basic 6 ', 5, 3, '18000.00', 'Mục Lục:', 'TH008.jpg', NULL, 0),
(24, 'Mạng Máy Tính', 5, 3, '23000.00', 'Mạng Máy Tính Và Hệ Thống Bảo Mật gồm 7 chương:', 'KT0007.jpg', NULL, 0),
(27, 'Kinh Tế Trung Quốc', 6, 3, '21000.00', 'Cuốn sách này tập trung vào một số nội dung chính sau đây:', 'KT0004.jpg', NULL, 0),
(25, 'Tư Duy Chiến Lược', 6, 4, '18000.00', 'Khả năng hoạch định dài hạn đồng thời tối ưu hóa tình hình hoạt động ngắn hạn là một yêu cầu bắt buộc phải có đối với các nhà quản lý.Tư Duy Chiến Lược sẽ giúp bạn vạch ra con đường đến thành công đồng thời giúp hình thành các kỹ năng phân tích và hoạch định theo nhóm. Tất cả các lĩnh vực then chốt để hình thành và thực thi một chiến lược đều được trình bày cặn kẽ trong cuốn sách này, từ việc nghiên cứu và thu thập thông tin nền tảng, hình thành một chiến lược mới đến việc xem xét và ứng dụng chiến lược ấy. Cả thảy có 101 chỉ dẫn nhằm cung cấp cho các bạn những lời khuyên thực tiễn hơn, đồng thời bài tập tự đánh giá sẽ giúp bạn xác định xem mình là một nhà tư duy chiến lược hiệu quả đến mức nào. Khi bạn có nhiều tham vọng hơn về việc hoạch định cho tương lai, cẩm nang này sẽ là quyển sách tham khảo không thể thiếu, giúp suy nghĩ của bạn đi đúng hướng.', 'KT0003.jpg', NULL, 0),
(26, 'Quản Lý Dự Án', 6, 3, '61000.00', 'Để thành công trong môi trường kinh doanh cạnh tranh hiện nay, các giám đốc dự án phải đạt được kết quả trong phạm thời gian và ngân sách đưa ra. Biết cách áp dụng các quy trình, phương pháp và kỹ thuật chỉ dẫn trong cuốn Quản Lý Dự Án này, bạn sẽ tăng tối đa khả năng thực hiện công việc và đảm bảo đạt kết quả tối ưu khi thực hiện dự án.', 'KT0002.jpg', NULL, 0),
(28, 'Kinh Doanh Hiện Đại ', 6, 4, '61000.00', 'Cuốn sách này không đi vào chi tiết những chủ đề quản lý cổ điển đã được nhắc đến trong nhiều cuốn sách khác như tổ chức cuộc họp, cung cấp số liệu, quản lý thời gian. Mục đích của cuốn sách này là mang lại cho bạn \"\"nhiều hơn\"\", một giá trị gia tăng so với những gì bạn đã biết và đã áp dụng, và giúp bạn tối ưu hóa việc quản lý chuyên môn và quản lý nhân sự.', 'KT0005.jpg', NULL, 0),
(1, 'Con tôi đi học', 27, 2, '30000.00', 'Con tôi đi học và kết bạn hướng sự quan tâm nghiên cứu đến lứa tuổi từ 6 đến 12, là giai đoạn quan trọng thứ hai trong cuộc đời của trẻ. Đây cũng là lứa tuổi ham hiểu biết, khát khao tìm tòi cái mới, tựa như nhà thám hiểm dũng cảm một mình giong buồm hướng tới những bến bờ xa lạ. Và hơn hết, đây là giai đoạn khẳng định tính độc lập, ý thức về bản thân và thế giới mình đang sống.', 'con-toi-di-hoc.jpg', NULL, 0),
(2, 'Kỹ năng chăm sóc bé', 20, 3, '20000.00', 'Sách là những lời khuyên thiết thực cho những ai mới làm cha mẹ và đang phải đối phó với mọi tình huống rắc rối do trẻ mang lại.', 'khi-con-gian-doi.jpg', NULL, 0),
(3, 'Xua tan mọi rắc rối', 27, 3, '19000.00', 'Hãy để con thuyền cuộc đời lướt trôi nhẹ nhàng khi nó chỉ chuyên chở những thứ thật cần thiết: một tổ ấm đơn sơ, niềm vui sống thanh<b><u> sạch; một vài ng</u></b>ười bạn đáng quý, một ai đó để yêu và ai đó yêu mình; một chú mèo và một chú chó, mấy cái tẩu hút thuốc, chút gì đó để nhấp môi...\"\". Đây là lời tựa của cuốn sách mà NXB Trẻ trân trọng giới thiệu cùng bạn đọc.', 'xuatan.jpg', NULL, 0),
(5, 'Đàn ông nói dối', 29, 7, '26000.00', 'Một người phụ nữ chỉ cần biết rõ một người đàn ông là có thể hiểu tất cả đàn ông; nhưng một người đàn ông biết tất cả phụ nữ vẫn không hiểu rõ một người phụ nữ ”. (Helen Rowland). Quả thật, giữa họ là cả một mối quan hệ đầy phức tạp khó mà hòa hợp…', 'Noidoi-noinhieu.jpg', NULL, 0),
(6, 'Phụ nữ mạnh mẽ', 29, 5, '24000.00', 'Đúng như tên gọi của quyển sách, tác giả đưa ra những kinh nghiệm, những bí quyết để giúp người phụ nữ thay đổi bản thân, và trở thành người phụ nữ quyền năng - làm chủ bản thân, thành công trong sự nghiệp, tình cảm, cuộc sống đầy đủ và trọn vẹn. Các chương trong cuốn sách tập trung vào ba mục tiêu chính, mà theo tác giả đó là điều phụ nữ cần đạt được, đó là tự do, tình yêu và cuộc sống. Từng bước làm cụ thể con đường nhanh và hiệu quả để đạt ba mục tiêu đó, được tác giả trình bày thật dễ hiểu, ngôn từ giản dị, có sự kết hợp những câu nói của những nhân vật nổi tiếng, càng làm cho cuốn sách thêm sinh động và hấp dẫn.', 'Phunumanhme.jpg', NULL, 0),
(4, 'Đàn ông cũng khóc', 29, 7, '185000.00', 'Mỗi người đều có cách lựa chọn cho mình một cuộc sống riêng, xem ra ai cũng có cái lý của mình. Nh<b><u><font color=\"#000080\">ưng nếu chỉ nghĩ đến mình thôi thì thật khó có hạnh phú</font></u></b>c gia đình trọn vẹn. Bạn biết đấy, khi cuộc sống lứa đôi có vấn đề thì không chỉ có phụ nữ mới đau khổ mà đàn ông đôi khi cũng rơi lệ. Đàn ông khóc vì ở họ luôn tồn tại những mâu thuẫn mà nhiều khi chỉ có thể giải quyết bằng nước mắt. Còn đàn ông ghen... cũng cho đáng mặt đàn ông, nghĩa là không dại gì mà không ghen, nhưng ghen sao cho chính đáng chứ đừng ghen bậy, ghen ảo thì chẳng đáng được một tiếng ghen!Đàn ông rất dễ thương khi vào bếp vì đấy là cách họ chia sẻ những lo toan tất bật cùng người phụ nữ của mình. Những câu chuyện trong quyển sách này là những minh hoạ rất sinh động xoay quanh đời sống lứa đôi. Hy vọng được bạn đọc chia sẻ và rút ra những điều bổ ích cho mình vì \"\"Hôn nhân là mối quan hệ giữa người đàn ông và người đàn bà, mà sự độc lập của hai bên như nhau, sự phụ thuộc là ở cả hai phía, còn trách nhiệm là của cả hai người', 'Danongcungkhoc.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

DROP TABLE IF EXISTS `tacgia`;
CREATE TABLE IF NOT EXISTS `tacgia` (
  `MaTG` int(11) NOT NULL AUTO_INCREMENT,
  `TenTG` varchar(50) DEFAULT NULL,
  `Diachi` varchar(150) DEFAULT NULL,
  `Dienthoai` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`MaTG`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenTG`, `Diachi`, `Dienthoai`) VALUES
(1, 'Phạm Công Anh', '197 Trần Hưng Đạo, Quận 5', '0919123123'),
(2, 'Nguyễn Thế Giang', '50 Cư Xá Lũ Gia', NULL),
(3, 'Lê Việt Nhân', '90 Lê Lợi, Quận 1', NULL),
(4, 'Hồng Phúc', '180 Lý Chính Thắng, Quận 3', NULL),
(5, 'KS. Phạm Quang Quy', '506 Nam Kỳ Khởi Nghĩa, Quận 3', NULL),
(6, 'Nguyễn Bá Tiến', '60/2 Hoàng Văn Thụ', NULL),
(7, 'Phạm Hữu Khang', '123 Võ Thị Sáu, Q.3', NULL),
(8, 'Nguyễn Minh Đức', '500 Quang Trung, Quận Gò Vấp', NULL),
(9, 'Trần Văn Lăng', '890 Phan Văn Trị, Q.Bình Thạnh', NULL),
(10, 'Quách Tuấn Ngọc', '67 CMT8, Quận 3', NULL),
(11, 'Lê Đình Duy', '72 Hoàng Hoa Thám', NULL),
(12, 'Hoàng Kiếm', '50 Lý Thường Kiệt', NULL),
(13, 'Dương Anh Đức', '901 Lý Tự Trọng', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
