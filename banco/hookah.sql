-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Fev-2020 às 06:25
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hookah`
--
CREATE DATABASE IF NOT EXISTS `hookah` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `hookah`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) NOT NULL,
  `cate_slug` varchar(50) NOT NULL,
  `cate_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`cate_id`, `cate_nome`, `cate_slug`, `cate_img`) VALUES
(1, 'Acessórios', 'acessorios', ''),
(2, 'Consumíveis', 'consumiveis', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabricantes`
--

CREATE TABLE `fabricantes` (
  `fab_id` int(11) NOT NULL,
  `fab_pro_id` int(11) NOT NULL,
  `fab_nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fabricantes`
--

INSERT INTO `fabricantes` (`fab_id`, `fab_pro_id`, `fab_nome`) VALUES
(1, 1, 'Bohemian'),
(2, 2, 'EazyBowl');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_sub_categoria` int(11) NOT NULL,
  `pro_nome` varchar(200) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_peso` double(9,3) NOT NULL,
  `pro_cor` varchar(255) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_tamanho` varchar(100) NOT NULL,
  `pro_largura` int(11) NOT NULL,
  `pro_altura` int(11) NOT NULL,
  `pro_comprimento` int(11) NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `pro_slug` varchar(100) NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) NOT NULL,
  `pro_ref` varchar(100) NOT NULL,
  `pro_fabricante` int(11) NOT NULL,
  `pro_ativo` char(1) NOT NULL,
  `pro_frete_free` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`pro_id`, `pro_categoria`, `pro_sub_categoria`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_cor`, `pro_valor`, `pro_tamanho`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 1, 'Vaso Narguile – Vaso Aladin Preto', 'Vaso Narguile – Vaso Aladin Preto\r\n\r\nVaso Econo para narguiles pequenos.', 1.000, 'Preto', 50.00, 'Tamanho Pequeno', 0, 0, 0, 'vaso_aladin_preto.jpg', 'vaso_narguile_preto', 35, 'Aladin', '001', 123, 's', 'não'),
(2, 1, 1, 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado', 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado\r\n\r\nVaso transparente para narguiles e arguiles pequenos. Vaso estiloso e ótimo custo beneficio.', 0.100, 'Transparente Com Dourado', 300.00, 'Pequeno', 0, 0, 0, 'vaso_jumbo.jpg', 'vaso_jumbo', 35, 'Jumbo', '01254', 1, 's', 'não'),
(3, 1, 1, 'Vaso Narguile – Vaso Sino Monte Verde Dourado', 'Vaso Narguile – Vaso Sino Monte Verde Dourado\r\nVaso grande para narguile, da marca Monte Verde com detalhes dourados. Compatível com narguiles grandes.', 1.000, 'Verde Dourado', 90.00, 'Grande', 0, 0, 0, 'vaso_sino_monte.jpg', 'vaso_sino_monte', 50, 'Monte', '023365', 1, 's', 'não'),
(4, 1, 1, 'Vaso Narguile – Vaso Bohemian Genie Azul', 'Vaso Narguile – Vaso Bohemian Genie Azul\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 3.000, 'Azul', 450.00, 'Grande', 0, 0, 0, 'vaso_bohemian.jpg', 'vaso_bohemian', 50, 'Bohemian', '55624', 1, 's', 'não'),
(5, 1, 1, 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta', 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 1.000, 'Preta', 390.00, 'Grande', 0, 0, 0, 'vaso_bohemian_yunan.jpg', 'vaso_bohemian_yunan', 100, 'Bohemian', '65412', 2, 's', 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sub_categorias`
--

CREATE TABLE `sub_categorias` (
  `sub_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_nome` varchar(255) NOT NULL,
  `sub_slug` varchar(100) NOT NULL,
  `sub_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `sub_categorias`
--

INSERT INTO `sub_categorias` (`sub_id`, `cate_id`, `sub_nome`, `sub_slug`, `sub_img`) VALUES
(1, 1, 'Vasos', 'vasos', ''),
(2, 1, 'Mangueiras', 'mangueiras', ''),
(3, 2, 'Carvões', 'carvoes', ''),
(4, 2, 'Papel Alumínio', 'papel_aluminio', ''),
(5, 2, 'Essências', 'essencias', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices para tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  ADD PRIMARY KEY (`fab_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índices para tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fabricantes`
--
ALTER TABLE `fabricantes`
  MODIFY `fab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sub_categorias`
--
ALTER TABLE `sub_categorias`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
