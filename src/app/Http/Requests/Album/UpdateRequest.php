<?php

namespace App\Http\Requests\Album;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'string|max:255',
            'artist_id' => 'exists:artists,id',
            'release_year' => 'digits:4|integer|min:1900|max:' . (date('Y') + 1),
            'songs' => 'array',
            'songs.*.id' => 'required|exists:songs,id',
            'songs.*.track_number' => 'required|integer|min:1'
        ];
    }
}
