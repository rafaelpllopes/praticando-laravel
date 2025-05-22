<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        /**
         * $request->session()->forget('mensagem.sucesso'); 
         * Caso use o put
         */
        
        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create(Request $request) 
    {
        return view('series.create');
    }

    public function store(Request $request) 
    {
        $serie = Serie::create($request->all());
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        $request->session()->flash('mensagem.sucesso', "Série '{$serie->nome}' adicionado com sucesso");
        return to_route('series.index')
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function destroy(Serie $series, Request $request) 
    {
        // $serie = Serie::find($request->series);
        // Serie::destroy($request->series);
        // $request->session()->flash('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }

    public function edit(Serie $series) 
    {        
        return view('series.edit')
            ->with('serie', $series);
    }

    public function update(Serie $series, Request $request) 
    {        
        // $series->nome = $request->nome;
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->nome}' atualizada com sucesso");
    }
}
