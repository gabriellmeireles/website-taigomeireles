<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Work extends Model
{
    protected $fillable = [
        'title',
        'width',
        'height',
        'year',
        'technic',
        'price',
        'available',
        'cover',
        'series_id',
    ];

    /**
     * Get the Series that owns the Work
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }
}
