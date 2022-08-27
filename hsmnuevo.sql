-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hsmnuevo`
--

-- --------------------------------------------------------

--
-- Table structure for table `facturas_buscador`
--

CREATE TABLE `facturas_buscador` (
  `id` int(11) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `nlote` varchar(10) DEFAULT NULL,
  `mes` varchar(100) NOT NULL,
  `linkfactura` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facturas_buscador`
--

INSERT INTO `facturas_buscador` (`id`, `dni`, `nlote`, `mes`, `linkfactura`) VALUES
(3, '38267016', '14', 'Octubre 2020', 'https://hogares.telecom.com.ar/ayuda/fol/'),
(4, '11111111', '1', 'Octubre 2020', 'https://hogares.telecom.com.ar/ayuda/fol/'),
(9, '42565740', '2', 'Noviembre 2020', 'www.google.com'),
(10, '42565740', '3', 'Noviembre 2020', 'https://meet.google.com/linkredirect?authuser=0&dest=http%3A%2F%2Fwww.webvalue.com.ar%2Fharassantamaria%2Fdocumentos%2Ffactpru.pdf'),
(11, '42565740', '4', 'Diciembre 2020', 'www.google.com'),
(12, '42565740', '5', 'Diciembre 2020', 'www.google.com'),
(13, '20428504', '341', 'Junio 2021', 'L-341.pdf'),
(14, '12345678', '1135', 'Junio 2021', 'L-1135.pdf'),
(15, '87654321', '1144', 'Junio 2021', 'L-1144.pdf'),
(16, '11111111', '1318', 'Junio 2021', 'L-1318.pdf'),
(17, '42565740', '1575', 'Junio 2021', 'L-1575.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `dni` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`dni`, `password`) VALUES
(38267016, '1'),
(42565740, '1'),
(20428504, '20428504'),
(12345678, '12345678'),
(87654321, '87654321'),
(11111111, '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facturas_buscador`
--
ALTER TABLE `facturas_buscador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facturas_buscador`
--
ALTER TABLE `facturas_buscador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
