<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class BlogStoreRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'slug' => ['sometimes', 'nullable', 'unique:blogs,slug'],
            'category_id' => ['required', 'integer'],
            'main_image' => ['required', 'image', 'mimes:png,jpg,jpeg,webp,bmp'],
            'images.*' => ['required', 'image', 'mimes:png,jpg,jpeg,webp,bmp'],
            'expire_date' => ['required', 'date'],
        ];
    }

    protected function prepareForValidation()
    {
        if ($this->slug) {
            $this->merge([
                'slug' => Str::slug($this->slug)
            ]);
        }
    }
}
