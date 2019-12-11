# Gestão de Ocorrências

## Seja bem vindo ao programa de Gestão de Ocorrências!
### Para executá-lo, siga os seguintes passos:

1. Clone o projeto para dentro da pasta www do Laragon;
2. Dentro da pasta gestocor, execute os comandos  php 

    ```composer install```
    
    ```artisan key:generate```

3. Crie um banco de dados e configure-o dentro do arquivo .env na raíz do projeto;
4. Execute o seguinte comando

    ```php artisan migrate```

5. [Entre no site](gestocor.test) e crie um usuário
6. Execute o seguinte comando php artisan db:seed