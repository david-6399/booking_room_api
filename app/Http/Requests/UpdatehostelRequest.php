<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatehostelRequest extends FormRequest
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
            'name' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string|min:20|max:1000',
            'slug' => ['nullable','string',Rule::unique(' hostels ', ' slug ')->ignore($this->hostel)],
            'location' => 'sometimes|required|string|max:255',
            'status' => 'sometimes|required|in:active,inactive',
            'phone' => ['sometimes','required','string','max:20','regex:/^(\+213|0)(5|6|7)[0-9]{8}$/'],
            'email' => 'sometimes|required|email|max:255',
        ];
    }
}
