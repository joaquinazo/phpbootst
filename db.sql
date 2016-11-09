-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 09, 2016 at 05:15 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `maquina`
--

-- --------------------------------------------------------

--
-- Table structure for table `deposito`
--

CREATE TABLE `deposito` (
  `id` int(11) NOT NULL,
  `nombreMoneda` varchar(45) DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deposito`
--

INSERT INTO `deposito` (`id`, `nombreMoneda`, `valor`, `cantidad`) VALUES
(5, 'cinco', 5, 10),
(10, 'diez', 10, 10),
(20, 'veinte', 20, 20),
(50, 'cincu', 50, NULL),
(100, 'Cien', 100, 10),
(200, 'doscienos', 200, 10);

-- --------------------------------------------------------

--
-- Table structure for table `dispensador`
--

CREATE TABLE `dispensador` (
  `clave` varchar(10) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dispensador`
--

INSERT INTO `dispensador` (`clave`, `nombre`, `precio`, `cantidad`) VALUES
('asdasd', 'asdasd', 99999, 223),
('Sprite', 'sprite', 110, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposito`
--
ALTER TABLE `deposito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispensador`
--
ALTER TABLE `dispensador`
  ADD PRIMARY KEY (`clave`);
