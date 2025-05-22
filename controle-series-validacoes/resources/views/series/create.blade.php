<x-layout title="Nova Seŕie">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false" />
</x-layout>