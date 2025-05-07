<?php

namespace App\Http\Requests\Works;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreWorkRequest extends FormRequest
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
            'title' => [
                'required',
                'min:3',
                'max:255',
            ],
            'width' => [
                'required',
                'max_digits:4',
                'integer',
                'numeric'
            ],
            'height' => [
                'required',
                'max_digits:4',
                'integer',
                'numeric'
            ],
            'year' => [
                'required',
                Rule::date()->format('Y'),
            ],
            'technic' => [
                'required',
                'min:3'
            ],
            'price' => [
                'decimal:2'
            ],
            'available' => [
                'boolean'
            ],
            'cover' => [
                'boolean'
            ],
            'series_id' => [
                'required',
                'exists:series,id'
            ],
        ];
    }
}
