<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

   /**
    * Get all of the works for the Series
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function works(): HasMany
   {
       return $this->hasMany(Work::class);
   }
}
