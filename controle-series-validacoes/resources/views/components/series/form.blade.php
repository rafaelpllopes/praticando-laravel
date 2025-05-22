<form action="{{ $action }}" method="post">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @csrf

    @if($update)
    @method('PUT')
    @endif

    <div class="mb-3">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" @isset($nome)value="{{ $nome }}" @endisset />
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href={{ route('series.index') }} class="btn btn-dark">Voltar</a>
</form>