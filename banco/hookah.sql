-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2020 às 06:43
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_caracteristicas`
--

DROP TABLE IF EXISTS `jv_caracteristicas`;
CREATE TABLE `jv_caracteristicas` (
  `cts_id` int(11) NOT NULL,
  `cts_pro_id` int(11) NOT NULL,
  `cts_material_tipo` varchar(100) DEFAULT NULL,
  `cts_base_nome` varchar(100) DEFAULT NULL,
  `cts_material_base` varchar(100) DEFAULT NULL,
  `cts_prato_nome` varchar(100) DEFAULT NULL,
  `cts_material_queimador` varchar(100) DEFAULT NULL,
  `cts_modelo_queimador` varchar(100) DEFAULT NULL,
  `cts_tipo_queimador` varchar(100) DEFAULT NULL,
  `cts_mangueira` varchar(100) DEFAULT NULL,
  `cts_material_mangueira` varchar(100) DEFAULT NULL,
  `cts_borracha_nome` varchar(100) DEFAULT NULL,
  `cts_material_borracha` varchar(100) DEFAULT NULL,
  `cts_espessura_borranha` varchar(100) DEFAULT NULL,
  `cts_tamanho_borracha` varchar(100) DEFAULT NULL
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

DROP TABLE IF EXISTS `jv_categorias`;
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

DROP TABLE IF EXISTS `jv_clientes`;
CREATE TABLE `jv_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(80) NOT NULL,
  `cli_sobrenome` varchar(80) NOT NULL,
  `cli_cpf` varchar(11) NOT NULL,
  `cli_sexo` varchar(2) NOT NULL,
  `cli_cep` varchar(11) NOT NULL,
  `cli_endereco` varchar(150) NOT NULL,
  `cli_bairro` varchar(100) NOT NULL,
  `cli_cidade` varchar(100) NOT NULL,
  `cli_uf` varchar(2) NOT NULL,
  `cli_numero` varchar(30) NOT NULL,
  `cli_complemento` varchar(100) DEFAULT NULL,
  `cli_email` varchar(60) NOT NULL,
  `cli_senha` varchar(40) NOT NULL,
  `cli_telefone` varchar(10) DEFAULT NULL,
  `cli_celular` varchar(13) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL,
  `cli_foto` varchar(100) NOT NULL,
  `cli_status` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_clientes`
--

INSERT INTO `jv_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_sexo`, `cli_cep`, `cli_endereco`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_numero`, `cli_complemento`, `cli_email`, `cli_senha`, `cli_telefone`, `cli_celular`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`, `cli_foto`, `cli_status`) VALUES
(3, 'Ronaldo', 'Pires C', '01234567890', 'm', '08040740', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '222', 'Próximo ao cemitério da Saudade', 'ronaldo@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '11912345678', '1992-08-29', '2020-06-02', '19:16:22', 'eu.jpeg', 'offline'),
(4, 'Renata', 'Lopes', '00012345678', 'f', '8040740', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '422', '', 'renata@hotmail.com', '202cb962ac59075b964b07152d234b70', '0123456789', '0123456789', '1988-01-25', '2020-02-20', '19:25:55', 'user-default.png', 'offline'),
(5, 'Rafael', 'Guimaraes', '32555505233', 'm', '08040750', 'Rua Peruvá Preta', 'Jardim Casa Pintada', 'São Paulo', 'SP', '135 - A', '', 'rafael@hotmail.com', '202cb962ac59075b964b07152d234b70', '', '', '1993-04-03', '2020-04-25', '19:38:28', 'user-default.png', 'offline');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_comentarios_produto`
--

DROP TABLE IF EXISTS `jv_comentarios_produto`;
CREATE TABLE `jv_comentarios_produto` (
  `com_id` int(11) NOT NULL,
  `com_cli_nome` varchar(80) NOT NULL,
  `com_cli_email` varchar(80) NOT NULL,
  `com_mensagem` varchar(250) NOT NULL,
  `com_estrela` int(11) NOT NULL,
  `com_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_cupons`
--

DROP TABLE IF EXISTS `jv_cupons`;
CREATE TABLE `jv_cupons` (
  `cupom_id` int(11) NOT NULL,
  `cupom_nome` varchar(150) NOT NULL,
  `cupom_desconto` int(11) NOT NULL,
  `cupom_data_inicial` date NOT NULL,
  `cupom_hora_inicial` time NOT NULL,
  `cupom_data_final` date NOT NULL,
  `cupom_hora_final` time NOT NULL,
  `cupom_tipo` char(1) NOT NULL,
  `cupom_qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jv_cupons`
--

INSERT INTO `jv_cupons` (`cupom_id`, `cupom_nome`, `cupom_desconto`, `cupom_data_inicial`, `cupom_hora_inicial`, `cupom_data_final`, `cupom_hora_final`, `cupom_tipo`, `cupom_qtd`) VALUES
(1, 'DESCONTO 10', 10, '2020-06-01', '13:00:00', '2020-06-08', '10:00:00', '1', 20),
(2, 'DESCONTO 5', 5, '2020-06-03', '12:00:00', '2020-06-04', '00:00:00', '2', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_enderecos`
--

DROP TABLE IF EXISTS `jv_enderecos`;
CREATE TABLE `jv_enderecos` (
  `endereco_id` int(11) NOT NULL,
  `endereco_cli_cep` varchar(11) NOT NULL,
  `endereco_cli_endereco` varchar(150) NOT NULL,
  `endereco_cli_bairro` varchar(100) NOT NULL,
  `endereco_cli_cidade` varchar(100) NOT NULL,
  `endereco_cli_uf` varchar(2) NOT NULL,
  `endereco_cli_numero` varchar(30) NOT NULL,
  `endereco_cli_complemento` varchar(100) DEFAULT NULL,
  `endereco_cli_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_enderecos`
--

INSERT INTO `jv_enderecos` (`endereco_id`, `endereco_cli_cep`, `endereco_cli_endereco`, `endereco_cli_bairro`, `endereco_cli_cidade`, `endereco_cli_uf`, `endereco_cli_numero`, `endereco_cli_complemento`, `endereco_cli_id`) VALUES
(6, '08040750', 'Teste', 'Teste', 'São Paulo', 'SP', '2544', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_fabricantes`
--

DROP TABLE IF EXISTS `jv_fabricantes`;
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

DROP TABLE IF EXISTS `jv_imagens`;
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

DROP TABLE IF EXISTS `jv_itens_pedido`;
CREATE TABLE `jv_itens_pedido` (
  `item_id` int(11) NOT NULL,
  `item_produto` int(11) NOT NULL,
  `item_valor` double(9,2) NOT NULL,
  `item_qtd` int(6) NOT NULL,
  `item_estoque` varchar(150) NOT NULL,
  `item_cor` varchar(150) NOT NULL,
  `item_ped_cod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_itens_pedido`
--

INSERT INTO `jv_itens_pedido` (`item_id`, `item_produto`, `item_valor`, `item_qtd`, `item_estoque`, `item_cor`, `item_ped_cod`) VALUES
(28, 4, 450.00, 1, '50', 'Azul', '2005310605003'),
(29, 7, 27.50, 1, '10', 'VERDE', '2005310605083'),
(30, 8, 22.50, 1, '7', 'PRETA FOSCO', '2005310605083'),
(31, 8, 22.50, 6, '0', 'PRETA FOSCO', '2005310605023'),
(32, 7, 27.50, 3, '6', 'VERDE', '2005310605023'),
(33, 4, 450.00, 2, '49', 'Azul', '2005310705233'),
(34, 3, 90.00, 1, '50', 'Verde Dourado', '2005310705513'),
(35, 6, 299.00, 5, '250', 'Preto', '2005311005113'),
(36, 6, 299.00, 10, '250', 'Preto', '2005311005113'),
(37, 4, 450.00, 5, '47', 'Azul', '2005311005083');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_pedidos`
--

DROP TABLE IF EXISTS `jv_pedidos`;
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
  `ped_frete_tipo` varchar(20) DEFAULT NULL,
  `ped_cupom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_pedidos`
--

INSERT INTO `jv_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`, `ped_cupom`) VALUES
(82, '2020-01-15', '06:49:00', 3, '2005310605003', '2005310605003', '', '', '', '', 27.20, NULL, 0),
(83, '2020-01-25', '06:53:08', 3, '2005310605083', '2005310605083', '', '', '', '', 22.50, NULL, 0),
(84, '2020-05-31', '06:59:02', 4, '2005310605023', '2005310605023', '', '', '', '', 31.90, NULL, 0),
(85, '2020-05-31', '07:01:23', 3, '2005310705233', '2005310705233', '', '', '', '', 34.20, NULL, 0),
(86, '2020-03-30', '07:24:51', 4, '2005310705513', '2005310705513', '', '', '', '', 22.50, NULL, 0),
(87, '2020-04-05', '10:52:11', 3, '2005311005113', '2005311005113', '', '', '', '', 157.90, NULL, 0),
(88, '2020-05-31', '10:52:26', 5, '2005311005113', '2005311005113', '', '', '', '', 157.90, NULL, 0),
(89, '2020-06-01', '10:55:08', 3, '2005311005083', '2005311005083', '', '', '', '', 72.40, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_produtos`
--

DROP TABLE IF EXISTS `jv_produtos`;
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
  `pro_lancamento` char(1) NOT NULL,
  `pro_frete_free` varchar(100) NOT NULL,
  `pro_data_cad` date NOT NULL,
  `pro_desconto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_produtos`
--

INSERT INTO `jv_produtos` (`pro_id`, `pro_categoria`, `pro_sub_categoria`, `pro_caracteristica`, `pro_fabricantes`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_cor`, `pro_valor`, `pro_tamanho`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_lancamento`, `pro_frete_free`, `pro_data_cad`, `pro_desconto`) VALUES
(1, 1, 1, 0, 1, 'Vaso Narguile – Vaso Aladin', 'Vaso Narguile – Vaso Aladin Preto\r\n\r\nVaso Econo para narguiles pequenos.', 1.000, 'Preto', 50.00, 'Pequeno', 20, 20, 20, 'vaso_aladin_preto.jpg', 'vaso_narguile_preto', 0, 'Aladin', '001', 'n', 'n', '2005-01-15', '0'),
(2, 1, 1, 0, 1, 'Vaso Narguile – Vaso Jumbo Bless', 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado\r\n\r\nVaso transparente para narguiles e arguiles pequenos. Vaso estiloso e ótimo custo beneficio.', 0.100, 'Transparente Com Dourado', 300.00, 'Pequeno', 20, 20, 20, 'vaso_jumbo.jpg', 'vaso_jumbo', 35, 'Jumbo', '01254', 'n', 's', '2016-12-05', '0'),
(3, 1, 1, 0, 1, 'Vaso Narguile – Vaso Sino Monte', 'Vaso Narguile – Vaso Sino Monte Verde Dourado\r\nVaso grande para narguile, da marca Monte Verde com detalhes dourados. Compatível com narguiles grandes.', 1.000, 'Verde Dourado', 90.00, 'Grande', 20, 20, 20, 'vaso_sino_monte.jpg', 'vaso_sino_monte', 49, 'Monte', '023365', 'n', 's', '2017-05-08', '0'),
(4, 1, 1, 0, 3, 'Vaso Narguile – Vaso Bohemian Genie', 'Vaso Narguile – Vaso Bohemian Genie Azul\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 3.000, 'Azul', 450.00, 'Grande', 20, 20, 20, 'vaso_bohemian.jpg', 'vaso_bohemian', 39, 'Bohemian', '55624', 's', 'n', '2015-09-10', '2'),
(5, 1, 1, 0, 4, 'Vaso Narguile – Vaso Bohemian Egermann Yunan', 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 1.000, 'Preta', 390.00, 'Grande', 20, 20, 20, 'vaso_bohemian_yunan.jpg', 'vaso_bohemian_yunan', 100, 'Bohemian', '65412', 'n', 'n', '2019-08-29', '5'),
(6, 3, 1, 1, 5, 'SETUP LOVE 02 - NARGUILE COMPLETO LOVE HOOKAH FRANCE BLACK CLEAR COM BASE MONTE VERDE JUMBO FOLHA PRETO', 'O Narguile Completo Love Hookah France foi desenvolvido para aqueles que gostam de Arguiles moderno, o mesmo fabricado em alumínio com uma pintura anodizada e uma central fabricada em madeira, mais um produto com ótimo acabamento da marca Love Hookah.', 3.000, 'Preto', 299.00, 'Grande', 20, 20, 20, 'narguile_completo_love.jpg', 'narguile_completo_love', 240, 'France', '23215', 's', 'n', '2020-01-25', '15'),
(7, 1, 2, 0, 5, 'PITEIRA HOOKAH LIKE FLIP', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', 0.500, 'VERDE', 27.50, 'Grande', 20, 20, 20, 'piteira_hookah_verde.jpg', 'piteira_hookah_like_flip', 9, 'HOOKAH LIKE', '2541', 's', 's', '2020-04-28', '10'),
(8, 1, 2, 0, 5, 'PITEIRA HOOKAH LIKE FLIP', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', 0.500, 'PRETA FOSCO', 22.50, 'Grande', 20, 20, 20, 'piteira_hookah_like_flip_preta.jpg', 'piteira_hookah_like_flip', 10, 'HOOKAH LIKE FLIP', '654564', 's', 'n', '2020-05-31', '10'),
(9, 3, 1, 0, 4, 'Kit Anubis', '', 1.000, 'Vermelha', 230.00, 'Pequeno', 20, 20, 20, 'jv_louge_8.jpg', 'kit_anubis', 5, 'Anubis', '132456', 's', 'n', '2020-06-08', '0'),
(10, 3, 1, 0, 0, 'Narguile Completo', 'Lançamento kit completo', 1.000, 'Rosa', 230.00, 'Pequeno', 20, 20, 20, 'jv_louge_7.jpg', 'narguile_completo', 20, 'Dragon', '52412', 'n', 'n', '2020-06-08', '0'),
(11, 3, 1, 0, 4, 'Kit Completo Anubis', 'Narguile completo marca Anubis', 1.000, 'Amarelo', 280.00, 'Médio', 20, 20, 20, 'jv_louge_6.jpg', 'kit_completo_anubis', 30, 'Anubis', '65451', 's', 'n', '2020-06-08', '5'),
(12, 3, 1, 0, 10, 'Kit Completo Triton', 'Narguile completo da marca Triton', 1.000, 'Rosa e Branco', 350.00, 'Médio', 20, 20, 20, 'jv_louge_5.jpg', 'kit_completo_triton_rosa_e_branco', 25, 'Triton', '8885455', 'n', '0', '2020-06-08', '0'),
(13, 3, 1, 10, 0, 'Kit Completo Triton', 'Narguile completo marca triton', 1.000, 'Roxo com Branco', 390.00, 'Médio', 20, 20, 20, 'jv_louge_4.jpg', 'kit_completo_triton_roxo_com_branco', 30, 'Triton', '2231654', 'n', '0', '2020-06-08', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_sub_categorias`
--

DROP TABLE IF EXISTS `jv_sub_categorias`;
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
-- Índices para tabela `jv_comentarios_produto`
--
ALTER TABLE `jv_comentarios_produto`
  ADD PRIMARY KEY (`com_id`);

--
-- Índices para tabela `jv_cupons`
--
ALTER TABLE `jv_cupons`
  ADD PRIMARY KEY (`cupom_id`);

--
-- Índices para tabela `jv_enderecos`
--
ALTER TABLE `jv_enderecos`
  ADD PRIMARY KEY (`endereco_id`);

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
  MODIFY `cts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `jv_categorias`
--
ALTER TABLE `jv_categorias`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `jv_clientes`
--
ALTER TABLE `jv_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `jv_comentarios_produto`
--
ALTER TABLE `jv_comentarios_produto`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `jv_cupons`
--
ALTER TABLE `jv_cupons`
  MODIFY `cupom_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `jv_enderecos`
--
ALTER TABLE `jv_enderecos`
  MODIFY `endereco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `jv_fabricantes`
--
ALTER TABLE `jv_fabricantes`
  MODIFY `fab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `jv_imagens`
--
ALTER TABLE `jv_imagens`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `jv_itens_pedido`
--
ALTER TABLE `jv_itens_pedido`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `jv_pedidos`
--
ALTER TABLE `jv_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de tabela `jv_produtos`
--
ALTER TABLE `jv_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `jv_sub_categorias`
--
ALTER TABLE `jv_sub_categorias`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
