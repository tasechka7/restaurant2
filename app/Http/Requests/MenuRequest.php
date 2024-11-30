<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:5|unique:menus,name',
            'slug' => 'nullable|string|min:5|unique:menus,slug',
            'ingredients' => 'required|string',
            'weight' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
            'category_id' => 'required|exists:menus_categories,id',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'The "Name" field is required.',
            'name.string' => 'The "Name" field must be a string.',
            'name.min' => 'The "Name" field must be at least 5 characters long.',
            'name.unique' => 'A dish with this name already exists.',
            'slug.min' => 'The "Slug" field must be at least 5 characters long.',
            'slug.unique' => 'A dish with this slug already exists.',
            'ingredients.required' => 'The "Ingredients" field is required.',
            'weight.required' => 'The "Weight" field is required.',
            'weight.integer' => 'The "Weight" field must be an integer.',
            'weight.min' => 'The "Weight" must be at least 1.',
            'price.required' => 'The "Price" field is required.',
            'price.integer' => 'The "Price" field must be an integer.',
            'price.min' => 'The "Price" must be at least 1.',
            'category_id.required' => 'The "Category" field is required.',
            'category_id.exists' => 'The selected category does not exist.',
            'photo.required' => 'The "Photo" field is required.',
            'photo.image' => 'The "Photo" must be an image.',
            'photo.mimes' => 'The "Photo" must be in one of the following formats: jpg, jpeg, png, gif, webp.',
            'photo.max' => 'The "Photo" size must not exceed 2MB.',
        ];
    }
}
