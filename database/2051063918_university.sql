
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `MONHOC` (
  `mamh` int(11) NOT NULL,
  `ten_mh` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sotinchi` int(11) ,
  `sotiet_lt` int(11) ,
  `sotiet_bt` int(11) ,
  `sotiet_thtn` int(11) ,
  `sogio_tuhoc` int(11) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
--

INSERT INTO `MONHOC` (`mamh`, `ten_mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'cong nghe web', 1, 2, 3, 4, 5),
(2, 'co so du lieu', 1, 2, 3, 4, 5);

--
-- Chỉ mục cho các bảng đã đổ
--


--
ALTER TABLE `MONHOC`
  ADD PRIMARY KEY (`mamh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--


--
ALTER TABLE `MONHOC`
  MODIFY `mamh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
