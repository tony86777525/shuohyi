<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
{
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|between:1,100',
            'sex' => 'required|string|between:0,1',
            'phone' => 'required|string|between:3,255',
            'email' => 'required|email',
            'contact' => 'required|string|between:3,500',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages(): array
    {
        return [
            'captcha' => '驗證碼錯誤, 請重新輸入',
        ];
    }
}
