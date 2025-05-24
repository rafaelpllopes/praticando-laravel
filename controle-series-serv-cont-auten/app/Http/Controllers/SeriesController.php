<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repository\SeriesRepository;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
    }

    public function index(Request $request) 
    {
        $series = $this->repository->all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        
        return view('series.index')
            ->with('series', $series)
            ->with('mensagemSucesso', $mensagemSucesso);
    }

    public function create() 
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request) 
    {
        $serie = $this->repository->add($request);
        return to_route('series.index')
                ->with('mensagem.sucesso', "Série '{$serie->name}' adicionado com sucesso");
    }

    public function destroy(Series $series, Request $request) 
    {
        // $serie = Serie::find($request->series);
        // Serie::destroy($request->series);
        // $request->session()->flash('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
        $series->delete();

        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' removida com sucesso");
    }

    public function edit(Series $series) 
    {        
        return view('series.edit')
            ->with('serie', $series);
    }

    public function update(Series $series, SeriesFormRequest $request) 
    {        
        // $series->name = $request->name;
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')
            ->with('mensagem.sucesso', "Série '{$series->name}' atualizada com sucesso");
    }
}
