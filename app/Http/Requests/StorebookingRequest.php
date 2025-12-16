<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorebookingRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'room_id' => 'required|exists:rooms,id',
            'check_in_date' => 'required|date',  // add |after_or_equal:today   
            'check_out_date' => 'required|date|after:check_in_date',
        ];
    }
}
