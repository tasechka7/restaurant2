<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Allow all users to update the menu
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $id = $this->route('id'); // Get the menu ID from the route

        return [
            'name' => 'nullable|string|unique:menus,name,' . $id,  // Unique validation excluding the current record
            'ingredients' => 'nullable|string',
            'weight' => 'nullable|integer|min:1',  // Minimum weight should be 1
            'price' => 'nullable|integer|min:1',  // Minimum price should be 1
            'category_id' => 'nullable|exists:menus_categories,id',  // The category must exist
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',  // Optional photo, with specific image formats and size limit
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'name.unique' => 'The menu name must be unique.',
            'ingredients.string' => 'The ingredients must be a valid string.',
            'weight.integer' => 'The weight must be a number.',
            'weight.min' => 'The weight must be at least 1.',
            'price.integer' => 'The price must be a number.',
            'price.min' => 'The price must be at least 1.',
            'category_id.exists' => 'The selected category does not exist.',
            'photo.image' => 'The photo must be an image file.',
            'photo.mimes' => 'The photo must be in jpg, jpeg, png, gif, or webp format.',
            'photo.max' => 'The photo size must not exceed 2MB.',
        ];
    }
}
