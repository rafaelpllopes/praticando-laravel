<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Episode;
use App\Models\Series;
use Illuminate\Http\Request;

class EpisodesController extends Controller
{
    public function index(int $series) 
    {
        $seriesModel = Series::find($series)->episodes;

        return $seriesModel === null ? 
            response()->json(['message' => 'Series not found'], 404) : 
            $seriesModel;
    }

    public function update(Episode $episode, Request $request) 
    {
        // $episode->watched = $request->watched ? true : false;
        $episode->watched = $request->watched;
        $episode->save();
        
        return $episode;
    }
}
