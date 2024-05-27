<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutUpdateRequest extends FormRequest
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
            "name" => ['required', 'string', 'min:3'],
            "surname" => ['required', 'string', 'min:3'],
            "specialty" => ['required', 'string', 'min:3'],
//            "email" => ['required', 'email', 'unique:users,email,'.auth()->user()->id],
            "short_description" => ['required', 'min:3', 'max:255'],
            "description" => ['required', 'min:3', 'max:500'],
            "img_hero" => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,gif,bmp,webp', 'max:2048'],
            "img_about" => ['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg,gif,bmp,webp', 'max:2048'],
        ];
    }
}
