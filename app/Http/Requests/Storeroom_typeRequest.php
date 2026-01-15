<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Storeroom_typeRequest extends FormRequest
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
            'name' => 'required|string|max:255|unique:room_types,name',
            'description' => 'nullable|string',
        ];
    }

    public function messages():array
    {
        return [
            'name.required' => 'The room type name is required.',
            'name.string' => 'The room type name must be a string.',
            'name.max' => 'The room type name may not be greater than 255 characters.',
            'name.unique' => 'The room type name has already been taken.',
            'price_per_night.required' => 'The price per night is required.',
            'price_per_night.numeric' => 'The price per night must be a numeric value.',
            'price_per_night.min' => 'The price per night must be at least 0.',
            'description.string' => 'The description must be a string.',
        ];
    }
}
