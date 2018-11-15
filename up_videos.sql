-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 16:40
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upload_video`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `up_videos`
--

CREATE TABLE `up_videos` (
  `id` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `name_files` varchar(100) NOT NULL,
  `url` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `up_videos`
--

INSERT INTO `up_videos` (`id`, `type`, `name_files`, `url`) VALUES
(27, 1, 'VÃ­deo de teste', '2c0b97768cd3419f859c1645ee6228b0'),
(28, 2, 'Ãudio de teste', '68b2c94b79b05f327c9953bf054b3171'),
(29, 0, 'Imagem de teste', 'e91fbcfa6008a3968f5d8c7ee4b6361d'),
(30, 1, 'Testando', '33810e3fc6830710ec41653d977910ec'),
(31, 2, 'Testando Ã¡udio', '74bf98a3481f363344fd4e7f74b167e4'),
(32, 0, 'Layout Style', '836e1ce5be71d260e2d3aec8bf82c912'),
(33, 1, 'My VÃ­deo', '432e5a5551acf8d1ebf80fb4b37620b9'),
(34, 2, 'My Music', '396bb0cd7b693c4b3873cf0b98c8445e'),
(35, 0, 'Imagem para layout', '02a6256db5d0ad5b08d693c34c09c0c2'),
(36, 0, 'Mais uma de teste', 'e0916180476f7f3a0a0200371393fecc'),
(41, 1, 'Finaly', 'ea0d363bc66fac98aecba95adee60bfc'),
(42, 2, 'My finaly music', 'd895e9b67e16ac72cedfa994f86a5509'),
(43, 0, 'Finishing', '70bb62dbd56b50f132b19333ea7b5e86');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `up_videos`
--
ALTER TABLE `up_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `up_videos`
--
ALTER TABLE `up_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
