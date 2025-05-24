# Praticando Laravel

Repositorio onde irei colocar os estudos iniciais do Laravel

## Conhecimentos iniciais do Laravel

Laravel: crie aplicações web em PHP

- Pasta do projeto controle-series-inical

### Criar o projeto com composer/Subir o servidor

- `composer create-project laravel/laravel controle-series`
- `php artisan serve` para subir um servidor nas configuraçõe padrões http://localhost:8000.
- `php artisan serve --host 0.0.0.0 --port 8080` para subir um servidor na configuração que precisar, trocar o host e port.

### Crirando um controller

- `php artisan make:controller SeriesController`
- Para criar a rota o conteúdo vai routes/web.php, seguindo o padrão:
    - `Route::get('/series',[SeriesController::class, 'index']);`.

### Criando as migrations

- `php artisan make:migration create_series_table`, para criar a migrate;
- `php artisan migrate`, para o banco as migrações no banco;

#### Criando o model

- `php artisan make:model Serie`, para criar o modelo para uso do banco
- `DB::insert()`, `DB::select()`, são formas de interagir direto com o banco sem usar o ORM.
    - `DB::insert($query, [$nomeSerie]);`
    - `DB::select($query);`

## Laravel validações, sessões...

Laravel: validando formulários, usando sessões e definindo relacionamentos

- Pasta do projeto controle-series-validacoes;
- `php artisan make:request SeriesFormReques` para criar seu proprio request;
- `php controle-series-validacoes/artisan make:model Season -m` para criar o model e migration;
- `php controle-series-validacoes/artisan make:model Episode -m` para criar o model e migration;
- `composer require barryvdh/laravel-debugbar --dev` para debugar no frontend.
- `php artisan make:controller SeasonsControlle`

## Laravel: transações, service container e autenticação

- Use transações de banco de dados com Laravel
- Conheça os poderes do service container o Laravel
- Aprofunde seus conhecimentos sobre o framework
- Aprenda sobre autenticação
- Conheça um starter-pack para Laravel

### Migrations

- `php artisan make:migration --table=episodes add_watched_episode`, cria uma nova migrate.
- `php artisan migrate`

### Auth/Middleware

- `php artisan make:middleware Authenticate`
- `php artisan make:controller LoginController`
