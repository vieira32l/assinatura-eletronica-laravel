# assinatura-eletronica-laravel

![version](https://img.shields.io/badge/version-1.0.0-blue.svg)

Simples projeto para realizar assinaturas digitais em documentos PDF.

Desenvolvido no **framework Laravel**.

Conheça o framework [Laravel](https://laravel.com).

## Versão disponível

![](public/images/readme/version/laravel.png)

## Start project

Recomendações para execução do projeto:

- Na pasta desejada execute no terminal de comando `git clone git@github.com:vieira32l/assinatura-eletronica-laravel.git`.
- Dentro do projeto copie `.env.exemple` e cole na mesma pasta renomeando para `.env` e configure adequadamente.
- Dentro da pasta assinatura-digital execute no terminal de comando `composer update`.
- E em seguida execute o comando `php artisan key:generate` para gerar uma key (chave) do projeto.
- E em seguida execute o comando `php artisan storage:link` para gerar um atalho dos arquivos salvo no projeto na pasta pública.
- E em seguida execute o comando `php artisan migrate --seed` para migrações e popular dados no banco de dados.
- E em seguida o comando `php artisan serve` para inicializar o servidor.
- E por final acesse no navegador desejado o endereço local `http://127.0.0.1:8000` para acesso ao site.

Requisitos para execução do projeto:

- PHP 7.2 
- Composer (versão mais atual)

Em caso de problemas para a execução do projeto execute dentro da pasta assinatura-digital no terminal de comando os seguintes comandos abaixo:

- `php artisan cache:clear`
- `php artisan view:clear`
- `php artisan route:clear`
- `php artisan clear-compiled`
- `composer dump-autoload`

Em caso de problemas para a execução das migrations por incopatibilidade de criptografia da senha raíz do mysql na versão 8.0 execute o seguinte comando no mysql:

- `ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '(insira aqui a senha utilizada no seu computador)'`

## Passo a passo para criação de repositório pessoal baseado nesse projeto

- criação do projeto Laravel versão 6 (start project)
- criação do README (opcional)
- mudança do timezone do projeto para o horário local
- criação do atalho da pasta pública storage com o comando: `php artisan storage:link`
- criação do formulário para obter o certificado e a senha (framework bootstrap e jquery opcional)
- criação da página do PDF
- instalação do pacote TCPDF com o comando: `composer require elibyy/tcpdf-laravel`
- criação de route e controller

## Documentação
A documentação do Laravel está disponível no [website](https://laravel.com/docs/).

## Suporte nos navegadores

![](public/images/readme/browsers/chrome.png)
![](public/images/readme/browsers/firefox.png)
![](public/images/readme/browsers/edge.png)
![](public/images/readme/browsers/safari.png)
![](public/images/readme/browsers/opera.png)