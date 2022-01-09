-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 04:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_docgia`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_docgia`
--

CREATE TABLE `tb_docgia` (
  `madg` varchar(10) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `namsinh` date NOT NULL,
  `nghenghiep` varchar(30) NOT NULL,
  `ngaycapthe` date NOT NULL,
  `ngayhethan` date NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_docgia`
--

INSERT INTO `tb_docgia` (`madg`, `hovaten`, `gioitinh`, `namsinh`, `nghenghiep`, `ngaycapthe`, `ngayhethan`, `diachi`) VALUES
('DG0', 'Nguyen  Van A', 'Nam', '2012-01-19', 'Hoc sinh', '2022-01-01', '2022-01-08', 'Thanh Hoa'),
('DG1', 'Le Huy Dung', 'Nam', '2001-04-10', 'Sinh vien', '2022-01-02', '2022-01-16', 'Thanh Hoa'),
('DG3', 'Le Huy Hoang', 'Nam', '2000-01-12', 'Sinh vien', '2022-01-07', '2022-01-31', 'Ha Noi'),
('DG3', 'Nguyen Dieu Thuan', 'Nu', '2000-12-28', 'Giao vien', '2022-01-05', '2022-01-29', 'HCM'),
('DG5', 'Nguyen Thi Tham', 'Nu', '2005-01-20', 'Tu do', '2022-01-03', '2022-01-13', 'Sapa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
