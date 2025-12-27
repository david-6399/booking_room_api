<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorehostelRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:20|max:1000',
            'slug' => 'nullable|string|unique:hostels,slug',
            'location' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'phone' => ['required','string','max:20','regex:/^(\+213|0)(5|6|7)[0-9]{8}$/'],
            'email' => 'required|email|max:255',
            'created_by' => 'required|exists:users,id',
        ];
    }
}
