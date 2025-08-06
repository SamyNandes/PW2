-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 08:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro_cur_alu`
--

-- --------------------------------------------------------

--
-- Table structure for table `aluno`
--

CREATE TABLE `aluno` (
  `nome_alu` text NOT NULL,
  `idade_alu` int(2) NOT NULL,
  `curso_alu` text NOT NULL,
  `id_alu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aluno`
--

INSERT INTO `aluno` (`nome_alu`, `idade_alu`, `curso_alu`, `id_alu`) VALUES
('Luara de Oliveira Romeiro', 16, 'DS', 1),
('Luara de Oliveira Romeiro', 16, 'DS', 2),
('Luara de Oliveira Romeiro', 16, 'DS', 3),
('jao', 0, 'ds', 4),
('jao', 0, 'ds', 5),
('jao', 0, 'ds', 6),
('jao', 0, 'ds', 7),
('jao', 0, 'ds', 8),
('jao', 0, 'ds', 9),
('jao', 0, 'ds', 10),
('assa', 0, 'assa', 11);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `nome_curso` text NOT NULL,
  `turno_curso` text NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id_prof` int(11) NOT NULL,
  `nome_prof` text DEFAULT NULL,
  `email_prof` text DEFAULT NULL,
  `id_escola` int(11) DEFAULT NULL,
  `senha_prof` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id_prof`, `nome_prof`, `email_prof`, `id_escola`, `senha_prof`) VALUES
(1, 'Samyra Fernandes', 'samyrafernandes89@gmail.com', 125, '123'),
(2, 'Josefina', 'josefina@gmail.com', 123, '123'),
(3, 'Josefina', 'josefina@gmail.com', 123, '123'),
(4, 'Josefina', 'josefina@gmail.com', 123, '123'),
(5, 'Josefina', 'josefina@gmail.com', 123, '123'),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a'),
(9, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(10, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(11, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(12, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(13, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(14, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(15, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(16, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(17, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(18, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(19, 'Josefina', 'samyrafernandes89@gmail.com', 123, 'a654546'),
(20, '', '', 0, ''),
(21, 'assadsa', 'sdasdasad', 0, 'sdaasd'),
(22, 'assadsa', 'sdasdasad', 0, 'sdaasd'),
(23, 'assadsa', 'sdasdasad', 0, 'sdaasd'),
(24, 'assadsa', 'sdasdasad', 0, 'sdaasd'),
(25, 'ASSA', 'SASASA', 2, 'ASSASA'),
(26, 'asas', 'sasasa', 123, 'assasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_alu`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id_prof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_alu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
