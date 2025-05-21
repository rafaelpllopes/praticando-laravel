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

- Pasta do projeto controle-series-validacoes
