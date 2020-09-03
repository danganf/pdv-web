## Ambiente utilizado

Ambiente construindo utilizando container, via docker.

> Mysql 5.7.24

> Nginx 1.16

> php 7.2.19

> Laravel 6.2

## Setup initial

Execute os seguintes passos abaixo, em um console, após clonar esse repositório:

> composer install

> php artisan key:generate

Agora, configure o arquivo `config/database.php` e defina o nome da base de dados.
Lembre-se que o usuário necessitará de acessos *root* para criar as tabelas.

> php artisan config:clear

> php artisan cache:clear

> php artisan migrate:install

> php artisan migrate

Se ocorreu tudo bem, as tabelas foram criadas no banco definido no `config/database.php`.

Agora, execute o comando abaixo para criar registros de fornecedores e catalogos de testes.

> php artisan db:seed