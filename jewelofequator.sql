-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2016 at 03:51 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jewelofequator`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `session_id` int(5) NOT NULL,
  `ip_address` varchar(25) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `last_activity` varchar(255) NOT NULL,
  `user_data` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`serial`, `name`, `email`, `address`, `phone`) VALUES
(1, '0', 'ariefstd.2006@gmail.com', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', '081231223434'),
(2, '0', '0', '0', '0'),
(3, '0', 'ariefstd.2006@gmail.com', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', '081231223434');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE IF NOT EXISTS `manufacturers` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`) VALUES
(1, 'Earrings'),
(2, 'Pendant'),
(3, 'Ring'),
(4, 'Bracelet');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `category` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `email_address`, `user_name`, `pass_word`, `category`) VALUES
(1, 'Home', 'Theater', 'ariefstd.2006@gmail.com', 'ariefstd.2006@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `paymentid` int(1) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`, `paymentid`) VALUES
(1, '2015-12-15', 1, 3),
(2, '2015-12-16', 1, 3),
(3, '2015-12-29', 2, 1),
(4, '2015-12-31', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `custemail` varchar(255) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderid`, `productid`, `quantity`, `price`, `custemail`) VALUES
(1, 1, 1, 1, 20, 'ariefstd.2006@gmail.com'),
(2, 2, 1, 1, 20, 'ariefstd.2006@gmail.com'),
(3, 3, 43, 3, 225, '0'),
(4, 4, 39, 1, 59.5, 'ariefstd.2006@gmail.com'),
(5, 4, 6, 3, 57.5, 'ariefstd.2006@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `order_discount`
--

CREATE TABLE IF NOT EXISTS `order_discount` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(80) NOT NULL,
  `discount` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `prod_email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_discount`
--

INSERT INTO `order_discount` (`id`, `email`, `discount`, `grand_total`, `payment`, `prod_email`) VALUES
(1, 'ariefstd.2006@gmail.com', 0, 0, 0, '0'),
(2, 'ariefstd.2006@gmail.com', 0, 0, 0, '0'),
(3, '0', 0, 0, 0, '0'),
(4, 'ariefstd.2006@gmail.com', 0, 0, 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`) VALUES
(1, 'Bank Transfer'),
(2, 'Cheque Payment'),
(3, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `serial` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE IF NOT EXISTS `property` (
  `serial` int(5) NOT NULL AUTO_INCREMENT,
  `web` varchar(255) NOT NULL,
  `manufacture_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `type_id` varchar(255) NOT NULL DEFAULT '',
  `image_name` varchar(255) NOT NULL DEFAULT '',
  `email_address` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`serial`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`serial`, `web`, `manufacture_id`, `name`, `description`, `qty`, `price`, `type_id`, `image_name`, `email_address`, `status`) VALUES
(1, 'DSE0244', '1', 'Love Flies to the Heart', '', 10, 20, '1', 'DSE0244.jpg ', '', 2),
(2, 'DSE0441', '1', 'Cross of Life', '', 1, 19.5, '1', 'DSE0441.jpg ', '', 2),
(3, 'DSE3493PP', '1', 'Cross of Pearl', '', 1, 34.5, '1', 'DSE3493PP.jpg ', '', 2),
(4, 'DSE0583', '1', 'Flower of Silver', '', 1, 19.5, '1', 'DSE0583.jpg ', '', 2),
(5, 'DSE6133ST', '1', 'Wings of Dreams', '', 1, 29.5, '1', 'DSE6133ST.jpg ', '', 2),
(6, 'DSE0123IBT', '1', 'Blue Iolite & Blue Topaz', '', 1, 57.5, '1', 'DSE0123IBT.jpg ', '', 1),
(7, 'DSE0004AMT', '1', 'Amethyst Stud', '', 1, 27.5, '1', 'DSE0004AMT.jpg ', '', 2),
(8, 'DSE0247WZ', '1', 'Zirconia Creole Thick Oval', '', 1, 90.75, '1', 'DSE0247WZ.jpg ', '', 2),
(9, 'DSE0012BT', '1', 'Blue Topaz Double Set', '', 1, 38.3, '1', 'DSE0012BT.jpg ', '', 2),
(10, 'DSE6133SMQ', '1', 'Wings of Flight Smokey Quartz', '', 1, 37, '1', 'DSE6133SMQ.jpg ', '', 2),
(11, 'DSE0026', '1', 'Rain Drops Zirconia Black Onox', '', 1, 51, '1', 'DSE0026.jpg ', '', 2),
(12, 'DSE0204PR', '1', 'Peridot Drops Oval/Rectangle Stones', '', 1, 65, '1', 'DSE0204PR.jpg ', '', 1),
(13, 'DSE0478BKY', '1', 'Blue Kynite Drop', '', 1, 84, '1', 'DSE0478BKY.jpg ', '', 2),
(14, 'DSEW030BT', '1', 'Blue Topaz Silver Flower Drop', '', 1, 52.25, '1', 'DSEW030BT.jpg ', '', 1),
(15, 'DSEW008BT', '1', 'Blue Topaz Drop', '', 1, 52.25, '1', 'DSEW008BT.jpg ', '', 2),
(16, 'DSEW008CT', '1', 'Citrine Drop', '', 1, 52.25, '1', 'DSEW008CT.jpg ', '', 1),
(17, 'DSEW0122CT', '1', 'Citrine on Silver Lace', '', 1, 46, '1', 'DSEW0122CT.jpg ', '', 1),
(18, 'DSEW024SF', '1', 'Blue Saphire Triangle Basket', '', 1, 68, '1', 'DSEW024SF.jpg ', '', 1),
(19, 'DSP7649AM', '2', 'Amethyst Star Burst', '', 1, 54, '1', 'DSP7649AM.jpg ', '', 1),
(20, 'DSP7649CT', '2', 'Citrine Star Burst', '', 1, 54, '1', 'DSP7649CT.jpg ', '', 1),
(21, 'DSP0323BT', '2', 'Blue Topaz', '', 1, 85, '1', 'DSP0323BT.jpg ', '', 1),
(22, 'DSP0130MS', '2', 'Moonstone', '', 1, 84, '1', 'DSP0130MS.jpg ', '', 1),
(23, 'DSP0206TQ', '2', 'Turquoise', '', 1, 61, '1', 'DSP0206TQ.jpg ', '', 1),
(24, 'DSP0483LPZ', '2', 'Lapis Lazuli', '', 1, 47, '1', 'DSP0483LPZ.jpg ', '', 1),
(25, 'DSP0520PR', '2', 'Peridot 4 Stone', '', 1, 45.5, '1', 'DSP0520PR.jpg ', '', 1),
(26, 'DSP0465CLA', '2', 'Chalcedony', '', 1, 44.5, '1', 'DSP0465CLA.jpg ', '', 2),
(27, 'DSP0466SMQ', '2', 'Smokey Quartz', '', 1, 42.45, '1', 'DSP0466SMQ.jpg ', '', 1),
(28, 'DSP0153AB', '2', 'Amber 2 Stones', '', 1, 52, '1', 'DSP0153AB.jpg ', '', 2),
(29, 'DSR0461FL', '3', 'Fluorite', '', 1, 59.5, '1', 'DSR0461FL.jpg ', '', 1),
(30, 'DSR0224AMT', '3', 'Amethyst Faceted Round 10mm', '', 1, 59.7, '1', 'DSR0224AMT.jpg ', '', 1),
(31, 'DSR032KPZ', '3', 'Blue Kynite Pearl & Zircon', '', 1, 93, '1', 'DSR032KPZ.jpg ', '', 1),
(32, 'DSR0493MN', '3', 'Mounite 3 with a Bassel Set', '', 1, 84, '1', 'DSR0493MN.jpg ', '', 2),
(33, 'DSR0433CT', '3', 'Citrine', '', 1, 147, '1', 'DSR0433CT.jpg ', '', 1),
(34, 'DSR0335AM', '3', 'Amethyst Teardrop', '', 1, 45.95, '1', 'DSR0335AM.jpg ', '', 2),
(35, 'DSR0333TE', '3', 'Tiger Eye', '', 1, 52, '1', 'DSR0333TE.jpg ', '', 1),
(36, 'DSR0324CTZ', '3', 'Citrine & Zirconia', '', 1, 59, '1', 'DSR0324CTZ.jpg ', '', 2),
(37, 'DSR0324SQZ', '3', 'Smokey Quartz', '', 1, 59, '1', 'DSR0324SQZ.jpg ', '', 1),
(38, 'DSR0324AMZ', '3', 'Amethyst 10cm Round', '', 1, 59, '1', 'DSR0324AMZ.jpg ', '', 2),
(39, 'DSR0349CLN', '3', 'Carnelian Marquise', '', 1, 59.5, '1', 'DSR0349CLN.jpg ', '', 1),
(40, 'DSR0440TQ', '3', 'Turquoise Oval', '', 1, 81, '1', 'DSR0440TQ.jpg ', '', 2),
(41, 'DSR0443CR', '3', 'Charoit 3 Purple Stone', '', 1, 87, '1', 'DSR0443CR.jpg ', '', 1),
(42, 'DSB0266SCT', '4', 'Smokey Pears with Citrine Hearts', '', 0, 86.5, '1', 'DSB0266SCT.jpg ', '', 1),
(43, 'DSB0047OMS', '4', 'Onyx & Moonstone', '', 1, 225, '1', 'DSB0047OMS.jpg ', '', 1),
(44, 'DSB0026RMS', '4', 'Rainbow Moonstone', '', 1, 139, '1', 'DSB0026RMS.jpg ', '', 1),
(45, 'DSB0265BW', '4', 'Baroque Pearls with Moonbeams of Blue Marve', '', 1, 139, '1', 'DSB0265BW.jpg ', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_billing`
--

CREATE TABLE IF NOT EXISTS `tbl_billing` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_billing`
--

INSERT INTO `tbl_billing` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, 'AL', 'Home', 'Theater', '0', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', 'Joglo Raya', '0', '55555', 'ariefstd.2006@gmail.com', 'ariefstd.2006@gmail.com', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', '081231223434', 1),
(2, '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '0', 1),
(3, 'AL', 'Home', 'Theater', '0', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', 'Joglo Raya', '0', '55555', 'ariefstd.2006@gmail.com', '', '', '081231223434', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catmember`
--

CREATE TABLE IF NOT EXISTS `tbl_catmember` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `category` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_catmember`
--

INSERT INTO `tbl_catmember` (`id`, `category`) VALUES
(1, 'buyer'),
(2, 'reseler'),
(3, 'partner'),
(4, 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_countries`
--

CREATE TABLE IF NOT EXISTS `tbl_countries` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=265 ;

--
-- Dumping data for table `tbl_countries`
--

INSERT INTO `tbl_countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'BQ', 'British Antarctic Territory'),
(32, 'IO', 'British Indian Ocean Territory'),
(33, 'VG', 'British Virgin Islands'),
(34, 'BN', 'Brunei'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CA', 'Canada'),
(41, 'CT', 'Canton and Enderbury Islands'),
(42, 'CV', 'Cape Verde'),
(43, 'KY', 'Cayman Islands'),
(44, 'CF', 'Central African Republic'),
(45, 'TD', 'Chad'),
(46, 'CL', 'Chile'),
(47, 'CN', 'China'),
(48, 'CX', 'Christmas Island'),
(49, 'CC', 'Cocos [Keeling] Islands'),
(50, 'CO', 'Colombia'),
(51, 'KM', 'Comoros'),
(52, 'CG', 'Congo - Brazzaville'),
(53, 'CD', 'Congo - Kinshasa'),
(54, 'CK', 'Cook Islands'),
(55, 'CR', 'Costa Rica'),
(56, 'HR', 'Croatia'),
(57, 'CU', 'Cuba'),
(58, 'CY', 'Cyprus'),
(59, 'CZ', 'Czech Republic'),
(60, 'CI', 'C?te d?Ivoire'),
(61, 'DK', 'Denmark'),
(62, 'DJ', 'Djibouti'),
(63, 'DM', 'Dominica'),
(64, 'DO', 'Dominican Republic'),
(65, 'NQ', 'Dronning Maud Land'),
(66, 'DD', 'East Germany'),
(67, 'EC', 'Ecuador'),
(68, 'EG', 'Egypt'),
(69, 'SV', 'El Salvador'),
(70, 'GQ', 'Equatorial Guinea'),
(71, 'ER', 'Eritrea'),
(72, 'EE', 'Estonia'),
(73, 'ET', 'Ethiopia'),
(74, 'FK', 'Falkland Islands'),
(75, 'FO', 'Faroe Islands'),
(76, 'FJ', 'Fiji'),
(77, 'FI', 'Finland'),
(78, 'FR', 'France'),
(79, 'GF', 'French Guiana'),
(80, 'PF', 'French Polynesia'),
(81, 'TF', 'French Southern Territories'),
(82, 'FQ', 'French Southern and Antarctic Territories'),
(83, 'GA', 'Gabon'),
(84, 'GM', 'Gambia'),
(85, 'GE', 'Georgia'),
(86, 'DE', 'Germany'),
(87, 'GH', 'Ghana'),
(88, 'GI', 'Gibraltar'),
(89, 'GR', 'Greece'),
(90, 'GL', 'Greenland'),
(91, 'GD', 'Grenada'),
(92, 'GP', 'Guadeloupe'),
(93, 'GU', 'Guam'),
(94, 'GT', 'Guatemala'),
(95, 'GG', 'Guernsey'),
(96, 'GN', 'Guinea'),
(97, 'GW', 'Guinea-Bissau'),
(98, 'GY', 'Guyana'),
(99, 'HT', 'Haiti'),
(100, 'HM', 'Heard Island and McDonald Islands'),
(101, 'HN', 'Honduras'),
(102, 'HK', 'Hong Kong SAR China'),
(103, 'HU', 'Hungary'),
(104, 'IS', 'Iceland'),
(105, 'IN', 'India'),
(106, 'ID', 'Indonesia'),
(107, 'IR', 'Iran'),
(108, 'IQ', 'Iraq'),
(109, 'IE', 'Ireland'),
(110, 'IM', 'Isle of Man'),
(111, 'IL', 'Israel'),
(112, 'IT', 'Italy'),
(113, 'JM', 'Jamaica'),
(114, 'JP', 'Japan'),
(115, 'JE', 'Jersey'),
(116, 'JT', 'Johnston Island'),
(117, 'JO', 'Jordan'),
(118, 'KZ', 'Kazakhstan'),
(119, 'KE', 'Kenya'),
(120, 'KI', 'Kiribati'),
(121, 'KW', 'Kuwait'),
(122, 'KG', 'Kyrgyzstan'),
(123, 'LA', 'Laos'),
(124, 'LV', 'Latvia'),
(125, 'LB', 'Lebanon'),
(126, 'LS', 'Lesotho'),
(127, 'LR', 'Liberia'),
(128, 'LY', 'Libya'),
(129, 'LI', 'Liechtenstein'),
(130, 'LT', 'Lithuania'),
(131, 'LU', 'Luxembourg'),
(132, 'MO', 'Macau SAR China'),
(133, 'MK', 'Macedonia'),
(134, 'MG', 'Madagascar'),
(135, 'MW', 'Malawi'),
(136, 'MY', 'Malaysia'),
(137, 'MV', 'Maldives'),
(138, 'ML', 'Mali'),
(139, 'MT', 'Malta'),
(140, 'MH', 'Marshall Islands'),
(141, 'MQ', 'Martinique'),
(142, 'MR', 'Mauritania'),
(143, 'MU', 'Mauritius'),
(144, 'YT', 'Mayotte'),
(145, 'FX', 'Metropolitan France'),
(146, 'MX', 'Mexico'),
(147, 'FM', 'Micronesia'),
(148, 'MI', 'Midway Islands'),
(149, 'MD', 'Moldova'),
(150, 'MC', 'Monaco'),
(151, 'MN', 'Mongolia'),
(152, 'ME', 'Montenegro'),
(153, 'MS', 'Montserrat'),
(154, 'MA', 'Morocco'),
(155, 'MZ', 'Mozambique'),
(156, 'MM', 'Myanmar [Burma]'),
(157, 'NA', 'Namibia'),
(158, 'NR', 'Nauru'),
(159, 'NP', 'Nepal'),
(160, 'NL', 'Netherlands'),
(161, 'AN', 'Netherlands Antilles'),
(162, 'NT', 'Neutral Zone'),
(163, 'NC', 'New Caledonia'),
(164, 'NZ', 'New Zealand'),
(165, 'NI', 'Nicaragua'),
(166, 'NE', 'Niger'),
(167, 'NG', 'Nigeria'),
(168, 'NU', 'Niue'),
(169, 'NF', 'Norfolk Island'),
(170, 'KP', 'North Korea'),
(171, 'VD', 'North Vietnam'),
(172, 'MP', 'Northern Mariana Islands'),
(173, 'NO', 'Norway'),
(174, 'OM', 'Oman'),
(175, 'PC', 'Pacific Islands Trust Territory'),
(176, 'PK', 'Pakistan'),
(177, 'PW', 'Palau'),
(178, 'PS', 'Palestinian Territories'),
(179, 'PA', 'Panama'),
(180, 'PZ', 'Panama Canal Zone'),
(181, 'PG', 'Papua New Guinea'),
(182, 'PY', 'Paraguay'),
(183, 'YD', 'People''s Democratic Republic of Yemen'),
(184, 'PE', 'Peru'),
(185, 'PH', 'Philippines'),
(186, 'PN', 'Pitcairn Islands'),
(187, 'PL', 'Poland'),
(188, 'PT', 'Portugal'),
(189, 'PR', 'Puerto Rico'),
(190, 'QA', 'Qatar'),
(191, 'RO', 'Romania'),
(192, 'RU', 'Russia'),
(193, 'RW', 'Rwanda'),
(194, 'RE', 'Réunion'),
(195, 'BL', 'Saint Barthélemy'),
(196, 'SH', 'Saint Helena'),
(197, 'KN', 'Saint Kitts and Nevis'),
(198, 'LC', 'Saint Lucia'),
(199, 'MF', 'Saint Martin'),
(200, 'PM', 'Saint Pierre and Miquelon'),
(201, 'VC', 'Saint Vincent and the Grenadines'),
(202, 'WS', 'Samoa'),
(203, 'SM', 'San Marino'),
(204, 'SA', 'Saudi Arabia'),
(205, 'SN', 'Senegal'),
(206, 'RS', 'Serbia'),
(207, 'CS', 'Serbia and Montenegro'),
(208, 'SC', 'Seychelles'),
(209, 'SL', 'Sierra Leone'),
(210, 'SG', 'Singapore'),
(211, 'SK', 'Slovakia'),
(212, 'SI', 'Slovenia'),
(213, 'SB', 'Solomon Islands'),
(214, 'SO', 'Somalia'),
(215, 'ZA', 'South Africa'),
(216, 'GS', 'South Georgia and the South Sandwich Islands'),
(217, 'KR', 'South Korea'),
(218, 'ES', 'Spain'),
(219, 'LK', 'Sri Lanka'),
(220, 'SD', 'Sudan'),
(221, 'SR', 'Suriname'),
(222, 'SJ', 'Svalbard and Jan Mayen'),
(223, 'SZ', 'Swaziland'),
(224, 'SE', 'Sweden'),
(225, 'CH', 'Switzerland'),
(226, 'SY', 'Syria'),
(227, 'ST', 'São Tomé and Príncipe'),
(228, 'TW', 'Taiwan'),
(229, 'TJ', 'Tajikistan'),
(230, 'TZ', 'Tanzania'),
(231, 'TH', 'Thailand'),
(232, 'TL', 'Timor-Leste'),
(233, 'TG', 'Togo'),
(234, 'TK', 'Tokelau'),
(235, 'TO', 'Tonga'),
(236, 'TT', 'Trinidad and Tobago'),
(237, 'TN', 'Tunisia'),
(238, 'TR', 'Turkey'),
(239, 'TM', 'Turkmenistan'),
(240, 'TC', 'Turks and Caicos Islands'),
(241, 'TV', 'Tuvalu'),
(242, 'UM', 'U.S. Minor Outlying Islands'),
(243, 'PU', 'U.S. Miscellaneous Pacific Islands'),
(244, 'VI', 'U.S. Virgin Islands'),
(245, 'UG', 'Uganda'),
(246, 'UA', 'Ukraine'),
(247, 'SU', 'Union of Soviet Socialist Republics'),
(248, 'AE', 'United Arab Emirates'),
(249, 'GB', 'United Kingdom'),
(250, 'US', 'United States'),
(251, 'ZZ', 'Unknown or Invalid Region'),
(252, 'UY', 'Uruguay'),
(253, 'UZ', 'Uzbekistan'),
(254, 'VU', 'Vanuatu'),
(255, 'VA', 'Vatican City'),
(256, 'VE', 'Venezuela'),
(257, 'VN', 'Vietnam'),
(258, 'WK', 'Wake Island'),
(259, 'WF', 'Wallis and Futuna'),
(260, 'EH', 'Western Sahara'),
(261, 'YE', 'Yemen'),
(262, 'ZM', 'Zambia'),
(263, 'ZW', 'Zimbabwe'),
(264, 'AX', 'Åland Islands');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_savecustomer`
--

CREATE TABLE IF NOT EXISTS `tbl_savecustomer` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_savecustomer`
--

INSERT INTO `tbl_savecustomer` (`id`, `email`, `password`) VALUES
(1, 'ariefstd.2006@gmail.com', '12345'),
(2, 'ariefstd.2006@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, 'AF', '', '', '0', '', '', '0', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_checkout`
--

CREATE TABLE IF NOT EXISTS `tb_checkout` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_checkout`
--

INSERT INTO `tb_checkout` (`id`, `country`, `first_name`, `last_name`, `companyname`, `address`, `city`, `state`, `zip`, `email_address`, `email2`, `address2`, `phone`, `status`) VALUES
(1, 'AL', 'Home', 'Theater', 'Surimbot & Co', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', 'Joglo Raya', '0', '55555', 'ariefstd.2006@gmail.com', 'ariefstd.2006@gmail.com', 'Jl Pelanpelanbanyakanakanaketjil no 123, Jakarta', '081231223434', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_insertimage`
--

CREATE TABLE IF NOT EXISTS `tb_insertimage` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `datenow` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_insertimage`
--

INSERT INTO `tb_insertimage` (`id`, `name`, `datenow`) VALUES
(3, 'test.jpg', '2015-12-03'),
(4, 'cart-sblm-login-blm-ada-billing-info.jpg', '2015-12-03');

-- --------------------------------------------------------

--
-- Table structure for table `tb_menufeed`
--

CREATE TABLE IF NOT EXISTS `tb_menufeed` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tb_menufeed`
--

INSERT INTO `tb_menufeed` (`id`, `title`, `description`, `author`) VALUES
(1, 'Sunset Lake', 'A peaceful sunset view...', 'by j osborn'),
(2, 'Bridge to Heaven', 'Where is the bridge lead to?', 'by SigitEko'),
(3, 'Autumn', 'The fall of the tree...', 'by Lars van de Goor'),
(4, 'Winter Whisper', 'Winter feel...', 'by Andrea Andrade'),
(5, 'Light', 'The only shinning light...', 'by Lars van de Goor'),
(6, 'Rooster''s Ranch', 'Rooster''s ranch landscape...', 'by Andrea Andrade'),
(7, 'Herringfleet Mill', 'Just a herringfleet mill...', 'by Ian Flindt'),
(8, 'Autumn Light', 'Sun shinning into forest...', 'by Lars van de Goor'),
(9, 'Battle Field', 'Battle Field for you...', 'by Andrea Andrade'),
(10, 'Yellow cloudy', 'It is yellow cloudy...', 'by Zsolt Zsigmond'),
(11, 'Sundays Sunset', 'Beach view sunset...', 'by Robert Strachan'),
(12, 'Herringfleet Mill', 'Just a herringfleet mill...', 'by Ian Flindt'),
(13, 'Autumn Light', 'Sun shinning into forest...', 'by Lars van de Goor'),
(14, 'Battle Field', 'Battle Field for you...', 'by Andrea Andrade'),
(15, 'Beach', 'Something on beach...', 'by unknown'),
(16, 'Sundays Sunset', 'Beach view sunset...', 'by Robert Strachan'),
(17, 'Sun Flower', 'Good Morning Sun flower...', 'by Zsolt Zsigmond'),
(18, 'Flowers', 'Hello flowers...', 'by R A Stanley'),
(19, 'Alone', 'Lonely plant...', 'by Zsolt Zsigmond');

-- --------------------------------------------------------

--
-- Table structure for table `tb_totalorder`
--

CREATE TABLE IF NOT EXISTS `tb_totalorder` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email_customer` varchar(255) NOT NULL,
  `totalprice` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_totalorder`
--

INSERT INTO `tb_totalorder` (`id`, `email_customer`, `totalprice`) VALUES
(1, 'ariefstd.2006@gmail.com', 20),
(2, 'ariefstd.2006@gmail.com', 20),
(3, '0', 675),
(4, 'ariefstd.2006@gmail.com', 59.5),
(5, 'ariefstd.2006@gmail.com', 172.5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
