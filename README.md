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

# Conteúdo Home
1. ![image](https://user-images.githubusercontent.com/92882150/159350702-29fc8ee3-6321-4aa1-9475-f7259b1f826b.png)
2. ![image](https://user-images.githubusercontent.com/92882150/159350776-675fce2e-eb52-4eea-b862-8cfcab7f225f.png)

Texto:

Seja bem-vindo!

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.

Para o Banco de Dados completo com categorias e produtos do exemplo, o mesmo encontra-se nesse link:
https://github.com/elaineosutto/BD
