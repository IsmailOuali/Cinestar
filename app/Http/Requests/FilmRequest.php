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
            "description" => "required",
            "duration" => "required",
            "year" => "required",
            "screening_date" => "required",
            "actors" => "required",
            "language" => "required",
            "country" => "required",
            "genre" => "required",
            "category_id" => "required",
            "room_id" => "required",
            "image" => "required|image",
        ];
    }
}
