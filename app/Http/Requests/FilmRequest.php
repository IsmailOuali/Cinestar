<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmRequest extends FormRequest
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
            "title" => "required",
            "genre" => "required",
            "actors" => "required",
            "duration" => "required",
            "year" => "required",
            "category_id" => "required",
            "country" => "required",
            "language" => "required",
            "description" => "required",
            "image" => "required",
        ];
    }
}
