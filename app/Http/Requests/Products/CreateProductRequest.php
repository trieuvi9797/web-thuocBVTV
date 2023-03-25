<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'image' => 'nullable|required|image|mimes:png,jpg,jpeg|max:2048',
            'description' => 'require',
            'sale' => 'required',
            'price' => 'required',
            'category_ids' => 'required',
            'quantity' => 'required',
        ];
    }
}
