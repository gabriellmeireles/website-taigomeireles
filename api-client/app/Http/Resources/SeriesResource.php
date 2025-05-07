<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SeriesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identity' => $this->id,
            'title' => $this->title,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'created_at' => $this->created_at->format('d/m/Y H:m:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:m:i'),
            'artist_id' => $this->artist_id
        ];
    }
}
