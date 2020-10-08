-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2020 às 18:36
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
(3, 'Kit Completo', 'kit-completo', ''),
(4, 'Naguiles', 'narguiles', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_clientes`
--

DROP TABLE IF EXISTS `jv_clientes`;
CREATE TABLE `jv_clientes` (
  `cli_id` int(11) NOT NULL,
  `cli_nome` varchar(30) NOT NULL,
  `cli_sobrenome` varchar(30) NOT NULL,
  `cli_cpf` char(11) NOT NULL,
  `cli_sexo` enum('M','F') NOT NULL,
  `cli_cep` char(8) NOT NULL,
  `cli_endereco` varchar(50) NOT NULL,
  `cli_bairro` varchar(50) NOT NULL,
  `cli_cidade` varchar(100) NOT NULL,
  `cli_uf` char(2) NOT NULL,
  `cli_numero` varchar(10) NOT NULL,
  `cli_complemento` varchar(30) NOT NULL,
  `cli_email` varchar(30) NOT NULL,
  `cli_senha` varchar(60) NOT NULL,
  `cli_telefone` varchar(10) DEFAULT NULL,
  `cli_celular` varchar(13) DEFAULT NULL,
  `cli_data_nasc` date DEFAULT NULL,
  `cli_data_cad` date NOT NULL,
  `cli_hora_cad` time NOT NULL,
  `cli_foto` varchar(60) NOT NULL,
  `cli_status` varchar(7) NOT NULL,
  `cli_hora_status` int(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_clientes`
--

INSERT INTO `jv_clientes` (`cli_id`, `cli_nome`, `cli_sobrenome`, `cli_cpf`, `cli_sexo`, `cli_cep`, `cli_endereco`, `cli_bairro`, `cli_cidade`, `cli_uf`, `cli_numero`, `cli_complemento`, `cli_email`, `cli_senha`, `cli_telefone`, `cli_celular`, `cli_data_nasc`, `cli_data_cad`, `cli_hora_cad`, `cli_foto`, `cli_status`, `cli_hora_status`) VALUES
(3, 'Ronaldo', 'Pires De Carvalho', '01234567890', 'M', '08040750', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '222', 'Próximo ao cemitério da Saudad', 'ronaldo@hotmail.com', '202cb962ac59075b964b07152d234b70', '1135354951', '11912345678', '1992-08-29', '2020-06-02', '19:16:22', 'eu.jpeg', '0', 1592357197),
(4, 'Renata', 'Lopes', '00012345678', 'F', '08044750', 'Rua das Nemésias', 'Jardim Casa Pintada', 'São Paulo', 'SP', '422', '', 'renata@hotmail.com', '202cb962ac59075b964b07152d234b70', '0123456789', '0123456789', '1988-01-25', '2020-02-20', '19:25:55', 'user-default.png', '0', 105633),
(5, 'Rafael', 'Guimaraes', '32555505233', 'M', '08040750', 'Rua Peruvá Preta', 'Jardim Casa Pintada', 'São Paulo', 'SP', '135 - A', '', 'rafael@hotmail.com', '202cb962ac59075b964b07152d234b70', '1195555555', NULL, '1993-04-03', '2020-04-25', '19:38:28', 'user-default.png', '0', 1592236656);

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
(6, '08040750', 'Rua Faveira do Mato', 'Vila Jacuí', 'São Paulo', 'SP', '2544', '', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_fabricantes`
--

DROP TABLE IF EXISTS `jv_fabricantes`;
CREATE TABLE `jv_fabricantes` (
  `fab_id` int(11) NOT NULL,
  `fab_cate_id` int(11) NOT NULL,
  `fab_nome` varchar(255) NOT NULL,
  `fab_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_fabricantes`
--

INSERT INTO `jv_fabricantes` (`fab_id`, `fab_cate_id`, `fab_nome`, `fab_slug`) VALUES
(1, 0, 'Bohemian', 'bohemian'),
(2, 0, 'EazyBowl', 'eazybowl'),
(3, 4, 'Amazon', 'amazon'),
(4, 0, 'Anubis', 'anubis'),
(5, 0, 'Avatar', 'avatar'),
(6, 0, 'Brasuka', 'brasuka'),
(7, 0, 'Dom Hookah', 'dom-hookah'),
(8, 0, 'Hookah King', 'hookah-king'),
(9, 0, 'Legacy', 'legacy'),
(10, 0, 'Triton', 'triton'),
(11, 0, 'Zeus', 'zeus'),
(12, 0, 'Titan', 'titan');

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
(47, 4, 450.00, 1, '38', 'Azul', '2020061621062141'),
(48, 13, 390.00, 1, '27', 'Roxo com Branco', '2020061622064628');

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
  `ped_valor_total` double(9,2) NOT NULL,
  `ped_cupom` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_pedidos`
--

INSERT INTO `jv_pedidos` (`ped_id`, `ped_data`, `ped_hora`, `ped_cliente`, `ped_cod`, `ped_ref`, `ped_pag_status`, `ped_pag_forma`, `ped_pag_tipo`, `ped_pag_codigo`, `ped_frete_valor`, `ped_frete_tipo`, `ped_valor_total`, `ped_cupom`) VALUES
(94, '2020-06-16', '21:38:21', 3, '2020061621062141', '2020061621062141', 'Não concluído', '', '', '', 27.20, '', 0.00, NULL),
(95, '2020-06-16', '22:19:46', 3, '2020061622064628', '2020061622064628', 'Aguardando pagamento', 'Boleto', 'PAGSEGURO', '57C66D1B-2546-495F-9450-EB0A4AFF4238', 22.50, '', 412.50, NULL);

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
  `pro_nome` varchar(100) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_peso` decimal(5,2) NOT NULL,
  `pro_cor` varchar(30) NOT NULL,
  `pro_valor` double(9,2) NOT NULL,
  `pro_tamanho` varchar(30) NOT NULL,
  `pro_largura` int(1) NOT NULL,
  `pro_altura` int(1) NOT NULL,
  `pro_comprimento` int(1) NOT NULL,
  `pro_img` varchar(80) NOT NULL,
  `pro_slug` varchar(100) NOT NULL,
  `pro_estoque` int(11) NOT NULL,
  `pro_modelo` varchar(100) NOT NULL,
  `pro_ref` varchar(100) NOT NULL,
  `pro_lancamento` char(1) NOT NULL,
  `pro_frete_free` char(1) NOT NULL,
  `pro_data_cad` date NOT NULL,
  `pro_desconto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_produtos`
--

INSERT INTO `jv_produtos` (`pro_id`, `pro_categoria`, `pro_sub_categoria`, `pro_caracteristica`, `pro_fabricantes`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_cor`, `pro_valor`, `pro_tamanho`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_lancamento`, `pro_frete_free`, `pro_data_cad`, `pro_desconto`) VALUES
(1, 1, 1, 0, 1, 'Vaso Narguile – Vaso Aladin', 'Vaso Narguile – Vaso Aladin Preto\r\n\r\nVaso Econo para narguiles pequenos.', '1.00', 'Preto', 50.00, 'Pequeno', 20, 20, 20, 'vaso_aladin_preto.jpg', 'vaso-narguile-preto', 0, 'Aladin', '001', 'n', 'n', '2005-01-15', '0'),
(2, 1, 1, 0, 1, 'Vaso Narguile – Vaso Jumbo Bless', 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado\r\n\r\nVaso transparente para narguiles e arguiles pequenos. Vaso estiloso e ótimo custo beneficio.', '0.10', 'Transparente Com Dourado', 300.00, 'Pequeno', 20, 20, 20, 'vaso_jumbo.jpg', 'vaso-jumbo', 35, 'Jumbo', '01254', 'n', 's', '2016-12-05', '0'),
(3, 1, 1, 0, 1, 'Vaso Narguile – Vaso Sino Monte', 'Vaso Narguile – Vaso Sino Monte Verde Dourado\r\nVaso grande para narguile, da marca Monte Verde com detalhes dourados. Compatível com narguiles grandes.', '1.00', 'Verde Dourado', 90.00, 'Grande', 20, 20, 20, 'vaso_sino_monte.jpg', 'vaso-sino-monte', 49, 'Monte', '023365', 'n', 's', '2017-05-08', '0'),
(4, 1, 1, 0, 3, 'Vaso Narguile – Vaso Bohemian Genie', 'Vaso Narguile – Vaso Bohemian Genie Azul\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', '3.00', 'Azul', 450.00, 'Grande', 20, 20, 20, 'vaso_bohemian.jpg', 'vaso-bohemian', 37, 'Bohemian', '55624', 's', 'n', '2015-09-10', '2'),
(5, 1, 1, 0, 4, 'Vaso Narguile – Vaso Bohemian Egermann Yunan', 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', '1.00', 'Preta', 390.00, 'Grande', 20, 20, 20, 'vaso_bohemian_yunan.jpg', 'vaso-bohemian-yunan', 100, 'Bohemian', '65412', 'n', 'n', '2019-08-29', '5'),
(6, 3, 1, 1, 5, 'SETUP LOVE 02 - NARGUILE COMPLETO LOVE HOOKAH FRANCE BLACK CLEAR COM BASE MONTE VERDE JUMBO FOLHA PR', 'O Narguile Completo Love Hookah France foi desenvolvido para aqueles que gostam de Arguiles moderno, o mesmo fabricado em alumínio com uma pintura anodizada e uma central fabricada em madeira, mais um produto com ótimo acabamento da marca Love Hookah.', '3.00', 'Preto', 299.00, 'Grande', 20, 20, 20, 'narguile_completo_love.jpg', 'narguile-completo-love', 240, 'France', '23215', 's', 'n', '2020-01-25', '15'),
(7, 1, 2, 0, 5, 'PITEIRA HOOKAH LIKE FLIP', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', '0.50', 'VERDE', 27.50, 'Grande', 20, 20, 20, 'piteira_hookah_verde.jpg', 'piteira-hookah-like-flip', 9, 'HOOKAH LIKE', '2541', 's', 's', '2020-04-28', '10'),
(8, 1, 2, 0, 5, 'PITEIRA HOOKAH LIKE FLIP', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', '0.50', 'PRETA FOSCO', 22.50, 'Grande', 20, 20, 20, 'piteira_hookah_like_flip_preta.jpg', 'piteira-hookah-like-flip', 10, 'HOOKAH LIKE FLIP', '654564', 's', 'n', '2020-05-31', '10'),
(9, 3, 1, 0, 4, 'Kit Anubis', '', '1.00', 'Vermelha', 230.00, 'Pequeno', 20, 20, 20, 'jv_louge_8.jpg', 'kit-anubis', 5, 'Anubis', '132456', 's', 'n', '2020-06-08', '0'),
(10, 3, 1, 0, 0, 'Narguile Completo', 'Lançamento kit completo', '1.00', 'Rosa', 230.00, 'Pequeno', 20, 20, 20, 'jv_louge_7.jpg', 'narguile-completo', 20, 'Dragon', '52412', 'n', 'n', '2020-06-08', '0'),
(11, 3, 1, 0, 4, 'Kit Completo Anubis', 'Narguile completo marca Anubis', '1.00', 'Amarelo', 280.00, 'Médio', 20, 20, 20, 'jv_louge_6.jpg', 'kit-completo-anubis', 30, 'Anubis', '65451', 's', 'n', '2020-06-08', '5'),
(12, 3, 1, 0, 10, 'Kit Completo Triton', 'Narguile completo da marca Triton', '1.00', 'Rosa e Branco', 350.00, 'Médio', 20, 20, 20, 'jv_louge_5.jpg', 'kit-completo-triton-rosa-e-branco', 25, 'Triton', '8885455', 'n', 'n', '2020-06-08', '0'),
(13, 3, 1, 10, 0, 'Kit Completo Triton', 'Narguile completo marca triton', '1.00', 'Roxo com Branco', 390.00, 'Médio', 20, 20, 20, 'jv_louge_4.jpg', 'kit-completo-triton-roxo-com-branco', 26, 'Triton', '2231654', 'n', 'n', '2020-06-08', '0');

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
(1, 1, 'Bases', 'bases', ''),
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
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `jv_clientes`
--
ALTER TABLE `jv_clientes`
  MODIFY `cli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `jv_pedidos`
--
ALTER TABLE `jv_pedidos`
  MODIFY `ped_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

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
