<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DrinksRequest extends FormRequest
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
            'name' => 'required|string|min:5|unique:drinks,name',
            'slug' => 'nullable|string|min:5|unique:drinks,slug',
            'ingredients' => 'required|string',
            'price' => 'required|integer|min:1',
            'category_id' => 'required|exists:drinks_categories,id',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
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
            'name.required' => 'The name of the drink is required.',
            'name.string' => 'The name must be a valid string.',
            'name.min' => 'The name must be at least 5 characters long.',
            'name.unique' => 'The name of the drink must be unique.',
            'slug.string' => 'The slug must be a valid string.',
            'slug.min' => 'The slug must be at least 5 characters long.',
            'slug.unique' => 'The slug must be unique.',
            'ingredients.required' => 'The ingredients field is required.',
            'ingredients.string' => 'The ingredients must be a valid string.',
            'price.required' => 'The price is required.',
            'price.integer' => 'The price must be an integer.',
            'price.min' => 'The price must be at least 1.',
            'category_id.required' => 'The category ID is required.',
            'category_id.exists' => 'The selected category is invalid.',
            'photo.required' => 'A photo for the drink is required.',
            'photo.image' => 'The photo must be an image.',
            'photo.mimes' => 'The photo must be a JPG, JPEG, PNG, GIF, or WEBP file.',
            'photo.max' => 'The photo must not exceed 2MB in size.',
        ];
    }
}
