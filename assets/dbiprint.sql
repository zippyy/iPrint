-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2016 at 02:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbiprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cstmr`
--

CREATE TABLE IF NOT EXISTS `tbl_cstmr` (
  `attr_cstmr_id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_cstmr_fname` varchar(255) NOT NULL,
  `attr_cstmr_lname` varchar(255) NOT NULL,
  `attr_cstmr_usrnm` varchar(255) NOT NULL,
  `attr_cstmr_psswrd` varchar(255) NOT NULL,
  `attr_cstmr_addrss` varchar(255) NOT NULL,
  `attr_cstmr_cntct_no` bigint(20) NOT NULL,
  PRIMARY KEY (`attr_cstmr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_cstmr`
--

INSERT INTO `tbl_cstmr` (`attr_cstmr_id`, `attr_cstmr_fname`, `attr_cstmr_lname`, `attr_cstmr_usrnm`, `attr_cstmr_psswrd`, `attr_cstmr_addrss`, `attr_cstmr_cntct_no`) VALUES
(15, 'Franklin', 'Embate', 'Franklin@gmail.com', '23', '1857 yakal street ponce capitol cebu city', 9323091393);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fl_attch`
--

CREATE TABLE IF NOT EXISTS `tbl_fl_attch` (
  `attr_fl_attch_id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_fl_attch_nm` varchar(255) NOT NULL,
  PRIMARY KEY (`attr_fl_attch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_fl_attch`
--

INSERT INTO `tbl_fl_attch` (`attr_fl_attch_id`, `attr_fl_attch_nm`) VALUES
(1, '3223'),
(2, '14549043103a7a27a.jpg'),
(3, '1454904418111301529704168563164959149568205642993476n.jpg'),
(4, '1454904605111301529704168563164959149568205642993476n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jb_ordr`
--

CREATE TABLE IF NOT EXISTS `tbl_jb_ordr` (
  `attr_jb_id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_cstmr_id` int(11) NOT NULL,
  `attr_fl_attch_id` int(11) NOT NULL,
  `attr_prntng_shp_id` int(11) NOT NULL,
  `attr_jb_date` date NOT NULL,
  PRIMARY KEY (`attr_jb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_jb_ordr`
--

INSERT INTO `tbl_jb_ordr` (`attr_jb_id`, `attr_cstmr_id`, `attr_fl_attch_id`, `attr_prntng_shp_id`, `attr_jb_date`) VALUES
(1, 15, 1, 1, '2016-02-25'),
(2, 15, 2, 1, '0000-00-00'),
(3, 15, 4, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prntng_shp`
--

CREATE TABLE IF NOT EXISTS `tbl_prntng_shp` (
  `attr_prn_shp_id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_ps_contact` varchar(255) NOT NULL,
  `attr_ps_lat` double NOT NULL,
  `attr_ps_long` double NOT NULL,
  `attr_prntng_shp_name` varchar(255) NOT NULL,
  `attr_prntng_shp_addrss` varchar(255) NOT NULL,
  `attr_prn_shp_ownr_id` int(11) NOT NULL,
  PRIMARY KEY (`attr_prn_shp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_prntng_shp`
--

INSERT INTO `tbl_prntng_shp` (`attr_prn_shp_id`, `attr_ps_contact`, `attr_ps_lat`, `attr_ps_long`, `attr_prntng_shp_name`, `attr_prntng_shp_addrss`, `attr_prn_shp_ownr_id`) VALUES
(1, '09323091393', 10.2802535, 123.615322, 'iPrint Store', '1857 yakal street ponce capitol cebu city', 1),
(4, '09323091393', 10.2802535, 123.615322, 'iPrint 2 Shop', 'insert_new_shop', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prn_shop_ownr`
--

CREATE TABLE IF NOT EXISTS `tbl_prn_shop_ownr` (
  `attr_prn_shop_ownr_id` int(11) NOT NULL AUTO_INCREMENT,
  `attr_ownr_fname` varchar(255) NOT NULL,
  `attr_ownr_lname` varchar(255) NOT NULL,
  `attr_ownr_usrnm` varchar(255) NOT NULL,
  `attr_ownr_psswrd` varchar(255) NOT NULL,
  `attr_ownr_addrss` varchar(255) NOT NULL,
  `attr_ownr_cntct_no` int(11) NOT NULL,
  PRIMARY KEY (`attr_prn_shop_ownr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_prn_shop_ownr`
--

INSERT INTO `tbl_prn_shop_ownr` (`attr_prn_shop_ownr_id`, `attr_ownr_fname`, `attr_ownr_lname`, `attr_ownr_usrnm`, `attr_ownr_psswrd`, `attr_ownr_addrss`, `attr_ownr_cntct_no`) VALUES
(1, 'Franklin', 'Embate', 'ferox.dragon@gmail.com', '213', '1857 yakal street ponce capitol cebu city', 2147483647);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
