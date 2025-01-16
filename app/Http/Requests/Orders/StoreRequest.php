<?php

namespace App\Http\Requests\Orders;

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
            'client_id' => "required|integer",
            'address_id' => "required|integer",
            'pizza_id' => "required|integer",
            'order_date' => "required",
            'order_total' => "required|decimal:2",
            'payment_method' => "required|min:5|max:50|"
        ];
    }
}
