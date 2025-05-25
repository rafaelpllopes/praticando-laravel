<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Series;

class SeasonsController extends Controller
{
    public function index(int $series) 
    {
        $seriesModel = Series::find($series)->seasons;

        return $seriesModel === null ? 
            response()->json(['message' => 'Series not found'], 404) : 
            $seriesModel;
    }
}
