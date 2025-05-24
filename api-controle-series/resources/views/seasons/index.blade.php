<x-layout title="Temporadas de  {!! $series->name !!}">
    <ul class="list-group mb-2">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{ route('episodes.index', $season->id) }}"> Temporada {{ $season->number }}</a>
            <span class='badge bg-secondary'>
                {{ $season->numberOfWatchedEpisodes() }} / {{ $season->episodes->count() }}
            </span>
        </li>
        @endforeach
    </ul>
    <a href={{ route('series.index') }} class="btn btn-dark">Voltar</a>
</x-layout>