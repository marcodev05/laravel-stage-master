<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => ['required', 'max:30'],
            'price' => ['required'],
            'quantity' => ['required'],
            'description' => ['required', 'max:255'],
        ];
    }





    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    // public function messages()
    // {
    //     return [
    //         'name.required' => 'A Name is required',
    //         'price.required' => 'A Price is required',
    //     ];
    // }
}