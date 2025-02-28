<?php

namespace App\Http\Requests\Clients;

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
            'name' => "required|min:3|max:50|",
            'last_name' => "required|min:3|max:50|",
            'second_last_name' => "required|min:3|max:50|",
            'email' => "required|min:5|max:50|",
            'phone' => "required|integer",
            'address_id' => "required|integer"
        ];
    }
}
