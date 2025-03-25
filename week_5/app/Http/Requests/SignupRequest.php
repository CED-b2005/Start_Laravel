<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages()
    {
        return [
            'name.string' => 'Please, enter your name',
            'age.numeric' => 'Please, enter your age',
            'date.string' => 'Please, enter the date',
            'phone.numeric' => 'Please, check your phone number again',
            'web.string' => 'Please, check and enter characters again',
            'address.string' => 'Please, enter your address'
        ];
    }
}
