-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2023 às 20:14
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gitano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_home`
--

CREATE TABLE `ads_home` (
  `id` int(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_home_topo`
--

CREATE TABLE `ads_home_topo` (
  `id` int(100) NOT NULL,
  `link` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ads_home_topo`
--

INSERT INTO `ads_home_topo` (`id`, `link`, `foto`) VALUES
(3, 'https://www.marcioleiteweb.com.br/', '1621777848.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ads_interna`
--

CREATE TABLE `ads_interna` (
  `id` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ads_interna`
--

INSERT INTO `ads_interna` (`id`, `foto`, `link`) VALUES
(3, '1651380545.jpg', 'http://mlbn.com.br/'),
(4, '1651380564.jpg', 'http://mlbn.com.br/'),
(5, '1651380574.jpg', 'http://mlbn.com.br/'),
(6, '1651380597.jpg', 'http://mlbn.com.br/');

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner_home`
--

CREATE TABLE `banner_home` (
  `id` int(100) NOT NULL,
  `nome_banner` varchar(500) NOT NULL,
  `texto_banner` text NOT NULL,
  `link_foto_banner` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banner_home`
--

INSERT INTO `banner_home` (`id`, `nome_banner`, `texto_banner`, `link_foto_banner`) VALUES
(10, 'Sobre Nossa Caminhada', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, erat id scelerisque convallis, nunc purus imperdiet nulla, eget maximus nisl lacus nec nisi. Pellentesque mollis bibendum ligula eget ultrices. ', '1662938638.jpg'),
(11, 'Trabalhos tipo 2 banner geral', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras aliquam, erat id scelerisque convallis, nunc purus imperdiet nulla, eget maximus nisl lacus nec nisi. Pellentesque mollis bibendum ligula eget ultrices. ', '1662938662.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog_estados`
--

CREATE TABLE `blog_estados` (
  `id` int(100) NOT NULL,
  `id_estados` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `blog_album` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `blog_estados`
--

INSERT INTO `blog_estados` (`id`, `id_estados`, `titulo`, `texto`, `foto_principal`, `blog_album`) VALUES
(21, 5, 'artigo1', '<p>dddddddddddddddddddddddddd</p>', '1621285088.jpg', '1621282286'),
(23, 5, 'artigo 12', '<p>sdcascasdcasdc</p>', '1621469851.jpg', '1621469851');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` bigint(255) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` double NOT NULL,
  `foto_produto` varchar(255) NOT NULL,
  `id_produto` int(100) NOT NULL,
  `id_cliente` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `nome_produto`, `preco_produto`, `foto_produto`, `id_produto`, `id_cliente`) VALUES
(26, 'Espada Rei', 1200.5, '1699988787.jpg', 294, 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_produtos`
--

CREATE TABLE `categorias_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias_produtos`
--

INSERT INTO `categorias_produtos` (`id`, `nome`, `created`, `modified`) VALUES
(90, 'Espadas', '2023-11-09 17:16:25', NULL),
(91, 'Punhais e Adagas', '2023-11-09 17:16:42', NULL),
(92, 'Pedras', '2023-11-09 17:16:57', NULL),
(93, 'Artefatos', '2023-11-09 17:17:12', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `classificados`
--

CREATE TABLE `classificados` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `classificado_album` varchar(250) NOT NULL,
  `contato_bt` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `classificados`
--

INSERT INTO `classificados` (`id`, `titulo`, `texto`, `foto_principal`, `classificado_album`, `contato_bt`) VALUES
(9, 'Pias e Gabinetes', '<p><span style=\"color: #4d4643; font-family: \'Open Sans\', sans-serif; font-size: 14px; text-align: center; background-color: #ffffff;\">O m&aacute;rmore &eacute; uma pedra natural proveniente do calc&aacute;rio. Forma-se pela alta press&atilde;o, sendo uma rocha metam&oacute;rfica. Caracteriza-se por seus veios, tem menos brilho que o granito e possui uma dureza menor que este, sendo por tanto mais fr&aacute;gil.</span></p>', '1660917065.jpg', '1660917065', 'Cotia - SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `celular` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `senha_real` varchar(255) NOT NULL,
  `data_nascimento` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `cep` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `celular`, `email`, `senha`, `senha_real`, `data_nascimento`, `cpf`, `rua`, `bairro`, `cidade`, `uf`, `cep`, `descricao`) VALUES
(2, 'Barbara Naia', '(11)94823-1984', 'babis@cliente.com', '202cb962ac59075b964b07152d234b70', '123', '1988-12-21', '564.897.964-19', 'Prf Alipio Dutra, 46', 'Vila Sonia', 'São Paulo', 'SP', '04875-124', 'Agora ela compra quizenal							'),
(4, 'Rafaela Souza Soares', '(11)97541-2355', 'rafinha_go@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '', '256.649.849-87', 'Rua heitor medeiros, 468', 'Pico Jaraguá', 'São Paulo', 'SP', '31584-984', ''),
(5, 'Sonia Maria', '(11)97454-7415', 'sonia123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '', '456.879.813-65', 'Prf Alipio Dutra, 46', 'Vila Sonia', 'São Paulo', 'SP', '06716-849', ''),
(6, 'Jorge Rojas', '(11)93547-9456', 'jorge123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '1973-08-05', '468.781.351-68', 'Rua Opala, 123', 'Matão', 'Vargem Grande Paulista', 'SP', '06730-000', 'Tem Loja de Artigos'),
(7, 'João Medeiros', '(11)97846-6465', 'joao123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '', '897.984.984-98', 'Rua Flores, 123', 'Morada do Sol', 'Vargem Grande Paulista', 'SP', '06730-000', ''),
(8, 'Maria Moraes', '(11)93654-7894', 'maria123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '1988-06-20', '954.189.469-89', 'Rua Junuqueira, 123', 'Itaquera', 'São Paulo', 'SP', '46984-648', 'ela'),
(9, 'Roberto Souza', '(11)93214-5789', 'roberto123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '', '754.869.849-68', 'Rua Meira, 123', 'Portao Vermelho', 'Vargem Grande Paulista', 'SP', '06730-000', ''),
(11, 'Joao Winzel', '(11)97456-1454', 'joaow123@gmail.com', '202cb962ac59075b964b07152d234b70', '123', '1964-12-14', '684.198.419-84', 'Rua Topazio, 123', 'Morada do Sol', 'Vargem Grande Paulista', 'SP', '06730-000', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipe`
--

CREATE TABLE `equipe` (
  `id` int(100) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `link_face` varchar(255) NOT NULL,
  `link_insta` varchar(255) NOT NULL,
  `foto_equipe` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipe`
--

INSERT INTO `equipe` (`id`, `nome`, `cargo`, `link_face`, `link_insta`, `foto_equipe`) VALUES
(5, 'Marcio Oliveira Leite 1', 'web1', 'https://www.marcioleiteweb.com.br/', 'https://www.marcioleiteweb.com.br/', '1621126848.jpg'),
(6, 'Gabi', 'comercial', 'https://www.marcioleiteweb.com.br/', 'https://www.marcioleiteweb.com.br/', '1621126883.jpg'),
(7, 'rogerio', 'social', 'https://www.marcioleiteweb.com.br/', 'https://www.marcioleiteweb.com.br/', '1621126906.jpg'),
(8, 'Paula', 'vendas', 'https://www.marcioleiteweb.com.br/', 'https://www.marcioleiteweb.com.br/', '1621126932.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `nome`) VALUES
(3, 'SÃ£o Paulo (SP)'),
(5, 'Minas Gerais (MG)'),
(6, 'Acre (AC)'),
(7, 'Alagoas (AL)'),
(8, 'AmapÃ¡ (AP)'),
(9, 'Amazonas (AM)'),
(10, 'Bahia (BA)'),
(11, 'CearÃ¡ (CE)'),
(12, 'Distrito Federal (DF)'),
(13, 'EspÃ­rito Santo (ES)'),
(14, 'GoiÃ¡s (GO)'),
(15, 'MaranhÃ£o (MA)'),
(16, 'Mato Grosso (MT)'),
(17, 'Mato Grosso do Sul (MS)'),
(18, 'ParÃ¡ (PA)'),
(19, 'ParaÃ­ba (PB)'),
(20, 'ParanÃ¡ (PR)'),
(21, 'Pernambuco (PE)'),
(22, 'PiauÃ­ (PI)'),
(23, 'Rio de Janeiro (RJ)'),
(24, 'Rio Grande do Norte (RN)'),
(25, 'Rio Grande do Sul (RS)'),
(26, 'RondÃ´nia (RO)'),
(27, 'Roraima (RR)'),
(28, 'Santa Catarina (SC)'),
(29, 'Santa Catarina (SC)'),
(30, 'Sergipe (SE)'),
(31, 'Tocantins (TO)');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado_na_home`
--

CREATE TABLE `estado_na_home` (
  `id` int(200) NOT NULL,
  `id_estados` int(200) NOT NULL,
  `nome_estado` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_blog_estados`
--

CREATE TABLE `fotos_blog_estados` (
  `id` int(100) NOT NULL,
  `id_blog_estados` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_classificados`
--

CREATE TABLE `fotos_classificados` (
  `id` int(100) NOT NULL,
  `id_classificados` int(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos_classificados`
--

INSERT INTO `fotos_classificados` (`id`, `id_classificados`, `foto`) VALUES
(12, 9, '1660917074.jpg'),
(13, 9, '1660917082.jpg'),
(14, 9, '1660917089.jpg'),
(15, 9, '1660917097.jpg'),
(16, 9, '1660917114.jpg'),
(17, 9, '1660917122.jpg'),
(18, 9, '1660917132.jpg'),
(19, 9, '1660917141.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_obras`
--

CREATE TABLE `fotos_obras` (
  `id` int(100) NOT NULL,
  `id_obras` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos_produtos`
--

CREATE TABLE `fotos_produtos` (
  `id` int(100) NOT NULL,
  `id_produto` varchar(250) NOT NULL,
  `fotos_produto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fotos_produtos`
--

INSERT INTO `fotos_produtos` (`id`, `id_produto`, `fotos_produto`) VALUES
(1, '287', '1669920652.jpg'),
(2, '293', '1700057743.jpg'),
(3, '293', '1700057916.jpg'),
(4, '294', '1700057990.jpg'),
(5, '294', '1700058002.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `membro`
--

CREATE TABLE `membro` (
  `id` int(100) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `profissao` varchar(300) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-03-25 00:00:00', NULL),
(3, 'Gerente', '2016-03-25 00:00:00', '2016-03-27 20:26:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `obras`
--

CREATE TABLE `obras` (
  `id` int(100) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `texto` varchar(800) NOT NULL,
  `foto_principal` varchar(250) NOT NULL,
  `obras_album` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(100) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `status_venda` varchar(255) NOT NULL,
  `valor_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `id_cliente`, `status_venda`, `valor_total`) VALUES
(18, 11, 'Enviado', '1301.5'),
(19, 5, 'Enviado', '1246');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_lista`
--

CREATE TABLE `pedido_lista` (
  `id` int(100) NOT NULL,
  `id_produto` int(255) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` varchar(255) NOT NULL,
  `foto_produto` varchar(255) NOT NULL,
  `id_cliente` int(255) NOT NULL,
  `id_pedido` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido_lista`
--

INSERT INTO `pedido_lista` (`id`, `id_produto`, `nome_produto`, `preco_produto`, `foto_produto`, `id_cliente`, `id_pedido`) VALUES
(29, 294, 'Espada Rei', '1200.5', '1699988787.jpg', 11, 18),
(30, 293, 'Estatua Mago', '55.5', '1699566802.jpg', 11, 18),
(31, 294, 'Espada Rei', '1200.5', '1699988787.jpg', 5, 19);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(100) NOT NULL,
  `pergunta` varchar(250) NOT NULL,
  `resposta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(520) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco` varchar(20) NOT NULL,
  `categorias_produto_id` int(11) NOT NULL,
  `situacoes_produto_id` int(11) NOT NULL,
  `foto` varchar(120) DEFAULT NULL,
  `produto_album` varchar(250) NOT NULL,
  `descricao` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `preco`, `categorias_produto_id`, `situacoes_produto_id`, `foto`, `produto_album`, `descricao`, `created`, `modified`) VALUES
(293, 'Estatua Mago', 4, '55.50', 93, 2, '1699566802.jpg', '1699564953', '    descrição do produto', '2023-11-09 18:22:33', '2023-11-22 18:24:14'),
(294, 'Espada Rei', 3, '1200.50', 90, 1, '1699988787.jpg', '1699988787', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non lacus sit amet mauris faucibus rutrum. Aliquam condimentum purus eu purus auctor varius. Nulla facilisi. Mauris lobortis lobortis est scelerisque suscipit. Cras vitae ipsum sapien. Vestibulum euismod tortor et fermentum aliquam. Proin dui ligula, aliquet vitae odio eu, auctor egestas libero.\r\n\r\nIn eget ipsum eget turpis pulvinar hendrerit ac vitae orci. Mauris venenatis massa nec venenatis consequat. Nunc in venenatis erat. Donec a tortor ligula. Aenean molestie blandit diam, sed fringilla quam dictum at. Sed hendrerit et massa ut porttitor. Pellentesque et lectus libero. Praesent velit magna, rutrum vitae aliquam sed, lobortis eget elit. Nulla vestibulum lectus tortor, id semper erat commodo sit amet. In nibh erat, blandit', '2023-11-14 16:06:27', '2023-11-16 11:50:03');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_na_home`
--

CREATE TABLE `produtos_na_home` (
  `id` int(100) NOT NULL,
  `id_produtos` varchar(100) NOT NULL,
  `nome_categoria` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos_na_home`
--

INSERT INTO `produtos_na_home` (`id`, `id_produtos`, `nome_categoria`) VALUES
(4, '46', 'categoria1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quem_somos`
--

CREATE TABLE `quem_somos` (
  `id` int(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `foto_principal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quem_somos`
--

INSERT INTO `quem_somos` (`id`, `titulo`, `texto`, `foto_principal`) VALUES
(6, 'Quem Somos', '<p style=\"background: #ffffff; border: 0px; margin: 0px 0px 1.6em; padding: 0px; vertical-align: baseline; color: #9999aa; font-family: \'Source Sans Pro\', Arial, Helvetica, sans-serif; font-size: 16px;\">&nbsp;A Alpha Pedras<strong style=\"background: transparent; border: 0px; margin: 0px; padding: 0px; vertical-align: baseline;\">&nbsp;Marmoraria em Cotia</strong>&nbsp;surgiu com o intuito de se tornar refer&ecirc;ncia no mercado, em nossa &aacute;rea de atua&ccedil;&atilde;o. Temos uma equipe qualificada e eficiente, comprometida em superar as expectativas dos nossos clientes. Atuamos com seriedade, transpar&ecirc;ncia e sobretudo, respeito. Prezamos sempre pela qualidade do atendimento, estando prontos para atender e satisfazer suas necessidades.</p>\r\n<p style=\"background: #ffffff; border: 0px; margin: 0px 0px 1.6em; padding: 0px; vertical-align: baseline; color: #9999aa; font-family: \'Source Sans Pro\', Arial, Helvetica, sans-serif; font-size: 16px;\">A marmoraria Alpha Pedras, foi criada do sonho de um jovem empreendedor, com o objetivo de trazer novidades e pe&ccedil;as criativas para valorizar seja qual for o seu ambiente, dando-lhe um ar de sofistica&ccedil;&atilde;o e eleg&acirc;ncia.</p>\r\n<p style=\"background: #ffffff; border: 0px; margin: 0px 0px 1.6em; padding: 0px; vertical-align: baseline; color: #9999aa; font-family: \'Source Sans Pro\', Arial, Helvetica, sans-serif; font-size: 16px;\">&nbsp;Marmoraria em Cotia &ndash; Marmoraria em Barueri &ndash; Marmoraria na Raposo &ndash; Marmores &ndash; Granitos &ndash; Pias em Marmores</p>', '1660058623.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(100) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo`, `texto`) VALUES
(6, 'GRANITOS', 'O granito é uma pedra natural formada por minerais como o quartzo transparente, o feldspato (principal responsável pela cor do granito) e a biotita escura. É mais duro que o mármore e não possui tantos veios.'),
(7, 'MARMORES', 'O mármore é uma pedra natural proveniente do calcário. Forma-se pela alta pressão, sendo uma rocha metamórfica. Caracteriza-se por seus veios, tem menos brilho que o granito e possui uma dureza menor que este, sendo por tanto mais frágil.'),
(8, 'QUARTZOS E PRIME', 'As pedras artificiais como o Quartzo e Prime, são utilizadas para ambientes internos, como cozinha e lavatórios. Essa nova tendência é utilizada por clientes que gostam do moderno e peças mais uniformes.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes`
--

CREATE TABLE `situacoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacoes`
--

INSERT INTO `situacoes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-25 00:00:00', NULL),
(2, 'Inativo', '2016-03-25 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes_produtos`
--

CREATE TABLE `situacoes_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacoes_produtos`
--

INSERT INTO `situacoes_produtos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2016-03-28 00:00:00', NULL),
(2, 'Inativo', '2016-03-28 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhos_membro`
--

CREATE TABLE `trabalhos_membro` (
  `id` int(100) NOT NULL,
  `membro_id` varchar(250) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `arquivo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `senha` varchar(240) NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Marcio Leite', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-03-25 02:02:02', '2016-03-27 19:22:38'),
(5, 'editor', 'editor@admin.com', '4badaee57fed5610012a296273158f5f', 1, 3, '2021-05-23 13:27:19', '2022-05-01 01:55:57');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ads_home`
--
ALTER TABLE `ads_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ads_home_topo`
--
ALTER TABLE `ads_home_topo`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ads_interna`
--
ALTER TABLE `ads_interna`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `banner_home`
--
ALTER TABLE `banner_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `blog_estados`
--
ALTER TABLE `blog_estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `classificados`
--
ALTER TABLE `classificados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estado_na_home`
--
ALTER TABLE `estado_na_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_blog_estados`
--
ALTER TABLE `fotos_blog_estados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_classificados`
--
ALTER TABLE `fotos_classificados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_obras`
--
ALTER TABLE `fotos_obras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fotos_produtos`
--
ALTER TABLE `fotos_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `membro`
--
ALTER TABLE `membro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido_lista`
--
ALTER TABLE `pedido_lista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos_na_home`
--
ALTER TABLE `produtos_na_home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacoes`
--
ALTER TABLE `situacoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `situacoes_produtos`
--
ALTER TABLE `situacoes_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `trabalhos_membro`
--
ALTER TABLE `trabalhos_membro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ads_home`
--
ALTER TABLE `ads_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `ads_home_topo`
--
ALTER TABLE `ads_home_topo`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ads_interna`
--
ALTER TABLE `ads_interna`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `banner_home`
--
ALTER TABLE `banner_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `blog_estados`
--
ALTER TABLE `blog_estados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `categorias_produtos`
--
ALTER TABLE `categorias_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT de tabela `classificados`
--
ALTER TABLE `classificados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `estado_na_home`
--
ALTER TABLE `estado_na_home`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `fotos_blog_estados`
--
ALTER TABLE `fotos_blog_estados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `fotos_classificados`
--
ALTER TABLE `fotos_classificados`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `fotos_obras`
--
ALTER TABLE `fotos_obras`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `fotos_produtos`
--
ALTER TABLE `fotos_produtos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `membro`
--
ALTER TABLE `membro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `pedido_lista`
--
ALTER TABLE `pedido_lista`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT de tabela `produtos_na_home`
--
ALTER TABLE `produtos_na_home`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `quem_somos`
--
ALTER TABLE `quem_somos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `situacoes`
--
ALTER TABLE `situacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `situacoes_produtos`
--
ALTER TABLE `situacoes_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `trabalhos_membro`
--
ALTER TABLE `trabalhos_membro`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
