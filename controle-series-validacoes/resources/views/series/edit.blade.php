<x-layout title="Editar Seŕie '{{ $serie->nome }}'" >
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" />
</x-layout>