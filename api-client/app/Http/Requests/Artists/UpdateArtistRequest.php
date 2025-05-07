<?php

namespace App\Http\Requests\Artists;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name' => [
                'required',
                'min:3',
                'max:100',
            ],
            'artist_name' => [
                'required',
                'min:3',
                'max:100',
            ],
            'biography' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('artists')->ignore($this->route('artist')),
            ],
        ];
    }
}
