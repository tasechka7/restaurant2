<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDrinksCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validation rules.
     */
    public function rules(): array
    {
        return [
            'name' => 'nullable|string|unique:drinks_categories,name'
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
            'name.unique' => 'A category with this name already exists.',
        ];
    }
}
