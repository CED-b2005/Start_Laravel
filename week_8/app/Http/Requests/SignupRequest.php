<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'date' => 'required|date',
            'phone' => 'required|numeric',
            'web' => 'required|url',
            'address' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền tên cho đúng',
            'age.required' => 'Vui lòng nhập tuổi cho đúng',
            'date.required' => 'Vui lòng điền lại ngày tháng',
            'phone.required' => 'Vui lòng kiểm tra và điền lại số điện thoại',
            'web.required' => 'Vui lòng kiểm tra lại url web',
            'address.required' => 'Vui lòng nhập lạ địa chỉ',
        ];
    }
}