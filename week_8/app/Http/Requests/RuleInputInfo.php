<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleInputInfo extends FormRequest
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
            'name' => 'required | max:255 | string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'adress' => 'string'
        ];
    }

    public function messages()
    { 
        return[
        'name.string' => 'Vui long nhap ten dung',
        'age.numeric' => 'Vui long nhap tuoi dung',
        'date.string' => 'Vui long dien lai ngay thang',
        'phone.numeric' => 'Vui long kiem tra lai so dien thoai',
        'web.tring' => 'Vui long kiem tra lai ky tu',
        'adress.string' => 'Vui long nhap lai dia chi'
        ];
    }
}
