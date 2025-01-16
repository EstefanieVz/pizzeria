<?php

namespace App\Http\Requests\Pizzas;

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
            'name' => "required|min:5|max:50|",
            'description' => "required|min:5|max:50|",
            'image' => "required|min:5|max:50|",
            'unit_price' => "required|decimal:2"
        ];
    }
}
