<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArtistResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'identify' => $this->id,
            'full_name' => $this->full_name,
            'artist_name' => strtoupper($this->artist_name),
            'biography' => $this->biography,
            'email' => $this->email,
            'created_at' => $this->created_at->format('d/m/Y H:m:i'),
            'updated_at' => $this->updated_at->format('d/m/Y H:m:i')
        ];
    }
}
