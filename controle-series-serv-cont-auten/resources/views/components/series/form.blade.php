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
        <label for="name" class="form-label">Nome:</label>
        <input type="text" id="name" name="name" class="form-control" @isset($name)value="{{ $name }}" @endisset />
    </div>

    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href={{ route('series.index') }} class="btn btn-dark">Voltar</a>
</form>