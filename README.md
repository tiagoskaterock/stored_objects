# Ajustar o arquivo /conecta.php com senha, usuário, nome do banco e endereço de servidor que roda o php

# Rodar o arquivo world_x.sql com todos os camandos no mysql para criar o banco e registros

# Colocar o projeto na raiz do servidor local de acordo com o sistema operacional

# Abrir o servidor apache em localhost

# CLicar no projeto stored_objects

# Testar os comandos de acordo com o fluxo


-- 


# Cada cidade excluída dispara a trigger que faz criar um novo registro na tabela cidades_excluidas

# A VIEW 'conta_cidades_dos_paises' mostra quantas cidades existe em cada país de acordo com o CountryCode, usade em conta_cidades.php

# A PROCEDURE 'conta_paises' mostra o total de países, usada em conta_paises.php

# A TRIGGER 'cidade_excluída' mostra quando uma cidade foi excluída adicionando um registro à tabela cidades excluídas

# Foi preciso ativar os eventos no mysql pois estavam desativados, o comando abaixo resolveu o problema

* SET GLOBAL event_scheduler="ON" *

# O EVENT 'limpa_lixo serve para limpar registros antigos da tabela 'cidades_excluidas'. Para fins de estudo está ativado para ser disparado a cada UM minuto e excluir o primeiro registro da tabela, um de cada vez. Em uma situação real, poderia ser utilizado para apagar mensagens muito antigas automaticamente, por exemplo, que ficam apenas ocupando espaço em uma base de dados.

