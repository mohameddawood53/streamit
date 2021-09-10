<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryAddRequest extends FormRequest
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
            "name_ar" => "required|max:255|unique:categories,name",
            "name_en" => "required|max:255|unique:categories,name",
            "main" => "sometimes|required",
            "sub" => "sometimes|required",
            "type" => "required|in:1,2,3"
        ];
    }
}
