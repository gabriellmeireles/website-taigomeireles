<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Series;

class Artists extends Model
{
    protected $fillable = [
        'name',
        'biography'
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
