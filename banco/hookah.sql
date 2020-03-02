-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2020 às 20:13
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

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
-- Estrutura da tabela `jv_fabricantes`
--

CREATE TABLE `jv_fabricantes` (
  `fab_id` int(11) NOT NULL,
  `fab_pro_id` int(11) NOT NULL,
  `fab_nome` varchar(255) NOT NULL,
  `fab_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `jv_fabricantes`
--

INSERT INTO `jv_fabricantes` (`fab_id`, `fab_pro_id`, `fab_nome`, `fab_slug`) VALUES
(1, 1, 'Bohemian', 'bohemian'),
(2, 2, 'EazyBowl', 'eazybowl'),
(3, 4, 'Amazon', 'amazon'),
(4, 7, 'Anubis', 'anubis'),
(5, 2, 'Avatar', 'avatar'),
(6, 3, 'Brasuka', 'brasuka'),
(7, 4, 'Dom Hookah', 'dom-hookah'),
(8, 6, 'Hookah King', 'hookah-king'),
(9, 6, 'Legacy', 'legacy'),
(10, 5, 'Triton', 'triton'),
(11, 3, 'Zeus', 'zeus'),
(12, 2, 'Titan', 'titan');

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
(1, 'piteira-hookah-azul.jpg', '', 7),
(2, 'piteira-hookah-rosa.jpg', '', 7),
(3, 'piteira-hookah-like-flip-hose.jpg', '', 7),
(4, 'piteira-hookah.jpg', '', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `jv_produtos`
--

CREATE TABLE `jv_produtos` (
  `pro_id` int(11) NOT NULL,
  `pro_categoria` int(11) NOT NULL,
  `pro_sub_categoria` int(11) NOT NULL,
  `pro_caracteristica` int(11) NOT NULL,
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

INSERT INTO `jv_produtos` (`pro_id`, `pro_categoria`, `pro_sub_categoria`, `pro_caracteristica`, `pro_nome`, `pro_desc`, `pro_peso`, `pro_cor`, `pro_valor`, `pro_tamanho`, `pro_largura`, `pro_altura`, `pro_comprimento`, `pro_img`, `pro_slug`, `pro_estoque`, `pro_modelo`, `pro_ref`, `pro_fabricante`, `pro_ativo`, `pro_frete_free`) VALUES
(1, 1, 1, 0, 'Vaso Narguile – Vaso Aladin Preto', 'Vaso Narguile – Vaso Aladin Preto\r\n\r\nVaso Econo para narguiles pequenos.', 1.000, 'Preto', 50.00, 'Tamanho Pequeno', 0, 0, 0, 'vaso_aladin_preto.jpg', 'vaso_narguile_preto', 35, 'Aladin', '001', 123, 's', 'não'),
(2, 1, 1, 0, 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado', 'Vaso Narguile – Vaso Jumbo Bless Transparente Com Dourado\r\n\r\nVaso transparente para narguiles e arguiles pequenos. Vaso estiloso e ótimo custo beneficio.', 0.100, 'Transparente Com Dourado', 300.00, 'Pequeno', 0, 0, 0, 'vaso_jumbo.jpg', 'vaso_jumbo', 35, 'Jumbo', '01254', 1, 's', 'não'),
(3, 1, 1, 0, 'Vaso Narguile – Vaso Sino Monte Verde Dourado', 'Vaso Narguile – Vaso Sino Monte Verde Dourado\r\nVaso grande para narguile, da marca Monte Verde com detalhes dourados. Compatível com narguiles grandes.', 1.000, 'Verde Dourado', 90.00, 'Grande', 0, 0, 0, 'vaso_sino_monte.jpg', 'vaso_sino_monte', 50, 'Monte', '023365', 1, 's', 'não'),
(4, 1, 1, 0, 'Vaso Narguile – Vaso Bohemian Genie Azul', 'Vaso Narguile – Vaso Bohemian Genie Azul\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 3.000, 'Azul', 450.00, 'Grande', 0, 0, 0, 'vaso_bohemian.jpg', 'vaso_bohemian', 50, 'Bohemian', '55624', 1, 's', 'não'),
(5, 1, 1, 0, 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta', 'Vaso Narguile – Vaso Bohemian Egermann Yunan Preta\r\nOs vasos Bohemian são vasos para narguile extremamente detalhados. São fabricados em cristal na Republica Tcheca, com detalhes em outro 24k a Bohemian é um item luxuoso para colocar em seu narguile!\r\nSeu encaixe de stem é compatível com narguiles de tamanho grande nacionais e importados.\r\nTamanho: 30 centímetros.', 1.000, 'Preta', 390.00, 'Grande', 0, 0, 0, 'vaso_bohemian_yunan.jpg', 'vaso_bohemian_yunan', 100, 'Bohemian', '65412', 2, 's', 'não'),
(6, 3, 1, 1, 'SETUP LOVE 02 - NARGUILE COMPLETO LOVE HOOKAH FRANCE BLACK CLEAR COM BASE MONTE VERDE JUMBO FOLHA PRETO', 'O Narguile Completo Love Hookah France foi desenvolvido para aqueles que gostam de Arguiles moderno, o mesmo fabricado em alumínio com uma pintura anodizada e uma central fabricada em madeira, mais um produto com ótimo acabamento da marca Love Hookah. Com um comprimento de aproximadamente 67 cm é uma Stem Macho, o Arguile Love Hookah France garante um encaixe em vasos médio (26 cm) e grande (30 cm) estilo Bohemia com muita facilidade, pois sua Downstem com tamanho de aproximadamente 17 cm, traz encaixes através de parafuso lateral. Para que se tenha uma vida útil prolongada, a sua limpeza deve ser feita apenas com água e pano macio, recomenda-se não molhar a madeira, e para secagem uma flanela limpa, o que também irá te fornecer um ótimo brilho para sua peça Love Hookah France. Contém no Kit: 1 un. Queimador OnlyBowl Liso Preto; 1 un. Prato Wire Grande Clássico Preto; 1 un. Stem Love Hookah France Preto Clear; 1 un. Base Monte Verde Jumbo Folha Preto; 1 un. Mangueira Kubo Hose Metalic Dourado; 3 un. Borrachas.', 3.000, 'Preto', 299.00, 'Grande', 0, 0, 0, 'narguile_completo_love.jpg', 'narguile_completo_love', 250, 'France', '23215', 2, 's', 'não'),
(7, 1, 2, 0, 'PITEIRA HOOKAH LIKE FLIP HOSE', 'Piteira de aluminio Hookah Like. Produzida com alumínio de alta qualidade, higienização simplificada e ampla gama de cor.', 0.100, 'COBRE,AZUL CLARO,BRANCO,BRONZE,CHUMBO,COBRE,DOURADO,PRATA,PRETO,PRETO FOSCO,ROSA,ROXO,VERDE,VERMELHO27', 27.50, 'Grande', 0, 0, 0, 'piteira_hookah_verde.jpg', 'piteira-hookah', 50, 'HOOKAH LIKE', '2541', 1, 's', 'não');

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
-- AUTO_INCREMENT de tabela `jv_produtos`
--
ALTER TABLE `jv_produtos`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `jv_sub_categorias`
--
ALTER TABLE `jv_sub_categorias`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
