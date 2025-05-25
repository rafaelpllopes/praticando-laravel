<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = ['name'];
    // protected $with = ['seasons'];

    public function seasons()
    {
        return $this->hasMany(Season::class, 'series_id'); //Relacionamento um para muitos, uma serie pode ter muitas temporadas
    }

    public function episodes()
    {
        return $this->hasManyThrough(Episode::class, Season::class);
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuider) {
            $queryBuider->orderBy('name', 'desc');
        });
    }
}
