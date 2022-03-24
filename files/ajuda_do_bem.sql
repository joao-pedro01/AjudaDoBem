-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Mar-2022 às 18:41
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ajuda_do_bem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `username` varchar(25) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(32) COLLATE utf8_bin NOT NULL,
  `celular` varchar(15) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(14) COLLATE utf8_bin NOT NULL,
  `rg` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `username`, `email`, `senha`, `celular`, `cpf`, `rg`, `data`, `hora`) VALUES
(1, '', '', '', '', '', '', '', '0000-00-00', '00:00:00'),
(2, 'João Pedro', 'joao-pedro01', 'joao_pedro01@terra.com.br', '1234', '(15) 98121-2171', '038', '123', '0000-00-00', '00:00:00'),
(3, '', '', '', '', '', '', '', '0000-00-00', '00:00:00'),
(4, 'João Pedro', 'joao-pedro01', 'joao_pedro01@terra.com.br', '1234', '(15)98121-2171', '038', '1234', '0000-00-00', '00:00:00'),
(5, '', '', '', '', '', '', '', '0000-00-00', '00:00:00'),
(6, '', '', '', '', '', '', '', '0000-00-00', '00:00:00'),
(7, '', '', '', '', '', '', '\"2022-03-24\"04:', '0000-00-00', '00:00:00'),
(8, '', '', '', '', '', '', '\"2022-03-24\"04:', '0000-00-00', '00:00:00'),
(9, '', '', '', '', '', '', '', '2022-03-24', '05:00:32'),
(10, '', '', '', '', '', '', '', '2022-03-24', '05:00:33'),
(11, 'joao', 'joao-pedro01', 'joao_pedro01@terra.com.br', '1234', '(15)98121-2171', '038', '124', '2022-03-24', '05:02:26'),
(12, '', '', '', '', '', '', '', '2022-03-24', '05:04:31'),
(13, '', '', '', '', '', '', '', '2022-03-24', '05:04:33'),
(14, '', '', '', '', '', '', '', '2022-03-24', '05:04:56'),
(15, '', '', '', '', '', '', '', '2022-03-24', '05:07:02'),
(16, '', '', '', '', '', '', '', '2022-03-24', '05:18:57'),
(17, '', '', '', '', '', '', '', '2022-03-24', '05:18:58'),
(18, '', '', '', '', '', '', '', '2022-03-24', '05:19:00'),
(19, 'João Pedro', '', '', '', '', '', '', '2022-03-24', '05:19:11'),
(20, '', '', '', '', '', '', '', '2022-03-24', '05:19:11'),
(21, '$Name', '', '', '', '', '', '', '2022-03-24', '05:30:24'),
(22, '', '', '', '', '', '', '', '2022-03-24', '05:42:39'),
(23, '', '', 'joao_pedro01@terra.com.br', '', '', '', '', '2022-03-24', '05:42:43'),
(24, '', '', '', '', '', '', '', '2022-03-24', '05:43:51'),
(25, '', '', '', '', '', '', '', '2022-03-24', '05:45:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;