<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Series;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    protected $fillable = [
        'full_name',
        'artist_name',
        'biography',
        'email'
    ];

    /**
     * Get all of the series for the Artists
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function series(): HasMany
    {
        return $this->hasMany(Series::class);
    }

}
