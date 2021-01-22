<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            //
            "name" => 'required|max:255|unique:products',
            "description"=>'required',
            'price'=>'required|max:10',
            "stock"=>"required|max:6",
            "discount"=>"required|max:2",
        ];
    }



    public function messages()
    {
        return [
            'name.required'=>'Name is required',
            'description.required'=>'Detail is required',
            'price.required'=>'Price is required',
            'stock.required'=>'Stock is required',
            'discount'=>'Discount is required'
        ];
    }
}
