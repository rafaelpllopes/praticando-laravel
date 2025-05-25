<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = ['name'];
    // protected $with = ['seasons'];
    protected $appends = ['links'];

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

    public function links(): Attribute
    {
        return new Attribute(
            get: fn () => [
                [
                    'rel' => 'self',
                    'url' => "/api/series/{$this->id}"
                ],
                [
                    'rel' => 'self',
                    'url' => "/api/series/{$this->id}/seasons"
                ],
                [
                    'rel' => 'self',
                    'url' => "/api/series/{$this->id}/episodes"
                ],
            ],
        );
    }
}
