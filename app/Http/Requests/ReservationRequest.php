<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'regex:/^[\pL\s]+$/u'],
            'phone' => 'required|regex:/^\+?\d{7,}$/',
            'number_of_people' => 'required|integer|min:1', // Валидация для количества гостей
            'message' => 'nullable|string',
            'reservation_type' => 'required|in:Business Lunch,Dinner,Event,Private Event',
            'date' => 'required|date',
            'time' => 'required|string',
            'status' => 'nullable', // Исправлено с 'nullabble' на 'nullable'
        ];
    }

    /**
     * Custom error messages.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your name.',
            'name.min' => 'Your name must be at least 5 characters long.',
            'phone.required' => 'Please provide a phone number.',
            'phone.regex' => 'Please provide a valid phone number.',
            'number_of_people.required' => 'Please specify the number of people for the reservation.',
            'number_of_people.integer' => 'The number of people must be an integer.',
            'number_of_people.min' => 'The number of people must be at least 1.',
            'reservation_type.required' => 'Please select a reservation type.',
            'reservation_type.in' => 'The reservation type must be one of the following: Business Lunch,Dinner,Event,Private Event.',
            'date.required' => 'Please provide a reservation date.',
            'date.date' => 'Please provide a valid date.',
            'time.required' => 'Please provide a reservation time.',
            'time.string' => 'The reservation time must be a valid string.',
        ];
    }
}
