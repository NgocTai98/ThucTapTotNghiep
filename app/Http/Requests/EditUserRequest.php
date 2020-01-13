<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
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
            'email'=>'required|min:5|email|unique:users,email,'.$this->idUser,
            'password'=>'required|min:5',
            'full'=>'required',
            'address'=>'required',
            'phone'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'Email không được để trống',
            'email.min'=>'Email không được nhỏ hơn 5 ký tự',
            'email.email'=>'Email phải ở dạng @gmail.com',
            'email.unique'=>'Email này đã tồn tại',
            'password.required'=>'password không được để trống',
            'password.min'=>'password không được nhỏ hơn 5 ký tự',
            'full.required'=>'Tên không được để trống',
            'address'=>'Địa chỉ không được để trống',
            'phone'=>'Số điện thoại không được để trống'
        ];
    }
}
