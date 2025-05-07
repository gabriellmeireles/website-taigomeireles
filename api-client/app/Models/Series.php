<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Series extends Model
{
    protected $fillable = [
        'title',
        'date_start',
        'date_end',
        'artist_id'
    ];

   /**
    * Get the artist that owns the Series
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function artist(): BelongsTo
   {
       return $this->belongsTo(Artist::class);
   }
}
