--VERSAO 1

alter table funcaos add codigo integer;

ALTER TABLE  `candidatos` CHANGE  `obs`  `obs` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcandidato_cidades` AS select `ci`.`id` AS `id`,`ci`.`nome` AS `nome`,count(0) AS `conta` from (`candidatos` `ca` join `cidades` `ci` on((`ca`.`cidade_id` = `ci`.`id`))) group by `ci`.`id`,`ci`.`nome` order by count(0) desc;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vcandidato_funcaos` AS select `f`.`id` AS `id`,`f`.`nome` AS `nome`,count(0) AS `conta` from ((`candidato_funcaos` `cf` join `candidatos` `ca` on((`cf`.`candidato_id` = `ca`.`id`))) join `funcaos` `f` on((`cf`.`funcao_id` = `f`.`id`))) group by `f`.`id`,`f`.`nome` order by count(0) desc;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresa_candidatos` AS select `e`.`id` AS `id`,`e`.`fantasia` AS `nome`,count(0) AS `conta` from (`candidato_empresas` `ce` join `empresas` `e` on((`ce`.`empresa_id` = `e`.`id`))) group by `e`.`id`,`e`.`fantasia` order by count(0) desc;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vempresa_funcaos` AS select `e`.`id` AS `id`,`e`.`nome` AS `nome`,count(0) AS `conta` from (`candidato_empresas` `ce` join `funcaos` `e` on((`ce`.`funcao_id` = `e`.`id`))) group by `e`.`id`,`e`.`nome` order by count(0) desc;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vsalarios` AS select `f`.`id` AS `id`,`f`.`nome` AS `nome`,max(`ce`.`remuneracao`) AS `maior`,min(`ce`.`remuneracao`) AS `menor`,avg(`ce`.`remuneracao`) AS `media` from (`candidato_empresas` `ce` join `funcaos` `f` on((`ce`.`funcao_id` = `f`.`id`))) group by `f`.`id`,`f`.`nome` order by `f`.`nome` desc;

--VERSAO 2

ALTER TABLE  `candidatos` CHANGE  `grauinstrucao`  `grauinstrucao` TEXT CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL

--VERSAO 3

ALTER TABLE  candidatos add curriculo varchar(1);

ALTER TABLE `candidatos` CHANGE `numero` `numero` INT( 11 ) NULL ;

update candidatos set sexo = substring(upper(sexo),1,1);

update candidatos set estadocivil = substring(upper(estadocivil),1,1);

ALTER TABLE `candidatos` CHANGE `grauinstrucao` `grauinstrucao` VARCHAR( 100 );

update candidatos set categoriacnh = substring(upper(categoriacnh),1,1);

ALTER TABLE `candidatos` add created datetime, add modified datetime;

ALTER TABLE `candidatos` add situacao varchar(1);

update `candidatos` set situacao = 'A';


--VERSAO 4

ALTER TABLE `candidatos` ADD `created` DATETIME NOT NULL , ADD `modified` DATETIME NOT NULL ;

CREATE TABLE IF NOT EXISTS `curriculos` (
`id` int(11) NOT NULL,
  `candidato_id` int(11) NOT NULL,
  `caminho` varchar(200) NOT NULL,
  `nome` text NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `tamanho` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `curriculos` ADD PRIMARY KEY (`id`);

ALTER TABLE `curriculos` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
