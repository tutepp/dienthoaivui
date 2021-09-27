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
            'name' => 'required|alpha|max:255',
            'image' => 'required|image',
            'category_id' => 'required|integer',
            'type_id' => 'required'
        ];
    }

    public function messages ()
    {
        return [
            'name.required' => 'Ten khong duoc de trong',
            'name.alpha' => 'Ten chi chua chu cai',
            'name.max' => 'Ten toi da 255 ky tu',
            'image.required' => 'Anh khong duoc de trong',
            'category_id.required' => 'Category khong duoc de trong',
            'type_id.required' => 'Type chua chon'
        ];
    }
}
