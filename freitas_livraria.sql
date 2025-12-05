-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/12/2025 às 00:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `freitas_livraria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formas_pagamentos`
--

CREATE TABLE `formas_pagamentos` (
  `id_forma_pagamento` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `taxa` decimal(4,3) DEFAULT NULL,
  `desconto` decimal(4,3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` bigint(20) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `preco` double NOT NULL,
  `descricao` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `titulo`, `autor`, `preco`, `descricao`) VALUES
(1, 'dasd', 'dadas', 25, 'dqdwq');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nome_social` varchar(255) NOT NULL,
  `genero` char(1) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `rg` varchar(30) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `celular` varchar(20) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `nivel_acesso` enum('Administrador','Funcionario','Cliente') NOT NULL,
  `senha` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `nome_social`, `genero`, `cpf`, `rg`, `data_nascimento`, `celular`, `rua`, `numero`, `complemento`, `bairro`, `cidade`, `cep`, `estado`, `email`, `nivel_acesso`, `senha`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'João Vitor Freitas', 'João', 'M', '123.456.789-00', '12.345.678-9', '2000-05-10', '(31) 98765-4321', 'Rua das Flores', '100', 'Apto 202', 'Centro', 'Belo Horizonte', '30110-000', 'MG', 'joao@example.com', 'Administrador', '$2y$10$ExemploDeSenhaCriptografadaAqui', '2025-11-14 00:08:49', '2025-11-14 00:08:49', NULL),
(2, 'Luis', 'Luizao', 'M', '1321314', NULL, '2005-02-05', '1499888888', NULL, '5', 'Nada', 'Bairro aleatorio', 'Jau', NULL, 'SP', 'luis@gmail.com', '', '$2y$10$9.dbFpCiY2T.4d9e19cXqetYvTTcA6vTf2fZPJrpxQ6T.Y/yqI3Ba', '2025-11-28 00:34:40', '2025-11-28 00:34:40', NULL),
(3, 'Ronan', 'Roman', 'M', '3411234124', NULL, '2005-02-04', '(14)994444444', NULL, '6', 'Nada', 'Bairro legal', 'Jau', NULL, 'SP', 'ronan@gmail.com', '', '$2y$10$kkrIF73gQh8tAuVDRLB15Oo3PukR039cGhTebJJ/z2fXMJZYTn.1O', '2025-11-28 00:39:39', '2025-11-28 00:39:39', NULL),
(4, 'Matheus', 'Matheuzao', 'M', '12513531', NULL, '2006-04-20', '(15)993333333', NULL, '6', 'Nada', 'Bairro algum', 'Jau', NULL, 'SP', 'matheus@gmail.com', '', '$2y$10$n1HctEBfDVGP5IMVTzLA9emW.0vyqF0DlmtWjaXpaSxpQYveT3x56', '2025-11-28 00:51:41', '2025-11-28 00:51:41', NULL),
(5, 'Lucas', 'lucao', 'M', '312312', NULL, '2005-03-02', '14994444444', NULL, '2', 'dqwqw', 'dasddas', 'jau', NULL, 'SP', 'luca@gmail.com', '', '$2y$10$q23IKglYeGngqKyPXfx.p.jYJdLAV3UvimKJ95uD3tGg/E52yLc22', '2025-11-28 00:52:34', '2025-11-28 00:52:34', NULL),
(6, 'Lucas', 'lucao', 'M', '312312', NULL, '2005-03-02', '14994444444', NULL, '2', 'dqwqw', 'dasddas', 'jau', NULL, 'SP', 'luca@gmail.com', '', '$2y$10$mAZzV.p1OS1EvSeH/FGokejGjzukJdbDR30wGWLFpjdczqN/y3JOO', '2025-11-28 00:52:42', '2025-11-28 00:52:42', NULL),
(7, 'Lucas', 'lucao', 'M', '312312', NULL, '2005-03-02', '14994444444', NULL, '2', 'dqwqw', 'dasddas', 'jau', NULL, 'SP', 'luca@gmail.com', '', '$2y$10$nrhuUgJrK6vLZ7dJnXs9B.3vL5YY9nNb83O/srDHnftOCQxtFyzO6', '2025-11-28 00:52:47', '2025-11-28 00:52:47', NULL),
(8, 'Lucas', 'lucao', 'M', '312312', NULL, '2005-03-02', '14994444444', NULL, '2', 'dqwqw', 'dasddas', 'jau', NULL, 'SP', 'luca@gmail.com', '', '$2y$10$26Ybzo1TWwA5HgxiwViZqueM9P1H0CdmDqXaflQKuUJ7J/rpXLmFS', '2025-11-28 00:53:14', '2025-11-28 00:53:14', NULL),
(10, 'teste', 'eqwe', 'M', '231313', '3123123', '1233-03-21', '149988855522', 'ddasdad', '2', 'dqwqd', 'ddsad', 'dasd', '15123', 'SC', 'eqewq@gmail.com', '', '$2y$10$S96MzQ/l06QmDibliyD6gu.E0WfSdSGxvBahqs5WfPFSuTrBmgfAG', '2025-11-28 00:58:00', '2025-11-28 00:58:00', NULL),
(11, 'dqwdq', 'dqwdqdq', 'M', '31323', '3131', '0123-12-31', '123123', 'dqdqdw', '2', 'dd', 'ddq', 'dsada', '123134', 'RR', 'dqdqd@gmail.com', '', '$2y$10$FYJQeuKYJoxTR.OUM.oQxOSiVjJN1Xnxt7C8BPyS2QusWV/KUZSXm', '2025-11-28 01:00:09', '2025-11-28 01:00:09', NULL),
(12, 'testefinal', 'dasdads', 'M', '313132', '31231313', '0000-00-00', '1233131', 'rdqwd', '2', 'dqdq', 'dadsa', 'dq', '12331', 'RR', 'final@gmail.com', 'Funcionario', '$2y$10$G0KgZFdc9vc.bBVR3zfYzuvTwhvytJUkUsBcrG2MES2hp8g8d/fcm', '2025-11-28 01:05:17', '2025-11-28 01:05:17', NULL),
(13, 'qwerty', 'edas', 'M', '31231231', '24141525', '2004-02-04', '14999554', 'rua tal', '2', 'dasd', 'dqwdqwd', 'jau', '2131544', 'SC', 'daaw@gmail.com', 'Funcionario', '$2y$10$RxBVSzKqWNKQiSE1/JrMo.4YClJwxR1XA15yevWl/U/LmJJTChZ1G', '2025-12-04 22:17:21', '2025-12-04 22:17:21', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` bigint(20) UNSIGNED NOT NULL,
  `forma_pagamento_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formas_pagamentos`
--
ALTER TABLE `formas_pagamentos`
  ADD PRIMARY KEY (`id_forma_pagamento`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices de tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD KEY `forma_pagamento_id` (`forma_pagamento_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `formas_pagamentos`
--
ALTER TABLE `formas_pagamentos`
  MODIFY `id_forma_pagamento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`forma_pagamento_id`) REFERENCES `formas_pagamentos` (`id_forma_pagamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
