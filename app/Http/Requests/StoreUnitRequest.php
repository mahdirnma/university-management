<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnitRequest extends FormRequest
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
            'lesson_id' => 'required|numeric|exists:lessons,id',
            'course_id' => 'required|numeric|exists:courses,id',
            'professor_id' => 'required|numeric|exists:professors,id',
            'semester_id' => 'required|numeric|exists:semesters,id',
            'capacity' => 'required|numeric|between:1,100',
        ];
    }
}
