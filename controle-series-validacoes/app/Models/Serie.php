<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['nome'];
    // protected $with = ['temporadas'];

    public function temporadas()
    {
        return $this->hasMany(Season::class, 'series_id'); //Relacionamento um para muitos, uma serie pode ter muitas temporadas
    }

    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuider) {
            $queryBuider->orderBy('nome');
        });
    }
}
