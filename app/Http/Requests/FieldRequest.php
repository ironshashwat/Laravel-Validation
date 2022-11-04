<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FieldRequest extends FormRequest
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
            'item_name' => 'bail|required|max:255',
            'sku_no'=>'required|alpha_num',
            'price'=>'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'item_name.required'=>'An Item Name is required to fill',
            'sku_no.required'=>'An SKU NO is cumpolsory to fill',
            'price.required'=>'It is important to fill the pricing details'
        ];
    }
}
