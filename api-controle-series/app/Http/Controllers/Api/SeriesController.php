<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $query = Series::query();
        if ($request->has('name')) {
            // Series::whereName($request->name)->get();
            $query->where('name', $request->name);
        }

        return $query->paginate(3);
    }

    public function store(SeriesFormRequest $request) 
    {
        return response()->json($this->repository->add($request), 201);
    }

    public function show(int $series) 
    {
        $seriesModel = Series::with('seasons.episodes')->find($series);

        return $seriesModel === null ? 
            response()->json(['message' => 'Series not found'], 404) : 
            $seriesModel;
    }

    public function update(int $series, SeriesFormRequest $request) 
    {
        // $series->fill($request->all());
        // $series->save();
        // return response()->json($series, 202);
        Series::where('id', $series)->update($request->all());
        return response()->json(['message' => "Series id: {$series} update with success"], 202);
    }

    public function destroy(Series $series) 
    {
        $series->delete();
        return response()->noContent();
    }
}
