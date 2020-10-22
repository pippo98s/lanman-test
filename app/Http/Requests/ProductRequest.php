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
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'name' => 'required|min:1|max:10',
            'desc' => 'required|min:5|max:100',
            'price' => 'required|numeric|min:0|max:9999',
        ];
    }
}
