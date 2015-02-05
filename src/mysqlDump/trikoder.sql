-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2015 at 05:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trikoder`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `idInvoice` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date_of_creation` datetime DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `brutto` int(10) unsigned DEFAULT NULL,
  `tax_amount` int(10) unsigned DEFAULT NULL,
  `info_o_kupcu` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idInvoice`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idInvoice`, `date_of_creation`, `due_date`, `brutto`, `tax_amount`, `info_o_kupcu`) VALUES
(2, '2015-02-05 16:45:31', '2015-02-06', 7000, 7050, 'Slaven, Vijenac'),
(3, '2015-02-05 16:45:31', '2015-02-06', 7000, 7050, 'Slaven, Vijenac');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_item`
--

CREATE TABLE IF NOT EXISTS `invoice_item` (
  `idInvoiceItem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Invoice_idInvoice` int(10) unsigned NOT NULL,
  `amount_of_product` int(10) unsigned DEFAULT NULL,
  `item_price` int(10) unsigned DEFAULT NULL,
  `total_price` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`idInvoiceItem`),
  KEY `Invoice_item_FKIndex1` (`idInvoiceItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `invoice_item`
--

INSERT INTO `invoice_item` (`idInvoiceItem`, `Invoice_idInvoice`, `amount_of_product`, `item_price`, `total_price`) VALUES
(1, 1, 4, 4000, 16000),
(2, 2, 5, 5000, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `idProduct` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Invoice_item_idInvoiceItem` int(10) unsigned NOT NULL,
  `Invoice_idInvoice` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idProduct`),
  KEY `Product_FKIndex1` (`Invoice_idInvoice`),
  KEY `Product_FKIndex2` (`Invoice_item_idInvoiceItem`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idProduct`, `Invoice_item_idInvoiceItem`, `Invoice_idInvoice`, `name`, `category`) VALUES
(1, 1, 1, 'apple', 'Mac'),
(2, 2, 2, 'win 7', 'Win'),
(3, 0, 0, 'Winows', 'Win'),
(4, 0, 0, 'Winows', 'Win'),
(5, 2, 3, 'Windows', 'Win'),
(6, 2, 3, 'Windows', 'Win'),
(7, 2, 3, 'Windows', 'Win'),
(8, 2, 3, 'Windows', 'Win'),
(9, 2, 3, 'Wiows', 'Win'),
(10, 2, 3, 'Wiows', 'Win'),
(11, 2, 3, 'Wiows', 'Win'),
(12, 2, 3, 'Wiows', 'Win'),
(13, 2, 3, 'Wiows', 'Win');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
