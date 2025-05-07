<?php

namespace App\Http\Requests\Artists;

use Illuminate\Foundation\Http\FormRequest;

class StoreArtistRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
        //return auth()->check(); // Permite apenas usuários autenticados
        //return auth()->user()->isAdmin(); // Permite apenas administradores

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
                'unique:artists',
            ],
        ];
    }
}
