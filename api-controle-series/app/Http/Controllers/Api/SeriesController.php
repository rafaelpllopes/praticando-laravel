<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;
use App\Repository\SeriesRepository;

class SeriesController extends Controller
{
    public function __construct(private SeriesRepository $repository)
    {
    }
    
    public function index()
    {
        return Series::all();
    }

    public function store(SeriesFormRequest $request) 
    {
        return response()->json($this->repository->add($request), 201);
    }

    public function show(Series $series) 
    {
        return $series;
    }

    public function update(int $series, SeriesFormRequest $request) 
    {
        // $series->fill($request->all());
        // $series->save();
        // return response()->json($series, 202);
        Series::where('id', $series)->update($request->all());
        return response()->json([], 202);
    }

    public function destroy(Series $series) 
    {
        $series->delete();
        return response()->noContent();
    }
}
