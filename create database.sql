-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `rh`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contato1` varchar(150) NOT NULL,
  `fonecontato1` varchar(20) NOT NULL,
  `emailcontato1` varchar(150) NOT NULL,
  `contato2` varchar(150) NOT NULL,
  `fonecontato2` varchar(20) NOT NULL,
  `emailcontato2` varchar(150) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `ctps` varchar(20) NOT NULL,
  `pis` varchar(20) NOT NULL,
  `cnh` varchar(20) NOT NULL,
  `categoriacnh` varchar(3) NOT NULL,
  `vctocnh` date NOT NULL,
  `estadocivil` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `datanascimento` date NOT NULL,
  `naturalidade_id` int(11) NOT NULL,
  `grauinstrucao` text NOT NULL,
  `obs` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Extraindo dados da tabela `candidatos`
--

INSERT INTO `candidatos` (`id`, `nome`, `endereco`, `numero`, `bairro`, `cidade_id`, `cep`, `fone`, `email`, `contato1`, `fonecontato1`, `emailcontato1`, `contato2`, `fonecontato2`, `emailcontato2`, `cpf`, `rg`, `ctps`, `pis`, `cnh`, `categoriacnh`, `vctocnh`, `estadocivil`, `sexo`, `datanascimento`, `naturalidade_id`, `grauinstrucao`, `obs`) VALUES
(2, 'valter leite de almeida', 'galezzo paganelli', 240, 'esplanada', 2, '', '91971061', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-12-31', 'casado', 'masculino', '1981-12-31', 1, 'Ensino Fundamental Completo', '20/05 iniciara na PCP'),
(3, 'Luciano Isaias Ferreira', 'BR 116, ', 3895, 'Planalto', 1, '', '54-96375896', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-15', '', '', '1993-01-06', 1, 'Ensino medio imcompleto', '15/05/2013'),
(4, 'TAILINE SALLES DOS PASSOS', 'CENTAURO', 363, 'CRUZEIRO', 2, '', '32122771', 'TAILINEPASSOS@HOTMAIL.COM', '91347938', '', '', '', '', '', '', '', '', '', '', '', '2013-05-15', 'SOLTEIRA', 'FEMININO', '1995-05-15', 2, 'Superior andamento Psicologia', 'Casa prÃ³pria, mora com pais, mÃ£e do lar, pai trabalha em fÃ¡brica de embalagens. Disponibilidade para realizar estÃ¡gios. Disciplinas do curso notur'),
(5, 'JoÃ£o Antonio Lopes', 'Reinaldo Rota Sobrinho', 1011, 'SÃ£o Ciro', 1, '', '54-81342958', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-15', 'casado', 'masculino', '1963-11-19', 1, 'Ensino medio completo', '15/05/2013'),
(6, 'Graciela C. Ramos', 'Helmulti Bornhei', 0, 'Montes Claros', 1, '', '84182803', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-02-01', 'solteira', 'feminina', '1981-06-06', 1, 'Ensino medio completo', '15/05/2013'),
(7, 'Janete da Silva', 'Helmut Bonhei', 471, 'Esplanada', 1, '', '54- 32152259', '', '81084782', '', '', '', '', '', '', '', '', '', '', '', '2013-05-15', 'solteira', 'feminino', '1984-08-07', 1, 'Ensino medio completo', '15/05/2013'),
(8, 'Valderes Bonatto Castilhos', 'Santo Forreli', 198, 'SÃ£o leopoldo', 1, '', '99263086', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', '', '1973-06-12', 1, 'Supletivo multirÃ£o', '18/02/2013'),
(9, 'JÃ©ssica Selau da Silva', 'Rua da EsperanÃ§a', 0, 'Planalto', 1, '', '(54) 99699211', '', '(54) 99895909', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', '', '2013-05-16', 1, 'Ensino medio completo', '16/05/2013'),
(10, 'Sabrina Rizzotto da silva', 'Rua ivone Jobim Vargas', 305, 'FÃ¡tima', 1, '', '32041237', '', '(54)91127921', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', '', '1990-07-06', 1, 'Curso tÃ©cnico em Meio Ambient', '16/0'),
(11, 'Marcelo Saccol Meira', 'nÃ£o informado', 0, '', 1, '', '96080742', 'Meira.arq.c8@hotmail.com', '30253059', '', '', '', '', '', '', '', '', '', 'D', '', '2013-05-16', '', '', '1976-03-08', 1, 'Cursando Arq. e urbanismo- UCS', '16/05/2013'),
(12, 'Michel Tavares Rosa', 'Vivaldo VArgas de Almeida', 143, 'Floresta', 1, '', '99088727', '', '84034001 c/ Mariane', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', 'feminino', '2013-05-16', 1, 'Licenciatura Plena QuÃ­mica', '16/05/2013'),
(13, 'Leidimar Perreira da Silva', 'Pedro Machado da Silveira', 1471, 'Panazzolo', 1, '', '81177661', 'leidydaygbi@hotmail.com', '96878044', '', '', '', '', '', '', '', '', '', 'A/B', '', '2013-05-16', 'solteira', 'feminina', '1982-04-17', 1, 'formada em Biomedicina', '16/05/2013'),
(14, 'Tais Sakszewski', 'StÃ©fano Vergani', 90, 'Cruzeiro', 1, '', '96905368', 'sakszwskitais@yahoo.com.br', '32124557', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', 'feminino', '1992-08-14', 1, 'Cursando Biomedicina 1Â°Semest', '16/05/2013'),
(15, 'Grasiele Rodrigues da Silva', 'travessÃ£o Solferino', 560, 'Cruzeiro', 1, '', '99255766', '', '32224531', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', 'solteira', 'feminino', '2013-05-16', 1, 'Ensino medio completo', '16/052013'),
(16, 'Viviane B. de Oliveira Ribeiro', 'Remo Joao Dall Zotto', 435, 'Planalto', 1, '', '96622558', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', 'casada', 'femino', '1987-03-28', 1, 'Ensino medio completo', '16/05/2013'),
(17, 'Janaina Corso', 'Avenida 7 de Setembro', 721, 'Centro', 1, '', '91880670', 'janacorso@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', '', 'feminino', '2013-05-16', 1, 'Formada em Enge. de Alimentos', '16/05/2013'),
(18, 'Santa Ines Volman', 'Rua Pedro Jose Teodoro', 95, 'Ana Rech', 1, '', '96521558', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', 'casada', 'feminino', '2013-05-16', 1, 'Ensino medio completo', '16/05/2013'),
(19, 'Leide Daiane Moreira Branco', 'Evilasio Batista Godoy', 158, 'Serrano', 1, '', '(54) 84245522', '', '(54)84266584', '', '', '', '', '', '', '', '', '', '', '', '2013-05-16', 'solteira', '', '2013-05-16', 1, 'Tecnico em Quimica', '16/05/2013'),
(20, 'Jader AndrÃ© Dal Sochio', 'Rua Serafin Sparafico', 1767, 'Pio X', 3, '', '92258135', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '1967-10-07', 1, 'Graduado Engenharia Materiais', ''),
(21, 'Claudia Martinighi', 'Av. Tiradentes', 371, 'Francisco Doncato- Sao Marcos', 1, '', '99848641', '', '32917445', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(22, 'Neri Ernesto Soares da Silva', 'Av. Principal', 686, 'Campos da Serra', 1, '', '91871150', '', '32291811', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteiro', '', '1973-01-10', 1, 'Ensino medio completo', ''),
(23, 'Paulo Roberto Perreira da Silva', 'Rua Henrique Fracasso', 865, 'Fatima', 1, '', '96412683', '', '30255990', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteiro', 'masculino', '2013-05-17', 1, 'Ensino Fundamental Completo', ''),
(24, 'Giovana Carvalho dos Passos', 'Rua PAdre Raul Acorsi', 267, 'Cruzeiro', 1, '', '91706709', '', '96909077', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'Uniao Estavel', '', '1996-01-23', 1, 'Ensino Fundamental Completo', ''),
(25, 'Jader Ricardo Machado', 'Celeste Camilo Formollo', 176, 'Bela Vista', 1, '', '96370815', '', '', '', '', '', '', '', '', '', '', '', 'B', '', '2013-05-17', 'casado', '', '1988-04-20', 1, 'Ensino medio completo', ''),
(26, 'Cristiano Rosario de Oliveira', 'Av.Barrao de Santo Anjo', 301, 'Jardelino Ramos', 1, '', '91468523', '', '81438425', '', '', '', '', '', '', '', '', '', '', '', '1993-11-01', 'solteiro', '', '1986-11-10', 1, 'Ensino Fundamental Completo', ''),
(27, 'Elizabete Zenatti', 'Rua Padre Rossi', 456, 'Ana Rech', 1, '', '91909757', '', '96793626', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'casada', '', '2013-05-17', 1, 'Cursando Tecnico-Contabilide', ''),
(28, 'Claudiana A. Maciel de Souza', 'Av Senador Alberto Pasqualine', 469, 'Sao Ciro', 1, '', '84384046', '', '91195550', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '1984-01-08', 1, 'Ensino medio completo', ''),
(29, 'Ana Julia Rosa da Silva', 'Rua Adelino Andreatta Samorro', 224, 'Vale verde', 1, '', '91762288', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(30, 'Bianca Fidelis Cidade', 'Rua Frederico Celestino Fedrizzi', 1019, 'Bela Vista', 1, '', '92108524', '', '32224390', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '2013-05-17', 1, '', ''),
(31, 'Morgana da Silva dos Passos', 'Rua Estrela', 985, 'cruzeiro', 1, '', '92350203', '', '32191333', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(32, 'Melissa Chenaider', 'Rua Assis Brasil', 1015, 'Jardelino Ramos', 1, '', '81376449', '', '91140749', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '1980-02-27', 1, 'Ensino Superior Incompleto', ''),
(33, 'Melissa Chenaider', 'Rua Assis Brasil', 1015, 'Jardelino Ramos', 1, '', '81376449', '', '91140749', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '1980-02-27', 1, 'Ensino Superior Incompleto', ''),
(34, 'Jayme Bonato', 'Rua Sirlei da Silva', 198, 'Jardim das Hortencias', 1, '', '91524076', '', '32298456', '', '', '', '', '', '', '', '', '', '', '', '2013-04-17', '', '', '1992-04-17', 1, 'Ensino medio completo', ''),
(35, 'Suelen Dembisnski', 'Rua bento Osvaldo Trisch', 470, 'Pedancino', 1, '', '96319947', '', '91714101- recado', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'casada', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(36, 'Carina Francisquetti', 'Av. Sandro Tonietto', 226, 'Desvio Rizzo', 1, '', '91800399', '', '32141620', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(37, 'Camila Klostermeyer da Silva', 'Rua do Comercio', 507, 'Portao', 1, '', '(51) 95171799', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(38, 'Elisandra Bottezini', 'Rua primeiro de Maio', 181, 'Portao', 1, '', '(51)98395872', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'solteira', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(39, 'Elizabete Zenatti', 'Rua Padre Geronimo Rossi', 1456, 'Ana Rech', 1, '', '91909757', '', '96793626', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', 'casada', 'feminina', '2013-05-17', 1, 'Ensino medio completo', ''),
(40, 'Jaqueline Maria Munari', 'Rua Sepe Tiaraju', 161, 'Bom Pastor', 1, '', '91760303', '', '32214152', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '2013-05-17', 1, 'Ensino medio completo', ''),
(41, 'Keli Ferreira Martini', 'Rua Sarmento Leite', 2204, 'Medianeira', 1, '', '81073680', '', '30393680', '', '', '', '', '', '', '', '', '', '', '', '2013-05-17', '', '', '2013-05-17', 1, 'Curso Superior Incompleto', ''),
(42, 'Simone Rodrigues Borges', 'Rua Alfredo Milane', 169, 'Esplanada', 1, '', '92120548', '', '32156655', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', '', '', '1969-06-02', 1, 'Ensino medio completo', ''),
(43, 'Greice Marques de Andrade', 'Rua Manoel Pedrotti ', 151, 'Diamamntino', 1, '', '99290247', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '2013-05-20', 1, 'Ensino medio completo', ''),
(44, 'Alice Cristiane Tarigo Braz Flores', 'Rua Alvaro Luiz Franzoi', 520, 'Planalto- Rio Branco', 1, '', '92043063', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '2013-05-20', 1, 'Graduada em AdministrraÃ§Ã£o', ''),
(45, 'Giselle Silva Bogado', 'Rua Cabo Machado Severo ', 930, 'Santa Corona', 1, '', '99331934', '', '32245187', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '2013-05-20', 1, 'Graduada em Direito/2009', '20/05/2013'),
(46, 'Regina de Fatima da Cruz', 'Rua Alexandre Pereti', 178, 'Charqueadas', 1, '', '92259259', '', '81205535', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'Uniao Estavel', '', '2013-05-20', 1, 'Ensino Fundamental Completo', '20/05/13'),
(47, 'Aline Pareira Nunes Brumelhaus', 'Rua Vacaria', 134, 'Industrial', 3, '', '81620665', '', '', '', '', '', '', '', '', '', '', '', '', 'B', '2013-05-20', 'casada', '', '2013-05-20', 1, 'Curso Superior Incompleto', '20/05/13'),
(48, 'Simone Patricia Lorensi Abatti', 'BR 116, Km 152', 0, 'Panazzolo', 1, '', '81117013', '', '32224761', '', '', '', '', '', '', '', '', '', 'B', '', '2013-05-20', 'casada', '', '1976-05-04', 1, 'Graduada em ComunicaÃ§Ã£o Soci', '20/05/2013'),
(49, 'Gabriela Carlos', 'Rua bento GonÃ§alves', 1694, 'Centro', 1, '', '(51)93362250', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '1985-10-17', 1, 'Gest. Rec. Humanos-andamento', '20/05/2013'),
(50, 'Artur Lamera Carvalheiro', 'Rua Bortolo Zanni, ', 1364, 'Bela Vista', 1, '', '91485966', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casado', '', '2013-05-20', 1, 'Ensino Fundamental Completo', '20/05/2013'),
(51, 'Vanessa Muratore', 'Rua Sarmento Leite', 2221, 'Rio Branco', 1, '', '99295070', '', '30284224', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '2013-05-20', 1, 'Curso Superior Incompleto', '20/05/13'),
(52, 'Juliane Amandio de Souza', 'Rua Natal Idalino Fadanelli', 331, 'planalto II', 1, '', '84295759', '', '32381970', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', '', '', '2013-05-20', 1, 'Cursando Recursos Humanos', '20/05/13'),
(53, 'Juliane Amandio de Souza', 'Rua Natal Idalino Fadanelli', 331, 'planalto II', 1, '', '84295759', '', '32381970', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', '', '', '2013-05-20', 1, 'Cursando Recursos Humanos', '20/05/13'),
(54, 'Viviane Andressa Gasola', 'Rua Rodolpho Schio', 500, 'Nossa Senhora da Saude ( Vinhedos)', 1, '', '81452016', '', '32387857', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '1988-08-02', 1, 'Curso AdministraÃ§ao-andamento', '20/05/13'),
(55, 'Isabel Cristina Bonesi', 'Av. Rio Branco', 1890, 'kayser', 1, '', '91138976', '', '91923436', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '2013-05-20', 1, 'Ensino medio completo', '20/05/13'),
(56, 'Marcia R. Jacques Neuhaus', 'Rua bento de Lavra Pinto', 2382, 'Madureira', 1, '', '(55)99121195', '', '30410074', '', '', '', '', '', '', '', '', '', 'B', '', '2013-05-20', 'casada', '', '2013-05-20', 1, 'Bacharel em AdministraÃ§ao 201', '20/05/13'),
(57, 'Anelise Penicioli da Silva', 'Rua Sao Sebastiao', 1114, 'Centenario', 1, '', '91168105', '', '', '30298628', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '1986-04-16', 1, 'Graduada em AdministrraÃ§Ã£o', '20/05/13'),
(58, 'Daniela Pelissari', 'Rua Bortolo Zanrosso', 237, 'Parque Oassis', 1, '', '99811051', '', '32174782', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '2013-05-20', 1, 'Cursando AdministraÃ§ao- UCS', '20/05/12'),
(59, 'Eronilda Cassao Viero', 'Rua dos Mimo de Venus', 121, 'Cinquentenario', 1, '', '99826257', '', '81346006', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '1972-08-02', 1, 'Gestao em Markentg', '20/05/13'),
(60, 'Renata Herrmann Marini', 'Av. Verginia Botini Reuse', 254, 'Cidade Nova', 1, '', '91960686', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '2013-05-20', 1, 'Grad.Enge.Industrial Madereira', '20/05/13'),
(61, 'Karin Gabriela Souza Neves', 'Alexandre de Antoni', 2484, 'Universitario', 1, '', '91156798', '', '32244297', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '1982-06-28', 1, 'Curs.ComunicaÃ§ao Social', '20/05/13'),
(62, 'Lidieli Marques da Silva', 'Rua Anta Gorda', 3, 'Monte Carmelo', 1, '', '92351850', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteira', '', '1995-02-18', 1, 'Ensino medio completo', '20/05/13'),
(63, 'Gilberto Avila Filho', 'Rua Joao Zambon', 660, 'Kayser', 1, '', '96461059', '', '(51)96122832', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', '', '', '2013-05-20', 1, 'Curso Aux.Contabil-Nivel Medio', '20/05/13'),
(64, 'Luis Fernando GonÃ§alves Cardoso', 'Av. Salgado Filho', 0, 'SÃ£o leopoldo', 1, '', '84243045', '', '32131309', '', '', '', '', '', '', '', '', '', '', '', '2032-05-20', '', '', '1993-10-21', 1, 'Ensino Fundamental Completo', '20/05/13'),
(65, 'Rudimar Rosa Tavares', 'Rua Capela Bevilaqua', 0, 'Ana Rech', 1, '', '91200355', '', '', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteiro', '', '1991-09-19', 1, 'Ensino medio completo', '20/05/13'),
(66, 'Elvis Gabriel de Lima', 'Rua Assis Brasil', 1031, 'Jardelino Ramos', 1, '', '91567739', '', '91095809', '', '', '', '', '', '', '', '', '', 'B', '', '2013-05-20', 'solteiro', '', '1980-02-01', 1, 'Ensino Fundamental Completo', '20/05/13'),
(67, 'Patricia Caregnato dos Santos', 'Rua Guido Nitschke', 94, 'Colina do Sol', 1, '', '91321241', '', '30193290', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'casada', '', '1984-09-15', 1, 'Cursado Tecnico de Enfermagem', '20/05/13'),
(68, 'Edmur Juliano da Luz', 'Rua General Jacinto Maria de Gody', 1713, 'Colina Sorriso', 1, '', '96526084', '', '99991815 c/ Eliete', '', '', '', '', '', '', '', '', '', '', '', '2013-05-20', 'solteiro', '', '2013-05-20', 1, 'Graduado em Direito', '20/05/13'),
(90, 'Wilian', '', 2134, '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '2013-06-17', 1, '', ''),
(91, 'Wilian1', '', 1, '', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '2013-06-18', 1, '', ''),
(94, 'Xano', '', 6, '', 3, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '2013-06-20', 1, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato_empresas`
--

CREATE TABLE IF NOT EXISTS `candidato_empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidato_id` int(11) NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `funcao_id` int(11) NOT NULL,
  `datainicio` date NOT NULL,
  `datafim` date NOT NULL,
  `remuneracao` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `candidato_empresas`
--

INSERT INTO `candidato_empresas` (`id`, `candidato_id`, `empresa_id`, `funcao_id`, `datainicio`, `datafim`, `remuneracao`) VALUES
(1, 2, 1, 95, '2013-05-20', '2013-07-15', 1015),
(2, 1, 1, 1, '2013-05-25', '2013-05-25', 2500),
(3, 11, 2, 1, '2013-05-25', '2013-05-25', 2000),
(4, 20, 13, 95, '2013-05-25', '2013-05-25', 1200),
(5, 91, 16, 170, '2012-06-19', '2013-06-19', 1100);

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato_funcaos`
--

CREATE TABLE IF NOT EXISTS `candidato_funcaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidato_id` int(11) NOT NULL,
  `funcao_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Extraindo dados da tabela `candidato_funcaos`
--

INSERT INTO `candidato_funcaos` (`id`, `candidato_id`, `funcao_id`) VALUES
(1, 1, 4),
(2, 2, 95),
(3, 4, 35),
(4, 5, 141),
(5, 3, 131),
(6, 7, 129),
(7, 8, 126),
(8, 9, 3),
(9, 10, 3),
(10, 12, 165),
(11, 13, 165),
(12, 14, 2),
(13, 15, 167),
(14, 17, 162),
(15, 18, 132),
(16, 19, 168),
(17, 20, 166),
(18, 21, 129),
(19, 22, 126),
(20, 23, 109),
(21, 24, 66),
(22, 25, 137),
(23, 26, 131),
(24, 27, 2),
(25, 28, 130),
(26, 29, 3),
(27, 30, 3),
(28, 31, 3),
(29, 33, 3),
(30, 34, 3),
(31, 35, 3),
(32, 36, 3),
(33, 37, 3),
(34, 38, 3),
(35, 40, 3),
(36, 41, 3),
(37, 42, 130),
(38, 43, 5),
(39, 44, 2),
(40, 45, 2),
(41, 46, 129),
(42, 47, 2),
(43, 48, 2),
(44, 49, 2),
(45, 50, 131),
(46, 51, 2),
(47, 53, 2),
(48, 54, 2),
(49, 55, 130),
(50, 56, 2),
(51, 57, 18),
(52, 58, 2),
(53, 59, 5),
(54, 60, 2),
(55, 61, 2),
(56, 62, 9),
(57, 63, 143),
(58, 64, 126),
(59, 65, 143),
(60, 67, 7),
(61, 68, 158),
(62, 69, 55),
(63, 70, 1),
(64, 70, 4),
(65, 70, 22),
(66, 70, 13),
(67, 1, 170),
(68, 84, 0),
(69, 84, 0),
(70, 88, 1),
(71, 88, 3),
(72, 90, 1),
(73, 90, 4),
(74, 90, 5),
(75, 91, 1),
(76, 91, 8),
(77, 91, 54),
(80, 91, 170),
(81, 20, 40),
(82, 93, 170),
(83, 94, 170),
(84, 94, 54),
(85, 44, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidades`
--

CREATE TABLE IF NOT EXISTS `cidades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `uf`) VALUES
(1, 'Caxias do Sul', 'RS'),
(3, 'Farroupilha', 'RS');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razaosocial` varchar(100) NOT NULL,
  `fantasia` varchar(100) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade_id` int(11) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `fone` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contato1` varchar(100) NOT NULL,
  `fonecontato1` varchar(20) NOT NULL,
  `emailcontato1` varchar(150) CHARACTER SET cp1250 COLLATE cp1250_bin NOT NULL,
  `contato2` varchar(100) NOT NULL,
  `fonecontato2` varchar(20) NOT NULL,
  `emailcontato2` varchar(150) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `ie` varchar(20) NOT NULL,
  `obs` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `razaosocial`, `fantasia`, `endereco`, `numero`, `bairro`, `cidade_id`, `cep`, `fone`, `email`, `contato1`, `fonecontato1`, `emailcontato1`, `contato2`, `fonecontato2`, `emailcontato2`, `cnpj`, `ie`, `obs`) VALUES
(1, 'PCP SERVIÃ‡OS DE CORTE EM AÃ‡O LTDA', 'PCP SERVIÃ‡OS DE CORTE EM AÃ‡O LTDA', 'Evaristo de Antoni', 780, 'SÃ£o JosÃ©', 1, '95041-000', '3028.4474', '', 'Sabrina ', '3028.4474', 'sabrina@pcpsteel.net', '', '', '', '09.129.133/0001-37', '029/0477174', 'Taxa 45%'),
(2, 'FABRICA DE MAQUINAS ALMEIDA LTDA', '-', 'BR 116 KM 152,9', 22175, 'Panazzolo', 1, '95070-070', '', '', 'Jane', '32132755', 'jane@maquinasalmeida.com.br', '', '', '', '87.504.346/0001-05', '029/0054435', 'taxa 45%'),
(3, 'FUTURE INDUSTRIA METALURGICA LTDA', '-', 'Rua Alfredo cABERLON', 313, 'Distrito Industrial', 1, '95112-300', '', '', 'Viviane', '(54)35358700', 'rh@futureutilidades.com.br', '', '', '', '90.406.117/0001-62', '0290128951', 'taxa 45%'),
(4, 'DUROLINE S/A', '-', 'Rua Gerson Andreis', 130, 'Distrito Industrial', 1, '95112-130', '', '', 'Taciana', '21015080', 'Taciana.Bossle@duroline.com.br', '', '', '', '00.795.288/0001-38', '', 'taxa 45%'),
(5, 'MOINHOS GALOPOLIS S/A', '-', 'Av. Presidente Vargas', 878, 'Galopolis', 1, '95090-050', '', '', 'Daiane', '32849800', '', '', '', '', '88.614.557/0001-63', '', 'taxa 45%'),
(6, 'UNYLASER INDUSTRIA METALURGICA LTDA', '-', 'Rua Dalton Lahn dos Reis', 269, 'Distrito Industrial', 1, '95112-090', '', '', 'Marcelo', '32904800', 'marcelo.rigon@unylaser.com.br', '', '', '', '05.897.063/0001-06', '', 'taxa 45%'),
(7, 'TECNITUBO IND. E COM. DE TUBOS LTDA', '-', 'Rua Evaristo de Antoni', 3022, '-', 1, '95041-000', '', '', 'Wanessa', '30271818', 'wanessa.rh@tecnitubo.com.br', '', '', '', '88.656.566/0001-17', '', 'taxa 45'),
(8, 'DOGMA COMUNICAÃ‡AO VISUAL', '-', 'Rua Dom JosÃ© Barea', 1265, 'Loudes', 1, '95084-100', '', '', 'Fernanda', '32194238', 'fernanda@dogma.ind.br', '', '', '', '04.561.648/0001-98', '029/0377900', 'taxa 45%'),
(9, 'INCOMAQ INDUSTRIA DE ARAMADOS LTDA', '-', 'Rua do Rosario', 220, 'Medianeira', 1, '95010-250', '', '', 'Jenife', '32895900', 'rh@incomaq.com.br', '', '', '', '01.748.296/0001-96', '029/0305608', 'taxa fixa R$ 300,00 prazo de 20 dias para pagamento'),
(10, 'MULTIFLON REVESTIMENTO ANTIADERENTES LTDA', 'Multiflon', 'Rua Demetrio Angelo Tiburi', 1716, 'Bela Vista', 1, '95072-030', '', '', 'Carla', '30251133', 'rh@multiflon.com.br', '', '', '', '91.903.443/0001-48', '0290160219', 'taxa 45%'),
(11, 'PULVERIT DO BRASIL INDUSTRIA TINTAS LTDA', '-', 'Rua Horizau Antonio Luchesi', 384, 'Loteamento Industrial', 1, '95112-320', '', '', 'Ketlen', '40092000', 'k.borges@pulverit.com.br', '', '', '', '02.499.837/0001-52', '029/0323541', 'taxa 45%'),
(12, 'BOHM DISTRIBUIDORA DE MATERIAIS PARA CONSTRUÃ‡ÃƒO LTDA', '-', 'Rua Tomazo Radaelli', 463, 'Do Parque', 3, '95180-000', '', '', '', '32681103', '', '', '', '', '05.297.557/0001-50', '', 'taxa 45%'),
(13, 'SULPACK ICE CLEAN DO BRASIL LTDA', '-', 'Rua Ver Otto Scheifler', 899, 'Desvio Rizzo', 1, '95110-770', '', '', 'Flavia', '32239351', 'rh@sulpack.com.br', '', '', '', '00.319.979/0001-65', '', 'taxa 45%'),
(14, 'TRAVI PLASTICOS INDUSTRIAIS LTDA', '-', 'Rua  Trancredo Feijo', 140, 'Rio Branco', 1, '95097-550', '', '', 'Andreia', '21019513', 'aribeiro@travi.com.br', '', '', '', '10.528.220/0001-46', '', 'taxa 45% e acrescentar o nomes dos contratados'),
(15, 'MIRANTE MOVEIS P/ ESCRITORIO LTDA', '-', 'Luiz Rossato Primo', 875, 'Salgado Filho', 1, '95058-650', '', '', 'Janice', '32134202', '', '', '', '', '06.627.625/0001-39', '', 'taxa fixa R$ 400,00 com prazo de pagamento de 20 dias'),
(16, 'TRANSPORTES PELLENZ LTDA', '-', 'Rua Mansuetto Bossardi', 380, 'De Lazzer', 1, '95055-123', '', '', 'Patricia', '32293600', '', '', '', '', '90.300.583/0001-69', '', 'taxa 45%');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcaos`
--

CREATE TABLE IF NOT EXISTS `funcaos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=171 ;

--
-- Extraindo dados da tabela `funcaos`
--

INSERT INTO `funcaos` (`id`, `nome`, `codigo`) VALUES
(1, '13 - ADM GERENTE', NULL),
(2, '11 - ADM AUXILIAR - SUPERIOR COM EXPERIENCIA', NULL),
(3, 'ADM AUXILIAR - 2Âº GRAU COM EXPERIENCIA', 10),
(4, '12 - ADM ANALISTA', NULL),
(5, '14 - ADM RECEPCIONISTA', NULL),
(6, '15 - ADM COORDENADOR SUPERVISOR', NULL),
(7, '16 - ADM SECRETARIA', NULL),
(8, '17 - ADM SECRETARIA EXECUTIVA', NULL),
(9, '18 - ADM PRIMEIRO EMPREGO', NULL),
(10, '20 - CONTÃBIL AUXILIAR', NULL),
(13, '21 - CONTÃBIL ANALISTA', NULL),
(14, '22 - CONTÃBIL COORDENADOR.SUPERVISOR.CONTADOR', NULL),
(15, '23 - CONTÃBIL GERENTE', NULL),
(16, '24 - CONTROLLER', NULL),
(17, '25 - CUSTOS ANALISTA', NULL),
(18, '30 - FINANCEIRO ANALISTA', NULL),
(19, '31 - FINANCEIRO ANALISTA DE CREDITO E COBRANÃ‡A', NULL),
(20, '32 - FINANCEIRO CAIXA', NULL),
(21, '34 - FINANCEIRO COORDENADOR SUPERVISOR', NULL),
(22, '34 - FINANCEIRO GERENTE', NULL),
(23, '40 - ESCRITA FISCAL AUXILIAR', NULL),
(24, '40 - ESCRITA FISCAL ANALISTA', NULL),
(25, '42 - ESCRITA FISCAL COORDENADOR SUPERVISOR', NULL),
(26, '43 - ESCRITA FISCAL FATURAMENTO', NULL),
(27, '45 - COMPRAS AUXILIAR', NULL),
(28, '46 - COMPRAS ANALISTA', NULL),
(29, '47 - COMPRAS COMPRADOR', NULL),
(30, '48 - COMPRAS GERENTE', NULL),
(31, '50 - ESTAGIÃRIO ENGENHARIA MECANICA', NULL),
(32, '51 - ESTAGIARIO MARKETING', NULL),
(33, 'ESTAGÃRIO ADMINISTRAÃ‡ÃƒO', NULL),
(34, '53 - ESTAGIÃRIO RH', NULL),
(35, '54 - ESTAGIARIO PISCOLOGIA', NULL),
(36, '60 - ADMINISTRATIVO PESSOAL ANALISTA', NULL),
(37, '61 - RH ANALISTA', NULL),
(38, '62 - ANALISTA DE SALARIOS', NULL),
(39, '63 - ANALISTA DE TEINAMENTO', NULL),
(40, '64 - ASSISTENTE SOCIAL', NULL),
(41, '65 - RH AUXILIAR', NULL),
(42, '66 - RH COORDENADOR SUPERVISOR', NULL),
(43, '67 - RH GERENTE', NULL),
(44, '68 - MEDICO DO TRABALHO', NULL),
(45, '69 - PSICOLOGA', NULL),
(46, '70 - TECNICO DE SEGURANÃ‡A', NULL),
(47, '71 - RECRUTADOR SELECIONADOR', NULL),
(48, '72 - O&M ANALISTA', NULL),
(49, '73 - TECNICO ENFERMAGEM DO TRABALHO', NULL),
(50, '79 - INFORMÃTICA SUPERVISOR- GERENTE', NULL),
(51, '80 - ANALISTA DE SISTEMA', NULL),
(52, '81 - TECNICO DE INFORMATICA', NULL),
(53, '82 - ANALISTA DE SUPORTE', NULL),
(54, '83 - WEB DESIGNER', NULL),
(55, '84 - INFORMATICA- PROGRAMADOR DE COMPUTADOR', NULL),
(56, '85 - VENDAS- TELEMARKETING', NULL),
(57, '86 - VENDAS VENDEDOR INTERNO', NULL),
(58, '87 - VENDAS ANALISTA', NULL),
(59, '88 - VENDAS SUPERVISOR', NULL),
(60, '89 - VENDAS VENDEDOR EXTERNO', NULL),
(61, '90 - MARKETING ANALISTA', NULL),
(62, '91 - RELAÃ‡Ã•ES PÃšBLICAS', NULL),
(63, '92 - MARKTING AUXILIAR', NULL),
(64, '93 - COORDENADOR.SUPERVISOR MARKTING', NULL),
(65, '95 - COMÃ‰RCIO CAIXA', NULL),
(66, '96 - COMERCIO BALCONISTA', NULL),
(67, '97 - COMERCIO GERENTE', NULL),
(68, '100 - AUXILIAR DE COZINHA', NULL),
(69, '101 - GARÃ‡ON', NULL),
(70, '102 - COZINHEIRAS', NULL),
(71, '103 - NUTRICIONISTA', NULL),
(72, '110 - VIGILANTE', NULL),
(73, '111 - PORTEIRO', NULL),
(74, '112 - JARDINEIRO', NULL),
(75, '113 - AUXILIAR DE LIMPEZA', NULL),
(76, '115 - ZELADOR(A)', NULL),
(77, '114 - EMPREGADA DOMÃ‰STICA', NULL),
(79, '120 - AUXILIAR DE ENFERMAGEM', NULL),
(80, '121 - ENFERMEIRO(A)', NULL),
(81, 'TECNICO DE ENFERMAGEM', NULL),
(82, '150 - PROGESTITA JR, PL,SR', NULL),
(83, '151 - ENG. PRODUTO- PROCESSO SUPERVISOR', NULL),
(84, '152 - ENG. PRODUTO GERENTE', NULL),
(85, 'ANALISTA DE PROCESSOS', NULL),
(86, '155 - ENGENHARIA AMBIENTAL', NULL),
(87, '200 - OPERADOR DOBRADEIRA', NULL),
(88, '201 - OPERADOR GUILHOTINA', NULL),
(89, '202 - OPERADOR PRENSA', NULL),
(90, '203 - OPERADOR PUNCIONADEIRA', NULL),
(91, '204 - OPERADOR OXICORTE', NULL),
(92, '205 - OPERADOR PLASMA', NULL),
(93, '210 - OPERADOR DE CALDEIRA', NULL),
(94, '211 - OPERADOR EXTRUSORA-INJETORA', NULL),
(95, '212 - OPERADOR MAQ. SIMPLES', NULL),
(96, '213 - PREPARADOR INJETORA', NULL),
(97, '214 - PREPARADOR DE MISTURA', NULL),
(98, '215 - OPERADOR PONTE ROLANTE', NULL),
(99, '220 - FRESADOR DE PRODUÃ‡ÃƒO', NULL),
(100, '221 - PREPARADOR MAQ. USINAGEM', NULL),
(101, '222 - PROGRAMADOR CNC', NULL),
(102, '223 - RETIFICADOR', NULL),
(103, '224 - TORNEIRO CNC', NULL),
(104, '225 - TORNEIRO CONVENCIONAL', NULL),
(105, '227 - TORNEIRO FERRAMENTEIRO', NULL),
(106, '228 - OPERADOR ELETROEROSÃƒO', NULL),
(107, '229 - FERRAMENTEIRO', NULL),
(108, '230 - FRESADOR CNC MATRIZARIA', NULL),
(109, '231 - FRESADOR CNC', NULL),
(110, '232 - FRESADOR FERRAMENTIRO', NULL),
(112, '234 - MATRIZEIRO', NULL),
(113, '235 - OPERADOR CENTRO USINAGEM', NULL),
(114, '236 - MATRIZARIA SUPERVISOR', NULL),
(116, '300 - MECANICO E ELETRECISTA DE MANUTENÃ‡ÃƒO', NULL),
(117, '301 - SERRALHEIRO', NULL),
(118, '302 - SOLDADOR DE MAUTENÃ‡ÃƒO', NULL),
(119, '236 - MANUTENÃ‡ÃƒO SUPERVISOR', NULL),
(120, 'TECNICO ELETRONICO', NULL),
(121, '305 - MECANICO DE VEICULOS', NULL),
(122, 'TECNICO ELETRO-ELETRONICO', NULL),
(123, 'ELETRECISTA INSTALADOR', NULL),
(124, '308 - MECANICO DE REFRIGERAÃ‡ÃƒO', NULL),
(125, '315 - PINTOR', NULL),
(126, '316-AUXILIAR DE PRODUÃ‡ÃƒO MASCULINO- LID/METROLOG', NULL),
(127, '317 - FORJADOR', NULL),
(128, '318 - POLIDORISTA', NULL),
(129, '319 - AUXILIAR DE PRODUÃ‡ÃƒO FEMININO', NULL),
(130, '320 - AUXILIAR DE PRODUÃ‡ÃƒO FEMININO-LID/METROLOG', NULL),
(131, '321 - AUXILIAR DE PRODUÃ‡ÃƒO MASCULINO', NULL),
(132, 'COSTUREIRA', NULL),
(133, '323 - AUXILIAR DE PRODUÃ‡ÃƒO- 1Âº EMPREGO', NULL),
(134, '324 - ESTOFADOR', NULL),
(135, '330 - SUPERVISOR DE PRODUÃ‡ÃƒO', NULL),
(136, '400 - AJUSTADOR MONTADOR', NULL),
(137, '401 - MONTADOR', NULL),
(138, '402 - MONTADOR ESPECIALIZADO', NULL),
(139, '403 - MONTADOR - SOLDADOR', NULL),
(140, '404 - SOLDADOR ESPECIAL', NULL),
(141, '405 - SOLDADOR - PRODUÃ‡ÃƒO', NULL),
(142, '406 - MONTADOR MÃ“VEIS', NULL),
(143, '450 - LOGÃSTICA ALMOXARIFE/ EXPEDIDOR', NULL),
(144, '451 - LOGÃSTICA PCP', NULL),
(145, '452 - LOGÃSTICA MOTORISTA CNH-E', NULL),
(146, '453 - LOGÃSTICA MOTORISTA CNH-D', NULL),
(147, '454 - LOGÃSTICA MOTORISTA CNH-C', NULL),
(148, '455 - LOGÃSTICA MOTORISTA CNH-B', NULL),
(149, '456 - LOGÃSTICA MOTO', NULL),
(150, '457 - LOGÃSTICA OPERADOR DE EMPILHADEIRA', NULL),
(151, '459 - LOGÃSTICA SUPERVISOR', NULL),
(152, '458 - LOGÃSTICA CONFERENTE', NULL),
(153, '460 - GRAFICA ARTEFINALISTA', NULL),
(154, '461 - GRAFICA SERIGRAFISTA', NULL),
(155, '462 - GRAFICA CRIAÃ‡ÃƒO', NULL),
(156, '463 - GRÃFICA IMPRESSOR', NULL),
(157, '470 - QUALIDADE AUXILIAR', NULL),
(158, '471 - QUALIDADE INSPETOR', NULL),
(159, '472 - QUALIDADE ANALISTA', NULL),
(160, '473 - QUALIDADE SUPERVISOR/ GERENTE', NULL),
(161, 'PROGETISTA/ DEZENHISTA', NULL),
(162, 'ENGENHARIA DE ALIMENTOS', NULL),
(163, 'PROFESSOR (A) / RECREACIONISTA', NULL),
(164, 'AUXILIAR DE FARMÃCIA', NULL),
(165, 'AUXILIAR DE LABORATÃ“RIO', NULL),
(166, 'ESTÃGIO ENGENHARIA', NULL),
(167, 'ESTÃ‰TICA', NULL),
(168, 'AUTONOMO', NULL),
(169, 'AUXILIAR FINANCEIRO', NULL),
(170, 'Programador Delphi', 24);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created`, `modified`) VALUES
(1, 'PERF', 'd742316777364bb6b1667475c6b36a9ec71f5e03', NULL, '2013-05-13 21:07:50', '2013-05-13 21:07:50'),
(2, 'MELISSA', '8c79d5aac9329d95c4e2aa7201b7cafd7fe85a87', NULL, '2013-05-13 21:09:07', '2013-05-13 21:09:07'),
(3, 'ALESSANDRA', 'd24fde6107698618986e1475bc95fa612f99d2bc', NULL, '2013-05-13 21:09:46', '2013-05-13 21:09:46'),
(4, 'PERF', 'd742316777364bb6b1667475c6b36a9ec71f5e03', NULL, '2013-05-13 21:15:49', '2013-05-13 21:15:49'),
(5, 'ALESSANDRA', 'd24fde6107698618986e1475bc95fa612f99d2bc', NULL, '2013-05-13 22:56:05', '2013-05-13 22:56:05');

-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `vcandidato_cidades`
--
CREATE TABLE IF NOT EXISTS `vcandidato_cidades` (
`id` int(11)
,`nome` varchar(50)
,`conta` bigint(21)
);
-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `vcandidato_funcaos`
--
CREATE TABLE IF NOT EXISTS `vcandidato_funcaos` (
`id` int(11)
,`nome` varchar(50)
,`conta` bigint(21)
);
-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `vempresa_candidatos`
--
CREATE TABLE IF NOT EXISTS `vempresa_candidatos` (
`id` int(11)
,`nome` varchar(100)
,`conta` bigint(21)
);
-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `vempresa_funcaos`
--
CREATE TABLE IF NOT EXISTS `vempresa_funcaos` (
`id` int(11)
,`nome` varchar(50)
,`conta` bigint(21)
);
-- --------------------------------------------------------

--
-- Estrutura stand-in para visualizar `vsalarios`
--
CREATE TABLE IF NOT EXISTS `vsalarios` (
`id` int(11)
,`nome` varchar(50)
,`maior` double
,`menor` double
,`media` double
);
-- --------------------------------------------------------

--
-- Estrutura para visualizar `vcandidato_cidades`
--
DROP TABLE IF EXISTS `vcandidato_cidades`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcandidato_cidades` AS select `ci`.`id` AS `id`,`ci`.`nome` AS `nome`,count(0) AS `conta` from (`candidatos` `ca` join `cidades` `ci` on((`ca`.`cidade_id` = `ci`.`id`))) group by `ci`.`id`,`ci`.`nome` order by count(0) desc;

-- --------------------------------------------------------

--
-- Estrutura para visualizar `vcandidato_funcaos`
--
DROP TABLE IF EXISTS `vcandidato_funcaos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcandidato_funcaos` AS select `f`.`id` AS `id`,`f`.`nome` AS `nome`,count(0) AS `conta` from ((`candidato_funcaos` `cf` join `candidatos` `ca` on((`cf`.`candidato_id` = `ca`.`id`))) join `funcaos` `f` on((`cf`.`funcao_id` = `f`.`id`))) group by `f`.`id`,`f`.`nome` order by count(0) desc;

-- --------------------------------------------------------

--
-- Estrutura para visualizar `vempresa_candidatos`
--
DROP TABLE IF EXISTS `vempresa_candidatos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresa_candidatos` AS select `e`.`id` AS `id`,`e`.`fantasia` AS `nome`,count(0) AS `conta` from (`candidato_empresas` `ce` join `empresas` `e` on((`ce`.`empresa_id` = `e`.`id`))) group by `e`.`id`,`e`.`fantasia` order by count(0) desc;

-- --------------------------------------------------------

--
-- Estrutura para visualizar `vempresa_funcaos`
--
DROP TABLE IF EXISTS `vempresa_funcaos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresa_funcaos` AS select `e`.`id` AS `id`,`e`.`nome` AS `nome`,count(0) AS `conta` from (`candidato_empresas` `ce` join `funcaos` `e` on((`ce`.`funcao_id` = `e`.`id`))) group by `e`.`id`,`e`.`nome` order by count(0) desc;

-- --------------------------------------------------------

--
-- Estrutura para visualizar `vsalarios`
--
DROP TABLE IF EXISTS `vsalarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsalarios` AS select `f`.`id` AS `id`,`f`.`nome` AS `nome`,max(`ce`.`remuneracao`) AS `maior`,min(`ce`.`remuneracao`) AS `menor`,avg(`ce`.`remuneracao`) AS `media` from (`candidato_empresas` `ce` join `funcaos` `f` on((`ce`.`funcao_id` = `f`.`id`))) group by `f`.`id`,`f`.`nome` order by `f`.`nome` desc;
