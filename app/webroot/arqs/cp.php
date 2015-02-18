<?php
	//copy ("E:\\CORPORATIVO\\ADM\\DomPerSIS\\Dados\\EMPDADOS","\\\\Servidor\\Publico\\EMPDADOS");
	//exec('xcopy E:\\CORPORATIVO\\ADM\\DomPerSIS\\Dados \\\\Servidor\\Publico\\Dados\\ /e/i', $a, $a1); 
	//exec('xcopy E:\\CORPORATIVO\\ADM\\DomPerSIS\\Dados \\\\Servidor\\Publico\\Dados\\ /e/i', $a, $a1); 
    exec('xcopy E:\\CORPORATIVO\\ADM \\\\Servidor\\Publico\\Dados\\ /e/i', $a, $a1);
	//exec('xcopy E:\\CORPORATIVO\\ADMG \\\\Servidor\\Publico\\Dados\\ /e/i', $a, $a1);
	//exec('xcopy E:\\CORPORATIVO\\DIRETORIA \\\\Servidor\\Publico\\Dados\\ /e/i', $a, $a1);
	echo "ok";
?>

Microsoft Windows [versão 6.2.9200]
(c) 2012 Microsoft Corporation. Todos os direitos reservados.

C:\Users\Wilian>xcopy  /?
Copia arquivos e árvores de diretórios.

XCOPY origem [destino] [/A | /M] [/D[:data]] [/P] [/S [/E]] [/V] [/W]
                           [/C] [/I] [/Q] [/F] [/L] [/G] [/H] [/R] [/T] [/U]
                           [/K] [/N] [/O] [/X] [/Y] [/-Y] [/Z] [/B] [/J]
                          [/EXCLUDE:arquivo1[+arquivo2][+arquivo3]...]

  origem       Especifica o(s) arquivo(s) a ser(em) copiado(s).
  destino  Especifica o local e/ou o nome dos novos arquivos.
  /A           Copia somente arquivos com o atributo de arquivamento
               definido; nao altera o atributo.
  /M           Copia somente arquivos com o atributo de arquivamento
               definido; desativa o atributo de arquivamento.
  /D:m-d-a     Copia os arquivos alterados durante ou após a data
               especificada. Se nao for definida uma data, copia apenas os
               arquivos cujo tempo de origem seja mais novo do que o tempo
               de destino.
  /EXCLUDE:arquivo1[+arquivo2][+arquivo3]...
               Especifica uma lista de arquivos contendo cadeias de
               caracteres. Cada cadeia deve estar em uma linha separada nos
               arquivos. Quando qualquer cadeia corresponder a qualquer parte
               do caminho absoluto do arquivo a ser copiado, esse arquivo
               deixará de ser copiado. Por exemplo, especificar uma cadeia de
               caracteres como \obj\ ou .obj excluirá todos os arquivos sob o
               diretório obj ou com a extensao .obj, respectivamente.
  /P           Solicita confirmaçao antes de criar cada arquivo de destino.
  /S           Copia diretórios e subdiretórios, exceto os vazios.
  /E           Copia diretórios e subdiretórios, inclusive os vazios.
               O mesmo que /S /E. Pode ser usado para modificar /T.
  /V           Verifica o tamanho de cada novo arquivo.
  /W           Solicita que você pressione uma tecla antes de copiar.
  /C           Continua copiando, mesmo que ocorram erros.
  /I           Se o destino nao existir e mais de um arquivo estiver sendo
               copiado, pressupoe que o destino deve ser um diretório.
  /Q           Nao exibe os nomes de arquivos ao copiar.
  /F           Exibe os nomes de arquivos de origem e de destino completos ao
               copiar.
  /L           Exibe arquivos que seriam copiados.
  /G           Permite a cópia de arquivos criptografados para um destino que
               nao oferece suporte a criptografia.
  /H           Copia arquivos ocultos e do sistema também.
  /R           Substitui arquivos somente leitura.
  /T           Cria a estrutura de diretórios, mas nao copia arquivos. Nao
               inclui diretórios ou subdiretórios vazios. /T /E inclui
               diretórios e subdiretórios vazios.
  /U           Copia apenas os arquivos que já existem no destino.
  /K           Copia atributos. O Xcopy normal redefinirá os atributos
               somente leitura.
  /N           Copia usando os nomes curtos gerados.
  /O           Copia as informaçoes de ACL e proprietário do arquivo.
  /X           Copia configuraçoes de auditoria de arquivo (implica /O).
  /Y           Suprime o prompt para você confirmar se deseja substituir
               um arquivo de destino existente.
  /-Y          Exibe o prompt para você confirmar se deseja substituir
               um arquivo de destino existente.
  /Z           Copia arquivos de rede no modo reiniciável.
  /B           Copia o próprio Vínculo Simbólico, e nao o destino do vínculo.
  /J           Copia usando E/S sem buffer. Recomendável para arquivos muito
               grandes.

A opçao /Y pode ser predefinida na variável de ambiente COPYCMD.
Isso pode ser anulado por /-Y na linha de comando.

C:\Users\Wilian>