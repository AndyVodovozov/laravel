<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    //protected $redirectRoute = 'users.index';

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user.name' => ['required', 'string', 'max:255'],
            //'age' => ['required', 'numeric', 'max:12'],
            //'image' => ['required', 'image', 'mimes:jpg,gif,svg', 'max:2048'],
            'user.email' => ['bail', 'required', 'email:rfc,dns', 'unique:users,email'],
        ];
    }

    public function messages()
    {
        return [
            'user.name.required' => 'Имя обязательно',
        ];
    }

    public function attributes()
    {
        return [
            'user.email' => 'Электронный адрес',
        ];
    }
}
