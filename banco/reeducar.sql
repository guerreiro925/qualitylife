-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 10/10/2017 às 10:37
-- Versão do servidor: 5.5.51-38.2
-- Versão do PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `ederd710_qv`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `idAdministrador` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` longtext NOT NULL,
  `nivel` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `adm`
--

INSERT INTO `adm` (`idAdministrador`, `usuario`, `senha`, `nivel`, `deletar`) VALUES
(1, 'matheus', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.727.836.342', 'ADMIN', 0),
(2, 'luis', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.199.521.164', 'ADMIN', 0),
(3, 'nathalia', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.847.826.188', 'ADMIN', 0),
(4, 'gabriel', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.154.734.986', 'ADMIN', 0),
(5, 'mateus', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.666.756.488', 'ADMIN', 0),
(6, 'qualidadedevida', '$P$B/Aa1494b7103489eb02a83fed83e2141fc.267.153.598', 'ADMIN', 0),
(7, 'qualidadedevida_user', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.398.443.535', 'COMUM', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `turma` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `idUsuario`, `nome`, `data`, `sexo`, `telefone`, `turma`, `imagem`, `deletar`) VALUES
(1, 1, 'Matheus Henrique Lima Vilar', '1999-09-25', 'M', '33362332', 'delta', 'img/vilar.png', 0),
(2, 2, 'Henriqu Lima Vilar', '1998-09-25', 'M', '33362332', 'TIPI J', 'img/vilar.png', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `anamnese`
--

CREATE TABLE IF NOT EXISTS `anamnese` (
  `idAnamnese` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `pessoa` int(50) NOT NULL,
  `doenca_anterior` varchar(150) NOT NULL,
  `doenca_familiar` varchar(150) NOT NULL,
  `cirurgia_internacao` varchar(150) NOT NULL,
  `medicacao` varchar(150) NOT NULL,
  `alergia` varchar(150) NOT NULL,
  `numero_refeicoes` int(150) NOT NULL,
  `atividade_fisica` varchar(150) NOT NULL,
  `vezes_semana` int(7) NOT NULL,
  `duracao` longtext NOT NULL,
  `intensidade` varchar(5) NOT NULL,
  `esforco` varchar(3) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `anamnese`
--

INSERT INTO `anamnese` (`idAnamnese`, `tipo`, `funcao`, `pessoa`, `doenca_anterior`, `doenca_familiar`, `cirurgia_internacao`, `medicacao`, `alergia`, `numero_refeicoes`, `atividade_fisica`, `vezes_semana`, `duracao`, `intensidade`, `esforco`, `deletar`) VALUES
(1, 'Matheus Henrique Lima Vilar', 'delta', 1, 'Poucas doenÃ§as', 'Varias doenÃ§as', 'Nenhuma', 'Nenhuma', 'Nenhuma ainda', 22, 'sim', 21, '09:59', 'alta', 'sim', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `idCargo` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cargo`
--

INSERT INTO `cargo` (`idCargo`, `descricao`, `deletar`) VALUES
(1, 'Cozinheiro', 0),
(2, 'MÃºsico', 0),
(3, 'Recepcionista', 0),
(4, 'Faxineiro', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nome`, `deletar`) VALUES
(1, 'saudavel', 0),
(2, 'fitness', 0),
(3, 'bagaÃ§ante', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `duvidas`
--

CREATE TABLE IF NOT EXISTS `duvidas` (
  `idDuvida` int(11) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `nome` longtext NOT NULL,
  `email` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `duvidas`
--

INSERT INTO `duvidas` (`idDuvida`, `pergunta`, `nome`, `email`, `deletar`) VALUES
(1, 'como', 'matheus', 'matheus.henrique.25@s.com', 0),
(2, 'bem', 'henrique', 'teste.henrique.25@outlook.com', 1),
(3, '', 'MATHEUS HENRIQUE DE LIMA VILAR', 'teste.henrique.25@outlook.com', 0),
(4, '<p>dasdada</p>\r\n', 'MATHEUS HENRIQUE DE LIMA VILAR', 'teste.henrique.25@outlook.com', 0),
(5, '<p>dwedwdewwde</p>\r\n', 'MATHEUS HENRIQUE DE LIMA VILAR', 'teste.henrique.25@outlook.com', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `cargo` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `data`, `sexo`, `telefone`, `cargo`, `imagem`, `deletar`) VALUES
(1, 'Luis Filipe', '1998-09-25', 'M', '33362332', 'Cozinheiro', 'img/vilar.png', 0),
(2, 'Nathalia Rodrigues', '1998-09-19', 'F', '33362332', 'Recepcionista', 'img/vilar.png', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `imc`
--

CREATE TABLE IF NOT EXISTS `imc` (
  `idImc` int(11) NOT NULL,
  `pessoa` int(11) NOT NULL,
  `turma_cargo` longtext NOT NULL,
  `nome` longtext NOT NULL,
  `idade` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `sexo` longtext NOT NULL,
  `resultado` varchar(4) NOT NULL,
  `estado` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `imc`
--

INSERT INTO `imc` (`idImc`, `pessoa`, `turma_cargo`, `nome`, `idade`, `peso`, `altura`, `sexo`, `resultado`, `estado`, `deletar`) VALUES
(1, 1, 'TIPI J', 'Henriqu Lima Vilar', 29, 50, 1.99, 'masculino', '12.6', 'VocÃª estÃ¡ abaixo peso.', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `idNoticia` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `resumo` longtext NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `conteudo` longtext NOT NULL,
  `idCategoria` int(20) NOT NULL,
  `contador` int(11) NOT NULL,
  `data` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `titulo`, `resumo`, `imagem`, `conteudo`, `idCategoria`, `contador`, `data`, `deletar`) VALUES
(1, 'Noticia um categoria saudavel', 'Noticia um ', 'img/1.png', '<p>Noticia um tuts tuts <strong>tuts</strong></p>\r\n', 2, 0, '2016-09-10', 0),
(2, 'Noticia um ', 'Noticia um categoria saudavel', 'img/1.png', '<p><strong>TESTE</strong></p>\r\n', 2, 0, '2016-11-15', 0),
(3, 'Noticia trÃªs ', 'Noticia trÃªs qualquer categoria', 'img/3.png', '<p>Noticia qualquer&nbsp;<strong>top</strong></p>\r\n', 1, 0, '2016-11-15', 0),
(4, 'Noticia quatro ', 'Noticia quatro fitness', 'img/fundo.png', '<p><strong>Not&iacute;cia quatro</strong></p>\r\n', 1, 0, '2016-11-15', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `idSlide` int(11) NOT NULL,
  `imagem` longtext NOT NULL,
  `descricao` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `slide`
--

INSERT INTO `slide` (`idSlide`, `imagem`, `descricao`, `deletar`) VALUES
(1, 'img/1.png', 'DescriÃ§Ã£o Slide um', 0),
(2, 'img/3.png', 'DescriÃ§Ã£o Slide dois', 0),
(3, 'img/2.png', 'DescriÃ§Ã£o slide trÃªs', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `nome`, `deletar`) VALUES
(1, 'delta', 0),
(7, 'TIPI Delta', 0),
(8, 'TIPI J', 0),
(9, 'TCA', 0),
(10, 'RCA', 0),
(11, 'DELTÃƒO', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` longtext NOT NULL,
  `alterar_senha` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `alterar_senha`, `deletar`) VALUES
(1, 'matheus', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.431.753.473', '321', 0),
(2, 'henrique0925', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.991.712.935', '', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices de tabela `anamnese`
--
ALTER TABLE `anamnese`
  ADD PRIMARY KEY (`idAnamnese`);

--
-- Índices de tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Índices de tabela `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`idDuvida`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices de tabela `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`idImc`);

--
-- Índices de tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Índices de tabela `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idSlide`);

--
-- Índices de tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idTurma`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `anamnese`
--
ALTER TABLE `anamnese`
  MODIFY `idAnamnese` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `imc`
--
ALTER TABLE `imc`
  MODIFY `idImc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `slide`
--
ALTER TABLE `slide`
  MODIFY `idSlide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `idTurma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
