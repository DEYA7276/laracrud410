<?php

namespace App\Http\Requests\Products;

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
            'nameProducts' =>"required|min:5|max:50|", 
            'stock' =>"required|integer",
            'unit_price' =>"required|integer",
            'imagen' =>"required",
            'brand_id' =>"required", 
        ];
    }
}
