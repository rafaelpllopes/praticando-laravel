<x-layout title="Nova Seŕie">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class='row mb-3'>
            <div class="col-8">
                <label for="name" class="form-label">Nome:</label>
                <input type="text" id="name" name="name" class="form-control" autofocus value="{{ old('name') }}" />
            </div>

            <div class="col-2">
                <label for="seasonsQty" class="form-label">Nº de temporadas:</label>
                <input type="text" id="seasonsQty" name="seasonsQty" class="form-control" value="{{ old('seasonsQty') }}" />
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps / Temporadas:</label>
                <input type="text" id="episodesPerSeason" name="episodesPerSeason" class="form-control" value="{{ old('episodesPerSeason') }}" />
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href={{ route('series.index') }} class="btn btn-dark">Voltar</a>
    </form>
</x-layout>