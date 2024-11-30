<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsRequest extends FormRequest
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
            'name' => 'nullable|string|min:5|',  // Название новости
            'slug' => 'nullable|string|min:5|unique:news,slug',  // Слаг
            'description' => 'nullable|string',  // Описание новости
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',  // Фото
            'date' => 'nullable|date', // Дата
        ];
    }

    /**
     * Custom error messages.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The news title is required.',
            'name.string' => 'The title must be a valid string.',
            'name.min' => 'The title must be at least 5 characters long.',
            'name.unique' => 'A news article with this title already exists.',
            'slug.string' => 'The slug must be a valid string.',
            'slug.min' => 'The slug must be at least 5 characters long.',
            'slug.unique' => 'The slug must be unique.',
            'description.required' => 'The description is required.',
            'description.string' => 'The description must be a valid string.',
            'photo.required' => 'A photo for the news article is required.',
            'photo.image' => 'The photo must be an image.',
            'photo.mimes' => 'The photo must be a JPG, JPEG, PNG, GIF, or WEBP file.',
            'photo.max' => 'The photo must not exceed 2MB in size.',
            'date.required' => 'The date is required.',
            'date.date' => 'The date must be a valid date format.',
        ];
    }
}
