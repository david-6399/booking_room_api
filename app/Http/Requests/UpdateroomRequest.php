<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateroomRequest extends FormRequest
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
            // 'room_number' => 'sometimes|unique:rooms,room_number|max:10',
            'room_type_id' => 'sometimes|required|exists:room_types,id',
            'status' => 'sometimes|required|in:available,occupied,maintenance',
            'capacity' => 'sometimes|required|integer|min:1',
            'price_per_night' => 'sometimes|required|numeric|min:0',
        ];
    }

    public function messages(): array
    {
        return [
            'room_number.required' => 'Room number is required.',
            'room_number.unique' => 'Room number already taken .',
            'room_number.max' => 'Room number must not exceed 10 characters.',
            'room_type_id.required' => 'Room type is required.',
            'room_type_id.exists' => 'Selected room type does not exist.',
            'status.required' => 'Status is required.',
            'status.in' => 'Status must be one of the following: available, occupied, maintenance.',
            'capacity.required' => 'Capacity is required.',
            'capacity.integer' => 'Capacity must be an integer.',
            'capacity.min' => 'Capacity must be at least 1.',
            'price_per_night.required' => 'Price per night is required.',
            'price_per_night.numeric' => 'Price per night must be a number.',
            'price_per_night.min' => 'Price per night must be at least 0.',
        ];
    }
    
}
