<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProfessorRequest extends FormRequest
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
            'name' => 'required|string|max:255|min:3',
            'personal_code' => 'required|string|numeric|unique:professors,personal_code',
            'teaching_field' => 'required|string|max:255|min:3',
            'phone_number' => 'required|string|numeric|max_digits:11|min_digits:11',
        ];
    }
}
