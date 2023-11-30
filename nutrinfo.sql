-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2023 às 20:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nutrinfo`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastrar_uan`
--

CREATE TABLE `cadastrar_uan` (
  `nomeFantasiaUAN` varchar(20) NOT NULL,
  `razaoSocialUAN` varchar(20) NOT NULL,
  `CNPJUAN` varchar(20) NOT NULL,
  `telefoneUAN` varchar(10) NOT NULL,
  `enderecoUAN` varchar(20) NOT NULL,
  `bairroUAN` varchar(10) NOT NULL,
  `cidadeUAN` text NOT NULL,
  `estadoUAN` text NOT NULL,
  `emailUAN` varchar(20) NOT NULL,
  `dataCardapioUAN` varchar(10) NOT NULL,
  `dataProtocoloUAN` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastrar_uan`
--

INSERT INTO `cadastrar_uan` (`nomeFantasiaUAN`, `razaoSocialUAN`, `CNPJUAN`, `telefoneUAN`, `enderecoUAN`, `bairroUAN`, `cidadeUAN`, `estadoUAN`, `emailUAN`, `dataCardapioUAN`, `dataProtocoloUAN`) VALUES
('fantasia', 'social', '0000000000000000', '0000000', 'rua', 'bairro', 'Sorocaba', 'SP', 'gmail', '28/11', '28/11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `dataCardapio` varchar(10) NOT NULL,
  `expiraCardapio` varchar(10) NOT NULL,
  `CNPJUAN` varchar(20) NOT NULL,
  `cardapio` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente_nutri`
--

CREATE TABLE `cliente_nutri` (
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `endereco` varchar(25) NOT NULL,
  `pais` text NOT NULL,
  `estado` text NOT NULL,
  `CEP` varchar(10) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `ocorrencia`
--

CREATE TABLE `ocorrencia` (
  `id` int(11) NOT NULL,
  `nomeFuncionario` varchar(30) NOT NULL,
  `turno` text NOT NULL,
  `cargo` varchar(15) NOT NULL,
  `ocorrencia` varchar(200) NOT NULL,
  `dataOcorrencia` varchar(10) NOT NULL,
  `CNPJUAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ocorrencia`
--

INSERT INTO `ocorrencia` (`id`, `nomeFuncionario`, `turno`, `cargo`, `ocorrencia`, `dataOcorrencia`, `CNPJUAN`) VALUES
(5, 'Priscila', 'manhã', 'cozinheira', 'afastada 7 dias. Atestado CID0000', '28/11', '0000000000000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `protocolo`
--

CREATE TABLE `protocolo` (
  `id` int(11) NOT NULL,
  `nomeDocumento` varchar(20) NOT NULL,
  `dataDocumento` varchar(10) NOT NULL,
  `expiraDocumento` varchar(10) NOT NULL,
  `CNPJUAN` varchar(20) NOT NULL,
  `protocolo_pdf` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastrar_uan`
--
ALTER TABLE `cadastrar_uan`
  ADD PRIMARY KEY (`CNPJUAN`);

--
-- Índices de tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cardapio_uan` (`CNPJUAN`);

--
-- Índices de tabela `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ocorrencia_uan` (`CNPJUAN`);

--
-- Índices de tabela `protocolo`
--
ALTER TABLE `protocolo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_protocolo_uan` (`CNPJUAN`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `cardapio`
--
ALTER TABLE `cardapio`
  ADD CONSTRAINT `fk_cardapio_uan` FOREIGN KEY (`CNPJUAN`) REFERENCES `cadastrar_uan` (`CNPJUAN`);

--
-- Restrições para tabelas `ocorrencia`
--
ALTER TABLE `ocorrencia`
  ADD CONSTRAINT `fk_ocorrencia_uan` FOREIGN KEY (`CNPJUAN`) REFERENCES `cadastrar_uan` (`CNPJUAN`);

--
-- Restrições para tabelas `protocolo`
--
ALTER TABLE `protocolo`
  ADD CONSTRAINT `fk_protocolo_uan` FOREIGN KEY (`CNPJUAN`) REFERENCES `cadastrar_uan` (`CNPJUAN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
