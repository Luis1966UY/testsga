-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08/01/2019 às 16:27
-- Versão do servidor: 10.2.17-MariaDB
-- Versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u875668988_sga`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `cliente_id` int(11) NOT NULL,
  `codigo_cliente` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome_cliente` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_cliente` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sexo_cliente` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `email_cliente` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `codigo_cliente`, `nome_cliente`, `cpf_cliente`, `sexo_cliente`, `email_cliente`) VALUES
(1, '001', 'Cliente 1', '123456789', 'M', 'mail@mail.com'),
(2, '002', 'Cliente 2', '321654987', 'M', 'mail@mail.com'),
(4, '003', 'Cliente 3', '01698765425', 'M', 'cliente3@mail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `pedido_id` int(11) NOT NULL,
  `codigo_pedido` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `data_pedido` date NOT NULL,
  `observacoes_pedido` text COLLATE utf8_unicode_ci NOT NULL,
  `forma_pagamento_pedido` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`pedido_id`, `codigo_pedido`, `data_pedido`, `observacoes_pedido`, `forma_pagamento_pedido`, `cliente_id`) VALUES
(1, '001', '2019-01-07', 'Observações do Pedido 001', 'Dinheiro', 1),
(2, '002', '2019-01-07', 'Observações do pedido 002', 'Cartão', 2),
(3, '003', '2019-01-08', 'Observações do pedido 003', 'Cheque', 4),
(4, '004', '2019-01-08', 'Observações do pedido 004', 'Cartão', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_produtos`
--

CREATE TABLE `pedido_produtos` (
  `pedido_produtos_id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `pedido_produtos`
--

INSERT INTO `pedido_produtos` (`pedido_produtos_id`, `pedido_id`, `produto_id`, `quantidade`, `preco`) VALUES
(1, 1, 1, 10, 100),
(2, 1, 2, 5, 250),
(3, 2, 3, 5, 300),
(4, 2, 4, 2, 400),
(5, 2, 5, 3, 500),
(6, 3, 6, 2, 650),
(7, 4, 3, 5, 300),
(8, 4, 5, 3, 500);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `produto_id` int(11) NOT NULL,
  `codigo_produto` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cor_produto` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tamanho_produto` varchar(3) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor_produto` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`produto_id`, `codigo_produto`, `nome_produto`, `cor_produto`, `tamanho_produto`, `valor_produto`) VALUES
(1, '001', 'Produto 1', 'Vermelho', 'P', 100),
(2, '002', 'Produto 2', 'Azul', 'G', 250),
(3, '003', 'Produto 3', 'red', 'P', 300),
(4, '004', 'Produto 4', 'Azul', 'P', 400),
(5, '005', 'Produto 5', 'Azul', 'GG', 500),
(6, '006', 'Produto 6', 'Azul', 'G', 650);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cliente_id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedido_id`),
  ADD KEY `fk_cliente_id` (`cliente_id`);

--
-- Índices de tabela `pedido_produtos`
--
ALTER TABLE `pedido_produtos`
  ADD PRIMARY KEY (`pedido_produtos_id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produto_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cliente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedido_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedido_produtos`
--
ALTER TABLE `pedido_produtos`
  MODIFY `pedido_produtos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_cliente_id` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`cliente_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
