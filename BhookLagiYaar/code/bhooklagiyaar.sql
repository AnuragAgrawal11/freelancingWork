-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 19, 2013 at 02:44 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bhooklagiyaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) NOT NULL,
  `ref_item_id` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `userid`, `ref_item_id`, `quantity`, `price`) VALUES
(39, 'aqauyb2wo0kkrkfztbmmjw45', 2, 10, NULL),
(40, '3iwgr1mwunnxjg55k1w3syia', 1, 1, NULL),
(41, '2jajdx55rjjr4wzaqcygokv1', 2, 1, NULL),
(42, 'dddn0v45nmuchperi0tqqf55', 2, 1, NULL),
(43, 'lrezk555d5hiqwuq3zorfsbf', 1, 1, NULL),
(44, 'lrezk555d5hiqwuq3zorfsbf', 1, 1, NULL),
(45, 'lrezk555d5hiqwuq3zorfsbf', 2, 1, NULL),
(46, 'y2xqbfiwj23fnn45zzqxrfyu', 1, 1, NULL),
(47, 'rghrnlnt5rsi5o45gxxgs545', 1, 10, NULL),
(48, '2ohqwn45vqbh5e55rm3z3t45', 1, 10, NULL),
(49, '4tr5he45vn5edj55osyafn55', 1, 1, NULL),
(50, 'pkylwi45dxtgt345tbheywfg', 2, 2, NULL),
(51, 'sdmcbfjzrtcdt345le3ejz3o', 2, 1, NULL),
(52, 'ah51fj55owod5zi4hjryz3b4', 1, 1, NULL),
(53, 'twwaaq550yewpx3hdmhfbe45', 1, 1, NULL),
(54, 'sknify55sbrt4r55h11bjbec', 2, 1, NULL),
(55, 'nxkzstqy14xqbqzkbgdvdymj', 1, 1, NULL),
(56, 'jjynsra3omfcz255gwrsae45', 2, 1, NULL),
(57, 'jokvqrbtpwhxgwnnqhdjl455', 1, 10, NULL),
(58, 'nfjxry45yilezb55joj24ku4', 1, 1, NULL),
(59, '5dnvg1iaonhljf55ewbbqj45', 2, 1, NULL),
(60, 'ecf5tq5500c1scnihcqqmr55', 1, 1, NULL),
(61, '2mvrb055dua0pt450avm2a34', 2, 9, NULL),
(62, 'rcfv1s55pv1zxlrppusl3tzn', 2, 1, NULL),
(63, 'mbe0c1asx4jzgy55x1vuwk45', 1, 2, NULL),
(64, '3or54qq5fjicuk45sugubj55', 1, 1, NULL),
(65, 'f2ap1e25avndgm55opqup2ez', 1, 4, NULL),
(73, 'fmfndny0sfei3p45scd3huqo', 1, 2, NULL),
(74, 'fmfndny0sfei3p45scd3huqo', 2, 1, NULL),
(75, 'ho31kvysw4ptff45jl3q5dzv', 1, 1, NULL),
(76, 'ho31kvysw4ptff45jl3q5dzv', 2, 1, NULL),
(79, 'dt2c0nflhpaypn55sjjhbdfe', 3, 3, NULL),
(80, 'lppebxr1n0vy0c45jc5m3c45', 3, 20, NULL),
(81, 'lppebxr1n0vy0c45jc5m3c45', 22, 1, NULL),
(83, 'uvuz0cuymdudfr45av5oma55', 3, 1, NULL),
(91, 'lrtakh55ukgouor5wy1l3c55', 23, 2, NULL),
(92, 'lrtakh55ukgouor5wy1l3c55', 22, 1, NULL),
(93, 'lrtakh55ukgouor5wy1l3c55', 3, 1, NULL),
(94, 'mzths045q4h0g0eyc4kpx3uf', 1, 2, NULL),
(95, 'mzths045q4h0g0eyc4kpx3uf', 2, 1, NULL),
(96, 'e1n2ua45cw1qeceg0lik0yab', 23, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `landmark` varchar(50) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `last_login_date` datetime DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `Username`, `mobile`, `email`, `password`, `address`, `landmark`, `pincode`, `created_date`, `last_login_date`, `status`) VALUES
(4, 'lalit Soni', '1234', 'test1@gmail.com', 'satya', 'New Delhi', 'dasda', '34211', '2013-03-17 10:38:31', '2013-03-17 10:38:31', 1),
(30, 'Test', '99923299', 'test@gmail.com', 'test', 'Noida', 'Noida', '12234', '2013-03-24 02:55:10', '2013-03-24 02:55:10', 1),
(31, 'lalit Soni', '880215534', 'test1@gmail.com', 'test1', 'New Delhi', '\nShipping Address', '21342', '2013-03-24 02:56:01', '2013-03-24 02:56:01', 1),
(35, 'Anu7rag', '', 'agrawal.anu90@gmail.com', '123', 'asdaadasd', 'asdasda', 'w4rw453', '', '0000-00-00 00:00:00', 1),
(36, 'Anurag Agrawal', '', 'asgda', 'hello', '', '', '', '', '0000-00-00 00:00:00', 1),
(39, 'An', 'asdasd', 'asdasd@asd.com', 'asda', 'asdasd', 'dasda', 'asdasdas', '', '0000-00-00 00:00:00', 1),
(40, 'Aasa', 'azsasd', 'asda@asdasd.com', 'asdasd', 'asdasd', 'dasdasd', 'dasdasd', '', '0000-00-00 00:00:00', 1),
(41, 'Anrua', '1231231', 'asd@asd.com', 'hello', 'asdasd', 'sdadad', '1231231', '12/05/13 : 08:21:46', '0000-00-00 00:00:00', 1),
(42, 'Anurag AG', 'aasda@asd.com', '789797', NULL, 'asdasdnn sdn asdna s', NULL, NULL, NULL, NULL, NULL),
(43, 'he', 'asd@asd.com', '12345', NULL, 'hello', NULL, NULL, NULL, NULL, NULL),
(44, 'Anurag 11', '12', '123123', NULL, 'b', NULL, NULL, NULL, NULL, NULL),
(45, 'Anurag 11', '12', '123123', NULL, 'b', NULL, NULL, NULL, NULL, NULL),
(46, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(47, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(48, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(49, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(50, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(51, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(52, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(53, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(54, 'tyagi', 'asd@asd.com', '439584359', NULL, 'kajsdkasdk', NULL, NULL, NULL, NULL, NULL),
(55, 'AMit', 'qwe@qwe.com', '81981928', NULL, 'askdjaldlasjdaljd', NULL, NULL, NULL, NULL, NULL),
(56, 'AMit', 'qwe@qwe.com', '81981928', NULL, 'askdjaldlasjdaljd', NULL, NULL, NULL, NULL, NULL),
(57, 'baba', '12', '2934', NULL, 'ad', NULL, NULL, NULL, NULL, NULL),
(58, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(59, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(60, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(61, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(62, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(63, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(64, '12', '1231', '12123123', NULL, '1aksdjkajs', NULL, NULL, NULL, NULL, NULL),
(65, 'baba', '123@123.com', '132', NULL, '123', NULL, NULL, NULL, NULL, NULL),
(66, '12', '1', '1', NULL, '123123', NULL, NULL, NULL, NULL, NULL),
(67, 'asd', 'asasd', 'asd', NULL, 'asdasdnn sdn asdna s', NULL, NULL, NULL, NULL, NULL),
(68, '12', '3123123', '123451', NULL, '23123', NULL, NULL, NULL, NULL, NULL),
(69, 'asdas', 'asdasda', 'asdasd', NULL, 'asdasd', NULL, NULL, NULL, NULL, NULL),
(70, '12312', '3123123', '123123131', NULL, '231231', NULL, NULL, NULL, NULL, NULL),
(71, 'q1wqw', 'qwe', 'eqwe', NULL, 'qwe', NULL, NULL, NULL, NULL, NULL),
(72, '123', '23123', '321231', NULL, '31231', NULL, NULL, NULL, NULL, NULL),
(73, 'asd', 'asasd', 'asd', NULL, 'asdas', NULL, NULL, NULL, NULL, NULL),
(74, 'sad', 'agrawal.anu90@gmail.', 'a', NULL, 'asdasdnn sdn asdna s', NULL, NULL, NULL, NULL, NULL),
(75, 'Anurag Agrawal', 'agrawal.anu90@gmail.', '9425787381', NULL, 'C-100, Ashok Vihar Karmchari Colony Alwar', NULL, NULL, NULL, NULL, NULL),
(76, 'Himanshu Tyagi', 'agrawal.anu90@gmail.', '9425787381', NULL, 'BH-3, Room No.-258, ABV-IIITM', NULL, NULL, NULL, NULL, NULL),
(77, 'Anurag', '123123', 'asd@asd.com', 'anurag11', 'asdasd', 'asda', 'sdasd', '18/05/13 : 22:17:01', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_restaurant_id` int(10) DEFAULT NULL,
  `ref_menu_category` int(10) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `is_ad_ons` int(10) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`item_id`),
  KEY `FK_Item_Restaurant` (`ref_restaurant_id`),
  KEY `FK_Item_M_Menu_Category` (`ref_menu_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `ref_restaurant_id`, `ref_menu_category`, `item_name`, `price`, `type`, `is_ad_ons`, `image`, `status`) VALUES
(1, 8, 1, 'Haka Noodals', '120.00', 0, 0, NULL, 0),
(2, 8, 1, 'noodals', '100.00', 0, 0, NULL, 0),
(3, 12, 3, 'Dosa', '100.00', 0, 0, NULL, 0),
(22, 12, 4, 'Momos', '40.00', 0, 0, NULL, 0),
(24, 12, 2, 'pav Bhaji', '200.00', 1, 2, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_area`
--

CREATE TABLE IF NOT EXISTS `m_area` (
  `area_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_city_id` int(10) DEFAULT NULL,
  `area_name` varchar(100) DEFAULT NULL,
  `area_pin` varchar(50) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`area_id`),
  KEY `FK_M_Area_M_City` (`ref_city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `m_area`
--

INSERT INTO `m_area` (`area_id`, `ref_city_id`, `area_name`, `area_pin`, `notes`, `status`) VALUES
(1, 2, 'Sector 22', '201301', '', 1),
(3, 3, 'Sector 22', '201301', '', 0),
(4, 3, 'Sector 62', '201301', '', 1),
(6, 28, 'Sec 20', 'New ', 'New populated area', 0),
(7, 6, 'Gomti Nagar', '1234567', 'The most adv area', 1),
(12, 4, 'Ashok Vihar', '301001', 'asdasdas', 1),
(13, 4, 'Vivek nagat', '0030014', 'Hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_city`
--

CREATE TABLE IF NOT EXISTS `m_city` (
  `city_id` int(10) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) DEFAULT NULL,
  `city_code` varchar(50) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `m_city`
--

INSERT INTO `m_city` (`city_id`, `city_name`, `city_code`, `notes`, `status`) VALUES
(2, 'New Delhi', 'ndls fgd', '  ', 1),
(3, 'Noida', 'NDA Delhi', ' Delhi', 1),
(4, 'Alwar', 'ALW', '   alasdasdasda', 1),
(6, 'Lucknow', 'lko', 'the city of nabab', 1),
(9, 'Gwalior', 'asd', '', 0),
(10, 'asdasd', 'asdasd', '', 0),
(11, 'Gwalior', 'asdasd', 'asdasdasdasd', 0),
(21, '', '', '', 1),
(22, '', '', '', 1),
(23, 'gwalior', 'Morena', 'hello', 1),
(24, 'gwalio', 'asdasd', 'dasdasdasd', 1),
(25, 'Noida', 'Hello Me ', 'asdasdasd', 1),
(26, 'Noida', 'NDA', '', 1),
(27, 'Noida', 'NDA', '', 1),
(28, 'Noida', 'NDA me na', 'asdasda', 1);

-- --------------------------------------------------------

--
-- Table structure for table `m_menu_category`
--

CREATE TABLE IF NOT EXISTS `m_menu_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `m_menu_category`
--

INSERT INTO `m_menu_category` (`category_id`, `category_name`, `notes`, `status`) VALUES
(1, 'Chinese', '', 1),
(2, 'Fast Food', '', 0),
(3, 'South Indian ', 'South Indian foods', 0),
(4, 'North Indian', 'Good ', 1),
(5, 'Fast Food', 'Its is Good', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_customer_id` int(10) DEFAULT NULL,
  `ref_restaurant_id` int(10) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `vat_tax` decimal(18,2) DEFAULT NULL,
  `shipping_charges` decimal(18,2) DEFAULT NULL,
  `service_charges` double NOT NULL,
  `total_pay_amount` decimal(18,2) DEFAULT NULL,
  `no_of_itmes` int(10) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `mode_of_payment` int(10) DEFAULT NULL,
  `payment_status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_Order_Restaurant` (`ref_restaurant_id`),
  KEY `FK_Order_Customer` (`ref_customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ref_customer_id`, `ref_restaurant_id`, `amount`, `vat_tax`, `shipping_charges`, `service_charges`, `total_pay_amount`, `no_of_itmes`, `order_date`, `mode_of_payment`, `payment_status`) VALUES
(1, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, '2013-05-01 00:00:00', NULL, NULL),
(2, 4, 12, '740.00', NULL, '20.00', 0, '760.00', 2, NULL, NULL, NULL),
(3, 4, 12, '340.00', NULL, '20.00', 0, '360.00', NULL, NULL, NULL, NULL),
(4, 4, 12, '800.00', NULL, '20.00', 0, '820.00', NULL, NULL, NULL, NULL),
(5, 4, 12, '540.00', NULL, '20.00', 0, '560.00', NULL, NULL, NULL, NULL),
(6, 4, 12, '1000.00', NULL, '20.00', 0, '1020.00', NULL, NULL, NULL, NULL),
(7, 4, 12, '400.00', NULL, '20.00', 0, '420.00', NULL, NULL, NULL, NULL),
(8, 4, 12, '540.00', NULL, '20.00', 0, '560.00', NULL, NULL, NULL, NULL),
(9, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, NULL, NULL, NULL),
(10, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, NULL, NULL, NULL),
(11, 4, 12, '400.00', NULL, '20.00', 0, '420.00', NULL, NULL, NULL, NULL),
(12, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, NULL, NULL, NULL),
(13, 4, 12, '340.00', NULL, '20.00', 0, '360.00', NULL, NULL, NULL, NULL),
(14, 4, 12, '340.00', NULL, '20.00', 0, '360.00', NULL, NULL, NULL, NULL),
(15, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, NULL, NULL, NULL),
(16, 4, 12, '440.00', NULL, '20.00', 0, '460.00', NULL, NULL, NULL, NULL),
(17, 4, 12, '440.00', NULL, '20.00', 0, '460.00', 2, NULL, NULL, NULL),
(18, 31, 7, '1320.00', NULL, '0.00', 0, '1320.00', 13, NULL, NULL, NULL),
(19, 31, 7, '340.00', NULL, '0.00', 0, '340.00', 3, NULL, NULL, '0'),
(20, 30, 7, '840.00', NULL, '0.00', 0, '840.00', 7, NULL, NULL, '0'),
(22, 56, 8, '320.00', '4000.00', '44.00', 50, '454.00', 0, '2013-05-18 00:00:00', 0, NULL),
(23, 57, 8, '320.00', '40.00', '44.00', 50, '454.00', 0, '2013-05-18 00:00:00', 0, NULL),
(24, 58, 8, '320.00', '40.00', '44.00', 50, '454.00', 0, '2013-05-18 00:00:00', 0, NULL),
(25, 59, 8, '320.00', '40.00', '44.00', 50, '454.00', 0, '2013-05-18 00:00:00', 0, NULL),
(26, 60, 8, '320.00', '40.00', '44.00', 50, '454.00', 0, '2013-05-18 00:00:00', 0, NULL),
(27, 61, 8, '320.00', '40.00', '44.00', 50, '454.00', 3, '2013-05-18 00:00:00', NULL, NULL),
(28, 62, 8, '320.00', '40.00', '44.00', 50, '454.00', 3, '2013-05-18 00:00:00', NULL, NULL),
(29, 63, 8, '320.00', '40.00', '44.00', 50, '454.00', 3, '2013-05-18 00:00:00', NULL, NULL),
(30, 64, 8, '320.00', '40.00', '44.00', 50, '454.00', 3, '2013-05-18 00:00:00', NULL, NULL),
(31, 65, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(32, 66, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(33, 67, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(34, 68, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(35, 69, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(36, 70, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(37, 71, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(38, 72, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(39, 73, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(40, 74, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(41, 75, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(42, 76, 8, '200.00', '25.00', '44.00', 50, '319.00', 2, '2013-05-18 00:00:00', NULL, NULL),
(43, 77, 8, '240.00', '30.00', '44.00', 50, '364.00', 2, '2013-05-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `ref_order_id` int(10) DEFAULT NULL,
  `ref_item_id` int(10) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` decimal(18,2) DEFAULT NULL,
  KEY `FK_Order_Items_Order` (`ref_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`ref_order_id`, `ref_item_id`, `quantity`, `price`) VALUES
(1, 3, 1, '100.00'),
(1, 22, 1, '40.00'),
(1, 23, 1, '300.00'),
(2, 3, 1, '100.00'),
(2, 23, 2, '300.00'),
(2, 22, 1, '40.00'),
(3, 23, 1, '300.00'),
(3, 22, 1, '40.00'),
(4, 3, 2, '100.00'),
(4, 23, 2, '300.00'),
(5, 3, 2, '100.00'),
(5, 23, 1, '300.00'),
(5, 22, 1, '40.00'),
(6, 3, 1, '100.00'),
(6, 23, 3, '300.00'),
(8, 3, 2, '100.00'),
(8, 22, 1, '40.00'),
(8, 23, 1, '300.00'),
(10, 3, 1, '100.00'),
(10, 22, 1, '40.00'),
(10, 23, 1, '300.00'),
(11, 3, 1, '100.00'),
(11, 23, 1, '300.00'),
(12, 3, 1, '100.00'),
(12, 22, 1, '40.00'),
(12, 23, 1, '300.00'),
(13, 22, 1, '40.00'),
(13, 23, 1, '300.00'),
(15, 3, 1, '100.00'),
(15, 22, 1, '40.00'),
(15, 23, 1, '300.00'),
(17, 3, 1, '100.00'),
(17, 23, 1, '300.00'),
(17, 22, 1, '40.00'),
(18, 1, 1, '120.00'),
(18, 2, 12, '100.00'),
(19, 1, 2, '120.00'),
(19, 2, 1, '100.00'),
(20, 1, 7, '120.00'),
(7, 3, 1, '100.00'),
(7, 23, 1, '300.00'),
(9, 3, 1, '100.00'),
(9, 22, 1, '40.00'),
(9, 23, 1, '300.00'),
(14, 23, 1, '300.00'),
(14, 22, 1, '40.00'),
(16, 22, 1, '40.00'),
(16, 23, 1, '300.00'),
(16, 3, 1, '100.00'),
(31, 2, 2, '100.00'),
(32, 2, 2, '100.00'),
(33, 2, 2, '100.00'),
(34, 2, 2, '100.00'),
(35, 2, 2, '100.00'),
(36, 2, 2, '100.00'),
(37, 2, 2, '100.00'),
(38, 2, 2, '100.00'),
(39, 2, 2, '100.00'),
(40, 2, 2, '100.00'),
(41, 2, 2, '100.00'),
(42, 2, 2, '100.00'),
(43, 1, 2, '120.00');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `restaurant_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `phone_1` varchar(20) DEFAULT NULL,
  `phone_2` varchar(20) DEFAULT NULL,
  `owner` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `open_time` varchar(255) DEFAULT NULL,
  `close_time` varchar(255) DEFAULT NULL,
  `type` int(10) DEFAULT NULL,
  `min_order_amount` decimal(18,2) DEFAULT NULL,
  `shipping_charges` decimal(18,2) DEFAULT NULL,
  `service_charges` decimal(18,2) DEFAULT NULL,
  `logo` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `ref_m_city` int(10) DEFAULT NULL,
  `ref_m_area` int(10) DEFAULT NULL,
  `shipping_radius` int(10) DEFAULT NULL,
  `facebook_link` varchar(10000) DEFAULT NULL,
  `payment_mode` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`restaurant_id`),
  KEY `FK_Restaurant_M_Area` (`ref_m_area`),
  KEY `FK_Restaurant_M_City` (`ref_m_city`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `name`, `mobile`, `phone_1`, `phone_2`, `owner`, `company`, `open_time`, `close_time`, `type`, `min_order_amount`, `shipping_charges`, `service_charges`, `logo`, `address`, `ref_m_city`, `ref_m_area`, `shipping_radius`, `facebook_link`, `payment_mode`, `status`) VALUES
(7, 'Pizza hut 1', '9920033422', 'sdf', 'sdf', 'Anurag Agrawal', 'Pizza hut', '2013-02-13 11:30:00', '2013-02-13 23:00:00', 0, '300.00', '0.00', '50.00', '1367737839_', 'sdf""', 3, 3, 3, 'asds', 0, 0),
(8, 'Test', '9920033422', 'sdf', 'sdfsdf', 'dfsdf', 'sdf', '2013-02-05 11:12:00', '2013-02-05 11:11:00', 2, '3.00', '44.00', '50.00', 'Multimedia/dom.gif', 'sdf', 3, 4, 3, 'facebook.com/pizzahut', 2, 0),
(9, 'Lazziz', '9920033422', '', '', 'Thapar', '', '2013-02-05 09:00:00', '2013-02-05 22:10:00', 2, '400.00', '40.00', '50.00', 'Multimedia/Thumb_e5b555a7.jpg', 'Noida', 3, 3, 3, 'facebook.com/lazziz', 2, 0),
(11, 'Pizza hut', '', '', '', 'jackson', '', '2013-02-13 11:12:00', '2013-02-13 11:00:00', 2, '3.00', '232.00', '50.00', 'Multimedia/pizza.png', '', 3, 4, 3, 'facebook.com/pizzahut', 0, 0),
(12, 'Bikaner ', '9920033422', '', '', 'singh', 'abc', '2013-02-17 09:30:00', '2013-02-17 09:30:00', 2, '300.00', '20.00', '0.00', 'Multimedia/Thumb_6e0f7252.jpg', '', 6, 7, 2, 'facebook.com/pizzahut', 2, 0),
(13, 'Haldi Ram', '9988998900900', '', '', 'vikas', '', '2013-03-06 08:30:00', '2013-03-06 20:30:00', 1, '100.00', '30.00', '20.00', 'Multimedia/Thumb_0d4aea31.png', '', 6, 7, 5, '', 0, 0),
(14, 'Haldi Ram', '9988998900900', '', '', 'vikas', '', '2013-03-06 08:30:00', '2013-03-06 20:30:00', 1, '100.00', '30.00', '20.00', 'Multimedia/Thumb_ce2b9779.png', '', 6, 7, 5, '', 0, 0),
(15, 'Shere Panjab', '131321231', '67', 'q6', 'Shere', 'panjab', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '12312.00', '123.00', NULL, '1367735843_imagesq.jpg', '77', 4, 13, 12, '', 2, 1),
(19, 'Central Park', '1231231', '768787', '876887', 'Anurag', 'asdasd', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '123.00', '2.00', '12.00', '1367787971_Untitled-3.jpg', '7687687', 2, 1, 1, '211asdasdasd', 1, 1),
(20, 'Central park', '1231321', '1231231', '123123', 'CP', 'VCP', '0000-00-00 00:00:00', '2013-05-05 00:00:00', 1, '1212.00', '12.00', '12.00', '1367788418_cookiesplash_by_neji55-d61p75z.jpg', 'hello', 3, 4, 12, '12121212', 1, 1),
(21, 'Central Park', '123123912390', '1902318293', '1921823', 'Anurag', 'hello', '02:16 PM', '05:40 PM', 1, '23123.00', '231.00', '2312.00', '1367788627_cookiesplash_by_neji55-d61p75z.jpg', 'akjdaksljslda', 2, 1, 123, '12312312', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sysdiagrams`
--

CREATE TABLE IF NOT EXISTS `sysdiagrams` (
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `principal_id` int(10) NOT NULL,
  `diagram_id` int(10) NOT NULL AUTO_INCREMENT,
  `version` int(10) DEFAULT NULL,
  `definition` varbinary(100) DEFAULT NULL,
  PRIMARY KEY (`diagram_id`),
  UNIQUE KEY `UK_principal_name` (`principal_id`,`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sysdiagrams`
--

INSERT INTO `sysdiagrams` (`name`, `principal_id`, `diagram_id`, `version`, `definition`) VALUES
('Diagram', 1, 1, 1, 'ÐÏà¡±\Zá\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0>\0\0þÿ	\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0þÿÿÿ\0\0\0\0\0\0\0\0ÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿÿ');

-- --------------------------------------------------------

--
-- Table structure for table `tblerrorinfo`
--

CREATE TABLE IF NOT EXISTS `tblerrorinfo` (
  `ErrorNumber` int(10) DEFAULT NULL,
  `ErrorSeverity` int(10) DEFAULT NULL,
  `ErrorState` int(10) DEFAULT NULL,
  `ErrorProcedure` varchar(50) DEFAULT NULL,
  `ErrorLine` int(10) DEFAULT NULL,
  `ErrorMessage` varchar(100) DEFAULT NULL,
  `Dated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_Item_M_Menu_Category` FOREIGN KEY (`ref_menu_category`) REFERENCES `m_menu_category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Item_Restaurant` FOREIGN KEY (`ref_restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `m_area`
--
ALTER TABLE `m_area`
  ADD CONSTRAINT `FK_M_Area_M_City` FOREIGN KEY (`ref_city_id`) REFERENCES `m_city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_Order_Customer` FOREIGN KEY (`ref_customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Order_Restaurant` FOREIGN KEY (`ref_restaurant_id`) REFERENCES `restaurant` (`restaurant_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `FK_Order_Items_Order` FOREIGN KEY (`ref_order_id`) REFERENCES `orders` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `FK_Restaurant_M_Area` FOREIGN KEY (`ref_m_area`) REFERENCES `m_area` (`area_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_Restaurant_M_City` FOREIGN KEY (`ref_m_city`) REFERENCES `m_city` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
