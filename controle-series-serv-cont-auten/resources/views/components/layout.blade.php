<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('build/assets/app-DsTzuu0T.css') }}">
    {{-- @vite(["resources/sass/app.scss", "resources/js/app.js"]) --}}
    <title>{{ $title }} - Controle de Séries</title>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        
        @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
        @endisset
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {{ $slot }}
    </div>
</body>
</html>