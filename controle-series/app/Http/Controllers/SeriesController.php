<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request) 
    {
        $query = 'SELECT * FROM series;';
        $series = DB::select($query);

        // return view('lista-series', [
        //     'series' => $series
        // ]);
        // return view('lista-series', compact('series'));
        return view('series.index')->with('series', $series);
    }

    public function create(Request $request) 
    {
        return view('series.create');
    }

    public function store(Request $request) 
    {
        $nomeSerie = $request->input('nome');

        $query = 'INSERT INTO series (nome) VALUES (?);';
        $inserção = DB::insert($query, [$nomeSerie]);
        return $inserção ? redirect('series') : redirect('criar');
    }
}
