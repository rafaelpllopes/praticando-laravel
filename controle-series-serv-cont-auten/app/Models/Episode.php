<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    protected $fillable = ['number'];

    public $timestamps = false;

    public function Season() 
    {
        return $this->belongsTo(Season::class);
    }
}
