<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
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
            'width' => $this->width,
            'height' => $this->height,
            'year' => $this->year,
            'technic' => $this->technic,
            'price' => $this->price,
            'available' => $this->available,
            'cover' => $this->cover,
            'series_id' => $this->series_id,
        ];
    }
}
