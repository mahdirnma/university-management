<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'student_number' => 'required|string|max_digits:10|min_digits:10|unique:students,student_number|numeric',
            'phone_number' => 'required|string|max_digits:11|min_digits:11|numeric',
            'field'=>'required|string|max:255|min:3',
            'level'=>'required|string|max:255|min:3',
        ];
    }
}
