# Tema Webjump - Magento 2.3

Como instalar o tema?
1. Copie os arquivos do tema na pasta app/

2. Limpe os caches

Tão simples quanto bin/magento cache:flush.

3. Configure o novo tema

# Menu do Magento
A configuração do tema é feita em Conteúdo > Design > Configuração.

Em seguida, selecione o escopo que deseja realizar a alteração. Caso queira aplicar o tema à todas as visões de lojas e websites, certifique-se que eles não possuem configurações feitas, e clique na configuração Global.

Lista de sites e visões de loja
Por fim, selecione o tema WebJump na lista de opções e salve as configurações.

Tema configurado

4. Limpe os caches novamente e gere os conteúdos estáticos

Limpe os caches novamente com o comando bin/magento cache:flush.

Se sua loja não estiver em modo developer, será necessário regerar os arquivos estáticos. Para isso, use o comando bin/magento setup:static-content:deploy.
