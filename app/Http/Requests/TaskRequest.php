<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
            'title' => 'required|unique|max:255',
            'description' => 'nullable|max:512',
            'status' => 'required|in:pending,doing,done',
            'priority' => 'required|in:low,medium,high',
            'due_data' => 'nullable|date'
        ];
    }
}
