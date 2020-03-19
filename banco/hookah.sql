-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Mar-2020 às 03:39
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
-- Estrutura da tabela `jv_caracteristicas`
--

CREATE TABLE `jv_caracteristicas` (
  `cts_id` int(11) NOT NULL,
  `cts_pro_id` int(11) NOT NULL,
  `cts_material_tipo` varchar(100) NOT NULL,
  `cts_base_nome` varchar(100) NOT NULL,
  `cts_material_base` varchar(100) NOT NULL,
  `cts_prato_nome` varchar(100) NOT NULL,
  `cts_material_queimador` varchar(100) NOT NULL,
  `cts_modelo_queimador` varchar(100) NOT NULL,
  `cts_tipo_queimador` varchar(100) NOT NULL,
  `cts_mangueira` varchar(100) NOT NULL,
  `cts_material_mangueira` varchar(100) NOT NULL,
  `cts_borracha_nome` varchar(100) NOT NULL,
  `cts_material_borracha` varchar(100) NOT NULL,
  `cts_espessura_borranha` varchar(100) NOT NULL,
  `cts_tamanho_borracha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_caracteristicas`
--

INSERT INTO `jv_caracteristicas` (`cts_id`, `cts_pro_id`, `cts_material_tipo`, `cts_base_nome`, `cts_material_base`, `cts_prato_nome`, `cts_material_queimador`, `cts_modelo_queimador`, `cts_tipo_queimador`, `cts_mangueira`, `cts_material_mangueira`, `cts_borracha_nome`, `cts_material_borracha`, `cts_espessura_borranha`, `cts_tamanho_borracha`) VALUES
(1, 6, 'Madeira', 'Incluso', 'Vidro', 'Incluso', 'Cerâmica', 'Phunnel', 'Femea', '1', 'Plastico', '3', 'Borracha', 'Fina', 'Pequena');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_categorias`
--

CREATE TABLE `jv_categorias` (
  `cate_id` int(11) NOT NULL,
  `cate_nome` varchar(50) NOT NULL,
  `cate_slug` varchar(50) NOT NULL,
  `cate_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_categorias`
--

INSERT INTO `jv_categorias` (`cate_id`, `cate_nome`, `cate_slug`, `cate_img`) VALUES
(1, 'Acessórios', 'acessorios', ''),
(2, 'Consumíveis', 'consumiveis', ''),
(3, 'Kit Completo', 'kit_completo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_clientes`
--

CREATE TABLE `jv_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) NOT NULL,
  `cli_sobrenome` varchar(80) NOT NULL,
  `cli_cpf` varchar(11) NOT NULL,
  `cli_email` varchar(60) NOT NULL,
  `cli_senha` varchar(40) NOT NULL,
  `cli_ddd` varchar(3) NOT NULL,
  `cli_celular` varchar(10) NOT NULL,
  `cli_data_nasc` date NOT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_clientes`
--

INSERT INTO `jv_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_email`, `cli_senha`, `cli_ddd`, `cli_celular`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`) VALUES
(1, 'Teste', 'teste', '12345678900', 'teste@teste.com', '123', '11', '123456789', '1992-08-29', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_fabricantes`
--

CREATE TABLE `jv_fabricantes` (
  `fab_id` int(11) NOT NULL,
  `fab_nome` varchar(255) NOT NULL,
  `fab_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_fabricantes`
--

INSERT INTO `jv_fabricantes` (`fab_id`, `fab_nome`, `fab_slug`) VALUES
(1, 'Bohemian', 'bohemian'),
(2, 'EazyBowl', 'eazybowl'),
(3, 'Amazon', 'amazon'),
(4, 'Anubis', 'anubis'),
(5, 'Avatar', 'avatar'),
(6, 'Brasuka', 'brasuka'),
(7, 'Dom Hookah', 'dom-hookah'),
(8, 'Hookah King', 'hookah-king'),
(9, 'Legacy', 'legacy'),
(10, 'Triton', 'triton'),
(11, 'Zeus', 'zeus'),
(12, 'Titan', 'titan');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_imagens`
--

CREATE TABLE `jv_imagens` (
  `img_id` int(11) NOT NULL,
  `img_nome` varchar(255) NOT NULL,
  `img_pasta` varchar(255) NOT NULL,
  `img_pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_imagens`
--

INSERT INTO `jv_imagens` (`img_id`, `img_nome`, `img_pasta`, `img_pro_id`) VALUES
(3, 'piteira-hookah-like-flip-hose.jpg', '', 7),
(4, 'piteira-hookah.jpg', '', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_itens_pedido`
--

CREATE TABLE `jv_itens_pedido` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_ped_cod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_itens_pedido`
--

INSERT INTO `jv_itens_pedido` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_ped_cod`) VALUES
(1, 7, 27.50, 1, '123456'),
(2, 5, 390.00, 1, '123456'),
(3, 7, 27.50, 1, '123456'),
(4, 5, 390.00, 1, '123456'),
(5, 4, 450.00, 2, '6d381746ec21b01652aca310a7e98088');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_pedidos`
--

CREATE TABLE `jv_pedidos` (
  `ped_id` int(11) NOT NULL,
  `ped_data` date NOT NULL,
  `ped_hora` time NOT NULL,
  `ped_cliente` int(11) NOT NULL,
  `ped_cod` varchar(100) NOT NULL,
  `ped_ref` varchar(40) NOT NULL,
  `ped_pag_status` varchar(20) NOT NULL,
  `ped_pag_forma` varchar(20) NOT NULL,
  `ped_pag_tipo` varchar(20) NOT NULL,
  `ped_pag_codigo` varchar(220) NOT NULL,
  `ped_frete_valor` double(9,2) DEFAULT NULL,
  `ped_frete_tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_pedidos`
--

INSERT INTO `jv_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`) VALUES
(1, '2020-03-17', '02:44:14', 1, '123456', '123', '', '', '', '', NULL, NULL),
(2, '2020-03-17', '02:57:06', 1, '123456', '123', '', '', '', '', NULL, NULL),
(3, '2020-03-17', '02:59:38', 1, '6d381746ec21b01652aca310a7e98088', '123', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_produtos`
--

CREATE TABLE `jv_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_sub_categoria` int(11) NOT NULL,
  `pro_caracteristica` int(11) NOT NULL,
  `pro_fabricantes` int(11) NOT NULL,
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
-- Extraindo dados da tabela `jv_produtos`
--

INSERT INTO `jv_produtos` (`pro_id`, `pro_categoria`, `pro_sub_categoria`, `pro_caracteristica`, `pro_fabricantes`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_cor`, `pro_valor`, `pro_tamanho`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 1, 0, 1, 'Vaso Narguile – Vaso Aladin Preto', 'Vaso Narguile – Vaso Aladin Preto\r\n\r\nVaso Econo para narguiles pequenos.', 1.000, 'Preto', 50.00, 'Tamanho Pequeno', 0, 0, 0, 'vaso_aladin_preto.jpg', 'vaso_narguile_preto', 35, 'Aladin', '001', 123, 's', 'não'),
(2, 1, 1, 0, 1, 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado', 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado\r\n\r\nVaso transparente para narguiles e arguiles pequenos. Vaso estiloso e ótimo custo beneficio.', 0.100, 'Transparente Com Dourado', 300.00, 'Pequeno', 0, 0, 0, 'vaso_jumbo.jpg', 'vaso_jumbo', 35, 'Jumbo', '01254', 1, 's', 'não'),
(3, 1, 1, 0, 1, 'Vaso Narguile – Vaso Sino Monte Verde Dourado', 'Vaso Narguile – Vaso Sino Monte Verde Dourado\r\nVaso grande para narguile, da marca Monte Verde com detalhes dourados. Compatível com narguiles grandes.', 1.000, 'Verde Dourado', 90.00, 'Grande', 0, 0, 0, 'vaso_sino_monte.jpg', 'vaso_sino_monte', 50, 'Monte', '023365', 1, 's', 'não'),
(4, 1, 1, 0, 3, 'Vaso Narguile – Vaso Bohemian Genie', 'Vaso Narguile – Vaso Bohemian Genie Azul\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 3.000, 'Azul', 450.00, 'Grande', 0, 0, 0, 'vaso_bohemian.jpg', 'vaso_bohemian', 50, 'Bohemian', '55624', 1, 's', 'não'),
(5, 1, 1, 0, 4, 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta', 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 1.000, 'Preta', 390.00, 'Grande', 0, 0, 0, 'vaso_bohemian_yunan.jpg', 'vaso_bohemian_yunan', 100, 'Bohemian', '65412', 2, 's', 'não'),
(6, 3, 1, 1, 5, 'SETUP LOVE 02 - NARGUILE COMPLETO LOVE HOOKAH FRANCE BLACK CLEAR COM BASE MONTE VERDE JUMBO FOLHA PRETO', 'O Narguile Completo Love Hookah France foi desenvolvido para aqueles que gostam de Arguiles moderno, o mesmo fabricado em alumínio com uma pintura anodizada e uma central fabricada em madeira, mais um produto com ótimo acabamento da marca Love Hookah. Com um comprimento de aproximadamente 67 cm é uma Stem Macho, o Arguile Love Hookah France garante um encaixe em vasos médio (26 cm) e grande (30 cm) estilo Bohemia com muita facilidade, pois sua Downstem com tamanho de aproximadamente 17 cm, traz encaixes através de parafuso lateral. Para que se tenha uma vida útil prolongada, a sua limpeza deve ser feita apenas com água e pano macio, recomenda-se não molhar a madeira, e para secagem uma flanela limpa, o que também irá te fornecer um ótimo brilho para sua peça Love Hookah France. Contém no Kit: 1 un. Queimador OnlyBowl Liso Preto; 1 un. Prato Wire Grande Clássico Preto; 1 un. Stem Love Hookah France Preto Clear; 1 un. Base Monte Verde Jumbo Folha Preto; 1 un. Mangueira Kubo Hose Metalic Dourado; 3 un. Borrachas.', 3.000, 'Preto', 299.00, 'Grande', 0, 0, 0, 'narguile_completo_love.jpg', 'narguile_completo_love', 250, 'France', '23215', 2, 's', 'não'),
(7, 1, 2, 0, 5, 'PITEIRA HOOKAH LIKE FLIP HOSE', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', 0.100, 'COBRE,AZUL CLARO,BRANCO,DOURADO,PRATA,PRETO,PRETO FOSCO,ROSA,ROXO,VERDE,VERMELHO', 27.50, 'Grande', 0, 0, 0, 'piteira_hookah_verde.jpg', 'piteira-hookah', 50, 'HOOKAH LIKE', '2541', 1, 's', 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_sub_categorias`
--

CREATE TABLE `jv_sub_categorias` (
  `sub_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `sub_nome` varchar(255) NOT NULL,
  `sub_slug` varchar(100) NOT NULL,
  `sub_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_sub_categorias`
--

INSERT INTO `jv_sub_categorias` (`sub_id`, `cate_id`, `sub_nome`, `sub_slug`, `sub_img`) VALUES
(1, 1, 'Vasos', 'vasos', ''),
(2, 1, 'Mangueiras', 'mangueiras', ''),
(3, 2, 'Carvões', 'carvoes', ''),
(4, 2, 'Papel Alumínio', 'papel-aluminio', ''),
(5, 2, 'Essências', 'essencias', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `jv_caracteristicas`
--
ALTER TABLE `jv_caracteristicas`
  ADD PRIMARY KEY (`cts_id`);

--
-- Índices para tabela `jv_categorias`
--
ALTER TABLE `jv_categorias`
  ADD PRIMARY KEY (`cate_id`);

--
-- Índices para tabela `jv_clientes`
--
ALTER TABLE `jv_clientes`
  ADD PRIMARY KEY (`cli_id`);

--
-- Índices para tabela `jv_fabricantes`
--
ALTER TABLE `jv_fabricantes`
  ADD PRIMARY KEY (`fab_id`);

--
-- Índices para tabela `jv_imagens`
--
ALTER TABLE `jv_imagens`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `jv_itens_pedido`
--
ALTER TABLE `jv_itens_pedido`
  ADD PRIMARY KEY (`item_id`);

--
-- Índices para tabela `jv_pedidos`
--
ALTER TABLE `jv_pedidos`
  ADD PRIMARY KEY (`ped_id`);

--
-- Índices para tabela `jv_produtos`
--
ALTER TABLE `jv_produtos`
  ADD PRIMARY KEY (`pro_id`);

--
-- Índices para tabela `jv_sub_categorias`
--
ALTER TABLE `jv_sub_categorias`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `jv_caracteristicas`
--
ALTER TABLE `jv_caracteristicas`
  MODIFY `cts_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_categorias`
--
ALTER TABLE `jv_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_clientes`
--
ALTER TABLE `jv_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_fabricantes`
--
ALTER TABLE `jv_fabricantes`
  MODIFY `fab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_imagens`
--
ALTER TABLE `jv_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_itens_pedido`
--
ALTER TABLE `jv_itens_pedido`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_pedidos`
--
ALTER TABLE `jv_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_produtos`
--
ALTER TABLE `jv_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_sub_categorias`
--
ALTER TABLE `jv_sub_categorias`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
