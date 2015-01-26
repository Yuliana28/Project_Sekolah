-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2015 at 01:46 
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `buatdatadokter`
--

CREATE TABLE IF NOT EXISTS `buatdatadokter` (
  `id_num` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `praktek` varchar(50) NOT NULL,
  `kerja` varchar(50) NOT NULL,
  PRIMARY KEY (`id_num`,`nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `buatdatadokter`
--


-- --------------------------------------------------------

--
-- Table structure for table `dokterbaru`
--

CREATE TABLE IF NOT EXISTS `dokterbaru` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `lahir` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `praktek` varchar(50) NOT NULL,
  `kerja` varchar(50) NOT NULL,
  PRIMARY KEY (`nama`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `dokterbaru`
--


-- --------------------------------------------------------

--
-- Table structure for table `pasienbaru`
--

CREATE TABLE IF NOT EXISTS `pasienbaru` (
  `nama` int(10) NOT NULL AUTO_INCREMENT,
  `namalengkap` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `lahir` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `gol` varchar(30) NOT NULL,
  `penderita` varchar(30) NOT NULL,
  `keluhan` varchar(30) NOT NULL,
  PRIMARY KEY (`namalengkap`),
  UNIQUE KEY `nama` (`nama`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pasienbaru`
--

INSERT INTO `pasienbaru` (`nama`, `namalengkap`, `alamat`, `lahir`, `gender`, `gol`, `penderita`, `keluhan`) VALUES
(3, 'Nabilah', 'Ciampel', '12/12/1999', 'p', 'a', 'tidak ada', 'tidak ada'),
(1, 'Yuliana', 'Cijeungjin', '28/11/1997', 'P', 'A', 'tidak ada', 'tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_num` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` enum('apoteker','office','dokter','admin') NOT NULL,
  PRIMARY KEY (`username`),
  UNIQUE KEY `id_num` (`id_num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_num`, `username`, `password`, `type`) VALUES
(3, 'apoteker', 'apoteker', 'apoteker'),
(4, 'dokter', 'dokter', 'dokter'),
(1, 'office', 'office', 'office'),
(2, 'yuliana', 'yuliana', 'admin');
