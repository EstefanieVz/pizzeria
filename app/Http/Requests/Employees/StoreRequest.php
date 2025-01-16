<?php

namespace App\Http\Requests\Employees;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'name_e' => "required|min:5|max:50|",
            'last_name_e' => "required|min:5|max:50|",
            'second_last_name_e' => "required|min:5|max:50|",
            'position' => "required|min:5|max:50|",
            'salary' => "required|decimal:2",
            'hiring_date' => "required"
        ];
    }
}
