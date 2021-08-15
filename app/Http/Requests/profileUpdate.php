<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profileUpdate extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'old_password'=>'required|min:8|max:40',
            'new_password'=>'required|min:8|max:40'
        ];
    }

    public function attributes()
    {
        return [
            'name'              => 'Ad',
            'email'             => 'Email',
            'old_password'      => 'Köhnə şifrə',
            'new_password'      => 'Yeni şifrə'
        ];
    }
}
