-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 09:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mega_bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `consignment`
--

CREATE TABLE IF NOT EXISTS `consignment` (
  `con_id` int(11) NOT NULL,
  `con_sup_id` int(11) DEFAULT NULL,
  `con_date` date DEFAULT NULL,
  `con_original_total` double DEFAULT NULL,
  `con_con_total` double DEFAULT NULL,
  `con_total_paid` double DEFAULT NULL,
  `con_refund_total` double DEFAULT NULL,
  `con_discount` double DEFAULT NULL,
  `con_vat` int(3) DEFAULT NULL,
  `con_vat_amount` double DEFAULT NULL,
  `con_instruction` mediumtext,
  `con_ref` varchar(150) DEFAULT NULL,
  `con_status` enum('DN','DU','PN','NW') NOT NULL DEFAULT 'NW',
  `con_booker` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consignment`
--

INSERT INTO `consignment` (`con_id`, `con_sup_id`, `con_date`, `con_original_total`, `con_con_total`, `con_total_paid`, `con_refund_total`, `con_discount`, `con_vat`, `con_vat_amount`, `con_instruction`, `con_ref`, `con_status`, `con_booker`) VALUES
(1, 1, '2016-02-08', NULL, 253000, NULL, NULL, NULL, NULL, NULL, 'Consignment recieved. Invoice ID: 123, Total amount: 253000', '123', 'DN', NULL),
(2, 1, '2016-02-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CON100002', 'NW', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `consignment_items`
--

CREATE TABLE IF NOT EXISTS `consignment_items` (
  `ci_id` int(11) NOT NULL,
  `ci_con_id` int(11) DEFAULT NULL,
  `ci_item_name` varchar(100) DEFAULT NULL,
  `ci_quantity` double DEFAULT NULL,
  `ci_quantity_left` double DEFAULT NULL,
  `ci_damadge` double DEFAULT NULL,
  `ci_rate` double DEFAULT NULL,
  `ci_per` varchar(50) DEFAULT NULL,
  `ci_amount` double DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consignment_items`
--

INSERT INTO `consignment_items` (`ci_id`, `ci_con_id`, `ci_item_name`, `ci_quantity`, `ci_quantity_left`, `ci_damadge`, `ci_rate`, `ci_per`, `ci_amount`) VALUES
(1, 1, 'Hole Cow', 100, 100, NULL, 40000, 'Kg', 200000),
(2, 1, 'Chicken', 500, 500, NULL, 90, 'Pc', 45000),
(3, 1, 'Eggs', 1000, 1000, NULL, 6, 'Pc', 6000),
(4, 1, 'Milk', 40, 40, NULL, 50, 'Littre', 2000),
(7, 2, 'Meat', 500, 500, NULL, 300, 'Pc', 150000),
(8, 2, 'Chicken', 200, 200, NULL, 100, 'Pc', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id_countries` int(3) unsigned NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `iso_alpha2` varchar(2) DEFAULT NULL,
  `iso_alpha3` varchar(3) DEFAULT NULL,
  `iso_numeric` int(11) DEFAULT NULL,
  `currency_code` char(3) DEFAULT NULL,
  `currency_name` varchar(32) DEFAULT NULL,
  `currrency_symbol` varchar(3) DEFAULT NULL,
  `flag` varchar(6) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id_countries`, `name`, `iso_alpha2`, `iso_alpha3`, `iso_numeric`, `currency_code`, `currency_name`, `currrency_symbol`, `flag`) VALUES
(1, 'Afghanistan', 'AF', 'AFG', 4, 'AFN', 'Afghani', '؋', 'AF.png'),
(2, 'Albania', 'AL', 'ALB', 8, 'ALL', 'Lek', 'Lek', 'AL.png'),
(3, 'Algeria', 'DZ', 'DZA', 12, 'DZD', 'Dinar', NULL, 'DZ.png'),
(4, 'American Samoa', 'AS', 'ASM', 16, 'USD', 'Dollar', '$', 'AS.png'),
(5, 'Andorra', 'AD', 'AND', 20, 'EUR', 'Euro', '€', 'AD.png'),
(6, 'Angola', 'AO', 'AGO', 24, 'AOA', 'Kwanza', 'Kz', 'AO.png'),
(7, 'Anguilla', 'AI', 'AIA', 660, 'XCD', 'Dollar', '$', 'AI.png'),
(8, 'Antarctica', 'AQ', 'ATA', 10, '', '', NULL, 'AQ.png'),
(9, 'Antigua and Barbuda', 'AG', 'ATG', 28, 'XCD', 'Dollar', '$', 'AG.png'),
(10, 'Argentina', 'AR', 'ARG', 32, 'ARS', 'Peso', '$', 'AR.png'),
(11, 'Armenia', 'AM', 'ARM', 51, 'AMD', 'Dram', NULL, 'AM.png'),
(12, 'Aruba', 'AW', 'ABW', 533, 'AWG', 'Guilder', 'ƒ', 'AW.png'),
(13, 'Australia', 'AU', 'AUS', 36, 'AUD', 'Dollar', '$', 'AU.png'),
(14, 'Austria', 'AT', 'AUT', 40, 'EUR', 'Euro', '€', 'AT.png'),
(15, 'Azerbaijan', 'AZ', 'AZE', 31, 'AZN', 'Manat', 'ман', 'AZ.png'),
(16, 'Bahamas', 'BS', 'BHS', 44, 'BSD', 'Dollar', '$', 'BS.png'),
(17, 'Bahrain', 'BH', 'BHR', 48, 'BHD', 'Dinar', NULL, 'BH.png'),
(18, 'Bangladesh', 'BD', 'BGD', 50, 'BDT', 'Taka', NULL, 'BD.png'),
(19, 'Barbados', 'BB', 'BRB', 52, 'BBD', 'Dollar', '$', 'BB.png'),
(20, 'Belarus', 'BY', 'BLR', 112, 'BYR', 'Ruble', 'p.', 'BY.png'),
(21, 'Belgium', 'BE', 'BEL', 56, 'EUR', 'Euro', '€', 'BE.png'),
(22, 'Belize', 'BZ', 'BLZ', 84, 'BZD', 'Dollar', 'BZ$', 'BZ.png'),
(23, 'Benin', 'BJ', 'BEN', 204, 'XOF', 'Franc', NULL, 'BJ.png'),
(24, 'Bermuda', 'BM', 'BMU', 60, 'BMD', 'Dollar', '$', 'BM.png'),
(25, 'Bhutan', 'BT', 'BTN', 64, 'BTN', 'Ngultrum', NULL, 'BT.png'),
(26, 'Bolivia', 'BO', 'BOL', 68, 'BOB', 'Boliviano', '$b', 'BO.png'),
(27, 'Bosnia and Herzegovina', 'BA', 'BIH', 70, 'BAM', 'Marka', 'KM', 'BA.png'),
(28, 'Botswana', 'BW', 'BWA', 72, 'BWP', 'Pula', 'P', 'BW.png'),
(29, 'Bouvet Island', 'BV', 'BVT', 74, 'NOK', 'Krone', 'kr', 'BV.png'),
(30, 'Brazil', 'BR', 'BRA', 76, 'BRL', 'Real', 'R$', 'BR.png'),
(31, 'British Indian Ocean Territory', 'IO', 'IOT', 86, 'USD', 'Dollar', '$', 'IO.png'),
(32, 'British Virgin Islands', 'VG', 'VGB', 92, 'USD', 'Dollar', '$', 'VG.png'),
(33, 'Brunei', 'BN', 'BRN', 96, 'BND', 'Dollar', '$', 'BN.png'),
(34, 'Bulgaria', 'BG', 'BGR', 100, 'BGN', 'Lev', 'лв', 'BG.png'),
(35, 'Burkina Faso', 'BF', 'BFA', 854, 'XOF', 'Franc', NULL, 'BF.png'),
(36, 'Burundi', 'BI', 'BDI', 108, 'BIF', 'Franc', NULL, 'BI.png'),
(37, 'Cambodia', 'KH', 'KHM', 116, 'KHR', 'Riels', '៛', 'KH.png'),
(38, 'Cameroon', 'CM', 'CMR', 120, 'XAF', 'Franc', 'FCF', 'CM.png'),
(39, 'Canada', 'CA', 'CAN', 124, 'CAD', 'Dollar', '$', 'CA.png'),
(40, 'Cape Verde', 'CV', 'CPV', 132, 'CVE', 'Escudo', NULL, 'CV.png'),
(41, 'Cayman Islands', 'KY', 'CYM', 136, 'KYD', 'Dollar', '$', 'KY.png'),
(42, 'Central African Republic', 'CF', 'CAF', 140, 'XAF', 'Franc', 'FCF', 'CF.png'),
(43, 'Chad', 'TD', 'TCD', 148, 'XAF', 'Franc', NULL, 'TD.png'),
(44, 'Chile', 'CL', 'CHL', 152, 'CLP', 'Peso', NULL, 'CL.png'),
(45, 'China', 'CN', 'CHN', 156, 'CNY', 'Yuan Renminbi', '¥', 'CN.png'),
(46, 'Christmas Island', 'CX', 'CXR', 162, 'AUD', 'Dollar', '$', 'CX.png'),
(47, 'Cocos Islands', 'CC', 'CCK', 166, 'AUD', 'Dollar', '$', 'CC.png'),
(48, 'Colombia', 'CO', 'COL', 170, 'COP', 'Peso', '$', 'CO.png'),
(49, 'Comoros', 'KM', 'COM', 174, 'KMF', 'Franc', NULL, 'KM.png'),
(50, 'Cook Islands', 'CK', 'COK', 184, 'NZD', 'Dollar', '$', 'CK.png'),
(51, 'Costa Rica', 'CR', 'CRI', 188, 'CRC', 'Colon', '₡', 'CR.png'),
(52, 'Croatia', 'HR', 'HRV', 191, 'HRK', 'Kuna', 'kn', 'HR.png'),
(53, 'Cuba', 'CU', 'CUB', 192, 'CUP', 'Peso', '₱', 'CU.png'),
(54, 'Cyprus', 'CY', 'CYP', 196, 'CYP', 'Pound', NULL, 'CY.png'),
(55, 'Czech Republic', 'CZ', 'CZE', 203, 'CZK', 'Koruna', 'Kč', 'CZ.png'),
(56, 'Democratic Republic of the Congo', 'CD', 'COD', 180, 'CDF', 'Franc', NULL, 'CD.png'),
(57, 'Denmark', 'DK', 'DNK', 208, 'DKK', 'Krone', 'kr', 'DK.png'),
(58, 'Djibouti', 'DJ', 'DJI', 262, 'DJF', 'Franc', NULL, 'DJ.png'),
(59, 'Dominica', 'DM', 'DMA', 212, 'XCD', 'Dollar', '$', 'DM.png'),
(60, 'Dominican Republic', 'DO', 'DOM', 214, 'DOP', 'Peso', 'RD$', 'DO.png'),
(61, 'East Timor', 'TL', 'TLS', 626, 'USD', 'Dollar', '$', 'TL.png'),
(62, 'Ecuador', 'EC', 'ECU', 218, 'USD', 'Dollar', '$', 'EC.png'),
(63, 'Egypt', 'EG', 'EGY', 818, 'EGP', 'Pound', '£', 'EG.png'),
(64, 'El Salvador', 'SV', 'SLV', 222, 'SVC', 'Colone', '$', 'SV.png'),
(65, 'Equatorial Guinea', 'GQ', 'GNQ', 226, 'XAF', 'Franc', 'FCF', 'GQ.png'),
(66, 'Eritrea', 'ER', 'ERI', 232, 'ERN', 'Nakfa', 'Nfk', 'ER.png'),
(67, 'Estonia', 'EE', 'EST', 233, 'EEK', 'Kroon', 'kr', 'EE.png'),
(68, 'Ethiopia', 'ET', 'ETH', 231, 'ETB', 'Birr', NULL, 'ET.png'),
(69, 'Falkland Islands', 'FK', 'FLK', 238, 'FKP', 'Pound', '£', 'FK.png'),
(70, 'Faroe Islands', 'FO', 'FRO', 234, 'DKK', 'Krone', 'kr', 'FO.png'),
(71, 'Fiji', 'FJ', 'FJI', 242, 'FJD', 'Dollar', '$', 'FJ.png'),
(72, 'Finland', 'FI', 'FIN', 246, 'EUR', 'Euro', '€', 'FI.png'),
(73, 'France', 'FR', 'FRA', 250, 'EUR', 'Euro', '€', 'FR.png'),
(74, 'French Guiana', 'GF', 'GUF', 254, 'EUR', 'Euro', '€', 'GF.png'),
(75, 'French Polynesia', 'PF', 'PYF', 258, 'XPF', 'Franc', NULL, 'PF.png'),
(76, 'French Southern Territories', 'TF', 'ATF', 260, 'EUR', 'Euro  ', '€', 'TF.png'),
(77, 'Gabon', 'GA', 'GAB', 266, 'XAF', 'Franc', 'FCF', 'GA.png'),
(78, 'Gambia', 'GM', 'GMB', 270, 'GMD', 'Dalasi', 'D', 'GM.png'),
(79, 'Georgia', 'GE', 'GEO', 268, 'GEL', 'Lari', NULL, 'GE.png'),
(80, 'Germany', 'DE', 'DEU', 276, 'EUR', 'Euro', '€', 'DE.png'),
(81, 'Ghana', 'GH', 'GHA', 288, 'GHC', 'Cedi', '¢', 'GH.png'),
(82, 'Gibraltar', 'GI', 'GIB', 292, 'GIP', 'Pound', '£', 'GI.png'),
(83, 'Greece', 'GR', 'GRC', 300, 'EUR', 'Euro', '€', 'GR.png'),
(84, 'Greenland', 'GL', 'GRL', 304, 'DKK', 'Krone', 'kr', 'GL.png'),
(85, 'Grenada', 'GD', 'GRD', 308, 'XCD', 'Dollar', '$', 'GD.png'),
(86, 'Guadeloupe', 'GP', 'GLP', 312, 'EUR', 'Euro', '€', 'GP.png'),
(87, 'Guam', 'GU', 'GUM', 316, 'USD', 'Dollar', '$', 'GU.png'),
(88, 'Guatemala', 'GT', 'GTM', 320, 'GTQ', 'Quetzal', 'Q', 'GT.png'),
(89, 'Guinea', 'GN', 'GIN', 324, 'GNF', 'Franc', NULL, 'GN.png'),
(90, 'Guinea-Bissau', 'GW', 'GNB', 624, 'XOF', 'Franc', NULL, 'GW.png'),
(91, 'Guyana', 'GY', 'GUY', 328, 'GYD', 'Dollar', '$', 'GY.png'),
(92, 'Haiti', 'HT', 'HTI', 332, 'HTG', 'Gourde', 'G', 'HT.png'),
(93, 'Heard Island and McDonald Islands', 'HM', 'HMD', 334, 'AUD', 'Dollar', '$', 'HM.png'),
(94, 'Honduras', 'HN', 'HND', 340, 'HNL', 'Lempira', 'L', 'HN.png'),
(95, 'Hong Kong', 'HK', 'HKG', 344, 'HKD', 'Dollar', '$', 'HK.png'),
(96, 'Hungary', 'HU', 'HUN', 348, 'HUF', 'Forint', 'Ft', 'HU.png'),
(97, 'Iceland', 'IS', 'ISL', 352, 'ISK', 'Krona', 'kr', 'IS.png'),
(98, 'India', 'IN', 'IND', 356, 'INR', 'Rupee', '₹', 'IN.png'),
(99, 'Indonesia', 'ID', 'IDN', 360, 'IDR', 'Rupiah', 'Rp', 'ID.png'),
(100, 'Iran', 'IR', 'IRN', 364, 'IRR', 'Rial', '﷼', 'IR.png'),
(101, 'Iraq', 'IQ', 'IRQ', 368, 'IQD', 'Dinar', NULL, 'IQ.png'),
(102, 'Ireland', 'IE', 'IRL', 372, 'EUR', 'Euro', '€', 'IE.png'),
(103, 'Israel', 'IL', 'ISR', 376, 'ILS', 'Shekel', '₪', 'IL.png'),
(104, 'Italy', 'IT', 'ITA', 380, 'EUR', 'Euro', '€', 'IT.png'),
(105, 'Ivory Coast', 'CI', 'CIV', 384, 'XOF', 'Franc', NULL, 'CI.png'),
(106, 'Jamaica', 'JM', 'JAM', 388, 'JMD', 'Dollar', '$', 'JM.png'),
(107, 'Japan', 'JP', 'JPN', 392, 'JPY', 'Yen', '¥', 'JP.png'),
(108, 'Jordan', 'JO', 'JOR', 400, 'JOD', 'Dinar', NULL, 'JO.png'),
(109, 'Kazakhstan', 'KZ', 'KAZ', 398, 'KZT', 'Tenge', 'лв', 'KZ.png'),
(110, 'Kenya', 'KE', 'KEN', 404, 'KES', 'Shilling', NULL, 'KE.png'),
(111, 'Kiribati', 'KI', 'KIR', 296, 'AUD', 'Dollar', '$', 'KI.png'),
(112, 'Kuwait', 'KW', 'KWT', 414, 'KWD', 'Dinar', NULL, 'KW.png'),
(113, 'Kyrgyzstan', 'KG', 'KGZ', 417, 'KGS', 'Som', 'лв', 'KG.png'),
(114, 'Laos', 'LA', 'LAO', 418, 'LAK', 'Kip', '₭', 'LA.png'),
(115, 'Latvia', 'LV', 'LVA', 428, 'LVL', 'Lat', 'Ls', 'LV.png'),
(116, 'Lebanon', 'LB', 'LBN', 422, 'LBP', 'Pound', '£', 'LB.png'),
(117, 'Lesotho', 'LS', 'LSO', 426, 'LSL', 'Loti', 'L', 'LS.png'),
(118, 'Liberia', 'LR', 'LBR', 430, 'LRD', 'Dollar', '$', 'LR.png'),
(119, 'Libya', 'LY', 'LBY', 434, 'LYD', 'Dinar', NULL, 'LY.png'),
(120, 'Liechtenstein', 'LI', 'LIE', 438, 'CHF', 'Franc', 'CHF', 'LI.png'),
(121, 'Lithuania', 'LT', 'LTU', 440, 'LTL', 'Litas', 'Lt', 'LT.png'),
(122, 'Luxembourg', 'LU', 'LUX', 442, 'EUR', 'Euro', '€', 'LU.png'),
(123, 'Macao', 'MO', 'MAC', 446, 'MOP', 'Pataca', 'MOP', 'MO.png'),
(124, 'Macedonia', 'MK', 'MKD', 807, 'MKD', 'Denar', 'ден', 'MK.png'),
(125, 'Madagascar', 'MG', 'MDG', 450, 'MGA', 'Ariary', NULL, 'MG.png'),
(126, 'Malawi', 'MW', 'MWI', 454, 'MWK', 'Kwacha', 'MK', 'MW.png'),
(127, 'Malaysia', 'MY', 'MYS', 458, 'MYR', 'Ringgit', 'RM', 'MY.png'),
(128, 'Maldives', 'MV', 'MDV', 462, 'MVR', 'Rufiyaa', 'Rf', 'MV.png'),
(129, 'Mali', 'ML', 'MLI', 466, 'XOF', 'Franc', NULL, 'ML.png'),
(130, 'Malta', 'MT', 'MLT', 470, 'MTL', 'Lira', NULL, 'MT.png'),
(131, 'Marshall Islands', 'MH', 'MHL', 584, 'USD', 'Dollar', '$', 'MH.png'),
(132, 'Martinique', 'MQ', 'MTQ', 474, 'EUR', 'Euro', '€', 'MQ.png'),
(133, 'Mauritania', 'MR', 'MRT', 478, 'MRO', 'Ouguiya', 'UM', 'MR.png'),
(134, 'Mauritius', 'MU', 'MUS', 480, 'MUR', 'Rupee', '₨', 'MU.png'),
(135, 'Mayotte', 'YT', 'MYT', 175, 'EUR', 'Euro', '€', 'YT.png'),
(136, 'Mexico', 'MX', 'MEX', 484, 'MXN', 'Peso', '$', 'MX.png'),
(137, 'Micronesia', 'FM', 'FSM', 583, 'USD', 'Dollar', '$', 'FM.png'),
(138, 'Moldova', 'MD', 'MDA', 498, 'MDL', 'Leu', NULL, 'MD.png'),
(139, 'Monaco', 'MC', 'MCO', 492, 'EUR', 'Euro', '€', 'MC.png'),
(140, 'Mongolia', 'MN', 'MNG', 496, 'MNT', 'Tugrik', '₮', 'MN.png'),
(141, 'Montserrat', 'MS', 'MSR', 500, 'XCD', 'Dollar', '$', 'MS.png'),
(142, 'Morocco', 'MA', 'MAR', 504, 'MAD', 'Dirham', NULL, 'MA.png'),
(143, 'Mozambique', 'MZ', 'MOZ', 508, 'MZN', 'Meticail', 'MT', 'MZ.png'),
(144, 'Myanmar', 'MM', 'MMR', 104, 'MMK', 'Kyat', 'K', 'MM.png'),
(145, 'Namibia', 'NA', 'NAM', 516, 'NAD', 'Dollar', '$', 'NA.png'),
(146, 'Nauru', 'NR', 'NRU', 520, 'AUD', 'Dollar', '$', 'NR.png'),
(147, 'Nepal', 'NP', 'NPL', 524, 'NPR', 'Rupee', '₨', 'NP.png'),
(148, 'Netherlands', 'NL', 'NLD', 528, 'EUR', 'Euro', '€', 'NL.png'),
(149, 'Netherlands Antilles', 'AN', 'ANT', 530, 'ANG', 'Guilder', 'ƒ', 'AN.png'),
(150, 'New Caledonia', 'NC', 'NCL', 540, 'XPF', 'Franc', NULL, 'NC.png'),
(151, 'New Zealand', 'NZ', 'NZL', 554, 'NZD', 'Dollar', '$', 'NZ.png'),
(152, 'Nicaragua', 'NI', 'NIC', 558, 'NIO', 'Cordoba', 'C$', 'NI.png'),
(153, 'Niger', 'NE', 'NER', 562, 'XOF', 'Franc', NULL, 'NE.png'),
(154, 'Nigeria', 'NG', 'NGA', 566, 'NGN', 'Naira', '₦', 'NG.png'),
(155, 'Niue', 'NU', 'NIU', 570, 'NZD', 'Dollar', '$', 'NU.png'),
(156, 'Norfolk Island', 'NF', 'NFK', 574, 'AUD', 'Dollar', '$', 'NF.png'),
(157, 'North Korea', 'KP', 'PRK', 408, 'KPW', 'Won', '₩', 'KP.png'),
(158, 'Northern Mariana Islands', 'MP', 'MNP', 580, 'USD', 'Dollar', '$', 'MP.png'),
(159, 'Norway', 'NO', 'NOR', 578, 'NOK', 'Krone', 'kr', 'NO.png'),
(160, 'Oman', 'OM', 'OMN', 512, 'OMR', 'Rial', '﷼', 'OM.png'),
(161, 'Pakistan', 'PK', 'PAK', 586, 'PKR', 'Rupee', '₨', 'PK.png'),
(162, 'Palau', 'PW', 'PLW', 585, 'USD', 'Dollar', '$', 'PW.png'),
(163, 'Palestinian Territory', 'PS', 'PSE', 275, 'ILS', 'Shekel', '₪', 'PS.png'),
(164, 'Panama', 'PA', 'PAN', 591, 'PAB', 'Balboa', 'B/.', 'PA.png'),
(165, 'Papua New Guinea', 'PG', 'PNG', 598, 'PGK', 'Kina', NULL, 'PG.png'),
(166, 'Paraguay', 'PY', 'PRY', 600, 'PYG', 'Guarani', 'Gs', 'PY.png'),
(167, 'Peru', 'PE', 'PER', 604, 'PEN', 'Sol', 'S/.', 'PE.png'),
(168, 'Philippines', 'PH', 'PHL', 608, 'PHP', 'Peso', 'Php', 'PH.png'),
(169, 'Pitcairn', 'PN', 'PCN', 612, 'NZD', 'Dollar', '$', 'PN.png'),
(170, 'Poland', 'PL', 'POL', 616, 'PLN', 'Zloty', 'zł', 'PL.png'),
(171, 'Portugal', 'PT', 'PRT', 620, 'EUR', 'Euro', '€', 'PT.png'),
(172, 'Puerto Rico', 'PR', 'PRI', 630, 'USD', 'Dollar', '$', 'PR.png'),
(173, 'Qatar', 'QA', 'QAT', 634, 'QAR', 'Rial', '﷼', 'QA.png'),
(174, 'Republic of the Congo', 'CG', 'COG', 178, 'XAF', 'Franc', 'FCF', 'CG.png'),
(175, 'Reunion', 'RE', 'REU', 638, 'EUR', 'Euro', '€', 'RE.png'),
(176, 'Romania', 'RO', 'ROU', 642, 'RON', 'Leu', 'lei', 'RO.png'),
(177, 'Russia', 'RU', 'RUS', 643, 'RUB', 'Ruble', 'руб', 'RU.png'),
(178, 'Rwanda', 'RW', 'RWA', 646, 'RWF', 'Franc', NULL, 'RW.png'),
(179, 'Saint Helena', 'SH', 'SHN', 654, 'SHP', 'Pound', '£', 'SH.png'),
(180, 'Saint Kitts and Nevis', 'KN', 'KNA', 659, 'XCD', 'Dollar', '$', 'KN.png'),
(181, 'Saint Lucia', 'LC', 'LCA', 662, 'XCD', 'Dollar', '$', 'LC.png'),
(182, 'Saint Pierre and Miquelon', 'PM', 'SPM', 666, 'EUR', 'Euro', '€', 'PM.png'),
(183, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 670, 'XCD', 'Dollar', '$', 'VC.png'),
(184, 'Samoa', 'WS', 'WSM', 882, 'WST', 'Tala', 'WS$', 'WS.png'),
(185, 'San Marino', 'SM', 'SMR', 674, 'EUR', 'Euro', '€', 'SM.png'),
(186, 'Sao Tome and Principe', 'ST', 'STP', 678, 'STD', 'Dobra', 'Db', 'ST.png'),
(187, 'Saudi Arabia', 'SA', 'SAU', 682, 'SAR', 'Rial', '﷼', 'SA.png'),
(188, 'Senegal', 'SN', 'SEN', 686, 'XOF', 'Franc', NULL, 'SN.png'),
(189, 'Serbia and Montenegro', 'CS', 'SCG', 891, 'RSD', 'Dinar', 'Дин', 'CS.png'),
(190, 'Seychelles', 'SC', 'SYC', 690, 'SCR', 'Rupee', '₨', 'SC.png'),
(191, 'Sierra Leone', 'SL', 'SLE', 694, 'SLL', 'Leone', 'Le', 'SL.png'),
(192, 'Singapore', 'SG', 'SGP', 702, 'SGD', 'Dollar', '$', 'SG.png'),
(193, 'Slovakia', 'SK', 'SVK', 703, 'SKK', 'Koruna', 'Sk', 'SK.png'),
(194, 'Slovenia', 'SI', 'SVN', 705, 'EUR', 'Euro', '€', 'SI.png'),
(195, 'Solomon Islands', 'SB', 'SLB', 90, 'SBD', 'Dollar', '$', 'SB.png'),
(196, 'Somalia', 'SO', 'SOM', 706, 'SOS', 'Shilling', 'S', 'SO.png'),
(197, 'South Africa', 'ZA', 'ZAF', 710, 'ZAR', 'Rand', 'R', 'ZA.png'),
(198, 'South Georgia and the South Sandwich Islands', 'GS', 'SGS', 239, 'GBP', 'Pound', '£', 'GS.png'),
(199, 'South Korea', 'KR', 'KOR', 410, 'KRW', 'Won', '₩', 'KR.png'),
(200, 'Spain', 'ES', 'ESP', 724, 'EUR', 'Euro', '€', 'ES.png'),
(201, 'Sri Lanka', 'LK', 'LKA', 144, 'LKR', 'Rupee', '₨', 'LK.png'),
(202, 'Sudan', 'SD', 'SDN', 736, 'SDD', 'Dinar', NULL, 'SD.png'),
(203, 'Suriname', 'SR', 'SUR', 740, 'SRD', 'Dollar', '$', 'SR.png'),
(204, 'Svalbard and Jan Mayen', 'SJ', 'SJM', 744, 'NOK', 'Krone', 'kr', 'SJ.png'),
(205, 'Swaziland', 'SZ', 'SWZ', 748, 'SZL', 'Lilangeni', NULL, 'SZ.png'),
(206, 'Sweden', 'SE', 'SWE', 752, 'SEK', 'Krona', 'kr', 'SE.png'),
(207, 'Switzerland', 'CH', 'CHE', 756, 'CHF', 'Franc', 'CHF', 'CH.png'),
(208, 'Syria', 'SY', 'SYR', 760, 'SYP', 'Pound', '£', 'SY.png'),
(209, 'Taiwan', 'TW', 'TWN', 158, 'TWD', 'Dollar', 'NT$', 'TW.png'),
(210, 'Tajikistan', 'TJ', 'TJK', 762, 'TJS', 'Somoni', NULL, 'TJ.png'),
(211, 'Tanzania', 'TZ', 'TZA', 834, 'TZS', 'Shilling', NULL, 'TZ.png'),
(212, 'Thailand', 'TH', 'THA', 764, 'THB', 'Baht', '฿', 'TH.png'),
(213, 'Togo', 'TG', 'TGO', 768, 'XOF', 'Franc', NULL, 'TG.png'),
(214, 'Tokelau', 'TK', 'TKL', 772, 'NZD', 'Dollar', '$', 'TK.png'),
(215, 'Tonga', 'TO', 'TON', 776, 'TOP', 'Pa''anga', 'T$', 'TO.png'),
(216, 'Trinidad and Tobago', 'TT', 'TTO', 780, 'TTD', 'Dollar', 'TT$', 'TT.png'),
(217, 'Tunisia', 'TN', 'TUN', 788, 'TND', 'Dinar', NULL, 'TN.png'),
(218, 'Turkey', 'TR', 'TUR', 792, 'TRY', 'Lira', 'YTL', 'TR.png'),
(219, 'Turkmenistan', 'TM', 'TKM', 795, 'TMM', 'Manat', 'm', 'TM.png'),
(220, 'Turks and Caicos Islands', 'TC', 'TCA', 796, 'USD', 'Dollar', '$', 'TC.png'),
(221, 'Tuvalu', 'TV', 'TUV', 798, 'AUD', 'Dollar', '$', 'TV.png'),
(222, 'U.S. Virgin Islands', 'VI', 'VIR', 850, 'USD', 'Dollar', '$', 'VI.png'),
(223, 'Uganda', 'UG', 'UGA', 800, 'UGX', 'Shilling', NULL, 'UG.png'),
(224, 'Ukraine', 'UA', 'UKR', 804, 'UAH', 'Hryvnia', '₴', 'UA.png'),
(225, 'United Arab Emirates', 'AE', 'ARE', 784, 'AED', 'Dirham', NULL, 'AE.png'),
(226, 'United Kingdom', 'GB', 'GBR', 826, 'GBP', 'Pound', '£', 'GB.png'),
(227, 'United States', 'US', 'USA', 840, 'USD', 'Dollar', '$', 'US.png'),
(228, 'United States Minor Outlying Islands', 'UM', 'UMI', 581, 'USD', 'Dollar ', '$', 'UM.png'),
(229, 'Uruguay', 'UY', 'URY', 858, 'UYU', 'Peso', '$U', 'UY.png'),
(230, 'Uzbekistan', 'UZ', 'UZB', 860, 'UZS', 'Som', 'лв', 'UZ.png'),
(231, 'Vanuatu', 'VU', 'VUT', 548, 'VUV', 'Vatu', 'Vt', 'VU.png'),
(232, 'Vatican', 'VA', 'VAT', 336, 'EUR', 'Euro', '€', 'VA.png'),
(233, 'Venezuela', 'VE', 'VEN', 862, 'VEF', 'Bolivar', 'Bs', 'VE.png'),
(234, 'Vietnam', 'VN', 'VNM', 704, 'VND', 'Dong', '₫', 'VN.png'),
(235, 'Wallis and Futuna', 'WF', 'WLF', 876, 'XPF', 'Franc', NULL, 'WF.png'),
(236, 'Western Sahara', 'EH', 'ESH', 732, 'MAD', 'Dirham', NULL, 'EH.png'),
(237, 'Yemen', 'YE', 'YEM', 887, 'YER', 'Rial', '﷼', 'YE.png'),
(238, 'Zambia', 'ZM', 'ZMB', 894, 'ZMK', 'Kwacha', 'ZK', 'ZM.png'),
(239, 'Zimbabwe', 'ZW', 'ZWE', 716, 'ZWD', 'Dollar', 'Z$', 'ZW.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cstr_id` int(11) NOT NULL,
  `cstr_cid` varchar(25) DEFAULT NULL,
  `cstr_name` varchar(100) DEFAULT NULL,
  `cstr_type_id` int(11) DEFAULT NULL,
  `cstr_dob` date DEFAULT NULL,
  `cstr_sex` enum('M','F') DEFAULT NULL,
  `cstr_anniversary` date DEFAULT NULL,
  `cstr_valid_from` date DEFAULT NULL,
  `cstr_valid_to` date DEFAULT NULL,
  `cstr_address` varchar(250) DEFAULT NULL,
  `cstr_phone` varchar(50) DEFAULT NULL,
  `cstr_email` varchar(50) DEFAULT NULL,
  `cstr_img` varchar(150) DEFAULT NULL,
  `cstr_jdate` date DEFAULT NULL,
  `cstr_point` int(11) NOT NULL DEFAULT '0',
  `cstr_score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cstr_id`, `cstr_cid`, `cstr_name`, `cstr_type_id`, `cstr_dob`, `cstr_sex`, `cstr_anniversary`, `cstr_valid_from`, `cstr_valid_to`, `cstr_address`, `cstr_phone`, `cstr_email`, `cstr_img`, `cstr_jdate`, `cstr_point`, `cstr_score`) VALUES
(0, 'MB001', 'Unknown', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 516, 203),
(1, 'MB1601301', 'Abedur Rahman', 1, '1982-02-28', NULL, '2013-10-25', '2016-01-30', '2017-01-30', 'Islampur, Sylhet', '01712252448', 'abedur@gmail.com', NULL, '2016-01-30', 1307, 519),
(2, 'MB1601302', 'Rajibur Rahman', 1, NULL, NULL, NULL, NULL, NULL, 'Mohammadpur, Sylhet', '0123211', 'rajibur@gmail.com', NULL, '2016-01-30', 399, 159);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE IF NOT EXISTS `customer_type` (
  `cstt_id` int(11) NOT NULL,
  `cstt_name` varchar(150) DEFAULT NULL,
  `cstt_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`cstt_id`, `cstt_name`, `cstt_desc`) VALUES
(1, 'General', 'General Customer Type'),
(2, 'Silver Customer', 'Silver Customer Type'),
(5, 'Gold Customer', 'Gold Customer Type');

-- --------------------------------------------------------

--
-- Table structure for table `nextids`
--

CREATE TABLE IF NOT EXISTS `nextids` (
  `nid_id` int(11) NOT NULL,
  `nid_product_barcode` int(11) NOT NULL,
  `nid_order_ref` int(11) DEFAULT NULL,
  `nid_con_ref` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nextids`
--

INSERT INTO `nextids` (`nid_id`, `nid_product_barcode`, `nid_order_ref`, `nid_con_ref`) VALUES
(1, 1005, 100018, 100002);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `or_id` int(11) NOT NULL,
  `or_customer_id` int(11) DEFAULT NULL,
  `or_date` datetime DEFAULT NULL,
  `or_delivery_date` datetime DEFAULT NULL,
  `or_due_remainder` date DEFAULT NULL,
  `or_original_total` double DEFAULT NULL,
  `or_order_total` double DEFAULT NULL,
  `or_total_paid` double DEFAULT NULL,
  `or_refund_total` double DEFAULT NULL,
  `or_discount` double DEFAULT NULL,
  `or_vat` int(3) DEFAULT NULL,
  `or_vatamount` double DEFAULT NULL,
  `or_instruction` mediumtext,
  `or_ref` varchar(150) DEFAULT NULL,
  `or_status` enum('DN','DU','NW','PN','DR') DEFAULT NULL,
  `or_booker` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`or_id`, `or_customer_id`, `or_date`, `or_delivery_date`, `or_due_remainder`, `or_original_total`, `or_order_total`, `or_total_paid`, `or_refund_total`, `or_discount`, `or_vat`, `or_vatamount`, `or_instruction`, `or_ref`, `or_status`, `or_booker`) VALUES
(4, 1, '2016-01-30 20:59:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160130205913', 'NW', 1),
(5, 1, '2016-01-31 11:57:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131115719', 'NW', 1),
(6, 1, '2016-01-31 12:04:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131120405', 'NW', 1),
(7, 1, '2016-01-31 12:39:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131123938', 'NW', 1),
(8, 1, '2016-01-31 12:55:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131125505', 'NW', 1),
(9, 1, '2016-01-31 14:28:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131142806', 'NW', 1),
(10, 1, '2016-01-31 15:24:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131152422', 'NW', 1),
(11, 2, '2016-01-31 18:02:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131180223', 'NW', 1),
(12, 0, '2016-01-31 18:49:05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131184905', 'NW', 1),
(13, 1, '2016-01-31 19:20:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131192039', 'NW', 1),
(14, 1, '2016-01-31 19:42:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131194258', 'NW', 1),
(15, 1, '2016-01-31 20:07:54', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131200754', 'NW', 1),
(16, 1, '2016-01-31 20:10:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160131201003', 'NW', 1),
(17, 1, '2016-02-01 11:08:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201110801', 'NW', 1),
(22, 0, '2016-02-01 14:24:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201142413', 'NW', 1),
(23, 1, '2016-02-01 14:29:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201142910', 'NW', 1),
(24, 1, '2016-02-01 14:30:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201143047', 'NW', 1),
(28, 0, '2016-02-01 14:55:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201145532', 'NW', 1),
(29, 0, '2016-02-01 14:59:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201145926', 'NW', 1),
(32, 2, '2016-02-01 15:08:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201150849', 'NW', 1),
(33, 1, '2016-02-01 18:07:45', '2016-02-01 00:00:00', NULL, 420, 535, 100, NULL, 35, 0, 0, '', '160201180745', 'DU', 1),
(34, 0, '2016-02-01 18:26:32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '160201182632', 'NW', 1),
(35, 0, '2016-02-01 19:31:54', '2016-02-01 00:00:00', NULL, 170, 340, 340, NULL, 0, 0, 0, '', '160201193154', 'DN', 1),
(37, 1, '2016-02-01 20:02:12', '2016-02-01 00:00:00', NULL, 420, 1070, 1000, NULL, 70, 0, 0, '', '160201200212', 'DN', 1),
(38, 1, '2016-02-01 20:03:52', '2016-02-01 00:00:00', NULL, 300, 385, 385, NULL, 0, 0, 0, '', '160201200352', 'DN', 1),
(39, 0, '2016-02-01 20:31:14', '2016-02-01 00:00:00', NULL, 300, 385, 385, NULL, 0, 0, 0, '', '160201203114', 'DN', 1),
(40, 1, '2016-02-01 21:20:53', '2016-02-01 00:00:00', NULL, 590, 1815, 1815, NULL, 0, 0, 0, '', '160201212053', 'DN', 1),
(41, 2, '2016-02-01 21:30:13', '2016-02-01 00:00:00', NULL, 420, 2675, 2675, NULL, 0, 0, 0, '', '160201213013', 'DN', 1),
(42, 1, '2016-02-02 12:11:04', '2016-02-02 00:00:00', NULL, 590, 2130, 2130, NULL, 0, 0, 0, '', '160202121104', 'DN', 1),
(43, 1, '2016-02-02 21:01:30', '2016-02-02 00:00:00', NULL, 590, 3585, 3585, NULL, 0, 0, 0, '', '160202210130', 'DN', 1),
(44, 0, '2016-02-03 00:53:42', '2016-02-03 00:00:00', NULL, 590, 785, 1000, NULL, 0, 0, 0, '', '160203005342', 'DN', 1),
(45, 0, '2016-02-03 00:58:48', '2016-02-03 00:00:00', NULL, 300, 1925, 1925, NULL, 0, 0, 0, '', '160203005848', 'DN', 1),
(46, 0, '2016-02-03 01:00:51', '2016-02-03 00:00:00', NULL, 420, 535, 0, NULL, 0, 0, 0, '', '160203010051', 'DU', 1),
(47, 1, '2016-02-03 12:08:42', '2016-02-03 00:00:00', NULL, 590, 1500, 1500, NULL, 0, 0, 0, '', 'MB100001', 'DN', 1),
(48, 1, '2016-02-03 12:42:13', '2016-02-03 00:00:00', NULL, 120, 150, 150, NULL, 0, 0, 0, '', 'MB100002', 'DN', 1),
(49, 1, '2016-02-03 16:51:15', '2016-02-03 00:00:00', NULL, 420, 1135, 1200, 65, 0, 0, 0, '', 'MB100003', 'DN', 1),
(50, 1, '2016-02-10 02:13:02', '2016-02-10 00:00:00', NULL, 540, 1485, 1485, 0, 0, 0, 0, '', 'MB100004', 'DN', 1),
(51, 1, '2016-02-10 14:34:00', '2016-02-10 00:00:00', NULL, 420, 3425, 425, 0, 0, 0, 0, '', 'MB100005', 'DU', 1),
(52, 1, '2016-02-13 12:37:57', '2016-02-13 00:00:00', NULL, 470, 2785, 2785, 0, 0, 0, 0, '', 'MB100006', 'DN', 1),
(53, 0, '2016-02-15 15:09:23', '2016-02-15 00:00:00', NULL, 790, 3995, 3995, 0, 0, 0, 0, '', 'MB100007', 'DN', 1),
(54, 1, '2016-02-17 16:35:18', '2016-02-17 00:00:00', NULL, 720, 2275, 2275, 0, 0, 0, 0, '', 'MB100008', 'DN', 1),
(55, 0, '2016-02-25 14:48:13', '2016-02-25 00:00:00', NULL, 300, 350, 350, 0, 0, 0, 0, '', 'MB100009', 'DN', 1),
(56, 0, '2016-02-29 17:43:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MB100010', 'NW', 1),
(57, 1, '2016-03-05 14:08:04', '2016-03-05 00:00:00', NULL, 550, 2325, 2325, 0, 0, 0, 0, '', 'MB100014', 'DN', 1),
(58, 0, '2016-03-07 19:53:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MB100015', 'NW', 1),
(59, 1, '2016-03-07 20:54:54', '2016-03-07 00:00:00', NULL, 550, 1975, 1975, 0, 0, 0, 0, '', 'MB100016', 'DN', 1),
(60, 0, '2016-03-08 16:41:10', '2016-03-08 00:00:00', NULL, 550, 1125, 1125, 0, 0, 0, 0, '', 'MB100017', 'DN', 1),
(61, 0, '2016-03-10 01:53:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MB100018', 'NW', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE IF NOT EXISTS `order_item` (
  `oi_id` int(11) NOT NULL,
  `oi_order_id` int(11) DEFAULT NULL,
  `oi_product_id` int(11) DEFAULT NULL,
  `oi_product_price_id` int(11) DEFAULT NULL,
  `oi_product_name` varchar(150) DEFAULT NULL,
  `oi_units` double DEFAULT NULL,
  `oi_original_price` double DEFAULT NULL,
  `oi_selling_price` double DEFAULT NULL,
  `oi_item_total` double DEFAULT NULL,
  `oi_status` enum('L','R') NOT NULL DEFAULT 'L'
) ENGINE=InnoDB AUTO_INCREMENT=200 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`oi_id`, `oi_order_id`, `oi_product_id`, `oi_product_price_id`, `oi_product_name`, `oi_units`, `oi_original_price`, `oi_selling_price`, `oi_item_total`, `oi_status`) VALUES
(89, 10, 2, 3, 'Broiler Chicken', 11, 120, 150, 1650, 'L'),
(90, 10, 2, 4, 'Broiler Chicken Small', 5, 120, 160, 800, 'L'),
(92, 11, 2, 3, 'Broiler Chicken', 4, 120, 150, 600, 'L'),
(93, 11, 2, 4, 'Broiler Chicken Small', 5, 120, 160, 800, 'L'),
(94, 13, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(95, 13, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(96, 13, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(97, 12, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(98, 12, 2, 3, 'Broiler Chicken', 7, 120, 150, 1050, 'L'),
(99, 12, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(100, 14, 1, 2, 'Boneless beef Beef', 6, 300, 385, 2310, 'L'),
(101, 14, 2, 3, 'Broiler Chicken', 9, 120, 150, 1350, 'L'),
(102, 14, 2, 4, 'Broiler Chicken Small', 3, 120, 160, 480, 'L'),
(103, 12, 4, 6, 'Dairy Milk', 1, 50, 90, 90, 'L'),
(109, 16, 1, 2, 'Boneless beef Beef', 5, 300, 385, 1925, 'L'),
(110, 16, 2, 3, 'Broiler Chicken', 8, 120, 150, 1200, 'L'),
(111, 16, 4, 6, 'Dairy Milk', 2, 50, 90, 180, 'L'),
(112, 17, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(113, 17, 2, 3, 'Broiler Chicken', 2, 120, 150, 300, 'L'),
(120, 23, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(121, 23, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(122, 24, 1, 2, 'Boneless beef Beef', 5, 300, 385, 1925, 'L'),
(123, 24, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(127, 28, 1, 2, 'Boneless beef Beef', 5, 300, 385, 1925, 'L'),
(128, 28, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(129, 28, 2, 4, 'Broiler Chicken Small', 5, 120, 160, 800, 'L'),
(130, 29, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(131, 29, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(132, 29, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(133, 32, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(134, 32, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(135, 32, 4, 6, 'Dairy Milk', 30, 50, 90, 2700, 'L'),
(136, 33, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(137, 33, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(138, 35, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(139, 35, 4, 6, 'Dairy Milk', 2, 50, 90, 180, 'L'),
(142, 37, 1, 2, 'Boneless beef Beef', 2, 300, 385, 770, 'L'),
(143, 37, 2, 3, 'Broiler Chicken', 2, 120, 150, 300, 'L'),
(144, 38, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(145, 39, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(146, 40, 1, 2, 'Boneless beef Beef', 1, 300, 385, 385, 'L'),
(147, 40, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(148, 40, 2, 4, 'Broiler Chicken Small', 2, 120, 160, 320, 'L'),
(149, 40, 4, 6, 'Dairy Milk', 4, 50, 90, 360, 'L'),
(150, 41, 1, 2, 'Boneless beef Beef', 5, 300, 385, 1925, 'L'),
(151, 41, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(152, 42, 1, 2, 'Boneless beef Beef', 2, 300, 385, 770, 'L'),
(153, 42, 2, 3, 'Broiler Chicken', 3, 120, 150, 450, 'L'),
(154, 42, 2, 4, 'Broiler Chicken Small', 4, 120, 160, 640, 'L'),
(155, 42, 4, 6, 'Dairy Milk', 3, 50, 90, 270, 'L'),
(156, 43, 1, 2, 'Boneless beef Beef', 5, 300, 385, 1925, 'L'),
(157, 43, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(158, 43, 2, 4, 'Broiler Chicken Small', 4, 120, 160, 640, 'L'),
(159, 43, 4, 6, 'Dairy Milk', 3, 50, 90, 270, 'L'),
(160, 44, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(161, 44, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(162, 44, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(163, 44, 4, 6, 'Dairy Milk', 1, 50, 90, 90, 'L'),
(165, 45, 1, 2, 'Boneless Beef', 5, 300, 385, 1925, 'L'),
(166, 46, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(167, 46, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(168, 47, 1, 2, 'Boneless Beef', 2, 300, 385, 770, 'L'),
(169, 47, 2, 3, 'Broiler Chicken', 2, 120, 150, 300, 'L'),
(170, 47, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(171, 47, 4, 6, 'Dairy Milk', 3, 50, 90, 270, 'L'),
(172, 48, 2, 3, 'Broiler Chicken', 1, 120, 150, 150, 'L'),
(173, 49, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(174, 49, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(175, 50, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(176, 50, 2, 3, 'Broiler Chicken', 2, 120, 150, 300, 'L'),
(177, 50, 2, 4, 'Broiler Chicken Small', 5, 120, 160, 800, 'L'),
(178, 51, 1, 2, 'Boneless Beef', 5, 300, 385, 1925, 'L'),
(179, 51, 2, 3, 'Broiler Chicken', 10, 120, 150, 1500, 'L'),
(180, 52, 1, 2, 'Boneless Beef', 5, 300, 385, 1925, 'L'),
(181, 52, 2, 4, 'Broiler Chicken Small', 2, 120, 160, 320, 'L'),
(182, 52, 4, 6, 'Dairy Milk', 6, 50, 90, 540, 'L'),
(183, 53, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(184, 53, 2, 3, 'Broiler Chicken', 5, 120, 150, 750, 'L'),
(185, 53, 2, 4, 'Broiler Chicken Small', 1, 120, 160, 160, 'L'),
(186, 53, 1, 7, 'With bone Beef', 9, 250, 300, 2700, 'L'),
(187, 54, 1, 2, 'Boneless Beef', 1, 300, 385, 385, 'L'),
(188, 54, 2, 3, 'Broiler Chicken', 10, 120, 150, 1500, 'L'),
(189, 54, 4, 6, 'Dairy Milk', 1, 50, 90, 90, 'L'),
(190, 54, 1, 7, 'With bone Beef', 1, 250, 300, 300, 'L'),
(191, 55, 1, 1, 'Boneless Beef', 1, 300, 350, 350, 'L'),
(192, 57, 1, 2, 'With bone Beef', 5, 250, 325, 1625, 'L'),
(193, 57, 1, 1, 'Boneless Beef', 2, 300, 350, 700, 'L'),
(195, 59, 1, 1, 'Boneless Beef', 1, 300, 350, 350, 'L'),
(196, 59, 1, 2, 'With bone Beef', 5, 250, 325, 1625, 'L'),
(197, 60, 1, 2, 'With bone Beef', 1, 250, 325, 325, 'L'),
(198, 60, 2, 3, 'Koliza/Liver', 2, 300, 400, 800, 'L'),
(199, 61, 1, 2, 'With bone Beef', 5, 250, 325, 1625, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL,
  `pay_orderid` int(11) DEFAULT NULL,
  `pay_date` datetime DEFAULT NULL,
  `pay_chkno` varchar(100) DEFAULT NULL,
  `pay_chkacno` varchar(100) DEFAULT NULL,
  `pay_chkacname` varchar(150) DEFAULT NULL,
  `pay_chkbank` varchar(100) DEFAULT NULL,
  `pay_chkbranch` varchar(100) DEFAULT NULL,
  `pay_chkdate` date DEFAULT NULL,
  `pay_crdno` varchar(50) DEFAULT NULL,
  `pay_crdtype` varchar(50) DEFAULT NULL,
  `pay_gldweight` double DEFAULT NULL,
  `pay_type` enum('CA','CC','GO','CH') DEFAULT NULL,
  `pay_amount` double DEFAULT NULL,
  `pay_remark` mediumtext,
  `pay_status` enum('P','D','R') NOT NULL,
  `pay_cashbook` enum('N','Y') NOT NULL DEFAULT 'N',
  `pay_ext1` varchar(50) DEFAULT NULL,
  `pay_action_date` date DEFAULT NULL,
  `pay_chk_stat` enum('N','Y') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_orderid`, `pay_date`, `pay_chkno`, `pay_chkacno`, `pay_chkacname`, `pay_chkbank`, `pay_chkbranch`, `pay_chkdate`, `pay_crdno`, `pay_crdtype`, `pay_gldweight`, `pay_type`, `pay_amount`, `pay_remark`, `pay_status`, `pay_cashbook`, `pay_ext1`, `pay_action_date`, `pay_chk_stat`) VALUES
(1, NULL, '2016-02-01 18:13:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 5, NULL, 'D', 'N', NULL, NULL, 'N'),
(11, 33, '2016-02-01 18:28:41', NULL, NULL, NULL, NULL, NULL, NULL, '132564', 'Visa', NULL, 'CC', 100, NULL, 'D', 'N', '', NULL, 'N'),
(14, 33, '2016-02-01 18:34:12', '4324', '12312312323', 'Engineers IT', 'BAFL', 'Sylhet', '2016-02-08', NULL, NULL, NULL, 'CH', 400, NULL, 'P', 'N', '', NULL, 'N'),
(22, 35, '2016-02-01 19:32:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 340, NULL, 'D', 'N', '', NULL, 'N'),
(23, 36, '2016-02-01 19:35:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 475, NULL, 'D', 'N', '', NULL, 'N'),
(24, 37, '2016-02-01 20:02:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1000, NULL, 'D', 'N', '', NULL, 'N'),
(25, 38, '2016-02-01 20:03:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 385, NULL, 'D', 'N', '', NULL, 'N'),
(26, 39, '2016-02-01 20:31:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 385, NULL, 'D', 'N', '', NULL, 'N'),
(27, 40, '2016-02-01 21:21:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1815, NULL, 'D', 'N', '', NULL, 'N'),
(28, 41, '2016-02-01 21:30:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 2675, NULL, 'D', 'N', '', NULL, 'N'),
(29, 42, '2016-02-02 12:12:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 2130, NULL, 'D', 'N', '', NULL, 'N'),
(30, 43, '2016-02-02 21:01:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 3585, NULL, 'D', 'N', '', NULL, 'N'),
(32, 44, '2016-02-03 00:55:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1000, NULL, 'D', 'N', '', NULL, 'N'),
(33, 45, '2016-02-03 01:00:21', NULL, NULL, NULL, NULL, NULL, NULL, '132564', 'Visa', NULL, 'CC', 1925, NULL, 'D', 'N', '', NULL, 'N'),
(34, 46, '2016-02-03 01:01:11', '4324', '12312312323', 'Engineers IT', 'BAFL', 'Sylhet', '2016-02-05', NULL, NULL, NULL, 'CH', 535, NULL, 'P', 'N', '', NULL, 'N'),
(35, 47, '2016-02-03 12:09:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1500, NULL, 'D', 'N', '', NULL, 'N'),
(36, 48, '2016-02-03 12:42:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 50, NULL, 'D', 'N', '', NULL, 'N'),
(37, 48, '2016-02-03 12:43:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 100, NULL, 'D', 'N', '', NULL, 'N'),
(46, 49, '2016-02-03 18:37:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1200, NULL, 'D', 'N', '', NULL, 'N'),
(47, 50, '2016-02-10 02:13:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1485, NULL, 'D', 'N', '', NULL, 'N'),
(48, 51, '2016-02-10 14:34:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 25, NULL, 'D', 'N', '', NULL, 'N'),
(49, 51, '2016-02-10 14:34:34', NULL, NULL, NULL, NULL, NULL, NULL, '123132131', 'Visa', NULL, 'CC', 400, NULL, 'D', 'N', '', NULL, 'N'),
(50, 51, '2016-02-10 14:34:58', '2123', '1231213', 'Engineers IT', 'BAFL', 'Sylhet', '2016-02-14', NULL, NULL, NULL, 'CH', 3000, NULL, 'P', 'N', '', NULL, 'N'),
(51, 52, '2016-02-13 12:38:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 2785, NULL, 'D', 'N', '', NULL, 'N'),
(52, 53, '2016-02-15 15:23:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 3995, NULL, 'D', 'N', '', NULL, 'N'),
(53, 54, '2016-02-17 16:35:48', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 2275, NULL, 'D', 'N', '', NULL, 'N'),
(54, 55, '2016-02-25 14:48:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 350, NULL, 'D', 'N', '', NULL, 'N'),
(55, 57, '2016-03-05 14:08:35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 2325, NULL, 'D', 'N', '', NULL, 'N'),
(56, 59, '2016-03-07 20:55:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1975, NULL, 'D', 'N', '', NULL, 'N'),
(57, 60, '2016-03-08 16:41:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CA', 1125, NULL, 'D', 'N', '', NULL, 'N');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `prd_id` int(11) NOT NULL,
  `prd_pname` int(11) DEFAULT NULL,
  `prd_phead` int(11) DEFAULT NULL,
  `prd_supplier` int(11) DEFAULT NULL,
  `prd_sku` varchar(150) DEFAULT NULL,
  `prd_upc` varchar(50) DEFAULT NULL,
  `prd_rack` varchar(50) DEFAULT NULL,
  `prd_img` varchar(150) DEFAULT NULL,
  `prd_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prd_id`, `prd_pname`, `prd_phead`, `prd_supplier`, `prd_sku`, `prd_upc`, `prd_rack`, `prd_img`, `prd_desc`) VALUES
(1, 1, 1, 1, 'BNG123', NULL, '1', 'uploads/products/prod_20160307135247.png', 'Beef'),
(2, 1, 1, 1, 'BNG123', NULL, '1', 'uploads/products/prod_20160307065615.png', 'Koliza/Liver'),
(3, 1, 1, 1, '', NULL, '3', 'uploads/products/prod_20160307141327.png', 'Bhuri'),
(4, 1, 1, 1, '', NULL, '3', 'uploads/products/prod_20160307141521.png', 'Paya/Leg bone'),
(5, 1, 1, 1, '', NULL, '3', 'uploads/products/prod_20160307141625.png', 'Mogoz/Brain'),
(6, 1, 1, 1, '', NULL, '3', 'uploads/products/prod_20160307141642.png', 'Sina/Chest'),
(7, 2, 1, 1, '', NULL, '5', 'uploads/products/prod_20160307142141.png', 'Mutton'),
(8, 2, 1, 1, '', NULL, '5', 'uploads/products/prod_20160307142155.png', 'Kolla'),
(9, 3, 1, 1, '', NULL, '6', 'uploads/products/prod_20160307142225.png', 'Vhera/Lamb'),
(10, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142319.png', 'Broiler Live'),
(11, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142324.png', 'Broiler Skinless'),
(12, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142349.png', 'Sonali Skinless'),
(13, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142354.png', 'Sonali Live'),
(14, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142427.png', 'Cork Live'),
(15, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142434.png', 'Cork Skinless'),
(16, 4, 1, 1, '', NULL, '7', 'uploads/products/prod_20160307142507.png', 'Deshi Chicken'),
(17, 5, 1, 1, '', NULL, '8', 'uploads/products/prod_20160307142648.png', 'Hash/Duck'),
(18, 5, 1, 1, '', NULL, '8', 'uploads/products/prod_20160307142714.png', 'Kobutor/pigeon '),
(19, 5, 1, 1, '', NULL, '8', 'uploads/products/prod_20160307142730.png', 'Koel'),
(20, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307142925.png', 'Rui'),
(21, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307142931.png', 'Katla'),
(22, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307142946.png', 'Mrigel'),
(23, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143139.png', 'Crapew '),
(24, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143056.png', 'Grass Carp'),
(25, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143206.png', 'Ayer'),
(26, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143217.png', 'Bual'),
(27, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143224.png', 'Chitol'),
(28, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143232.png', 'Shoul'),
(29, 6, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143239.png', 'Gozar'),
(30, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143347.png', 'Shing'),
(31, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143404.png', 'Magur'),
(32, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143410.png', 'Koi'),
(33, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143418.png', 'Telapia'),
(34, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143429.png', 'Loti'),
(35, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143438.png', 'Baim'),
(36, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143448.png', 'Shor Puti'),
(37, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143500.png', 'Laso'),
(38, 7, 2, 2, '', NULL, '', 'uploads/products/prod_20160307143533.png', 'Kangla/Foli'),
(39, 8, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143646.png', 'Hilsha'),
(40, 8, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143700.png', 'King prawn '),
(41, 8, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143715.png', 'Pabda'),
(42, 8, 2, 2, '', NULL, '9', 'uploads/products/prod_20160307143724.png', 'Rupchanda'),
(43, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143846.png', 'Tangra'),
(44, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143851.png', 'Mola'),
(45, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143858.png', 'Laiya'),
(46, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143913.png', 'Deshi Prawn'),
(47, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143922.png', 'Puti'),
(48, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143931.png', 'Vhera'),
(49, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143940.png', 'Keski'),
(50, 9, 2, 2, '', NULL, '11', 'uploads/products/prod_20160307143947.png', 'Rani');

-- --------------------------------------------------------

--
-- Table structure for table `product_head`
--

CREATE TABLE IF NOT EXISTS `product_head` (
  `pdth_id` int(11) NOT NULL,
  `pdth_name` varchar(150) DEFAULT NULL,
  `pdth_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_head`
--

INSERT INTO `product_head` (`pdth_id`, `pdth_name`, `pdth_desc`) VALUES
(1, 'Meat', 'Meat'),
(2, 'Fish', 'Fish');

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

CREATE TABLE IF NOT EXISTS `product_name` (
  `pn_id` int(11) NOT NULL,
  `pn_head` int(11) DEFAULT NULL,
  `pn_name` varchar(150) DEFAULT NULL,
  `pn_desc` varchar(250) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`pn_id`, `pn_head`, `pn_name`, `pn_desc`) VALUES
(1, 1, 'Beef', 'Beef'),
(2, 1, 'Mutton', 'Mutton'),
(3, 1, 'Vhera', 'Vhera'),
(4, 1, 'Chicken', 'Chicken'),
(5, 1, 'Bird', 'Bird'),
(6, 2, 'A', 'Fish A'),
(7, 2, 'B', 'Fish B'),
(8, 2, 'Sea Fish', 'Sea Fish'),
(9, 2, 'C', 'Fish C');

-- --------------------------------------------------------

--
-- Table structure for table `product_price`
--

CREATE TABLE IF NOT EXISTS `product_price` (
  `prc_id` int(11) NOT NULL,
  `prc_prd_id` int(11) DEFAULT NULL,
  `prc_upc` varchar(50) DEFAULT NULL,
  `prc_desc` varchar(150) DEFAULT NULL,
  `prc_name` varchar(150) DEFAULT NULL,
  `prc_unt_typ` enum('KG','BX','PC','LT') DEFAULT NULL,
  `prc_unit_price` double DEFAULT NULL,
  `prc_selling_price` double DEFAULT NULL,
  `prc_allow_neg` enum('Y','N') NOT NULL DEFAULT 'N',
  `prc_total_prd` int(11) DEFAULT NULL,
  `prc_threshold` int(4) DEFAULT NULL,
  `prc_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_price`
--

INSERT INTO `product_price` (`prc_id`, `prc_prd_id`, `prc_upc`, `prc_desc`, `prc_name`, `prc_unt_typ`, `prc_unit_price`, `prc_selling_price`, `prc_allow_neg`, `prc_total_prd`, `prc_threshold`, `prc_date`) VALUES
(1, 1, '1001', 'Boneless Beef', 'Boneless', 'KG', 300, 350, 'N', 0, 25, '2016-02-24'),
(2, 1, '1002', 'With bone Beef', 'Boneless', 'KG', 250, 325, 'N', 39, 10, '2016-03-01'),
(3, 2, '1003', 'Koliza/Liver', 'Beef', 'KG', 300, 400, 'Y', 498, 10, '2016-03-07'),
(4, 3, '1004', 'Bhuri', 'Beef', 'KG', 50, 100, 'N', 100, 10, '2016-03-07');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `function` varchar(50) DEFAULT NULL,
  `crud` char(4) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`, `function`, `crud`) VALUES
(1, 'User Maintenance', 'User Maintenance', 'usermaintenance', 'CRUD'),
(2, 'Role', 'Role', 'role', 'CRUD'),
(3, 'Type', 'Type', 'type', 'CRUD'),
(4, 'User', 'User', 'user', 'CRUD'),
(5, 'Store', 'Store', 'store', 'CRUD'),
(6, 'Staff', 'Staff', 'staff', 'CRUD'),
(7, 'Salary', 'Salary', 'salary', 'CRUD'),
(8, 'Loan', 'Loan', 'loan', 'CRUD'),
(9, 'Daily Entry', 'Daily Entry', 'dailyentry', 'CRUD'),
(10, 'Expence', 'Expence', 'expence', 'CRUD'),
(11, 'Supplier', 'Supplier', 'supplier', 'CRUD'),
(12, 'Consignment', 'Consignment', 'consignment', 'CRUD'),
(13, 'Product', 'Product', 'product', 'CRUD'),
(14, 'Product Type', '', 'producttype', 'CRUD'),
(15, 'Product Name', 'Product Name', 'productname', 'CRUD'),
(16, 'price', 'Price', 'price', 'CRUD'),
(17, 'Order', 'Order', 'order', 'CRUD'),
(18, 'Payment', 'Payment', 'payment', 'CRUD'),
(19, 'Stock', 'Stock', 'stock', 'CRUD'),
(20, 'Transfer', 'Transfer', 'transfer', 'CRUD'),
(21, 'Barcode', 'Barcode', 'barcode', 'CRUD');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `str_id` int(11) NOT NULL,
  `str_name` varchar(150) DEFAULT NULL,
  `str_initials` varchar(50) DEFAULT NULL,
  `str_logo` varchar(150) DEFAULT NULL,
  `str_address` varchar(250) DEFAULT NULL,
  `str_phone` varchar(50) DEFAULT NULL,
  `str_email` varchar(50) DEFAULT NULL,
  `str_vat_percent` double NOT NULL DEFAULT '0',
  `str_point_percent` double NOT NULL DEFAULT '0',
  `str_score_percent` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`str_id`, `str_name`, `str_initials`, `str_logo`, `str_address`, `str_phone`, `str_email`, `str_vat_percent`, `str_point_percent`, `str_score_percent`) VALUES
(1, 'Bangla Meat and Fish', 'MB', NULL, 'Darshan Dewri, Sylhet', '0821761010', 'info@test.com', 0, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(150) DEFAULT NULL,
  `sup_address` varchar(250) DEFAULT NULL,
  `sup_phone` varchar(50) DEFAULT NULL,
  `sup_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_name`, `sup_address`, `sup_phone`, `sup_email`) VALUES
(1, 'Bongai Miya', 'Shibgonj', '0171', ''),
(2, 'Kazi Farms Group', 'Dhaka', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `trn_id` int(11) NOT NULL,
  `trn_desc` varchar(750) DEFAULT NULL,
  `trn_date` date DEFAULT NULL,
  `trn_supp_id` int(11) DEFAULT NULL,
  `trn_in` double DEFAULT NULL,
  `trn_out` double DEFAULT NULL,
  `trn_status` enum('EX','SL','VT','CN') NOT NULL,
  `trn_ex1` varchar(50) DEFAULT NULL,
  `trn_ex2` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trn_id`, `trn_desc`, `trn_date`, `trn_supp_id`, `trn_in`, `trn_out`, `trn_status`, `trn_ex1`, `trn_ex2`) VALUES
(1, 'Consignment recieved. Invoice ID: 123, Total amount: 253000', '2016-02-08', 1, 253000, NULL, 'CN', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(45) DEFAULT NULL,
  `usr_fname` varchar(45) DEFAULT NULL,
  `usr_lname` varchar(45) DEFAULT NULL,
  `usr_sex` varchar(10) DEFAULT NULL,
  `usr_dob` date DEFAULT NULL,
  `usr_user_type` int(11) DEFAULT NULL,
  `usr_pic` varchar(150) DEFAULT NULL,
  `usr_add` varchar(250) DEFAULT NULL,
  `usr_email` varchar(45) DEFAULT NULL,
  `usr_phone` varchar(45) DEFAULT NULL,
  `usr_blood` varchar(45) DEFAULT NULL,
  `usr_pass` varchar(250) DEFAULT NULL,
  `usr_nid` varchar(45) DEFAULT NULL,
  `usr_status` enum('L','D','B') DEFAULT NULL,
  `usr_view` enum('S','H') DEFAULT 'S'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_fname`, `usr_lname`, `usr_sex`, `usr_dob`, `usr_user_type`, `usr_pic`, `usr_add`, `usr_email`, `usr_phone`, `usr_blood`, `usr_pass`, `usr_nid`, `usr_status`, `usr_view`) VALUES
(1, 'panna', 'Abedur', 'Rahman', 'Male', '1982-02-28', 1, 'uploads/profilepic/Prof_20160106091323.jpg', 'Prottasha 4, Block A, Mohammadpur, Islampur, Sylhet', 'abedur@gmail.com', '01712252448', NULL, 'Jp0AYdgVgpfhsy+hEAiqNOt2oUmymcwzXB3taHeyUFCw2ZCuEOAGhu/4+dQiUby4gWPYKgYKsNf0QJLThzZI2Q==', NULL, 'L', 'H'),
(2, 'HIRUS ', 'Abedur', 'Rahman', NULL, '2016-01-21', 1, 'uploads/profilepic/Prof_20160121122727.png', 'test', 'info@WilsonWalkerCanada.com', '18668667749', NULL, '02jANxXHFieY1EI1qaFik00Op71FOEaDCE2G2qV5La9F9GZ2D9mUZfK/TdFcui3poSDJrvNQT9YvN81ZMY9FRw==', NULL, 'L', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `typ_id` int(11) NOT NULL,
  `typ_name` varchar(150) DEFAULT NULL,
  `typ_description` varchar(750) DEFAULT NULL,
  `typ_roles` varchar(450) DEFAULT NULL,
  `typ_changeable` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`typ_id`, `typ_name`, `typ_description`, `typ_roles`, `typ_changeable`) VALUES
(1, 'Admin', 'Administrator', '21,12,9,10,8,17,18,16,13,15,14,2,7,6,19,5,11,20,3,4,1', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consignment`
--
ALTER TABLE `consignment`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `consignment_items`
--
ALTER TABLE `consignment_items`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id_countries`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cstr_id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`cstt_id`);

--
-- Indexes for table `nextids`
--
ALTER TABLE `nextids`
  ADD PRIMARY KEY (`nid_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`oi_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prd_id`);

--
-- Indexes for table `product_head`
--
ALTER TABLE `product_head`
  ADD PRIMARY KEY (`pdth_id`);

--
-- Indexes for table `product_name`
--
ALTER TABLE `product_name`
  ADD PRIMARY KEY (`pn_id`),
  ADD KEY `pn_head` (`pn_head`);

--
-- Indexes for table `product_price`
--
ALTER TABLE `product_price`
  ADD PRIMARY KEY (`prc_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`str_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`sup_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trn_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`typ_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consignment`
--
ALTER TABLE `consignment`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `consignment_items`
--
ALTER TABLE `consignment_items`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id_countries` int(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cstr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `customer_type`
--
ALTER TABLE `customer_type`
  MODIFY `cstt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nextids`
--
ALTER TABLE `nextids`
  MODIFY `nid_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `oi_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=200;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prd_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product_head`
--
ALTER TABLE `product_head`
  MODIFY `pdth_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_name`
--
ALTER TABLE `product_name`
  MODIFY `pn_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_price`
--
ALTER TABLE `product_price`
  MODIFY `prc_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `str_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `typ_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
