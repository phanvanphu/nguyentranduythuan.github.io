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
            'title' => 'required',
            'images' => 'required|image',
            'description' => 'required',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập title',
            'title.unique' => 'Title đã tồn tại',
            'title.min' => 'Title được nhập tối thiểu 5 ký tự',
            'title.max' => 'Title được nhập tối đa 20 ký tự',
            'image.required' => 'Đây không phải là file hình',
            'description.required' => 'Vui lòng nhập description',
            'content.required' => 'Vui lòng nhập content'
        ];
    }
}
