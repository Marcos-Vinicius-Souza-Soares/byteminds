-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2023 at 12:35 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byteminds`
--

-- --------------------------------------------------------

--
-- Table structure for table `projeto`
--

CREATE TABLE `projeto` (
  `id` int(11) NOT NULL,
  `cargo` varchar(30) DEFAULT NULL,
  `cliente` varchar(30) DEFAULT NULL,
  `preco` int(30) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projeto`
--

INSERT INTO `projeto` (`id`, `cargo`, `cliente`, `preco`, `data`) VALUES
(1, 'Desenvolvimento mobile', 'Empresa A', 1499, '2023-06-01'),
(2, 'Desenvolvimento Web', 'Empresa B', 2000, '2023-06-02'),
(3, 'CyberSegurança', 'Empresa C', 3000, '2023-06-03'),
(4, 'Suporte Tecnico', 'Empresa D', 1200, '2023-06-04'),
(5, 'Desenvolvimento mobile', 'Empresa E', 1800, '2023-06-05'),
(6, 'Desenvolvimento Web', 'Empresa F', 2500, '2023-06-06'),
(7, 'CyberSegurança', 'Empresa G', 3500, '2023-06-07'),
(8, 'Suporte Tecnico', 'Empresa H', 1100, '2023-06-08'),
(9, 'Desenvolvimento mobile', 'Empresa I', 1600, '2023-06-09'),
(10, 'Desenvolvimento Web', 'Empresa J', 2200, '2023-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`) VALUES
(1, 'vinicius@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projeto`
--
ALTER TABLE `projeto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
