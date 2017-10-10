-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Nov-2016 às 02:33
-- Versão do servidor: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reeducar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `idAdministrador` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`idAdministrador`, `usuario`, `senha`, `deletar`) VALUES
(1, 'matheus', '$P$B/A05b42930e7f101bbb3a339876bf607f0.915.26', 0),
(2, 'cabral', '$P$B/A31d541d33a012ab3f806b3423d10f402.314.812.614', 0),
(3, '5mentes', '$P$B/Aa17490f8e1163ae5a9c28e54d2f902a3.316.528.369', 1),
(4, 'teste', '$P$B/A7b07a648f42409f72c12ed460b4cb597.693.459.832', 1),
(5, 'mathtestee', '$P$B/A2d461f541ac4ade9ac3900136402a27a.539.226.686', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `idAluno` int(11) NOT NULL,
  `idUsuario` int(20) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `idTurma` int(11) NOT NULL,
  `idCargo` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `idUsuario`, `nome`, `data`, `sexo`, `telefone`, `idTurma`, `idCargo`, `imagem`, `deletar`) VALUES
(3, 1, 'Isadora Souza', '0000-00-00', 'M', '66667777', 7, 5, '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `anamnese`
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `anamnese`
--

INSERT INTO `anamnese` (`idAnamnese`, `tipo`, `funcao`, `pessoa`, `doenca_anterior`, `doenca_familiar`, `cirurgia_internacao`, `medicacao`, `alergia`, `numero_refeicoes`, `atividade_fisica`, `vezes_semana`, `duracao`, `intensidade`, `esforco`, `deletar`) VALUES
(1, '1', 'tipih', 0, 'Sim', 'Sim', 'Sim', 'Sim', 'aooa', 2, 'sim', 2, '2', 'media', 'sim', 1),
(2, '$pessoa', '$funcao', 0, '$doenca_anterior', '$doenca_familiar', '$cirurgia_internacao', '$medicacao', '$alergia', 0, '$atividade', 0, '0', '$inte', '$es', 1),
(3, 'sorriso', 'tipih', 1, 'as', 'a', 'asa', 'asa', 'asa', 15, 'nao', 34, '11', 'media', 'nao', 0),
(4, 'joao', 'Cozinheiro(a)', 2, 'sa', 'as', 'sa', 's', 'as', 7, 'sim', 6, '00:22', 'alta', 'sim', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
  `idCargo` int(11) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`idCargo`, `descricao`, `deletar`) VALUES
(5, 'Recepcionista', 0),
(6, 'Educando', 0),
(7, 'Cozinheiro', 0),
(8, 'Coordenador', 0),
(9, 'Cabo', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nome`, `deletar`) VALUES
(1, 'saudavel', 0),
(2, 'fitness', 0),
(3, 'bagaÃ§ante', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corpo`
--

CREATE TABLE IF NOT EXISTS `corpo` (
  `idCorpo` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `ombro_esquerdo` varchar(100) NOT NULL,
  `ombro_direito` varchar(3) NOT NULL,
  `braco_esquerdo` varchar(3) NOT NULL,
  `braco_direito` varchar(3) NOT NULL,
  `mao_esquerda` varchar(3) NOT NULL,
  `mao_direita` varchar(3) NOT NULL,
  `perna_esquerda` varchar(100) NOT NULL,
  `perna_direita` varchar(100) NOT NULL,
  `pe_esquerdo` varchar(100) NOT NULL,
  `pe_direito` varchar(100) NOT NULL,
  `pescoco` varchar(100) NOT NULL,
  `pulmao` varchar(100) NOT NULL,
  `costa` varchar(100) NOT NULL,
  `coxa` varchar(100) NOT NULL,
  `panturrilha` varchar(100) NOT NULL,
  `sola` varchar(100) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `corpo`
--

INSERT INTO `corpo` (`idCorpo`, `idUsuario`, `ombro_esquerdo`, `ombro_direito`, `braco_esquerdo`, `braco_direito`, `mao_esquerda`, `mao_direita`, `perna_esquerda`, `perna_direita`, `pe_esquerdo`, `pe_direito`, `pescoco`, `pulmao`, `costa`, `coxa`, `panturrilha`, `sola`, `deletar`) VALUES
(41, 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 0),
(42, 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 0),
(43, 0, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 0),
(44, 0, 'ombro', 'omb', 'omb', 'omb', 'omb', 'omb', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 0),
(45, 0, 'ombro', '', 'omb', 'omb', 'omb', 'omb', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 0),
(46, 0, 'ombro', '', 'omb', 'omb', 'omb', 'omb', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 'ombro', 0),
(47, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(48, 0, '', '', '', '', '', '', 'on', '', 'on', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `duvidas`
--

CREATE TABLE IF NOT EXISTS `duvidas` (
  `idDuvida` int(11) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `nome` longtext NOT NULL,
  `email` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `duvidas`
--

INSERT INTO `duvidas` (`idDuvida`, `pergunta`, `nome`, `email`, `deletar`) VALUES
(1, 'como', 'matheus', 'matheus.henrique.25@s.com', 0),
(2, 'bem', 'henrique', 'teste.henrique.25@outlook.com', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idFuncionario` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `idUsuario` int(20) NOT NULL,
  `data` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `idCargo` int(30) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`idFuncionario`, `nome`, `idUsuario`, `data`, `sexo`, `telefone`, `idCargo`, `imagem`, `deletar`) VALUES
(5, 'Matheus Vilar', 1, '1999-09-25', 'M', '33362332', 6, 'img/Penguins.jpg', 1),
(6, 'Gabriel Rafael', 3, '1999-09-09', 'F', '3333-5555', 8, 'img/logo.png', 0),
(7, 'Matheus Vilar', 1, '2016-10-07', 'M', '33362332', 6, 'img/Penguins.jpg', 1),
(8, '$nome', 0, '0000-00-00', '$', '$telefone', 0, '$imagem', 1),
(9, 'Aventura', 1, '2016-10-07', 'M', '33362332', 6, 'img/logo.png', 1),
(10, 'Matheus Vila', 1, '2000-02-29', 'F', '33362332', 6, 'img/Penguins.jpg', 1),
(11, 'okkkook', 1, '2000-02-29', 'F', '33362332', 6, 'img/Penguins.jpg', 1),
(12, 'DESAVENTURA', 1, '1999-09-25', 'F', '33362332', 5, 'img/logo.png', 1),
(13, 'Aventurades', 1, '1999-09-25', 'F', '33362332', 5, 'img/Penguins.jpg', 1),
(14, 'Aventurasdsdsdsd', 1, '0000-00-00', 'F', '33362332', 5, 'img/Penguins.jpg', 1),
(15, 'Zona Norte dos P4RS4 FC', 1, '1999-09-25', 'F', '33362332', 7, 'img/Penguins.jpg', 1),
(16, 'Aventuraasdasda', 1, '1999-09-25', 'F', '33362332', 7, 'img/Penguins.jpg', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imc`
--

CREATE TABLE IF NOT EXISTS `imc` (
  `idImc` int(11) NOT NULL,
  `pessoa` longtext NOT NULL,
  `turma_cargo` longtext NOT NULL,
  `nome` longtext NOT NULL,
  `idade` int(11) NOT NULL,
  `peso` float NOT NULL,
  `altura` float NOT NULL,
  `sexo` longtext NOT NULL,
  `resultado` varchar(4) NOT NULL,
  `estado` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imc`
--

INSERT INTO `imc` (`idImc`, `pessoa`, `turma_cargo`, `nome`, `idade`, `peso`, `altura`, `sexo`, `resultado`, `estado`, `deletar`) VALUES
(1, '2', 'Cozinheiro(a)', 'joao', 19, 50, 1.99, 'masculino', '12.6', 'VocÃª estÃ¡ abaixo peso.', 0),
(2, '1', 'tipih', 'sorriso', 28, 79, 1.89, 'feminino', '22.1', 'VocÃª estÃ¡ com o peso normal.', 0),
(3, '2', 'Cozinheiro(a)', 'joao', 29, 89, 1.89, 'masculino', '24.9', 'VocÃª estÃ¡ com o peso normal.', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`idNoticia`, `titulo`, `resumo`, `imagem`, `conteudo`, `idCategoria`, `contador`, `data`, `deletar`) VALUES
(10, 'Transtornos Alimentares ', 'Os transtornos alimentares prevalecem sobretudo entre raparigas adolescentes e jovens adultas, mas cerca de 5 a 10% dos casos ocorrem com rapazes. As vÃ­timas sentem-se normalmente impotentes em relaÃ§Ã£o Ã s suas vidas, sofrem de baixa auto-estima e tÃªm ', 'img/logo.png', 'NutriÃ§Ã£o para transtornos alimentares\r\n\r\nUma boa nutriÃ§Ã£o Ã© essencial a todos e especialmente Ã s pessoas em recuperaÃ§Ã£o de um transtorno alimentar. Primeiro, certifique-se de que a pessoa com o transtorno foi avaliada por um mÃ©dico qualificado e que se encontra num plano de tratamento. Uma terapia nutricional de um dietista credenciado, aliada a psicoterapia e farmacologia ou formas variadas de medicina alternativa, pode ajudar uma pessoa em recuperaÃ§Ã£o de um transtorno alimentar.\r\n\r\nParte de um plano de tratamento eficaz consiste em ajudar a pessoa a regressar a um padrÃ£o de alimentaÃ§Ã£o saudÃ¡vel. O corpo de uma pessoa que tem passado fome estÃ¡ num estado terrÃ­vel e precisa de alimentos nutritivos para recuperar energia, restabelecer o equilÃ­brio quÃ­mico e melhorar a clareza mental.\r\n\r\nOs seguintes alimentos podem ajudar na recuperaÃ§Ã£o de um transtorno alimentar:\r\n\r\nâ— Alimentos integrais concedem nutrientes que revitalizam o corpo. O pÃ£o de centeio integral, arroz integral, fruta e legumes frescos e carnes magras darÃ£o aos corpos desgastados um aumento de energia. As comidas processadas oferecem aÃ§Ãºcar, xarope de milho com alto teor de frutose, gordura, cereais refinados e muito pouco no que diz respeito a nutrientes;\r\n\r\nâ— O cÃ¡lcio presente em produtos lÃ¡cteos magros e vegetais folhados ajudam a fortalecer os ossos e os dentes. As dietas excessivas roubam cÃ¡lcio aos ossos, tornando-os frÃ¡geis. As jovens que sofrem devido a um transtorno alimentar mostraram ter uma massa Ã³ssea semelhante Ã  de mulheres idosas. Para alÃ©m do mais, vomitar em excesso destrÃ³i o esmalte dos dentes;\r\n\r\nâ— Carnes magras, legumes e peixe proporcionam as proteÃ­nas necessÃ¡rias das quais um corpo mal nutrido precisa;\r\n\r\nâ— Os Ã¡cidos gordos do Ã“mega 3 encontrado no peixe, ovos e nozes, estimulam o coraÃ§Ã£o. Quem sofre de anorexia corre o risco de ter problemas cardÃ­acos e arritmia cardÃ­aca pois o corpo nÃ£o tem gordura suficiente para sustentar o funcionamento cardÃ­aco;\r\n\r\nâ— Os lÃ­quidos e sÃ³dio da Ã¡gua e bebidas desportivas sÃ£o necessÃ¡rios para restabelecer o desequilÃ­brio de electrÃ³litos e restituir a perda de Ã¡gua devido Ã  desidrataÃ§Ã£o provocada por vomitar em excesso, ou pelo uso de laxantes e de diurÃ©ticos.\r\n\r\nOs atletas que sofrem de transtornos alimentares precisam de aconselhamento nutricional especializado. Desportos como a luta livre, corrida, ballet e ginÃ¡stica, que dÃ£o Ãªnfase a corpos magros e tonificados, apresentam um nÃºmero excepcionalmente elevado de praticantes com transtornos alimentares. Estes atletas restringem a comida, tÃªm um Ã­ndice de massa corporal muito baixo, abusam de bebidas proteicas e suplementos e tentam perder o peso da Ã¡gua com diurÃ©ticos e saunas.\r\n\r\nOs atletas devem concentrar-se numa alimentaÃ§Ã£o baseada em alimentos em vez de suplementos, carbonatos e gorduras para a energia, proteÃ­nas para os mÃºsculos, fluidos e electrÃ³litos adequados, e vitaminas e electrÃ³litos para manter a performance e o equilÃ­brio nutricional.\r\n\r\n \r\n\r\nPorquÃª usar a nutriÃ§Ã£o para prevenir transtornos alimentares?\r\n\r\n \r\n\r\nAs prÃ¡ticas de boa nutriÃ§Ã£o podem ajudar a prevenir transtornos alimentares. Os jovens vÃ£o buscar a sua imagem corporal e auto-estima ao mundo que os rodeia. Envolver as crianÃ§as na preparaÃ§Ã£o da comida e ensinar-lhes a reconhecer imagens corporais realistas pode preparÃ¡-las para hÃ¡bitos saudÃ¡veis que podem ser-lhes Ãºteis ao longo da vida.\r\n\r\nAjude-os a focarem-se na boa saÃºde e alimentos saudÃ¡veis em vez do seu peso e do que a balanÃ§a diz. As crianÃ§as podem ser atarracadas mas saudÃ¡veis se comerem alimentos correctos e fizerem exercÃ­cio. Ensinem as crianÃ§as a comer quando tÃªm fome e nÃ£o por razÃµes emocionais. Deixe-as saber que nÃ£o hÃ¡ nenhuma boa razÃ£o para terem de passar fome. NÃ£o critique o peso de uma crianÃ§a nem se queixe do seu tamanho. Desenvolva previamente planos de comida saudÃ¡vel e mantenha-se firme na sua prossecuÃ§Ã£o.\r\n\r\nProcure sinais de aviso que possam indicar que uma pessoa jovem possa estar a caminho de uma transtorno alimentar: contar obsessivamente as calorias de tudo o que come, sÃ³ comer â€œdietaâ€ ou alimentos baixos em gordura, dizer que estÃ¡ gorda quando de facto estÃ¡ muito magra, abusar de laxantes, pesar-se constantemente e fazer exercÃ­cio em excesso. ', 2, 31, '1', 0),
(11, '10 Passos para uma alimentaÃ§Ã£o SaudÃ¡vel', 'Verifique os 10 passos para promover uma alimentaÃ§Ã£o saudÃ¡vel, e escolha aqueles que podem trazer variedade e mudanÃ§a de qualidade em sua alimentaÃ§Ã£o.', 'images/noticias/1.jpg', '1. Aumente e varie o consumo de frutas, legumes e verduras. Elas sÃ£o ricas em  vitaminas, minerais e fibras. As vitaminas e  minerais colaboram na manutenÃ§Ã£o e no bom funcionamento do organismo. E as fibras regulam o funcionamento intestinal, dÃ£o sensaÃ§Ã£o de saciedade, e podem atuar prevenindo vÃ¡rias doenÃ§as.\r\n2. Coma feijÃ£o pelo menos 1 vez ao dia. \r\nVarie os tipos de feijÃµes usados e as formas de preparo. Use tambÃ©m outros tipos de leguminosas como soja, grÃ£o-de-bico, lentilha, etc. Coma feijÃ£o com arroz na proporÃ§Ã£o de 1 para 2. Esse prato brasileiro Ã© uma combinaÃ§Ã£o completa de proteÃ­nas e bom para a saÃºde!\r\n3. Reduza o consumo de sal. \r\nTire o saleiro da mesa. O sÃ³dio Ã© essencial para o bom funcionamento do organismo, mas o excesso pode levar ao aumento da pressÃ£o do sangue (hipertensÃ£o), e outras doenÃ§as. Evite temperos prontos, alimentos enlatados e embutidos. Use ervas frescas para realÃ§ar o sabor. \r\n4. Reduza o consumo de alimentos gordurosos, como carnes com gordura aparente, salsicha, mortadela, frituras e salgadinhos, para no mÃ¡ximo 1 vez por semana. Prefira os alimentos cozidos ou assados, leite e iogurte desnatados e queijos brancos.\r\n5.FaÃ§a pelo menos 4 refeiÃ§Ãµes por dia: cafÃ© da manhÃ£, almoÃ§o, jantar e os lanches! NÃ£o pule as refeiÃ§Ãµes. Para lanche e sobremesa prefira frutas.\r\n6. Mantenha o seu peso dentro dos limites saudÃ¡veis â€“ veja se seu IMC (Ãndice de Massa CorpÃ³rea) estÃ¡ entre 18,5 a 24,9kg/m2. O IMC mostra se seu peso estÃ¡ adequado para a sua altura.\r\n7. Consuma com moderaÃ§Ã£o alimentos ricos em aÃ§Ãºcar, como doces, bolos, e biscoitos. Prefira os cereais integrais.  \r\n8. Aprecie sua refeiÃ§Ã£o e coma devagar. FaÃ§a de sua refeiÃ§Ã£o um ponto de encontro com a famÃ­lia. NÃ£o se alimente assistindo TV ou lendo livros e revistas. Reserve um tempo do seu dia para as refeiÃ§Ãµes fazendo delas, momentos de muito prazer! \r\n9. Beba Ã¡gua! \r\nMuita Ã¡gua! 60% do nosso corpo Ã© formado por Ã¡gua! Portanto, beba em mÃ©dia 2 litros de Ã¡gua (6-8 copos) por dia. Consuma com moderaÃ§Ã£o bebidas alcoÃ³licas e refrigerantes. 1ml de Ã¡lcool fornece 7kcal!! Prefira sucos de fruta fresca ou polpa congelada.\r\n10. Seja ativo! \r\nAcumule pelo menos 30 minutos de atividade fÃ­sica todos os dias. Caminhe pelo seu bairro, suba escadas, jogue bola, dance, enfim, \r\nmexa-se!! \r\n\r\nAtenÃ§Ã£o:\r\n- Comece com os passos que vocÃª avalia que sÃ£o mais fÃ¡ceis de adotar no seu hÃ¡bito alimentar e de sua famÃ­lia. Procure segui-lo todos os dias. \r\n- O hÃ¡bito se adquire com constÃ¢ncia e persistÃªncia e Ã© uma questÃ£o de tempo. \r\n- Quando sentir que o passo jÃ¡ faz parte da sua rotina, siga para o prÃ³ximo passo. \r\n- A alimentaÃ§Ã£o saudÃ¡vel pode e deve ser gostosa. Consulte receitas para facilitar o consumo dos alimentos que vÃ£o fazer parte dos seus novos hÃ¡bitos. \r\n\r\nNosso serviÃ§o de NutriÃ§Ã£o nÃ£o tem como objetivo substituir uma consulta mÃ©dica. As informaÃ§Ãµes aqui divulgadas tÃªm a funÃ§Ã£o de fornecer uma orientaÃ§Ã£o geral, o que pode nÃ£o se aplicar a casos especÃ­ficos. Consulte sempre sua nutricionista clÃ­nica ou mÃ©dico sobre quais alimentos sÃ£o indicados em seu caso.', 0, 13, '1', 0),
(12, '10 Coisas que VocÃª Precisa Saber Sobre Atividade FÃ­sica', 'ConheÃ§a os benefÃ­cios da realizaÃ§Ã£o de exercÃ­cios no 10 Coisas que VocÃª Precisa Saber Sobre Atividades FÃ­sicas. Lembrando que o sedentarismo Ã© uma das principais causas de doenÃ§as cardiovasculares, diabetes, obesidade e outras doenÃ§as crÃ´nicas n', 'images/noticias/2.jpg', 'Confira, entÃ£o, os 10 coisas que vocÃª precisa saber sobre atividade fÃ­sica:\r\n\r\nA prÃ¡tica de exercÃ­cios, de intensidade moderada, durante meia hora por dia Ã© suficiente para que o cidadÃ£o deixe de ser sedentÃ¡rio. Estes trinta minutos podem ser contÃ­nuos ou divididos em trÃªs perÃ­odos de 10 minutos cada.\r\nQuando se fala em exercÃ­cios, o mais importante Ã© que vocÃª pratique alguma atividade que se adapte ao seu estilo de vida e que seja do seu agrado. Caso contrÃ¡rio, sÃ£o muitas as chances de interrupÃ§Ãµes.\r\nPequenas modificaÃ§Ãµes no hÃ¡bito diÃ¡rio â€“ como subir escadas, saltar do Ã´nibus um ponto antes, passear com cachorro, varrer, cuidar do jardim, lavar o carro, etc. â€“ podem ajudÃ¡-lo a movimentar mais e servir como um estÃ­mulo para o inÃ­cio de uma atividade fÃ­sica diÃ¡ria.\r\nOs efeitos benÃ©ficos da atividade fÃ­sica ocorrem para as pessoas que se exercitam com regularidade. Aqueles com IMC entre 25 e 30 (sobrepeso), nestas condiÃ§Ãµes, podem ter um risco menor de desenvolver diabetes e outras doenÃ§as metabÃ³licas do que os sedentÃ¡rios.\r\nDe acordo com o United States Departament of Health and Human Services, Ã© importante os adultos pratiquem duas horas de atividades anaerÃ³bicas (musculaÃ§Ã£o localizada), por semana, alÃ©m dos 30 minutos de caminhada intensa por dia. Nos casos de pessoas com diabetes, hipertensÃ£o, obesidade e pessoas com problemas no metabolismo Ã³sseo, por exemplo, Ã© preciso ter um cuidado especial na escolha dos exercÃ­cios a praticar. Nestes casos, Ã© imprescindÃ­vel o acompanhamento de um profissional.\r\n1 minuto de atividade fÃ­sica intensa Ã© compatÃ­vel com 2 minutos de atividade moderada. Caminhada em ritmo acelerado, hidroginÃ¡stica, passeio de bicicleta e jogo de tÃªnis em dupla sÃ£o alguns dos exemplos para atividade moderada. JÃ¡ a corrida, a nataÃ§Ã£o, o basquete e a corrida de bicicleta sÃ£o consideradas intensas.\r\nDurante a prÃ¡tica de um exercÃ­cio fÃ­sico Ã© possÃ­vel que haja uma reduÃ§Ã£o na taxa de glicose da pessoa. O indicado, principalmente para pessoas com diabetes, Ã© que carreguem consigo algum tipo de carboidrato de rÃ¡pida absorÃ§Ã£o.\r\nAs atividades fÃ­sicas melhoram a sensaÃ§Ã£o de bem-estar, diminuem a ansiedade e a probabilidade de depressÃ£o, por liberarem a serotonina (hormÃ´nio conhecido como â€œmolÃ©cula da felicidadeâ€).\r\nDentre os benefÃ­cios da prÃ¡tica de exercÃ­cios estÃ£o: a diminuiÃ§Ã£o do apetite, a melhora do humor, a perda de gordura (emagrecimento), o enrijecimento dos mÃºsculos, a melhora da imunidade e o retardo do envelhecimento.\r\nEm uma recente pesquisa feita pelo Overseas Development Institute, na GrÃ£ Bretanha, mostrou que o nÃºmero de aldutos obesos cresceu quatro vezes nos Ãºltimos 30 anos, em paises em desenvolvimento, ou seja, sÃ£o mais de 1 bilhÃ£o de pessoas acima do peso.', 0, 12, '10', 0),
(13, 'Importância e benefÃ­cios da atividade fÃ­sica na saÃºde', 'As evidÃªncias estÃ£o aumentando e sÃ£o mais convincentes que nunca! Pessoas de todas as idades, que estÃ£o de um modo geral inativas fisicamente, podem melhorar sua saÃºde e bem-estar ao praticar atividade fÃ­sica moderada regularmente. Atividade fÃ­sica ', 'images/noticias/1.jpg', 'Atividade fÃ­sica tambÃ©m:\r\n* ajuda a controlar o peso corporal;\r\n*contribui para ossos, articulaÃ§Ãµes e mÃºsculos sadios;\r\n* reduz o Ã­ndice de quedas em idosos;\r\n* ajuda a aliviar a dor da artrite;\r\n* diminui os sintomas de ansiedade e depressÃ£o;\r\n* e estÃ¡ associada a menor nÃºmero de hospitalizaÃ§Ãµes, visitas mÃ©dicas e medicaÃ§Ã£o.\r\nAinda mais, a atividade fÃ­sica nÃ£o precisa ser extenuante para ser benÃ©fica e pessoas de todas as idades obtÃªm benefÃ­cios ao participar regularmente de atividade fÃ­sica moderada por 5 ou mais dias da semana.\r\nAtividade fÃ­sica regular pode melhorar sua saÃºde e reduzir os risco de morte prematura das seguintes formas:\r\n\r\nReduz o risco de desenvolver doenÃ§a das artÃ©rias coronÃ¡rias e as chances de morrer disso\r\n\r\nReduz o risco de infarto.\r\n\r\nReduz o risco de ter um segundo ataque cardÃ­aco em pessoas que jÃ¡ tiveram um ataque.\r\n\r\nDiminui o colesterol total e os triglicerÃ­deos, e eleva o bom colesterol HDL.\r\n\r\nDiminui o risco de desenvolver pressÃ£o alta.\r\n\r\nAjuda a reduzir a pressÃ£o arterial em pessoas que jÃ¡ tÃªm hipertensÃ£o.\r\n\r\nDiminui o risco de desenvolver diabetes tipo 2 (nÃ£o dependente de insulina).\r\n\r\nReduz o risco de cÃ¢ncer de cÃ³lon.\r\n\r\nAjudas as pessoas a conseguirem e manter um peso ideal.\r\n\r\nReduz os sentimentos de depressÃ£o e ansiedade.\r\n\r\nPromove o bem-estar psicolÃ³gico e reduz sentimentos de estresse.\r\n\r\nAjuda a construir e manter articulaÃ§Ãµes, mÃºsculos e ossos saudÃ¡veis.\r\n\r\nAjuda pessoas mais velhas a ficarem mais fortes e serem mais capazes de moverem-se sem cair o ficar excessivamente cansadas.\r\nA falta de atividade fÃ­sica pode prejudicar sua saÃºde?\r\n\r\nEvidÃªncias mostram que pessoas que nÃ£o praticam atividades fÃ­sicas definitivamente nÃ£o estÃ£o ajudando sua saÃºde e provavelmente a estÃ£o prejudicando. Quanto mais examinamos os riscos para a saÃºde associados Ã  falta de atividade fÃ­sica, mais convencidos ficamos que pessoas que nÃ£o praticam atividade fÃ­sica devem comeÃ§ar a se exercitar.', 0, 6, '5', 0),
(14, 'Atividades FÃ­sicas', 'Atividades fÃ­sicas sÃ£o os movimentos corporais produzidos pelos mÃºsculos esquelÃ©ticos, que tem como resultado um gasto de energia maior do que os nÃ­veis de repouso. Sendo assim, nÃ£o sÃ£o apenas os exercÃ­cios praticados dentro de uma academia, ou dur', 'images/noticias/1.jpg', 'ImportÃ¢ncia das Atividades FÃ­sicas\r\n\r\nAs atividades fÃ­sicas, sem dÃºvida alguma proporcionam uma alta qualidade de vida. Praticar exercÃ­cios regularmente ajuda a manter uma boa saÃºde mental e corporal, em qualquer idade.\r\n\r\nMas, infelizmente essa nÃ£o Ã© a realidade que estamos vivendo, ao mesmo tempo que existem pessoas preocupadÃ­ssimas com a alimentaÃ§Ã£o e com o corpo, existem outras que se entregam cada vez mais ao sedentarismo. Pesquisas afirmam que mais de 60% dos adultos que vivem em Ã¡reas urbanas, nÃ£o praticam exercÃ­cios regurlamente. Ã‰ possÃ­vel observar um grande Ã­ndice de aumento do sedentarismo, e consequentemente da obesidade, que estÃ¡ diretamente ligado ao estilo da vida moderna. Hoje os exercÃ­cios estÃ£o cada vez mais reduzidos, por conta da tecnologia que substitui prÃ¡ticas que antes dependiam do nosso esforÃ§o, e tambÃ©m pelo tempo, que Ã© cada vez mais acelerado e escasso, as refeiÃ§Ãµes precisam ser mais rÃ¡pidas, e o tempo para as atividades fÃ­sicas Ã© substituÃ­do pela televisÃ£o, computador, video-game etc.\r\n\r\nDesde o seu surgimento, o homem jÃ¡ foi condicionado Ã  diversas prÃ¡ticas fÃ­sicas e sempre foi ativo. Antigamente tudo o levava a se exercitar com grande frequÃªncia, andava muito de um lugar ao outro, nÃ£o tinha a ajuda dos transportes, o trabalho era braÃ§al, tudo era fruto do esforÃ§o. Com o passar do tempo, e principalmente com a RevoluÃ§Ã£o Industrial, a troca do campo pela cidade e o surgimento de mÃ¡quinas e transportes, passaram a favorecer a diminuiÃ§Ã£o dessas atividades, que estÃ£o cada vez mais reduzidas.\r\n\r\nNo Brasil, esse modo de vida acelerado e sedentÃ¡rio, Ã© responsÃ¡vel por, em mÃ©dia, 54% do risco de morte por infarto, e 50% do risco de morte por derrame cerebral, duas das principais causas de morte no paÃ­s.\r\n\r\nBenefÃ­cios das Atividades FÃ­sicas\r\n\r\nAs atividades fÃ­sicas sÃ£o benÃ©ficas para todo o organismo, a comeÃ§ar pela importantÃ­ssima funÃ§Ã£o de fortalecer os ossos, articulaÃ§Ãµes e mÃºsculos, proporcionando mais resistÃªncia, flexibilidade, equilÃ­brio corporal, agilidade, e principalmente, um bom condicionamento fÃ­sico, melhorando as condiÃ§Ãµes de funcionamento do sistema cardiorespiratÃ³rio.\r\n\r\nA qualidade de vida Ã© muito maior quando se tem o hÃ¡bito de praticar exercÃ­cios, pois aumenta a disposiÃ§Ã£o, a facilidade para certas coisas, melhora o sono, a alimentaÃ§Ã£o, o humor, o aspecto da pele, ajuda na superaÃ§Ã£o de limites, na vida sexual, entre outros milhares de benefÃ­cios.\r\n\r\nOutro fator muito importante, Ã© o controle ou a perda de peso e a reduÃ§Ã£o da gordura corporal atravÃ©s dos exercÃ­cios. Pessoas com o peso inadequado, e com um alto Ã­ndice de gordura possuem grandes riscos de contraÃ­rem graves doenÃ§as, principalmente as cardiovasculares. Quem possui hÃ¡bitos corretos e uma rotina de atividades fÃ­sicas, diminui cerca de 40% do risco de problemas no coraÃ§Ã£o, pois ele trabalha de forma muito mais eficaz e segura. Proporcionam tambÃ©m a reduÃ§Ã£o da pressÃ£o arterial, do colesterol, e melhora a diabetes. Alguns problemas respiratÃ³rios tambÃ©m podem ser resolvidos com a prÃ¡tica de atividades fÃ­sicas, pois ajudam a fortalecer os pulmÃµes, fornece mais energia, fÃ´lego, oxigÃªnio e nutrientes aos tecidos.\r\n\r\nA atividade fÃ­sica ajuda o corpo a usar as calorias de forma eficaz e aumenta a taxa metabÃ³lica nasal, portanto faz com que o organismo use mais calorias do que o normal ao ser exercitado. Essa taxa metabÃ³lica, Ã© baseada nas funÃ§Ãµes do organismo, como a respiraÃ§Ã£o, digestÃ£o, frequÃªncia cardÃ­aca e funÃ§Ã£o cerebral.\r\nAlÃ©m de ser importante em diversos aspectos do corpo, essas tarefas beneficiam tambÃ©m a saÃºde mental, pois melhoram o fluxo de sangue para o cÃ©rebro, levando mais oxigÃªnio e nutrientes, regula as substÃ¢ncias que estÃ£o ligadas ao sistema nervoso, diminui o estresse, pois Ã© relaxante para a mente e faz com que algumas substÃ¢ncias relacionadas Ã  esse comportamento, sejam eliminadas.\r\n\r\nPor auxiliar no comportamento do indivÃ­duo, elas fazem com que o convÃ­vio social seja melhor e mais tranquilo, aumentando tambÃ©m a disposiÃ§Ã£o e a produtividade no trabalho.\r\n\r\nOs exercÃ­cios fÃ­sicos sÃ£o importantes tambÃ©m para cuidar da ansiedade, depressÃ£o, auto-estima e atÃ© para o tratamento de abstinÃªncia de drogas. Realizar essas atividades Ã© uma alternativa saudÃ¡vel para que o corpo e a mente elimine aos poucos a necessidade de determinada substÃ¢ncia.', 0, 5, '16', 0),
(15, 'BenefÃ­cios da atividade fÃ­sica', 'Os benefÃ­cios da atividade fÃ­sica como melhorar a circulaÃ§Ã£o sanguÃ­nea, fortalecer o sistema imune e ajudar a emagrecer, podem ser alcanÃ§ados em cerca de 1 mÃªs apÃ³s o inÃ­cio da atividade fÃ­sica regular.', 'images/noticias/1.jpg', 'Quem pode fazer atividade fÃ­sica\r\n\r\nA prÃ¡tica regular de atividade fÃ­sica Ã© indicada para indivÃ­duos de todas as idades. No entanto, as crianÃ§as com menos de 12 anos devem preferir praticar esportes como danÃ§a, futebol ou karatÃª, por exemplo, porque sÃ£o exercÃ­cios que podem ser realizados 1 ou 2 vezes por semana e sÃ£o mais indicados para esta faixa etÃ¡ria.\r\n\r\nOs benefÃ­cios da atividade fÃ­sica para crianÃ§as e adolescentes incluem:\r\n\r\nCombater o excesso de peso;\r\nMelhorar a auto-estima;\r\nDiminuir a depressÃ£o;\r\nMelhorar o desempenho escolar por melhorar a aprendizagem;\r\nDiminuir o estresse e o cansaÃ§o;\r\nMelhorar a postura;\r\nMelhorar a aparÃªncia da pele.\r\nAs crianÃ§as nÃ£o devem fazer musculaÃ§Ã£o, nem fazer exercÃ­cios extenuantes diariamente, mesmo que esteja acima do peso. O exercÃ­cio diÃ¡rio deve ficar restrito as crianÃ§as atletas que devem ser acompanhadas por um profissional qualificado, durante todo o treino.\r\n\r\nOs adultos e a idosos, devem estar atentos ao peso, porque quando estÃ£o abaixo do peso ideal nÃ£o devem praticar exercÃ­cios regularmente para evitar o gasto calÃ³rico excessivo.\r\n\r\nComo comeÃ§ar a praticar exercÃ­cios\r\n\r\nOs exercÃ­cios devem ser realizados por todos, de todas as idades e de forma regular, mas antes de comeÃ§ar a praticar exercÃ­cios, deixando de ser sedentÃ¡rio, deve-se marcar uma consulta mÃ©dica para verificar as articulaÃ§Ãµes e o funcionamento cardÃ­aco, porque alguns pacientes sÃ³ devem fazer exercÃ­cios com auxÃ­lio do professor da academia ou fisioterapeuta.\r\n\r\nIdealmente os exercÃ­cios devem ser realizados de 3 a 5 vezes por semana, mas pode-se comeÃ§ar devagar, fazendo apenas 2 dias por semana, durante 30 a 60 minutos. A partir da segunda semana, pode aumentar a frequÃªncia para 3 ou 4 dias, conforme a disponibilidade de tempo.\r\nAlguns exemplos de exercÃ­cios:\r\nTreino de caminhada para emagrecer\r\nTreino de corrida para queimar gordura', 0, 3, '14', 0),
(16, 'O que Ã© Atividade FÃ­sica?', 'De acordo com a WHO, a atividade fÃ­sica Ã© definida como qualquer movimento corporal produzido pelos mÃºsculos esquelÃ©ticos que requer gasto de energia. A inatividade fÃ­sica (falta de atividade fÃ­sica)', 'images/noticias/8.jpg', 'De acordo com a WHO, a atividade fÃ­sica Ã© definida como qualquer movimento corporal produzido pelos mÃºsculos esquelÃ©ticos que requer gasto de energia. A inatividade fÃ­sica (falta de atividade fÃ­sica) foi identificado como o fator de risco para a quarta maior mortalidade global (6% das mortes em todo o mundo). AlÃ©m disso, inatividade fÃ­sica Ã© estimada como sendo a causa principal de aproximadamente 21-25% dos cancros do cÃ³lon e da mama, 27% de diabetes e aproximada mente 30% da carga isquÃªmica cardÃ­aca doenÃ§a.A â€œatividade fÃ­sicaâ€ nÃ£o deve ser confundida com â€œexercÃ­cioâ€. ExercÃ­cio, Ã© uma subcategoria da atividade fÃ­sica que Ã© planejada, estruturada, repetitiva e proposital no sentido de que a melhoria ou manutenÃ§Ã£o de um ou mais componentes da aptidÃ£o fÃ­sica Ã© o objetivo. A atividade fÃ­sica inclui o exercÃ­cio, bem como outras atividades que envolvem o movimento corporal e sÃ£o feitas como parte de jogar, trabalhar, transporte ativo, tarefas domÃ©sticas e atividades recreativas.Aumentar a atividade fÃ­sica nÃ£o Ã© apenas um problema individual. Por isso, exige uma base populacional, multi-sectorial e multi-disciplinar, e uma abordagem culturalmente relevante.Segundo COLBERG (2003), a Atividade FÃ­sica ajuda a ganhar mÃºsculos e a perder gordura, diminui o apetite, faz com que vocÃª coma mais sem ganhar gordura, melhora o humor, reduz o estresse e a ansiedade, aumenta o nÃ­vel de energia, melhora a imunidade, torna as articulaÃ§Ãµes mais flexÃ­veis e melhora a qualidade de vida.A aptidÃ£o fÃ­sica traz benefÃ­cios inegÃ¡veis para a saÃºde de todas as pessoas. Quem pratica exercÃ­cios moderados regularmente corre menos risco de ter problemas crÃ´nicos de saÃºde como doenÃ§as cardÃ­acas, obesidade, hipertensÃ£o, diabetes tipo II, certos tipos de cÃ¢ncer e outros distÃºrbios metabÃ³licos.NÃ­veis regular e adequado de atividade fÃ­sica em adultos podem reduzir o risco de hipertensÃ£o, doenÃ§a coronariana, acidente vascular cerebral, diabetes, mama e cÃ¢ncer de cÃ³lon, depressÃ£o e do risco de quedas alÃ©m de melhorar a saÃºde Ã³ssea e funcional. Principais BenefÃ­cios da Atividade FÃ­sicaMelhoria da aptidÃ£o cardÃ­aca;Melhoria da aptidÃ£o pulmonar;Melhoria da forÃ§a muscular;PrevenÃ§Ã£o de doenÃ§a coronariana;RegressÃ£o da aterosclerose;Tratamento das doenÃ§as cardÃ­acas;PrevenÃ§Ã£o de AVCs;PrevenÃ§Ã£o de vÃ¡rios tipos de CÃ¢ncer. Principais MudanÃ§as no Organismo Melhoria do humor; DiminuiÃ§Ã£o do estresse mental; PrevenÃ§Ã£o e alÃ­vio da depressÃ£o; ReduÃ§Ã£o da ansiedade; Aumento da auto estima; ReduÃ§Ã£o de hÃ¡bitos nÃ£o saudÃ¡veis; Melhoria da qualidade do sono; PrevenÃ§Ã£o do ganho de peso; ManutenÃ§Ã£o do peso perdido. A atividade fÃ­sica Ã© um fator determinante do gasto de energia e, portanto, fundamental para o equilÃ­brio de energia e controle de peso.Dessa forma alÃ©m de vocÃª poder desfrutar de suas atividades fÃ­sicas favoritas, vocÃª melhora sua SaÃºde!Post O que Ã© Atividade FÃ­sica? http://www.dicasdetreino.com.br/o-que-e-atividade-fisica/#ixzz3ph3PxLdj Informamos que a cÃ³pia e distribuiÃ§Ã£o desse texto Ã© Proibida de acordo com Creative Commons License - Copyright Â© 2015 Dicas de Treino - Todos os direitos reservados. ', 0, 3, '1', 0),
(17, 'Importância e benefÃ­cios da atividade fÃ­sica na saÃºde', 'As evidÃªncias estÃ£o aumentando e sÃ£o mais convincentes que nunca! Pessoas de todas as idades, que estÃ£o de um modo geral inativas fisicamente, podem melhorar sua saÃºde e bem-estar ao praticar atividade fÃ­sica moderada regularmente. Atividade fÃ­sica ', 'images/noticias/1.jpg', 'Atividade fÃ­sica tambÃ©m:\r\n* ajuda a controlar o peso corporal;\r\n*contribui para ossos, articulaÃ§Ãµes e mÃºsculos sadios;\r\n* reduz o Ã­ndice de quedas em idosos;\r\n* ajuda a aliviar a dor da artrite;\r\n* diminui os sintomas de ansiedade e depressÃ£o;\r\n* e estÃ¡ associada a menor nÃºmero de hospitalizaÃ§Ãµes, visitas mÃ©dicas e medicaÃ§Ã£o.\r\nAinda mais, a atividade fÃ­sica nÃ£o precisa ser extenuante para ser benÃ©fica e pessoas de todas as idades obtÃªm benefÃ­cios ao participar regularmente de atividade fÃ­sica moderada por 5 ou mais dias da semana.\r\nAtividade fÃ­sica regular pode melhorar sua saÃºde e reduzir os risco de morte prematura das seguintes formas:\r\n\r\nReduz o risco de desenvolver doenÃ§a das artÃ©rias coronÃ¡rias e as chances de morrer disso\r\n\r\nReduz o risco de infarto.\r\n\r\nReduz o risco de ter um segundo ataque cardÃ­aco em pessoas que jÃ¡ tiveram um ataque.\r\n\r\nDiminui o colesterol total e os triglicerÃ­deos, e eleva o bom colesterol HDL.\r\n\r\nDiminui o risco de desenvolver pressÃ£o alta.\r\n\r\nAjuda a reduzir a pressÃ£o arterial em pessoas que jÃ¡ tÃªm hipertensÃ£o.\r\n\r\nDiminui o risco de desenvolver diabetes tipo 2 (nÃ£o dependente de insulina).\r\n\r\nReduz o risco de cÃ¢ncer de cÃ³lon.\r\n\r\nAjudas as pessoas a conseguirem e manter um peso ideal.\r\n\r\nReduz os sentimentos de depressÃ£o e ansiedade.\r\n\r\nPromove o bem-estar psicolÃ³gico e reduz sentimentos de estresse.\r\n\r\nAjuda a construir e manter articulaÃ§Ãµes, mÃºsculos e ossos saudÃ¡veis.\r\n\r\nAjuda pessoas mais velhas a ficarem mais fortes e serem mais capazes de moverem-se sem cair o ficar excessivamente cansadas.\r\nA falta de atividade fÃ­sica pode prejudicar sua saÃºde?\r\n\r\nEvidÃªncias mostram que pessoas que nÃ£o praticam atividades fÃ­sicas definitivamente nÃ£o estÃ£o ajudando sua saÃºde e provavelmente a estÃ£o prejudicando. Quanto mais examinamos os riscos para a saÃºde associados Ã  falta de atividade fÃ­sica, mais convencidos ficamos que pessoas que nÃ£o praticam atividade fÃ­sica devem comeÃ§ar a se exercitar.', 0, 6, '4', 0),
(24, '18 maneiras de seguir uma alimentaÃ§Ã£o saudÃ¡vel', 'Ter uma alimentaÃ§Ã£o saudÃ¡vel Ã© essencial para alcanÃ§ar uma maior qualidade de vida. O abuso de alimentos ricos em gorduras saturadas, sÃ³dio e aÃ§Ãºcares Ã© um gatilho para doenÃ§as como infarto, derrames, hipertensÃ£o, obesidade, diabetes e atÃ© cÃ¢n', 'images/noticias/1.jpg', 'Ter uma alimentaÃ§Ã£o saudÃ¡vel Ã© essencial para alcanÃ§ar uma maior qualidade de vida. O abuso de alimentos ricos em gorduras saturadas, sÃ³dio e aÃ§Ãºcares Ã© um gatilho para doenÃ§as como infarto, derrames, hipertensÃ£o, obesidade, diabetes e atÃ© cÃ¢ncer. Em contrapartida, Ã© fÃ¡cil incluir no cardÃ¡pio alimentos herÃ³is da resistÃªncia e da longevidade. Por essas razÃµes, ter uma dieta saudÃ¡vel Ã© tÃ£o importante, nÃ£o Ã© Ã  toa que 31 de marÃ§o Ã© celebrado o Dia Mundial da SaÃºde e NutriÃ§Ã£o. O Minha Vida convocou um time de especialistas para entender os bons hÃ¡bitos que cada um deles indica para o seus pacientes, mas tambÃ©m segue como se fosse um mantra.\r\n \r\n1.NÃ£o fique sem comer\r\n"O mais importante Ã© nÃ£o passar longos perÃ­odos sem comer. Fazer pequenos lanches entre as grandes refeiÃ§Ãµes Ã© fundamental, pois ao restringir energia o metabolismo tende a ficar mais lento, como uma forma de poupar energia que lhe foi fornecida, o que acaba dificultando a perda de peso. AlÃ©m disso, provavelmente a pessoa irÃ¡ comer mais na prÃ³xima refeiÃ§Ã£o, buscando alimentos mais calÃ³ricos, como uma forma de compensaÃ§Ã£o, o que tambÃ©m resultarÃ¡ em ganho de peso." (Carla Fiorillo, nutricionista da Universidade Federal de SÃ£o Paulo)\r\n\r\nalimentaÃ§Ã£o saudÃ¡vel\r\nalimentaÃ§Ã£o saudÃ¡vel\r\n2.Sinta prazer comendo\r\n"A alimentaÃ§Ã£o tambÃ©m Ã© fonte de prazer. NÃ£o se torne escravo de dietas e calorias, pois existem cada vez mais estudos que evidenciam que pessoas que se preocupam demais com a forma fÃ­sica tendem a sofrer maiores oscilaÃ§Ãµes de peso, alÃ©m de serem insatisfeitas com o prÃ³prio corpo. Estar bem consigo mesmo e cuidar do corpo com atividade fÃ­sica e alimentaÃ§Ã£o saudÃ¡vel sÃ£o as melhores formas de obter uma boa qualidade de vida." (Carla Fiorillo, nutricionista da Universidade Federal de SÃ£o Paulo) \r\n\r\n3.Busque alimentos naturais\r\n"Siga uma alimentaÃ§Ã£o o mais natural possÃ­vel e tente fugir de refeiÃ§Ãµes com muitos produtos industrializados. Se comer um macarrÃ£o industrializado, faÃ§a vocÃª mesmo um molho caseiro. Se quiser tomar um suco de frutas, tente tomar o natural, pois os alimentos industrializados contÃªm muitas substÃ¢ncias como corantes e conservantes, que possuem altas quantidades de sÃ³dio e podem, em longo prazo, causar hipertensÃ£o e sobrecarregar os rins." (Daniela Cyrulin, nutricionista da USP e da Instituto SaÃºde Plena)\r\n \r\n4. FaÃ§a substituiÃ§Ãµes\r\n "Tente substituir alimentos mais pesados e gordurosos por versÃµes mais leves sempre que possÃ­vel: faÃ§a macarrÃ£o de palmito pupunha desfiado, arroz de couve-flor cozida, troque o presunto por peito de peru, compre o atum em Ã¡gua no lugar do atum em Ã³leo, troque os queijos gordurosos por versÃµes mais leves como o queijo cottage e a ricota, substitua o queijo parmesÃ£o ralado por ricota defumada e ralada." (Daniela Cyrulin, nutricionista da USP e da Instituto SaÃºde Plena)\r\n', 0, 3, '2', 0),
(25, 'As cinco frutas mais saudÃ¡veis para consumir	    ', 'Manter uma boa alimentaÃ§Ã£o Ã© muito importante para desfrutar de uma excelente saÃºde. Obviamente, as Frutas sÃ£o alguns dos alimentos que mais trazem benefÃ­cios para o corpo, principalmente vitaminas. Ã‰ por isso que o seu consumo Ã© altamente recomend', 'images/noticias/1.jpg', '1. Mirtilos\r\nOs mirtilos sÃ£o frutas colhidas principalmente no frio, e sÃ£o prÃ³prios do hemisfÃ©rio norte. Apresentam uma baixa quantidade de calorias e vÃ¡rias propriedades benÃ©ficas ao nosso corpo. Entre elas podemos citar seu alto teor de vitamina C, potÃ¡ssio, Ferro e cÃ¡lcio. No entanto, caracterizam-se por uma elevada concentraÃ§Ã£o de pigmentos naturais, tais como as antocianinas e carotenoides.\r\n2. Laranjas\r\nA laranja Ã© uma das frutas mais saudÃ¡veis que vocÃª pode comer. Como se sabe, sÃ£o uma excelente fonte de vitamina C, que ajuda a prevenir e atÃ© tratar doenÃ§as respiratÃ³rias, como gripe e resfriado. A fruta tambÃ©m contÃ©m quantidades significativas de potÃ¡ssio, o que Ã© bom para os nossos mÃºsculos. AlÃ©m do mais contÃ©m hesperidina, um composto que pode reduzir significativamente os nÃ­veis de colesterol no sangue.\r\n\r\n3. MaÃ§Ã£s\r\nUma fruta muito popular e saudÃ¡vel Ã© a maÃ§Ã£. Ã‰ um antioxidante natural bastante eficaz, graÃ§as, principalmente, aos flavonoides que contÃ©m, com os quais podemos evitar doenÃ§as como o cÃ¢ncer e retardar o processo de Envelhecimento, alÃ©m de fortalecer o nosso sistema imunolÃ³gico em geral. Enquanto isso, dentistas recomendam o seu consumo, porque reduz os nÃ­veis de bactÃ©rias que se alojam na boca.\r\n4. Kiwis\r\nEmbora seja uma fruta pouco popular, o kiwi contÃ©m muitas propriedades que, provavelmente, vocÃª desconhecia. Ã‰ uma importante fonte de fibra, como mencionado em outros casos, ajuda a normalizar os nÃ­veis de colesterol e facilita o trÃ¢nsito intestinal. Incrivelmente, o kiwi contÃ©m o dobro de vitamina C que uma laranja possui.\r\n5. Morangos\r\nAlÃ©m de deliciosos, os morangos sÃ£o frutas bastante saudÃ¡veis. DispÃµem de altos nÃ­veis de vitamina C, lecitina e pectina, que diminuem os nÃ­veis de colesterol e previnem os sofrimentos da arteriosclerose. Os morangos tambÃ©m ajudam a controlar a diabetes tipo 2 e os problemas cardÃ­acos e inflamatÃ³rios. TambÃ©m contÃªm Ã´mega 9 e minerais como magnÃ©sio e cobre.        ', 0, 4, '7', 0),
(26, 'Teste de titulo', 'Ã‰ nois amigÃ£o', 'img/logo.png', '<p>teste&nbsp;<strong>teste</strong></p>\r\n', 1, 0, '2016-10-16', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `idSlide` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `descricao` varchar(20) NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `slide`
--

INSERT INTO `slide` (`idSlide`, `imagem`, `descricao`, `deletar`) VALUES
(5, 'img/Penguins.jpg', 'Ola', 0),
(6, 'img/Penguins.jpg', 'HEY', 0),
(8, 'images/02.jpg', 'Hello', 1),
(9, 'img/logo.png', 'descriÃ§Ã£o ', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `nome`, `deletar`) VALUES
(4, 'TIPI I', 1),
(7, 'TIPI Delta', 0),
(8, 'TIPI J', 0),
(9, 'TCA', 0),
(10, 'RCA', 0),
(11, 'DELTÃƒO', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `senha` longtext NOT NULL,
  `deletar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `senha`, `deletar`) VALUES
(1, 'matheus', '321', 0),
(2, 'cabral', '$P$B/A31d541d33a012ab3f806b3423d10f402.682.137.981', 1),
(3, 'henrique', '$P$B/A40f2947a0af0f235c72def0bf5fb11d7.132.548.516', 0),
(4, 'vilar', '$P$B/Aada06bc35384c363f7bc0c61be91e16f.763.547.717', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Indexes for table `anamnese`
--
ALTER TABLE `anamnese`
  ADD PRIMARY KEY (`idAnamnese`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`);

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indexes for table `corpo`
--
ALTER TABLE `corpo`
  ADD PRIMARY KEY (`idCorpo`);

--
-- Indexes for table `duvidas`
--
ALTER TABLE `duvidas`
  ADD PRIMARY KEY (`idDuvida`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Indexes for table `imc`
--
ALTER TABLE `imc`
  ADD PRIMARY KEY (`idImc`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`idNoticia`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idSlide`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`idTurma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anamnese`
--
ALTER TABLE `anamnese`
  MODIFY `idAnamnese` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idCargo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `corpo`
--
ALTER TABLE `corpo`
  MODIFY `idCorpo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `duvidas`
--
ALTER TABLE `duvidas`
  MODIFY `idDuvida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `imc`
--
ALTER TABLE `imc`
  MODIFY `idImc` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `idNoticia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `idSlide` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `idTurma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
