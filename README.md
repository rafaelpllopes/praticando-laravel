# Praticando Laravel

Repositorio onde irei colocar os estudos iniciais do Laravel

## Criar o projeto com composer/Subir o servidor

- `composer create-project laravel/laravel controle-series`
- `php artisan serve` para subir um servidor nas configuraçõe padrões http://localhost:8000.
- `php artisan serve --host 0.0.0.0 --port 8080` para subir um servidor na configuração que precisar, trocar o host e port.

## Crirando um controller

- `php artisan make:controller SeriesController`
- Para criar a rota o conteúdo vai routes/web.php, seguindo o padrão:
    - `Route::get('/series',[SeriesController::class, 'index']);`.
