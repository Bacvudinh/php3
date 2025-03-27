<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|string|max:255',
            'status'=>'required|boolean',
        ];
    }
    public function messages(){
        return[
            'name.required'=>'ten danh muc khong duoc de trong',
            'name.string'=>'ten danh muc phai la chuoi ki tu',
            'name.max'=>'ten danh muc toi da 255 ki tu',
            'status.required'=> 'trang thai khong bor trong',
            'status.boolean'=>'trang thai hoat dong/tam dung'


        ];
    }
}
