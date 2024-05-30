<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceRequest extends FormRequest
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
            'company' => ['required', 'string', 'min:3'],
            'position' => ['required', 'string', 'min:3'],
            'description' => ['sometimes', 'nullable', 'string', 'max:500'],
            'start_date' => ['sometimes', 'nullable', 'date', 'date_format:Y-m-d'],
            'end_date' => ['sometimes', 'nullable', 'date', 'date_format:Y-m-d'],
        ];
    }
}
