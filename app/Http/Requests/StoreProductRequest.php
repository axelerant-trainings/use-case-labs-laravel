<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|max:255|unique:' . Product::class . ',name',
            'category_id' => 'required|integer|gt:0',
            'supplier_id' => 'required|integer|gt:0',
            'unit' => 'required|integer|gt:0',
            'price' => 'required|decimal:2',
        ];
    }
}
