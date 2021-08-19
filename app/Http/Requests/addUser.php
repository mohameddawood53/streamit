<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addUser extends FormRequest
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
            "name" => "required|string|max:255|regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/",
            "email" => "required|unique:users|string|email",
            "phone" => "required|unique:users|regex:/(01)[0-9]{9}/",
            "password" => "required|string|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed",
            "password_confirmation" => "required|same:password",
            "package" => "required|in:1,2,3",
            "role_id" => "required|in:1,2,3"
        ];
    }
}
