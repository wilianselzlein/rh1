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
