<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=> 'required|string',
            'email'=> 'required|string|email|unique:users',
            'role'=>'required|integer',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Это поля необходимо для заполения',
            'name.string' => 'Имя должно быть строкой',
            'email.required' => 'Это поля необходимо для заполения',
            'email.string' => 'Почта должна быть строкой',
            'email.email' => 'Ваша почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email уже существует',
            'role.required' => 'Это поля необходимо для заполения',
            'role.integer' => 'Роль не должен быть таким',
        ] ;
    }
}
